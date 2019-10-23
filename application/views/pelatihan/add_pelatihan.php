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
                        <h4 class="page-title">Formulir Tambah Data Pelatihan</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Pelatihan</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Tambah Data Pelatihan</li>
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
                            <form action="<?php echo base_url(). 'index.php/Pelatihan/AddingPel'; ?>" method="POST" class="form-horizontal" enctype="multipart/form-data">
                                <div class="card-body">
                                    <h4 class="card-title">Informasi Pelatihan</h4>
                                    <div class="form-group row">
                                        <label class="col-sm-2 text-right col-form-label">Nama Pelatihan : </label>
                                            <input type="text" class="form-control col-sm-10" placeholder="Isi Nama Pelatihan" name="nama_pelatihan">
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 text-right col-form-label">Jenis Pelatihan : </label>
                                            <select id="category" class="form-control form-white col-sm-10 select2 custom-select" data-placeholder="Pilih jenis pelatihan..." name="category" onchange="myFunction(event)">
                                                <option disabled selected>Choose Database Type</option>
                                                <?php foreach ($training as $key ) { ?>
                                                    
                                                <option value="<?php echo $key->name ?>" data-price="<?php echo $key->biaya ?>" data-kuota="<?php echo $key->kuota ?>"><?php echo $key->name ?></option>
                                                <?php } ?>

                                            </select>
                                    </div>                                   
                                    <div class="form-group row">
                                                <?php //foreach ($training as $key ) { ?>
                                        <label class="col-sm-2 text-right col-form-label">Informasi Biaya Pelatihan :</label>
                                        <input class="form-control col-sm-10" id="myText" type="text" disabled="true">
                                                <?php //} ?>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 text-right col-form-label">Kuota Pelatihan : </label>
                                            <input type="number" class="form-control col-sm-10" id="kuota" disabled="true" name="kuota">
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 text-right col-form-label">Peserta Terdaftar : </label>
                                            <label class="col-sm-2 col-form-label">misal 45 peserta </label>
                                            <div class="col-sm"  >
                                                <a href="javascript:void(0)" data-toggle="modal" data-target="#add-peserta" style="float: left;" class="btn btn-secondary ">Pilih peserta pelatihan ini</a>
                                             </div>
                                            <!-- <input type="text" class="form-control col-sm-10" name="nama_pelatihan"> -->
                                    </div> 
                                    <div class="form-group row">
                                        <label class="col-sm-2 text-right col-form-label">Instruktur Tersedia : </label>
                                            <label class="col-sm-2 col-form-label">misal 45 instruktur </label>
                                            <div class="col-sm"  >
                                                <a href="javascript:void(0)" data-toggle="modal" data-target="#add-instruktur" style="float: left;" class="btn btn-secondary ">Pilih instruktur pelatihan ini</a>
                                             </div>
                                            <!-- <input type="text" class="form-control col-sm-10" name="nama_pelatihan"> -->
                                    </div> 

                                    <div class="form-group row">
                                        <!-- <div class="col-sm-2"> -->
                                            <label class="col-sm-2 text-right col-form-label">Tanggal Mulai :</label>
                                        <!-- </div> -->
                                            <div class="input-group col-sm-10" style="padding-left: unset;" >
                                                <input name="start" type="text" class="form-control" id="example" placeholder="mm/dd/yyyy" data-date-format="YYYY/MM/DD HH:mm:ss">
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                </div>
                                             </div>
                                    </div>
                                       <div class="form-group row">
                                        <!-- <div class="col-sm-2"> -->
                                            <label class="col-sm-2 text-right col-form-label">Tanggal Selesai :</label>
                                        <!-- </div> -->
                                            <div class="input-group col-sm-10" style="padding-left: unset;" >
                                                <input name="end" type="text" class="form-control" id="example2" placeholder="mm/dd/yyyy" data-date-format="YYYY/MM/DD HH:mm:ss">
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                </div>
                                             </div>
                                        </div> 
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
                                                <a href="<?php echo base_url('index.php/instruktur'); ?>" class="btn btn-danger ">Cancel</a>
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
                            <div class="modal-header">
                                <h4 class="modal-title"><strong>Add</strong> a category</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                <!-- <form action="<?php// echo base_url(). 'index.php/Jadwal/addingToJadwal'; ?>" method="POST" class="form-horizontal" enctype="multipart/form-data"> -->
                                    <div class="row">
                                         <div class="col">
                                        <div class="card-body b-l calender-sidebar">
                                            <div id="calendar"></div>
                                        </div>
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

                <!-- Modal Add Category -->
                <div class="modal fade none-border" id="add-peserta">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title"><strong>Pilih Peserta Pelatihan</strong></h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                <!-- <form action="<?php// echo base_url(). 'index.php/Jadwal/addingToJadwal'; ?>" method="POST" class="form-horizontal" enctype="multipart/form-data"> -->
                                    <div class="form-group row">
                                         <div class="col">
                                          <div class="card-body b-l">

                                            
                                        
                                <table>
                                    <tr>
                                        <td><label class="customcheckbox m-b-20 form-label">
                                    <input type="checkbox" id="mainCheckbox" />
                                    <span class="checkmark"></span>
                                
                                </label></td>
                                <td>Pilih semua di page ini</td>
                                    </tr>
                                </table>
                                        <div class="table-responsive">

                                    <table class="table" id="zero_config>
                                        <thead class="thead-light">
                                            <tr>
                                                <th>#</th>
                                                <th scope="col">Nomor Peserta</th>
                                                <th scope="col">Nama Peserta</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody class="customtable">
                                            <tr>
                                                <th>
                                                    <label class="customcheckbox">
                                                        <input type="checkbox" class="listCheckbox" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </th>
                                                <td>Trident</td>
                                                <td>Internet Explorer 4.0</td>
                                               
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>

                                <br>
                                 <div class="row" style="justify-content: center;">
                                    <div class="col-md-4">
                                        <nav aria-label="Page navigation example">
                                              <ul class="pagination">
                                                <!-- <li class="page-item"><a class="page-link" href="#">Previous</a></li> -->
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <!-- <li class="page-item"><a class="page-link" href="#">Next</a></li> -->
                                              </ul>
                                        </nav>
                                    </div>
                                          </div>
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
    var money = 0;
    function myFunction(e) {
        document.getElementById("myText").value = $("option:selected", "#category").attr("data-price")
        document.getElementById("kuota").value = $("option:selected", "#category").attr("data-kuota")
    }
</script>
