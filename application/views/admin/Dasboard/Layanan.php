<!-- page content -->
<div class="right_col" role="main">
    <div class="">

        <div class="page-title">
            <div class="title_left">
                <h3>Form Layanan</small></h3>
            </div>
        </div>
            
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">
                        
                    <div class="float-right"><a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Modal_Add"><span class="fa fa-plus"></span> Add Layanan</a></div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <!-- start project list -->
                        <table id="mydata" class="table table-striped projects">
                            <thead>
                                <tr>
                                    <th style="width: 1%">#</th>
                                    <th style="width: 20%">Judul</th>
                                    <th>Keterangan</th>
                                    <th>Icon</th>
                                    <th style="width: 20%">#Edit</th>
                                </tr>
                            </thead>

                            <tbody id="show_data">
                            </tbody>
                        </table>
                        <!-- end project list -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //page content -->

<!-- modal delete dokter -->
<form>
<div class="modal fade docs-cropped" id="Modal_Delete" aria-hidden="true" aria-labelledby="getCroppedCanvasTitle" role="dialog" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
                                                  
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" >APAKAH ANDA YAKIN INGIN MENGHAPUS LAYANAN INI</h4>
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


<!--MODAL Edit LAYANAN-->
<div class="modal fade docs-cropped" id="Modal_Edit" aria-hidden="true" aria-labelledby="getCroppedCanvasTitle" role="dialog" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">                                              
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" >SILAHKAN MASUKKAN NAMA DAN KETERANGAN YANG BARU UNTUK LAYANAN</h4>
            </div>
            <form id="submitedit">
            <div class="modal-body">
                
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Layanan</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="text"name="judul_edit" id="judul_edit" class="form-control"  placeholder="Masukkan nama Layanan">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Keterangan</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <textarea name="keterangan_edit" id="keterangan_edit" class="resizable_textarea form-control" placeholder="Masukkan keterangan layann" ></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Icon</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                    <input type="file" name="file">
                    </div>
                </div>
                <input type="hidden" name="id_edit" id="id_edit">
                

            </div>
            
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" id="btn_save" class="btn btn-primary">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!--// end modal edit layanan-->


<!--MODAL ADD LAYANAN-->
<div class="modal fade docs-cropped" id="Modal_Add" aria-hidden="true" aria-labelledby="getCroppedCanvasTitle" role="dialog" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">                                              
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" >SILAHKAN MASUKKAN NAMA DAN KETERANGAN LAYANAN YANG INGIN DI TAMBAHKAN</h4>
            </div>
            <form id="submit">
            <div class="modal-body">
                
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Layanan</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="text"name="judul" id="judul" class="form-control"  placeholder="Masukkan nama Layanan">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Keterangan</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <textarea name="keterangan" id="keterangan" class="resizable_textarea form-control" placeholder="Masukkan keterangan layann" ></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Icon</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                    <input type="file" name="file">
                    </div>
                </div>
                

            </div>
            
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" id="btn_save" class="btn btn-primary">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!--// end modal add layanan-->


<script type="text/javascript" src="<?php echo base_url().'assets/jquery-3.2.1.js'?>"></script>

<script type="text/javascript">
    $(document).ready(function(){
        show_layanan();
        
        $('#mydata').dataTable();
        
        function show_layanan(){
		    $.ajax({
		        type  : 'ajax',
		        url   : '<?php echo site_url('Layanan_controllers/layanan_data')?>',
		        async : false,
		        dataType : 'json',
		        success : function(data){
		            var html = '';
		            var i;
		            for(i=0; i<data.length; i++){
		                html += '<tr>'+'<td>#</td>'+
                                    '<td>'+data[i].Judul+'</td>'+
                                    '<td>'+data[i].Keterangan+'</td>'+
                                    '<td><a><img src="<?php echo base_url();?>assets/images/Layanan/'+data[i].Icon+'" class="avatar" alt="Avatar"></a></td>'+
                                    '<td>'+
                                            '<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit" data-jd="'+data[i].Judul+'" data-kt="'+data[i].Keterangan+'" data-id="'+data[i].Id+'" >Edit</a>'+
                                            '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-kd="'+data[i].Id+'">Delete</a>'+
                                    '</td>'+
		                        '</tr>';
		            }
		            $('#show_data').html(html);
		        }

		    });
		}

        $('#submit').submit(function(e){
            var judul = $('#judul').val();
            var keterangan = $('#keterangan').val();
		    e.preventDefault();
                if(judul=="" || keterangan==""){alert("Silahkan isi Judul atau keterangan, salah satu harus disi!");}
                else{
		        $.ajax({
		            url  : "<?php echo site_url('Layanan_controllers/save')?>",
		            type:"post",	
		            data:new FormData(this), //this is formData
		            processData:false,
		            contentType:false,
		            cache:false,
		            async:false,
		            success: function(data){
						$('[name="judul"]').val("");
						$('[name="keterangan"]').val("");
                        $('[name="file"]').val("");
		                $('#Modal_Add').modal('hide');
						show_layanan();
		           	}
		        });
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
                url  : "<?php echo site_url('Layanan_controllers/delete')?>",
                dataType : "JSON",
                data : {kd_sps:kd_sps},
                success: function(data){
                    $('[name="spesialis_delete"]').val("");
                    $('#Modal_Delete').modal('hide');
                    show_layanan();
                }
            });
            return false;
        });

        //get data for update record
        $('#show_data').on('click','.item_edit',function(){
            var id = $(this).data('id');
            var judul = $(this).data('jd');
            var keterangan = $(this).data('kt');
            
            $('#Modal_Edit').modal('show');
            $('[name="id_edit"]').val(id);
            $('[name="judul_edit"]').val(judul);
            $('[name="keterangan_edit"]').val(keterangan);
        });

        $('#submitedit').submit(function(e){
            e.preventDefault();
		        $.ajax({
		            url  : "<?php echo site_url('Layanan_controllers/update')?>",
		            type:"post",	
		            data:new FormData(this), //this is formData
		            processData:false,
		            contentType:false,
		            cache:false,
		            async:false,
		            success: function(data){
						$('[name="judul"]').val("");
						$('[name="keterangan"]').val("");
                        $('[name="file"]').val("");
                        $('#Modal_Edit').modal('hide');
						show_layanan();
		           	}
		        });
		});
    });
</script>