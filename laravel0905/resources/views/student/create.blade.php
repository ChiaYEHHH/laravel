<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    <title>Student Index</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <h2> hello laravel create</h2>
            <form action="{{ route('students.store') }}" method="post">
                @csrf
                {{-- csrf input hidden _token --}}

                <div class="mb-3 mt-3">
                    <label for="name" class="form-label">name:</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
                </div>
                <div class="mb-3">
                    <label for="mobile" class="form-label">mobile:</label>
                    <input type="text" class="form-control" id="mobile" placeholder="Enter mobile" name="mobile">
                </div>
                <div class="mb-3 mt-3">
                    <label for="phone">Phone:</label>
                    <input type="phone" class="form-control" id="phone" placeholder="Enter phone" name="phone">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script></script>
</body>

</html>
