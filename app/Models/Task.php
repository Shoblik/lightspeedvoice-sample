<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Task extends Model {
    protected $table = 'tasks';

    public $fillable = [
        'project_id',
        'name',
        'hours',
        'assigned_to'
    ];

    public function fetchTasks() {
        return $this->select('tasks.*', 'users.name as dev', 'projects.name as project_name')
            ->leftJoin('projects', 'projects.id', 'tasks.assigned_to')
            ->leftJoin('users', 'users.id', '=', 'tasks.assigned_to');
    }

    public function scopeByProjectId($query, $projectId) {
        return $query->where('tasks.project_id', '=', $projectId);
    }


} # class
