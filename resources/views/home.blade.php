<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <header>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="{{route('members')}}">Member</a></li>
            <li><a href="{{route('mission')}}">Our Mission</a></li>
            <li><a href="{{route('contact_us')}}">Contact Us</a></li>
            <li><a href="{{route('sign_in')}}">Sign in</a></li>

        </ul>
    </header>
    <h2>Hello {{$name}} {{$lastname}}</h2>
</body>
</html>
