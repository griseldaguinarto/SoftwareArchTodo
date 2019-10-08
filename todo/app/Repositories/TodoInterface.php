<?php

namespace App\Repositories;

use App\Todo;

interface TodoInterface {
    public function create(string $desc, bool $status);
    public function all();
    public function get(int $id);
    public function finished();
    public function unfinished();
    public function update(int $id, Todo $data);
    public function delete(int $id);
}