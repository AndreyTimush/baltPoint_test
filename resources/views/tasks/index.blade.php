<!DOCTYPE html>
<html>
<head>
    <title>Tasks</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1>Task List</h1>

        @if($tasks->count() > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tasks as $task)
                        <tr>
                            <td>{{ $task->id }}</td>
                            <td>{{ $task->title }}</td>
                            <td>{{ $task->completed ? 'Done' : 'Pending' }}</td>
                            <td>
                                <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-sm btn-warning">
                                    <i class="bi bi-pencil"></i> Редактировать
                                </a>
                                <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Удалить задачу?')">
                                        <i class="bi bi-trash"></i> Удалить
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $tasks->links() }}
        @else
            <div class="alert alert-info">No tasks found!</div>
        @endif
    </div>
</body>
</html>
