@extends('layouts.app')

@section('content')
    <h1>Редактировать задачу</h1>

    <form action="{{ route('tasks.update', $task) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group mb-3">
            <label for="title">Название:</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $task->title }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="description">Описание:</label>
            <textarea name="description" id="description" class="form-control">{{ $task->description }}</textarea>
        </div>

        <div class="form-group mb-3">
            <label for="due_date">Срок выполнения:</label>
            <input type="date" class="form-control" id="due_date" name="due_date"
       value="{{ old('due_date', $task->due_date ? \Carbon\Carbon::parse($task->due_date)->format('Y-m-d') : '') }}">
        </div>

        <div class="form-check mb-3">
            <input type="checkbox" name="completed" id="completed" class="form-check-input" value="1"
                   {{ $task->completed ? 'checked' : '' }}>
            <label for="completed" class="form-check-label">Выполнено</label>
        </div>

        <button type="submit" class="btn btn-primary">Обновить</button>
    </form>
@endsection
