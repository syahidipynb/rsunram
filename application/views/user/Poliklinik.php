	<div id="colorlib-appointment">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<h2 class="line-block">DAFTAR POLIKLINIK RUMAH SAKIT UNIVERSITAS MATARAM</h2>
				</div>
			</div>
		</div>
	</div>

	<div class="colorlib-departments">
		<div class="container">
			<div class="row">
				<?php $i=1;?>
				<?php foreach($Poliklinik as $P){?>
				<div class="department-wrap animate-box">
					<div class="grid-1 col-md-6 <?php if($i%2==0){ echo 'col-md-push-6';}?>" style="background-image: url(<?php echo base_url('assets/images/Poliklinik/'.$P['Photo_poli'])?>"></div>
					<div class="grid-2 col-md-6 <?php if($i%2==0){ echo 'col-md-pull-6';}?>">
						<div class="desc">
							<h2><a href="departments-single.html"><?php echo $P['nm_sps'] ?></a></h2>
							<div class="department-info">
								<div class="block">
									<h2><a href="doctors-single.html"><?php echo $P['nm_dokter'] ?></a></h2>
									<span>Kepala Poliklinik</span>
								</div>
								<div class="block">
									<h2><a href="departments-single.html">Department info</a></h2>
									<span><?php echo $P['Ruangan_Poli'] ?></span>
								</div>
								<div class="block">
									<h2><a href="<?= site_url ('dokter/doktersps/'.$P['kd_sps'])?>">Lihat Dokter</a></h2>
									<span>Anda Dapat Melihat Daftar Dokter Poliklinik</span>
								</div>
							</div>
						</div>
					</div>
                </div>
                <?php $i++;}?>
				
			</div>
		</div>
	</div>