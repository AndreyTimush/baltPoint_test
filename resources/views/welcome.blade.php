@extends('layouts.app')

@section('content')
<div class="text-center">
    <h1 class="display-4">Добро пожаловать в менеджер задач</h1>
    <p class="lead">Простое приложение для управления задачами на Laravel</p>

    <div class="mt-5">
        <a href="{{ route('tasks.index') }}" class="btn btn-primary btn-lg px-4">
            <i class="bi bi-list-task"></i> Перейти к задачам
        </a>
    </div>
</div>
@endsection
