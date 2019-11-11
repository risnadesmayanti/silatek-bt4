<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <!-- <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div> -->
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Detail Data Pelatihan</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Pelatihan</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Detail Data Pelatihan</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================= -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                                    <?php foreach($training as $i){ ?>
                            <form action="<?php echo base_url(). 'index.php/Pelatihan/updatingPel/'.$i->trainingId; ?>" method="POST" class="form-horizontal" enctype="multipart/form-data">
                                <div class="card-body">
                                    <h4 class="card-title">Informasi Pelatihan</h4>
                                    <div class="form-group row">
                                        <label class="col-sm-2 text-right col-form-label">Nama Pelatihan : </label>
                                            <input type="text" class="form-control col-sm-10" placeholder="Isi Nama Pelatihan" name="nama_pelatihan" value="<?php echo $i->name; ?>"  readonly="true" ondblclick="this.readOnly='';" id="nama_pelatihan">
                                    </div>    

                                    <!-- <div class="form-group row"> -->
                                        <!-- <label class="col-sm-2 text-right col-form-label">Kategori : </label> -->
                                    <!-- </div>         -->
                                   <div class="form-group row">
                                        <label class="col-sm-2 text-right col-form-label">Jenis Pelatihan : </label>
                                            <select id="category" value="<?php echo $i->category; ?>" class="form-control form-white col-sm-10 select2 custom-select" data-placeholder="Pilih jenis pelatihan..." name="category" onchange="myFunction(event)">
                                                <option value="<?php echo $i->category; ?>" selected><?php echo $i->category; ?></option>
                                                    
                                                <option value="IWE">IWE</option>
                                                <option value="IWIP">IWIP</option>
                                                <option value="IWI">IWI</option>
                                                <option value="IWS">IWS</option>
                                                <option value="IWP">IWP</option>
                                                <option value="WD">WD</option>
                                                <option value="NDT">NDT</option>
                                                <option value="RI">RI</option>
                                                <option value="CI">CI</option>
                                                

                                            </select>
                                    </div>          
                                    <div class="form-group row">
                                        <label class="col-sm-2 text-right col-form-label">Biaya Pelatihan : </label>
                                            <input type="number" class="form-control col-sm-10" placeholder="Masukkan biaya pelatihan" name="biaya_pelatihan" value="<?php echo $i->biaya; ?>"  readonly="true" ondblclick="this.readOnly='';" id="biaya_pelatihan">
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 text-right col-form-label">Kuota Pelatihan : </label>
                                            <input type="number" class="form-control col-sm-10" placeholder="Masukkan jumlah kuota pelatihan ini" name="kuota" value="<?php echo $i->kuota; ?>"  readonly="true" ondblclick="this.readOnly='';" id="kuota">
                                    </div>             
                                         <!-- <div class="border-top"> -->
                                            <div class="card-body"  style="float: right;">
                                                <button type="submit" class="btn btn-success">Save</button>
                                            </div>
                                        <!-- </div> -->

                                            
                                        </div>                                     
                                </div>
                                </div>
                            </form>
                                
                        </div>

                        <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <!-- <form action="<?php //echo base_url(). 'index.php/Pelatihan/AddingPel'; ?>" method="POST" class="form-horizontal" enctype="multipart/form-data"> -->
                            <form action="<?php echo base_url(). 'index.php/Pelatihan/AddingToJadwal'; ?>" method="POST" class="form-horizontal" enctype="multipart/form-data">
                                      <input type="hidden" name="id" value="<?php echo $i->trainingId; ?>" id="id">
                                      <input type="hidden" name="category" value="<?php echo $i->category; ?>">    
                                        <?php } ?>
                                <div class="card-body">
                                    <h4 class="card-title">Formulir Penjadwalan</h4>
                                    <div class="form-group row">
                                    <?php foreach($jadwal as $i){ ?>
                                        <!-- <div class="col-sm-2"> -->
                                            <label class="col-sm-2 text-right col-form-label">Tanggal Mulai :</label>
                                        <!-- </div> -->
                                            <div class="input-group col-sm-10" style="padding-left: unset;" >
                                            <input name="start" type="text" class="form-control" id="example" placeholder="mm/dd/yyyy" data-date-format="YYYY/MM/DD HH:mm:ss" value="<?php echo $i->start; ?>" readonly="true" ondblclick="this.readOnly='';">             
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="fa fa-calendar" id="example"></i></span>
                                                </div>
                                             </div>
                                    </div>
                                       <div class="form-group row">
                                        <!-- <div class="col-sm-2"> -->
                                            <label class="col-sm-2 text-right col-form-label">Tanggal Selesai :</label>
                                        <!-- </div> -->
                                            <div class="input-group col-sm-10" style="padding-left: unset;" >
                                                <input name="end" type="text" class="form-control" id="example2" placeholder="mm/dd/yyyy" data-date-format="YYYY/MM/DD HH:mm:ss" value="<?php echo $i->end; ?>" readonly="true" ondblclick="this.readOnly='';">
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                </div>
                                             </div>
                                        </div> 
                                <?php } ?>
                                         <div class="form-group row">
                                        <div class="col-sm-2">
                                            <!-- <label class="col-sm-2 text-right col-form-label">Tanggal Selesai :</label> -->
                                        </div>
                                            <div class="col-sm-10"  >
                                                <a href="javascript:void(0)" data-toggle="modal" data-target="#add-new-event" style="float: right;" class="btn btn-primary ">Lihat Jadwal yang tersedia</a>
                                                </div>
                                             </div>
                                        </div> 
                                        <div class="border-top">
                                            <div class="card-body">
                                                <a href="<?php echo base_url('index.php/Pelatihan'); ?>" class="btn btn-danger ">Cancel</a>
                                                <button type="submit" class="btn btn-success">Save</button>
                                            </div>
                                        </div>
                                    
                                </div>
                                </div>
                                
                        </div>
                    </div>
                    
                </div>
                </form> 
                <!-- Modal Add Category -->
                <div class="modal fade none-border" id="add-new-event">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <?php foreach($training as $i){ ?>
                              <form method="POST" class="form-horizontal" enctype="multipart/form-data" action="<?php echo base_url(). 'index.php/Pelatihan/addingToJadwal'; ?>">
                            <div class="modal-header">
                                <h4 class="modal-title"><strong>Add Jadwal <?php echo $i->name; ?> </strong></h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                <!-- <form action="<?php echo base_url(). 'index.php/Jadwal/addingToJadwal'; ?>" method="POST" class="form-horizontal" enctype="multipart/form-data"> -->
                                    <div class="row">
                                      <div class="col-3">
                                        <div class="card-body b-l">

                                        <input type="hidden" name="id" id="id" value="<?php echo $i->trainingId; ?>">
                                        <input type="hidden" name="category" value="<?php echo $i->category; ?>">
                                      <!--   <div class="form-group row">
                                          <label class="col-form-label">Nama Pelatihan : </label>
                                              <input type="text" class="form-control" placeholder="Isi Nama Pelatihan" name="nama_pelatihan" value="<?php echo $i->name; ?>"  readonly="true" ondblclick="this.readOnly='';" id="nama_pelatihan">
                                        </div>  -->
                                      <?php }?>
                                          <div class="form-group row">
                                            <label class="text-right col-form-label">Tanggal dan Waktu Mulai :</label>
                                              <div class="input-group" style="padding-left: unset;" >
                                                <input name="start" type="text" class="form-control" id="example" placeholder="mm/dd/yyyy" data-date-format="YYYY/MM/DD HH:mm:ss">
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                </div>
                                               </div>
                                          </div>
                                          <div class="form-group row">
                                            <label class="text-right col-form-label">Tanggal dan Waktus Selesai :</label>
                                              <div class="input-group" style="padding-left: unset;" >
                                                <input name="end" type="text" class="form-control" id="example2" placeholder="mm/dd/yyyy" data-date-format="YYYY/MM/DD HH:mm:ss">
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                </div>
                                               </div>
                                          </div>
                                      </div>
                                      </div>
                                         <div class="col-9">
                                        <div class="card-body b-l calender-sidebar">
                                            <div id="calendar"></div>
                                        </div>
                                    </div>
                                    </div>
                                    
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success" id="savebtn">Save</button>
                                </form>
                                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
        
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

    <script type="text/javascript">
      $(document).ready(function(){
          // save comment to database
          $(document).on('click', '#savebtn', function(){
            var id = $('#id').val();
            var nama_pelatihan = $('#nama_pelatihan').val();
            var biaya_pelatihan = $('#biaya_pelatihan').val();
            var category = $('#category').val();
            var kuota = $('#kuota').val();
            var start = $('#example').val();
            var end = $('#example2').val();

            $.ajax({
              url: 'http://localhost/silatek-bt4/index.php/Pelathan/AddingToJadwal',
              type: 'POST',
              data: {
                'id': NULL,
                'id_pelatihan': id,
                'start': start,
                'end': end,
                'color': '#39B54A',
              },
              success: function(response){
                alert("Event added");
                window.location='http://localhost/silatek-bt4/index.php/Pelatihan'
              }
            });
          });
    </script>

