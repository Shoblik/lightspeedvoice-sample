@extends ('layout.standard')

@section ('title')
    Jira Clone
@endsection

@section ('main')
    <div class="standard-width">
        <h1 class="standard">Projects</h1>

        <table class="standard-table">
            <tr>
                <th>Project</th>
                <th>Members</th>
                <th>Estimated Hours</th>
                <th>Actions</th>
            </tr>
            @if(!$allProjects->isEmpty())
                @foreach($allProjects as $project)
                <tr>
                    <td>{{$project->name}}</td>
                    <td>{{$project->devs}}</td>
                    <td>{{$project->total_hours}}</td>
                    <td class="actions">
                        <a href="/projects/{{$project->id}}">
                            <button>View</button>
                        </a>
                    </td>
                </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="4">No projects, please seed the db... php artisan db:seed</td>
                </tr>
            @endif
        </table>
        <a href="/">
            <button class="back-btn">Back</button>
        </a>
    </div>

@endsection
