<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Course User</title>
</head>
<body>
    <header>
        <h1>Course: {{ $course->course_name }}</h1>
    </header>

    <section>
        <h2>Users Enrolled</h2>
            @foreach ($users as $user)
                <p>Name: {{ $user->name }}</p>
                <p>Email: {{ $user->email }}</p>
            @endforeach
            <hr>
    </section>

</body>
</html>
