<div class="right_col" role="main">

    <div class="page-title">
        <div class="title_left">
            <h3>DATA SPESIALIS</h3>
        </div>              
    </div>

    <div class="clearfix"></div>

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            
            <div class="x_title">
                <div class="float-right"><a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Modal_Add"><span class="fa fa-plus"></span> Add Spesialis</a></div>                 
                <div class="clearfix"></div>
            </div>
            
            <div class="x_content">
                <table id="mydata" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Kode Spesialis</th>
                            <th>Nama Spesialis</th>
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

<!-- modal delete dokter -->
<form>
<div class="modal fade docs-cropped" id="Modal_Delete" aria-hidden="true" aria-labelledby="getCroppedCanvasTitle" role="dialog" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
                                                  
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" >APAKAH ANDA YAKIN INGIN MENGHAPUS SPESIALIS INI</h4>
            </div>

            <div class="modal-body">
                <h4 class="modal-title" ></h4>
            </div>

            <div class="modal-footer">
                <input type="hidden" name="spesialis_delete" id="spesialis_delete" class="form-control">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                <button type="button" type="submit" id="btn_delete" class="btn btn-primary">Yes</button>
            </div>
        
        </div>
    </div>
</div>
</form>
<!-- / delete modal -->

<!-- modal TAMBAH SPESIALIS -->
<form>
<div class="modal fade docs-cropped" id="Modal_Add" aria-hidden="true" aria-labelledby="getCroppedCanvasTitle" role="dialog" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">                                              
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" >SILAHKAN MASUKKAN KODE DAN NAMA SPESIALIS YANG INGIN DI TAMBAHKAN</h4>
            </div>

            
            <div class="modal-body">
                
                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    <?php echo form_error('KODES');?>
                    <input type="text" name="KODES" id="KODES" class="form-control has-feedback-left" id="inputSuccess2" required="" placeholder="Kode Spesialis" >
                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    <input type="text" name="NAMAS" id="NAMAS" class="form-control" id="inputSuccess3" placeholder="Nama Spesialis">
                    <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" type="submit" id="btn_save" class="btn btn-primary">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>
</form>
<!-- /.modal -->

<!-- modal update SPESIALIS -->
<form>
<div class="modal fade docs-cropped" id="Modal_Edit" aria-hidden="true" aria-labelledby="getCroppedCanvasTitle" role="dialog" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">                                              
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" >SILAHKAN MASUKKAN KODE DAN NAMA SPESIALIS YANG INGIN DI TAMBAHKAN</h4>
            </div>

            <form class="form-horizontal form-label-left" action="<?php echo base_url('Admin/insert_spesialis'); ?>" method="post">
            <div class="modal-body">
                
                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    <input type="text" name="KODES_edit" id="KODES_edit" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Kode Spesialis" readonly>
                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    <input type="text" name="NAMAS_edit" id="NAMAS_edit" class="form-control" id="inputSuccess3" placeholder="Nama Spesialis">
                    <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" type="submit" id="btn_update" class="btn btn-primary">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>
</form>
<!-- /.modal update -->

<script type="text/javascript" src="<?php echo base_url().'assets/jquery-3.2.1.js'?>"></script>

<script type="text/javascript">
	$(document).ready(function(){
		show_product();	//call function show all product
		
		$('#mydata').dataTable();
		 
		//function show all product
		function show_product(){
		    $.ajax({
		        type  : 'ajax',
		        url   : '<?php echo site_url('Spesialis_controllers/spesialis_data')?>',
		        async : false,
		        dataType : 'json',
		        success : function(data){
		            var html = '';
		            var i;
		            for(i=0; i<data.length; i++){
		                html += '<tr>'+
		                  		'<td>'+data[i].kd_sps+'</td>'+
		                        '<td>'+data[i].nm_sps+'</td>'+
                                '<td>'+'<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit" data-kd_sps="'+data[i].kd_sps+'" data-nm_sps="'+data[i].nm_sps+'">Edit</a>'+'</td>'+
                                '<td>'+'<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-kd="'+data[i].kd_sps+'">Delete</a>'+'</td>'+
		                        '</tr>';
		            }
		            $('#show_data').html(html);
		        }

		    });
		}
        
        //Save product
        $('#btn_save').on('click',function(){
            var kd_sps = $('#KODES').val();
            var nm_sps = $('#NAMAS').val();
            if(kd_sps=="" || nm_sps==""){alert('kode dan nama spesialis tidak boleh kosong')}
            if(kd_sps!="" && nm_sps!=""){
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('spesialis_controllers/save')?>",
                dataType : "JSON",
                data : {kd_sps:kd_sps , nm_sps:nm_sps},
                success: function(data){
                    $('[name="KODES"]').val("");
                    $('[name="NAMAS"]').val("");
                    $('#Modal_Add').modal('hide');
                    show_product();
                }
            });
            return false;
            }
            
        });

        //get data for delete record
        $('#show_data').on('click','.item_delete',function(){
            var kd_sps = $(this).data('kd');
            
            $('#Modal_Delete').modal('show');
            $('[name="spesialis_delete"]').val(kd_sps);
        });

        //delete record to database
        $('#btn_delete').on('click',function(){
            var kd_sps = $('#spesialis_delete').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('spesialis_controllers/delete')?>",
                dataType : "JSON",
                data : {kd_sps:kd_sps},
                success: function(data){
                    $('[name="spesialis_delete"]').val("");
                    $('#Modal_Delete').modal('hide');
                    show_product();
                }
            });
            return false;
        });

        //get data for update record
        $('#show_data').on('click','.item_edit',function(){
            var kd_sps = $(this).data('kd_sps');
            var nm_sps = $(this).data('nm_sps');
            
            $('#Modal_Edit').modal('show');
            $('[name="KODES_edit"]').val(kd_sps);
            $('[name="NAMAS_edit"]').val(nm_sps);
        });

        //update record to database
        $('#btn_update').on('click',function(){
            var kd_sps = $('#KODES_edit').val();
            var nm_sps = $('#NAMAS_edit').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('spesialis_controllers/update')?>",
                dataType : "JSON",
                data : {kd_sps:kd_sps , nm_sps:nm_sps},
                success: function(data){
                    $('[name="KODES_edit"]').val("");
                    $('[name="NAMAS_edit"]').val("");
                    $('#Modal_Edit').modal('hide');
                    show_product();
                }
            });
            return false;
        });

	});

</script>