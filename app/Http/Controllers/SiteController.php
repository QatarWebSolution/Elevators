<?php

namespace App\Http\Controllers;

use App\Projects;
use App\ProjectsImages;
use App\Products;
use App\ProductsImages;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.home');
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
       //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        //
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
