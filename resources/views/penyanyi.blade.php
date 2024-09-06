<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Penyanyi dan Lagu</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Daftar Penyanyi dan Lagu</h1>
        <form action="/penyanyi/create" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama Penyanyi</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <button type="submit" class="btn btn-primary">Tambah Penyanyi</button>
        </form>

        <table class="table table-bordered mt-4">
            <thead>
                <tr>
                    <th>Penyanyi</th>
                    <th>Lagu</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($penyanyi as $p)
                    <tr>
                        <td>{{ $p->name }}</td>
                        <td>
                            <ul>
                                @foreach ($p->lagu as $lagu)
                                    <li>{{ $lagu->title }}</li>
                                @endforeach
                            </ul>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
