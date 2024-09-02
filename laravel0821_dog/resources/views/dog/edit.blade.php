<!DOCTYPE html>
<html lang="en">

<head>
    <title>DOGs Edit</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container mt-3">
        <h2>Hover Rows</h2>
        <div class="text-start mb-3">
            <a class="btn btn-info" href="{{ route('dogs.index') }}">back</a>
        </div>
        <table class="table table-hover">
            <tbody>
                <div class="input-group mb-3">
                    <span class="input-group-text" for="update-name">name_update</span>
                    <input type="text" class="form-control" id="update-name" name="update-name">
                </div>
            </tbody>
        </table>
        <a class="btn btn-primary" href="">edit</a>
    </div>

</body>

</html>
