<?php include "header.php"; ?>

<div class="container">
		<div class="row">
			<div class="col-md-12">	
				  <div class="carousel slide" id="contoh-carousel" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#contoh-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#contoh-carousel" data-slide-to="1"></li>
						</ol>
						<div class="carousel-inner" role="listbox">
							<div class="item active">
								<img src="produk/gambar1.jpg" alt="Keterangan Gambar satu">
								<div class="carousel-caption">
									<h1>Hello!!</h1>
									<h2>Ingin makan dengan suasana yang nyaman, bersih, rapi, dan harganya murah? Yuk coba datang ke Outlet Nisa. Di sana ada banyak varian menu makanan yang enak, lezat dan harganya terjangkau. Yuk datang sekarang juga!</h2>
									<p><a class="btn btn-danger btn-lg" href="makanan.php" role="button">Lihat Menu</a> 
								</div>
							</div>
							<div class="item">
								<img src="produk/gambar2.jpg" alt="Keterangan Gambar dua">
								<div class="carousel-caption">
									<h1>Alamat</h1>
									<h2>Jalan Besar Karang Gading Kabupaten Deli Serdang</h2>
								</div>
							</div>
						</div>
						<a class="left carousel-control" href="#contoh-carousel" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							<span class="sr-only">Prev</span>
						</a>
						<a class="right carousel-control" href="#contoh-carousel" role="button" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
			</div>
		</div>
	</div>

    <?php include "footer.php"; ?>