<div id="colorlib-blog">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="blog-wrap">
						<div class="row">
							<div class="col-md-12">
								<img class="img-responsive" src="<?php echo base_url('assets/images/Blog/'.$Blog['Photo'])?>" alt=""><br>
							</div>
							<div class="col-md-12">
								<div class="blog-desc col-paddingbottom">
									<h2><a href="blog-single.html"><?php echo $Blog['Judul'] ?></a></h2>
									<div class="post-meta">
										<span><?php echo $Blog['Tanggal'] ?></span>
									</div>
									<p><?php echo $Blog['Isi'] ?></p>
								</div>
							</div>
							
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>