<!DOCTYPE html>
<html lang="en">

<head>
    <title>DOGs Index</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container mt-3">
        <h2>Hover Rows</h2>
        <div class="text-end">
            <a class="btn btn-info" href="{{ route('dogs.create') }}">create</a>
        </div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>edit</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $k => $v)
                    <tr>
                        <td><?= $v['id'] ?></td>
                        <td><?= $v['name'] ?></td>
                        <td><a class="btn btn-primary" href="{{ route('dogs.edit') }}">edit</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>
