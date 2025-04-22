<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Sepeda</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: #f7f9fc;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 900px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse
        }
        th, td {
            padding: 15px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }

        .harga {
            font-weight: bold;
            color: #2e7d32;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Daftar Sepeda</h1>
        <table>
            <thead>
                    <th>Jenis Sepeda</th>
                    <th>Merk</th>
                    <th>Harga</th>
            </thead>
            <tbody>
                @foreach ($sepedas as $sepeda)
                <tr>
                    <td>{{ $sepeda->jenis_sepeda }}</td>
                    <td>{{ $sepeda->merk }}</td>
                    <td class="harga">Rp {{ number_format($sepeda->harga, 0, ',', '.') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div style="text-align: right; margin-bottom: 20px;">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" style="
                background-color: #e53935;
                color: white;
                border: none;
                padding: 10px 20px;
                border-radius: 5px;
                cursor: pointer;
            ">Logout</button>
        </form>
    </div>

</body>
</html>
