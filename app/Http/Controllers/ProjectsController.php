<?php

namespace App\Http\Controllers;

use App\Project;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class ProjectsController extends Controller
{
    public function index()
    {
        return Project::all();
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|unique:projects|min:3|max:256',
            'description' => 'required|min:3|max:1024'
        ]);
        $project = new Project($request->all());
        $user = \Auth::user();
        $user->projects()->save($project);

    }
}
