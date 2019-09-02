<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Calendar</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="">
                                <div class="row">
                                    <div class="col-lg-3 border-right p-r-0">
                                        <div class="card-body border-bottom">
                                            <h4 class="card-title m-t-10">Drag & Drop Event</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div id="calendar-events" class="">
                                                      <?php foreach ($pelatihan as $key) { ?>
                                                        <div class="calendar-events m-b-20" data-class="bg-<?php echo $key->category;?>"><i class="fa fa-circle text-<?php echo $key->category;?> m-r-10"></i><?php echo $key->nama;?></div>
                                                      <?php } ?>
                                                        
                                                    </div>
                                                    <!-- checkbox -->
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="drop-remove">
                                                        <label class="custom-control-label" for="drop-remove">Remove after drop</label>
                                                    </div>
                                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#add-new-event" class="btn m-t-20 btn-info btn-block waves-effect waves-light">
                                                            <i class="ti-plus"></i> Add New Event
                                                        </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="card-body b-l calender-sidebar">
                                            <div id="calendar"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- BEGIN MODAL -->
                <div class="modal none-border" id="my-event">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title"><strong>Add Event</strong></h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body"></div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-success save-event waves-effect waves-light">Create event</button>
                                <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Modal Add Category -->
                <div class="modal fade none-border" id="add-new-event">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title"><strong>Add</strong> a category</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                <form action="<?php echo base_url(). 'index.php/Jadwal/addingToJadwal'; ?>" method="POST" class="form-horizontal" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="control-label">Nama Pelatihan</label>
                                            <input class="form-control form-white" placeholder="Enter name" type="text" name="nama_pelatihan" />
                                        </div>
                                        <div class="col-md-6">
                                            <label class="control-label">Choose Category Color</label>
                                            <select class="form-control form-white" data-placeholder="Choose a color..." name="category">
                                                <option value="success">Teknik Mesin</option>
                                                <option value="danger">Teknik Listrik</option>
                                                <option value="info">Teknik Sipil</option>
                                                <option value="primary">Teknik Kimia</option>
                                                <option value="warning">Teknik Industri</option>
                                                <option value="inverse">Perbetonan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="control-label">Tanggal Mulai Pelatihan</label>
                                            <div class="input-group" >
                                    <input name="start" type="text" class="form-control" id="example" placeholder="mm/dd/yyyy" data-date-format="YYYY/MM/DD HH:mm:ss">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                    </div>
                                </div>

                                        </div>
                                        <div class="col-md-6">
                                            <label class="control-label">Tanggal Selesai Pelatihan</label>
                                             <div class="input-group" >
                                            <input name="end" type="text" class="form-control" id="example2" placeholder="mm/dd/yyyy" data-date-format="YYYY/MM/DD HH:mm:ss">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                            </div>
                                </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                      <div class="col-md-6">
                                        <label class="col-form-label">Biaya Pelatihan : </label>
                                            <input type="number" class="form-control" placeholder="Isi Nama Lengkap" name="biaya_pelatihan">
                                        </div>
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success">Save</button>
                                </form>
                                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END MODAL -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <script language="JavaScript" type="text/javascript">
                
            </script>
    <script src="<?php echo base_url(); ?>assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/dist/js/jquery.ui.touch-punch-improved.js"></script>
    <script src="<?php echo base_url(); ?>assets/dist/js/jquery-ui.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url(); ?>assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url(); ?>assets/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url(); ?>assets/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url(); ?>assets/dist/js/custom.min.js"></script>
     <!-- this page js -->
    <script src="<?php echo base_url(); ?>assets/libs/moment/min/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/libs/fullcalendar/dist/fullcalendar.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/dist/js/pages/calendar/cal-init.js"></script>
    <!-- <script type="text/javascript" src="<?php echo base_url(); ?>assets/js-extra/datetimepicker/bootstrap-datetimepicker.de.js" charset="UTF-8"></script> -->
    <script src="<?php echo base_url(); ?>assets/js-extra/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
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
      events    : events,

    })

    </script>
</body>
