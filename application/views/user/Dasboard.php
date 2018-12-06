<aside id="colorlib-hero">
	<div class="flexslider">
		<ul class="slides">
	   	
			<?php foreach($AssideData as $ass){?>
			<li style="background-image: url(<?php echo base_url('assets/images/Asside/'.$ass['Photo'])?>)">
		   		<div class="overlay"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 col-md-pull-2 slider-text">
			   				<div class="slider-text-inner">
									<h2 class="doc-holder"><?php echo $ass['Caption'] ?></h2>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
			<?php }?>

	  	</ul>
  	</div>
</aside>

<?php if($KeunggulanData!=null){ ?>
<div id="colorlib-intro">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="intro animate-box">
					<?php foreach($KeunggulanData as $Keunggulan){ ?>
					<div class="intro-grid color-1">
						<span class="icon"><i ><img src="<?php echo base_url('assets/images/Layanan/'.$Keunggulan['Icon'])?>"></i></span>
						<h3><?php echo $Keunggulan['Judul'] ?></h3>
						<p><?php echo $Keunggulan['Keterangan'] ?></p>	
					</div>
					<?php }?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php }?>

<?php if($LayananData!=null){ ?>	
<div id="colorlib-services">
	<div class="container">
		<div class="row animate-box">
			<div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
				<h2>LAYANAN UNGGULAN</h2>
				<p></p>
			</div>
		</div>
		<div class="row">
			<?php $i=1?>
			<?php foreach($LayananData as $Layanan){ ?>
			<div class="<?php if($i%3==0){ echo 'row';} ?>">
				
			<div class="col-md-4 animate-box">
				<div class="services">
					<span class="icon">
						<i ><img src="<?php echo base_url('assets/images/Layanan/'.$Layanan['Icon'])?>"></i>
					</span>
					<div class="desc">
						<h3><a href="#"><?php echo $Layanan['Judul']?></a></h3>
						<p><?php echo $Layanan['Keterangan']?></p>
					</div>
				</div>
			</div>
			</div>
			<?php $i++; }?>
		</div>
	</div>
</div>
<?php }?>

<?php if($Blog!=null){?>	
<div id="colorlib-blog">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
					<h2>Blog Terbaru</h2>
				</div>
			</div>
			<div class="row">
				<?php $i=0; ?>
				<?php foreach($Blog as $B){?>
				<?php if($i<3){ ?>
				<div class="col-md-4">
					<div class="blog-entry">
						<a href="blog.html" class="blog-img" style="background-image: url(<?php echo base_url('assets/images/Blog/'.$B['Photo'])?>);">
							<p class="date">
								<span></span>
								<span><?php echo $B['Tanggal']?></span>
							</p>
						</a>
						<div class="desc">
							<h3><a href="blog.html"><?php echo $B['Judul']?></a></h3>
							<p><?php $isi=substr($B['Isi'],0,100); echo $isi; ?> ............</p>
							<p><a href="<?= site_url ('blog/singleblog/'.$B['Id'])?>">Read more <i class="icon-arrow-right3"></i></a></p>
						</div>
					</div>
				</div>
				<?php }?>
				<?php $i++; }?>
			</div>
		</div>
	</div>
<?php }?>


<?php if($Fasilitas!=null){?>
<div id="colorlib-testimonial" class="colorlib-bg-section">
	<div class="container">
		<div class="row animate-box">
			<div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
				<h2>Fasilitas</h2>
				<p>Rumah sakit Universitas Mataram merupakan salah satu rumah sakit terbesar di NTB yang memiliki berbagai fasilitas penunjang</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 animate-box">
				<div class="owl-carousel">
					<?php foreach($Fasilitas as $Fas){ ?>
					<div class="item">		
						<div class="testimony text-center">
							<span class="user"><?php echo $Fas['Caption']?></span>
							<img src="<?php echo base_url('assets/images/Fasilitas/'.$Fas['Photo'])?>">
						</div>
					</div>
					<?php }?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php }?>

<div id="colorlib-blog">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
					<h2>Partner Kami</h2>
					<p>Rumah Sakit Universitas Mataram memiliki partner pendukung, diantarannya :</p>
				</div>
				<div class="col-md-1 col-md-offset-3 text-center colorlib-heading">
				<img src="<?php echo base_url('assets/images/kerjasama.png')?> " height="200px">
				</div>
				
			</div>
			
		</div>
	</div>