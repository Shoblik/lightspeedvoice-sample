<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;


class Projects extends Controller
{
    protected function index() {
        $Project = new Project();
        $allProjects = $Project->projectOverviewAll()->get();

        return view('projects', compact('allProjects'));
    }

    protected function oneProject(Request $request) {
        // Get all tasks in this project
        $projectId = $request->projectId;
        $Task = new Task();
        $allTasks = $Task->fetchTasks()
            ->byProjectId($projectId)
            ->orderBy('tasks.created_at', 'DESC')
            ->get();

        //determine routing for the back button
        $return = $request->get('returnUrl') ? '/' . $request->get('returnUrl') : '/projects';

        return view('one-project', compact('allTasks', 'return'));
    }
}
