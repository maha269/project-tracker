@extends ('layouts.app')
@section('content')
    <card>
        <div class="card-header">
            Project Tasks
        </div>
        <div class="card-body">
            @foreach($tasks as $task)
                {{$task->body}}
                <a class="btn btn-info" href="{{route('edit_task', ['id'=>$task->id])}}">edit Task</a>
                <a  class="btn btn-danger" href="{{route('delete_task', ['id'=>$task->id])}}">delete Task</a>
                {{--<a  class="btn btn-success" href="{{route('task', ['id'=>$project->id])}}">View Project tasks</a>--}}
                {{--                <a href="{{route('edit_project/{$project->id}'}}">View Tasks</a>--}}

            @endforeach
        </div>
    </card>
@endsection
`