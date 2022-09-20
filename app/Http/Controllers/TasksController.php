<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TasksRequest;
use Illuminate\Support\Facades\DB;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addProject(TasksRequest $req)
    {
        $project_name = $req->project_name;
        return DB::table('tasks')->insert(['project_name' => $project_name]);
    }

    public function addTime(TasksRequest $req)
    {
        $all_time = $req->all_time;
        return DB::table('tasks')->insert(['all_time' => $all_time]);
    }

}
