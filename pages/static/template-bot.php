<script src="../../plugins/jQuery/jQuery-2.1.3.min.js"></script>
<script src="../../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../../plugins/input-mask/jquery.inputmask.js" type="text/javascript"></script>
<script src="../../plugins/input-mask/jquery.inputmask.date.extensions.js" type="text/javascript"></script>
<script src="../../plugins/input-mask/jquery.inputmask.extensions.js" type="text/javascript"></script>
<script src="../../plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
<script src="../../plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
<script src="../../plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
<script src="../../plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="../../plugins/iCheck/icheck.min.js" type="text/javascript"></script>
<script src='../../plugins/fastclick/fastclick.min.js'></script>
<script src="../../dist/js/app.js" type="text/javascript"></script>
<script src="../../dist/js/demo.js" type="text/javascript"></script>
<script type="text/javascript">
    $(function () {
        $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
        $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
        $("[data-mask]").inputmask();
        $('#reservation').daterangepicker();
        $('#daterange-btn').daterangepicker(
                {
                  ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract('days', 1), moment().subtract('days', 1)],
                    'Last 7 Days': [moment().subtract('days', 6), moment()],
                    'Last 30 Days': [moment().subtract('days', 29), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
                  },
                  startDate: moment().subtract('days', 29),
                  endDate: moment()
                },
        function (start, end) {
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
        );
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
          checkboxClass: 'icheckbox_minimal-blue',
          radioClass: 'iradio_minimal-blue'
        });
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
          checkboxClass: 'icheckbox_minimal-red',
          radioClass: 'iradio_minimal-red'
        });
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
          checkboxClass: 'icheckbox_flat-green',
          radioClass: 'iradio_flat-green'
        });
    });
</script>
<script type="text/javascript">
    $(function () {
      $("#example1").dataTable();
      $('#example2').dataTable({
        "bPaginate": true,
        "bLengthChange": false,
        "bFilter": false,
        "Sort": true,
        "bInfo": true,
        "bAutoWidth": false
     });
    });
</script>