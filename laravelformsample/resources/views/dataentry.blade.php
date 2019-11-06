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
            <h1>Data Entry Form</h1>
            <form method="post" action="submit">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="first_name">First Name:</label>
                    <input type="text" class="form-control" name="first_name" id="first_name" />
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name:</label>
                    <input type="text" class="form-control" name="last_name" id="last_name" />
                </div>
                <div class="form-group">
                    <label for="year_of_birth">Year of Birth:</label>
                    <input type="number" class="form-control" name="year_of_birth" id="year_of_birth" />
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </body>
</html>