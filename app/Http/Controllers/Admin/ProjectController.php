<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::with('facts')->get();
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $branches = Branch::all();

        return view('admin.projects.create', compact('branches'));

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
            'cover' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Create the project
        $project = Project::create($validatedData);


        // Process the images
        if ($request->hasFile('cover')) {
            $coverImagePath = $request->file('cover')->store('projects', 'public');
            $project->cover()->create(['image_path' => $coverImagePath, 'is_cover' => true]);
        }

        // Process the images
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imagePath = $image->store('projects', 'public');
                $project->images()->create(['image_path' => $imagePath]);
            }
        }

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

        // Process the sections
        if ($request->has('sections')) {
            $index = 0;
            foreach ($request->sections as $section) {
                $section = $project->sections()->create(['title' => $section['title'], 'content' => $section['content']]);

                if ($request->hasFile("sections.$index.images")) {
                    foreach ($request->file("sections.$index.images") as$image) {
                        $sectionImagePath = $image->store('project_section', 'public');
                        $section->images()->create(['image_path' => $sectionImagePath]);
                    }
                }


                $index++;
            }
        }

        return redirect()->route('admin.projects.index')->with('success', 'Project created successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('admin.projects.show', compact('project'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
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

        return redirect()->route('admin.projects.index')->with('success', 'Project updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('admin.projects.index')->with('success', 'Project deleted successfully.');
    }
}
