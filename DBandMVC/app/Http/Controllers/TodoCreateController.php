<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodoCreateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dbcontent', [
            'dbheader'=> "Содержание базы данных",
            'dbcontent'=> Todo::paginate(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $headerForm = 'Добавить новую задачу';
        return view('formCreate', ['formCreate'=>$headerForm]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Todo::create([
            'title'=> $request-> title,
            'description'=> $request-> discription
        ]);
        dd('It`s store');
        return redirect('/todo');
    }

    /**
     * Display the specified resource.
     */
    public function show(Todo $createTodo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Todo $createTodo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Todo $createTodo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Todo $createTodo)
    {
        //
    }
}
