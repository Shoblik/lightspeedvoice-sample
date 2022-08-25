@extends ('layout.standard')

@section ('title')
    Jira Clone
@endsection

@section ('main')
    <div class="standard-width">
        @if(isset($allTasks[0]))
            <h1 class="standard">{{$allTasks[0]->project_name}}</h1>
            <div class="total-hours">
                <p>{{$allTasks->sum('hours')}} Hours</p>
            </div>
            <table class="standard-table">
                <tr>
                    <th>Task</th>
                    <th>Assigned To</th>
                    <th>Estimated Hours</th>
                </tr>
                @foreach($allTasks as $task)
                    <tr>
                        <td>{{$task->name}}</td>
                        <td>{{$task->dev}}</td>
                        <td>{{$task->hours}}</td>
                    </tr>
                @endforeach
            </table>
        @else
            <h1 class="standard">No Project Found</h1>
        @endif
        <a href="{{$return}}">
            <button class="back-btn">Back</button>
        </a>
    </div>
@endsection
