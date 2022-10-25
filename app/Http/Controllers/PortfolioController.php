<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Portfolio::all();
        
        return view('admin/pages/portfolio', compact('data'));
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
        $portfolio = new Portfolio();

        $portfolio->attribute_name      = $request->attr_name;
        $portfolio->attribute_value     = $request->attr_value;

        if ($portfolio->save()) {
            $response   = "Successfuly Create";
            $toastNotif = "<script>toastr.success('".$response."')</script>";
        }else {
            $response   = "Create Failed";
            $toastNotif = "<script>toastr.success('".$response."')</script>";
        }

        return redirect()->route('admin.portfolio.all')->with('status', $toastNotif);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show($attrId)
    {
        $portfolio = Portfolio::find($attrId);

        $arrData = array(
            'attrId'    => $portfolio->id,
            'attrName'  => $portfolio->attribute_name,
            'attrValue' => $portfolio->attribute_value
        );

        return response()->json($arrData);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolio $portfolio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $attrId)
    {
        $portfolio = Portfolio::find($attrId);

        $portfolio->attribute_name  = $request->attr_name;
        $portfolio->attribute_value = $request->attr_value;

        if ($portfolio->save()) {
            $response   = "Successfuly Update";
            $toastNotif = "<script>toastr.success('".$response."')</script>";
        }else {
            $response   = "Update Failed";
            $toastNotif = "<script>toastr.danger('".$response."')</script>";
        }

        return redirect()->route('admin.portfolio.all')->with('status', $toastNotif);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy($attrId)
    {
        $portfolio = Portfolio::find($attrId);

        if ($portfolio->delete()) {
            $response   = "Successfuly Delete";
            $toastNotif = "<script>toastr.success('".$response."')</script>";
        }else {
            $response   = "Delete Failed";
            $toastNotif = "<script>toastr.danger('".$response."')</script>";
        }

        return redirect()->route('admin.portfolio.all')->with('status', $toastNotif);
    }
}
