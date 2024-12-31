<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('admin.logout') }}" method="POST" style="display: inline;">
        @csrf
        <button type="submit"
            style="border: none; background: none; color: blue; text-decoration: underline; cursor: pointer;">
            Logout
        </button>
    </form>

    this is a dashboard in welcome
</body>

</html>
