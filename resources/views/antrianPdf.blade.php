<!DOCTYPE html>
<head>
    <title>Nomor Antrian</title>
    <meta charset="utf-8">
    <style>
        #judul{
            text-align:center;
            inline-size: auto;

        }

        #halaman{
            width: auto;
            height: auto;
            position: absolute;
            border: 1px solid;
            padding-top: 30px;
            padding-left: 30px;
            padding-right: 30px;
            padding-bottom: 80px;
        }
        #isi{
            width: auto;
            height: auto;
            position: absolute;
            padding-top: 30px;
            padding-left: 200px;
            padding-right: 30px;
            padding-bottom: 80px;
        }

    </style>

</head>

<body>
<div id=halaman>
    <h3 id=judul>ONLINE BOOKING PELAYANAN</h3>
    <h3 id=judul>BALAI KIPM SURABAYA II</h3>


    <table id="isi">
        <tr>
            <td style="width: 30%;">Nama</td>
            <td style="width: 5%;">:</td>
            <td style="width: 65%;">{{$antrian -> nama}}</td>
        </tr>
        <tr>
            <td style="width: 30%;">Perusahaan</td>
            <td style="width: 5%;">:</td>
            <td style="width: 65%;">{{$antrian -> nama_perusahaan}}</td>
        </tr>
        <tr>
            <td style="width: 30%; vertical-align: top;">Tanggal Pelayanan</td>
            <td style="width: 5%; vertical-align: top;">:</td>
            <td style="width: 65%;">{{$antrian -> created_at ->format('d/m/Y')}}</td>
        </tr>
        <tr>
            <td style="width: 30%;">Waktu Pelayanan</td>
            <td style="width: 5%;">:</td>
            <td style="width: 65%;">{{$antrian -> created_at -> format('H:i:s')}}</td>
        </tr>
        <tr>
            <td style="width: 30%;">Jenis Pelayanan</td>
            <td style="width: 5%;">:</td>
            <td style="width: 65%;">{{$antrian -> layanan -> nama_layanan}}</td>
        </tr>
        <tr>
            <td style="width: 30%;">Nomor Antrian</td>
            <td style="width: 5%;">:</td>
            <td style="width: 65%;">{{$antrian -> nomor_antrian}}</td>
        </tr>
    </table>


</div>
</body>

</html>
