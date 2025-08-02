<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Tests </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="text-center">
            <h1>Daily tests</h1>
            <div class="rows">
                <div class="cpl-md-12">

                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger" role="alert">
                            {{$error}}
                        </div>
                    @endforeach

                    <form method="post" action="/saveTest">
                    {{csrf_field()}}
                        <input type="text" class="form-control" name="test" placeholder="Enter your Test"></br>

                        <input type="submit" class="btn btn-primary" value="SUBMIT">
                        <input type="button" class="btn btn-warning" value="CLEAR">
                    </form>

                    </br><br>
                    <table class="table table-dark">
                        <th> ID </th>
                        <th> Tests </th>
                        <th> Completed OR Not </th>
                        @foreach($tests as $test)
                            <tr>
                                <th> {{$test->id}} </th>
                                <th> {{$test->name}} </th>
                                <th> {{$test->is_completed}} </th>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>