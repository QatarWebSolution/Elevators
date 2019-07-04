<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    protected $table    =   'projects';

    public function images()
    {
        return $this->hasMany('App\ProjectsImages','project_id','id');
    }
}
