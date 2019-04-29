<?php

use routes\Route;

(new Route)->get('/home', '\controllers\AdminController', 'index', 'home');
(new Route)->get('/admin/task/index', '\controllers\TaskController', 'all','task-index');
(new Route)->get('/admin/task/create', '\controllers\TaskController', 'create', 'task-create');
(new Route)->post('/admin/task/add', '\controllers\TaskController', 'add', 'task-add');
(new Route)->get('/admin/task/update', '\controllers\TaskController', 'update', 'task-update');
(new Route)->get('/admin/task/edit', '\controllers\TaskController', 'edit', 'task-edit');
(new Route)->get('/admin/task/destroy', '\controllers\TaskController', 'destroy', 'task-destroy');

(new Route)->get('/admin/task/done', '\controllers\TaskController', 'done', 'done');
(new Route)->get('/admin/task/incomplete', '\controllers\TaskController', 'incomplete', 'incomplete');

// Auth routes
(new Route)->get('/admin/login', '\controllers\AuthController', 'login', 'login');
(new Route)->get('/admin/logout', '\controllers\AuthController', 'logout', 'logout');
(new Route)->get('/admin/login/post', '\controllers\AuthController', 'loginPost', 'loginPost');

