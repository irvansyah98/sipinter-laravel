<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .content{
            width:100%;
            font-size:14px;
        }
        .col-md-6{
            width:50%;
        }
        .left{
            float:left;
            position:relative;
        }
        .right{
            float:right;
            position:relative
        }
    </style>
</head>
<body>
<!-- Surat Keterangan Untuk Nikah -->
    <div class="content" style="">
        <div class="col-md-6 left" style="border-right:1px dashed #000">
            <table border="0">
                <tr>
                    <td>KANTOR DESA/KELURAHAN</td>
                    <td>:</td>
                    <td></td>
                </tr>
                <tr>
                    <td>KECAMATAN</td>
                    <td>:</td>
                    <td></td>
                </tr>
                <tr>
                    <td>KABUPATEN/KOTA</td>
                    <td>:</td>
                    <td></td>
                </tr>
            </table>
            <center style="margin-top:10px;"><u><b>SURAT KETERANGAN UNTUK NIKAH</b></u>
            <p style="margin-top:2px;margin-bottom:10px;">Nomor : .......................................</p>
            </center>
            <p>Yang bertanda tangan di bawah ini menerangkan dengan sesungguhnya bahwa :</p>
            <table border="0">
                <tr>
                    <td>1.</td>
                    <td>Nama lengkap dan alias</td>
                    <td>:</td>
                    <td>{{ $data->nama_pria }}</td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>Jenis kelamin</td>
                    <td>:</td>
                    <td>{{ $data->jk_pria }}</td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td>Tempat tanggal lahir</td>
                    <td>:</td>
                    <td>{{ $data->tempat_lahir_pria }}, {{ $data->tgl_lahir_pria }}</td>
                </tr>
                <tr>
                    <td>4.</td>
                    <td>Warganegara</td>
                    <td>:</td>
                    <td>{{ $data->warganegara_pria }}</td>
                </tr>
                <tr>
                    <td>5.</td>
                    <td>Agama</td>
                    <td>:</td>
                    <td>{{ $data->agama_pria }}</td>
                </tr>
                <tr>
                    <td>6.</td>
                    <td>Pekerjaan</td>
                    <td>:</td>
                    <td>{{ $data->pekerjaan_pria }}</td>
                </tr>
                <tr>
                    <td>7.</td>
                    <td>Tempat tinggal</td>
                    <td>:</td>
                    <td>{{ $data->tempat_tinggal_pria }}</td>
                </tr>
                <tr>
                    <td>8.</td>
                    <td>Bin</td>
                    <td>:</td>
                    <td>{{ $data->bin_pria }}</td>
                </tr>
                <tr>
                    <td>9.</td>
                    <td>Status perkawinan</td>
                    <td>:</td>
                    <td>{{ $data->status_pria }}</td>
                </tr>
                <tr>
                    <td>10.</td>
                    <td>Nama istri terdahulu</td>
                    <td>:</td>
                    <td>{{ $data->istri_dulu_pria }}</td>
                </tr>
            </table>
            <p>Demikianlah, surat keterangan ini dibuat dengan mengingat sumpah jabatan dan untuk digunakan seperlunya</p>
            <br><br>
            <div class="" style="margin-left:300px;">
                <p>..............,...........................................</p>
                <p>Kepala Desa/Kelurahan ...................</p>
                <br><br><br>
                <p>..................................*)</p>
            </div>
        </div>
        <div class="col-md-6 right" style="margin-left:20px;">
            <table border="0" style="margin-left:10px;">
                <tr>
                    <td>KANTOR DESA/KELURAHAN</td>
                    <td>:</td>
                    <td></td>
                </tr>
                <tr>
                    <td>KECAMATAN</td>
                    <td>:</td>
                    <td></td>
                </tr>
                <tr>
                    <td>KABUPATEN/KOTA</td>
                    <td>:</td>
                    <td></td>
                </tr>
            </table>
            <center style="margin-top:10px; margin-left:10px;"><u><b>SURAT KETERANGAN UNTUK NIKAH</b></u>
            <p style="margin-top:2px;margin-bottom:10px;">Nomor : .......................................</p>
            </center>
            <p style="margin-left:10px;">Yang bertanda tangan di bawah ini menerangkan dengan sesungguhnya bahwa :</p>
            <table border="0" style="margin-left:10px;">
            <tr>
                    <td>1.</td>
                    <td>Nama lengkap dan alias</td>
                    <td>:</td>
                    <td>{{ $data->nama_wanita }}</td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>Jenis kelamin</td>
                    <td>:</td>
                    <td>{{ $data->jk_wanita }}</td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td>Tempat tanggal lahir</td>
                    <td>:</td>
                    <td>{{ $data->tempat_lahir_wanita }}, {{ $data->tgl_lahir_wanita }}</td>
                </tr>
                <tr>
                    <td>4.</td>
                    <td>Warganegara</td>
                    <td>:</td>
                    <td>{{ $data->warganegara_wanita }}</td>
                </tr>
                <tr>
                    <td>5.</td>
                    <td>Agama</td>
                    <td>:</td>
                    <td>{{ $data->agama_wanita }}</td>
                </tr>
                <tr>
                    <td>6.</td>
                    <td>Pekerjaan</td>
                    <td>:</td>
                    <td>{{ $data->pekerjaan_wanita }}</td>
                </tr>
                <tr>
                    <td>7.</td>
                    <td>Tempat tinggal</td>
                    <td>:</td>
                    <td>{{ $data->tempat_tinggal_wanita }}</td>
                </tr>
                <tr>
                    <td>8.</td>
                    <td>Binti</td>
                    <td>:</td>
                    <td>{{ $data->binti_wanita }}</td>
                </tr>
                <tr>
                    <td>9.</td>
                    <td>Status perkawinan</td>
                    <td>:</td>
                    <td>{{ $data->status_wanita }}</td>
                </tr>
                <tr>
                    <td>10.</td>
                    <td>Nama suami terdahulu</td>
                    <td>:</td>
                    <td>{{ $data->suami_dulu_wanita }}</td>
                </tr>
            </table>
            <p style="margin-left:10px;">Demikianlah, surat keterangan ini dibuat dengan mengingat sumpah jabatan dan untuk digunakan seperlunya</p>
            <br><br>
            <div class="" style="margin-left:300px;">
                <p>..............,...........................................</p>
                <p>Kepala Desa/Kelurahan ...................</p>
                <br><br><br>
                <p>..................................*)</p>
            </div>
        </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <!-- Surat Keterangan Asal -Usul -->
    <div class="content" style="font-size:12px;">
        <div class="col-md-6 left" style="border-right:1px dashed #000">
            <table border="0">
                <tr>
                    <td>KANTOR DESA/KELURAHAN</td>
                    <td>:</td>
                    <td></td>
                </tr>
                <tr>
                    <td>KECAMATAN</td>
                    <td>:</td>
                    <td></td>
                </tr>
                <tr>
                    <td>KABUPATEN/KOTA</td>
                    <td>:</td>
                    <td></td>
                </tr>
            </table>
            <center><u><b>SURAT KETERANGAN ASAL - USUL</b></u>
            <p style="margin-top:2px;">Nomor : .......................................</p>
            </center>
            <p>Yang bertanda tangan di bawah ini menerangkan dengan sesungguhnya bahwa :</p>
            <table border="0">
                <tr>
                    <td>I.</td>
                    <td>1.</td>
                    <td>Nama lengkap dan alias</td>
                    <td>:</td>
                    <td>{{ $data->nama_pria }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>2.</td>
                    <td>Tempat tanggal lahir</td>
                    <td>:</td>
                    <td>{{ $data->tempat_lahir_pria }}, {{ $data->tgl_lahir_pria }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>3.</td>
                    <td>Warganegara</td>
                    <td>:</td>
                    <td>{{ $data->warganegara_pria }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>4.</td>
                    <td>Agama</td>
                    <td>:</td>
                    <td>{{ $data->agama_pria }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>5.</td>
                    <td>Pekerjaan</td>
                    <td>:</td>
                    <td>{{ $data->pekerjaan_pria }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>6.</td>
                    <td>Tempat tinggal</td>
                    <td>:</td>
                    <td>{{ $data->tempat_tinggal_pria }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td colspan="3">adalah benar ayah kandung dan ibu kandung dari seorang :</td>
                </tr>
                <tr>
                    <td>II.</td>
                    <td>1.</td>
                    <td>Nama lengkap dan alias</td>
                    <td>:</td>
                    <td>{{ $data->nama_ayah_pria }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>2.</td>
                    <td>Tempat tanggal lahir</td>
                    <td>:</td>
                    <td>{{ $data->tempat_lahir_ayah_pria }}, {{ $data->tgl_lahir_ayah_pria }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>3.</td>
                    <td>Warga negara</td>
                    <td>:</td>
                    <td>{{ $data->warganegara_ayah_pria }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>4.</td>
                    <td>Agama</td>
                    <td>:</td>
                    <td>{{ $data->agama_ayah_pria }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>5.</td>
                    <td>Pekerjaan</td>
                    <td>:</td>
                    <td>{{ $data->pekerjaan_ayah_pria }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>6.</td>
                    <td>Tempat tinggal</td>
                    <td>:</td>
                    <td>{{ $data->tempat_tinggal_ayah_pria }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td colspan="3">dengan seorang wanita :</td>
                </tr>
                <tr>
                    <td></td>
                    <td>1.</td>
                    <td>Nama lengkap dan alias</td>
                    <td>:</td>
                    <td>{{ $data->nama_ibu_pria }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>2.</td>
                    <td>Tempat tanggal lahir</td>
                    <td>:</td>
                    <td>{{ $data->tempat_lahir_ibu_pria }}, {{ $data->tgl_lahir_ibu_pria }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>3.</td>
                    <td>Warga negara</td>
                    <td>:</td>
                    <td>{{ $data->warganegara_ibu_pria }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>4.</td>
                    <td>Agama</td>
                    <td>:</td>
                    <td>{{ $data->agama_ibu_pria }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>5.</td>
                    <td>Pekerjaan</td>
                    <td>:</td>
                    <td>{{ $data->pekerjaan_ibu_pria }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>6.</td>
                    <td>Tempat tinggal</td>
                    <td>:</td>
                    <td>{{ $data->tempat_tinggal_ibu_pria }}</td>
                </tr>
            </table>
            <p>Demikianlah, surat keterangan ini dibuat dengan mengingat sumpah jabatan dan untuk digunakan seperlunya</p>
            
            <div class="" style="margin-left:300px;margin-top:-15px;">
                <p>..............,...........................................</p>
                <p>Kepala Desa/Kelurahan ...................</p>
                <br><br>
                <p>..................................*)</p>
            </div>
        </div>
        <div class="col-md-6 right" style="margin-left:20px;">
            <table border="0" style="margin-left:10px;">
                <tr>
                    <td>KANTOR DESA/KELURAHAN</td>
                    <td>:</td>
                    <td></td>
                </tr>
                <tr>
                    <td>KECAMATAN</td>
                    <td>:</td>
                    <td></td>
                </tr>
                <tr>
                    <td>KABUPATEN/KOTA</td>
                    <td>:</td>
                    <td></td>
                </tr>
            </table>
            <center style="margin-left:10px;"><u><b>SURAT KETERANGAN ASAL - USUL</b></u>
            <p style="margin-top:2px;">Nomor : .......................................</p>
            </center>
            <p style="margin-left:10px;">Yang bertanda tangan di bawah ini menerangkan dengan sesungguhnya bahwa :</p>
            <table border="0" style="margin-left:10px;">
            <tr>
                    <td>I.</td>
                    <td>1.</td>
                    <td>Nama lengkap dan alias</td>
                    <td>:</td>
                    <td>{{ $data->nama_wanita }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>2.</td>
                    <td>Tempat tanggal lahir</td>
                    <td>:</td>
                    <td>{{ $data->tempat_lahir_wanita }}, {{ $data->tgl_lahir_wanita }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>3.</td>
                    <td>Warganegara</td>
                    <td>:</td>
                    <td>{{ $data->warganegara_wanita }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>4.</td>
                    <td>Agama</td>
                    <td>:</td>
                    <td>{{ $data->agama_wanita }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>5.</td>
                    <td>Pekerjaan</td>
                    <td>:</td>
                    <td>{{ $data->pekerjaan_wanita }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>6.</td>
                    <td>Tempat tinggal</td>
                    <td>:</td>
                    <td>{{ $data->tempat_tinggal_wanita }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td colspan="3">adalah benar ayah kandung dan ibu kandung dari seorang :</td>
                </tr>
                <tr>
                    <td>II.</td>
                    <td>1.</td>
                    <td>Nama lengkap dan alias</td>
                    <td>:</td>
                    <td>{{ $data->nama_ayah_wanita }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>2.</td>
                    <td>Tempat tanggal lahir</td>
                    <td>:</td>
                    <td>{{ $data->tempat_lahir_ayah_wanita }}, {{ $data->tgl_lahir_ayah_wanita }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>3.</td>
                    <td>Warga negara</td>
                    <td>:</td>
                    <td>{{ $data->warganegara_ayah_wanita }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>4.</td>
                    <td>Agama</td>
                    <td>:</td>
                    <td>{{ $data->agama_ayah_wanita }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>5.</td>
                    <td>Pekerjaan</td>
                    <td>:</td>
                    <td>{{ $data->pekerjaan_ayah_wanita }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>6.</td>
                    <td>Tempat tinggal</td>
                    <td>:</td>
                    <td>{{ $data->tempat_tinggal_ayah_wanita }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td colspan="3">dengan seorang wanita :</td>
                </tr>
                <tr>
                    <td></td>
                    <td>1.</td>
                    <td>Nama lengkap dan alias</td>
                    <td>:</td>
                    <td>{{ $data->nama_ibu_wanita }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>2.</td>
                    <td>Tempat tanggal lahir</td>
                    <td>:</td>
                    <td>{{ $data->tempat_lahir_ibu_wanita }}, {{ $data->tgl_lahir_ibu_wanita }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>3.</td>
                    <td>Warga negara</td>
                    <td>:</td>
                    <td>{{ $data->warganegara_ibu_wanita }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>4.</td>
                    <td>Agama</td>
                    <td>:</td>
                    <td>{{ $data->agama_ibu_wanita }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>5.</td>
                    <td>Pekerjaan</td>
                    <td>:</td>
                    <td>{{ $data->pekerjaan_ibu_wanita }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>6.</td>
                    <td>Tempat tinggal</td>
                    <td>:</td>
                    <td>{{ $data->tempat_tinggal_ibu_wanita }}</td>
                </tr>
            </table>
            <p style="margin-left:10px;">Demikianlah, surat keterangan ini dibuat dengan mengingat sumpah jabatan dan untuk digunakan seperlunya</p>
            
            <div class="" style="margin-left:300px;margin-top:-15px;">
                <p>..............,...........................................</p>
                <p>Kepala Desa/Kelurahan ...................</p>
                <br><br>
                <p>..................................*)</p>
            </div>
        </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <!-- Surat Persetujuan Mempelai -->
    <div class="content" style="font-size:12px;">
        <div class="col-md-6 left" style="border-right:1px dashed #000">
            <center><u><b>SURAT PERSETUJUAN MEMPELAI</b></u>
            <p style="margin-top:2px;">Nomor : .......................................</p>
            </center>
            <p>Yang bertanda tangan di bawah ini :</p>
            <table border="0">
                <tr>
                    <td><b>I.</b></td>
                    <td colspan="3"><b>Calon Suami :</b></td>
                </tr>
                <tr>
                    <td></td>
                    <td>1.</td>
                    <td>Nama lengkap dan alias</td>
                    <td>:</td>
                    <td>{{ $data->nama_pria }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>2.</td>
                    <td>Bin</td>
                    <td>:</td>
                    <td>{{ $data->bin_pria }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>3.</td>
                    <td>Tempat tanggal lahir</td>
                    <td>:</td>
                    <td>{{ $data->tempat_lahir_pria }}, {{ $data->tgl_lahir_pria }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>4.</td>
                    <td>Warganegara</td>
                    <td>:</td>
                    <td>{{ $data->warganegara_pria }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>5.</td>
                    <td>Agama</td>
                    <td>:</td>
                    <td>{{ $data->agama_pria }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>6.</td>
                    <td>Pekerjaan</td>
                    <td>:</td>
                    <td>{{ $data->pekerjaan_pria }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>7.</td>
                    <td>Tempat tinggal</td>
                    <td>:</td>
                    <td>{{ $data->tempat_tinggal_pria }}</td>
                </tr>
                <tr>
                    <td><b>II.</b></td>
                    <td colspan="3"><b>Calon Istri :</b></td>
                </tr>
                <tr>
                    <td></td>
                    <td>1.</td>
                    <td>Nama lengkap dan alias</td>
                    <td>:</td>
                    <td>{{ $data->nama_wanita }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>2.</td>
                    <td>Binti</td>
                    <td>:</td>
                    <td>{{ $data->binti_wanita }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>3.</td>
                    <td>Tempat tanggal lahir</td>
                    <td>:</td>
                    <td>{{ $data->tempat_lahir_wanita }}, {{ $data->tgl_lahir_wanita }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>4.</td>
                    <td>Warga negara</td>
                    <td>:</td>
                    <td>{{ $data->warganegara_wanita }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>5.</td>
                    <td>Agama</td>
                    <td>:</td>
                    <td>{{ $data->agama_wanita }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>6.</td>
                    <td>Pekerjaan</td>
                    <td>:</td>
                    <td>{{ $data->pekerjaan_wanita }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>7.</td>
                    <td>Tempat tinggal</td>
                    <td>:</td>
                    <td>{{ $data->tempat_tinggal_wanita }}</td>
                </tr>
            </table>
            <p>Menyatakan dengan sesungguhnya bahwa atas dasar suka rela, dengan kesadaran sendiri, tanpa paksaan dari siapapun juga, setuju untuk melangsungkan pernikahan.</p>
            <p>Demikianlah, surat keterangan ini dibuat dengan mengingat sumpah jabatan dan untuk digunakan seperlunya</p>
            
            <div class="" style="margin-top:-15px;">
                <p style="margin-left:300px;">..............................................,20...........</p>
                <p><span style="margin-left:80px;">I. Calon Suami</span><span style="margin-left:200px;">II. Calon Istri</span></p>
                <br><br>
                <p><span style="margin-left:80px;">..................................</span><span style="margin-left:170px;">..................................</span></p>
            </div>
        </div>
        <div class="col-md-6 right">
            <center style="margin-left:10px;"><u><b>SURAT PERSETUJUAN MEMPELAI</b></u>
            <p style="margin-top:2px;">Nomor : .......................................</p>
            </center>
            <p style="margin-left:10px;">Yang bertanda tangan di bawah ini :</p>
            <table border="0" style="margin-left:10px;">
            <tr>
                    <td><b>I.</b></td>
                    <td colspan="3"><b>Calon Suami :</b></td>
                </tr>
                <tr>
                    <td></td>
                    <td>1.</td>
                    <td>Nama lengkap dan alias</td>
                    <td>:</td>
                    <td>{{ $data->nama_pria }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>2.</td>
                    <td>Bin</td>
                    <td>:</td>
                    <td>{{ $data->bin_pria }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>3.</td>
                    <td>Tempat tanggal lahir</td>
                    <td>:</td>
                    <td>{{ $data->tempat_lahir_pria }}, {{ $data->tgl_lahir_pria }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>4.</td>
                    <td>Warganegara</td>
                    <td>:</td>
                    <td>{{ $data->warganegara_pria }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>5.</td>
                    <td>Agama</td>
                    <td>:</td>
                    <td>{{ $data->agama_pria }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>6.</td>
                    <td>Pekerjaan</td>
                    <td>:</td>
                    <td>{{ $data->pekerjaan_pria }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>7.</td>
                    <td>Tempat tinggal</td>
                    <td>:</td>
                    <td>{{ $data->tempat_tinggal_pria }}</td>
                </tr>
                <tr>
                    <td><b>II.</b></td>
                    <td colspan="3"><b>Calon Istri :</b></td>
                </tr>
                <tr>
                    <td></td>
                    <td>1.</td>
                    <td>Nama lengkap dan alias</td>
                    <td>:</td>
                    <td>{{ $data->nama_wanita }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>2.</td>
                    <td>Binti</td>
                    <td>:</td>
                    <td>{{ $data->binti_wanita }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>3.</td>
                    <td>Tempat tanggal lahir</td>
                    <td>:</td>
                    <td>{{ $data->tempat_lahir_wanita }}, {{ $data->tgl_lahir_wanita }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>4.</td>
                    <td>Warga negara</td>
                    <td>:</td>
                    <td>{{ $data->warganegara_wanita }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>5.</td>
                    <td>Agama</td>
                    <td>:</td>
                    <td>{{ $data->agama_wanita }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>6.</td>
                    <td>Pekerjaan</td>
                    <td>:</td>
                    <td>{{ $data->pekerjaan_wanita }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>7.</td>
                    <td>Tempat tinggal</td>
                    <td>:</td>
                    <td>{{ $data->tempat_tinggal_wanita }}</td>
                </tr>
            </table>
            <p style="margin-left:10px;">Menyatakan dengan sesungguhnya bahwa atas dasar suka rela, dengan kesadaran sendiri, tanpa paksaan dari siapapun juga, setuju untuk melangsungkan pernikahan.</p>
            <p style="margin-left:10px;">Demikianlah, surat keterangan ini dibuat dengan mengingat sumpah jabatan dan untuk digunakan seperlunya</p>
            
            <div class="" style="margin-top:-15px;">
                <p style="margin-left:300px;">..............................................,20...........</p>
                <p><span style="margin-left:80px;">I. Calon Suami</span><span style="margin-left:200px;">II. Calon Istri</span></p>
                <br><br>
                <p><span style="margin-left:80px;">..................................</span><span style="margin-left:170px;">..................................</span></p>
            </div>
        </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <!-- Surat Keterangan Tentang Orangtua -->
    <div class="content" style="font-size:12px;">
        <div class="col-md-6 left" style="border-right:1px dashed #000">
            <table border="0">
                <tr>
                    <td>KANTOR DESA/KELURAHAN</td>
                    <td>:</td>
                    <td></td>
                </tr>
                <tr>
                    <td>KECAMATAN</td>
                    <td>:</td>
                    <td></td>
                </tr>
                <tr>
                    <td>KABUPATEN/KOTA</td>
                    <td>:</td>
                    <td></td>
                </tr>
            </table>
            <center><u><b>SURAT KETERANGAN TENTANG ORANG TUA</b></u>
            <p style="margin-top:2px;">Nomor : .......................................</p>
            </center>
            <p>Yang bertanda tangan di bawah ini menerangkan dengan sesungguhnya bahwa :</p>
            <table border="0">
                <tr>
                    <td>I.</td>
                    <td>1.</td>
                    <td>Nama lengkap dan alias</td>
                    <td>:</td>
                    <td>{{ $data->nama_ayah_pria }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>2.</td>
                    <td>Tempat tanggal lahir</td>
                    <td>:</td>
                    <td>{{ $data->tempat_lahir_ayah_pria }}, {{ $data->tgl_lahir_ayah_pria }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>3.</td>
                    <td>Warga negara</td>
                    <td>:</td>
                    <td>{{ $data->warganegara_ayah_pria }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>4.</td>
                    <td>Agama</td>
                    <td>:</td>
                    <td>{{ $data->agama_ayah_pria }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>5.</td>
                    <td>Pekerjaan</td>
                    <td>:</td>
                    <td>{{ $data->pekerjaan_ayah_pria }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>6.</td>
                    <td>Tempat tinggal</td>
                    <td>:</td>
                    <td>{{ $data->tempat_tinggal_ayah_pria }}</td>
                </tr>
                <tr>
                    <td>II.</td>
                    <td>1.</td>
                    <td>Nama lengkap dan alias</td>
                    <td>:</td>
                    <td>{{ $data->nama_ibu_pria
                     }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>2.</td>
                    <td>Tempat tanggal lahir</td>
                    <td>:</td>
                    <td>{{ $data->tempat_lahir_ibu_pria }}, {{ $data->tgl_lahir_ibu_pria}}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>3.</td>
                    <td>Warga negara</td>
                    <td>:</td>
                    <td>{{ $data->warganegara_ibu_pria }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>4.</td>
                    <td>Agama</td>
                    <td>:</td>
                    <td>{{ $data->agama_ibu_pria }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>5.</td>
                    <td>Pekerjaan</td>
                    <td>:</td>
                    <td>{{ $data->pekerjaan_ibu_pria }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>6.</td>
                    <td>Tempat tinggal</td>
                    <td>:</td>
                    <td>{{ $data->tempat_tinggal_ibu_pria }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td colspan="4">adalah benar ayah kandung dan ibu kandung dari seorang :</td>
                </tr>
                <tr>
                    <td></td>
                    <td>1.</td>
                    <td>Nama lengkap dan alias</td>
                    <td>:</td>
                    <td>{{ $data->nama_pria }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>2.</td>
                    <td>Tempat tanggal lahir</td>
                    <td>:</td>
                    <td>{{ $data->tempat_lahir_pria }}, {{ $data->tgl_lahir_pria }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>3.</td>
                    <td>Warga negara</td>
                    <td>:</td>
                    <td>{{ $data->warganegara_pria }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>4.</td>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>{{ $data->jk_pria }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>5.</td>
                    <td>Agama</td>
                    <td>:</td>
                    <td>{{ $data->agama_pria }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>6.</td>
                    <td>Pekerjaan</td>
                    <td>:</td>
                    <td>{{ $data->pekerjaan_pria }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>7.</td>
                    <td>Tempat tinggal</td>
                    <td>:</td>
                    <td>{{ $data->tempat_tinggal_pria }}</td>
                </tr>
            </table>
            <p>Demikianlah, surat keterangan ini dibuat dengan mengingat sumpah jabatan dan untuk digunakan seperlunya</p>
            
            <div class="" style="margin-left:300px;margin-top:-15px;">
                <p>..............,...........................................</p>
                <p>Kepala Desa/Kelurahan ...................</p>
                <br><br>
                <p>..................................*)</p>
            </div>
        </div>
        <div class="col-md-6 right" style="margin-left:20px;">
            <table border="0" style="margin-left:10px;">
                <tr>
                    <td>KANTOR DESA/KELURAHAN</td>
                    <td>:</td>
                    <td></td>
                </tr>
                <tr>
                    <td>KECAMATAN</td>
                    <td>:</td>
                    <td></td>
                </tr>
                <tr>
                    <td>KABUPATEN/KOTA</td>
                    <td>:</td>
                    <td></td>
                </tr>
            </table>
            <center style="margin-left:10px;"><u><b>SURAT KETERANGAN TENTANG ORANG TUA</b></u>
            <p style="margin-top:2px;">Nomor : .......................................</p>
            </center>
            <p style="margin-left:10px;">Yang bertanda tangan di bawah ini menerangkan dengan sesungguhnya bahwa :</p>
            <table border="0" style="margin-left:10px;">
                <tr>
                    <td>I.</td>
                    <td>1.</td>
                    <td>Nama lengkap dan alias</td>
                    <td>:</td>
                    <td>{{ $data->nama_ayah_wanita }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>2.</td>
                    <td>Tempat tanggal lahir</td>
                    <td>:</td>
                    <td>{{ $data->tempat_lahir_ayah_wanita }}, {{ $data->tgl_lahir_ayah_wanita }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>3.</td>
                    <td>Warga negara</td>
                    <td>:</td>
                    <td>{{ $data->warganegara_ayah_wanita }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>4.</td>
                    <td>Agama</td>
                    <td>:</td>
                    <td>{{ $data->agama_ayah_wanita }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>5.</td>
                    <td>Pekerjaan</td>
                    <td>:</td>
                    <td>{{ $data->pekerjaan_ayah_wanita }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>6.</td>
                    <td>Tempat tinggal</td>
                    <td>:</td>
                    <td>{{ $data->tempat_tinggal_ayah_wanita }}</td>
                </tr>
                <tr>
                    <td>II.</td>
                    <td>1.</td>
                    <td>Nama lengkap dan alias</td>
                    <td>:</td>
                    <td>{{ $data->nama_ibu_wanita
                     }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>2.</td>
                    <td>Tempat tanggal lahir</td>
                    <td>:</td>
                    <td>{{ $data->tempat_lahir_ibu_wanita }}, {{ $data->tgl_lahir_ibu_wanita}}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>3.</td>
                    <td>Warga negara</td>
                    <td>:</td>
                    <td>{{ $data->warganegara_ibu_wanita }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>4.</td>
                    <td>Agama</td>
                    <td>:</td>
                    <td>{{ $data->agama_ibu_wanita }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>5.</td>
                    <td>Pekerjaan</td>
                    <td>:</td>
                    <td>{{ $data->pekerjaan_ibu_wanita }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>6.</td>
                    <td>Tempat tinggal</td>
                    <td>:</td>
                    <td>{{ $data->tempat_tinggal_ibu_wanita }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td colspan="4">adalah benar ayah kandung dan ibu kandung dari seorang :</td>
                </tr>
                <tr>
                    <td></td>
                    <td>1.</td>
                    <td>Nama lengkap dan alias</td>
                    <td>:</td>
                    <td>{{ $data->nama_wanita }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>2.</td>
                    <td>Tempat tanggal lahir</td>
                    <td>:</td>
                    <td>{{ $data->tempat_lahir_wanita }}, {{ $data->tgl_lahir_wanita }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>3.</td>
                    <td>Warga negara</td>
                    <td>:</td>
                    <td>{{ $data->warganegara_wanita }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>4.</td>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>{{ $data->jk_wanita }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>5.</td>
                    <td>Agama</td>
                    <td>:</td>
                    <td>{{ $data->agama_wanita }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>6.</td>
                    <td>Pekerjaan</td>
                    <td>:</td>
                    <td>{{ $data->pekerjaan_wanita }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>7.</td>
                    <td>Tempat tinggal</td>
                    <td>:</td>
                    <td>{{ $data->tempat_tinggal_wanita }}</td>
                </tr>
            </table>
            <p style="margin-left:10px;">Demikianlah, surat keterangan ini dibuat dengan mengingat sumpah jabatan dan untuk digunakan seperlunya</p>
            
            <div class="" style="margin-left:300px;margin-top:-15px;">
                <p>..............,...........................................</p>
                <p>Kepala Desa/Kelurahan ...................</p>
                <br><br>
                <p>..................................*)</p>
            </div>
        </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <!-- Surat Izin Orangtua -->
    <div class="content" style="font-size:12px;">
        <div class="col-md-6 left" style="border-right:1px dashed #000">
            <center><u><b>SURAT IZIN ORANG TUA</b></u>
            <p style="margin-top:2px;">Nomor : .......................................</p>
            </center>
            <p>Yang bertanda tangan di bawah :</p>
            <table border="0"  style="margin-top:-15px;">
                <tr>
                    <td>I.</td>
                    <td>1.</td>
                    <td>Nama lengkap dan alias</td>
                    <td>:</td>
                    <td>{{ $data->nama_ayah_pria }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>2.</td>
                    <td>Tempat tanggal lahir</td>
                    <td>:</td>
                    <td>{{ $data->tempat_lahir_ayah_pria }}, {{ $data->tgl_lahir_ayah_pria }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>3.</td>
                    <td>Warga negara</td>
                    <td>:</td>
                    <td>{{ $data->warganegara_ayah_pria }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>4.</td>
                    <td>Agama</td>
                    <td>:</td>
                    <td>{{ $data->agama_ayah_pria }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>5.</td>
                    <td>Pekerjaan</td>
                    <td>:</td>
                    <td>{{ $data->pekerjaan_ayah_pria }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>6.</td>
                    <td>Tempat tinggal</td>
                    <td>:</td>
                    <td>{{ $data->tempat_tinggal_ayah_pria }}</td>
                </tr>
                <tr>
                    <td>II.</td>
                    <td>1.</td>
                    <td>Nama lengkap dan alias</td>
                    <td>:</td>
                    <td>{{ $data->nama_ibu_pria
                     }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>2.</td>
                    <td>Tempat tanggal lahir</td>
                    <td>:</td>
                    <td>{{ $data->tempat_lahir_ibu_pria }}, {{ $data->tgl_lahir_ibu_pria}}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>3.</td>
                    <td>Warga negara</td>
                    <td>:</td>
                    <td>{{ $data->warganegara_ibu_pria }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>4.</td>
                    <td>Agama</td>
                    <td>:</td>
                    <td>{{ $data->agama_ibu_pria }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>5.</td>
                    <td>Pekerjaan</td>
                    <td>:</td>
                    <td>{{ $data->pekerjaan_ibu_pria }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>6.</td>
                    <td>Tempat tinggal</td>
                    <td>:</td>
                    <td>{{ $data->tempat_tinggal_ibu_pria }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td colspan="4">adalah benar ayah kandung dan ibu kandung dari seorang :</td>
                </tr>
                <tr>
                    <td></td>
                    <td>1.</td>
                    <td>Nama lengkap dan alias</td>
                    <td>:</td>
                    <td>{{ $data->nama_pria }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>2.</td>
                    <td>Tempat tanggal lahir</td>
                    <td>:</td>
                    <td>{{ $data->tempat_lahir_pria }}, {{ $data->tgl_lahir_pria }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>3.</td>
                    <td>Warga negara</td>
                    <td>:</td>
                    <td>{{ $data->warganegara_pria }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>4.</td>
                    <td>Agama</td>
                    <td>:</td>
                    <td>{{ $data->agama_pria }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>5.</td>
                    <td>Pekerjaan</td>
                    <td>:</td>
                    <td>{{ $data->pekerjaan_pria }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>6.</td>
                    <td>Tempat tinggal</td>
                    <td>:</td>
                    <td>{{ $data->tempat_tinggal_pria }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td colspan="4">memberikan izin kepadanya untuk melakukan pernikahan dengan :</td>
                </tr>
                <tr>
                    <td></td>
                    <td>1.</td>
                    <td>Nama lengkap dan alias</td>
                    <td>:</td>
                    <td>{{ $data->nama_wanita }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>2.</td>
                    <td>Tempat tanggal lahir</td>
                    <td>:</td>
                    <td>{{ $data->tempat_lahir_wanita }}, {{ $data->tgl_lahir_wanita }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>3.</td>
                    <td>Warga negara</td>
                    <td>:</td>
                    <td>{{ $data->warganegara_wanita }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>4.</td>
                    <td>Agama</td>
                    <td>:</td>
                    <td>{{ $data->agama_wanita }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>5.</td>
                    <td>Pekerjaan</td>
                    <td>:</td>
                    <td>{{ $data->pekerjaan_wanita }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>6.</td>
                    <td>Tempat tinggal</td>
                    <td>:</td>
                    <td>{{ $data->tempat_tinggal_wanita }}</td>
                </tr>
            </table>
            <p style="margin-top:2px;">Demikianlah, surat keterangan ini dibuat dengan mengingat sumpah jabatan dan untuk digunakan seperlunya</p>
            <div class="" style="margin-top:-15px;">
                <p style="margin-left:300px; margin-top:2px;">..............................................,20...........</p>
                <p><span style="margin-left:80px;">I. Ayah</span><span style="margin-left:200px;">II. Ibu</span></p>
                <br>
                <p><span style="margin-left:80px;">..................................</span><span style="margin-left:140px;">..................................</span></p>
            </div>
        </div>
        <div class="col-md-6 right" style="margin-left:20px;">
            <center style="margin-left:10px;"><u><b>SURAT IZIN ORANG TUA</b></u>
            <p style="margin-top:2px;">Nomor : .......................................</p>
            </center>
            <p style="margin-left:10px;">Yang bertanda tangan di bawah ini :</p>
            <table border="0" style="margin-left:10px; margin-top:-15px;">
                <tr>
                    <td>I.</td>
                    <td>1.</td>
                    <td>Nama lengkap dan alias</td>
                    <td>:</td>
                    <td>{{ $data->nama_ayah_wanita }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>2.</td>
                    <td>Tempat tanggal lahir</td>
                    <td>:</td>
                    <td>{{ $data->tempat_lahir_ayah_wanita }}, {{ $data->tgl_lahir_ayah_wanita }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>3.</td>
                    <td>Warga negara</td>
                    <td>:</td>
                    <td>{{ $data->warganegara_ayah_wanita }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>4.</td>
                    <td>Agama</td>
                    <td>:</td>
                    <td>{{ $data->agama_ayah_wanita }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>5.</td>
                    <td>Pekerjaan</td>
                    <td>:</td>
                    <td>{{ $data->pekerjaan_ayah_wanita }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>6.</td>
                    <td>Tempat tinggal</td>
                    <td>:</td>
                    <td>{{ $data->tempat_tinggal_ayah_wanita }}</td>
                </tr>
                <tr>
                    <td>II.</td>
                    <td>1.</td>
                    <td>Nama lengkap dan alias</td>
                    <td>:</td>
                    <td>{{ $data->nama_ibu_wanita
                     }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>2.</td>
                    <td>Tempat tanggal lahir</td>
                    <td>:</td>
                    <td>{{ $data->tempat_lahir_ibu_wanita }}, {{ $data->tgl_lahir_ibu_wanita}}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>3.</td>
                    <td>Warga negara</td>
                    <td>:</td>
                    <td>{{ $data->warganegara_ibu_wanita }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>4.</td>
                    <td>Agama</td>
                    <td>:</td>
                    <td>{{ $data->agama_ibu_wanita }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>5.</td>
                    <td>Pekerjaan</td>
                    <td>:</td>
                    <td>{{ $data->pekerjaan_ibu_wanita }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>6.</td>
                    <td>Tempat tinggal</td>
                    <td>:</td>
                    <td>{{ $data->tempat_tinggal_ibu_wanita }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td colspan="4">adalah benar ayah kandung dan ibu kandung dari seorang :</td>
                </tr>
                <tr>
                    <td></td>
                    <td>1.</td>
                    <td>Nama lengkap dan alias</td>
                    <td>:</td>
                    <td>{{ $data->nama_wanita }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>2.</td>
                    <td>Tempat tanggal lahir</td>
                    <td>:</td>
                    <td>{{ $data->tempat_lahir_wanita }}, {{ $data->tgl_lahir_wanita }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>3.</td>
                    <td>Warga negara</td>
                    <td>:</td>
                    <td>{{ $data->warganegara_wanita }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>4.</td>
                    <td>Agama</td>
                    <td>:</td>
                    <td>{{ $data->agama_wanita }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>5.</td>
                    <td>Pekerjaan</td>
                    <td>:</td>
                    <td>{{ $data->pekerjaan_wanita }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>6.</td>
                    <td>Tempat tinggal</td>
                    <td>:</td>
                    <td>{{ $data->tempat_tinggal_wanita }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td colspan="4">memberikan izin kepadanya untuk melakukan pernikahan dengan :</td>
                </tr>
                <tr>
                    <td></td>
                    <td>1.</td>
                    <td>Nama lengkap dan alias</td>
                    <td>:</td>
                    <td>{{ $data->nama_pria }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>2.</td>
                    <td>Tempat tanggal lahir</td>
                    <td>:</td>
                    <td>{{ $data->tempat_lahir_pria }}, {{ $data->tgl_lahir_pria }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>3.</td>
                    <td>Warga negara</td>
                    <td>:</td>
                    <td>{{ $data->warganegara_pria }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>4.</td>
                    <td>Agama</td>
                    <td>:</td>
                    <td>{{ $data->agama_pria }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>5.</td>
                    <td>Pekerjaan</td>
                    <td>:</td>
                    <td>{{ $data->pekerjaan_pria }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>6.</td>
                    <td>Tempat tinggal</td>
                    <td>:</td>
                    <td>{{ $data->tempat_tinggal_pria }}</td>
                </tr>
            </table>
            <p style="margin-left:10px; margin-top:2px;">Demikianlah, surat keterangan ini dibuat dengan mengingat sumpah jabatan dan untuk digunakan seperlunya</p>
            
            <div class="" style="margin-top:-15px;">
                <p style="margin-left:300px; margin-top:2px;">..............................................,20...........</p>
                <p><span style="margin-left:80px;">I. Ayah</span><span style="margin-left:200px;">II. Ibu</span></p>
                <br>
                <p><span style="margin-left:80px;">..................................</span><span style="margin-left:140px;">..................................</span></p>
            </div>
        </div>
    </div>
</body>
</html>