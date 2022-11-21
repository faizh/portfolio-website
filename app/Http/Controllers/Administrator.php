<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Administrator extends Controller
{
    public function index()
    {
        return view('admin/dashboard');
    }

    public function navigation()
    {
        $data = DB::table('t_nav_menu')->get();

        return view('admin/pages/navigation', compact('data'));
    }

    public function createNavigation(Request $request)
    {
        $nav_name   = $request->input('nav_name');
        $nav_href   = $request->input('href');

        DB::table('t_nav_menu')->insert(
            [
                'display_name'  => $nav_name,
                'href'          => $nav_href,
            ]
        );
        
        return redirect('/admin/menu/navigation');
    }

    public function editNavigation(Request $request)
    {
        $postData   = $request->input();

        $navID      = $postData['nav_id'];
        $navName    = $postData['nav_name'];
        $navHref    = $postData['nav_href'];

        $arrUpdate  = array(
            "display_name"  => $navName,
            "href"          => $navHref
        );

        $affected = DB::table('t_nav_menu')
              ->where('nav_menu_id', $navID)
              ->update($arrUpdate);

        if($affected > 0){
            $response   = "Successfuly Update";
            $toastNotif = "<script>toastr.success('".$response."')</script>";
        }else{
            $response   = "No Rows Updated";
            $toastNotif = "<script>toastr.info('".$response."')</script>";
        }

        return redirect(route('navigations'))->with('status', $toastNotif);
    }

    public function deleteNavigation($navId)
    {
        $affected = DB::table('t_nav_menu')
                ->where('nav_menu_id', $navId)
                ->delete();

        if($affected > 0){
            $response   = "Successfuly Delete";
            $toastNotif = "<script>toastr.success('".$response."')</script>";
        }else{
            $response   = "No Rows Deleted";
            $toastNotif = "<script>toastr.info('".$response."')</script>";
        }

        return redirect(route('navigations'))->with('status', $toastNotif);
    }

    public function hero()
    {
        echo "hero menu";
    }

    public function about()
    {
        echo "about";
    }

    public function getNavDetails(Request $request)
    {
        $navID = $request->input("nav_id");

        $navDetails = DB::table('t_nav_menu')->where('nav_menu_id', $navID)->first();
        $arrDetail  = array(
            "navID"     => $navDetails->nav_menu_id,
            "navName"   => $navDetails->display_name,
            "navHref"   => $navDetails->href
        );

        return response()->json($arrDetail);

    }
}
