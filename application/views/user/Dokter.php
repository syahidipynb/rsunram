<div id="colorlib-appointment">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center">
				<h2 class="line-block">Dokter Rumah Sakit Universitas Mataram</h2>
			</div>

			<form>
			<div class="form-group">
                <div class="col-md-12 col-sm-9 col-xs-9">
                    <select class="select2_single form-control" name="SPSS" id="SPSS" tabindex="-1">
                        <option> </option>
                    </select>
			    </div>

				<div class="modal-footer">
					<button type="button" type="submit" id="btn_save" class="btn btn-primary">OKE</button>
            	</div>
            </div>
			</form>
		</div>
	</div>
</div>

<div id="colorlib-doctor">
	<div class="container">			
		<div class="row">
			<div id="show_data"></div>
		</div>
	</div>

<script type="text/javascript" src="<?php echo base_url().'assets/jquery-3.2.1.js'?>"></script>
<script type="text/javascript">
	$(document).ready(function(){
		show_dokter();
        show_spesialis();

		function show_dokter(dokter = false){
		    $.ajax({
		        type  : 'ajax',
		        url   : '<?php echo site_url('dokter_controllers/dokter')?>',
		        async : false,
		        dataType : 'json',
		        success : function(data){
		            var html = '';
		            var i;
					var g;
		            for(i=0; i<data.length; i++){
		                if((i+1)%4==0){g="row";}
						else{g=" ";}
						html +=  '<div class="'+g+'">'+
									'<div class="col-md-3 col-sm-6 col-xs-12 animate-box text-center">'+
										'<div class="doctor">'+
											'<div class="staff-img" style="background-image: url(<?php echo base_url()?>assets/images/Dokter/'+data[i].Photo+');"></div>'+
											'<div class="desc">'+
												'<h3><a href="<?= site_url()?>dokter/singledokter/'+data[i].kd_dokter+'">'+data[i].nm_dokter+'</a></h3>'+
												'<span>'+data[i].nm_sps+'</span>'+
											'</div>'+
										'</div>'+
									'</div>'+
								'</div>';
		            }
		            $('#show_data').html(html);
		        }

		    });
		}

		function show_spsdokter(dokter){
			var spesialis = dokter;
		    $.ajax({
				type : "POST",
		        url   : '<?php echo site_url('dokter_controllers/single_dokter') ?>',
		        dataType : 'json',
				data : {spesialis:spesialis},
		        success : function(data){
		            var html = '';
		            var i;
					var g;
		            for(i=0; i<data.length; i++){
		                if((i+1)%4==0){g="row";}
						else{g=" ";}
						html +=  '<div class="'+g+'">'+
									'<div class="col-md-3 col-sm-6 col-xs-12 animate-box text-center">'+
										'<div class="doctor">'+
											'<div class="staff-img" style="background-image: url(<?php echo base_url()?>assets/images/Dokter/'+data[i].Photo+');"></div>'+
											'<div class="desc">'+
												'<h3><a href="<?= site_url()?>dokter/singledokter/'+data[i].kd_dokter+'">'+data[i].nm_dokter+'</a></h3>'+
												'<span>'+data[i].nm_sps+'</span>'+
											'</div>'+
										'</div>'+
									'</div>'+
								'</div>';
		            }
		            $('#show_data').html(html);
		        }

		    });
		}
		

		$('#btn_save').on('click',function(){
            var id_sps = $('#SPSS').val();
			show_spsdokter(id_sps);
            
        });
        
        function show_spesialis(){
            $.ajax({
		        type  : 'ajax',
		        url   : '<?php echo site_url('Spesialis_controllers/spesialis_data')?>',
		        async : false,
		        dataType : 'json',
		        success : function(data){
		            var html = '';
		            var i;
		            for(i=0; i<data.length; i++){
		                html += '<option value="'+data[i].kd_sps+'">'+data[i].nm_sps+'</option>';
                        
		            }
		            $('#SPSS').html(html);
		        }
            });
        }
	});

</script>
