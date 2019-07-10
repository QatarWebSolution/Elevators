<?php

namespace App\Http\Controllers;

use App\Products;
use App\ProductsImages;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Products::where('id','!=',0)->with('images')->get();
        return view('backend.listProducts',compact('products'));
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
            'title_en' => 'required',
        ]);
        if ($validator->fails())
        {
            return back()->withErrors($validator->errors())->withInput($request->all());
        }
        else
        {
            if($request->id!=''||$request->id!=null)
            {
                $product    =   Products::where('id',$request->id)->first();
            }
            else
            {
                $product    =   new Products();
            }
            //English
            $product->title_en         =   $request->title_en;
            $product->description_en   =   $request->description_en;
            $product->capacity_en      =   $request->capacity_en;
            $product->rated_speed_en   =   $request->rated_speed_en;
            $product->travel_height_en =   $request->travel_height_en;
            $product->meta_en          =   json_encode($request->meta_en);

            //Arabic
            $product->title_ar         =   $request->title_ar;
            $product->description_ar   =   $request->description_ar;
            $product->capacity_ar      =   $request->capacity_ar;
            $product->rated_speed_ar   =   $request->rated_speed_ar;
            $product->travel_height_ar =   $request->travel_height_ar;
            $product->meta_ar =   json_encode($request->meta_ar);

            $product->status =   1;
            $product->added_by =   1;
            $product->save();

            if(($request->id!=''||$request->id!=null)&&($request->file_ids!=''||$request->file_ids!=null))
            {
                $product_files    =   ProductsImages::where('project_id',$request->id)->whereIn('id',$request->file_ids)->update(['deleted_at' => Carbon::now()]);
            }

            $product_files  =   new ProductsImages();

            if($files = $request->file('files'))
            {
                foreach($files as $file){
                    $path = $file->store('products', 'public_uploads');
                    $filename = uniqid();

                    // read image from temporary file
                    $img250 = Image::make($file);
                    // resize image
                    $img250->resize(250, 250);
                    // save image
                    $img250->save('uploads/products/'.$filename.'_250x250.jpg');

                    // read image from temporary file
                    $img500 = Image::make($file);
                    // resize image
                    $img500->resize(500, 500);
                    // save image
                    $img500->save('uploads/products/'.$filename.'_500x500.jpg');

                    $product_files             = new ProductsImages();
                    $product_files->file       = $path;
                    $product_files->thumb_250  = 'products/'.$filename.'_250x250.jpg';
                    $product_files->thumb_500  = 'products/'.$filename.'_500x500.jpg';
                    $product_files->product_id = $product->id;
                    $product_files->type       = 'image';
                    $product_files->status     = 1;
                    $product_files->added_by   = 1;
                    $product_files->save();
                }
            }

            return redirect()->route('listProducts');

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
        $product = Products::where('id',$id)->with('images')->first();
        return view('backend.editProducts',compact('product'));
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
        Products::where('id',$id)->delete();
        ProductsImages::where('product_id',$id)->delete();
        return redirect()->route('listProducts');
    }
}
