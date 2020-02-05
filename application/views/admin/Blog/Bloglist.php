<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Projects <small>Listing design</small></h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
            
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">
                        
                        
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                       

                        <!-- start project list -->
                        <table id="mydata" class="table table-striped projects">
                            <thead>
                                <tr>
                                    <th style="width: 1%">#</th>
                                    <th style="width: 20%">Judul</th>
                                    <th>Tanggal Posting</th>
                                    <th style="width: 20%">#Edit</th>
                                </tr>
                            </thead>

                            <tbody id="show_data">
                            </tbody>
                        </table>
                        <!-- end project list -->=
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
                <h4 class="modal-title" >APAKAH ANDA YAKIN INGIN MENGHAPUS BLOG INI</h4>
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

<!-- Large modal -->
<div class="modal fade bs-example-modal-lg" id="Modal_Edit" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Blog Edit</h4>
      </div>
      <div class="modal-body">
      <div class="" role="">
    <div class="">
        
        <div class="clearfix"></div>
        <div class="col-md-12 col-sm-12 col-xs-12">
           
            <div class="">
                <div class="x_title">
                <form id="submitedit">
                <div class="form-group">
                    <label class="control-label col-md-1 col-sm-3 col-xs-12">Gambar</label>
                    <div class="col-md-11 col-sm-9 col-xs-12">
                        <input type="file" name="file">
                    </div>
                 </div>
                 <br/>
                 
                  <div class='col-sm-4'>
                      <div class="form-group">
                      <label class="control-label col-md-6 col-sm-3 col-xs-12">Tanggal Posting</label>
                          <div class='input-group date' id='myDatepicker2'>
                              <input type='text' id="Tanggal_edit" name="Tanggal_edit" class="form-control" />
                              <span class="input-group-addon">
                                  <span class="glyphicon glyphicon-calendar"></span>
                              </span>
                          </div>
                      </div>
                  </div>

                  <div class="clearfix"></div>
              </div>
              <input type='hidden' id="id_edit" name="id_edit" class="form-control" />
              <div class="form-group">
                  <label class="control-label col-md-1 col-sm-3 col-xs-12">JUDUL</label>
                  <div class="col-md-11 col-sm-9 col-xs-12">
                      <textarea class="resizable_textarea form-control" id="Judul_edit" name="Judul_edit" placeholder="Silahkan masukkan judul postingan"></textarea>
                  </div>
              </div>

              <div class="x_content">
                  <div id="alerts"></div>
                    
                  <textarea class="editor-wrapper col-md-12" id="Isi_edit" name="Isi_edit" style="display "></textarea>
                        
                  
                    
              </div>
            </div>
            
      </div> 
  </div>
</div>
<!-- /page content -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button class="btn btn-success" id="btn_save" type="submit">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>

<script type="text/javascript" src="<?php echo base_url().'assets/jquery-3.2.1.js'?>"></script>

<script type="text/javascript">
	$(document).ready(function(){
		show_blog();	//call function show all product
		
		$('#mydata').dataTable();
		 
		//function show all product
		function show_blog(){
		    $.ajax({
		        type  : 'ajax',
		        url   : '<?php echo site_url('Blog_controllers/blog_data')?>',
		        async : false,
		        dataType : 'json',
		        success : function(data){
		            var html = '';
		            var i;
		            for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                    '<td>#</td>'+
                                    '<td>'+data[i].Judul+'</td>'+
                                    '<td>'+data[i].Tanggal+'</td>'+
                                    '<td>'+
                                        '<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit" data-id="'+data[i].Id+'" data-judul="'+data[i].Judul+'" data-tanggal="'+data[i].Tanggal+'" data-isi="'+data[i].Isi+'">Edit</a>'+
                                        '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-kd="'+data[i].Id+'">Delete</a>'+
                                    '</td>'+
		                        '</tr>';
		            }
		            $('#show_data').html(html);
		        }

		    });
		}
        

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
                url  : "<?php echo site_url('Blog_controllers/delete')?>",
                dataType : "JSON",
                data : {kd_sps:kd_sps},
                success: function(data){
                    $('[name="spesialis_delete"]').val("");
                    $('#Modal_Delete').modal('hide');
                    show_blog();
                }
            });
            return false;
        });

        //get data for update record
        $('#show_data').on('click','.item_edit',function(){
            var id = $(this).data('id');
            var judul = $(this).data('judul');
            var tanggal = $(this).data('tanggal');
            var isi = $(this).data('isi');
            
            $('#Modal_Edit').modal('show');
            $('[name="id_edit"]').val(id);
            $('[name="Tanggal_edit"]').val(tanggal);
            $('[name="Judul_edit"]').val(judul);
            $('[name="Isi_edit"]').val(isi);
        });

        //update record to database
        /*$('#btn_update').on('click',function(){
            var id = $('#id_edit').val();
            var tanggal = $('#Tanggal_edit').val();
            var judul = $('#Judul_edit').val();
            var isi = $('#Isi_edit').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('Blog_controllers/update')?>",
                dataType : "JSON",
                data : {id:id, tanggal:tanggal, judul:judul, isi:isi},
                success: function(data){
                    $('[name="id_edit"]').val("");
                    $('[name="Tanggal_edit"]').val("");
                    $('[name="Judul_edit"]').val("");
                    $('[name="Isi_edit"]').val("");
                    $('#Modal_Edit').modal('hide');
                    show_blog();
                }
            });
            return false;
        });*/
        
        $('#submitedit').submit(function(e){
		    e.preventDefault();
		        $.ajax({
		            url  : "<?php echo site_url('Blog_controllers/update')?>",
		            type:"post",	
		            data:new FormData(this), //this is formData
		            processData:false,
		            contentType:false,
		            cache:false,
		            async:false,
		            success: function(data){
						$('[name="id_edit"]').val("");
                        $('[name="Tanggal_edit"]').val("");
                        $('[name="Judul_edit"]').val("");
                        $('[name="Isi_edit"]').val("");
                        $('#Modal_Edit').modal('hide');
                        show_blog();
		           	}
		        });
		});

	});

</script>