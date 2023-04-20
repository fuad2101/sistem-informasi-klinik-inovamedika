<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Pegawai</title>
    <style>
        table{
            margin :auto;
        }
        table td{
            padding: 10px;
        }

        h1{
            text-align: center;
        }
    </style>
</head>
<body>

    <div class="container">

        <h1>Laporan Pegawai PT. Inova Medika @php echo date('Y') @endphp </h1>
        <table border="1" style="border-collapse: collapse;">
            <thead>
                <tr>
                    <td>No.</td>
                    <td>Nama</td>
                    <td>Alamat</td>
                    <td>Profesi</td>
                </tr>
            </thead>
            @forelse ($data as $pegawai)
            <tr>
                <td>{{$loop->iteration}} </td>
                <td>{{$pegawai->nama_pegawai}} </td>
                <td>{{$pegawai->alamat}} </td>
                <td>{{$pegawai->profesi}} </td>
            </tr>
            @empty
            <td>No Data</td>
            @endforelse
        </table>
    </div>


</body>
</html>
