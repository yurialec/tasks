<?php

namespace App\Services\Tasks;

use App\Interfaces\Tasks\ITasksRepository;

class TasksService
{
    protected $repo;

    public function __construct(ITasksRepository $repo)
    {
        $this->repo = $repo;
    }

    public function store(array $data)
    {
        return $this->repo->store($data);
    }

    public function getAll()
    {
        return $this->repo->getAll();
    }

    public function get(int $id)
    {
        return $this->repo->get($id);
    }

    public function update(array $data, int $id)
    {
        return $this->repo->update($data, $id);
    }

    public function destroy(int $id)
    {
        return $this->repo->destroy($id);
    }
}
