<div id="colorlib-appointment">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center">
				<h2 class="line-block">Dokter Rumah Sakit Universitas Mataram</h2>
				
			</div>
		</div>
	</div>
</div>

<div id="colorlib-doctor">
	<div class="container">			
		<div class="row">
				<?php $i=1; ?>
				<?php foreach($DokterData as $dokter){?>
				<div class="<?php if($i%4==0){ echo 'row';} ?>">
				<div class="col-md-3 col-sm-6 col-xs-12 animate-box text-center">
					<div class="doctor">
						<div class="staff-img" style="background-image: url(<?php echo base_url().'assets/images/Dokter/'.$dokter['Photo'] ?>);"></div>
						<div class="desc">
							<h3><a href="<?= site_url ('dokter/singledokter/'.$dokter['kd_dokter'])?>"><?php echo $dokter['nm_dokter']?></a></h3>
							<span><?php echo $dokter['nm_sps']?></span>
						</div>
					</div>
				</div>
				</div>
				<?php $i++; }?>
			</div>
		</div>
	</div>