@extends ('layout.standard')

@section ('title')
    Jira Clone
@endsection

@section ('main')
    <div class="standard-width">
        <h1 class="standard">{{$theDev->name}}'s Project List</h1>

        <table class="standard-table">
            <tr>
                <th>Project</th>
                <th>Members</th>
                <th>Estimated Hours</th>
                <th>Actions</th>
            </tr>
            @foreach($projects as $project)
                <tr>
                    <td>{{$project->name}}</td>
                    <td>{{$project->devs}}</td>
                    <td>{{$project->total_hours}}</td>
                    <td class="actions">
                        <a href="/projects/{{$project->id}}?returnUrl={{$return}}">
                            <button>View</button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
        <a href="/devs">
            <button class="back-btn">Back</button>
        </a>
    </div>
@endsection
