<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FeedBack Form</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container" style="width: 50%; padding: 50px">
        <form action="/feedback" method="POST">
        @if (Session::get('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
        @endif
        @csrf
        <div class="form-group">
            <label>Name: </label>
            <input type="name" class="form-control" placeholder="Name" name="name" required>
        </div>
        <div class="form-group">
            <label>Email: </label>
            <input type="email" class="form-control" placeholder="Email address" name="email" required>
        </div>
        <div class="form-group">
            <label>Subject: </label>
            <input type="text" class="form-control" placeholder="Subject" name="subject" required>
        </div>
        <div class="form-group"><label>Your rating: </label>
        <div class="col">
            <div class="form-check">
            <input class="form-check-input" type="radio" name="rating" id="exampleRadios1" value="Excellent" checked>
            <label class="form-check-label" for="exampleRadios1">Exellent</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="rating" id="exampleRadios1" value="Good" >
            <label class="form-check-label" >Good</label>
        </div>
        <div class="form-check">
            <input class="form-check-input d-inline" type="radio" name="rating" id="exampleRadios1" value="Average" >
            <label class="form-check-label">Average</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="rating" id="exampleRadios1" value="Bad">
            <label class="form-check-label" >Bad</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="rating" id="exampleRadios1" value="Very Bad" >
            <label class="form-check-label">Very Bad</label>
        </div>
    </div>
    </div>
    <div class="form-group">
        <label>What I need to improve..</label>
        <textarea class="form-control" placeholder="Enter your feedback.." name="message" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Send Feedback</button>
</form>
</div>
    
</body>
</html>
<style>
    label{
        font-weight: bold;
    }
    .col{
        display: flex;
        justify-content: space-between;
    }
</style>