<div id="colorlib-appointment">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<h2 class="line-block">Daftar Blog Rumah Sakit Universitas Mataram</h2>
				</div>
			</div>
		</div>
	</div>

	<div id="colorlib-blog">
		<div class="container">
			<div class="row">
				<?php $i=1;?>
				<?php foreach($Blog as $B){?>
				<div class="<?php if($i%3==0){echo 'row';}?>">
				<div class="col-md-4">
					<div class="blog-entry">
						<a href="blog.html" class="blog-img" style="background-image: url(<?php echo base_url().'assets/images/Blog/'.$B['Photo']?>);">
							<p class="date">
								<span></span>
								<span><?php echo $B['Tanggal'] ?></span>
							</p>
						</a>
						<div class="desc">
							<h3><a href="blog.html"><?php echo $B['Judul']?></a></h3>
							<p><?php $isi=substr($B['Isi'],0,100); echo $isi; ?> ............</p>
							<p><a href="<?= site_url ('blog/singleblog/'.$B['Id'])?>">Read more <i class="icon-arrow-right3"></i></a></p>
						</div>
					</div>
				</div>
				</div>
				<?php $i++;}?>
				
			</div>
			
			
		</div>
	</div>