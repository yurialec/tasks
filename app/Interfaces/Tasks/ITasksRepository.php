<?php

namespace App\Interfaces\Tasks;

use Illuminate\Database\Eloquent\Model;

interface ITasksRepository
{
    public function __construct(Model $model);

    public function store(array $data);
    public function getAll();
    public function get(int $id);
    public function update(array $data, int $id);
    public function destroy(int $id);
}
