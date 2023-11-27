<?php

namespace App\Repositories\Tasks;

use App\Http\Resources\Task\TaskResource;
use App\Interfaces\Tasks\ITasksRepository;
use Illuminate\Database\Eloquent\Model;

class TasksRepository implements ITasksRepository
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function store(array $data)
    {
        return $this->model->create($data);
    }

    public function getAll()
    {
        $tasks = $this->model->all();
        TaskResource::collection($tasks);
    }

    public function get(int $id)
    {
        return $this->model->find($id);
    }

    public function update(array $data, int $id)
    {
        return $this->model->find($id)->update($data);
    }

    public function destroy(int $id)
    {
        return $this->model->find($id)->delete();
    }
}
