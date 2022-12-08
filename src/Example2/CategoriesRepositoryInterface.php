<?php

namespace Src\Example2;

interface CategoriesRepositoryInterface
{
    public function findAll(): array;
    public function save(string $name, string $desc = ''): object;
}
