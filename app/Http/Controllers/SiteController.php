<?php

namespace App\Http\Controllers;

use App\About;
use App\Enquiry;
use App\Mail\QuickEnquiry;
use App\Projects;
use App\ProjectsImages;
use App\Products;
use App\ProductsImages;
use App\Gallery;
use App\Slider;
use App\Testimonials;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class SiteController extends Controller
{

    public function index()
    {
        $testimonials = Testimonials::all();
        $sliders = Slider::all();
        $projects = Projects::where('id','!=',0)->with('images')->get();
        $about    =   About::first();
        return view('frontend.index',compact(['sliders','testimonials','projects','about']));
    }

    public function about()
    {
        $testimonials = Testimonials::all();
        return view('frontend.about',compact('testimonials'));
    }

    public function services()
    {
        $testimonials = Testimonials::all();
        return view('frontend.services',compact('testimonials'));
    }

    public function image_gallery()
    {
        $items = Gallery::where('type','image')->get();
        return view('frontend.image_gallery',compact('items'));
    }

    public function video_gallery()
    {
        $items = Gallery::where('type','video')->get();
        return view('frontend.video_gallery',compact('items'));
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

    public function enquirySave(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'        => 'required',
        ]);
        if ($validator->fails())
        {
            return back()->withErrors($validator->errors())->withInput($request->all());
        }
//        return $request->all();

//        Mail::to('jaisonjebin@gmail.com')->send(new QuickEnquiry($request));
        $enquiry    =   new Enquiry();
        $enquiry->name  =   $request->name;
        $enquiry->phone  =   $request->phone;
        $enquiry->email  =   $request->email;
        $enquiry->company  =   $request->company;
        $enquiry->meta  =   json_encode($request->all());
        $enquiry->type  =   $request->type;
        $enquiry->save();
        return back();
    }
}
