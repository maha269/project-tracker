@extends ('layouts.app')
@section('content')
<card>
    <div class="card-header">
        Create Project
    </div>
    <div class="card-body">
        <form method = "POST" action="{{route('projects')}}"  enctype="multipart/form-data">
            @csrf
            {{--<div class="form-group">--}}
                {{--<label for="project-name">Project Name</label>--}}
                <input type="text" name="name" class="form-control" id="project-name"  placeholder="Enter Project Name" required><br><br>
            {{--</div>--}}

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</card>
@endsection
`