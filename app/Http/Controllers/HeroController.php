<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Illuminate\Http\Request;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Hero::all();

        return view('admin/pages/hero', compact('data'));
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
        $hero = new Hero();
        $hero->attribute_name = $request->attr_name;
        $hero->attribute_value = $request->attr_value;

        if ($hero->save()){
            $response   = "Successfuly Create";
            $toastNotif = "<script>toastr.success('".$response."')</script>";
        }else{
            $response   = "Create Failed";
            $toastNotif = "<script>toastr.info('".$response."')</script>";
        }

        return redirect(route('admin.hero.all'))->with('status', $toastNotif);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hero  $hero
     * @return \Illuminate\Http\Response
     */
    public function show($attrId)
    {
        $data = Hero::find($attrId);

        $dataDetail = array(
            'attrId'   => $data->id,
            'attrName' => $data->attribute_name,
            'attrValue'    => $data->attribute_value
        );

        return response()->json($dataDetail);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hero  $hero
     * @return \Illuminate\Http\Response
     */
    public function edit(Hero $hero)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hero  $hero
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $attrId)
    {
        $postData       = $request->input();

        $attrName       = $postData['attr_name'];
        $attrValue      = $postData['attr_value'];

        $hero = Hero::find($attrId);
        $hero->attribute_name = $attrName;
        $hero->attribute_value = $attrValue;

        if($hero->save()){
            $response   = "Successfuly Update";
            $toastNotif = "<script>toastr.success('".$response."')</script>";
        }else{
            $response   = "No Rows Updated";
            $toastNotif = "<script>toastr.info('".$response."')</script>";
        }

        return redirect(route('admin.hero.all'))->with('status', $toastNotif);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hero  $hero
     * @return \Illuminate\Http\Response
     */
    public function destroy($attrId)
    {
        $hero = Hero::find($attrId);

        if($hero->delete()){
            $response   = "Successfuly Delete";
            $toastNotif = "<script>toastr.success('".$response."')</script>";
        }else{
            $response   = "Delete failed";
            $toastNotif = "<script>toastr.info('".$response."')</script>";
        }

        return redirect(route('admin.hero.all'))->with('status', $toastNotif);
    }
}
