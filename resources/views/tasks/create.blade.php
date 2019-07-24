@extends ('layouts.app')
@section('content')
    <card>
        <div class="card-header">
            Create Task
        </div>
        <div class="card-body">
            <form method = "POST" action="{{route('tasks')}}"  enctype="multipart/form-data">
                @csrf
                {{--<div class="form-group">--}}
                {{--<label for="project-name">Project Name</label>--}}
                <input type="text" name="name" class="form-control" id="project-name"  placeholder="Enter Task Name">
                {{--</div>--}}

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </card>
@endsection
`