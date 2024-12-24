<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Pengantar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            background-color: #f9f9f9;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        .header {
            text-align: center;
        }


        .kiri {
            text-align: left;
            letter-spacing: 1px;

        }

        .tanda-tangan {

            display: flex;
            justify-content: space-between;
            text-align: center;
        }
    </style>
</head>

<body>
    <?php foreach ($cetak as $i) : ?>

        <h5 style="text-align: center;">PEMERINTAHAN KABUPATEN BREBES <br>KECAMATAN BANJARHARJO <br>DESA BANDUNGSARI <br>Alamat : Jl. Raya Desa Bandungsari Kecamatan Banjarharjo Kabupaten Brebes 52265</h5>
        <!-- <p style="text-align: center;">Alamat : Jl. Raya Desa Bandungsari Kecamatan Banjarharjo Kabupaten Brebes  52265</p> -->
        <hr>
        <p>Kode Desa : 29172001</p>
        <div class="header">
            <h2> <?php

                    if ($i['jenis_pengajuan'] == 'Surat Pengantar KTP') {
                        echo 'SURAT PENGANTAR KTP';
                    } elseif ($i['jenis_pengajuan'] == 'SKCK') {
                        echo 'SURAT PENGANTAR CATATAN KEPOLISIAN';
                    } elseif ($i['jenis_pengajuan'] == 'Surat Ketarangan Usaha') {
                        echo 'SURAT KETERANGAN USAHA';
                    } elseif ($i['jenis_pengajuan'] == 'Surat Ketarangan Umum') {
                        echo 'SURAT KETERANGAN UMUM';
                    } elseif ($i['jenis_pengajuan'] == 'Surat Kehilangan') {
                        echo 'SURAT PENGANTAR KEHILANGAN';
                    } elseif ($i['jenis_pengajuan'] == 'Surat Keterangan Tidak Mampu') {
                        echo 'SURAT KETERANGAN TIDAK MAMPU';
                    } elseif ($i['jenis_pengajuan'] == 'Surat Kuasa KK') {
                        echo 'SURAT KUASA KARTU KELUARGA';
                    } elseif ($i['jenis_pengajuan'] == 'Surat Ijin Keluarga') {
                        echo 'SURAT IJIN KELUARGA';
                    } elseif ($i['jenis_pengajuan'] == 'Surat Keterangan Usaha ke Bank') {
                        echo 'SURAT KETERANGAN USAHA KE BANK';
                    } elseif ($i['jenis_pengajuan'] == 'Surat Keterangan Ahli Waris') {
                        echo 'SURAT KETERANGAN AHLI WARIS';
                    } elseif ($i['jenis_pengajuan'] == 'Surat Keterangan Domisili') {
                        echo 'SURAT KETERANGAN DOMISILI';
                    } elseif ($i['jenis_pengajuan'] == 'Surat Ijin Keluarga') {
                        echo 'SURAT IJIN KELUARGA';
                    } elseif ($i['jenis_pengajuan'] == 'Surat Keterangan Tanah Tidak Sengketa') {
                        echo 'SURAT KETERANGAN TANAH TIDAK SENGKETA';
                    } elseif ($i['jenis_pengajuan'] == 'Surat Keterangan Penghasilan Orangtua') {
                        echo 'SURAT KETERANGAN PENGHASILAN ORANGTUA';
                    } elseif ($i['jenis_pengajuan'] == 'Surat Keterangan Pengaktifan BPJS') {
                        echo 'SURAT KETERANGAN PENGAKTIFAN BPJS';
                    } elseif ($i['jenis_pengajuan'] == 'Surat Pengajuan Dishub') {
                        echo 'SURAT PENGANTAR DISHUB';
                    }
                    ?>
            </h2>
            <p>NOMOR : 331/514/2001/VIII/2023</p>
        </div>
        <p>Yang bertanda tangan dibawah ini kami Kepala Desa Bandungsari Kecamatan Banjarharjo Kabupaten Brebes Provinsi Jawa Tengah, menerangkan bahwa :</p>
        <table>
            <tr>
                <td>1. Nama Lengkap</td>
                <td>: <?= $i['nama']; ?></td>
                <td></td>
            </tr>
            <tr>
                <td>2. Jenis Kelamin</td>
                <td>: <?= $i['gender']; ?></td>
                <td></td>
            </tr>
            <tr>
                <td>3. Tempat/Tanggal Lahir</td>
                <td>: <?= $i['tempat_lahir']; ?>,<?= $i['tanggal_lahir']; ?></td>
                <td></td>
            </tr>
            <tr>
                <td>4. Warga Negara</td>
                <td>: <?= $i['negara']; ?></td>
                <td></td>
            </tr>
            <tr>
                <td>5. Agama</td>
                <td>: <?= $i['agama']; ?></td>
                <td></td>
            </tr>
            <tr>
                <td>6. Status Perkawinan</td>
                <td>: <?= $i['status_perkawinan']; ?></td>
                <td></td>
            </tr>
            <tr>
                <td>7. No. KTP/NIK</td>
                <td>: <?= $i['nik']; ?></td>
                <td></td>
            </tr>
            <tr>
                <td>8. Pekerjaan</td>
                <td>: <?= $i['pekerjaan']; ?></td>
                <td></td>
            </tr>
            <tr>
                <td>9. Alamat</td>
                <td>: <?= $i['alamat']; ?></td>
                <td></td>
            </tr>
        </table>

        <p>Berdasarkan Surat Keterangan dari Ketua Hukum Warga RW 006 Nomor Tanggal 04 Agustus 2023 dan menurut pengakuan yang bersangkutan sampai saat ini belum pernah tersangkut yustisi/urusan kepolisian.</p>
        <p>Surat keterangan ini diperlukan untuk Pembuatan <?= $i['jenis_pengajuan']; ?>.</p>
        <p>Demikian Surat Keterangan ini kami buat atas permintaan yang bersangkutan dan dapat dipergunakan sebagaimana mestinya.</p>

        <div class="tanda-tangan">
            <div>
                No. Reg :
                <br>
                Tanggal :
            </div>
            <div class="kiri">
                Pemohon &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mengetahui&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bandungsari, 25 Sepetember 2023
                <br>
                Pemohon &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Camat Banjaharjo &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;KEPALA DESA
                <br><br><br>
                (<?= $i['nama']; ?>)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(.........)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(KODIR)
            </div>
        </div>

    <?php endforeach; ?>
</body>

</html>