<x-app-layout title="Tasks">
    <h1>Tasks</h1>

    <div style="margin-bottom: 15px">
        <a href="/tasks/create">Create New Task</a>
        <form action="/tasks" method="post">
            @csrf
            <input type="text" name="list" placeholder="Task name" autofocus>
            <button type="submit">Add</button>
        </form>
    </div>
    <ul style="list-style-type: none">
        @foreach ($tasks as $index => $task)
            <li style="margin-bottom: 5px;">
                {{ $index+1 }}. {{$task->list }}
                <a href="/tasks/{{ $task->id }}/edit" style="color: skyblue">Edit</a>
                <form action="/tasks/{{ $task->id }}" method="post" style="display: inline">
                    @method('delete')
                    @csrf
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</x-app-layout>
