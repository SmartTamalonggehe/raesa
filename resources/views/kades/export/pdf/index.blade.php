<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" href="{{ public_path('cleanui/vendors/bootstrap/dist/css/bootstrap.css') }}">
    <title>Laporan</title>


</head>
<body>
    <div class="row">
        <div class="container">
            <h2 class="text-center">Laporan Pertanggung Jawaban</h2>
            <br>
            <h3 class="text-center">PEMERINTAH KABUPATEN SARMI</h3>
            <h3 class="text-center">DISTRIK FEE,EN</h3>
            <h3 class="text-center">KAMPUNG NIKA TIDI</h3>
            <h6 class="text-center">Alamat: Jln. Raya Sarmi - Jayapura</h6>
            <hr>

            <table>
                <tbody>
                    @foreach ($kas as $item)
                    <tr>
                        <td>{{ $loop->iteration }}.</td>
                        <td>{{ $item->transaction_det->nm_transaction_det }}</td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <img src="{{ public_path($item->bukti) }}" width="500" alt="BTS">
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
