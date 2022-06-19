<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 7 Home Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>
<body>

    <div class="container">
        <div class="row">
            <h1>Add Your Product </h1>
            <a href="{{ route('product.index') }}" class="btn btn-info">Add Your Product</a>

        </div>

    </div>

</body>
</html>
