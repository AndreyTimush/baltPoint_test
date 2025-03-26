@extends('layouts.app')

@section('content')
    <h1>Добавить новую задачу</h1>

    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf

        <div class="form-group mb-3">
            <label for="title">Название:</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label for="description">Описание:</label>
            <textarea name="description" id="description" class="form-control"></textarea>
        </div>

        <div class="form-group mb-3">
            <label for="due_date">Срок выполнения:</label>
            <input type="date" name="due_date" id="due_date" class="form-control">
        </div>

        <div class="form-check mb-3">
            <input type="checkbox" name="completed" id="completed" class="form-check-input" value="1">
            <label for="completed" class="form-check-label">Выполнено</label>
        </div>

        <button type="submit" class="btn btn-primary">Сохранить</button>
    </form>
@endsection
