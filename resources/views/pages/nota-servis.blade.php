<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nota Servis</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .nota-container {
            max-width: 600px;
            margin: 0 auto;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 8px;
        }
        h1, h3, p {
            text-align: center;
            margin-bottom: 20px;
        }

        .nota-container p, {
            text-align: left;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table th, table td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }
        table th {
            background-color: #f4f4f4;
        }
        .footer {
            margin-top: 20px;
            text-align: center;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <h1>Henx's Servis</h1>
    <h3>Jl. Kh. A. Dahlan, Darat Sekip, Kec. Pontianak Kota, Kota Pontianak, Kalimantan Barat</h2>
    <p>{{ date('d-m-Y') }} {{ date('H:i:s') }}</p>
    <div class="nota-container">
        <h1>Nota Servis</h1>
        <p><strong>Nama Pelanggan:</strong> {{ $kasirServis->nama }}</p>
        <p><strong>No. HP:</strong> {{ $kasirServis->no_hp }}</p>
        <p><strong>Jenis HP:</strong> {{ $kasirServis->jenis_hp }}</p>
        <p><strong>Nomor IMEI:</strong> {{ $kasirServis->nomor_imei ?? 'Tidak tersedia' }}</p>

        <table>
            <thead>
                <tr>
                    <th>Kerusakan</th>
                    <th>Biaya</th>
                </tr>
            </thead>
            <tbody>
                @foreach($kasirServis->kasirServisKeluhans as $keluhan)
                <tr>
                    <td>{{ $keluhan->kerusakan }}</td>
                    <td>Rp{{ number_format($keluhan->biaya, 0, ',', '.') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="footer">
            <p><strong>Total Biaya:</strong> Rp{{ number_format($totalBiaya, 0, ',', '.') }}</p>
            <p style="text-align: center">Terima kasih!</p>
        </div>
    </div>
</body>
</html>
