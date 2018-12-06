 
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>ADD BLOG</h3>
            </div>
                           
            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search"></div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-md-12 col-sm-12 col-xs-12">
        <form id="submit">
            <div class="x_panel">
                <div class="x_title">
                <div class="form-group">
                    <label class="control-label col-md-1 col-sm-3 col-xs-12">Gambar</label>
                    <div class="col-md-11 col-sm-9 col-xs-12">
                        <input type="file" name="file">
                    </div>
                 </div>
                    <br/><br/>
                  <div class='col-sm-4'>
                      <div class="form-group">
                      <label class="control-label col-md-6 col-sm-3 col-xs-12">Tanggal Posting</label>
                          <div class='input-group date' id='myDatepicker2'>
                              <input type='text' id="Tanggal" name="Tanggal" required="" class="form-control" />
                              <span class="input-group-addon">
                                  <span class="glyphicon glyphicon-calendar"></span>
                              </span>
                          </div>
                      </div>
                  </div>
                  
                  <div class="clearfix"></div>
              </div>

              <div class="form-group">
                  <label class="control-label col-md-1 col-sm-3 col-xs-12">JUDUL</label>
                  <div class="col-md-11 col-sm-9 col-xs-12">
                      <textarea class="resizable_textarea form-control" id="Judul" name="Judul" required="" placeholder="Silahkan masukkan judul postingan"></textarea>
                  </div>
              </div>

              <div class="x_content">
                  <div id="alerts"></div>
                    
                  <textarea class="editor-wrapper col-md-12" id="Isi" name="Isi" style="display " required=""></textarea>
                        
                  <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button class="btn btn-success" id="btn_save" type="submit">Save</button>
                  </div>

                  <div id="data-container"></div>
                  <div class="ln_solid"></div>
                    
              </div>
          </div>
        </form>
      </div> 
  </div>
</div>
<!-- /page content -->

<script type="text/javascript" src="<?php echo base_url().'assets/jquery-3.2.1.js'?>"></script>

<script type="text/javascript">
    $(document).ready(function(){

        //Save product
        /*$('#btn_save').on('click',function(){
            var Tanggal = $('#Tanggal').val();
            var Judul = $('#Judul').val();
            var Isi = $('#Isi').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('Blog_controllers/save')?>",
                dataType : "JSON",
                data : {Tanggal:Tanggal, Judul:Judul, Isi:Isi},
                success: function(data){
                    $('[name="Tanggal"]').val("");
                    $('[name="Judul"]').val("");
                    $('[name="Isi"]').val("");
                    
                    alert('Blog Berhasil Ditambahkan')
                }
            });
            return false;
        });*/

        $('#submit').submit(function(e){
		    e.preventDefault();
		        $.ajax({
		            url  : "<?php echo site_url('Blog_controllers/save')?>",
		            type:"post",	
		            data:new FormData(this), //this is formData
		            processData:false,
		            contentType:false,
		            cache:false,
		            async:false,
		            success: function(data){
						$('[name="Tanggal"]').val("");
                        $('[name="Judul"]').val("");
                        $('[name="Isi"]').val("");
                    
                        alert('Blog Berhasil Ditambahkan')
		           	}
		        });
		});

    });
</script>