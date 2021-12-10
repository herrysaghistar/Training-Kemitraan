@extends('layout.main')

@section('container')

	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href='/'>Home</a></li>
			<li class="active">Histori</li>
		</ol>
<hr>

	
<table class="table">
	<thead class="thead-dark">
	  <tr>
		<th scope="col">No</th>
		<th scope="col">Judul</th>
		<th scope="col">Bencana</th>
		<th scope="col">Kecamatan</th>
		<th scope="col">Tanggal</th>
		<th scope="col">Isi</th>
	  </tr>
	</thead>
	
	<tbody>
		@foreach ( $pelaporan as $pelaporans)
	  <tr>
		<th scope="row"> {{ $pelaporans ->id}}</th>
		<td> {{ $pelaporans ->judul_laporan}}</td>
		<td> {{ $pelaporans ->bencana ->Nama_bencana}} </td>
		<td> {{ $pelaporans ->kecamatan ->Nama_Kecamatan }}</td>
		<td> {{ $pelaporans ->waktu_bencana }}</td>
		<td> {{ $pelaporans ->isi_laporan }}</td>
	  </tr>
	  @endforeach
	</tbody>
  </table>
  
  
  </table>


















			</aside>
			<!-- /Sidebar -->

 <!--image slider start-->
 
	<!--manual navigation end-->
  </div>
  <!--image slider end-->
		</div>
	</div>	<!-- /container -->
	
	<footer id="footer" class="top-space">

		<div class="footer1">
			<div class="container">
				<div class="row">
					<div class="col-md-5 panel">
						<h3 class="panel-title">About Atlanta</h3>
						<div class="panel-body">
							<p>Lorem ipsum dolor amet, consectetur adipiscing elit. Aenean leo lectus sollicitudin convallis eget libero. Aliquam laoreet tellus ut libero semper, egestas velit malesuada. Sed non risus eget dolor amet vestibulum ullamcorper. Integer feugiat molestie.</p> 
						</div>
					</div>

					<div class="col-md-4 panel contact"> 
						<h3 class="panel-title">Contact Info</h4>
						<div class="panel-body">
							<p>Hubungi kami .</p>
							<ul>
							  <li><i class="fa fa-phone"></i>0812-3418-9999</li>
							  <li><a href="#"><i class="fa fa-envelope-o"></i> lancana@gmail.com</a></li>
							  <li><i class="fa fa-flag"></i>Gubeng Jaya</li>
							</div>
					</div>

					<div class="col-md-3 panel">
						<h3 class="panel-title">Follow me</h3>
						<div class="panel-body">
							<p class="follow-me-icons">
								<a href=""><i class="fa fa-twitter fa-2"></i></a>
								<a href=""><i class="fa fa-dribbble fa-2"></i></a>
								<a href=""><i class="fa fa-github fa-2"></i></a>
								<a href=""><i class="fa fa-facebook fa-2"></i></a>
								<a href=""><i class="fa fa-youtube fa-2"></i></a>
								<a href=""><i class="fa fa-pinterest fa-2"></i></a>
							</p>	
						</div>
					</div>
			
				</div> <!-- /row of panels -->
			</div>
		</div>

		<div class="footer2">
			<div class="container">
				<div class="row">
					
					<div class="col-md-6 panel">
						<div class="panel-body">
							<p class="simplenav">
								<a href='/'>Home</a> | 
								<a href='about'>About</a> |
								
							</p>
						</div>
					</div>

					<div class="col-md-6 panel">
						<div class="panel-body">
							<p class="text-right">
								Copyright &copy; 2021.
							</p>
						</div>
					</div>

				</div> <!-- /row of panels -->
			</div>
		</div>

	</footer>	
		



	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/custom.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>
</html>