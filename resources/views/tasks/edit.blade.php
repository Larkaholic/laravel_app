<!DOCTYPE html>
<html>
<head>
    <title>Edit Task</title>
</head>
<body>
    <h1>Edit Task</h1>
    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" value="{{ $task->title }}" required>
        <br>
        <label for="description">Description:</label>
        <textarea id="description" name="description">{{ $task->description }}</textarea>
        <br>
        <label for="is_completed">Completed:</label>
        <input type="checkbox" id="is_completed" name="is_completed" {{ $task->is_completed ? 'checked' : '' }}>
        <br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
