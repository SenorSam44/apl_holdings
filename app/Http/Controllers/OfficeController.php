<?php

namespace App\Http\Controllers;

use App\OfficeLocation;
use Illuminate\Http\Request;

class OfficeController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $office_locations = OfficeLocation::all();

        return view('admin.office-location.manageOfficeLocation', [
            "offices" => $office_locations
        ]);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('admin.office-location.addOfficeLocation');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|void
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => ['required', 'min:3']
        ]);

        $officeLocation = OfficeLocation::updateOrcreate(
            [
                'name' => $request->name,
            ],
            [
                'latitude' => $request->latitude,
                'longitude' => $request->longitude,
            ]
        );

        if ($validateData) {
            if ($request->hasFile('image')) {

                $image = $request->file('image');
                $name = $request->name . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('../../public_html/'.'uploaded_images/office_locations');
                $image->move($destinationPath, $name);

                $totalPathName = 'uploaded_images/office_locations/' . $name;

                $officeLocation->logoUrl = $totalPathName;
                $officeLocation->save();

                return redirect()->back()->with('msg', 'Office Location added with image successfully!');
            }

            return redirect()->back()->with('msg', 'Review added without image successfully!');
        }
        return redirect()->back()->with('msg', 'Location add failed!');
    }


    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        return view('admin.office-location.addOfficeLocation', [
            'office' => OfficeLocation::where('id', $id)->first(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->inputId;
        $office = OfficeLocation::where('id', '=', $id)->first();
        unlink($office->logoUrl);
        $office->delete();

        return redirect()
            ->back()
            ->with('msg', 'Office location deleted successfully!');
    }
}
