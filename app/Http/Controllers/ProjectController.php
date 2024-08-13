<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Project;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::with('facts')->get();
        return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $branches = Branch::all();

        return view('projects.create', compact('branches'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the basic project information, including branch_id
        $validatedData = $request->validate([
            'branch_id' => 'required|exists:branches,id',
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        // Create the project
        $project = Project::create($validatedData);

        // Process the facts
        if ($request->has('facts')) {
            foreach ($request->facts as $fact) {
                if (!empty($fact['key']) && !empty($fact['value'])) {
                    $project->facts()->create([
                        'key' => $fact['key'],
                        'value' => $fact['value'],
                    ]);
                }
            }
        }

        return redirect()->route('projects.index')->with('success', 'Project created successfully.');
    }



    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('projects.show', compact('project'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        // Validate the basic project information
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        // Update the project
        $project->update($validatedData);

        // Clear existing facts and re-add them
        $project->facts()->delete();

        // Process the new facts
        if ($request->has('facts')) {
            foreach ($request->facts as $fact) {
                if (!empty($fact['key']) && !empty($fact['value'])) {
                    $project->facts()->create([
                        'key' => $fact['key'],
                        'value' => $fact['value'],
                    ]);
                }
            }
        }

        return redirect()->route('projects.index')->with('success', 'Project updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('projects.index')->with('success', 'Project deleted successfully.');
    }
}
