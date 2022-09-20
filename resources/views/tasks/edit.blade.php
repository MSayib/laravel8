<x-app-layout title="Edit Task">
    <h1>Edit Task</h1>

    <div style="margin-bottom: 15px">
        <form action="/tasks/{{ $task->id }}" method="post">
            @method('put')
            @csrf
            <input type="text" name="list" placeholder="Task name" value="{{ $task->list }}" autofocus>
            <button type="submit">Update</button>
        </form>
    </div>
</x-app-layout>
