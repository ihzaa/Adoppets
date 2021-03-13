<!DOCTYPE html>
<html>

<head>
    <title>Welcome Email</title>
</head>

<body>
    <h2>Welcome to the {{env('APP_NAME')}} {{$user['name']}}</h2>
    <br />
    Your registered email-id is {{$user['email']}} , Please click on the below link to verify your email account
    <br />
    @php
    $token = $user->verifyUser->token
    @endphp
    <a href="{{route('verify.user',['token'=>$token])}}">Verify Email</a>
</body>

</html>
