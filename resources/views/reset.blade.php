<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reset Password</title>
</head>
<body>
    <h1>You have requested to reset your password</h1>
    <hr>
    <p>We can not simply send u your old password. A new password link is send for u to reset your password</p>
    <hr>
    <p>To reset your password click the following link and follow the following instruction</p>
    <h><a href="http://127.0.0.1:8000/api/user/reset/{{ $token }}">Reset Your Password</a></h>
</body>
</html>
