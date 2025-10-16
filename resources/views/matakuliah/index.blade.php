<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>
<body>
    <h1>Matakuliah</h1>
    {{-- {{ dd($banyak_matakuliah) }} --}}
    <table>
        <tr>
            <th>ID</th>
            <th>Kode MK</th>
            <th>Nama</th>
        </tr>
        @foreach ($banyak_matakuliah as $matakuliah)
            <tr>
                <td>{{ $matakuliah['id'] }}</td>
                <td>{{ $matakuliah['kode_mk'] }}</td>
                <td>{{ $matakuliah['nama'] }}</td>
            </tr>
        @endforeach
    </table>
</body>

</html>
