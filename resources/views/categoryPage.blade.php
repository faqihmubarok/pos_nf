<!DOCTYPE html>
<html lang="en">
<head>
    <title>CategoryPassing</title>
</head>
<body>
    <h1>Passing Data Dari Controller</h1>
    @foreach ($category as $i)
        <ul>
            <li>{{ $i }}</li>
        </ul>
    @endforeach
</body>
</html>