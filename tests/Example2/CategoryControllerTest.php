<?php

use Src\Example2\CategoriesRepositoryInterface;
use Src\Example2\CategoryController;

test('list all categories', function () {
    $mockRepository = mock(CategoriesRepositoryInterface::class)
                    ->shouldReceive('findAll')
                    ->once()
                    ->andReturn([1, 2, 3])
                    ->getMock();

    $controller = new CategoryController($mockRepository);
    $result = $controller->index();

    expect($result)->toBeArray();
    expect($result)->toMatchArray([1, 2, 3]);
});

test('create category and spies', function () {
    $mockRepository = mock(CategoriesRepositoryInterface::class)
                    ->shouldReceive('save')
                    ->withArgs(['category1', 'description1'])
                    ->andReturn(new stdClass())
                    ->times(1)
                    ->getMock();

    $controller = new CategoryController($mockRepository);
    $result = $controller->create(
        name: 'category1',
        desc: 'description1'
    );

    expect($result)->toBeObject();
});
