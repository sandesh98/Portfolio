<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        return view('project.index');
    }

    public function chefmarketing()
    {
        return view('project.projects.chefmarketing');
    }

    public function sandesh()
    {
        return view('project.projects.sandesh');
    }

    public function csr()
    {
        return view('project.projects.csr');
    }

    public function natrajFlyer()
    {
        return view('project.projects.natraj-flyer');
    }

    public function technischedienst()
    {
        return view('project.projects.technischedienst');
    }

    public function dutchdiner()
    {
        return view('project.projects.dutch-diner');
    }

    public function guessAndWin()
    {
        return view('project.projects.guess-and-win');
    }
}
