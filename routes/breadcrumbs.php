<?php

Breadcrumbs::for('home', function ($trail) {
    $trail->push('Home', route('home'));
});

Breadcrumbs::for('users.index', function ($trail) {
    $trail->parent('home');
    $trail->push('Users', route('users.index'));
});

Breadcrumbs::for('users.create', function ($trail) {
    $trail->parent('users.index');
    $trail->push('Create', route('users.create'));
});

Breadcrumbs::for('users.edit', function ($trail, $user) {
    $trail->parent('users.index');
    $trail->push('Edit', route('users.edit', $user));
});

Breadcrumbs::for('users.show', function ($trail, $user) {
    $trail->parent('users.index');
    $trail->push('Show', route('users.show', $user));
});

Breadcrumbs::for('categories.index', function ($trail) {
    $trail->parent('home');
    $trail->push('Categories', route('categories.index'));
});

Breadcrumbs::for('categories.create', function ($trail) {
    $trail->parent('categories.index');
    $trail->push('Create', route('categories.create'));
});

Breadcrumbs::for('categories.edit', function ($trail, $category) {
    $trail->parent('categories.index');
    $trail->push('Edit', route('categories.edit', $category));
});

Breadcrumbs::for('categories.show', function ($trail, $category) {
    $trail->parent('categories.index');
    $trail->push('Show', route('categories.show', $category));
});
