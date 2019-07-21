<?php

namespace App\Http\Controllers;

use App\Gallery;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;
use VideoThumbnail;

class GalleryController extends Controller
{

    public function imageGallery()
    {
        $items = Gallery::where('type','image')->get();
        return view('backend.imageGallery',compact('items'));
    }

    public function addImage(Request $request)
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
            $gallery                   = new Gallery();
            $gallery->title_en         = $request->title_en;
            $gallery->description_en   = $request->description_en;
            $gallery->title_ar         = $request->title_ar;
            $gallery->description_ar   = $request->description_ar;

            if($file = $request->file('files'))
            {
                $path = $file->store('gallery', 'public_uploads');
                $filename = uniqid();

                $extension = $file->getClientOriginalExtension();

                // read image from temporary file
                $img250 = Image::make($file);
                // resize image
                $img250->resize(370, 250);
                // save image
                $img250->save('uploads/gallery/' . $filename . '_250x250.'.$extension);

                // read image from temporary file
                $img500 = Image::make($file);
                // resize image
                $img500->resize(500, 500);
                // save image
                $img500->save('uploads/gallery/' . $filename . '_500x500.'.$extension);

                $gallery->file       = $path;
                $gallery->thumb_250  = 'gallery/'.$filename.'_250x250.'.$extension;
                $gallery->thumb_500  = 'gallery/'.$filename.'_500x500.'.$extension;
                $gallery->type       = 'image';
            }

            $gallery->status     = 1;
            $gallery->added_by   = 1;
            $gallery->save();
        }

        return redirect()->route('imageGallery');
    }

    public function deleteImage($id)
    {
        Gallery::where('id',$id)->delete();
        return redirect()->route('imageGallery');
    }


    public function videoGallery()
    {
        $items = Gallery::where('type','video')->get();
        return view('backend.videoGallery',compact('items'));
    }

    public function addVideo(Request $request)
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
            $gallery                   = new Gallery();
            $gallery->title_en         = $request->title_en;
            $gallery->description_en   = $request->description_en;
            $gallery->title_ar         = $request->title_ar;
            $gallery->description_ar   = $request->description_ar;

            if($file = $request->file('files'))
            {
                $path = $file->store('gallery', 'public_uploads');
                $filename = uniqid();

                $extension = $file->getClientOriginalExtension();

                VideoThumbnail::createThumbnail(public_path('uploads/'.$path), public_path('uploads/gallery/'), $filename . '_250x250.'.$extension, 2, 250, 250);
                VideoThumbnail::createThumbnail(public_path('uploads/'.$path), public_path('uploads/gallery/'), $filename . '_500x500.'.$extension, 2, 500, 500);

                $gallery->file       = $path;
                $gallery->thumb_250  = 'gallery/'.$filename.'_250x250.'.$extension;
                $gallery->thumb_500  = 'gallery/'.$filename.'_500x500.'.$extension;
                $gallery->type       = 'video';
            }

            $gallery->status     = 1;
            $gallery->added_by   = 1;
            $gallery->save();
        }

        return redirect()->route('videoGallery');
    }

    public function deleteVideo($id)
    {
        Gallery::where('id',$id)->delete();
        return redirect()->route('videoGallery');
    }
}
