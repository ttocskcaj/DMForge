<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

use App\Http\Requests;

class ProjectsController extends Controller
{
    public function index(){
        return Project::all();
    }
    public function create(){
        return view('projects.create');
    }
}
