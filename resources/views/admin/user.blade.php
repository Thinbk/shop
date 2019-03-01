<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <title>Document</title>
</head>
<body>
<div class="container">
    <label>List User</label>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>CREATED</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        @foreach ($list as $key => $value)
        <tr>
            <th> <?php echo  $value->id ?> </th>
            <th> <?php echo  $value->name ?> </th>
            <th> <?php echo  $value->email ?> </th>
            <th> <?php echo  $value->created_at ?> </th>
            <th>
                <a href="">Edit</a>
                <a href="{{ URL::to('admin/user/delete/'.$value->id) }}">Delete</a>
            </th>
        </tr>
        </tbody>
        @endforeach
    </table>
</div>
</body>
</html>