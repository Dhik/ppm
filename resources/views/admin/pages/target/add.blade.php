@extends('admin.main')
@section('title','Tambah Presensi')
@section('content')
<h1>Hafalan<small> Anda</small></h1>
<hr>
<script>
function tambah(){
    var angka1=$kode
    document.calc.hasil.value = angka1+angka2;
}
</script>
<form method="post" action="{{ route('admin.absen.add',['id'=>$kode]) }}" enctype="multipart/form-data">
<div class="row">
    <div class="col-md-6 mb-3">
            {{ csrf_field() }}
            <div class="card">
                <div class="card-header">
                    <h5>Hafalan Surat</h5>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
		                <thead>
			                <tr>
				                <th>NO</th>
				                <th width="60%">Materi</th>
                                <th width="40%">Penguasaan</th>
                            </tr>
		                </thead>
		                <tbody>
                            <tr>
                                <td>1.</td>
				                <td>An Naas</td>
                                <td>
                                    <select class="form-control" name="jenis_pengajian">
                                        <option value="Halaqoh">Belum</option>
                                        <option value="Halaqoh">Baik</option>
                                        <option value="Apel Malam">Sedang</option>
                                        <option value="Pengajian Maghrib">Kurang</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>1.</td>
				                <td>An Naas</td>
                                <td>
                                    <select class="form-control" name="jenis_pengajian">
                                        <option value="Halaqoh">Belum</option>
                                        <option value="Halaqoh">Baik</option>
                                        <option value="Apel Malam">Sedang</option>
                                        <option value="Pengajian Maghrib">Kurang</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>2.</td>
				                <td>Al Falaq</td>
                                <td>
                                    <select class="form-control" name="jenis_pengajian">
                                        <option value="Halaqoh">Belum</option>
                                        <option value="Halaqoh">Baik</option>
                                        <option value="Apel Malam">Sedang</option>
                                        <option value="Pengajian Maghrib">Kurang</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>3.</td>
				                <td>Al Ikhlas</td>
                                <td>
                                    <select class="form-control" name="jenis_pengajian">
                                        <option value="Halaqoh">Belum</option>
                                        <option value="Halaqoh">Baik</option>
                                        <option value="Apel Malam">Sedang</option>
                                        <option value="Pengajian Maghrib">Kurang</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>4.</td>
				                <td>Al Lahab</td>
                                <td>
                                    <select class="form-control" name="jenis_pengajian">
                                        <option value="Halaqoh">Belum</option>
                                        <option value="Halaqoh">Baik</option>
                                        <option value="Apel Malam">Sedang</option>
                                        <option value="Pengajian Maghrib">Kurang</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>5.</td>
				                <td>An Nashr</td>
                                <td>
                                    <select class="form-control" name="jenis_pengajian">
                                        <option value="Halaqoh">Belum</option>
                                        <option value="Halaqoh">Baik</option>
                                        <option value="Apel Malam">Sedang</option>
                                        <option value="Pengajian Maghrib">Kurang</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>6.</td>
				                <td>Al Kafirun</td>
                                <td>
                                    <select class="form-control" name="jenis_pengajian">
                                        <option value="Halaqoh">Belum</option>
                                        <option value="Halaqoh">Baik</option>
                                        <option value="Apel Malam">Sedang</option>
                                        <option value="Pengajian Maghrib">Kurang</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>7.</td>
				                <td>Al Kautsar</td>
                                <td>
                                    <select class="form-control" name="jenis_pengajian">
                                        <option value="Halaqoh">Belum</option>
                                        <option value="Halaqoh">Baik</option>
                                        <option value="Apel Malam">Sedang</option>
                                        <option value="Pengajian Maghrib">Kurang</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>8.</td>
				                <td>Al Maun</td>
                                <td>
                                    <select class="form-control" name="jenis_pengajian">
                                        <option value="Halaqoh">Belum</option>
                                        <option value="Halaqoh">Baik</option>
                                        <option value="Apel Malam">Sedang</option>
                                        <option value="Pengajian Maghrib">Kurang</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>9.</td>
				                <td>Al Quraisy</td>
                                <td>
                                    <select class="form-control" name="jenis_pengajian">
                                        <option value="Halaqoh">Belum</option>
                                        <option value="Halaqoh">Baik</option>
                                        <option value="Apel Malam">Sedang</option>
                                        <option value="Pengajian Maghrib">Kurang</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>10.</td>
				                <td>Al Fil</td>
                                <td>
                                    <select class="form-control" name="jenis_pengajian">
                                        <option value="Halaqoh">Belum</option>
                                        <option value="Halaqoh">Baik</option>
                                        <option value="Apel Malam">Sedang</option>
                                        <option value="Pengajian Maghrib">Kurang</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>11.</td>
				                <td>Al Humazah</td>
                                <td>
                                    <select class="form-control" name="jenis_pengajian">
                                        <option value="Halaqoh">Belum</option>
                                        <option value="Halaqoh">Baik</option>
                                        <option value="Apel Malam">Sedang</option>
                                        <option value="Pengajian Maghrib">Kurang</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>12.</td>
				                <td>Al Asr</td>
                                <td>
                                    <select class="form-control" name="jenis_pengajian">
                                        <option value="Halaqoh">Belum</option>
                                        <option value="Halaqoh">Baik</option>
                                        <option value="Apel Malam">Sedang</option>
                                        <option value="Pengajian Maghrib">Kurang</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>13.</td>
				                <td>At Takatsur</td>
                                <td>
                                    <select class="form-control" name="jenis_pengajian">
                                        <option value="Halaqoh">Belum</option>
                                        <option value="Halaqoh">Baik</option>
                                        <option value="Apel Malam">Sedang</option>
                                        <option value="Pengajian Maghrib">Kurang</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>14.</td>
				                <td>Al Qoriah</td>
                                <td>
                                    <select class="form-control" name="jenis_pengajian">
                                        <option value="Halaqoh">Belum</option>
                                        <option value="Halaqoh">Baik</option>
                                        <option value="Apel Malam">Sedang</option>
                                        <option value="Pengajian Maghrib">Kurang</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>15.</td>
				                <td>Al Aadiyaat</td>
                                <td>
                                    <select class="form-control" name="jenis_pengajian">
                                        <option value="Halaqoh">Belum</option>
                                        <option value="Halaqoh">Baik</option>
                                        <option value="Apel Malam">Sedang</option>
                                        <option value="Pengajian Maghrib">Kurang</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>16.</td>
				                <td>Al Zalzalah</td>
                                <td>
                                    <select class="form-control" name="jenis_pengajian">
                                        <option value="Halaqoh">Belum</option>
                                        <option value="Halaqoh">Baik</option>
                                        <option value="Apel Malam">Sedang</option>
                                        <option value="Pengajian Maghrib">Kurang</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>17.</td>
				                <td>Al Bayyinah</td>
                                <td>
                                    <select class="form-control" name="jenis_pengajian">
                                        <option value="Halaqoh">Belum</option>
                                        <option value="Halaqoh">Baik</option>
                                        <option value="Apel Malam">Sedang</option>
                                        <option value="Pengajian Maghrib">Kurang</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>18.</td>
				                <td>Al Qodr</td>
                                <td>
                                    <select class="form-control" name="jenis_pengajian">
                                        <option value="Halaqoh">Belum</option>
                                        <option value="Halaqoh">Baik</option>
                                        <option value="Apel Malam">Sedang</option>
                                        <option value="Pengajian Maghrib">Kurang</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>19.</td>
				                <td>Al Alaq</td>
                                <td>
                                    <select class="form-control" name="jenis_pengajian">
                                        <option value="Halaqoh">Belum</option>
                                        <option value="Halaqoh">Baik</option>
                                        <option value="Apel Malam">Sedang</option>
                                        <option value="Pengajian Maghrib">Kurang</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>20.</td>
				                <td>At Tin</td>
                                <td>
                                    <select class="form-control" name="jenis_pengajian">
                                        <option value="Halaqoh">Belum</option>
                                        <option value="Halaqoh">Baik</option>
                                        <option value="Apel Malam">Sedang</option>
                                        <option value="Pengajian Maghrib">Kurang</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>21.</td>
				                <td>Al Insyirah</td>
                                <td>
                                    <select class="form-control" name="jenis_pengajian">
                                        <option value="Halaqoh">Belum</option>
                                        <option value="Halaqoh">Baik</option>
                                        <option value="Apel Malam">Sedang</option>
                                        <option value="Pengajian Maghrib">Kurang</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>22.</td>
				                <td>Ad Dhuha</td>
                                <td>
                                    <select class="form-control" name="jenis_pengajian">
                                        <option value="Halaqoh">Belum</option>
                                        <option value="Halaqoh">Baik</option>
                                        <option value="Apel Malam">Sedang</option>
                                        <option value="Pengajian Maghrib">Kurang</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>23.</td>
				                <td>Al Lail</td>
                                <td>
                                    <select class="form-control" name="jenis_pengajian">
                                        <option value="Halaqoh">Belum</option>
                                        <option value="Halaqoh">Baik</option>
                                        <option value="Apel Malam">Sedang</option>
                                        <option value="Pengajian Maghrib">Kurang</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>24.</td>
				                <td>Asy Syams</td>
                                <td>
                                    <select class="form-control" name="jenis_pengajian">
                                        <option value="Halaqoh">Belum</option>
                                        <option value="Halaqoh">Baik</option>
                                        <option value="Apel Malam">Sedang</option>
                                        <option value="Pengajian Maghrib">Kurang</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>25.</td>
				                <td>Al Balad</td>
                                <td>
                                    <select class="form-control" name="jenis_pengajian">
                                        <option value="Halaqoh">Belum</option>
                                        <option value="Halaqoh">Baik</option>
                                        <option value="Apel Malam">Sedang</option>
                                        <option value="Pengajian Maghrib">Kurang</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>26.</td>
				                <td>Al Fajr</td>
                                <td>
                                    <select class="form-control" name="jenis_pengajian">
                                        <option value="Halaqoh">Belum</option>
                                        <option value="Halaqoh">Baik</option>
                                        <option value="Apel Malam">Sedang</option>
                                        <option value="Pengajian Maghrib">Kurang</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>27.</td>
				                <td>Al Ghaasyiah</td>
                                <td>
                                    <select class="form-control" name="jenis_pengajian">
                                        <option value="Halaqoh">Belum</option>
                                        <option value="Halaqoh">Baik</option>
                                        <option value="Apel Malam">Sedang</option>
                                        <option value="Pengajian Maghrib">Kurang</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>28.</td>
				                <td>Al A'laa</td>
                                <td>
                                    <select class="form-control" name="jenis_pengajian">
                                        <option value="Halaqoh">Belum</option>
                                        <option value="Halaqoh">Baik</option>
                                        <option value="Apel Malam">Sedang</option>
                                        <option value="Pengajian Maghrib">Kurang</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>29.</td>
				                <td>At Taariq</td>
                                <td>
                                    <select class="form-control" name="jenis_pengajian">
                                        <option value="Halaqoh">Belum</option>
                                        <option value="Halaqoh">Baik</option>
                                        <option value="Apel Malam">Sedang</option>
                                        <option value="Pengajian Maghrib">Kurang</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>30.</td>
				                <td>Al Buruj</td>
                                <td>
                                    <select class="form-control" name="jenis_pengajian">
                                        <option value="Halaqoh">Belum</option>
                                        <option value="Halaqoh">Baik</option>
                                        <option value="Apel Malam">Sedang</option>
                                        <option value="Pengajian Maghrib">Kurang</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>31.</td>
				                <td>Al Insyiqaaq</td>
                                <td>
                                    <select class="form-control" name="jenis_pengajian">
                                        <option value="Halaqoh">Belum</option>
                                        <option value="Halaqoh">Baik</option>
                                        <option value="Apel Malam">Sedang</option>
                                        <option value="Pengajian Maghrib">Kurang</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>32.</td>
				                <td>Al Mutaffifin</td>
                                <td>
                                    <select class="form-control" name="jenis_pengajian">
                                        <option value="Halaqoh">Belum</option>
                                        <option value="Halaqoh">Baik</option>
                                        <option value="Apel Malam">Sedang</option>
                                        <option value="Pengajian Maghrib">Kurang</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>33.</td>
				                <td>Al Infitar</td>
                                <td>
                                    <select class="form-control" name="jenis_pengajian">
                                        <option value="Halaqoh">Belum</option>
                                        <option value="Halaqoh">Baik</option>
                                        <option value="Apel Malam">Sedang</option>
                                        <option value="Pengajian Maghrib">Kurang</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>34.</td>
				                <td>At Takwiir</td>
                                <td>
                                    <select class="form-control" name="jenis_pengajian">
                                        <option value="Halaqoh">Belum</option>
                                        <option value="Halaqoh">Baik</option>
                                        <option value="Apel Malam">Sedang</option>
                                        <option value="Pengajian Maghrib">Kurang</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>36.</td>
				                <td>An Naaziaat</td>
                                <td>
                                    <select class="form-control" name="jenis_pengajian">
                                        <option value="Halaqoh">Belum</option>
                                        <option value="Halaqoh">Baik</option>
                                        <option value="Apel Malam">Sedang</option>
                                        <option value="Pengajian Maghrib">Kurang</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>37.</td>
				                <td>An Naba</td>
                                <td>
                                    <select class="form-control" name="jenis_pengajian">
                                        <option value="Halaqoh">Belum</option>
                                        <option value="Halaqoh">Baik</option>
                                        <option value="Apel Malam">Sedang</option>
                                        <option value="Pengajian Maghrib">Kurang</option>
                                    </select>
                                </td>
                            </tr>
		                </tbody>
	                </table>
                </div><!-- end card body -->
                <div class="card-header">
                    <h5>Surat Pilihan</h5>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
		                <thead>
			                <tr>
				                <th>NO</th>
				                <th width="60%">Materi</th>
                                <th width="40%">Penguasaan</th>
                            </tr>
		                </thead>
		                <tbody>
                            <tr>
                                <td>1.</td>
				                <td>Al Baqoroh 1 - 4</td>
                                <td>
                                    <select class="form-control" name="penguasaan">
                                        <option value="Belum">Belum</option>
                                        <option value="Baik">Baik</option>
                                        <option value="Sedang">Sedang</option>
                                        <option value="Kurang">Kurang</option>
                                    </select>
                                </td>
			                </tr>
                            <tr>
                                <td>2.</td>
				                <td>Al Baqoroh 221</td>
                                <td>
                                    <select class="form-control" name="penguasaan">
                                        <option value="Belum">Belum</option>
                                        <option value="Baik">Baik</option>
                                        <option value="Sedang">Sedang</option>
                                        <option value="Kurang">Kurang</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>3.</td>
				                <td>Al Baqoroh 255 - 257</td>
                                <td>
                                    <select class="form-control" name="penguasaan">
                                        <option value="Belum">Belum</option>
                                        <option value="Baik">Baik</option>
                                        <option value="Sedang">Sedang</option>
                                        <option value="Kurang">Kurang</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>4.</td>
				                <td>Al Baqoroh 284 - 287</td>
                                <td>
                                    <select class="form-control" name="penguasaan">
                                        <option value="Belum">Belum</option>
                                        <option value="Baik">Baik</option>
                                        <option value="Sedang">Sedang</option>
                                        <option value="Kurang">Kurang</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>5.</td>
				                <td>Al Kahfi 1 - 10</td>
                                <td>
                                    <select class="form-control" name="penguasaan">
                                        <option value="Belum">Belum</option>
                                        <option value="Baik">Baik</option>
                                        <option value="Sedang">Sedang</option>
                                        <option value="Kurang">Kurang</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>6.</td>
				                <td>As Shof 10 - 13</td>
                                <td>
                                    <select class="form-control" name="penguasaan">
                                        <option value="Belum">Belum</option>
                                        <option value="Baik">Baik</option>
                                        <option value="Sedang">Sedang</option>
                                        <option value="Kurang">Kurang</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>7.</td>
				                <td>Al Hasyr 22 - 24</td>
                                <td>
                                    <select class="form-control" name="penguasaan">
                                        <option value="Belum">Belum</option>
                                        <option value="Baik">Baik</option>
                                        <option value="Sedang">Sedang</option>
                                        <option value="Kurang">Kurang</option>
                                    </select>
                                </td>
                            </tr>
		                </tbody>
	                </table>
                </div><!-- end card body -->
            </div><!-- end card -->
    </div>
    <div class="col-md-6 mb-3">
            {{ csrf_field() }}
            <div class="card">
                <div class="card-header">
                    <h5>Hafalan Dalil-dalil</h5>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
		                <thead>
			                <tr>
				                <th>NO</th>
				                <th width="60%">Materi</th>
                                <th width="40%">Penguasaan</th>
                            </tr>
		                </thead>
		                <tbody>
                            <tr>
                                <td>1.</td>
				                <td>Dalil Mengaji</td>
                                <td>
                                    <select class="form-control" name="jenis_pengajian">
                                        <option value="Halaqoh">Belum</option>
                                        <option value="Halaqoh">Baik</option>
                                        <option value="Apel Malam">Sedang</option>
                                        <option value="Pengajian Maghrib">Kurang</option>
                                    </select>
                                </td>
			                </tr>
                            <tr>
                                <td>2.</td>
				                <td>Dalil Mengamal</td>
                                <td>
                                    <select class="form-control" name="jenis_pengajian">
                                        <option value="Halaqoh">Belum</option>
                                        <option value="Halaqoh">Baik</option>
                                        <option value="Apel Malam">Sedang</option>
                                        <option value="Pengajian Maghrib">Kurang</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>3.</td>
				                <td>Dalil Membela</td>
                                <td>
                                    <select class="form-control" name="jenis_pengajian">
                                        <option value="Halaqoh">Belum</option>
                                        <option value="Halaqoh">Baik</option>
                                        <option value="Apel Malam">Sedang</option>
                                        <option value="Pengajian Maghrib">Kurang</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>4.</td>
				                <td>Dalil Sambung Jamaah</td>
                                <td>
                                    <select class="form-control" name="jenis_pengajian">
                                        <option value="Halaqoh">Belum</option>
                                        <option value="Halaqoh">Baik</option>
                                        <option value="Apel Malam">Sedang</option>
                                        <option value="Pengajian Maghrib">Kurang</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>5.</td>
				                <td>Dalil Thoat</td>
                                <td>
                                    <select class="form-control" name="jenis_pengajian">
                                        <option value="Halaqoh">Belum</option>
                                        <option value="Halaqoh">Baik</option>
                                        <option value="Apel Malam">Sedang</option>
                                        <option value="Pengajian Maghrib">Kurang</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>6.</td>
				                <td>Dalil 6 Thobiat Luhur</td>
                                <td>
                                    <select class="form-control" name="jenis_pengajian">
                                        <option value="Halaqoh">Belum</option>
                                        <option value="Halaqoh">Baik</option>
                                        <option value="Apel Malam">Sedang</option>
                                        <option value="Pengajian Maghrib">Kurang</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>7.</td>
				                <td>Dalil 3 Sukses Generus</td>
                                <td>
                                    <select class="form-control" name="jenis_pengajian">
                                        <option value="Halaqoh">Belum</option>
                                        <option value="Halaqoh">Baik</option>
                                        <option value="Apel Malam">Sedang</option>
                                        <option value="Pengajian Maghrib">Kurang</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>8.</td>
				                <td>Dalil Bersyukur</td>
                                <td>
                                    <select class="form-control" name="jenis_pengajian">
                                        <option value="Halaqoh">Belum</option>
                                        <option value="Halaqoh">Baik</option>
                                        <option value="Apel Malam">Sedang</option>
                                        <option value="Pengajian Maghrib">Kurang</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>9.</td>
				                <td>Dalil Menngagungkan</td>
                                <td>
                                    <select class="form-control" name="jenis_pengajian">
                                        <option value="Halaqoh">Belum</option>
                                        <option value="Halaqoh">Baik</option>
                                        <option value="Apel Malam">Sedang</option>
                                        <option value="Pengajian Maghrib">Kurang</option>
                                    </select>
                                </td>
			                </tr>
                            <tr>
                                <td>10.</td>
				                <td>Dalil Mempersungguh</td>
                                <td>
                                    <select class="form-control" name="jenis_pengajian">
                                        <option value="Halaqoh">Belum</option>
                                        <option value="Halaqoh">Baik</option>
                                        <option value="Apel Malam">Sedang</option>
                                        <option value="Pengajian Maghrib">Kurang</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>11.</td>
				                <td>Dalil Berdo'a</td>
                                <td>
                                    <select class="form-control" name="jenis_pengajian">
                                        <option value="Halaqoh">Belum</option>
                                        <option value="Halaqoh">Baik</option>
                                        <option value="Apel Malam">Sedang</option>
                                        <option value="Pengajian Maghrib">Kurang</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>12.</td>
				                <td>Dalil Kerukunan</td>
                                <td>
                                    <select class="form-control" name="jenis_pengajian">
                                        <option value="Halaqoh">Belum</option>
                                        <option value="Halaqoh">Baik</option>
                                        <option value="Apel Malam">Sedang</option>
                                        <option value="Pengajian Maghrib">Kurang</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>13.</td>
				                <td>Dalil Kompak</td>
                                <td>
                                    <select class="form-control" name="jenis_pengajian">
                                        <option value="Halaqoh">Belum</option>
                                        <option value="Halaqoh">Baik</option>
                                        <option value="Apel Malam">Sedang</option>
                                        <option value="Pengajian Maghrib">Kurang</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>14.</td>
				                <td>Dalil Kerjasama yang Baik</td>
                                <td>
                                    <select class="form-control" name="jenis_pengajian">
                                        <option value="Halaqoh">Belum</option>
                                        <option value="Halaqoh">Baik</option>
                                        <option value="Apel Malam">Sedang</option>
                                        <option value="Pengajian Maghrib">Kurang</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>15.</td>
				                <td>Dalil Jujur</td>
                                <td>
                                    <select class="form-control" name="jenis_pengajian">
                                        <option value="Halaqoh">Belum</option>
                                        <option value="Halaqoh">Baik</option>
                                        <option value="Apel Malam">Sedang</option>
                                        <option value="Pengajian Maghrib">Kurang</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>16.</td>
				                <td>Dalil Amanah</td>
                                <td>
                                    <select class="form-control" name="jenis_pengajian">
                                        <option value="Halaqoh">Belum</option>
                                        <option value="Halaqoh">Baik</option>
                                        <option value="Apel Malam">Sedang</option>
                                        <option value="Pengajian Maghrib">Kurang</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>17.</td>
				                <td>Dalil Muzhid Mujhid</td>
                                <td>
                                    <select class="form-control" name="jenis_pengajian">
                                        <option value="Halaqoh">Belum</option>
                                        <option value="Halaqoh">Baik</option>
                                        <option value="Apel Malam">Sedang</option>
                                        <option value="Pengajian Maghrib">Kurang</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>18.</td>
				                <td>Dalil Akhlakul Karimah</td>
                                <td>
                                    <select class="form-control" name="jenis_pengajian">
                                        <option value="Halaqoh">Belum</option>
                                        <option value="Halaqoh">Baik</option>
                                        <option value="Apel Malam">Sedang</option>
                                        <option value="Pengajian Maghrib">Kurang</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>19.</td>
				                <td>Dalil Memiliki Kefahaman</td>
                                <td>
                                    <select class="form-control" name="jenis_pengajian">
                                        <option value="Halaqoh">Belum</option>
                                        <option value="Halaqoh">Baik</option>
                                        <option value="Apel Malam">Sedang</option>
                                        <option value="Pengajian Maghrib">Kurang</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>20.</td>
				                <td>Dalil Memiliki Keterampilan</td>
                                <td>
                                    <select class="form-control" name="jenis_pengajian">
                                        <option value="Halaqoh">Belum</option>
                                        <option value="Halaqoh">Baik</option>
                                        <option value="Apel Malam">Sedang</option>
                                        <option value="Pengajian Maghrib">Kurang</option>
                                    </select>
                                </td>
                            </tr>
		                </tbody>
	                </table>
                </div><!-- end card body -->
                <div class="card-header">
                    <h5>Hafalan Do'a</h5>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
		                <thead>
			                <tr>
				                <th>NO</th>
				                <th width="60%">Materi</th>
                                <th width="40%">Penguasaan</th>
                            </tr>
		                </thead>
		                <tbody>
                            <tr>
                                <td>1.</td>
				                <td>Do'a Setelah Baca Al-Qur'an</td>
                                <td>
                                    <select class="form-control" name="penguasaan">
                                        <option value="Belum">Belum</option>
                                        <option value="Baik">Baik</option>
                                        <option value="Sedang">Sedang</option>
                                        <option value="Kurang">Kurang</option>
                                    </select>
                                </td>
			                </tr>
                            <tr>
                                <td>2.</td>
				                <td>Do'a Maskumambang</td>
                                <td>
                                    <select class="form-control" name="penguasaan">
                                        <option value="Belum">Belum</option>
                                        <option value="Baik">Baik</option>
                                        <option value="Sedang">Sedang</option>
                                        <option value="Kurang">Kurang</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>3.</td>
				                <td>Do'a Minta Haji</td>
                                <td>
                                    <select class="form-control" name="penguasaan">
                                        <option value="Belum">Belum</option>
                                        <option value="Baik">Baik</option>
                                        <option value="Sedang">Sedang</option>
                                        <option value="Kurang">Kurang</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>4.</td>
				                <td>Do'a Asad</td>
                                <td>
                                    <select class="form-control" name="penguasaan">
                                        <option value="Belum">Belum</option>
                                        <option value="Baik">Baik</option>
                                        <option value="Sedang">Sedang</option>
                                        <option value="Kurang">Kurang</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>5.</td>
				                <td>Do'a Pengayoman</td>
                                <td>
                                    <select class="form-control" name="penguasaan">
                                        <option value="Belum">Belum</option>
                                        <option value="Baik">Baik</option>
                                        <option value="Sedang">Sedang</option>
                                        <option value="Kurang">Kurang</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>6.</td>
				                <td>Do'a Berlindung dari Siksa Kubur</td>
                                <td>
                                    <select class="form-control" name="penguasaan">
                                        <option value="Belum">Belum</option>
                                        <option value="Baik">Baik</option>
                                        <option value="Sedang">Sedang</option>
                                        <option value="Kurang">Kurang</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>7.</td>
				                <td>Do'a Berlindung dari Sifat Munafik</td>
                                <td>
                                    <select class="form-control" name="penguasaan">
                                        <option value="Belum">Belum</option>
                                        <option value="Baik">Baik</option>
                                        <option value="Sedang">Sedang</option>
                                        <option value="Kurang">Kurang</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>8.</td>
				                <td>Do'a Kerukunan</td>
                                <td>
                                    <select class="form-control" name="penguasaan">
                                        <option value="Belum">Belum</option>
                                        <option value="Baik">Baik</option>
                                        <option value="Sedang">Sedang</option>
                                        <option value="Kurang">Kurang</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>9.</td>
				                <td>Do'a Bangun Malam</td>
                                <td>
                                    <select class="form-control" name="penguasaan">
                                        <option value="Belum">Belum</option>
                                        <option value="Baik">Baik</option>
                                        <option value="Sedang">Sedang</option>
                                        <option value="Kurang">Kurang</option>
                                    </select>
                                </td>
			                </tr>
                            <tr>
                                <td>10.</td>
				                <td>Kumpulan Do'a Nabi</td>
                                <td>
                                    <select class="form-control" name="penguasaan">
                                        <option value="Belum">Belum</option>
                                        <option value="Baik">Baik</option>
                                        <option value="Sedang">Sedang</option>
                                        <option value="Kurang">Kurang</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>11.</td>
				                <td>Do'a Pagi dan Sore</td>
                                <td>
                                    <select class="form-control" name="penguasaan">
                                        <option value="Belum">Belum</option>
                                        <option value="Baik">Baik</option>
                                        <option value="Sedang">Sedang</option>
                                        <option value="Kurang">Kurang</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>12.</td>
				                <td>Do'a Raja Istigfar</td>
                                <td>
                                    <select class="form-control" name="penguasaan">
                                        <option value="Belum">Belum</option>
                                        <option value="Baik">Baik</option>
                                        <option value="Sedang">Sedang</option>
                                        <option value="Kurang">Kurang</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>13.</td>
				                <td>Do'a Sapu Jagad</td>
                                <td>
                                    <select class="form-control" name="penguasaan">
                                        <option value="Belum">Belum</option>
                                        <option value="Baik">Baik</option>
                                        <option value="Sedang">Sedang</option>
                                        <option value="Kurang">Kurang</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>14.</td>
				                <td>Asma'ul Husna</td>
                                <td>
                                    <select class="form-control" name="penguasaan">
                                        <option value="Belum">Belum</option>
                                        <option value="Baik">Baik</option>
                                        <option value="Sedang">Sedang</option>
                                        <option value="Kurang">Kurang</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>15.</td>
				                <td>Pr 13</td>
                                <td>
                                    <select class="form-control" name="penguasaan">
                                        <option value="Belum">Belum</option>
                                        <option value="Baik">Baik</option>
                                        <option value="Sedang">Sedang</option>
                                        <option value="Kurang">Kurang</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>16.</td>
				                <td>Do'a Berlindung dari Syirik</td>
                                <td>
                                    <select class="form-control" name="penguasaan">
                                        <option value="Belum">Belum</option>
                                        <option value="Baik">Baik</option>
                                        <option value="Sedang">Sedang</option>
                                        <option value="Kurang">Kurang</option>
                                    </select>
                                </td>
                            </tr>
		                </tbody>
	                </table>
                </div><!-- end card body -->
            </div><!-- end card -->
    </div>
    <div class="col-md-6 mb-3">
            {{ csrf_field() }}
            <div class="card">
                
            </div><!-- end card -->
    </div>
</div>
<div class="card-footer">
    <button class="btn btn-primary" type="submit">Simpan</button>
</div><!-- End Card Footer -->
</form>
@endsection

@push('js')
<script type="text/javascript">
// Fungsi menampilkan gambar yang dipilih
function filePreview(input) {
    if(input.files && input.files[0]){
        var reader = new FileReader();
        reader.onload = function(e){
            $('#iGambar + img').remove();
            $('#iGambar').after('<img src="'+e.target.result+'"width="100" class="mt-3" />');
        }
        reader.readAsDataURL(input.files[0]);
    }
}
// Perintah menjalankan fungsi filepreview
$(function(){
    $('#iGambar').change(function(){
        filePreview(this);
    })
})
</script>
@endpush