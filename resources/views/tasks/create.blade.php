@extends ('layouts.app')
@section('content')
    <card>
        <div class="card-header">
            Create Task
        </div>
        <div class="card-body">
            <form method = "POST" action="{{route('tasks')}}"  enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                <label for="project-name">Task Name</label>
                    <input type="text" name="body" class="form-control" id="project-name"  placeholder="Enter Task Name" required>
                </div>
                <select name="project_id" class="custom-select">
                        @foreach ($projects as $project)
                            <option value="{{$project->id}}">{{$project->name}}</option>
                        @endforeach
                </select><br><br>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </card>
@endsection
`