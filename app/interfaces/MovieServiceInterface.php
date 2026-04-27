<?php

interface MovieServiceInterface {
    public function getAll(int $paginate, $search);
    public function getAllCategories();
    public function create($data);
    public function find($id);
    public function update($id, $data);
    public function delete($id); 
}