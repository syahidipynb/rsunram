<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3> FORM ADMIN </h3>
            </div>

            <div class="title_right">
                
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
        	        <div class="x_title">
                    <img src="<?php echo base_url()?>assets/images/rs.png" height="300px">

                    	<div class="clearfix"></div>
                  	</div>
                  	
                    	
                  	</div>
                </div>
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
                <h4 class="modal-title" >APAKAH ANDA YAKIN INGIN MENGHAPUS PHOTO INI</h4>
            </div>

            <div class="modal-body">
                <h4 class="modal-title" ></h4>
            </div>

            <div class="modal-footer">
                <input type="hidden" name="dokter_delete" id="dokter_delete" class="form-control">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                <button type="button" type="submit" id="btn_delete" class="btn btn-primary">Yes</button>
            </div>
        
        </div>
    </div>
</div>
</form>
<!-- / delete modal -->

<!-- modal update SPESIALIS -->
<form>
<div class="modal fade docs-cropped" id="Modal_Edit" aria-hidden="true" aria-labelledby="getCroppedCanvasTitle" role="dialog" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">                                              
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" >Silalhkan masukkan caption yang baru </h4>
            </div>

            <form class="form-horizontal form-label-left" action="<?php echo base_url('Admin/insert_spesialis'); ?>" method="post">
            <div class="modal-body">
                <input type="hidden" name="KODES_edit" id="KODES_edit" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Kode Spesialis" readonly>
               
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Edit Caption</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <textarea name="NAMAS_edit" id="NAMAS_edit" class="resizable_textarea form-control" placeholder="Edit Caption" ></textarea>
                    </div>
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
		show_asside();

		function show_asside(){
		    $.ajax({
		        type  : 'ajax',
		        url   : '<?php echo site_url('Asside_controllers/asside_data')?>',
		        async : false,
		        dataType : 'json',
		        success : function(data){
		            var html = '';
		            var i;
		            for(i=0; i<data.length; i++){
                        html += '<div class="col-md-55">'+
                        			'<div class="">'+
                          				'<div class="image view view-first">'+
                            				'<img style="width: 100%; display: block;" src="<?php echo base_url();?>assets/images/Asside/'+data[i].Photo+'" alt="image" />'+
                            				'<div class="mask">'+
                              					'<p>'+data[i].Caption+'</p>'+
                            				'</div>'+
                          				'</div>'+
                                        '<div class="caption">'+
                                            '<a href="javascript:void(0);" class="btn btn-info item_edit" data-kd="'+data[i].Id+'" data-nm="'+data[i].Caption+'">Edit</a>'+
                                            '<a href="javascript:void(0);" class="btn btn-danger item_delete" data-id="'+data[i].Id+'" class="fa fa-times"><small>Delete</small></i></a>'+
                                        '</div>'+
                        			'</div>'+
                      			'</div>';
		            }
		            $('#show_data').html(html);
		        }

		    });
		}

		$('#submit').submit(function(e){
		    e.preventDefault();
		        $.ajax({
		            url  : "<?php echo site_url('Asside_controllers/uploads')?>",
		            type:"post",	
		            data:new FormData(this), //this is formData
		            processData:false,
		            contentType:false,
		            cache:false,
		            async:false,
		            success: function(data){
                        console.log(data);
						$('[name="file"]').val("");
						$('[name="title"]').val("");
		                alert("Upload Image Successful.");
						show_asside();
		           	}
		        });
		});

		//get data for delete Asside
        $('#show_data').on('click','.item_delete',function(){
            var id = $(this).data('id');
            
            $('#Modal_Delete').modal('show');
            $('[name="dokter_delete"]').val(id);
        });

		//delete Asside to database
        $('#btn_delete').on('click',function(){
            var id = $('#dokter_delete').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('Asside_controllers/delete')?>",
                dataType : "JSON",
                data : {id:id},
                success: function(data){
                    $('[name="dokter_delete"]').val("");
                    $('#Modal_Delete').modal('hide');
                    show_asside();
                }
            });
            return false;
        });

		//Get asside update
        $('#show_data').on('click','.item_edit',function(){
            var Id = $(this).data('kd');
            var Caption = $(this).data('nm');
            $('#Modal_Edit').modal('show');
            $('[name="KODES_edit"]').val(Id);
            $('[name="NAMAS_edit"]').val(Caption);
        });

		//update asside to database
        $('#btn_update').on('click',function(){
            var kd = $('#KODES_edit').val();
            var nm = $('#NAMAS_edit').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('Asside_controllers/update')?>",
                dataType : "JSON",
                data : {kd:kd , nm:nm},
                success: function(data){
                    $('[name="KODES_edit"]').val("");
                    $('[name="NAMAS_edit"]').val("");
                    $('#Modal_Edit').modal('hide');
                    show_asside();
                }
            });
            return false;
        });

    });    
</script>