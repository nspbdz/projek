@extends('layouts.main')

@section('content')
<div class="aboutWrapper servicewrap s1 row-fluid" style="height:100%;">
	<div class="new-head">
		
 <nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{ url('home')}}">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page">Tentang Aplikasi</li>
		</ol>
	</nav>
<div class="p-3 mb-2 bg-primary text-white text-center"> Aplikasi Inventaris Pesantren Tahfidz & Enterpreneur YBM PLN</div>
<br>
		{{-- <h1>Aplikasi Inventaris Pesantren Tahfidz & Enterpreneur YBM PLN </h1><br> --}}
	</div>
	<div class="container-fluid" id="top">
		<div class="aboutnote row">
				<div class="col-xs-2 anchorStyling link-braces">
				</div>
			<div class="col-xs-8 anchorStyling link-braces">
				<ul class="nav nav-tabs justify-content-center">
					<li role="presentation" class="active"><a href="#tentang-kami" aria-controls="tentang-kami"
							role="tab" data-toggle="tab">
							<p>Tentang Kami</p>
						</a></li>

					<!-- <li role="presentation" class=""><a href="#keunggulan" aria-controls="keunggulan" role="tab"
							data-toggle="tab">
							<p>Keunggulan</p>
						</a></li>
					<li role="presentation" class=""><a href="#visimisi" aria-controls="visimisi" role="tab"
							data-toggle="tab">
							<p>Visi &amp; Misi</p>
						</a></li>
					<li role="presentation" class=""><a href="#struktur" aria-controls="struktur" role="tab"
							data-toggle="tab">
							<p>Struktur Organisasi</p>
						</a></li> -->
						
					<li role="presentation" class=""><a href="#sekilas" aria-controls="sekilas" role="tab"
							data-toggle="tab">
							<p>Pendirian</p>
						</a></li>
					<li role="presentation"><a href="#pendukung" aria-controls="pendukung" role="tab" data-toggle="tab">
							<p>Asosiasi Pelopor Pendirian</p>
						</a></li>
				</ul>
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane fadeIn active " id="tentang-kami">
						<div class="container-fluid">
							<div class="jumbotron">
									<div class="card-group">
									  <div class="card">
									  <img src="{{ url('img') }}/fin.jpg" height="300px" class="rounded"  alt="Responsive image">

									  <div class="card-body" >

												<h5 align="center" class="card-title">Web Developer</h5>
												<p class="card-text">Membuat dan Mengembangkan Website <br><br>
													
													<a class="rounded-pill" href="#">
														<span><img src="https://img.icons8.com/nolan/50/000000/facebook-new.png"><br>	https://www.facebook.com/nspbdz
														</span>
													</a> 
															 
															<a class="rounded-pill" href="#"><br>
																<span><img src="https://img.icons8.com/nolan/50/000000/linkedin.png"> <br>	https://www.linkedin.com/in/mohamad-alfian-ramadhan-23b875175</span>
																  </a> 
													  </a>  </p>
													  
													<a class="rounded-pill" href="#">
															<span><img src="https://img.icons8.com/nolan/50/000000/gmail.png"><br> <br> nspbdz@gmail.com
															</span>
														</a> 
												<p class="card-text"><small class="text-muted"></small></p>
											  </div>
											</div>
											<div class="card">
									  <img src="{{ url('img') }}/ik.jpeg" height="300px" class="rounded"  alt="Responsive image">
											  <div class="card-body">
												<h5 align="center" class="card-title">Web Developer</h5>
												<p class="card-text">Membuat dan Mengembangkan Website <br><br>
													<a class="rounded-pill" href="#">
														<span><img src="https://img.icons8.com/nolan/50/000000/facebook-new.png"><br>	https://www.facebook.com/yuslam.amrillah
														</span>
													</a> 
															 
															<a class="rounded-pill" href="#"><br>
																<span><img src="https://img.icons8.com/nolan/50/000000/linkedin.png"> <br>https://www.linkedin.com/in/yuslam-rl-0166b0196</span>
																  </a> 
													  </a>  </p>
													  <br><br>
													<a class="rounded-pill" href="#">
															<span><img src="https://img.icons8.com/nolan/50/000000/gmail.png"><br> <br>  yuslamrl@gmail.com
															</span>
														</a> 
												<p class="card-text"><small class="text-muted"></small></p>
											  </div>
											</div>
											<div class="card">
									  <img src="{{ url('img') }}/iqbar.jpg" height="300px" class="rounded"  alt="Responsive image">

											  <div class="card-body">
													<h5 align="center" class="card-title">Web Developer</h5>

												<p class="card-text">Membuat dan Mengembangkan Website <br> <br>
													<a class="rounded-pill" href="#">
															<span><img src="https://img.icons8.com/nolan/50/000000/facebook-new.png"><br>	iqbalmuhammad133@ymail.com
															</span>
														</a> 
																 
																<a class="rounded-pill" href="#"><br>
																	<span><img src="https://img.icons8.com/nolan/50/000000/linkedin.png"> <br> 	www.linkedin.com/in/muhammadiqbal01999	</span>
																	  </a> 
														  </a>  </p><br><br> <br>
														  <br>
														<a class="rounded-pill" href="#">
																<span><img src="https://img.icons8.com/nolan/50/000000/gmail.png"><br> <br>muhammadiqbal01999@gmail.com
																</span>
															</a> 
														
												
												</i></p>
												<p class="card-text"><small class="text-muted"></small></p>
											  </div>
											</div>
										  </div> <br><br>

							</div>
						</div>
					</div>
					<div role="tabpanel" class="tab-pane fade" id="keunggulan">
						<div class="container-fluid">
							<div class="jumbotron">
								<p class="text-justify">Pada saat ini LSP Telematika telah menjadi salah satu rujukan
									profesionalisme bagi industri telematika
									di dalam dan luar negeri,hal ini dikarenakan dalam proses sertifikasi LSP Telematika
									merujuk kepada standarisasi
									yang berdasarkan kepada Standar Internasional Khusus dan Standar Kompetensi Kerja
									Nasional Indonesia (SKKNI)
									dan dalam penyelenggaraan uji kompetensi pada LSP Telematika di dukung oleh asesor
									yang memiliki kompetensi/keahlian
									dibidang telematika dan tentunya telah berpengalaman.<br><br>
									Setelah <b>10 Tahun</b> lebih berdiri LSP Telematika semakin berkembang dan terus
									berinovasi, saat ini tim LSP Telematika
									sedang mengembangkan <b>Sistem Ujian Online</b> yang akan segera di rilis, selain
									itu dalam rangka memberikan pelayanan
									yang optimal LSP telematika sudah merilis Sistem Online untuk para calon asesi yang
									akan mendaftar untuk Sertifikasi.<br>
								</p>
							</div>
						</div>
					</div>

					<!-- Linkkkkkkkk -->

					<div role="tabpanel" class="tab-pane fade" id="visimisi"><br>
						<div class="container-fluid">
							<div class="jumbotron">
								<center>
									<h2><b>Visi dan Misi </b></h2>
								</center>
								<center>
									<h2><b>Lembaga Sertifikasi Profesi Telematika </b></h2>
								</center>
								<br>
								<div class="container">
									<p><b>VISI</b><br></p>
									<table>
										<tbody>
											<tr>
												<td>Tersedianya tenaga kerja yang kompeten dan bersertifikasi dibidang
													teknologi informasi dan komunikasi, baik tingkat nasional maupun
													internasional. </td>
											</tr>
										</tbody>
									</table>
									<br>
									<p><b>MISI</b><br></p>
									<table width="100%">
										<tbody>
											<tr>
												<td width="3%" align="top-center">1. </td>
												<td width="97%">Meningkatkan kompetensi SDM melalui sertifikasi profesi
													di bidang Teknologi Informasi dan </td>
											</tr>
											<tr>
												<td width="3%" align="top-center"> </td>
												<td width="97%">Komunikasi kerja nasional Indonesia.</td>
											</tr>
											<tr>
												<td width="3%" align="top-center">2. </td>
												<td width="97%">Menyediakan informasi tentang SDM yang kompeten dan
													bersertifikat dibidang Teknologi Informasi dan </td>
											</tr>
											<tr>
												<td width="3%" align="top-center"> </td>
												<td width="97%">Komunikasi untuk kebutuhan SDM secara nasional dan
													internasional.</td>
											</tr>
											<tr>
												<td width="3%" align="top-center">3. </td>
												<td width="97%">Mencapai kesetaraan sertifikasi Profesi Telematika di
													seluruh dunia.</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div role="tabpanel" class="tab-pane fade" id="struktur"><br>
						<div class="container-fluid">
							<div class="jumbotron">
								<div class="container">
									<p><b>Pengurus LSP Telematika</b><br></p>
									<div class="table-hover">
										<table class="table table-hover">
											<tbody>
												<tr class="tr-bgcolor">
													<td>Ketua Umum</td>
													<td>: Ir. G. Hidayat Tjokrodjojo</td>
												</tr>
												<tr>
													<td>Wakil Ketua</td>
													<td>: Djarot Subiantoro</td>
												</tr>
												<tr class="tr-bgcolor">
													<td>Sekretaris</td>
													<td>: Victor Terinathe </td>
												</tr>
												<tr>
													<td>Bendahara</td>
													<td>:</td>
												</tr>
											</tbody>
										</table>
									</div> <br>
									<p><b>Pelaksana LSP Telematika</b><br></p>
									<div class="table-hover">
										<table class="table table-hover">
											<tbody>
												<tr class="tr-bgcolor">
													<td>Direktur Eksekutif</td>
													<td>: Victor Terinathe</td>
												</tr>
												<tr>
													<td>Manajer Mutu</td>
													<td>: Sammy Gunawan</td>
												</tr>
												<tr class="tr-bgcolor">
													<td>Manajer Sertifikasi</td>
													<td>: Adelina Renata</td>
												</tr>
												<tr>
													<td>Manajer Administrasi</td>
													<td>: Nur Jannah</td>
												</tr>
											</tbody>
										</table>
									</div>
									<br>
								</div>
							</div>
						</div>
					</div>
					<div role="tabpanel" class="tab-pane fade" id="sekilas"><br>
						<div class="container-fluid">
							<div class="jumbotron">
								<div class="container">
									<p class="text-justify">Bogor (16/08/2019) YBM PLN meresmikan program Pendidikan
										yaitu Pondok pesantren tahfidz preneur yang berlokasi di Joglo, Desa Cibereum,
										Kec Cisarua, Kab Bogor.</p>

										<p>Pada peresmian Pondok Pesantren Tahfidz Preneur, siswa yang terdaftar mengkuti
										program berjumlah 32 orang. Pondok Pesantren Tahfidz Preneur memiliki lingkungan
										yang masih asri dan juga alami serta jauh dari hiruk pikuk perkotaan sehingga
										memudahkan anak didik untuk berkonsentrasi dalam belajar serta menghafal
										Al-Qur’an.</p><br>
								</div>
							</div>
						</div>
					</div>
					<div role="tabpanel" class="tab-pane fade" id="pendukung"><br>
						<div class="container-fluid">
							<div class="jumbotron">
								<div class="container">
									<p><b>Asosiasi Pelopor Pelatihan Sekolah Programmer</b></p><br>
									<table class="table table-hover">
										<thead>
											<tr>
												<th width="100px"></th>
												<th width="200px"></th>
											</tr>
										</thead>
										<tbody>
											<tr class="tr-bgcolor">
												<td><img src="img/logonf.png" width="50%" height="auto"> </td>
												<td><b>Nurul Fikri Computer</b><br>
													Asosiasi Penyelenggara Jasa Internet Indonesia<br>
													(Indonesian Internet Service Provider Association<br>
													Website: <a
														href="https://www.nurulfikri.com">https://www.nurulfikri.com</a>
												</td>
											</tr>
											<tr>
												<td> <img src="img/logoybm.png" width="50%" > </td>
												<td><b>Yayasan Baitul Mal PLN</b><br>
													Lembaga Amal Zakat Infaq & Sedekah<br>
													(YBM PLN)<br>
													Website: <a href="https://ybmpln.org">https://ybmpln.org</a>
												</td>
											</tr>


										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-2 anchorStyling link-braces">
			</div>

	</div>
	<section class="four-reasons">
		<div class="four-reasons-patternleft">&nbsp;</div>
		<div class="four-reasons-patternright">&nbsp;</div <div class="container">
		<div class="row clearfix">
			<div class="col-xs-12 text-center">
				<h2>Pesantren Tahfidz & Enterpreneur YBMPLN </h2>
			</div>
		</div>


		<div class="row clearfix four-reasonsAnimation">
			<div class="col-xs-12 col-sm-3 text-center" id="reason1" style="opacity: 1; bottom: 0px;">
				<span class="iconwrap">
					<a data-toggle="modal" data-backdrop="static" href="#11tahun" class="img-responsive">
						<span class="long-shadow"></span>
						<!--span class="svg-icon flat-shadow" id="shadow-clock"></span-->
						<span class="svg-icon flat-shadow"
							style="background-image: url('images/icon/bagroundikon.png');">
							<!--img src="images/icon/ikonpengalaman-01.png" width="110px"-->
							<span class="pengalaman"></span>
						</span>
					</a>
				</span>
				<label>Profesional Dan Kompeten</label>
			</div>
			<div class="col-xs-12 col-sm-3  text-center" id="reason2" style="opacity: 1; bottom: 0px;">
				<span class="iconwrap">
					<a data-toggle="modal" data-backdrop="static" href="#terpercaya" class="img-responsive">
						<span class="long-shadow"></span>
						<!--span class="svg-icon flat-shadow" id="shadow-graph"></span-->
						<span class="svg-icon flat-shadow"
							style="background-image: url('images/icon/bagroundikon.png');">
							<!--img src="images/icon/ikonperformameningkat-01.png" width="110px"-->
							<span class="performa"></span>
						</span>
					</a></span><a data-toggle="modal" data-backdrop="static" href="#terpercaya" class="img-responsive">
				</a>
				<label>Terpercaya Karena Performa Yang Menanjak</label>
			</div>
			<div class="col-xs-12 col-sm-3  text-center" id="reason3" style="opacity: 1; bottom: 0px;">
				<span class="iconwrap">
					<a data-toggle="modal" data-backdrop="static" href="#fasilitas" class="img-responsive">
						<span class="long-shadow"></span>
						<!--span class="svg-icon flat-shadow" id="shadow-thumbsup"></span-->
						<span class="svg-icon flat-shadow"
							style="background-image: url('images/icon/bagroundikon.png');">
							<!--img src="images/icon/fasilitasterkini-01.png" width="110px"-->
							<span class="fasilitas"></span>
						</span>
					</a>
					<label>Di Dukung Fasilitas Terkini</label>
				</span></div>
			<div class="col-xs-12 col-sm-3 text-center" id="reason4" style="opacity: 1; bottom: 0px;">
				<span class="iconwrap">
					<a data-toggle="modal" data-backdrop="static" href="#berorientasi" class="img-responsive">
						<span class="long-shadow"></span>
						<!--span class="svg-icon flat-shadow" id="shadow-winner"></span-->
						<span class="svg-icon flat-shadow"
							style="background-image: url('images/icon/bagroundikon.png');">
							<!--img src="images/icon/orientasipelangan-01.png" width="110px"-->
							<span class="orientasi"></span>
						</span>
					</a>
					<label>Berorientasi Kepada Pelanggan</label>
				</span></div>
		</div>
</div></div>
<br>
</section>
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
	id="11tahun">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title">Telematika Hari Ini</h4>
			</div>
			<div class="modal-body">
				<img src="images/icon/pengalaman12thn-01.jpg" alt="image" class="img-responsive">
			</div>
		</div>
	</div>
</div>
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
	id="terpercaya">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title">Telematika Hari Ini</h4>
			</div>
			<div class="modal-body">
				<img src="images/icon/performameningkat-01.jpg" alt="image" class="img-responsive">
			</div>
		</div>
	</div>
</div>
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
	id="fasilitas">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title">Telematika Hari Ini</h4>
			</div>
			<div class="modal-body">
				<img src="images/icon/fasilitasterkini-01.jpg" alt="image" class="img-responsive">
			</div>
		</div>
	</div>
</div>
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
	id="berorientasi">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title">Telematika Hari Ini</h4>
			</div>
			<div class="modal-body">
				<img src="images/icon/orientasipelanggan-01.jpg" alt="image" class="img-responsive"> <
			</div>
		</div>
	</div>
</div>
</div>
<br><br>
@endsection