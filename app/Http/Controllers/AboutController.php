<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = About::all();

        return view('admin/pages/about', compact('data'));
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
        $about                      = new About();
        $about->attribute_name      = $request->attr_name;
        $about->attribute_value     = $request->attr_value;

        if ($about->save()) {
            $response   = "Successfuly Create";
            $toastNotif = "<script>toastr.success('".$response."')</script>";
        }else {
            $response   = "Create Failed";
            $toastNotif = "<script>toastr.alert('".$response."')</script>";
        }

        return redirect()->route('admin.about.all')->with("status", $toastNotif);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show($attrId)
    {
        $data = About::find($attrId);

        $arrData = array(
            "attrId"    => $data->id,
            "attrName"  => $data->attribute_name,
            "attrValue" => $data->attribute_value
        );

        return response()->json($arrData);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $attrId)
    {
        $about = About::find($attrId);

        $about->attribute_name = $request->attr_name;
        $about->attribute_value = $request->attr_value;

        if($about->save()){
            $response   = "Successfuly Update";
            $toastNotif = "<script>toastr.success('".$response."')</script>";
        }else{
            $response   = "No Rows Updated";
            $toastNotif = "<script>toastr.info('".$response."')</script>";
        }

        return redirect(route('admin.about.all'))->with('status', $toastNotif);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy($attrId)
    {
        $about = About::find($attrId);

        if ($about->delete()) {
            $response   = "Successfuly Delete";
            $toastNotif = "<script>toastr.success('".$response."')</script>";
        }else {
            $response   = "Delete Failed";
            $toastNotif = "<script>toastr.warning('".$response."')</script>";
        }

        return redirect()->route('admin.about.all')->with('status', $toastNotif);
    }
}
