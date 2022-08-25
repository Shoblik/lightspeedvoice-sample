@extends ('layout.standard')

@section ('title')
    Jira Clone
@endsection

@section ('main')
    <div class="standard-width">
        <h1 class="standard">Developers</h1>
        <div class="dev-container">
            @if (!$users->isEmpty())
                @foreach($users as $user)
                    <div class="one-dev">
                        <a href="/devs/{{$user->id}}">
                           <button class="standard-btn">{{$user->name}}</button>
                        </a>
                    </div>
                @endforeach
            @else
                <p>No developers, please seed the db... php artisan db:seed</p>
            @endif
        </div>
        <a href="/">
            <button class="back-btn">Back</button>
        </a>
    </div>
@endsection
