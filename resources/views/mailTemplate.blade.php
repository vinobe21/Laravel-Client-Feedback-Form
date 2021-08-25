<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Feedback</title>
    
</head>
<body>
    <p><strong>Name: </strong>{{ $dataReceived['name']}}</p>
    <p><strong>Email: </strong>{{ $dataReceived['email']}}</p>
    <p><strong>Rating: </strong>{{ $dataReceived['rating']}}</p>
    <h4><strong>Message: </strong>{{ $dataReceived['message']}}</h4>
</body>
</html>