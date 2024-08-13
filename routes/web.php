<?php

use Illuminate\Support\Facades\Route;



Route::resource('branches',\App\Http\Controllers\BranchController::class);
Route::resource('projects', \App\Http\Controllers\ProjectController::class);

Route::get('/', function () {
    $projects=  \App\Models\Project::with('branch')->get();

    return view('landing-page\index' , ['projects'=>$projects , 'branches'=>\App\Models\Branch::all()]);


});


//
//Route::get('/', function () {
//    /* $branch = new \App\Models\Branch();
//     $branch->name = 'Construction, Architecture, and Fit-outs';
//
//     $branch->save();
//
//    $branch1 = new \App\Models\Branch();
//    $branch1->name = 'Event Production Services';
//
//    $branch1->save();
//
//
//    $branch2 = new \App\Models\Branch();
//    $branch2->name = 'Event Management and Conference Services';
//
//    $branch2->save();
//
//*/
//    $branches = \App\Models\Branch::all();
//
//    return $branches;
//});
