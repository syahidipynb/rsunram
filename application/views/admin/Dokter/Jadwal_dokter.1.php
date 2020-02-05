<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>General Elements</h3>
                <div class='col-sm-4'>
                      Only Time Picker <small>For 24H format use format: 'HH:mm'</small>
                    <div class="form-group">
                        <div class='input-group date' id='myDatepicker3'>
                            <input type='text' class="form-control" />
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                </div>
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

        <div class="">
            <div class="col-md-12 col-sm-6 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Senin</a></li>
                            <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Selasa</a></li>
                            <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Rabu</a></li>
                            <li role="presentation" class=""><a href="#tab_content4" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Kamis</a></li>
                            <li role="presentation" class=""><a href="#tab_content5" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Jum'at</a></li>
                            <li role="presentation" class=""><a href="#tab_content6" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Sabtu</a></li>
                        </ul>
                        
                        <div id="myTabContent" class="tab-content">
                            <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                                <div class="" role="main">
                                    <div class="page-title">
                                        <div class="title_left">
                                            <h3>JADWAL DOKTER HARI SENIN</h3>
                                        </div>              
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="x_panel"> 
                                            <div class="x_title">
                                                <form>
                                                    <input type="hidden" value="1" name="hari" id="hari">
                                                    <div class="float-right"><button type="button" type="submit" id="Add" class="btn btn-primary"><span class="fa fa-plus"></span> Add Jadwal Pada Hari Senin</button></div>
                                                </form>
                                                                
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="x_content">
                                                <table id="mydata" class="table table-striped table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>Dokter</th>
                                                            <th>Poliklinik</th>
                                                            <th>Mulai</th>
                                                            <th>Selesai</th>
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
                            </div>

                            <div role="tabpanel" class="tab-pane fade in" id="tab_content2" aria-labelledby="home-tab">
                                <div class="" role="main">
                                    <div class="page-title">
                                        <div class="title_left">
                                            <h3>JADWAL DOKTER HARI SELASA</h3>
                                        </div>              
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="x_panel"> 
                                            <div class="x_title">
                                                <form>
                                                    <input type="hidden" value="2" name="hari2" id="hari2">
                                                    <div class="float-right"><button type="button" type="submit" id="Add2" class="btn btn-primary"><span class="fa fa-plus"></span> Add Jadwal Pada Hari Selasa</button></div>
                                                </form>
                                                                
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="x_content">
                                                <table id="mydata2" class="table table-striped table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>Dokter</th>
                                                            <th>Poliklinik</th>
                                                            <th>Mulai</th>
                                                            <th>Selesai</th>
                                                            <th>Edit</th>
                                                            <th>Delete</th>
                                                        </tr>
                                                    </thead>       
                                                    <tbody id="show_data2">
                                                    
                                                        
                                                    </tbody>
                                                        
                                                </table>
                                            </div>
                                        </div>
                                    </div>          
                                </div>
                            </div>

                            <div role="tabpanel" class="tab-pane fade in" id="tab_content3" aria-labelledby="home-tab">
                                <div class="" role="main">
                                    <div class="page-title">
                                        <div class="title_left">
                                            <h3>JADWAL DOKTER HARI RABU</h3>
                                        </div>              
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="x_panel"> 
                                            <div class="x_title">
                                                <form>
                                                    <input type="hidden" value="3" name="hari3" id="hari3">
                                                    <div class="float-right"><button type="button" type="submit" id="Add3" class="btn btn-primary"><span class="fa fa-plus"></span> Add Jadwal Pada Hari Rabu</button></div>
                                                </form>
                                                                
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="x_content">
                                                <table id="mydata3" class="table table-striped table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>Dokter</th>
                                                            <th>Poliklinik</th>
                                                            <th>Mulai</th>
                                                            <th>Selesai</th>
                                                            <th>Edit</th>
                                                            <th>Delete</th>
                                                        </tr>
                                                    </thead>       
                                                    <tbody id="show_data3">
                                                    
                                                        
                                                    </tbody>
                                                        
                                                </table>
                                            </div>
                                        </div>
                                    </div>          
                                </div>
                            </div>

                            <div role="tabpanel" class="tab-pane fade in" id="tab_content4" aria-labelledby="home-tab">
                                <div class="" role="main">
                                    <div class="page-title">
                                        <div class="title_left">
                                            <h3>JADWAL DOKTER HARI KAMIS</h3>
                                        </div>              
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="x_panel"> 
                                            <div class="x_title">
                                                <form>
                                                    <input type="hidden" value="4" name="hari4" id="hari4">
                                                    <div class="float-right"><button type="button" type="submit" id="Add4" class="btn btn-primary"><span class="fa fa-plus"></span> Add Jadwal Pada Hari Kamis</button></div>
                                                </form>
                                                                
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="x_content">
                                                <table id="mydata4" class="table table-striped table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>Dokter</th>
                                                            <th>Poliklinik</th>
                                                            <th>Mulai</th>
                                                            <th>Selesai</th>
                                                            <th>Edit</th>
                                                            <th>Delete</th>
                                                        </tr>
                                                    </thead>       
                                                    <tbody id="show_data4">
                                                    
                                                        
                                                    </tbody>
                                                        
                                                </table>
                                            </div>
                                        </div>
                                    </div>          
                                </div>
                            </div>

                            <div role="tabpanel" class="tab-pane fade in" id="tab_content5" aria-labelledby="home-tab">
                                <div class="" role="main">
                                    <div class="page-title">
                                        <div class="title_left">
                                            <h3>JADWAL DOKTER HARI JUMAT</h3>
                                        </div>              
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="x_panel"> 
                                            <div class="x_title">
                                                <form>
                                                    <input type="hidden" value="5" name="hari5" id="hari5">
                                                    <div class="float-right"><button type="button" type="submit" id="Add5" class="btn btn-primary"><span class="fa fa-plus"></span> Add Jadwal Pada Hari Jumat</button></div>
                                                </form>
                                                                
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="x_content">
                                                <table id="mydata5" class="table table-striped table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>Dokter</th>
                                                            <th>Poliklinik</th>
                                                            <th>Mulai</th>
                                                            <th>Selesai</th>
                                                            <th>Edit</th>
                                                            <th>Delete</th>
                                                        </tr>
                                                    </thead>       
                                                    <tbody id="show_data5">
                                                    
                                                        
                                                    </tbody>
                                                        
                                                </table>
                                            </div>
                                        </div>
                                    </div>          
                                </div>
                            </div>

                            <div role="tabpanel" class="tab-pane fade in" id="tab_content6" aria-labelledby="home-tab">
                                <div class="" role="main">
                                    <div class="page-title">
                                        <div class="title_left">
                                            <h3>JADWAL DOKTER HARI SABTU</h3>
                                        </div>              
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="x_panel"> 
                                            <div class="x_title">
                                                <form>
                                                    <input type="hidden" value="6" name="hari6" id="hari6">
                                                    <div class="float-right"><button type="button" type="submit" id="Add6" class="btn btn-primary"><span class="fa fa-plus"></span> Add Jadwal Pada Hari Sabtu</button></div>
                                                </form>
                                                                
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="x_content">
                                                <table id="mydata6" class="table table-striped table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>Dokter</th>
                                                            <th>Poliklinik</th>
                                                            <th>Mulai</th>
                                                            <th>Selesai</th>
                                                            <th>Edit</th>
                                                            <th>Delete</th>
                                                        </tr>
                                                    </thead>       
                                                    <tbody id="show_data6">
                                                    
                                                        
                                                    </tbody>
                                                        
                                                </table>
                                            </div>
                                        </div>
                                    </div>          
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>            
        </div>
    </div>
</div>

<div class="clearfix"></div>
</div>
<!-- /page content -->

<!-- modal delete jadwal -->
<form>
<div class="modal fade docs-cropped" id="Modal_Delete" aria-hidden="true" aria-labelledby="getCroppedCanvasTitle" role="dialog" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
                                                                                    
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" >APAKAH ANDA YAKIN INGIN MENGHAPUS DOKTER <b><h4 name="nm_dokter" id="nm_dokter"></h4></b> DARI JADWAL</h4>
            </div>

            <div class="modal-body">

            </div>

            <div class="modal-footer">
                <input type="hidden" name="jadwal_delete" id="jadwal_delete" class="form-control">
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
                <h4 class="modal-title" >PILIH POLIKLINIK YANG INGIN DIMASUKKAN DALAM JADWAL <b><h4 name="nm_dokter" id="nm_dokter"></h4></b> DARI JADWAL</h4>
            </div>

            <div class="modal-body">
                <input type="hidden" name="hari11" id="hari11">
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Poliklinik</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <select class="select2_single form-control" name="data_spesialis" tabindex="-1" id="data_spesialis">
                          
                        </select>
                    </div>
                    
                </div>
                
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                <button type="button" type="submit" id="btn_Add" class="btn btn-primary">Yes</button>
            </div>
        </div>
    </div>
</div>
</form>
<!-- / add modal -->

<!-- modal GET ID_DOKTER jadwal -->
<form>
<div class="modal fade docs-cropped" id="Modal_Add1" aria-hidden="true" aria-labelledby="getCroppedCanvasTitle" role="dialog" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
                                                                                    
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" >PILIH DOKTER YANG INGIN DIMASUKKAN DALAM JADWAL SESUAI POLIKLINIK YANG ANDA PILIH<b><h4 name="nm_dokter" id="nm_dokter"></h4></b> DARI JADWAL</h4>
            </div>

            <div class="modal-body">
                <input type="hidden" name="hari22" id="hari22">
                <input type="hidden" class="form-control" name="id_poliklinik" id="id_poliklinik">

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">POLIKLINIK</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type='text' name="poli" id="poli" class="form-control" readonly>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Dokter</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <select class="select2_single form-control" name="dokter_sps" id="dokter_sps" tabindex="-1" id=""></select> 
                    </div>    
                </div>
                
            </div>

            <div class="modal-footer">
                <button type="button" type="submit" id="btn_back1" class="btn btn-secondary">Back</button>
                <button type="button" type="submit" id="btn_add1" class="btn btn-primary">Yes</button>
            </div>
        </div>
    </div>
</div>
</form>
<!-- / add modal -->

<!-- modal GET ID_DOKTER jadwal -->
<form>
<div class="modal fade docs-cropped" id="Modal_Add2" aria-hidden="true" aria-labelledby="getCroppedCanvasTitle" role="dialog" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
                                                                                    
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" >MASUKKAN WAKTU MULAI DAN WAKTU SELESAI DOKTER<b><h4 name="nm_dokter" id="nm_dokter"></h4></b> DARI JADWAL</h4>
            </div>

            <div class="modal-body">
                <input type="hidden" class="form-control" name="id_sps" id="id_sps" readonly>
                <input type="hidden" class="form-control" name="id_dokter" id="id_dokter" readonly>
                <input type="hidden" class="form-control" name="hari33" id="hari33" readonly>
                <input type="hidden" class="form-control" name="poli" id="poli" readonly>

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">POLIKLINIK</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type='text' name="poli1" id="poli1" class="form-control" readonly>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Dokter</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type='text' name="kpoli" id="kpoli" class="form-control" readonly>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Mulai</label>
                    <div class='input-group date' id='myDatepicker3'>
                        <input type='text' name="Mulai" id="Mulai" class="form-control" />
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>
                    
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Selesai</label>
                    <div class='input-group date' id='myDatepicker3'>
                        <input type='text' name="Selesai" id="Selesai" class="form-control" />
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>
                
            </div>

            <div class="modal-footer">
                <button type="button" type="submit" id="btn_back2" class="btn btn-secondary">Back</button>
                <button type="button" type="submit" id="btn_save" class="btn btn-primary">save</button>
            </div>
        </div>
    </div>
</div>
</form>
<!-- / add modal -->

<!-- modal GET Edit jadwal -->
<form>
<div class="modal fade docs-cropped" id="Modal_Edit" aria-hidden="true" aria-labelledby="getCroppedCanvasTitle" role="dialog" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
                                                                                    
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" >MASUKKAN WAKTU MULAI DAN WAKTU SELESAI DOKTER<b><h4 name="nm_dokter" id="nm_dokter"></h4></b> DARI JADWAL</h4>
            </div>

            <div class="modal-body">

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Dokter</label>
                    <div class='input-group'>
                        <input type='text' name="Dokter_Edit" id="Dokter_Edit" class="form-control" readonly/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Poliklinik</label>
                    <div class='input-group'>
                        <input type='text' name="Poliklinik_Edit" id="Poliklinik_Edit" class="form-control" readonly/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Mulai</label>
                    <div class='input-group'>
                        <input type='text' name="Mulai_Edit" id="Mulai_Edit" class="form-control"/>
                    </div>
                </div>
                
                <input type='hidden' name="ID_Edit" id="ID_Edit" class="form-control"/>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Selesai</label>
                    <div class='input-group'>
                        <input type='text' name="Selesai_Edit" id="Selesai_Edit" class="form-control"/>
                    </div>
                </div>
                
            </div>

            <div class="modal-footer">
                <button type="button" type="submit" id="btn_back2" class="btn btn-secondary">Back</button>
                <button type="button" type="submit" id="edit_save" class="btn btn-primary">save</button>
            </div>
        </div>
    </div>
</div>
</form>
<!-- / add modal -->

<!--AJAX SCRIPT-->
<script type="text/javascript" src="<?php echo base_url().'assets/jquery-3.2.1.js'?>"></script>

<!--HARI SENIN-->
<script type="text/javascript">
    $(document).ready(function(){
        show_product();

        $('#mydata').dataTable();
        //SHOW ALL DATA
        function show_product(){
            var hari='1';
		    $.ajax({
		        type  : "POST",
		        url   : '<?php echo site_url('jadwal_controllers/jadwal_data')?>',
		        dataType : 'json',
                data : {hari:hari},
		        success : function(data){
		            var html = '';
		            var i;
		            for(i=0; i<data.length; i++){
		                html += '<tr>'+
		                  		'<td>'+data[i].nm_dokter+'</td>'+
		                        '<td>'+data[i].nm_sps+'</td>'+
                                '<td>'+data[i].Mulai+'</td>'+
                                '<td>'+data[i].Selesai+'</td>'+
                                '<td>'+'<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit" data-kd_jadwal="'+data[i].ID_Jadwal+'" data-nm_dokter="'+data[i].nm_dokter+'" data-nm_sps="'+data[i].nm_sps+'" data-mulai="'+data[i].Mulai+'" data-selesai="'+data[i].Selesai+'" >Edit</a>'+'</td>'+
                                '<td>'+'<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-kd_jadwal="'+data[i].ID_Jadwal+'" data-dokter="'+data[i].nm_dokter+'">Delete</a>'+'</td>'+
		                        '</tr>';
		            }
		            $('#show_data').html(html);
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
		            var i=0;
                    $('#kpoli').val(html+i);
                    
		        }
		    });
		}

        //get data for update record
        $('#show_data').on('click','.item_edit',function(){
            var nm_sps = $(this).data('nm_sps');
            var nm_dokter = $(this).data('nm_dokter');
            var id_jadwal = $(this).data('kd_jadwal');
            var Mulai = $(this).data('mulai');
            var Selesai = $(this).data('selesai');
            
            $('#Modal_Edit').modal('show');
            $('[name="ID_Edit"]').val(id_jadwal);
            $('[name="Dokter_Edit"]').val(nm_dokter);
            $('[name="Poliklinik_Edit"]').val(nm_sps);
            $('[name="Mulai_Edit"]').val(Mulai);
            $('[name="Selesai_Edit"]').val(Selesai);
        });
        
        //update record to database
        $('#edit_save').on('click',function(){
            var id = $('#ID_Edit').val()
            var Mulai = $('#Mulai_Edit').val();
            var Selesai = $('#Selesai_Edit').val();
            
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('jadwal_controllers/update')?>",
                dataType : "JSON",
                data : {Mulai:Mulai , Selesai:Selesai, id:id},
                success: function(data){
                    $('[name="Mulai"]').val("");
                    $('[name="Selesai"]').val("");
                    $('[name="ID_Edit"]').val("");
                    $('#Modal_Edit').modal('hide');
                    show_product();
                }
            });
            return false;
        });

        //GET DATA DELETE
        $('#show_data').on('click','.item_delete',function(){
            var kd_sps = $(this).data('kd_jadwal');
            var nm_dokter = $(this).data('dokter');
            
            
            $('#Modal_Delete').modal('show');
            $('[name="jadwal_delete"]').val(kd_sps);
            $('[name="nm_dokter"]').val(nm_dokter);
        });
        //DELETE DATA IN DATABASE
        $('#btn_delete').on('click',function(){
            var ID_Jadwal = $('#jadwal_delete').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('jadwal_controllers/delete')?>",
                dataType : "JSON",
                data : {ID_Jadwal:ID_Jadwal},
                success: function(data){
                    $('[name="jadwal_delete"]').val("");
                    $('#Modal_Delete').modal('hide');
                    show_product();
                }
            });
            return false;
        });

        //show spesialis
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
		            $('#data_spesialis').html(html);
		        }

		    });
        }

        //modal add1 back to add
        $('#btn_back1').on('click',function(){
            $('#Modal_Add1').modal('hide');
            show_spesialis();
            $('#Modal_Add').modal('show');
        });
        $('#btn_back2').on('click',function(){
            $('#Modal_Add2').modal('hide');
            show_spesialis();
            $('#Modal_Add1').modal('show');
        });

        $('#Add').on('click',function(){
            $('#Modal_Add').modal('show');
            show_spesialis();
            var hari = $('#hari').val();
            $('[name="hari11"]').val(hari);
            
        });
        

        //show Add1 to database
        $('#btn_Add').on('click',function(){
            var spesialis = $('#data_spesialis').val();
            var hari = $('#hari11').val();
            $('[name="id_poliklinik"]').val(spesialis);
            $('[name="hari22"]').val(hari);
            show_singlespesialis(spesialis);
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
        });

        //show modal Add2 to database
        $('#btn_add1').on('click',function(){
            var id_sps = $('#id_poliklinik').val();
            var id_dokter = $('#dokter_sps').val();
            var id_hari = $('#hari22').val();
            show_singledokter(id_dokter);
            
            $('[name="id_sps"]').val(id_sps);
            $('[name="id_dokter"]').val(id_dokter);
            $('[name="hari33"]').val(id_hari);
            $('#Modal_Add1').modal('hide');
            $('#Modal_Add2').modal('show');
        });

        
        //SAVE ADD DATA
        $('#btn_save').on('click',function(){
            
            var hari = $('#hari33').val();
            var kd_Dokter = $('#id_dokter').val();
            var id = hari+kd_Dokter;
            var Mulai = $('#Mulai').val();
            var Selesai = $('#Selesai').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('jadwal_controllers/save')?>",
                dataType : "JSON",
                data : {id:id, hari:hari , kd_Dokter:kd_Dokter , Mulai:Mulai, Selesai:Selesai},
                success: function(data){
                    
                    $('[name="hari11"]').val("");
                    $('[name="hari22"]').val("");
                    $('[name="hari33"]').val("");
                    $('[name="id_dokter"]').val("");
                    $('[name="Mulai"]').val("");
                    $('[name="Selesai"]').val("");
                    $('#Modal_Add2').modal('hide');
                    show_product();
                }
            });
            show_product();
            return false;
        });
        
    });
</script>
<!--HARI SELASA-->
<script type="text/javascript">
    $(document).ready(function(){
        show_product();
        
        $('#mydata2').dataTable();
        //SHOW ALL DATA
        function show_product(){
            var hari='2';
		    $.ajax({
		        type  : "POST",
		        url   : '<?php echo site_url('jadwal_controllers/jadwal_data')?>',
		        dataType : 'json',
                data : {hari:hari},
		        success : function(data){
		            var html = '';
		            var i;
		            for(i=0; i<data.length; i++){
		                html += '<tr>'+
		                  		'<td>'+data[i].nm_dokter+'</td>'+
		                        '<td>'+data[i].nm_sps+'</td>'+
                                '<td>'+data[i].Mulai+'</td>'+
                                '<td>'+data[i].Selesai+'</td>'+
                                '<td>'+'<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit" data-kd_jadwal="'+data[i].ID_Jadwal+'" data-nm_dokter="'+data[i].nm_dokter+'" data-nm_sps="'+data[i].nm_sps+'" data-mulai="'+data[i].Mulai+'" data-selesai="'+data[i].Selesai+'" >Edit</a>'+'</td>'+
                                '<td>'+'<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-kd_jadwal="'+data[i].ID_Jadwal+'" data-dokter="'+data[i].nm_dokter+'">Delete</a>'+'</td>'+
		                        '</tr>';
		            }
		            $('#show_data2').html(html);
		        }

		    });
		}

        //get data for update record
        $('#show_data2').on('click','.item_edit',function(){
            var nm_sps = $(this).data('nm_sps');
            var nm_dokter = $(this).data('nm_dokter');
            var id_jadwal = $(this).data('kd_jadwal');
            var Mulai = $(this).data('mulai');
            var Selesai = $(this).data('selesai');
            
            $('#Modal_Edit').modal('show');
            $('[name="ID_Edit"]').val(id_jadwal);
            $('[name="Dokter_Edit"]').val(nm_dokter);
            $('[name="Poliklinik_Edit"]').val(nm_sps);
            $('[name="Mulai_Edit"]').val(Mulai);
            $('[name="Selesai_Edit"]').val(Selesai);
        });
        
        //update record to database
        $('#edit_save').on('click',function(){
            var id = $('#ID_Edit').val()
            var Mulai = $('#Mulai_Edit').val();
            var Selesai = $('#Selesai_Edit').val();
            
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('jadwal_controllers/update')?>",
                dataType : "JSON",
                data : {Mulai:Mulai , Selesai:Selesai, id:id},
                success: function(data){
                    $('[name="Mulai"]').val("");
                    $('[name="Selesai"]').val("");
                    $('[name="ID_Edit"]').val("");
                    $('#Modal_Edit').modal('hide');
                    show_product();
                }
            });
            return false;
        });

        //GET DATA DELETE
        $('#show_data2').on('click','.item_delete',function(){
            var kd_sps = $(this).data('kd_jadwal');
            var nm_dokter = $(this).data('dokter');
            
            $('#Modal_Delete').modal('show');
            $('[name="jadwal_delete"]').val(kd_sps);
            $('[name="nm_dokter"]').val(nm_dokter);
        });

        //DELETE DATA IN DATABASE
        $('#btn_delete').on('click',function(){
            var ID_Jadwal = $('#jadwal_delete').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('jadwal_controllers/delete')?>",
                dataType : "JSON",
                data : {ID_Jadwal:ID_Jadwal},
                success: function(data){
                    $('[name="jadwal_delete"]').val("");
                    $('#Modal_Delete').modal('hide');
                    show_product();
                }
            });
            return false;
        });

        //show spesialis
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
		            $('#data_spesialis').html(html);
		        }

		    });
        }

        //modal add1 back to add
        $('#btn_back1').on('click',function(){
            $('#Modal_Add1').modal('hide');
            show_spesialis();
            $('#Modal_Add').modal('show');
        });
        $('#btn_back2').on('click',function(){
            $('#Modal_Add2').modal('hide');
            show_spesialis();
            $('#Modal_Add1').modal('show');
        });

        $('#Add2').on('click',function(){
            $('#Modal_Add').modal('show');
            show_spesialis();
            var hari = $('#hari2').val();
            $('[name="hari11"]').val(hari);
        });
        

        //show Add1 to database
        $('#btn_Add').on('click',function(){
            var spesialis = $('#data_spesialis').val();
            var hari = $('#hari11').val();
            $('[name="id_poliklinik"]').val(spesialis);
            $('[name="hari22"]').val(hari);
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
        });

        //show modal Add2 to database
        $('#btn_add1').on('click',function(){
            var id_sps = $('#id_poliklinik').val();
            var id_dokter = $('#dokter_sps').val();
            var id_hari = $('#hari22').val();
            $('[name="id_sps"]').val(id_sps);
            $('[name="id_dokter"]').val(id_dokter);
            $('[name="hari3"]').val(id_hari);
            $('#Modal_Add1').modal('hide');
            $('#Modal_Add2').modal('show');
        });
        
        //SAVE ADD DATA
        $('#btn_save').on('click',function(){
            
            var hari = $('#hari33').val();
            var kd_Dokter = $('#id_dokter').val();
            var id = hari+kd_Dokter;
            var Mulai = $('#Mulai').val();
            var Selesai = $('#Selesai').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('jadwal_controllers/save')?>",
                dataType : "JSON",
                data : {id:id, hari:hari , kd_Dokter:kd_Dokter , Mulai:Mulai, Selesai:Selesai},
                success: function(data){
                    $('[name="hari"]').val("");
                    $('[name="id_dokter"]').val("");
                    $('[name="Mulai"]').val("");
                    $('[name="Selesai"]').val("");
                    $('#Modal_Add2').modal('hide');
                    show_product();
                }
            });
            show_product();
            return false;
        });
        
    });
</script>
<!--HARI RABU-->
<script type="text/javascript">
    $(document).ready(function(){
        show_product();
        
        $('#mydata3').dataTable();
        //SHOW ALL DATA
        function show_product(){
            var hari='3';
		    $.ajax({
		        type  : "POST",
		        url   : '<?php echo site_url('jadwal_controllers/jadwal_data')?>',
		        dataType : 'json',
                data : {hari:hari},
		        success : function(data){
		            var html = '';
		            var i;
		            for(i=0; i<data.length; i++){
		                html += '<tr>'+
		                  		'<td>'+data[i].nm_dokter+'</td>'+
		                        '<td>'+data[i].nm_sps+'</td>'+
                                '<td>'+data[i].Mulai+'</td>'+
                                '<td>'+data[i].Selesai+'</td>'+
                                '<td>'+'<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit" data-kd_jadwal="'+data[i].ID_Jadwal+'" data-nm_dokter="'+data[i].nm_dokter+'" data-nm_sps="'+data[i].nm_sps+'" data-mulai="'+data[i].Mulai+'" data-selesai="'+data[i].Selesai+'" >Edit</a>'+'</td>'+
                                '<td>'+'<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-kd_jadwal="'+data[i].ID_Jadwal+'" data-dokter="'+data[i].nm_dokter+'">Delete</a>'+'</td>'+
		                        '</tr>';
		            }
		            $('#show_data3').html(html);
		        }

		    });
		}

        //get data for update record
        $('#show_data3').on('click','.item_edit',function(){
            var nm_sps = $(this).data('nm_sps');
            var nm_dokter = $(this).data('nm_dokter');
            var id_jadwal = $(this).data('kd_jadwal');
            var Mulai = $(this).data('mulai');
            var Selesai = $(this).data('selesai');
            
            $('#Modal_Edit').modal('show');
            $('[name="ID_Edit"]').val(id_jadwal);
            $('[name="Dokter_Edit"]').val(nm_dokter);
            $('[name="Poliklinik_Edit"]').val(nm_sps);
            $('[name="Mulai_Edit"]').val(Mulai);
            $('[name="Selesai_Edit"]').val(Selesai);
        });
        
        //update record to database
        $('#edit_save').on('click',function(){
            var id = $('#ID_Edit').val()
            var Mulai = $('#Mulai_Edit').val();
            var Selesai = $('#Selesai_Edit').val();
            
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('jadwal_controllers/update')?>",
                dataType : "JSON",
                data : {Mulai:Mulai , Selesai:Selesai, id:id},
                success: function(data){
                    $('[name="Mulai"]').val("");
                    $('[name="Selesai"]').val("");
                    $('[name="ID_Edit"]').val("");
                    $('#Modal_Edit').modal('hide');
                    show_product();
                }
            });
            return false;
        });

        //GET DATA DELETE
        $('#show_data3').on('click','.item_delete',function(){
            var kd_sps = $(this).data('kd_jadwal');
            var nm_dokter = $(this).data('dokter');
            
            $('#Modal_Delete').modal('show');
            $('[name="jadwal_delete"]').val(kd_sps);
            $('[name="nm_dokter"]').val(nm_dokter);
        });

        //DELETE DATA IN DATABASE
        $('#btn_delete').on('click',function(){
            var ID_Jadwal = $('#jadwal_delete').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('jadwal_controllers/delete')?>",
                dataType : "JSON",
                data : {ID_Jadwal:ID_Jadwal},
                success: function(data){
                    $('[name="jadwal_delete"]').val("");
                    $('#Modal_Delete').modal('hide');
                    show_product();
                }
            });
            return false;
        });

        //show spesialis
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
		            $('#data_spesialis').html(html);
		        }

		    });
        }

        //modal add1 back to add
        $('#btn_back1').on('click',function(){
            $('#Modal_Add1').modal('hide');
            show_spesialis();
            $('#Modal_Add').modal('show');
        });
        $('#btn_back2').on('click',function(){
            $('#Modal_Add2').modal('hide');
            show_spesialis();
            $('#Modal_Add1').modal('show');
        });

        $('#Add3').on('click',function(){
            $('#Modal_Add').modal('show');
            show_spesialis();
            var hari = $('#hari3').val();
            $('[name="hari11"]').val(hari);
        });
        

        //show Add1 to database
        $('#btn_Add').on('click',function(){
            var spesialis = $('#data_spesialis').val();
            var hari = $('#hari11').val();
            $('[name="id_poliklinik"]').val(spesialis);
            $('[name="hari22"]').val(hari);
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
        });

        //show modal Add2 to database
        $('#btn_add1').on('click',function(){
            var id_sps = $('#id_poliklinik').val();
            var id_dokter = $('#dokter_sps').val();
            var id_hari = $('#hari22').val();
            $('[name="id_sps"]').val(id_sps);
            $('[name="id_dokter"]').val(id_dokter);
            $('[name="hari3"]').val(id_hari);
            $('#Modal_Add1').modal('hide');
            $('#Modal_Add2').modal('show');
        });
        
        //SAVE ADD DATA
        $('#btn_save').on('click',function(){
           
            var hari = $('#hari33').val();
            var kd_Dokter = $('#id_dokter').val();
            var id = hari+kd_Dokter;
            var Mulai = $('#Mulai').val();
            var Selesai = $('#Selesai').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('jadwal_controllers/save')?>",
                dataType : "JSON",
                data : {id:id, hari:hari , kd_Dokter:kd_Dokter , Mulai:Mulai, Selesai:Selesai},
                success: function(data){
                    $('[name="hari"]').val("");
                    $('[name="id_dokter"]').val("");
                    $('[name="Mulai"]').val("");
                    $('[name="Selesai"]').val("");
                    $('#Modal_Add2').modal('hide');
                    show_product();
                }
            });
            show_product();
            return false;
        });
        
    });
</script>
<!--HARI KAMIS-->
<script type="text/javascript">
    $(document).ready(function(){
        show_product();
        
        $('#mydata4').dataTable();
        //SHOW ALL DATA
        function show_product(){
            var hari='4';
		    $.ajax({
		        type  : "POST",
		        url   : '<?php echo site_url('jadwal_controllers/jadwal_data')?>',
		        dataType : 'json',
                data : {hari:hari},
		        success : function(data){
		            var html = '';
		            var i;
		            for(i=0; i<data.length; i++){
		                html += '<tr>'+
		                  		'<td>'+data[i].nm_dokter+'</td>'+
		                        '<td>'+data[i].nm_sps+'</td>'+
                                '<td>'+data[i].Mulai+'</td>'+
                                '<td>'+data[i].Selesai+'</td>'+
                                '<td>'+'<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit" data-kd_jadwal="'+data[i].ID_Jadwal+'" data-nm_dokter="'+data[i].nm_dokter+'" data-nm_sps="'+data[i].nm_sps+'" data-mulai="'+data[i].Mulai+'" data-selesai="'+data[i].Selesai+'" >Edit</a>'+'</td>'+
                                '<td>'+'<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-kd_jadwal="'+data[i].ID_Jadwal+'" data-dokter="'+data[i].nm_dokter+'">Delete</a>'+'</td>'+
		                        '</tr>';
		            }
		            $('#show_data4').html(html);
		        }

		    });
		}
        //get data for update record
        $('#show_data4').on('click','.item_edit',function(){
            var nm_sps = $(this).data('nm_sps');
            var nm_dokter = $(this).data('nm_dokter');
            var id_jadwal = $(this).data('kd_jadwal');
            var Mulai = $(this).data('mulai');
            var Selesai = $(this).data('selesai');
            
            $('#Modal_Edit').modal('show');
            $('[name="ID_Edit"]').val(id_jadwal);
            $('[name="Dokter_Edit"]').val(nm_dokter);
            $('[name="Poliklinik_Edit"]').val(nm_sps);
            $('[name="Mulai_Edit"]').val(Mulai);
            $('[name="Selesai_Edit"]').val(Selesai);
        });
        
        //update record to database
        $('#edit_save').on('click',function(){
            var id = $('#ID_Edit').val()
            var Mulai = $('#Mulai_Edit').val();
            var Selesai = $('#Selesai_Edit').val();
            
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('jadwal_controllers/update')?>",
                dataType : "JSON",
                data : {Mulai:Mulai , Selesai:Selesai, id:id},
                success: function(data){
                    $('[name="Mulai"]').val("");
                    $('[name="Selesai"]').val("");
                    $('[name="ID_Edit"]').val("");
                    $('#Modal_Edit').modal('hide');
                    show_product();
                }
            });
            return false;
        });

        //GET DATA DELETE
        $('#show_data4').on('click','.item_delete',function(){
            var kd_sps = $(this).data('kd_jadwal');
            var nm_dokter = $(this).data('dokter');
            
            $('#Modal_Delete').modal('show');
            $('[name="jadwal_delete"]').val(kd_sps);
            $('[name="nm_dokter"]').val(nm_dokter);
        });

        //DELETE DATA IN DATABASE
        $('#btn_delete').on('click',function(){
            var ID_Jadwal = $('#jadwal_delete').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('jadwal_controllers/delete')?>",
                dataType : "JSON",
                data : {ID_Jadwal:ID_Jadwal},
                success: function(data){
                    $('[name="jadwal_delete"]').val("");
                    $('#Modal_Delete').modal('hide');
                    show_product();
                }
            });
            return false;
        });

        //show spesialis
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
		            $('#data_spesialis').html(html);
		        }

		    });
        }

        //modal add1 back to add
        $('#btn_back1').on('click',function(){
            $('#Modal_Add1').modal('hide');
            show_spesialis();
            $('#Modal_Add').modal('show');
        });
        $('#btn_back2').on('click',function(){
            $('#Modal_Add2').modal('hide');
            show_spesialis();
            $('#Modal_Add1').modal('show');
        });

        $('#Add4').on('click',function(){
            $('#Modal_Add').modal('show');
            show_spesialis();
            var hari = $('#hari4').val();
            $('[name="hari11"]').val(hari);
        });
        

        //show Add1 to database
        $('#btn_Add').on('click',function(){
            var spesialis = $('#data_spesialis').val();
            var hari = $('#hari11').val();
            $('[name="id_poliklinik"]').val(spesialis);
            $('[name="hari22"]').val(hari);
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
        });

        //show modal Add2 to database
        $('#btn_add1').on('click',function(){
            var id_sps = $('#id_poliklinik').val();
            var id_dokter = $('#dokter_sps').val();
            var id_hari = $('#hari22').val();
            $('[name="id_sps"]').val(id_sps);
            $('[name="id_dokter"]').val(id_dokter);
            $('[name="hari33"]').val(id_hari);
            $('#Modal_Add1').modal('hide');
            $('#Modal_Add2').modal('show');
        });
        
        //SAVE ADD DATA
        $('#btn_save').on('click',function(){
           
            var hari = $('#hari33').val();
            var kd_Dokter = $('#id_dokter').val();
            var id = hari+kd_Dokter;
            var Mulai = $('#Mulai').val();
            var Selesai = $('#Selesai').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('jadwal_dokter/save')?>",
                dataType : "JSON",
                data : {id:id, hari:hari , kd_Dokter:kd_Dokter , Mulai:Mulai, Selesai:Selesai},
                success: function(data){
                    $('[name="hari"]').val("");
                    $('[name="id_dokter"]').val("");
                    $('[name="Mulai"]').val("");
                    $('[name="Selesai"]').val("");
                    $('#Modal_Add2').modal('hide');
                    show_product();
                }
            });
            show_product();
            return false;
        });
        
    });
</script>
<!--HARI JUMAT-->
<script type="text/javascript">
    $(document).ready(function(){
        show_product();
        
        $('#mydata5').dataTable();
        //SHOW ALL DATA
        function show_product(){
            var hari='5';
		    $.ajax({
		        type  : "POST",
		        url   : '<?php echo site_url('jadwal_controllers/jadwal_data')?>',
		        dataType : 'json',
                data : {hari:hari},
		        success : function(data){
		            var html = '';
		            var i;
		            for(i=0; i<data.length; i++){
		                html += '<tr>'+
		                  		'<td>'+data[i].nm_dokter+'</td>'+
		                        '<td>'+data[i].nm_sps+'</td>'+
                                '<td>'+data[i].Mulai+'</td>'+
                                '<td>'+data[i].Selesai+'</td>'+
                                '<td>'+'<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit" data-kd_jadwal="'+data[i].ID_Jadwal+'" data-nm_dokter="'+data[i].nm_dokter+'" data-nm_sps="'+data[i].nm_sps+'" data-mulai="'+data[i].Mulai+'" data-selesai="'+data[i].Selesai+'" >Edit</a>'+'</td>'+
                                '<td>'+'<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-kd_jadwal="'+data[i].ID_Jadwal+'" data-dokter="'+data[i].nm_dokter+'">Delete</a>'+'</td>'+
		                        '</tr>';
		            }
		            $('#show_data5').html(html);
		        }

		    });
		}

        //get data for update record
        $('#show_data5').on('click','.item_edit',function(){
            var nm_sps = $(this).data('nm_sps');
            var nm_dokter = $(this).data('nm_dokter');
            var id_jadwal = $(this).data('kd_jadwal');
            var Mulai = $(this).data('mulai');
            var Selesai = $(this).data('selesai');
            
            $('#Modal_Edit').modal('show');
            $('[name="ID_Edit"]').val(id_jadwal);
            $('[name="Dokter_Edit"]').val(nm_dokter);
            $('[name="Poliklinik_Edit"]').val(nm_sps);
            $('[name="Mulai_Edit"]').val(Mulai);
            $('[name="Selesai_Edit"]').val(Selesai);
        });
        
        //update record to database
        $('#edit_save').on('click',function(){
            var id = $('#ID_Edit').val()
            var Mulai = $('#Mulai_Edit').val();
            var Selesai = $('#Selesai_Edit').val();
            
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('jadwal_controllers/update')?>",
                dataType : "JSON",
                data : {Mulai:Mulai , Selesai:Selesai, id:id},
                success: function(data){
                    $('[name="Mulai"]').val("");
                    $('[name="Selesai"]').val("");
                    $('[name="ID_Edit"]').val("");
                    $('#Modal_Edit').modal('hide');
                    show_product();
                }
            });
            return false;
        });

        //GET DATA DELETE
        $('#show_data5').on('click','.item_delete',function(){
            var kd_sps = $(this).data('kd_jadwal');
            var nm_dokter = $(this).data('dokter');
            
            $('#Modal_Delete').modal('show');
            $('[name="jadwal_delete"]').val(kd_sps);
            $('[name="nm_dokter"]').val(nm_dokter);
        });

        //DELETE DATA IN DATABASE
        $('#btn_delete').on('click',function(){
            var ID_Jadwal = $('#jadwal_delete').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('jadwal_controllers/delete')?>",
                dataType : "JSON",
                data : {ID_Jadwal:ID_Jadwal},
                success: function(data){
                    $('[name="jadwal_delete"]').val("");
                    $('#Modal_Delete').modal('hide');
                    show_product();
                }
            });
            return false;
        });

        //show spesialis
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
		            $('#data_spesialis').html(html);
		        }

		    });
        }

        //modal add1 back to add
        $('#btn_back1').on('click',function(){
            $('#Modal_Add1').modal('hide');
            show_spesialis();
            $('#Modal_Add').modal('show');
        });
        $('#btn_back2').on('click',function(){
            $('#Modal_Add2').modal('hide');
            show_spesialis();
            $('#Modal_Add1').modal('show');
        });

        $('#Add5').on('click',function(){
            $('#Modal_Add').modal('show');
            show_spesialis();
            var hari = $('#hari5').val();
            $('[name="hari11"]').val(hari);
        });
        

        //show Add1 to database
        $('#btn_Add').on('click',function(){
            var spesialis = $('#data_spesialis').val();
            var hari = $('#hari11').val();
            $('[name="id_poliklinik"]').val(spesialis);
            $('[name="hari22"]').val(hari);
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
        });

        //show modal Add2 to database
        $('#btn_add1').on('click',function(){
            var id_sps = $('#id_poliklinik').val();
            var id_dokter = $('#dokter_sps').val();
            var id_hari = $('#hari22').val();
            $('[name="id_sps"]').val(id_sps);
            $('[name="id_dokter"]').val(id_dokter);
            $('[name="hari3"]').val(id_hari);
            $('#Modal_Add1').modal('hide');
            $('#Modal_Add2').modal('show');
        });
        
        //SAVE ADD DATA
        $('#btn_save').on('click',function(){
          
            var hari = $('#hari33').val();
            var kd_Dokter = $('#id_dokter').val();
            var id = hari+kd_Dokter;
            var Mulai = $('#Mulai').val();
            var Selesai = $('#Selesai').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('jadwal_controllers/save')?>",
                dataType : "JSON",
                data : {id:id, hari:hari , kd_Dokter:kd_Dokter , Mulai:Mulai, Selesai:Selesai},
                success: function(data){
                    $('[name="hari"]').val("");
                    $('[name="id_dokter"]').val("");
                    $('[name="Mulai"]').val("");
                    $('[name="Selesai"]').val("");
                    $('#Modal_Add2').modal('hide');
                    show_product();
                }
            });
            show_product();
            return false;
        });
        
    });
</script>
<!--HARI SABTU-->
<script type="text/javascript">
    $(document).ready(function(){
        show_product();
        
        $('#mydata6').dataTable();
        //SHOW ALL DATA
        function show_product(){
            var hari='6';
		    $.ajax({
		        type  : "POST",
		        url   : '<?php echo site_url('jadwal_controllers/jadwal_data')?>',
		        dataType : 'json',
                data : {hari:hari},
		        success : function(data){
		            var html = '';
		            var i;
		            for(i=0; i<data.length; i++){
		                html += '<tr>'+
		                  		'<td>'+data[i].nm_dokter+'</td>'+
		                        '<td>'+data[i].nm_sps+'</td>'+
                                '<td>'+data[i].Mulai+'</td>'+
                                '<td>'+data[i].Selesai+'</td>'+
                                '<td>'+'<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit" data-kd_jadwal="'+data[i].ID_Jadwal+'" data-nm_dokter="'+data[i].nm_dokter+'" data-nm_sps="'+data[i].nm_sps+'" data-mulai="'+data[i].Mulai+'" data-selesai="'+data[i].Selesai+'" >Edit</a>'+'</td>'+
                                '<td>'+'<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-kd_jadwal="'+data[i].ID_Jadwal+'" data-dokter="'+data[i].nm_dokter+'">Delete</a>'+'</td>'+
		                        '</tr>';
		            }
		            $('#show_data6').html(html);
		        }

		    });
		}

        //get data for update record
        $('#show_data6').on('click','.item_edit',function(){
            var nm_sps = $(this).data('nm_sps');
            var nm_dokter = $(this).data('nm_dokter');
            var id_jadwal = $(this).data('kd_jadwal');
            var Mulai = $(this).data('mulai');
            var Selesai = $(this).data('selesai');
            
            $('#Modal_Edit').modal('show');
            $('[name="ID_Edit"]').val(id_jadwal);
            $('[name="Dokter_Edit"]').val(nm_dokter);
            $('[name="Poliklinik_Edit"]').val(nm_sps);
            $('[name="Mulai_Edit"]').val(Mulai);
            $('[name="Selesai_Edit"]').val(Selesai);
        });
        
        //update record to database
        $('#edit_save').on('click',function(){
            var id = $('#ID_Edit').val()
            var Mulai = $('#Mulai_Edit').val();
            var Selesai = $('#Selesai_Edit').val();
            
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('jadwal_controllers/update')?>",
                dataType : "JSON",
                data : {Mulai:Mulai , Selesai:Selesai, id:id},
                success: function(data){
                    $('[name="Mulai"]').val("");
                    $('[name="Selesai"]').val("");
                    $('[name="ID_Edit"]').val("");
                    $('#Modal_Edit').modal('hide');
                    show_product();
                }
            });
            return false;
        });

        //GET DATA DELETE
        $('#show_data6').on('click','.item_delete',function(){
            var kd_sps = $(this).data('kd_jadwal');
            var nm_dokter = $(this).data('dokter');
            
            $('#Modal_Delete').modal('show');
            $('[name="jadwal_delete"]').val(kd_sps);
            $('[name="nm_dokter"]').val(nm_dokter);
        });
        //MODAL ADD
        $('#Add6').on('click',function(){
            $('#Modal_Add').modal('show');
            show_spesialis();
            var hari = $('#hari6').val();
            $('[name="hari11"]').val(hari);
        });

        //DELETE DATA IN DATABASE
        $('#btn_delete').on('click',function(){
            var ID_Jadwal = $('#jadwal_delete').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('jadwal_controllers/delete')?>",
                dataType : "JSON",
                data : {ID_Jadwal:ID_Jadwal},
                success: function(data){
                    $('[name="jadwal_delete"]').val("");
                    $('#Modal_Delete').modal('hide');
                    show_product();
                }
            });
            return false;
        });

        //show spesialis
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
		            $('#data_spesialis').html(html);
		        }

		    });
        }

        //modal add1 back to add
        $('#btn_back1').on('click',function(){
            $('#Modal_Add1').modal('hide');
            show_spesialis();
            $('#Modal_Add').modal('show');
        });
        $('#btn_back2').on('click',function(){
            $('#Modal_Add2').modal('hide');
            show_spesialis();
            $('#Modal_Add1').modal('show');
        });
   

        //show Add1 to database
        $('#btn_Add').on('click',function(){
            var spesialis = $('#data_spesialis').val();
            var hari = $('#hari11').val();
            $('[name="id_poliklinik"]').val(spesialis);
            $('[name="hari22"]').val(hari);
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
        });

        //show modal Add2 to database
        $('#btn_add1').on('click',function(){
            var id_sps = $('#id_poliklinik').val();
            var id_dokter = $('#dokter_sps').val();
            var id_hari = $('#hari22').val();
            $('[name="id_sps"]').val(id_sps);
            $('[name="id_dokter"]').val(id_dokter);
            $('[name="hari33"]').val(id_hari);
            $('#Modal_Add1').modal('hide');
            $('#Modal_Add2').modal('show');
        });

        //SAVE ADD DATA
        $('#btn_save').on('click',function(){
  
            var hari = $('#hari33').val();
            var kd_Dokter = $('#id_dokter').val();
            var id = hari+kd_Dokter;
            var Mulai = $('#Mulai').val();
            var Selesai = $('#Selesai').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('jadwal_controllers/save')?>",
                dataType : "JSON",
                data : {id:id, hari:hari , kd_Dokter:kd_Dokter , Mulai:Mulai, Selesai:Selesai},
                success: function(data){
                    $('[name="hari"]').val("");
                    $('[name="id_dokter"]').val("");
                    $('[name="Mulai"]').val("");
                    $('[name="Selesai"]').val("");
                    $('#Modal_Add2').modal('hide');
                    show_product();
                }
            });
            show_product();
            return false;
        });
        
    });
</script>
