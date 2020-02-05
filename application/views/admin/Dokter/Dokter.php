<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Dokter</h3> 
                <div class="btn btn-round "><button type="button" type="submit" data-toggle="modal" data-target="#add_modal" id="Add" class="btn btn-primary"><span class="fa fa-plus"></span> Add Dokter</button></div>
                <button class="btn btn-round btn-info" data-toggle="modal" data-target="#spesialis_Model" ><i ></i>VIEW DOCTOR BY SPECIALIST</button>   
            </div>              
        </div>

        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_content">
                    <div class="row" >
                        <div class="col-md-12 col-sm-12 col-xs-12 text-center" > </div>  
                    
                        <div id="show_data"> </div>
                    

                    
                    <div class="clearfix" ></div>
                    
                    
                
                </div>                
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<!-- /page content -->

<!-- add modal -->
<div class="modal fade bs-example-modal-lg" id="add_modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <form id="submit">
            <div class="modal-body">
                 <!-- page content -->
                <div class="" role="main">
                    <div class="">
                        <div class="page-title">
                            <div class="title_left">
                                <h3>Dokter Profil</h3>
                            </div>
                            
                            <div class="clearfix"></div>

                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="x_panel">                       
                                        <div class="x_content">
                                        
                                        <div class="form-horizontal form-label-left">
                                            
                                            <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                                                <div class="profile_img">
                                                    <div id="crop-avatar">
                                            <!-- Current avatar -->
                                                        <img class="img-responsive avatar-view" src="images/picture.jpg" id="myImg" alt="Avatar" title="Change the avatar">
                                                    </div>
                                                </div>                
                                                <br />
                                                <input  type='file' name="file">                   
                                            </div>

                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                
                                                    <div class="form-group">
                                                        <label class="control-label col-md-2 col-sm-3 col-xs-3">ID </label>
                                                        <div class="col-md-10 col-sm-9 col-xs-9">
                                                            <input type="text" class="form-control" name="ID" id="ID">
                                                            <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label col-md-2 col-sm-3 col-xs-3">Nama <span class="required">*</span></label>
                                                        <div class="col-md-10 col-sm-9 col-xs-9">
                                                            <input type="text" class="form-control" name="NAMA" id="NAMA" for="name">
                                                            <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label col-md-2 col-sm-3 col-xs-3">Jenis Klamin</label>
                                                        <div class="col-md-10 col-sm-9 col-xs-9">
                                                            <div class="btn-group btn-group-justified" data-toggle="buttons">
                                                                <label class="btn btn-primary">
                                                                <input type="radio" class="sr-only"  name="KELAMIN" id="KELAMIN" value="0">
                                                                <span class="docs-tooltip" data-toggle="tooltip" title="View Mode 0">
                                                                    Laki-Laki
                                                                </span>

                                                                </label>
                                                                <label class="btn btn-primary">
                                                                <input type="radio" class="sr-only"  name="KELAMIN" id="KELAMIN" value="1">
                                                                <span class="docs-tooltip" data-toggle="tooltip" title="View Mode 1">
                                                                    Perempuan
                                                                </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label col-md-2 col-sm-3 col-xs-3">Tempat Lahir</label>
                                                        <div class="col-md-10 col-sm-9 col-xs-9">
                                                            <input type="text" class="form-control" name="LAHIR" id="LAHIR">
                                                            <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label col-md-2 col-sm-3 col-xs-3">Tanggal Lahir</label>
                                                        <div class="col-md-10 col-sm-9 col-xs-9">
                                                            <input type="text" class="form-control" name="TANGGAL" id="TANGGAL" placeholder="yyyy/mm/dd" data-inputmask="'mask': '9999/99/99'">
                                                            <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label col-md-2 col-sm-3 col-xs-3">Darah</label>
                                                        <div class="col-md-10 col-sm-9 col-xs-9">
                                                            <div class="btn-group btn-group-justified" data-toggle="buttons">
                                                                <label class="btn btn-primary">
                                                                    <input type="radio" class="sr-only"  name="DARAH" id="DARAH" value="0">
                                                                    <span class="docs-tooltip" data-toggle="tooltip" title="View Mode 0">
                                                                    AB
                                                                    </span>
                                                                </label>
                                                                
                                                                <label class="btn btn-primary">
                                                                    <input type="radio" class="sr-only"  name="DARAH" id="DARAH" value="1">
                                                                    <span class="docs-tooltip" data-toggle="tooltip" title="View Mode 1">
                                                                    A
                                                                    </span>
                                                                </label>
                                                                <label class="btn btn-primary">
                                                                    <input type="radio" class="sr-only"  name="DARAH" id="DARAH" value="2">
                                                                    <span class="docs-tooltip" data-toggle="tooltip" title="View Mode 2">
                                                                    B
                                                                    </span>
                                                                </label>
                                                                <label class="btn btn-primary">
                                                                    <input type="radio" class="sr-only"  name="DARAH" id="DARAH" value="3">
                                                                    <span class="docs-tooltip" data-toggle="tooltip" title="View Mode 3">
                                                                    O
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label col-md-2 col-sm-3 col-xs-3">Agama</label>
                                                        <div class="col-md-10 col-sm-9 col-xs-9">
                                                            <div class="btn-group btn-group-justified" data-toggle="buttons">
                                                                <label class="btn btn-primary">
                                                                    <input type="radio" class="sr-only"  name="AGAMA" id="AGAMA" value="0" >
                                                                    <span class="docs-tooltip" data-toggle="tooltip" title="View Mode 0">
                                                                    ISLAM
                                                                    </span>
                                                                </label>
                                                                
                                                                <label class="btn btn-primary">
                                                                    <input type="radio" class="sr-only"  name="AGAMA" id="AGAMA" value="1">
                                                                    <span class="docs-tooltip" data-toggle="tooltip" title="View Mode 1">
                                                                    HINDU
                                                                    </span>
                                                                </label>
                                                                <label class="btn btn-primary">
                                                                    <input type="radio" class="sr-only" name="AGAMA" id="AGAMA" value="2">
                                                                    <span class="docs-tooltip" data-toggle="tooltip" title="View Mode 1">
                                                                    BUDHA
                                                                    </span>
                                                                </label>
                                                                <label class="btn btn-primary">
                                                                    <input type="radio" class="sr-only"  name="AGAMA" id="AGAMA" value="3">
                                                                    <span class="docs-tooltip" data-toggle="tooltip" title="View Mode 1">
                                                                    KRISTEN
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label col-md-2 col-sm-3 col-xs-3">Alamat</label>
                                                        <div class="col-md-10 col-sm-9 col-xs-9">
                                                            <input type="text" class="form-control" name="ALAMAT" id="ALAMAT">
                                                            <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label col-md-2 col-sm-3 col-xs-3">Phone</label>
                                                        <div class="col-md-10 col-sm-9 col-xs-9">
                                                            <input type="text" class="form-control" name="PHONE" id="PHONE" data-inputmask="'mask' : '(999)999-999-999'">
                                                            <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label col-md-2 col-sm-3 col-xs-3">Status</label>
                                                        <div class="col-md-10 col-sm-9 col-xs-9">
                                                            <div class="btn-group btn-group-justified" data-toggle="buttons">
                                                                <label class="btn btn-primary">
                                                                    <input type="radio" class="sr-only"  name="NIKAH" id="NIKAH" value="0">
                                                                    <span class="docs-tooltip" data-toggle="tooltip" title="View Mode 0">
                                                                    MENIKAH
                                                                    </span>
                                                                </label>
                                                                
                                                                <label class="btn btn-primary">
                                                                    <input type="radio" class="sr-only"  name="NIKAH" id="NIKAH" value="1">
                                                                    <span class="docs-tooltip" data-toggle="tooltip" title="View Mode 1">
                                                                    BELUM MENIKAH
                                                                    </span>
                                                                </label>
                                            
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label class="control-label col-md-2 col-sm-3 col-xs-3">Spesialis</label>
                                                        <div class="col-md-10 col-sm-9 col-xs-9">
                                                            <select class="select2_single form-control" name="SPSS" id="SPSS" tabindex="-1">
                                                                <option></option>
                                                        
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label col-md-2 col-sm-3 col-xs-3">Alumni</label>
                                                        <div class="col-md-10 col-sm-9 col-xs-9">
                                                            <input type="text" class="form-control" name='ALUMNI' id='ALUMNI' >
                                                            <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label col-md-2 col-sm-3 col-xs-3">Nomer Izin Praktek</label>
                                                        <div class="col-md-10 col-sm-9 col-xs-9">
                                                            <input type="text" class="form-control" name="IZIN" id="IZIN">
                                                            <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                                                        </div>
                                                    </div>

                                                    <div class="ln_solid"></div>

                                                    

                                                </div>
                                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                       
                <!-- /page content -->

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" id="btn_save" class="btn btn-primary">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!--/add modal-->

<!-- Edit modal -->
<div class="modal fade bs-example-modal-lg" id="edit_modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <form id="submitedit">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">
                 <!-- page content -->
                <div class="" role="main">
                    <div class="">
                        <div class="page-title">
                            <div class="title_left">
                                <h3>Dokter Profil</h3>
                            </div>
                            
                            <div class="clearfix"></div>

                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="x_panel">                       
                                        <div class="x_content">
                                        
                                        <div class="form-horizontal form-label-left">
                                            
                                            <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                                                <div class="profile_img">
                                                    <div id="crop-avatar">
                                            <!-- Current avatar -->
                                                        <img class="img-responsive avatar-view" src="images/picture.jpg" id="myImg" alt="Avatar" title="Change the avatar">
                                                    </div>
                                                </div>                
                                                <br />
                                                <input  type='file' name="file">
                                                <input  type="hidden" name="idfile" id="idfile">                   
                                            </div>

                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                
                                                    <div class="form-group">
                                                        <label class="control-label col-md-2 col-sm-3 col-xs-3">ID</label>
                                                        <div class="col-md-10 col-sm-9 col-xs-9">
                                                            <input type="text" class="form-control" name="ID_edit" id="ID_edit" readonly>
                                                            <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label col-md-2 col-sm-3 col-xs-3">Nama</label>
                                                        <div class="col-md-10 col-sm-9 col-xs-9">
                                                            <input type="text" class="form-control" name="NAMA_edit" id="NAMA_edit">
                                                            <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label col-md-2 col-sm-3 col-xs-3">Jenis Klamin</label>
                                                        <div class="col-md-10 col-sm-9 col-xs-9">
                                                            <p>
                                                                Laki - Laki:
                                                                <input type="radio" class="flat" name="KELAMIN_edit" id="KELAMIN_edit" value="0"  /> 
                                                                Perempuan:
                                                                <input type="radio" class="flat" name="KELAMIN_edit" id="KELAMIN_edit" value="1" />
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label col-md-2 col-sm-3 col-xs-3">Tempat Lahir</label>
                                                        <div class="col-md-10 col-sm-9 col-xs-9">
                                                            <input type="text" class="form-control" name="LAHIR_edit" id="LAHIR_edit">
                                                            <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label col-md-2 col-sm-3 col-xs-3">Tanggal Lahir</label>
                                                        <div class="col-md-10 col-sm-9 col-xs-9">
                                                            <input type="text" class="form-control" name="TANGGAL_edit" id="TANGGAL_edit" placeholder="yyyy/mm/dd" data-inputmask="'mask': '9999/99/99'">
                                                            <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label col-md-2 col-sm-3 col-xs-3">Darah</label>
                                                        <div class="col-md-10 col-sm-9 col-xs-9">
                                                            <p>
                                                                AB:
                                                                <input type="radio" class="flat" name="DARAH_edit" id="DARAH_edit" value="0"  /> 
                                                                A:
                                                                <input type="radio" class="flat" name="DARAH_edit" id="DARAH_edit" value="1" />
                                                                B:
                                                                <input type="radio" class="flat" name="DARAH_edit" id="DARAH_edit" value="2" />
                                                                O:
                                                                <input type="radio" class="flat" name="DARAH_edit" id="DARAH_edit" value="3" />
                                                            </p>    
                                                            
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label col-md-2 col-sm-3 col-xs-3">Agama</label>
                                                        <div class="col-md-10 col-sm-9 col-xs-9">
                                                            <p>
                                                                ISLAM:
                                                                <input type="radio" class="flat" name="AGAMA_edit" id="AGAMA_edit" value="0"  /> 
                                                                HINDU:
                                                                <input type="radio" class="flat" name="AGAMA_edit" id="AGAMA_edit" value="1" />
                                                                BUDHA:
                                                                <input type="radio" class="flat" name="AGAMA_edit" id="AGAMA_edit" value="2" />
                                                                KRISTEN:
                                                                <input type="radio" class="flat" name="AGAMA_edit" id="AGAMA_edit" value="3" />
                                                            </p> 
                                                            
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label col-md-2 col-sm-3 col-xs-3">Alamat</label>
                                                        <div class="col-md-10 col-sm-9 col-xs-9">
                                                            <input type="text" class="form-control" name="ALAMAT_edit" id="ALAMAT_edit">
                                                            <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label col-md-2 col-sm-3 col-xs-3">Phone</label>
                                                        <div class="col-md-10 col-sm-9 col-xs-9">
                                                            <input type="text" class="form-control" name="PHONE_edit" id="PHONE_edit" data-inputmask="'mask' : '(999)999-999-999'">
                                                            <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label col-md-2 col-sm-3 col-xs-3">Status</label>
                                                        <div class="col-md-10 col-sm-9 col-xs-9">
                                                            <p>
                                                                MENIKAH:
                                                                <input type="radio" class="flat" name="NIKAH_edit" id="NIKAH_edit" value="0"  /> 
                                                                BELUM MENIKAH:
                                                                <input type="radio" class="flat" name="NIKAH_edit" id="NIKAH_edit" value="1" />
                                                            </p>
                                                            
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label class="control-label col-md-2 col-sm-3 col-xs-3">Spesialis</label>
                                                        <div class="col-md-10 col-sm-9 col-xs-9">
                                                            <select class="select2_single form-control" name="SPSS_edit" id="SPSS_edit" tabindex="-1">
                                                                <option> </option>
                                                                
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label col-md-2 col-sm-3 col-xs-3">Alumni</label>
                                                        <div class="col-md-10 col-sm-9 col-xs-9">
                                                            <input type="text" class="form-control" name='ALUMNI_edit' id='ALUMNI_edit' >
                                                            <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label col-md-2 col-sm-3 col-xs-3">Nomer Izin Praktek</label>
                                                        <div class="col-md-10 col-sm-9 col-xs-9">
                                                            <input type="text" class="form-control" name="IZIN_edit" id="IZIN_edit">
                                                            <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                                                        </div>
                                                    </div>

                                                    <div class="ln_solid"></div>

                                                    

                                                </div>
                                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                        
                <!-- /page content -->

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cencel</button>
                <button type="submit" id="btn_save" class="btn btn-primary">Update</button>
            </div>
        </form>
        </div>
    </div>
</div>
<!--/add modal-->

<!-- modal delete dokter -->
<form>
<div class="modal fade docs-cropped" id="Modal_Delete" aria-hidden="true" aria-labelledby="getCroppedCanvasTitle" role="dialog" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
                                                  
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" >APAKAH ANDA YAKIN INGIN MENGHAPUS DOKTER INI</h4>
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

<!-- modal select spesialis dokter -->
<form>
<div class="modal fade docs-cropped" id="spesialis_Model" aria-hidden="true" aria-labelledby="getCroppedCanvasTitle" role="dialog" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
                                                  
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" >SILAHKAN PILIH SPESILIS</h4>
            </div>

            <div class="modal-body">
                <h4 class="modal-title" ></h4>
                <div class="form-group">
                    <label class="control-label col-md-2 col-sm-3 col-xs-3">Spesialis</label>
                    <div class="col-md-10 col-sm-9 col-xs-9">
                        <select class="select2_single form-control" name="SPSSS" id="SPSSS" tabindex="-1">
                            <option></option>
                                                        
                        </select>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                <button type="button" type="submit" id="btn_sps" class="btn btn-primary">YES</button>
            </div>
        
        </div>
    </div>
</div>
</form>
<!-- / delete modal -->


<script type="text/javascript" src="<?php echo base_url().'assets/jquery-3.2.1.js'?>"></script>
<script type="text/javascript">
	$(document).ready(function(){
		show_dokter();
        show_spesialis();
        show_spesialiss();	//call function show all product
		
		//function show all product
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
                        if((i+1)%3==0){g="row";}
						else{g=" ";}
		                html +=    '<div class="'+g+'" >'+
                                    '<div class="col-md-4 col-sm-4 col-xs-12 profile_details">'+
                                        '<div class="well profile_view">'+
                                            '<div class="col-sm-12">'+
                                                '<h4 class="brief"><i>'+data[i].nm_sps+'</i></h4>'+
                                                '<div class="left col-xs-7">'+
                                                    '<h2>'+data[i].nm_dokter+'</h2>'+
                                                    '<p><strong>Alumni:</strong>'+data[i].alumni+' </p>'+
                                                    '<ul class="list-unstyled">'+
                                                        '<li><i class="fa fa-building"></i> Address: '+data[i].almt_tgl+'</li>'+
                                                        '<li><i class="fa fa-phone"></i> Phone #: '+data[i].no_telp+'</li>'+
                                                    '</ul>'+
                                                '</div>'+
                                                '<div class="right col-xs-5 text-center">'+
                                                    '<img src="<?php echo base_url();?>assets/images/Dokter/'+data[i].Photo+'" alt="" class="img-circle img-responsive">'+
                                                '</div>'+
                                            '</div>'+      
                                            '<div class="col-xs-12 bottom text-center">'+
                                                '<div class="col-xs-12 col-sm-6 emphasis">'+
                                                    '<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit" data-kd_dokter="'+data[i].kd_dokter+'" data-ph="'+data[i].Photo+'" data-nm_dokter="'+data[i].nm_dokter+'" data-jk="'+data[i].jk+'" data-tmp_lahir="'+data[i].tmp_lahir+'" data-tgl_lahir="'+data[i].tgl_lahir+'" data-gol_drh="'+data[i].gol_drh+'" data-agama="'+data[i].agama+'" data-almt_tgl="'+data[i].almt_tgl+'" data-no_telp="'+data[i].no_telp+'" data-stts_nikah="'+data[i].stts_nikah+'" data-kd_sps="'+data[i].kd_sps+'" data-alumni="'+data[i].alumni+'" data-no_ijn_praktek="'+data[i].no_ijn_praktek+'" data-nm_sps="'+data[i].nm_sps+'" >Edit</a>'+
                                                '</div>'+
                                                '<div class="col-xs-12 col-sm-6 emphasis">'+
                                                '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-kd_dokter="'+data[i].kd_dokter+'">Delete</a>'+'</td>'+
                                                '</div>'+
                                            '</div>'+
                                        '</div>'+
                                        '</div>'+
                                    '</div>';
                        
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
		                html += '<option value="'+data[i].kd_sps+'">'+data[i].nm_sps+'</option>';
                        
		            }
		            $('#SPSS').html(html);
		        }
            });
        }
        function show_spesialiss(){
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
		            $('#SPSSS').html(html);
		        }
            });
        }

        function show_spesialis_edit(kdsps, nmsps){
            $.ajax({
		        type  : 'ajax',
		        url   : '<?php echo site_url('Spesialis_controllers/spesialis_data')?>',
		        async : false,
		        dataType : 'json',
		        success : function(data){
		            var html = '';
		            var i;
                    html='<option value="'+kdsps+'">'+nmsps+'</option>';
		            for(i=0; i<data.length; i++){
		                html += '<option value="'+data[i].kd_sps+'">'+data[i].nm_sps+'</option>';
                        
		            }
		            $('#SPSS_edit').html(html);
		        }
            });
        }
        
        $('#submit').submit(function(e){
            var a=$('#ID').val();
            var b=$('#NAMA').val();
            var c=$('#KELAMIN').val();
            var d=$('#LAHIR').val();
            //var e=$('#TANGGAL').val();
            var f=$('#DARAH').val();
            var g=$('#AGAMA').val();
            var h=$('#ALAMAT').val();
            var i=$('#PHONE').val();
            var j=$('#NIKAH').val();
            var k=$('#SPSS').val();
            var l=$('#ALUMNI').val();
            var m=$('#IZIN').val();
            e.preventDefault();
                if(a=="" || b=="" || c=="" || d=="" || f=="" || g=="" || h=="" || i=="" || j=="" || k=="" || l=="" || m=="" ){alert('kode, nama dan jenis kelamin tidak boleh kosong. Pastikan spesialis benar');}
                else{
		        $.ajax({
		            url  : "<?php echo site_url('dokter_controllers/insert_dokter')?>",
		            type:"post",	
		            data:new FormData(this), //this is formData
		            processData:false,
		            contentType:false,
		            cache:false,
		            async:false,
		            success: function(data){
						$('[name="ID"]').val("");
                        $('[name="NAMA"]').val("");
                        $('[name="KELAMIN"]').val("");
                        $('[name="LAHIR"]').val("");
                        $('[name="TANGGAL"]').val("");
                        $('[name="DARAH"]').val("");
                        $('[name="AGAMA"]').val("");
                        $('[name="ALAMAT"]').val("");
                        $('[name="PHONE"]').val("");
                        $('[name="NIKAH"]').val("");
                        $('[name="SPSS"]').val("");
                        $('[name="ALUMNI"]').val("");
                        $('[name="file"]').val("");
                        $('[name="IZIN"]').val("");
		                $('#add_modal').modal('hide');
                        show_dokter();
		           	}
		        });
            }
            
		});

        $('#submitedit').submit(function(e){
		    e.preventDefault();
		        $.ajax({
		            url  : "<?php echo site_url('dokter_controllers/update')?>",
		            type:"post",	
		            data:new FormData(this), //this is formData
		            processData:false,
		            contentType:false,
		            cache:false,
		            async:false,
		            success: function(data){
						$('[name="ID"]').val("");
                        $('[name="NAMA"]').val("");
                        $('[name="KELAMIN"]').val("");
                        $('[name="LAHIR"]').val("");
                        $('[name="TANGGAL"]').val("");
                        $('[name="DARAH"]').val("");
                        $('[name="AGAMA"]').val("");
                        $('[name="ALAMAT"]').val("");
                        $('[name="PHONE"]').val("");
                        $('[name="NIKAH"]').val("");
                        $('[name="SPSS"]').val("");
                        $('[name="ALUMNI"]').val("");
                        $('[name="idfile"]').val("");
                        $('[name="IZIN"]').val("");
		                $('#edit_modal').modal('hide');
                        show_dokter();
		           	}
		        });
		});

        /*$('#save').on('click',function(){
            
            var ID = $('#ID').val(); 
            var NAMA = $('#NAMA').val();
            var KELAMIN = $('#KELAMIN').val();
            var LAHIR = $('#LAHIR').val();
            var TANGGAL = $('#TANGGAL').val();
            var DARAH = $('#DARAH').val();
            var AGAMA = $('#AGAMA').val();
            var ALAMAT = $('#ALAMAT').val();
            var PHONE = $('#PHONE').val();
            var NIKAH = $('#NIKAH').val();
            var SPSS = $('#SPSS').val();
            var ALUMNI = $('#ALUMNI').val();
            var IZIN = $('#IZIN').val();
            
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('dokter_controllers/insert_dokter')?>",
                dataType : "JSON",
                data : {ID:ID, NAMA:NAMA , NIKAH:NIKAH, KELAMIN:KELAMIN , LAHIR:LAHIR, TANGGAL:TANGGAL, DARAH:DARAH, AGAMA:AGAMA, ALAMAT:ALAMAT, PHONE:PHONE, SPSS:SPSS, ALUMNI:ALUMNI, IZIN:IZIN},
                success: function(data){
                    $('[name="ID"]').val("");
                    $('[name="NAMA"]').val("");
                    $('[name="KELAMIN"]').val("");
                    $('[name="LAHIR"]').val("");
                    $('[name="TANGGAL"]').val("");
                    $('[name="DARAH"]').val("");
                    $('[name="AGAMA"]').val("");
                    $('[name="ALAMAT"]').val("");
                    $('[name="PHONE"]').val("");
                    $('[name="NIKAH"]').val("");
                    $('[name="SPSS"]').val("");
                    $('[name="ALUMNI"]').val("");
                    $('[name="IZIN"]').val("");
                    $('#add_modal').modal('hide');
                    show_dokter();
                }
            });
            show_product();
            return false;
        });*/
        
        //get data for delete record
        $('#show_data').on('click','.item_delete',function(){
            var kd_dokter = $(this).data('kd_dokter');
            
            $('#Modal_Delete').modal('show');
            $('[name="dokter_delete"]').val(kd_dokter);
        });

        //delete record to database
        $('#btn_delete').on('click',function(){
            var kd_dokter = $('#dokter_delete').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('dokter_controllers/delete')?>",
                dataType : "JSON",
                data : {kd_dokter:kd_dokter},
                success: function(data){
                    $('[name="dokter_delete"]').val("");
                    $('#Modal_Delete').modal('hide');
                    show_dokter();
                }
            });
            return false;
        });

        //get data for update
        $('#show_data').on('click','.item_edit',function(){
            var ID = $(this).data('kd_dokter');
            var Photo = $(this).data('ph');
            var NAMA = $(this).data('nm_dokter');
            var KELAMIN = $(this).data('jk');
            var LAHIR = $(this).data('tmp_lahir');
            var TANGGAL = $(this).data('tgl_lahir');
            var DARAH = $(this).data('gol_drh');
            var AGAMA = $(this).data('agama');
            var ALAMAT = $(this).data('almt_tgl');
            var PHONE = $(this).data('no_telp');
            var NIKAH = $(this).data('stts_nikah');
            var SPSS = $(this).data('kd_sps');
            var NM_SPSS = $(this).data('nm_sps');
            var ALUMNI = $(this).data('alumni');
            var IZIN = $(this).data('no_ijn_praktek');
            
            
            $('#edit_modal').modal('show');
            show_spesialis_edit(SPSS,NM_SPSS);
            if(KELAMIN=='L'){
            $('.form-group').find(':radio[name=KELAMIN_edit][value="0"]').prop('checked', true);  // #rdGender is  name  of the  RB
            $('.form-group').find(':radio[name=KELAMIN_edit][value="1"]').prop('checked', false);
            } 
            if(KELAMIN=='P'){
            $('.form-group').find(':radio[name=KELAMIN_edit][value="0"]').prop('checked', false);  // #rdGender is  name  of the  RB
            $('.form-group').find(':radio[name=KELAMIN_edit][value="1"]').prop('checked', true);
            }
            if(DARAH=='AB'){
            $('.form-group').find(':radio[name=DARAH_edit][value="0"]').prop('checked', true);  // #rdGender is  name  of the  RB
            $('.form-group').find(':radio[name=DARAH_edit][value="1"]').prop('checked', false);
            $('.form-group').find(':radio[name=DARAH_edit][value="2"]').prop('checked', false);
            $('.form-group').find(':radio[name=DARAH_edit][value="3"]').prop('checked', false);
            }  
            if(DARAH=='A'){
            $('.form-group').find(':radio[name=DARAH_edit][value="0"]').prop('checked', false);  // #rdGender is  name  of the  RB
            $('.form-group').find(':radio[name=DARAH_edit][value="1"]').prop('checked', true);
            $('.form-group').find(':radio[name=DARAH_edit][value="2"]').prop('checked', false);
            $('.form-group').find(':radio[name=DARAH_edit][value="3"]').prop('checked', false);
            } 
            if(DARAH=='B'){
            $('.form-group').find(':radio[name=DARAH_edit][value="0"]').prop('checked', false);  // #rdGender is  name  of the  RB
            $('.form-group').find(':radio[name=DARAH_edit][value="1"]').prop('checked', false);
            $('.form-group').find(':radio[name=DARAH_edit][value="2"]').prop('checked', true);
            $('.form-group').find(':radio[name=DARAH_edit][value="3"]').prop('checked', false);
            }
            if(DARAH=='O'){
            $('.form-group').find(':radio[name=DARAH_edit][value="0"]').prop('checked', false);  // #rdGender is  name  of the  RB
            $('.form-group').find(':radio[name=DARAH_edit][value="1"]').prop('checked', false);
            $('.form-group').find(':radio[name=DARAH_edit][value="2"]').prop('checked', false);
            $('.form-group').find(':radio[name=DARAH_edit][value="3"]').prop('checked', true);
            }
            if(AGAMA=='ISLAM'){
            $('.form-group').find(':radio[name=AGAMA_edit][value="0"]').prop('checked', true);  // #rdGender is  name  of the  RB
            $('.form-group').find(':radio[name=AGAMA_edit][value="1"]').prop('checked', false);
            $('.form-group').find(':radio[name=AGAMA_edit][value="2"]').prop('checked', false);
            $('.form-group').find(':radio[name=AGAMA_edit][value="3"]').prop('checked', false);
            }
            if(AGAMA=='HINDU'){
            $('.form-group').find(':radio[name=AGAMA_edit][value="0"]').prop('checked', false);  // #rdGender is  name  of the  RB
            $('.form-group').find(':radio[name=AGAMA_edit][value="1"]').prop('checked', true);
            $('.form-group').find(':radio[name=AGAMA_edit][value="2"]').prop('checked', false);
            $('.form-group').find(':radio[name=AGAMA_edit][value="3"]').prop('checked', false);
            }
            if(AGAMA=='BUDHA'){
            $('.form-group').find(':radio[name=AGAMA_edit][value="0"]').prop('checked', galse);  // #rdGender is  name  of the  RB
            $('.form-group').find(':radio[name=AGAMA_edit][value="1"]').prop('checked', false);
            $('.form-group').find(':radio[name=AGAMA_edit][value="2"]').prop('checked', true);
            $('.form-group').find(':radio[name=AGAMA_edit][value="3"]').prop('checked', false);
            }
            if(AGAMA=='KRISTEN'){
            $('.form-group').find(':radio[name=AGAMA_edit][value="0"]').prop('checked', false);  // #rdGender is  name  of the  RB
            $('.form-group').find(':radio[name=AGAMA_edit][value="1"]').prop('checked', false);
            $('.form-group').find(':radio[name=AGAMA_edit][value="2"]').prop('checked', false);
            $('.form-group').find(':radio[name=AGAMA_edit][value="3"]').prop('checked', true);
            }
            if(NIKAH=='MENIKAH'){
            $('.form-group').find(':radio[name=NIKAH_edit][value="0"]').prop('checked', true);  // #rdGender is  name  of the  RB
            $('.form-group').find(':radio[name=NIKAH_edit][value="1"]').prop('checked', false);
            }
            if(NIKAH=='SINGLE'){
            $('.form-group').find(':radio[name=NIKAH_edit][value="0"]').prop('checked', false);  // #rdGender is  name  of the  RB
            $('.form-group').find(':radio[name=NIKAH_edit][value="1"]').prop('checked', true);
            }
            $('[name="ID_edit"]').val(ID);
            $('[name="NAMA_edit"]').val(NAMA);
            $('[name="idfile"]').val(Photo);
            //$('[name="KELAMIN_edit"]').val(KELAMIN);
            $('[name="LAHIR_edit"]').val(LAHIR);
            $('[name="TANGGAL_edit"]').val(TANGGAL);
            //$('[name="DARAH_edit"]').val(DARAH);
            //$('[name="AGAMA_edit"]').val(AGAMA);
            $('[name="ALAMAT_edit"]').val(ALAMAT);
            $('[name="PHONE_edit"]').val(PHONE);
            //$('[name="NIKAH_edit"]').val(NIKAH);
            //$('[name="SPSS_edit"]').val(SPSS);
            //$('[name="NM_SPSS_edit"]').val(NM_SPSS);
            $('[name="ALUMNI_edit"]').val(ALUMNI);
            $('[name="IZIN_edit"]').val(IZIN);
        });
        
        //update record to database
        /*$('#update').on('click',function(){
            var ID = $('#ID_edit').val();
            var Photo = $('#idfile').val();
            var NAMA = $('#NAMA_edit').val();
            var KELAMIN = $('#KELAMIN_edit').val();
            var LAHIR = $('#LAHIR_edit').val();
            var TANGGAL = $('#TANGGAL_edit').val();
            var DARAH = $('#DARAH_edit').val();
            var AGAMA = $('#AGAMA_edit').val();
            var ALAMAT = $('#ALAMAT_edit').val();
            var PHONE = $('#PHONE_edit').val();
            var NIKAH = $('#NIKAH_edit').val();
            var SPSS = $('#SPSS_edit').val();
         
            var ALUMNI = $('#ALUMNI_edit').val();
            var IZIN = $('#IZIN_edit').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('dokter_controllers/update')?>",
                dataType : "JSON",
                data : {ID:ID, Photo:Photo, NAMA:NAMA , NIKAH:NIKAH, KELAMIN:KELAMIN , LAHIR:LAHIR, TANGGAL:TANGGAL, DARAH:DARAH, AGAMA:AGAMA, ALAMAT:ALAMAT, PHONE:PHONE, SPSS:SPSS, ALUMNI:ALUMNI, IZIN:IZIN},
                success: function(data){
                   $('[name="ID_edit"]').val("");
                   $('[name="NAMA_edit"]').val("");
                   $('[name="NIKAH_edit"]').val("");
                   $('[name="KELAMIN_edit"]').val("");
                   $('[name="LAHIR_edit"]').val("");
                   $('[name="TANGGAL_edit"]').val("");
                   $('[name="DARAH_edit"]').val("");
                   $('[name="AGAMA_edit"]').val("");
                   $('[name="ALAMAT_edit"]').val("");
                   $('[name="PHONE_edit"]').val("");
                   $('[name="NIKAH_edit"]').val("");
                   $('[name="SPSS_edit"]').val("");
                    $('#edit_modal').modal('hide');
                    show_dokter();
                }
            });
            return false;
        });*/

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
                        if((i+1)%3==0){g="row";}
						else{g=" ";}
		                html +=    '<div class="'+g+'" >'+
                                    '<div class="col-md-4 col-sm-4 col-xs-12 profile_details">'+
                                        '<div class="well profile_view">'+
                                            '<div class="col-sm-12">'+
                                                '<h4 class="brief"><i>'+data[i].nm_sps+'</i></h4>'+
                                                '<div class="left col-xs-7">'+
                                                    '<h2>'+data[i].nm_dokter+'</h2>'+
                                                    '<p><strong>Alumni:</strong>'+data[i].alumni+' </p>'+
                                                    '<ul class="list-unstyled">'+
                                                        '<li><i class="fa fa-building"></i> Address: '+data[i].almt_tgl+'</li>'+
                                                        '<li><i class="fa fa-phone"></i> Phone #: '+data[i].no_telp+'</li>'+
                                                    '</ul>'+
                                                '</div>'+
                                                '<div class="right col-xs-5 text-center">'+
                                                    '<img src="<?php echo base_url();?>assets/images/Dokter/'+data[i].Photo+'" alt="" class="img-circle img-responsive">'+
                                                '</div>'+
                                            '</div>'+      
                                            '<div class="col-xs-12 bottom text-center">'+
                                                '<div class="col-xs-12 col-sm-6 emphasis">'+
                                                    '<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit" data-kd_dokter="'+data[i].kd_dokter+'" data-ph="'+data[i].Photo+'" data-nm_dokter="'+data[i].nm_dokter+'" data-jk="'+data[i].jk+'" data-tmp_lahir="'+data[i].tmp_lahir+'" data-tgl_lahir="'+data[i].tgl_lahir+'" data-gol_drh="'+data[i].gol_drh+'" data-agama="'+data[i].agama+'" data-almt_tgl="'+data[i].almt_tgl+'" data-no_telp="'+data[i].no_telp+'" data-stts_nikah="'+data[i].stts_nikah+'" data-kd_sps="'+data[i].kd_sps+'" data-alumni="'+data[i].alumni+'" data-no_ijn_praktek="'+data[i].no_ijn_praktek+'" data-nm_sps="'+data[i].nm_sps+'" >Edit</a>'+
                                                '</div>'+
                                                '<div class="col-xs-12 col-sm-6 emphasis">'+
                                                '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-kd_dokter="'+data[i].kd_dokter+'">Delete</a>'+'</td>'+
                                                '</div>'+
                                            '</div>'+
                                        '</div>'+
                                        '</div>'+
                                    '</div>';
                        
		            }
		            $('#show_data').html(html);
		        }

		    });
		}
		
		$('#btn_sps').on('click',function(){
            var id_sps = $('#SPSSS').val();
			show_spsdokter(id_sps);
            $('#spesialis_Model').modal('hide');
        });
    });
</script>