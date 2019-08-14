<!DOCTYPE html>
<html>
<head>
    <title>Contacts page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

</head>
<body>
    <h3> Welcome To Contacts Page</h3>

    <form method="post" action="{{route('send')}}">
        @csrf
        First name <input type="text" name="first_name">
        Last name <input type="text" name="last_name">
        Note <input type="text" name="note">
        <input type="submit" value="Save">
    </form>
</body>
</html>