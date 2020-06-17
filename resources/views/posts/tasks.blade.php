@extends('layouts.app')
@section('content')
@include('inc.messages')

<div class="panel panel-default">
  <div class="panel-heading">
  	<h3 class="panel-title">New Task</h3> 
  </div>
  <div class="panel-body">
	<form action="{{url('/createPost')}}" method="POST">
		{{csrf_field()}}
		<div class="form-group">
			<label for="">Task</label>
			<input type="text" name="title" class="form-control" placeholder="task">
		</div>
		<div class="form-group">
			<button type="submit" name="submit" class="btn btn-default"><i class="glyphicon glyphicon-plus"></i>Add Task</button> 
		</div>
	</form>
  </div>
</div>
<br>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Current Tasks</h3>
  </div>
  <div class="panel-body">
    <table class="table table-striped">
		<tr>
			<th><h4>Task</h4></th>
			<th></th>
		</tr>
		<tbody>
			@foreach($tasks as $task)
				<tr>
					<td>{{$task->title}}</td>
					<td><a href="/delete/{{$task->id}}" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</a></td>
				</tr>
			@endforeach
		</tbody>
	</table>
  </div>
</div>


@endsection
