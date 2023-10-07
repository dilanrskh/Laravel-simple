<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
    .container{
        margin-top: 40px;
    }
</style>

<body>

    <section class="form-data">
        <div class="container">
            <h1 class="text-center">Tambah Data Buku</h1>
            <form action="{{ route('update.book', $buku->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="title" class="form-label">Title Book</label>
                    <input type="text" class="form-control" value="{{ $buku->title }}" id="title" name="title" required>
                </div>
                <div class="mb-3">
                    <label for="author" class="form-label">Author Book</label>
                    <input type="text" class="form-control" value="{{ $buku->author }}" id="author" name="author" required>
                </div>
                <div class="mb-3">
                    <label for="page" class="form-label">Page Book</label>
                    <input type="text" class="form-control" value="{{ $buku->page }}" name="page" id="page" required>
                </div>
                <div class="mb-3">
                    <label for="year" class="form-label">Tahun Keluar Buku</label>
                    <input type="text" class="form-control" value="{{ $buku->year }}" name="year" id="year" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>