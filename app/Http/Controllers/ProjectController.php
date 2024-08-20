<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;
use Illuminate\Http\JsonResponse;

class ProjectController extends Controller
{


    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('projects.show', compact('project'));

    }


    public function filteredProjects(Request $request, string $branch_id)
    {
        $projects = \App\Models\Project::with('branch')
            ->where('branch_id', $branch_id)
            ->get();

        return new JsonResponse([
            'content' => Blade::render('projects.project_content', ['projects' => $projects])
        ]);


    }
}
