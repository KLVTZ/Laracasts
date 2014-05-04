@extends('layouts.master')

@section('content')
	<div class="row">
		<div class='col-md-6'>
			<h1>All Tasks</h1>
			<ul class='list-group'>
				@foreach($tasks as $task)
					<li class="list-group-item">
					<a href="/{{ $task->user->username }}/tasks">
						{{ gravatar_tag($task->user->email, $task->user->username) }}
					</a>
						{{ link_to_task($task) }}
					</li>
				@endforeach
			</ul>
		</div>
		<div class='col-md-6'>
			@if (isset($users))
				<h3>Add New Task</h3>
				@include('tasks/partials/_form')
			@endif
		</div>
	</div>
@stop
