@extends('admin.pages.booklet.temp') @section('title','Booklet') @section('content') 
<!-- <style>  
    img {  
        height:160px;
        padding-left:20px; 
    } 
</style> -->
<style>.tombol{
    height:200px;
    width:250px;
  }</style>
<body class="fact-edition">
<div class="wrapper ">
	 @include('admin.pages.booklet.sidebar')
	<div class="main-panel">
		<!-- Navbar -->
		 @include('admin.pages.booklet.navbar') 
		<!-- End Navbar -->
		<div class="content">
			<div class="container-fluid">
				 @if(session('result') == 'success')
				<div class="alert alert-success alert-dismissible fade show">
					<strong>Saved !</strong>Berhasil disimpan. <button type="button" class="close" data-dismiss="alert">&times;</button>
				</div>
				 @endif @if(session('result') == 'update')
				<div class="alert alert-success alert-dismissible fade show">
					<strong>Updated!</strong>Berhasil diupdate. <button type="button" class="close" data-dismiss="alert">&times;</button>
				</div>
				 @endif
				<h1 class="text-center title-berkshire" style="color:white;">Metamorph</h1>
				<hr></br>
				<div class="jumbotron bg-fact">
					<h1 class="display-4 montserrat" style="color:white;">Hello, Piramida!</h1>
					<p class="lead montserrat" style="color:white;">Assalamu'alaikum wr. wb.</p>
					<hr class="my-4">
					<p class="montserrat"style="color:white;">
						Selamat datang di halaman Booklet Metamorph. Di booklet ini anda akan dapat berbagai informasi serta berkenalan dengan santri lainnya.
					</p>
					<button type="button" class="btn btn-primary montserrat" data-toggle="modal" data-target="#exampleModalLongin">Sambutan Ketua Metamorph</button>
				</div>
				<!-- Modal -->
				<div class="modal fade" id="exampleModalLongin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content bg-card-vmtt">
							<div class="modal-header">
								<h5 class="modal-title montserrat" id="exampleModalLongTitle">Sambutan Ketua Metamorph</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<div class="col-md-12">
									<div class="card card-profile">
										<div class="card-avatar">
											<a href="#pablo"><img class="img" src="{{ url('/foto/2018009.jpg') }}"/></a>
										</div>
										<div class="card-body">
											<h5 class="card-category montserrat">Ridwan Saleh F</h5>
											<h4 class="card-title montserrat">Assalamualaikum, wr.wb.</h4>
											<h4 class="montserrat">Bismillahirahmanirrahim</h4>
											<h4 class="montserrat">Selamat datang para pejuang agama di PPM Nurul Hakim! Melalui rangkaian metamorph ini, kalian akan diajak bersama untuk mengetahui betapa seru dan asyiknya tinggal bersama di PPM Nurul Hakim. Lewat tema KAPAL yang dibawa pada metamorph 2020 kali ini, kalian akan mengenal, menghargai, peduli, dan memahami kondisi yang ada di lingkungan PPM Nurul Hakim. Selain ajang berkenalan, metamorph juga menjadi salah satu gerbang untuk bisa sukses menjadi generus yang alim serta berpendidikan tinggi. Harapannya setelah lulus dari PPM Nurul Hakim, kita bisa menjadi sarjana yang mubalegh dan mubalegh yang sarjana. Selamat menjalani rangkaian metamorph dengan penuh semangat!
											<h4 class="montserrat">Alhamdulillah jaza kumullahu khoiro</h4>
											<h4 class="montserrat">Wassalamualalkum, wr.wb</h4>
											<p class="card-description"></p>
										</div>
									</div>
								</div>
							</div>
							<div class="modal-footer"></div>
						</div>
					</div>
				</div>
				<div class="card-deck">
					<div class="card bg-card-vmtt" style="width: 18rem;">
						<div class="card-header">
							<h2 class="text-center title-berkshire tabus-title-color">Visi Metamorph</h2>
						</div>
						<div class="card-body">
							<h5 class="card-title montserrat">Menjadikan Metamorph 2020 sebagai wadah dalam menjalin hubungan kekeluargaan demi terciptanya lingkungan PPM NH yang ramah dan saling mengayomi.</h5>
						</div>
					</div>
					<div class="card bg-card-vmtt" style="width: 18rem;">
						<div class="card-header">
							<h2 class="text-center title-berkshire tabus-title-color">Misi Metamorph</h2>
						</div>
						<div class="card-body">
							<h4 class="card-title montserrat">
							<li>
								 Memperkenalkan seluruh elemen yang ada di PPM NH yakni para penghuni, amrin jami’ dan peraturan-peraturan yang berlaku.
							</li>
							<li>
								 Membangun rasa saling peduli dan memahami antar penghuni, dengan menyelenggarakan rangkaian kegiatan.
							</li>
							<li>
								 Menerapkan budaya 5S (Senyum, Sapa, Salam, Sopan dan Santun)
							</li>
							</h4>
							<br></div>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-md-12">
						<div class="card text-white bg-card-vmtt">
							<div class="card-header">
								<h2 class="text-center title-berkshire tabus-title-color">Filosofi Metamorph</h2>
								<hr>
								<h1 class="text-center title-berkshire" style="color:white;">KAPAL</h1>
								<h5 class="text-center montserrat" style="color:white; letter-spacing: 4px;">Kenali - Peduli - Hargai - Pahami - Lakukan</h5>
							</div>
							<div class="card-body">
								<div class="card-deck">
									<div class="card bg-card-vmtt-dark" style="width: 18rem;">
										<div class="card-header">
											<h2 class="text-center title-berkshire" style="color:white;">Kenali</h2>
										</div>
										<div class="card-body">
											<h4 class="card-title montserrat">Langkah pertama yang paling penting adalah para penghuni PPM NH harus mengenal satu sama lain. Selain itu para penghuni PPM NH juga harus mengenal amrin jami’ dan peraturan yang berlaku di PPM NH. </h4>
											<br></div>
									</div>
									<div class="card bg-card-vmtt-dark" style="width: 18rem;">
										<div class="card-header">
											<h2 class="text-center title-berkshire" style="color:white;">Peduli</h2>
										</div>
										<div class="card-body">
											<h4 class="card-title montserrat">Kita akan hidup Bersama di PPM. Sudah seharusnya kita punya sikap peduli saat ada teman kita yang membutuhkan bantuan </h4>
											<br></div>
									</div>
								</div>
								<div class="card-deck">
									<div class="card bg-card-vmtt-dark" style="width: 18rem;">
										<div class="card-header">
											<h2 class="text-center title-berkshire" style="color:white;">Hargai</h2>
										</div>
										<div class="card-body">
											<h4 class="card-title montserrat">Setiap penghuni PPM NH harus memahami bahwa setiap orang memiliki sudut pandangnya masing-masing. Maka sikap menghargai harus dibiasakan agar tidak terjadi hal hal yang tidak diinginkan. Selain itu, menghargai bukan hanya dalam hubungan antar manusia, tapi juga terhadap peraturan yang berlaku di PPM. </h4>
											<br></div>
									</div>
									<div class="card bg-card-vmtt-dark" style="width: 18rem;">
										<div class="card-header">
											<h2 class="text-center title-berkshire" style="color:white;">Pahami</h2>
										</div>
										<div class="card-body">
											<h4 class="card-title montserrat">Kita sama sama belajar untuk memahami setiap orang. Memang tidak mudah. Kita bisa memulai dari hal kecil, misalnya saat melihat ada teman kita yang salah, kita berusaha memahami dahulu apa alasannya, tabayyun. Kemudian jika memang bisa, berikan solusi sesuai dengan masalah dan keadaannya. </h4>
											<br></div>
									</div>
								</div>
								<div class="card-deck">
									<div class="card bg-card-vmtt-dark" style="width: 18rem;">
										<div class="card-header">
											<h2 class="text-center title-berkshire" style="color:white;">Lakukan</h2>
										</div>
										<div class="card-body">
											<h4 class="card-title text-center montserrat">Lakukan 4 hal diatas</h4>
										</div>
									</div>
								</div>
								<br></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-4 col-lg-12">
						<div class="card card-chart bg-fact">
							<div class="card-header card-header-info">
								<div class="ct-chart">
									<img class="tombol" src="{{ url('/assets/img/nh-facts.jpg') }}"/>
								</div>
							</div>
							<div class="card-footer">
								<a href="{{ route('admin.booklet.facts') }}" class="btn btn-primary btn-round">Lihat</a>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-lg-12">
						<div class="card card-chart bg-fact">
							<div class="card-header card-header-info">
								<div class="ct-chart">
									<img class="tombol" src="{{ url('/assets/img/tertib.jpg') }}"/>
								</div>
							</div>
							<div class="card-footer">
								<a href="{{ route('admin.tatatertib') }}" class="btn btn-primary btn-round">Lihat</a>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-lg-12">
						<div class="card card-chart bg-fact">
							<div class="card-header card-header-info">
								<div class="ct-chart">
									<img class="tombol" src="{{ url('/assets/img/jadwal.jpg') }}"/>
								</div>
							</div>
							<div class="card-footer">
								<a href="{{ route('admin.jadwal') }}" class="btn btn-primary btn-round">Lihat</a>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-4 col-lg-12">
						<div class="card card-chart bg-fact">
							<div class="card-header card-header-info">
								<div class="ct-chart">
									<img class="tombol" src="{{ url('/assets/img/tata.jpg') }}"/>
								</div>
							</div>
							<div class="card-footer">
								<a href="{{ route('admin.booklet.tata_busana') }}" class="btn btn-primary btn-round">Lihat</a>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-lg-12">
						<div class="card card-chart bg-fact">
							<div class="card-header card-header-info">
								<div class="ct-chart">
									<img class="tombol" src="{{ url('/assets/img/vmtt.jpg') }}"/>
								</div>
							</div>
							<div class="card-footer">
								<a href="{{ route('admin.booklet.vmtt') }}" class="btn btn-primary btn-round">Lihat</a>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-lg-12">
						<div class="card card-chart bg-fact">
							<div class="card-header card-header-info">
								<div class="ct-chart">
									<img class="tombol" src="{{ url('/assets/img/tim.jpg') }}"/>
								</div>
							</div>
							<div class="card-footer">
								<a href="{{ url('/team') }}" class="btn btn-primary btn-round">Lihat</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<footer class="footer">
		<div class="container-fluid">
			<div class="copyright float-right" id="date">
				 , made with <i class="material-icons">favorite</i> by <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
			</div>
		</div>
		</footer>
		<script>
        const x = new Date().getFullYear();
        let date = document.getElementById('date');
        date.innerHTML = '&copy; ' + x + date.innerHTML;
      </script>
	</div>
</div>
 @include('admin.pages.booklet.popup')
</body>
@endsection