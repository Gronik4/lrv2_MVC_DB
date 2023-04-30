<?php

namespace Database\Seeders;

use App\Models\CreateTodo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Способ №1. 
        //DB::insert('INSERT INTO `todos` (`title`, `description`) VALUES (?, ?)', [`Задача №1`, `Полное описание задачи№1`]);
        //Способ №2
        DB::table('todos')-> insert([
            [
                'title'=> 'Задача №1',
                'description'=> 'Полное описание задачи№1'
            ],
            [
               'title'=> 'Задача №2',
                'description'=> 'Полное описание задачи№2' 
            ]
        ]);
        //Способ №3
        CreateTodo::create([
            'title'=> 'Задача №3',
            'description'=> 'Полное описание задачи№3'
        ]);
    }
}
