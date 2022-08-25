<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Project extends Model {
    protected $table = 'projects';

    public $fillable = [
        'name'
    ];

    public function scopeByProjectId($query, $id) {
        return $query->where('projects.id', '=', $id);
    }

    public function projectOverviewAll() {
        return $this->select('projects.name', 'projects.id', DB::raw('SUM(tasks.hours) as total_hours, GROUP_CONCAT(DISTINCT(users.name) SEPARATOR ", ") as devs'))
            ->leftJoin('tasks', 'tasks.project_id', '=', 'projects.id')
            ->leftJoin('users', 'users.id', '=', 'tasks.assigned_to')
            ->groupBy('projects.id');
    }

    public function scopeProjectsByUserId($query, $userId) {
        return $query->whereIn('projects.id', array(DB::raw('SELECT DISTINCT(project_id) FROM tasks WHERE tasks.assigned_to =' . $userId)));
    }
} # class
