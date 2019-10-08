<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo as TodoModel;
use App\Repositories\TodoInterface;

class Todo extends Controller
{
    protected $todoRepo;

    public function __construct(TodoInterface $repo) {
        $this->todoRepo = $repo;
    }

    // list unfinished todos
    public function index() {
        $todos = $this->todoRepo->unfinished();
        return view('todo.index',
            ['todos'=>$todos]);
    }

     // list finished todos
     public function finish_index() {
        $todos = $this->todoRepo->finished();
        return view('todo.finish',
            ['todos'=>$todos]);
    }

    // return create new todo form
    public function new_form() {
        return view('todo.new');
    }

    // create/save todo
    public function save(Request $request) {
        $desc = $request->input('description');
        $this->todoRepo->create($desc, false);
        return redirect(route('todoIndex'));
    }

    // view todo detail
    public function detail(int $id) {
        $todo = $this->todoRepo->get($id);
        return view('todo.detail',
            ['todo'=>$todo]);
    }

    // return edit todo form
    public function edit(int $id) {
        $todo = $this->todoRepo->get($id);
        return view('todo.edit',
            ['todo'=>$todo]);
    }

    // update todo 
    public function update(Request $request, int $id) {
        $todo = new TodoModel();
        $todo->description = $request->input('description');
        $todo->status = $request->input('status');
        $this->todoRepo->update($id, $todo);
        return redirect(route('todoIndex'));
    }

    // delete todo
    public function delete(int $id) {
        $todo = $this->todoRepo->delete($id);
        return redirect(route('todoIndex'));
    }

}
