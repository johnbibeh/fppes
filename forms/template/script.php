<script src="/FPPES/assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="/FPPES/assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="/FPPES/assets/js/main.js" type="text/javascript"></script>
    <script src="/FPPES/assets/lib/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/FPPES/assets/lib/prettify/prettify.js" type="text/javascript"></script>
    <script src="/FPPES/assets/lib/parsley/parsley.min.js" type="text/javascript"></script>
    <script src="/FPPES/assets/lib/datatables/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="/FPPES/assets/lib/datatables/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
    <script src="/FPPES/assets/lib/datatables/plugins/buttons/js/dataTables.buttons.js" type="text/javascript"></script>
    <script src="/FPPES/assets/lib/datatables/plugins/buttons/js/buttons.html5.js" type="text/javascript"></script>
    <script src="/FPPES/assets/lib/datatables/plugins/buttons/js/buttons.flash.js" type="text/javascript"></script>
    <script src="/FPPES/assets/lib/datatables/plugins/buttons/js/buttons.print.js" type="text/javascript"></script>
    <script src="/FPPES/assets/lib/datatables/plugins/buttons/js/buttons.colVis.js" type="text/javascript"></script>
    <script src="/FPPES/assets/lib/datatables/plugins/buttons/js/buttons.bootstrap.js" type="text/javascript"></script>

    <script src="/FPPES/assets/lib/datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
    <script src="/FPPES/assets/lib/daterangepicker/js/daterangepicker.js" type="text/javascript"></script>
    <script src="/FPPES/assets/lib/jquery.gritter/js/jquery.gritter.js" type="text/javascript"></script>
    <script src="/FPPES/assets/lib/pines-notify/pnotify.min.js" type="text/javascript"></script>  
    <script src="/FPPES/assets/lib/bootstrap-multiselect/js/bootstrap-multiselect.js" type="text/javascript"></script>
    <script src="/FPPES/assets/lib/multiselect/js/jquery.multi-select.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        //initialize the javascript
        App.init();
        App.uiNotifications();
        App.dataTables();
        $('form').parsley();
        App.formElements();
        App.formMultiselect();
        App.pageProfile();
      });
    </script>