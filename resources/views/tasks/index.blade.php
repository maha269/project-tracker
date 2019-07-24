@extends ('layouts.app')
@section('content')
    <card>
        <div class="card-header">
            Project Tasks
        </div>
        <div class="card-body">
            @foreach($tasks as $task)
                <strong>task body : {{$task->body}}</strong>
                <a class="btn btn-info" href="{{route('edit_task', ['id'=>$task->id])}}">edit Task</a>
                <a  class="btn btn-danger" href="{{route('delete_task', ['id'=>$task->id])}}">delete Task</a><br><br>
                <strong>status : </strong>{{$task->status}}
                @if($task->status == 'todo')
                    <a  class="btn btn-success" href="{{route('mark_task', ['id'=>$task->id  , 'status'=>'in-progress'])}}">mark as in-progress</a>
                    <a  class="btn btn-success" href="{{route('mark_task', ['id'=>$task->id , 'status'=>'done'])}}">mark as done</a>
                @elseif($task->status == 'in-progress')
                    <a  class="btn btn-success" href="{{route('mark_task', ['id'=>$task->id , 'status'=>'done'])}}">mark as done</a>
                @endif
                <hr>
            @endforeach
        </div>
    </card>
@endsection