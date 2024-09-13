<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>indexxxxxx</title>
</head>
<body>
    <table class="table table-stripped">
        <thead>
            <tr>
                <th>id</th>
                <th>judul</th>
                <th>penulis</th>
                <th>harga</th>
                <th>tanggal terbit</th>
                <th>aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data_book as $index => $book)
                <tr>
                    <td>{{ $index+1 }}</td>
                    <td>{{ $book->judul }}</td>
                    <td>{{ $book->penulis }}</td>
                    <td>{{ "Rp ".number_format($book->harga, 2, ',', '.') }}</td>
                    <td>{{ $book->tgl_terbit }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <h3>Total data -> {{ $summary_data }}</h3>
    <h3>Total price -> {{ $total_price }}</h3>
</body>
</html>