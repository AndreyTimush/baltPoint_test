@extends('layouts.app')

@section('content')
    <h1>Просмотр задачи</h1>

    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title">{{ $task->title }}</h5>
            <p class="card-text">{{ $task->description ?? 'Нет описания' }}</p>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    Статус:
                    @if($task->completed)
                        <span class="badge bg-success">Выполнено</span>
                    @else
                        <span class="badge bg-warning">В работе</span>
                    @endif
                </li>
                <li class="list-group-item">
                    Срок выполнения: {{ $task->due_date ? $task->due_date->format('d.m.Y') : 'Нет срока' }}
                </li>
                <li class="list-group-item">
                    Создано: {{ $task->created_at->format('d.m.Y H:i') }}
                </li>
                <li class="list-group-item">
                    Обновлено: {{ $task->updated_at->format('d.m.Y H:i') }}
                </li>
            </ul>
        </div>
    </div>

    <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Назад к списку</a>
@endsection
