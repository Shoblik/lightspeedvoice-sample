<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Project;

class Developers extends Controller
{
    public function index() {
        // get the devs
        $User = new User();
        $users = $User::all();

        return view('developers', compact('users'));
    }

    public function oneDev(Request $request) {
        // get the users projects via assigned tasks
        $userId = $request->userId;
        $Project = new Project();
        $projects = $Project->projectOverviewAll()
            ->projectsByUserId($userId)
            ->get();

        //get the dev
        $theDev = User::where('id', '=', $userId)->first();

        //return url otherwise the back buttons start working funny
        $return = $request->path();

        return view('one-dev', compact('projects', 'theDev', 'return'));
    }
}
