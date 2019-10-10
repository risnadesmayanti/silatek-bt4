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
                                            <select class="form-control form-white col-sm-10" data-placeholder="Pilih jenis pelatihan..." name="category">
                                                <option value="Teknik Mesin">Teknik Mesin</option>
                                                <option value="Teknik Listrik">Teknik Listrik</option>
                                                <option value="Teknik Sipil">Teknik Sipil</option>
                                                <option value="Teknik Kimia">Teknik Kimia</option>
                                                <option value="Teknik Industri">Teknik Industri</option>
                                                <option value="Perbetonan">Perbetonan</option>
                                            </select>
                                    </div>                                   
                                    <div class="form-group row">
                                        <label class="col-sm-2 text-right col-form-label">Biaya Pelatihan : </label>
                                            <input type="number" class="form-control col-sm-10" placeholder="Masukkan biaya pelatihan" name="biaya_pelatihan">
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 text-right col-form-label">Kuota Pelatihan : </label>
                                            <input type="number" class="form-control col-sm-10" placeholder="Masukkan jumlah kuota pelatihan ini" name="kuota">
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

