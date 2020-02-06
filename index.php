<?php
require_once 'Task.php';

function dd($data)
{
    echo '<pre>';
    var_dump($data);
    die;
}

function getTasks(): array
{
    $tasks = [
        new Task('Get Milk', false),
        new Task('Learn PHP', false),
        new Task('Be awesome', true),
    ];
    return $tasks;
}

$tasks = getTasks();
$tasks[1]->setIsCompleted(true);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <ul>
        <?php
            foreach ($tasks as $task) {
                echo '<li>' . $task->getTitle() . '</li>';
            }
        ?>
    </ul>
</body>

</html>