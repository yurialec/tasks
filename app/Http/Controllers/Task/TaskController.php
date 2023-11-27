<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateTaskRequest;
use App\Services\Tasks\TasksService;

class TaskController extends Controller
{
    private $service;

    public function __construct(TasksService $service)
    {
        $this->service = $service;
    }

    public function store(CreateTaskRequest $request)
    {
        dd('Aqui');
        $data = $request->all();
        dd($data);

        return $this->service->store($data);
    }

    public function getAll()
    {
        dd('Aqui');
        return $this->service->getAll();
    }

    public function get(int $id)
    {
        return $this->service->get($id);
    }

    public function update(array $data, int $id)
    {
        return $this->service->update($data, $id);
    }

    public function destroy(int $id)
    {
        return $this->service->destroy($id);
    }
}
