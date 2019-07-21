<?php

namespace App\Http\Controllers;

use App\About;
use App\Slider;
use App\Testimonials;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonials::all();
        return view('backend.listTestimonials',compact('testimonials'));
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
        $validator = Validator::make($request->all(), [
            'name_en'        => 'required',
            'name_ar'        => 'required',
            'company_en'     => 'required',
            'company_ar'     => 'required',
            'comments_en' => 'required',
            'comments_ar' => 'required'
        ]);
        if ($validator->fails())
        {
            var_dump($request->all()); exit();
            return back()->withErrors($validator->errors())->withInput($request->all());
        }
        else
        {
            if($request->id!=''||$request->id!=null)
            {
                $test    =   Testimonials::where('id',$request->id)->first();
            }
            else
            {
                $test    =   new Testimonials();
            }
            //English
            $test->name_en        =   $request->name_en;
            $test->company_en     =   $request->company_en;
            $test->description_en =   $request->comments_en;
            $test->meta_en        =   json_encode($request->meta_en);
            //Arabic
            $test->name_ar        =   $request->name_ar;
            $test->company_ar     =   $request->company_ar;
            $test->description_ar =   $request->comments_ar;
            $test->meta_ar        =   json_encode($request->meta_ar);

            $test->status        = 1;
            $test->added_by      = 1;
            $test->save();

            if($file = $request->file('files'))
            {
                $path = $file->store('testimonials', 'public_uploads');
                $filename = uniqid();

                // read image from temporary file
                $img250 = Image::make($file);
                // resize image
                $img250->resize(250, 250);
                // save image
                $img250->save('uploads/testimonials/'.$filename.'_250x250.jpg');

                // read image from temporary file
                $img500 = Image::make($file);
                // resize image
                $img500->resize(500, 500);
                // save image
                $img500->save('uploads/testimonials/'.$filename.'_500x500.jpg');

                $test->file       = $path;
                $test->thumb_250  = 'testimonials/'.$filename.'_250x250.jpg';
                $test->thumb_500  = 'testimonials/'.$filename.'_500x500.jpg';
                $test->save();
            }

            return redirect()->route('listTestimonials');

        }
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
        $testimonials = Testimonials::where('id',$id)->first();
        return view('backend.editTestimonials',compact('testimonials'));
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
        Testimonials::where('id',$id)->delete();
        return redirect()->route('listTestimonials');
    }

    public function addSlider()
    {
        $sliders = Slider::all();
        return view('backend.addSlider',compact('sliders'));
    }

    public function saveSlider(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'image'        => 'required|image',
        ]);
        if ($validator->fails())
        {
            return back()->withErrors($validator->errors())->withInput($request->all());
        }
        else
        {
            if($request->id!=''||$request->id!=null)
            {
                $test    =   Slider::where('id',$request->id)->first();
            }
            else
            {
                $test    =   new Slider();
            }
            //English
            $test->title_en        =   $request->title_en;
            $test->link_en     =   $request->link_en;
            $test->description_en =   $request->description_en;

            //Arabic
            $test->title_ar        =   $request->title_ar;
            $test->link_ar     =   $request->link_ar;
            $test->description_ar =   $request->description_ar;


            $test->status        = 1;
            $test->added_by      = Auth::user()->id;
            $test->save();

            if($file = $request->file('image'))
            {
                $path = $file->store('sliders', 'public_uploads');
                $test->image       = $path;
                $test->save();
            }

            return redirect()->route('listSlider');

        }
    }

    public function listSlider()
    {
        $sliders = Slider::all();
        return view('backend.addSlider',compact('sliders'));
    }

    public function deleteSlider($id)
    {
        Slider::where('id',$id)->delete();
        return redirect()->route('listSlider');
    }

    public function addAbout()
    {
        $test    =   About::first();
        return view('backend.addAbout')->with('about',$test);
    }

    public function saveAbout(Request $request)
    {
        $validator = Validator::make($request->all(), [
//            'image'        => 'required|image',
            'whoweare_en'        => 'required',
            'description_en'        => 'required',
        ]);
        if ($validator->fails())
        {
            return back()->withErrors($validator->errors())->withInput($request->all());
        }
        else
        {
            if($request->id!=''||$request->id!=null)
            {
                $test    =   About::where('id',$request->id)->first();
            }
            else
            {
                $test    =   new About();
            }
            //English
            $test->whoweare_en        =   $request->whoweare_en;
            $test->sidesection_en     =   $request->sidesection_en;
            $test->description_en =   $request->description_en;

            //Arabic
            $test->whoweare_ar        =   $request->whoweare_ar;
            $test->sidesection_ar     =   $request->sidesection_ar;
            $test->description_ar =   $request->description_ar;


            $test->status        = 1;
            $test->added_by      = Auth::user()->id;
            $test->save();

            if($file = $request->file('image'))
            {
                $path = $file->store('about', 'public_uploads');
                $test->image       = $path;
                $test->save();
            }

            return redirect()->route('addAbout');

        }
    }
}
