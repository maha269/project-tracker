@extends ('layouts.app')
@section('content')
    <card>
        <div class="card-header">
            Edit Project
        </div>
        <div class="card-body">
            <form method = "POST" action="{{route('projects_update')}}"  enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$project->id}}">
                <div class="form-group">
                    <label for="project-name">Project Name</label>
                    <input type="text" name="name" class="form-control" id="project-name"  value="{{$project->name}}">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </card>
@endsection
`