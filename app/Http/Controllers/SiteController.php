<?php

namespace App\Http\Controllers;

use App\Projects;
use App\ProjectsImages;
use App\Products;
use App\ProductsImages;
use Illuminate\Http\Request;

class SiteController extends Controller
{

    public function index()
    {
        return view('frontend.index');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function services()
    {
        return view('frontend.services');
    }

    public function image_gallery()
    {
        return view('frontend.image_gallery');
    }

    public function video_gallery()
    {
        return view('frontend.video_gallery');
    }


    public function contact()
    {
       return view('frontend.contact');
    }

    public function enquiry()
    {
        return view('frontend.enquiry');
    }

    public function projects(){
        $projects = Projects::where('id','!=',0)->with('images')->get();
        return view('frontend.projects',compact('projects'));
    }

    public function products($id){
        return redirect()->route('product_details',['id' => $id]);
    }

    public function project_details($id){
        $project = Projects::where('id',$id)->with('images')->first();
        return view('frontend.project_details',compact('project'));
    }

    public function product_details($id){
        if($id != 0){
            $product = Products::where('id',$id)->with('images')->first();
        }
        else{
            $product = Products::where('id','!=',0)->with('images')->first();
        }
        $products = Products::where('id','!=',0)->with('images')->get();
        return view('frontend.product_details',compact('product','products'));
    }
}
