<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Models\Career;
use App\Models\Messages;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    /**
     * @return\Illuminate\View\View
     */
    public function index()
    {
        $career = Career::all();

        return view('admin.career.managePosts',['career'=>$career]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.career.editPost');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $career = Career::updateOrcreate(
            [
                'id' => $request->inputId,
            ],
            [
                'post_name' => $request->post_name,
                'post_description' => $request->description,
                'deadline' => $request->deadline,
                'publication_status' => $request->publication_status,

            ]
        );

        return redirect()->back()->with('msg',$career? 'Post added successfully!': 'Failed to add post');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post =  Career::find($id);
        return view('admin.career.editPost',['post'=>$post]);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */

    public function destroy($id)
    {
        $career_deleted = Career::find($id)->delete();
        return redirect()
            ->back()
            ->with('msg', $career_deleted? 'Post deleted successfully!': 'Post delete failed.');
    }


    public function activateCareer(Request $request){
        $career_updated = Career::find($request->inputId)->update(['publication_status'=> $request->publication_status]);
        $act = $request->publication_status? "activated": "deactivated";
        return redirect()->back()->with('msg', $career_updated? 'Post '.$act.' successfully!': 'Operation failed!');
    }

    public function manageCV(){
        $messages = Messages::where('postID', "!=", null)->get();

        return view('admin.career.manageCV',['messages'=>$messages]);
    }
}
