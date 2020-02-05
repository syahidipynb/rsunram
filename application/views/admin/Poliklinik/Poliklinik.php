<div class="right_col" role="main">

    <div class="page-title">
        <div class="title_left">
            <h3>DATA POLIKLINIK</h3>
        </div>              
    </div>

    <div class="clearfix"></div>

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            
            <div class="x_title">
                <div class="float-right"><a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Modal_Add"><span class="fa fa-plus"></span> Add Poliklinik</a></div>                 
                <div class="clearfix"></div>
            </div>
            
            <div class="x_content">
                <table id="mydata" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            
                            <th>Poliklinik</th>
                            <th>Kepala Poliklinik</th>
                            <th>Ruangan Poliklink</th>
                            <th>Edit</th>
                            <th>Delete</th>                   
                        </tr>
                    </thead>
                         
                    <tbody id="show_data">
                         
                    </tbody>
                        
                </table>
            </div>
        </div>
    </div>          
</div>

<!-- /page content -->

<!-- modal delete Poliklinik -->
<form>
<div class="modal fade docs-cropped" id="Modal_Delete" aria-hidden="true" aria-labelledby="getCroppedCanvasTitle" role="dialog" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
                                                  
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" >APAKAH ANDA YAKIN INGIN MENGHAPUS POLIKLINIK INI</h4>
            </div>

            <div class="modal-body">
                <h4 class="modal-title" ></h4>
            </div>

            <div class="modal-footer">
                <input type="hidden" name="poliklinik_delete" id="poliklinik_delete" class="form-control">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                <button type="button" type="submit" id="btn_delete" class="btn btn-primary">Yes</button>
            </div>
        
        </div>
    </div>
</div>
</form>
<!-- / delete modal -->

<!-- modal spesialis/poliklinik jadwal -->
<form>
<div class="modal fade docs-cropped" id="Modal_Add" aria-hidden="true" aria-labelledby="getCroppedCanvasTitle" role="dialog" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
                                                                                    
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" >PILIH POLIKLINIK YANG INGIN DIMASUKKAN <b><h4 name="nm_dokter" id="nm_dokter"></h4></b> DARI JADWAL</h4>
            </div>                      

            <div class="modal-body">
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Poliklinik</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <select class="select2_single form-control" name="data_spesialis" tabindex="-1" id="data_spesialis">
                          
                        </select>
                    </div> 
                </div>
                
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Kepala Poliklinik</label>
                    <div class="col-md-9 col-sm-9 col-xs-12 form-group has-feedback">
                        <input type="text" name="kepala_poliklinik" id="kepala_poliklinik" class="form-control has-feedback-left" placeholder="Kepala Poliklinik" readonly>
                        <span class=" form-control-feedback " aria-hidden="true"></span>
                    </div> 
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Resizable Text area</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <textarea class="resizable_textarea form-control" placeholder="Ruangan Poliklinik" readonly></textarea>
                    </div>
                </div>
                
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                <button type="button" type="submit" id="btn_Add1" class="btn btn-primary">Yes</button>
            </div>
        </div>
    </div>
</div>
</form>
<!--MODAL ADD1-->
<form>
<div class="modal fade docs-cropped" id="Modal_Add1" aria-hidden="true" aria-labelledby="getCroppedCanvasTitle" role="dialog" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
                                                                                    
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" >PILIH KEPALA POLIKLINIK YANG INGIN DIMASUKKAN <b><h4 name="nm_dokter" id="nm_dokter"></h4></b> DARI JADWAL</h4>
            </div>

            <div class="modal-body">
                <input type="hidden" name="kepala_poliklinik1" id="kepala_poliklinik1">
                <input type="hidden" name="ID1" id="ID1">
                
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Poliklinik</label>
                    <div class="col-md-9 col-sm-9 col-xs-12 form-group has-feedback">
                        <input type="text" name="poli" id="poli" class="form-control has-feedback-left" placeholder="Kepala Poliklinik" readonly>
                        <span class=" form-control-feedback " aria-hidden="true"></span>
                    </div> 
                </div>
                
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Kepala Poliklinik</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <select class="select2_single form-control" name="dokter_sps" tabindex="-1" id="dokter_sps">
                          
                        </select>
                    </div> 
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Resizable Text area</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <textarea class="resizable_textarea form-control" placeholder="Ruangan Poliklinik" readonly></textarea>
                    </div>
                </div>
                
                
            </div>

            <div class="modal-footer">
                <button type="button" id="btn_back2" class="btn btn-secondary" data-dismiss="modal">Back</button>
                <button type="button" type="submit" id="btn_Add2" class="btn btn-primary">Yes</button>
            </div>
        </div>
    </div>
</div>
</form>
<!--MODAL ADD 2-->

<div class="modal fade docs-cropped" id="Modal_Add2" aria-hidden="true" aria-labelledby="getCroppedCanvasTitle" role="dialog" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
        <form id="submit">                                                      
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" >PILIH KEPALA POLIKLINIK YANG INGIN DIMASUKKAN <b><h4 name="nm_dokter" id="nm_dokter"></h4></b> DARI JADWAL</h4>
            </div>

            <div class="modal-body">
                <input type="text" name="id_poli" id="id_poli">
                <input type="text" name="id_dokter" id="id_dokter">
                <input type="text" name="ID2" id="ID2">
                
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Poliklinik</label>
                    <div class="col-md-9 col-sm-9 col-xs-12 form-group has-feedback">
                        <input type="text" name="poli1" id="poli1" class="form-control has-feedback-left" placeholder="Kepala Poliklinik" readonly>
                        <span class=" form-control-feedback " aria-hidden="true"></span>
                    </div> 
                </div>
                
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12"> Kepala Poliklinik</label>
                    <div class="col-md-9 col-sm-9 col-xs-12 form-group has-feedback">
                        <input type="text" name="kpoli" id="kpoli" class="form-control has-feedback-left" placeholder="Kepala Poliklinik" readonly>
                        <span class=" form-control-feedback " aria-hidden="true"></span>
                    </div> 
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Ruangan Poliklinik</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <textarea name="ruangan" id="ruangan"class="resizable_textarea form-control" placeholder="Ruangan Poliklinik" ></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12"> Photo Poliklinik</label>
                    <div class="col-md-9 col-sm-9 col-xs-12 form-group has-feedback">
                        <input type="file" name="file">
                        <span class=" form-control-feedback " aria-hidden="true"></span>
                    </div> 
                </div>
                
            </div>

            <div class="modal-footer">
                <button type="button" id="btn_back3" class="btn btn-secondary" data-dismiss="modal">Back</button>
                <button type="submit" id="btn_save" class="btn btn-primary">Save</button>
            </div>
        </div>
    </form>
    </div>
</div>

<!-- / add modal -->
<!--MODAL edit-->

<div class="modal fade docs-cropped" id="Modal_Edit" aria-hidden="true" aria-labelledby="getCroppedCanvasTitle" role="dialog" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
        <form id="submitedit">                                                                
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" >PILIH KEPALA POLIKLINIK YANG INGIN DIMASUKKAN <b><h4 name="nm_dokter" id="nm_dokter"></h4></b> DARI JADWAL</h4>
            </div>

            <div class="modal-body">
                <input type="hidden" name="ID_edit" id="ID_edit" class="form-control has-feedback-left" placeholder="Kepala Poliklinik" readonly>
                
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12"> Poliklinik</label>
                    <div class="col-md-9 col-sm-9 col-xs-12 form-group has-feedback">
                        <input type="text" name="poliklinik_edit" id="poliklinik_edit" class="form-control has-feedback-left" placeholder="Kepala Poliklinik" readonly>
                        <span class=" form-control-feedback " aria-hidden="true"></span>
                    </div> 
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Kepala Poliklinik</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <select class="select2_single form-control" name="kepala_edit" tabindex="-1" id="kepala_edit">
                          
                        </select>
                    </div> 
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Rungan Poliklinik</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <textarea name="ruangan_edit" id="ruangan_edit" class="resizable_textarea form-control" placeholder="Ruangan Poliklinik" ></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12"> Ganti Photo Poliklinik</label>
                    <div class="col-md-9 col-sm-9 col-xs-12 form-group has-feedback">
                        <input type="file" name="file">
                        <span class=" form-control-feedback " aria-hidden="true"></span>
                    </div> 
                </div>
                
            </div>

            <div class="modal-footer">
                <button type="button" id="btn_back3" class="btn btn-secondary" data-dismiss="modal">Back</button>
                <button type="submit" id="btn_save" class="btn btn-primary">Update</button>
            </div>
        </div>
        </form>
    </div>
</div>

<!-- / add modal -->

<script type="text/javascript" src="<?php echo base_url().'assets/jquery-3.2.1.js'?>"></script>

<script type="text/javascript">
	$(document).ready(function(){
		show_product();	//call function show all product
        show_spesialis();
        
        $('#submit').submit(function(e){
		    e.preventDefault();
		        $.ajax({
		            url  : "<?php echo site_url('Poliklinik_controllers/save')?>",
		            type:"post",	
		            data:new FormData(this), //this is formData
		            processData:false,
		            contentType:false,
		            cache:false,
		            async:false,
		            success: function(data){
                        console.log(data);
						$('[name="id_poli"]').val("");
                        $('[name="id_dokter"]').val("");
                        $('[name="ruangan"]').val("");
                        $('[name="ID2"]').val("");
                        $('#Modal_Add2').modal('hide');
                        show_product();
		           	}
		        });
		});
		
		$('#mydata').dataTable();
		 
		//function show all product
		function show_product(){
		    $.ajax({
		        type  : 'ajax',
		        url   : '<?php echo site_url('Poliklinik_controllers/poliklnik_data')?>',
		        async : false,
		        dataType : 'json',
		        success : function(data){
		            var html = '';
		            var i;
		            for(i=0; i<data.length; i++){
		                html += '<tr>'+
		                  		
		                        '<td>'+data[i].nm_sps+'</td>'+
                                '<td>'+data[i].nm_dokter+'</td>'+
                                '<td>'+data[i].Ruangan_Poli+'</td>'+
                                '<td>'+'<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit" data-kd="'+data[i].ID_Poli+'" data-id="'+data[i].ID_SPS+'" data-nm="'+data[i].nm_sps+'" data-rm="'+data[i].Ruangan_Poli+'">Edit</a>'+'</td>'+
                                '<td>'+'<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-kd="'+data[i].ID_Poli+'">Delete</a>'+'</td>'+
		                        '</tr>';
		            }
		            $('#show_data').html(html);
		        }

		    });
		}
        
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
		                html += '<option value="'+data[i].kd_sps+'">'+data[i].nm_sps+'</option>'
		            }
		            $('#data_spesialis').html(html);
		        }

		    });
        }

        function show_singlespesialis(ganteng){
            var spesialis = ganteng;
		    $.ajax({
		        type : "POST",
                url : "<?php echo site_url('spesialis_controllers/spesialis_singledata') ?>",
                dataType:"JSON",
                data : {spesialis:spesialis},
		        success : function(data){
                   
		            var html = data.nm_sps;
		            var i;
                    $('#poli').val(html);
                    $('#poli1').val(html);
		        }
		    });
        }
        
        function show_singledokter(ganteng){
            var spesialis = ganteng;
		    $.ajax({
		        type : "POST",
                url : "<?php echo site_url('dokter_controllers/dokter_singledata') ?>",
                dataType:"JSON",
                data : {spesialis:spesialis},
		        success : function(data){
                   
		            var html = data.nm_dokter;
		            var i;
                    $('#kpoli').val(html);
                    
		        }
		    });
		}

        //get data update
        $('#show_data').on('click','.item_edit',function(){
            var spesialis = $(this).data('id');
            var idpoli = $(this).data('kd');
            var nmpoli = $(this).data('nm');
            var rmpoli = $(this).data('rm');
            
            $('#Modal_Edit').modal('show');
            $('[name="ID_edit"]').val(idpoli);
            $('[name="poliklinik_edit"]').val(nmpoli);
            $('[name="ruangan_edit"]').val(rmpoli);
            
            $.ajax({
                type : "POST",
                url : "<?php echo site_url('dokter_controllers/single_dokter') ?>",
                dataType:"JSON",
                data : {spesialis:spesialis},
                success:function(data){
                    var html = '';
		            var i;
		            for(i=0; i<data.length; i++){
		                html += '<option value="'+data[i].kd_dokter+'">'+data[i].nm_dokter+'</option>';
                                
                    }
                    $('#kepala_edit').html(html);                   
                }
            });
            return false;
        });
        
        $('#submitedit').submit(function(e){
		    e.preventDefault();
		        $.ajax({
		            url  : "<?php echo site_url('Poliklinik_controllers/update')?>",
		            type:"post",	
		            data:new FormData(this), //this is formData
		            processData:false,
		            contentType:false,
		            cache:false,
		            async:false,
		            success: function(data){
                        console.log(data);
						$('[name="KODES_edit"]').val("");
                        $('[name="NAMAS_edit"]').val("");
                        $('#Modal_Edit').modal('hide');
                        show_product();
		           	}
		        });
		});

        /*$('#btn_update').on('click',function(){
            var ID_edit = $('#ID_edit').val();
            var kepala_edit = $('#kepala_edit').val();
            var ruangan_edit = $('#ruangan_edit').val();
            
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('Poliklinik_controllers/update')?>",
                dataType : "JSON",
                data : {ID_edit:ID_edit , kepala_edit:kepala_edit, ruangan_edit:ruangan_edit},
                success: function(data){
                    $('[name="KODES_edit"]').val("");
                    $('[name="NAMAS_edit"]').val("");
                    $('#Modal_Edit').modal('hide');
                    show_product();
                }
            });
            return false;
        });*/

        //get data for delete record
        $('#show_data').on('click','.item_delete',function(){
            var ID_Poli = $(this).data('kd');
            
            $('#Modal_Delete').modal('show');
            $('[name="poliklinik_delete"]').val(ID_Poli);
        });
        
        //delete record to database
        $('#btn_delete').on('click',function(){
            var kd_sps = $('#poliklinik_delete').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('Poliklinik_controllers/delete')?>",
                dataType : "JSON",
                data : {kd_sps:kd_sps},
                success: function(data){
                    $('[name="poliklinik_delete"]').val("");
                    $('#Modal_Delete').modal('hide');
                    show_product();
                }
            });
            return false;
        });

        $('#btn_Add2').on('click',function(){
            $('#Modal_Add1').modal('hide');
            var id = $('#ID1').val();
            var id_poli = $('#kepala_poliklinik1').val();
            var id_dokter = $('#dokter_sps').val();
            
            $('#Modal_Add2').modal('show');
            show_singledokter(id_dokter);
            $('[name="ID2"]').val(id);
            $('[name="id_poli"]').val(id_poli);
            $('[name="id_dokter"]').val(id_dokter);
        });

        $('#btn_Add1').on('click',function(){
            $('#Modal_Add').modal('hide');
            var spesialis = $('#data_spesialis').val();
            var id = $("").val();
            
            $('#Modal_Add1').modal('show');
            show_singlespesialis(spesialis);
            $('[name="kepala_poliklinik1"]').val(spesialis);
            $('[name="ID1"]').val(id);
            
            $.ajax({
                type : "POST",
                url : "<?php echo site_url('dokter_controllers/single_dokter') ?>",
                dataType:"JSON",
                data : {spesialis:spesialis},
                
                success:function(data){
                    var html = '';
                    var i;
                    
		            for(i=0; i<data.length; i++){
		                html += '<option value="'+data[i].kd_dokter+'">'+data[i].nm_dokter+'</option>';
                                
                    }
                    $('#dokter_sps').html(html);
                    $('#Modal_Add1').modal('show');
                    $('#Modal_Add').modal('hide');
                    
                }
            });
            return false;
            /*$.ajax({
                type : "POST",
                url : "<?php echo site_url('spesialis_controllers/spesialis_singledata') ?>",
                dataType:"JSON",
                data : {spesialis:spesialis},
                success:function(data){
                   
                                
                    }
                    $('#coba').html(data.nm_dokter);
                    $('#Modal_Add1').modal('show');
                    $('#Modal_Add').modal('hide');
                }
            });
            return false;*/
        });
        
        //menyimpan poliklinik
        /*$('#btn_save').on('click',function(){
            var kd_poli = $('#id_poli').val();
            var kd_dokter = $('#id_dokter').val();
            var ruangan = $('#ruangan').val();
            var ID = $('#ID2').val();
            
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('Poliklinik_controllers/save')?>",
                dataType : "JSON",
                data : {kd_poli:kd_poli , ID:ID, kd_dokter:kd_dokter, ruangan:ruangan},
                success: function(data){
                    $('[name="id_poli"]').val("");
                    $('[name="id_dokter"]').val("");
                    $('[name="ruangan"]').val("");
                    $('[name="ID2"]').val("");
                    $('#Modal_Add2').modal('hide');
                    show_product();
                }
            });
            return false;
        });*/

        //untuk membuat medal inputan kembali
        $('#btn_back3').on('click',function(){
            $('#Modal_Add2').modal('hide');
            
            $('#Modal_Add1').modal('show');
        
        });
        $('#btn_back2').on('click',function(){
            $('#Modal_Add1').modal('hide');
            
            $('#Modal_Add').modal('show');
        
        });
        

	});

</script>