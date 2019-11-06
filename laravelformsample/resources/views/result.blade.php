<!DOCTYPE html>
<html>
<head>
    <title>Laravel Form Sample</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Laravel Form Sample</a>
        </div>
    </div>
</nav>
<div class="container">
    <h1>Results</h1>
    <div class="row">
        <div class="col-lg-5">
            <b>Full Name:</b>
        </div>
        <div class="col-lg-7">
            {{ $fullname }}
        </div>
    </div>
    <div class="row">
        <div class="col-lg-5">
            <b>Age:</b>
        </div>
        <div class="col-lg-7">
            {{ $age }}
        </div>
    </div>
</div>
</body>
</html>