<?php

namespace Src\Example2;

class CategoryController
{
    public function __construct(
        protected CategoriesRepositoryInterface $repository
    ) {
    }

    public function index()
    {
        $results = $this->repository->findAll();
        return $results;
    }

    public function create(string $name, string $desc = '')
    {
        return $this->repository->save($name, $desc);
    }
}
