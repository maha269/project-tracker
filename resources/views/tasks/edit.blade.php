@extends ('layouts.app')
@section('content')
    <card>
        <div class="card-header">
            Edit Task
        </div>
        <div class="card-body">
            <form method = "POST" action="{{route('task_update')}}"  enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$task->id}}">
                <div class="form-group">
                    <label for="project-name">Project Name</label>
                    <input type="text" name="body" class="form-control" id="project-name"  value="{{$task->body}}">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </card>
@endsection
`