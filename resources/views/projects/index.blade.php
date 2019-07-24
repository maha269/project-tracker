@extends ('layouts.app')
@section('content')

    <card>
        <div class="card-header">
            All Project
        </div>
        <div class="card-body">
            @foreach($projects as $project)
                <strong>project name : {{$project->name}}</strong> <br><br>
                <a class="btn btn-info" href="{{route('edit_project', ['id'=>$project->id])}}">edit Project</a>
                <a  class="btn btn-danger" href="{{route('delete_project', ['id'=>$project->id])}}">delete Project</a>
                <a  class="btn btn-success" href="{{route('task', ['id'=>$project->id])}}">View Project tasks</a>
                <a class="btn btn-success" href="{{route('task_create')}}">Create Task</a>
                <hr>
                <strong>created by :</strong> {{$project->user->name}}<br>
                <strong>Total number of tasks : </strong>{{count($project->tasks)}}  <br><br>
                @php
                    $done = 0 ;
                @endphp
                @foreach($project->tasks as $ts)
                    @if($ts->status == 'done')
                        @php
                            $done++;
                        @endphp
                    @endif
                @endforeach
                <strong>Progress : </strong>{{$done / count($project->tasks) *100}} %
                <hr>

            @endforeach
        </div>
    </card>
@endsection