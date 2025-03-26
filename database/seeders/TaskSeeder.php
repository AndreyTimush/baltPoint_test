<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    public function run()
    {
        $tasks = [
            ['title' => 'Задача 1', 'description' => 'Описание задачи 1', 'completed' => false, 'due_date' => now()->addDays(3)],
            ['title' => 'Задача 2', 'description' => 'Описание задачи 2', 'completed' => true, 'due_date' => now()->addDays(1)],
            ['title' => 'Задача 3', 'description' => null, 'completed' => false, 'due_date' => now()->addDays(7)],
            ['title' => 'Задача 4', 'description' => 'Описание задачи 4', 'completed' => false, 'due_date' => null],
            ['title' => 'Задача 5', 'description' => 'Описание задачи 5', 'completed' => true, 'due_date' => now()->addDays(2)],
            ['title' => 'Задача 6', 'description' => null, 'completed' => false, 'due_date' => now()->addDays(5)],
            ['title' => 'Задача 7', 'description' => 'Описание задачи 7', 'completed' => false, 'due_date' => null],
            ['title' => 'Задача 8', 'description' => 'Описание задачи 8', 'completed' => true, 'due_date' => now()->addDays(4)],
            ['title' => 'Задача 9', 'description' => null, 'completed' => false, 'due_date' => now()->addDays(6)],
            ['title' => 'Задача 10', 'description' => 'Описание задачи 10', 'completed' => false, 'due_date' => null],
        ];

        foreach ($tasks as $task) {
            Task::create($task);
        }
    }
}
