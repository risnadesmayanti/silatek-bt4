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
                        <h4 class="page-title">Formulir Tambah Data Instruktur</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Instruktur</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Tambah Data Instruktur</li>
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
                            <form action="<?php echo base_url(). 'index.php/Instruktur/AddingIns'; ?>" method="POST" class="form-horizontal" enctype="multipart/form-data">
                                <div class="card-body">
                                    <h4 class="card-title">Personal Info</h4>
                                    <div class="form-group row">
                                        <label class="col-sm-2 text-right col-form-label">Nama Lengkap : </label>
                                            <input type="text" class="form-control col-sm-10" placeholder="Isi Nama Lengkap" name="nama">
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 text-right col-form-label">Tempat Lahir : </label>
                                            <input type="text" class="form-control col-sm-10" placeholder="Contoh : Bandung" name="tempat_lahir">
                                    </div>                                   
                                    <div class="form-group row">
                                    <label class="col-sm-2 text-right col-form-label">Tanggal Lahir : </label>
                                      <input type="text" class="form-control col-sm-10" id="datepicker-autoclose" placeholder="mm/dd/yyyy" name="tgl_lahir">
                                    </div>   
                                    
                                    <div class="form-group row">
                                        <label class="col-sm-2 text-right control-label col-form-label">Alamat Lengkap :</label>
                                        <!-- <div class="col-sm-10"> -->
                                            <textarea class="form-control col-sm-10" name="alamat"></textarea>
                                        <!-- </div> -->
                                    </div>
                                       <div class="form-group row">
                                          <label class="col-sm-2 text-right col-form-label">No Kontak : </label>
                                              <input type="text" class="form-control col-sm-10" placeholder="Contoh : Bandung" name="no_kontak">
                                      </div>  
                                    <div class="form-group row">
                                    <label class="col-sm-2 text-right col-form-label">Upload Foto : </label>
                                    <div class="col-md-10">
                                        
                                            <input type="file"  name="image" required>
                                    
                                    </div>
                                </div>
                                </div>
                                
                        </div>
                    </div>
                    
                </div>
                <!-- editor -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Informasi Keahlian</h4>
                                <!-- Create the editor container -->
                               <div class="form-group row">
                                  <label class="col-sm-2 text-right col-form-label">Asal Instansi : </label>
                                      <input type="text" class="form-control col-sm-10" placeholder="Masukan Asal Instansi" name="asal_instansi">
                              </div>
                              <div class="form-group row">                                   
                                  <label class="col-sm-2 text-right col-form-label" >Spesialisasi :</label>
                                      <select class="select2 form-control col-sm-10 custom-select" style="height:36px;" name="spesialisasi" required>
                                        <option>Teknik Industri</option>
                                        <option>Teknik Mesin</option>
                                        <option>Teknik Kelistrikan</option>
                                        <option>Teknik Informatika</option>
                                        <option>Teknik Tekstil</option>
                                      </select>
                                    
                              </div>
                              <div class="form-group row">
                                        <label class="col-sm-2 text-right control-label col-form-label">Keterangan :</label>
                                        <!-- <div class="col-sm-10"> -->
                                            <textarea class="form-control col-sm-10" name="ket"></textarea>
                                        <!-- </div> -->
                                    </div>
                              <div class="border-top">
                                    <div class="card-body">
                                        <a href="<?php echo base_url('index.php/instruktur'); ?>" class="btn btn-danger ">Cancel</a>
                                        <button type="submit" class="btn btn-success">Save</button>
                                    </div>
                                </div>
                            </form> 
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved by Matrix-admin. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.
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
   
</body>

