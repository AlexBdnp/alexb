<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Page</title>
</head>
<body>
    <form action="/test/upload" method="POST">
        @csrf
        <input type="file" name="img" id="img">
        <input type="submit" value="OK">
    </form>
</body>
</html>