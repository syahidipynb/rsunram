

	<div id="colorlib-doctor">
		<div class="container">
			<div class="row">
				<div class="col-md-8 image-content">
					<div class="doctor animate-box">
						<img class="img-responsive doc-img" src="<?php echo base_url().'assets/images/Dokter/'.$Dokter['Photo'] ?>" alt="photo dokter">
						<h2><a href="doctors-single.html"><?php echo $Dokter['nm_dokter']?></a></h2>
						<span><?php echo $Dokter['nm_sps']?></span>
						
						<div class="contact-info">
							<h2>Contacts</h2>
							<p><i class="icon-location4"></i> <?php echo $Dokter['almt_tgl']?></p>
							<p><i class="icon-phone-outline"></i><?php echo $Dokter['no_telp']?></p>
						</div>
					</div>
				</div>
				<div class="col-md-4 sticky-parent">
					<div id="sticky_item">

						<h3>Jadwal</h3>
                        <?php foreach($Jadwal as $j){ ?>
						<div class="schedule">
							<span class="icon"><i class="icon-calendar3"></i></span>
							<div class="desc">
								<span><?php echo $j['nm_Hari']?></span>
								<span><?php echo $j['jam_mulai']?> - <?php echo $j['jam_selesai']?></span>
							</div>
						</div>
                        <?php }?>
						<p class="btn-big"><a href=http://pasien.rs.unram.ac.id/login.php" class="btn btn-primary">Daftar Antrian</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>