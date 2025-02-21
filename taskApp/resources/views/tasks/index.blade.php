
@extends('layouts.app')
@section('content')
<h1 class="text-2xl text-violet-900 font-bold mb-4">All Tasks</h1>
<ul>
@forelse($tasks as $task)
<li class="mb-2">
{{ $task->task_name }}
</li>
@empty
<li class="text-violet-700">No tasks yet.</li>
@endforelse
</ul>
<div class="mt-4">
<a href="{{ route('tasks.create') }}"
class="bg-violet-500 text-white px-4 py-2 rounded hover:bg-fuchsia-500">
Create a New Task
</a>
</div>
@endsection