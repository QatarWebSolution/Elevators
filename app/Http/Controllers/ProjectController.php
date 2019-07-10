<?php

namespace App\Http\Controllers;

use App\Projects;
use App\ProjectsImages;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Projects::all();
        return view('backend.listProjects',compact('projects'));
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
                $project    =   Projects::where('id',$request->id)->first();
            }
            else
            {
                $project    =   new Projects();
            }
            //English
            $project->title_en =   $request->title_en;
            $project->elevator_type_en =   $request->elevator_type_en;
            $project->building_type_en =   $request->building_type_en;
            $project->project_location_en =   $request->project_location_en;
            $project->start_date_en =   $request->start_date_en;
            $project->handover_date_en =   $request->handover_date_en;
            $project->project_status_en =   $request->project_status_en;
            $project->description_en =   $request->description_en;
            $project->meta_en =   json_encode($request->meta_en);
            //Arabic
            $project->title_ar =   $request->title_ar;
            $project->elevator_type_ar     =   $request->elevator_type_ar;
            $project->building_type_ar =   $request->building_type_ar;
            $project->project_location_ar =   $request->project_location_ar;
            $project->start_date_ar =   $request->start_date_ar;
            $project->handover_date_ar =   $request->handover_date_ar;
            $project->project_status_ar =   $request->project_status_ar;
            $project->description_ar =   $request->description_ar;
            $project->meta_ar =   json_encode($request->meta_ar);

            $project->status =   1;
            $project->added_by =   1;
            $project->save();

            if(($request->id!=''||$request->id!=null)&&($request->file_ids!=''||$request->file_ids!=null))
            {
                $project_files    =   ProjectsImages::where('project_id',$request->id)->whereIn('id',$request->file_ids)->update(['deleted_at' => Carbon::now()]);
            }

            $project_files  =   new ProjectsImages();

            if($file = $request->file('files'))
            {
                $path = $file->store('projects', 'public_uploads');
                $filename = uniqid();

                // read image from temporary file
                $img250 = Image::make($file);
                // resize image
                $img250->resize(250, 250);
                // save image
                $img250->save('uploads/projects/'.$filename.'_250x250.jpg');

                // read image from temporary file
                $img500 = Image::make($file);
                // resize image
                $img500->resize(500, 500);
                // save image
                $img500->save('uploads/projects/'.$filename.'_500x500.jpg');

                $project_files             = new ProjectsImages();
                $project_files->file       = $path;
                $project_files->thumb_250  = 'projects/'.$filename.'_250x250.jpg';
                $project_files->thumb_500  = 'projects/'.$filename.'_500x500.jpg';
                $project_files->project_id = $project->id;
                $project_files->type       = 'image';
                $project_files->status     = 1;
                $project_files->added_by   = 1;
                $project_files->save();
            }

            return redirect()->route('listProjects');

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
        $project = Projects::where('id',$id)->with('images')->first();
        return view('backend.editProjects',compact('project'));
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
        Projects::where('id',$id)->delete();
        ProjectsImages::where('project_id',$id)->delete();
        return redirect()->route('listProjects');
    }
}
