<?php

namespace App\Services;

use App\Interfaces\MovieRepositoryInterface;
use MovieServiceInterface;

class MovieService implements MovieServiceInterface
{
    protected $repo;

    public function __construct(MovieRepositoryInterface $repo)
    {
        $this->repo = $repo;
    }

    public function getAll(int $paginate, $search)
    {
        $query = $this->repo->getAll();
        if ($search) {
            $query->where('judul', 'like', '%' . $search . '%')
                ->orWhere('sinopsis', 'like', '%' . $search . '%');
        }
        $movies = $query->paginate(6)->withQueryString();

        return $movies;
    }

    public function getAllCategories()
    {
        return $this->repo->getAllCategories();
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