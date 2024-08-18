<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Project;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class ProjectController extends Controller
{




    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('projects.show', compact('project'));

    }


}
