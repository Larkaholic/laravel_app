<!DOCTYPE html>
<html>
<head>
    <title>Task Details</title>
</head>
<body>
    <h1>{{ $task->title }}</h1>
    <p>{{ $task->description }}</p>
    <p>{{ $task->is_completed ? 'Completed' : 'Not Completed' }}</p>
    <a href="{{ route('tasks.edit', $task->id) }}">Edit</a>
</body>
</html>
