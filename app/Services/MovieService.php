<?php

namespace App\Services;

use App\Interfaces\MovieRepositoryInterface;

class MovieService
{
    protected $repo;

    public function __construct(MovieRepositoryInterface $repo)
    {
        $this->repo = $repo;
    }

    public function getAll()
    {
        return $this->repo->getAll();
    }

    public function create($data)
    {
        return $this->repo->create($data);
    }

    public function find($id)
    {
        return $this->repo->find($id);
    }

    public function update($id, $data)
    {
        return $this->repo->update($id, $data);
    }

    public function delete($id)
    {
        return $this->repo->delete($id);
    }
}