@extends ('layout.standard')

@section ('title')
    Jira Clone
@endsection

@section ('main')
    <div class="standard-width landing">
        <h1 class="standard">Jira Clone</h1>
        <div>
            <a href="/projects">
                <button class="standard-btn">Projects</button>
            </a>
        </div>
        <div>
            <a href="/devs">
                <button class="standard-btn">Developers</button>
            </a>
        </div>
    </div>
@endsection
