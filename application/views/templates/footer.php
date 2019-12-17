 <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                Made with love for B4T. <a href="https://about.me/faisalsyfl">Contact Us</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url(); ?>assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url(); ?>assets/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url(); ?>assets/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url(); ?>assets/dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!-- <script src="<?php echo base_url(); ?>dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="<?php echo base_url(); ?>assets/libs/flot/excanvas.js"></script>
    <script src="<?php echo base_url(); ?>assets/libs/flot/jquery.flot.js"></script>
    <script src="<?php echo base_url(); ?>assets/libs/flot/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url(); ?>assets/libs/flot/jquery.flot.time.js"></script>
    <script src="<?php echo base_url(); ?>assets/libs/flot/jquery.flot.stack.js"></script>
    <script src="<?php echo base_url(); ?>assets/libs/flot/jquery.flot.crosshair.js"></script>
    <script src="<?php echo base_url(); ?>assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/dist/js/pages/chart/chart-page-init.js"></script>
    <!-- <script src="<?php echo base_url(); ?>assets/dist/js/Chart.bundle.min.js"></script> -->
    <!-- <script src="<?php echo base_url(); ?>assets/dist/js/Chart.bundle.js"></script> -->
    <script src="<?php echo base_url(); ?>assets/extra-libs/DataTables/datatables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/libs/select2/dist/js/select2.full.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/libs/select2/dist/js/select2.min.js"></script>
    
    <script src="<?php echo base_url(); ?>assets/libs/moment/min/moment.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/libs/fullcalendar/dist/fullcalendar.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/dist/js/pages/calendar/cal-init.js"></script>
    <script src="<?php echo base_url(); ?>assets/js-extra/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="<?php echo base_url(); ?>assets/extra-libs/multicheck/jquery.multicheck.js"></script>

    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"> </script>
    
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();
    </script>
    <script>
        $(function () {
          $('#example').datetimepicker();
          $('#example2').datetimepicker();

        });
    </script>
     <script type="text/javascript">
    var events = <?php echo json_encode($data) ?>;
    
    var date = new Date()
    var d    = date.getDate(),
        m    = date.getMonth(),
        y    = date.getFullYear()
           
    $('#calendar').fullCalendar({
        selectable: true,
        selectHelper: true,
        editable: true,
        displayEventTime: false,
        eventLimit: true,

    
      header    : {
        left  : 'prev,next today',
        center: 'title',
        right : 'month,agendaWeek,agendaDay'
      },
      buttonText: {
        today: 'today',
        month: 'month',
        week : 'week',
        day  : 'day'
      },

      eventClick: function (event, jsEvent, view) {
        $('.modal-title').html('Detail Jadwal');
        $('#ModalIsi').html(event.title);
        $('#ModalId').val(event.id);
        $('#ModalStart').html(event.start);
        $('#ModalEnd').val(event.end);

        $('#my-event').modal();

        $('.event-delete').click(function (events) {
            var id = $('#ModalId').val();

          $.ajax({
           type:"POST",
           data:{id:id},
           url:"http://localhost/silatek-bt4/index.php/Jadwal/delete/"+id,
           success:function()
           {
            // calendar.fullCalendar('refetchEvents');
            $('#calendar').fullCalendar('removeEvents', id);
            $("#calendar").fullCalendar('addEventSource', events);
            $('#ModalVistoria').modal('hide');
            alert("Event Removed");
            window.location='http://localhost/silatek-bt4/index.php/Jadwal'
           }
          });

        });
    },

      events    : events,

    })

    </script>
    <script>
        $(function () {
          $('#example').datetimepicker();
          $('#example2').datetimepicker();

        });
    </script>


    <script>
        //***********************************//
        // For select 2
        //***********************************//
        $(".select2").select2();

        /*colorpicker*/
        $('.demo').each(function() {
        //
        // Dear reader, it's actually very easy to initialize MiniColors. For example:
        //
        //  $(selector).minicolors();
        //
        // The way I've done it below is just for the demo, so don't get confused
        // by it. Also, data- attributes aren't supported at this time...they're
        // only used for this demo.
        //
        $(this).minicolors({
                control: $(this).attr('data-control') || 'hue',
                position: $(this).attr('data-position') || 'bottom left',

                change: function(value, opacity) {
                    if (!value) return;
                    if (opacity) value += ', ' + opacity;
                    if (typeof console === 'object') {
                        console.log(value);
                    }
                },
                theme: 'bootstrap'
            });

        });
        /*datwpicker*/
        jQuery('.mydatepicker').datepicker();
        jQuery('#datepicker-autoclose').datepicker({
            autoclose: true,
            todayHighlight: true
        });
        jQuery('#datepicker-autoclose2').datepicker({
            autoclose: true,
            todayHighlight: true
        });
        
        // $(function () {
        //   $('#example').datetimepicker();
        //   $('#example2').datetimepicker();

        // });

         jQuery('#datepicker-autoclose2').datetimepicker();

    </script>
   

</body>

</html>