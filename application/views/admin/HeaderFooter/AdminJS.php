
  <!-- jQuery -->
<script src="<?php echo base_url('assets/admin/vendors/jquery/dist/jquery.min.js')?>"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url('assets/admin/vendors/bootstrap/dist/js/bootstrap.min.js')?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url('assets/admin/vendors/fastclick/lib/fastclick.js')?>"></script>
<!-- NProgress -->
<script src="<?php echo base_url('assets/admin/vendors/nprogress/nprogress.js')?>"></script>
<!-- bootstrap-daterangepicker -->
<script src="<?php echo base_url('assets/admin/vendors/moment/min/moment.min.js')?>"></script>
<script src="<?php echo base_url('assets/admin/vendors/bootstrap-daterangepicker/daterangepicker.js')?>"></script>
<!-- bootstrap-datetimepicker -->    
<script src="<?php echo base_url('assets/admin/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js')?>"></script>
<!-- Ion.RangeSlider -->
<script src="<?php echo base_url('assets/admin/vendors/ion.rangeSlider/js/ion.rangeSlider.min.js')?>"></script>
<!-- Bootstrap Colorpicker -->
<script src="<?php echo base_url('assets/admin/vendors/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js')?>"></script>
<!-- jquery.inputmask -->
<script src="<?php echo base_url('assets/admin/vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js')?>"></script>
<!-- jQuery Knob -->
<script src="<?php echo base_url('assets/admin/vendors/jquery-knob/dist/jquery.knob.min.js')?>"></script>
<!-- Cropper -->
<script src="<?php echo base_url('assets/admin/vendors/cropper/dist/cropper.min.js')?>"></script>
    
<!-- Initialize datetimepicker -->
<script>
    $('#myDatepicker').datetimepicker();
    
    $('#myDatepicker2').datetimepicker({
        format: 'YYYY-MM-DD'
    });
    
    $('#myDatepicker3').datetimepicker({
        format: 'hh:mm A'
    });
    
    $('#myDatepicker4').datetimepicker({
        ignoreReadonly: true,
        allowInputToggle: true
    });

    $('#datetimepicker6').datetimepicker();
    
    $('#datetimepicker7').datetimepicker({
        useCurrent: false
    });
    
    $("#datetimepicker6").on("dp.change", function(e) {
        $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
    });
    
    $("#datetimepicker7").on("dp.change", function(e) {
        $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
    });
</script>  
     <script src="<?php echo base_url('assets/admin/vendors/validator/validator.js')?>"></script>
    <!-- Dropzone.js -->
    <script src="<?php echo base_url('assets/admin/vendors/dropzone/dist/min/dropzone.min.js')?>"></script>
    <!-- validator -->
    <script src="<?php echo base_url('assets/admin/vendors/validator/validator.js')?>"></script>
    <!-- jQuery Smart Wizard -->
    <script src="<?php echo base_url('assets/admin/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js')?>"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo base_url('assets/admin/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')?>"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="<?php echo base_url('assets/admin/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js')?>"></script>
    <script src="<?php echo base_url('assets/admin/vendors/jquery.hotkeys/jquery.hotkeys.js')?>"></script>
    <script src="<?php echo base_url('assets/admin/vendors/google-code-prettify/src/prettify.js')?>"></script> 
    <!-- jQuery Tags Input -->
    <script src="<?php echo base_url('assets/admin/vendors/jquery.tagsinput/src/jquery.tagsinput.js')?>"></script>
    <!-- Switchery -->
    <script src="<?php echo base_url('assets/admin/vendors/switchery/dist/switchery.min.js')?>"></script>
    <!-- Select2 -->
    <script src="<?php echo base_url('assets/admin/vendors/select2/dist/js/select2.full.min.js')?>"></script>
    <!-- Parsley -->
    <script src="<?php echo base_url('assets/admin/vendors/parsleyjs/dist/parsley.min.js')?>"></script>
    <!-- Autosize -->
    <script src="<?php echo base_url('assets/admin/vendors/autosize/dist/autosize.min.js')?>"></script>
    <!-- jQuery autocomplete -->
    <script src="<?php echo base_url('assets/admin/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js')?>"></script>
    <!-- starrr -->
    <script src="<?php echo base_url('assets/admin/vendors/starrr/dist/starrr.js')?>"></script>
    <!-- PNotify -->
    <script src="<?php echo base_url('assets/admin/vendors/pnotify/dist/pnotify.js')?>"></script>
    <script src="<?php echo base_url('assets/admin/vendors/pnotify/dist/pnotify.buttons.js')?>"></script>
    <script src="<?php echo base_url('assets/admin/vendors/pnotify/dist/pnotify.nonblock.js')?>"></script>   
    <!-- Datatables -->
    <script src="<?php echo base_url('assets/admin/vendors/datatables.net/js/jquery.dataTables.min.js')?>"></script>
    <script src="<?php echo base_url('assets/admin/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/admin/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')?>"></script>
    <script src="<?php echo base_url('assets/admin/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/admin/vendors/datatables.net-buttons/js/buttons.flash.min.js')?>"></script>
    <script src="<?php echo base_url('assets/admin/vendors/datatables.net-buttons/js/buttons.html5.min.js')?>"></script>
    <script src="<?php echo base_url('assets/admin/vendors/datatables.net-buttons/js/buttons.print.min.js')?>"></script>
    <script src="<?php echo base_url('assets/admin/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')?>"></script>
    <script src="<?php echo base_url('assets/admin/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')?>"></script>
    <script src="<?php echo base_url('assets/admin/vendors/datatables.net-responsive/js/dataTables.responsive.min.js')?>"></script>
    <script src="<?php echo base_url('assets/admin/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')?>"></script>
    <script src="<?php echo base_url('assets/admin/vendors/datatables.net-scroller/js/dataTables.scroller.min.js')?>"></script>
    <script src="<?php echo base_url('assets/admin/vendors/jszip/dist/jszip.min.js')?>"></script>
    <script src="<?php echo base_url('assets/admin/vendors/pdfmake/build/pdfmake.min.js')?>"></script>
    <script src="<?php echo base_url('assets/admin/vendors/pdfmake/build/vfs_fonts.js')?>"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url('assets/admin/vendors/iCheck/icheck.min.js')?>"></script>
    <!-- morris.js -->
    <script src="<?php echo base_url('assets/admin/vendors/raphael/raphael.min.js')?>"></script>
    <script src="<?php echo base_url('assets/admin/vendors/morris.js/morris.min.js')?>"></script>
    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url('assets/admin/build/js/custom.min.js')?>"></script>
    
</body>
</html>