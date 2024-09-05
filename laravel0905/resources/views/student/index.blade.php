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
            <h2> hello laravel 0829</h2>
            <div class="text-end">
                <a class="btn btn-success mb-3" href="{{ route('students.create') }}">add</a>
            </div>
            <table class="table table-info">
                <thead>
                    <tr>
                        <th class="col">id</th>
                        <th class="col">name</th>
                        <th class="col">mobile</th>
                        <th class="col">phone</th>
                        <th class="col">edit</th>
                    </tr>
                </thead>
                @php
                    // dd($data);
                @endphp
                <tbody>

                    @foreach ($data as $key => $value)
                        <tr>
                            <td class="myRank">{{ $value['id'] }}</td>
                            <td>{{ $value['name'] }}</td>
                            <td>{{ $value['mobile'] }}</td>
                            <td>{{ $value->phoneRelation->phone }}</td>
                            <td>
                                {{-- // EDIT 方法一
                                    <a href="{{ route('students.edit', ['student' => $value['id']]) }}"
                                    class="btn btn-warning">
                                    edit
                                </a> --}}
                                {{-- // EDIT 方法二
                                <a href="http://localhost/students/{{{ $value['id'] }}}/edit" class="btn btn-success">edit</a> --}}
                                {{-- <a class="btn btn-success" href="{{ route('students.edit', $value['id']) }}">edit</a> --}}
                                <form action="{{ route('students.destroy', ['student' => $value['id']]) }}"
                                    method="post">
                                    {{-- edit --}}
                                    <a href="{{ route('students.edit', ['student' => $value['id']]) }}"
                                        class="btn btn-warning">
                                        edit
                                    </a>
                                    @csrf
                                    @method('DELETE')
                                    {{-- del --}}
                                    <button type="submit" class="btn btn-danger">Del</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            const myrank = $(".myRank");
            // const tr = $('tr');
            // myrank.parent().css({
            //     "color": "red"
            // });
            $("span").parent().css({
                "color": "red"
            });
            $(".ff").parent().find('td').css({
                "background": "pink"
            });

        })
    </script>
</body>

</html>
