<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Project;
use App\Models\Review;
use App\OfficeLocation;
use Cornford\Googlmapper\Mapper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $banners = DB::table('banners')
            ->select('banners.*')
            ->where('banners.publication_status', 1)
            ->get();
        $bannerVideoString = '';
        foreach ($banners as $banner) {
            $bannerVideoString .= ($banner->banner_video . ",");
        }
        $bannerVideoString = rtrim($bannerVideoString, ',');


        return view('frontend.welcome', [
            'banners' => $banners,
            'bannerVideoString' => $bannerVideoString,
        ]);
    }

    public function test()
    {
        $banners = DB::table('banners')
            ->select('banners.*')
            ->get();
        $bannerVideoString = '';
        foreach ($banners as $banner) {
            $bannerVideoString .= ($banner->banner_video . ",");
        }
        $bannerVideoString = rtrim($bannerVideoString, ',');

        return view('frontend.single.about_us', [
            'banners' => $banners,
            'bannerVideoString' => $bannerVideoString,
        ]);
    }

    public function banners()
    {
        $banners = DB::table('banners')
            ->select('banners.*')
            ->get();
        return view('frontend.banners', ['banners' => $banners]);
    }

    public function categories()
    {
        $categories = DB::table('categories')
            ->select('categories.*')
            ->get();
        return view('frontend.manages.categories', ['categories' => $categories]);
    }

    public function projects(Request $request)
    {
//        dd($request->projecttype);
        $projects = DB::table('categories')
            ->join('projects', 'categories.id', '=', 'projects.category_id')
            ->join('projects_images', 'projects.id', '=', 'projects_images.project_id')
            ->select('projects.*', 'projects_images.*', 'categories.category_name')
            ->where('projects.publication_status', '=', '1')
            ->where('categories.publication_status', '=', '1')
            ->where(function ($query) use ($request) {
                if (isset($request->projecttype)) {
                    $query->where('categories.category_name', $request->projecttype);
                } elseif (isset($request->isnew) && $request->isnew) {
                    $query->orderBy('created_at');
                } elseif (isset($request->onsite) && $request->onsite) {
                    $query->orderByDesc('created_at');
                }
            })
            ->get();

        foreach ($projects as $project) {
            $address = explode(',', $project->address);
            $address_part = count($address);
            if ($address_part > 1) {
                $short_address = $address[count($address) - 2] . ", " . $address[count($address) - 1];
            } else {
                $short_address = $address[count($address) - 1];
            }

            $project->short_address = $short_address;
        }
        $categories = Category::select('categories.category_name')
            ->join('projects', 'categories.id', 'projects.category_id')
            ->where('projects.publication_status', '=', '1')
            ->where('categories.publication_status', '=', '1')
            ->distinct()
            ->get();

        return view('frontend.manages.projects', [
            'projects' => $projects,
            'categories' => $categories,
        ]);
    }

    public function singleProject($id)
    {
        $project = DB::table('categories')
            ->join('projects', 'categories.id', '=', 'projects.category_id')
            ->join('projects_images', 'projects.id', '=', 'projects_images.project_id')
            ->select('projects.*', 'projects_images.*', 'categories.category_name')
            ->where('projects.publication_status', '=', '1')
            ->where('categories.publication_status', '=', '1')
            ->where('projects.id', '=', $id)
            ->first();
//        dd($project);
        $address = explode(',', $project->address);
        $address_part = count($address);
        if ($address_part > 1) {
            $short_address = $address[count($address) - 2] . ", " . $address[count($address) - 1];
        } else {
            $short_address = $address[count($address) - 1];
        }

        $project->short_address = $short_address;

        $project_images_string = '';
        for ($i = 1; $i < 13; $i++) {
            $tempvar = 'project_image' . $i;
            if (strlen($project->$tempvar) > 2) {
                $project_images_string .= ('/' . $project->$tempvar . ',');
            }
        }
        $project_images_string = rtrim($project_images_string, ',');

        $more_projects = DB::table('categories')
            ->join('projects', 'categories.id', '=', 'projects.category_id')
            ->join('projects_images', 'projects.id', '=', 'projects_images.project_id')
            ->select('projects.*', 'projects_images.*', 'categories.category_name')
            ->where('projects.category_id', '=', $project->category_id)
            ->where('projects.publication_status', '=', '1')
            ->where('categories.publication_status', '=', '1')
            ->where('projects.id', '!=', $id)
            ->get();

        return view('frontend.single.project', [
            'project' => $project,
            'project_images_string' => $project_images_string,
            'more_projects' => $more_projects,
        ]);
    }

    public function members()
    {
        $members = DB::table('members')
            ->select('members.*')
            ->where('members.publication_status', 1)
            ->get();
        return view('frontend.manages.members', ['members' => $members]);
    }

    public function services()
    {
        $services = DB::table('services')
            ->select('services.*')
            ->get();
        return view('frontend.manages.services', ['services' => $services]);
    }

    public function news()
    {
        $news = DB::table('news')
            ->select('news.*')
            ->where('news.publication_status', 1)
            ->paginate(12);

        $projects = DB::table('categories')
            ->join('projects', 'categories.id', '=', 'projects.category_id')
            ->join('projects_images', 'projects.id', '=', 'projects_images.project_id')
            ->select('projects.*', 'projects_images.*', 'categories.category_name')
            ->where('projects.publication_status', '=', '1')
            ->where('categories.publication_status', '=', '1')
            ->get();
        $categories = Category::select('categories.category_name')
            ->join('projects', 'categories.id', 'projects.category_id')
            ->where('projects.publication_status', '=', '1')
            ->where('categories.publication_status', '=', '1')
            ->distinct()
            ->get();

        return view('frontend.manages.news', [
            'news' => $news,
            'projects' => $projects,
            'categories' => $categories,
        ]);
    }

    public function reviews()
    {
        $reviews = DB::table('reviews')
            ->select('reviews.*')
            ->get();
        return view('frontend.manages.reviews', ['reviews' => $reviews]);
    }


    ///SINGLE PAGE
    public function banner($id)
    {
        $banners = DB::table('banners')
            ->select('banners.*')
            ->where('banners.id', '=', $id)
            ->get();
        return view('frontend.single.banner', ['banners' => $banners]);
    }

    public function category($id)
    {
        $categories = DB::table('categories')
            ->select('categories.*')
            ->where('categories.id', '=', $id)
            ->get();

        return view('frontend.single.category', ['categories' => $categories]);
    }

    public function member($id)
    {
        $members = DB::table('members')
            ->join('categories', 'categories.id', '=', 'members.category_id')
            ->select('members.*', 'categories.*')
            ->where('members.id', '=', $id)
            ->get();
        return view('frontend.single.member', ['members' => $members]);
    }

    public function service($id)
    {
        $services = DB::table('services')
            ->select('services.*')
            ->where('services.id', '=', $id)
            ->get();
        return view('frontend.single.service', ['services' => $services]);
    }

    public function new($id)
    {
        $news = DB::table('news')
            ->select('news.*')
            ->where('news.id', '=', $id)
            ->get();
        return view('frontend.single.news', ['news' => $news]);
    }

    public function review($id)
    {
        $reviews = DB::table('reviews')
            ->select('reviews.*')
            ->where('reviews.id', '=', $id)
            ->get();
        return view('frontend.single.review', ['reviews' => $reviews]);
    }

    public function about()
    {
        $abouts = DB::table('abouts')->where('publication_status', 1)->get();
        $reviews = Review::where('publication_status', 1)->get();;
        return view('frontend.single.about_us', [
            'abouts' => $abouts,
            'reviews' => $reviews,
        ]);
    }

    public function contacts()
    {
        return view('frontend.single.contacts');
    }

    public function moreabout()
    {
        return view('frontend.single.moreabout');
    }


    //MISSION VISON GOAL PROFILE
    public function objectives()
    {
        return view('frontend.single.static.objectives');
    }

    public function missionvison()
    {
        return view('frontend.single.static.missionvison');
    }

    public function companyprofile()
    {
        return view('frontend.single.static.companyprofile');
    }

    //END MISSION VISON GOAL PROFILE


    public function floorplan()
    {
        return view('frontend.single.static.floorplan');
    }

    public function outdoor()
    {
        return view('frontend.single.static.outdoor');
    }

    public function indoor()
    {
        return view('frontend.single.static.indoor');
    }

    public function majorcomponents()
    {
        return view('frontend.single.static.majorcomponents');
    }

    public function diagnostic()
    {
        return view('frontend.single.static.diagnostic');
    }


    public function officeLocation()
    {

        $our_locations = OfficeLocation::all();

        return view('frontend.single.our_location', [
            'our_locations' => $our_locations,
        ]);
    }

    public function search()
    {
        $query_string = request()->q;
        $projects = Project::where('project_title', 'like', '%' . $query_string . '%')
            ->orWhere('address', 'like', '%' . $query_string . '%')
            ->get(['id as Id', 'project_title as Name']);

        foreach ($projects as $project){
            $project->Url = ('/projects/'.$project->Id);
        }

        $projects = $projects->toArray();

        return response()->json($projects);
    }
}
