<?php

require_once('../config.php');
require_once('../lib/task.php');

$tasks = getAllTasks();

$newTask = createTask('P', 'Concours de P', 1, 0);

require_once('../templates/index.php');
