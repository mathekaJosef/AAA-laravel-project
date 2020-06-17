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

@endsection