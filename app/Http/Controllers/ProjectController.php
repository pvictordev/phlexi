<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //
    public function edit()
    {
        return view('projects.edit');
    }
}
