<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
</head>
<body>
    <h1>Contact Us Question</h1>
    <p>Name: {{$contactmessage['name']}}</p>
    <p>Email: {{$contactmessage['email_con']}}</p>
    <p>Message: <br>{{$contactmessage['message']}}</p>

</body>
</html>