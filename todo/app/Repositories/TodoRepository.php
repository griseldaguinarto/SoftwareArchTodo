<?php

namespace App\Repositories;
use App\Todo;

class TodoRepository implements TodoInterface {
    public function create(string $desc, bool $status) {
        $newTodo = new Todo;
        $newTodo->description = $desc;
        $newTodo->status = $status;
        $newTodo->save();
    }

    public function all() {
        return Todo::all();
    }

    public function unfinished() {
        return Todo::all()->where('status', 0);
    }

    public function finished() {
        return Todo::all()->where('status', 1);
    }

    public function get(int $id) {
        return Todo::findOrFail($id);
    }

    public function update(int $id, Todo $data) {
        $todo = Todo::findOrFail($id);
        $todo->description = $data->description;
        $todo->status = $data->status;
        $todo->save();
    }

    public function delete(int $id) {
        $todo = Todo::findOrFail($id);
        $todo->delete();
    }
}