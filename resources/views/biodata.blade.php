<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="content">
            <table>
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Asal Daerah</th>
                        <th>Asal Desa</th>
                        <th>Asal Kelompok</th>
                        <th>Universitas</th>
                        <th>Fakultas</th>
                        <th>Jurusan</th>
                        <th>Tahun Masuk Kuliah</th>
                        <th>Status Mubaligh</th>
                        <th>Nama Ayah</th>
                        <th>Nama Ibu</th>
                        <th>No Telp</th>
                        <th>No Telp Orang tua</th>
                        <th>Riwayat Penyakit</th>
                        <th>Motivasi Masuk PPM</th>
                        <th>Golongan Darah</th>
                    </tr>
                </thead>
                @php
                    $i = 1;
                @endphp
                <tbody>
                    @foreach($datas as $data)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$data->nama}}</td>
                        <td>{{$data->tempat_lahir}}</td>
                        <td>{{$data->tanggal_lahir}}</td>
                        <td>{{$data->jenis_kelamin}}</td>
                        <td>{{$data->asal_daerah}}</td>
                        <td>{{$data->asal_desa}}</td>
                        <td>{{$data->asal_kelompok}}</td>
                        <td>{{$data->universitas}}</td>
                        <td>{{$data->fakultas}}</td>
                        <td>{{$data->jurusan}}</td>
                        <td>{{$data->tahun_masuk_kuliah}}</td>
                        <td>{{$data->status_mubaligh}}</td>
                        <td>{{$data->nama_ayah}}</td>
                        <td>{{$data->nama_ibu}}</td>
                        <td>{{$data->no_telp_anda}}</td>
                        <td>{{$data->no_telp_ortu}}</td>
                        <td>{{$data->riwayat_penyakit}}</td>
                        <td>{{$data->motivasi}}</td>
                        <td>{{$data->goldar}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>
