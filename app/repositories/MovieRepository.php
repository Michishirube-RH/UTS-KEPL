<?php

namespace App\Repositories;

use App\Models\Movie;
use App\Interfaces\MovieRepositoryInterface;
use App\Models\Category;

class MovieRepository implements MovieRepositoryInterface
{
    public function getAll()
    {
        return Movie::latest();
    }
    
    public function getAllCategories()
    {
        return Category::all();
    }

    public function find($id)
    {
        return Movie::findOrFail($id);
    }

    public function create($data)
    {
        return Movie::create($data);
    }

    public function update($id, $data)
    {
        $movie = $this->find($id);
        $movie->update($data);
        return $movie;
    }

    public function delete($id)
    {
        return $this->find($id)->delete();
    }
}