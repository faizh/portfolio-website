<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Resume::all();

        return view('admin/pages/resume', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $resume = new Resume();

        $resume->attribute_name     = $request->attr_name;
        $resume->attribute_value    = $request->attr_value;

        if ($resume->save()) {
            $response   = "Successfuly Created";
            $toastNotif = "<script>toastr.success('".$response."')</script>";
        }else {
            $response   = "Create Failed";
            $toastNotif = "<script>toastr.danger('".$response."')</script>";
        }

        return redirect()->route('admin.resume.all')->with('status', $toastNotif);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Resume  $resume
     * @return \Illuminate\Http\Response
     */
    public function show($attrId)
    {
        $resume = Resume::find($attrId);

        $arrData = array(
            'attrId'    => $resume->id,
            'attrName'  => $resume->attribute_name,
            'attrValue' => $resume->attribute_value
        );

        return response()->json($arrData);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Resume  $resume
     * @return \Illuminate\Http\Response
     */
    public function edit(Resume $resume)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Resume  $resume
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $attrId)
    {
        $resume = Resume::find($attrId);

        $resume->attribute_name     = $request->attr_name;
        $resume->attribute_value    = $request->attr_value;

        if ($resume->save()) {
            $response   = "Successfuly Update";
            $toastNotif = "<script>toastr.success('".$response."')</script>";
        }else {
            $response   = "Delete Failed";
            $toastNotif = "<script>toastr.danger('".$response."')</script>";
        }

        return redirect()->route('admin.resume.all')->with('status', $toastNotif);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Resume  $resume
     * @return \Illuminate\Http\Response
     */
    public function destroy($attrId)
    {
        $resume = Resume::find($attrId);
        
        if ($resume->delete()) {
            $response   = "Successfuly Delete";
            $toastNotif = "<script>toastr.success('".$response."')</script>";
        }else{
            $response   = "Delete Failed";
            $toastNotif = "<script>toastr.danger('".$response."')</script>";
        }

        return redirect()->route('admin.resume.all')->with('status', $toastNotif);
    }
}
