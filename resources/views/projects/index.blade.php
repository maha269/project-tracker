@extends ('layouts.app')
@section('content')

    <card>
        <div class="card-header">
            All Project
        </div>
        <div class="card-body">
            @foreach($projects as $project)
                {{$project->name}} <br>
                <a class="btn btn-info" href="{{route('edit_project', ['id'=>$project->id])}}">edit Project</a>
                <a  class="btn btn-danger" href="{{route('delete_project', ['id'=>$project->id])}}">delete Project</a>
                <a  class="btn btn-success" href="{{route('task', ['id'=>$project->id])}}">View Project tasks</a>
                {{--                <a href="{{route('edit_project/{$project->id}'}}">View Tasks</a>--}}
                <hr>
                created by : {{$project->user->name}}
                {{--<hr>--}}
                 {{--Progress : {{count($project->tasks()->status)}} %--}}
                 {{--Progress : {{$project->tasks()}} %--}}
            {{--{{$done = 0 }}--}}
            {{--@foreach($project->tasks() as $ts)--}}
                {{--@if($ts->status == done)--}}
                    {{--{{$done ++}}--}}
                {{--@endif--}}
            {{--@endforeach--}}
                <hr>

            @endforeach
        </div>
    </card>
@endsection
`