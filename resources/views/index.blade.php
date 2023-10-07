<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Book App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
    .table {
        margin-left: 30px;
        margin-right: 30px;
    }

    .btn-primary {
        margin-left: 30px;
    }

    footer {
        position: fixed;
        padding-top: 10px;
        font-weight: 500;
        background-color: #f6f6f6;
        width: 100%;
        bottom: 0px;
        text-align: center;
    }
</style>

<body>
    <h1 class="text-center">Book App</h1>
    <hr>

    <div class="container">
        <table class="table">
            <thead>
                <!-- Alert -->
                @if(Session::get('Ok'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('Ok')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                
                @endif
                @if(Session::get('Update'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('Update')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                
                @endif
                @if(Session::get('Hapus'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('Hapus')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                
                @endif
                <!-- End Alert -->
                <a href="/books/create" class="btn btn-primary">Add Data</a>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Author</th>
                    <th scope="col">Page</th>
                    <th scope="col">Year</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($buku as $row)
                <tr>
                    <th scope="row">{{ $row->id}}</th>
                    <td>{{ $row->title}}</td>
                    <td>{{ $row->author}}</td>
                    <td>{{ $row->page}}</td>
                    <td>{{ $row->year}}</td>
                    <td>
                        <a href="{{ route('show.book', $row->id)}}" class="btn btn-success">Show</a>
                        <a href="{{ route('form.edit.book', $row->id)}}" class="btn btn-warning">Edit</a>
                        <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$row->id}}">Delete</a>
                        @include('book.hapusdata')
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-end">
                <li class="page-item disabled">
                    <a class="page-link">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </div>

    <footer>
        <p>&copy; 2023 Dilanrskh. All Rights Reserved.</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>