<?php

namespace App\Http\Controllers;

use App\Models\Projects;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $projects = Projects::all();

        return view('project.index', [
            "title" => "Page projets",
            "projects" => $projects
        ]);
    }

    public function create(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('project.create', [
            'title' => 'Project création'
        ]);
    }

    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        /* Method 1
        $project = new Projects();
        $project->name = $request->input('name');
        $project->description = $request->input('description');
        $project->deadline = Carbon::parse($request->input('deadline'));
        $project->save();*/

        // Method 2
        // Before watch fillable in the model
        Projects::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'deadline' => Carbon::parse($request->input('deadline'))
        ]);

        return redirect()->route('project.index');
    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }
}
