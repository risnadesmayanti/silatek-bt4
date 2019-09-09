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
                        <h4 class="page-title">Formulir Tambah File Silabus</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Informasi Kumpulan Silabus</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Tambah file Silabus</li>
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
                    <div class="col-12">
                        <div class="card">
                            <form action="<?php echo base_url(). 'index.php/Silabus/AddingSlbs'; ?>" method="POST" class="form-horizontal" enctype="multipart/form-data">
                                <div class="card-body">
                                    <h4 class="card-title">Data Dokumen</h4>
                                    <div class="form-group row">
                                        <label class="col-sm-2 text-right col-form-label">Judul Silabus : </label>
                                            <input type="text" class="form-control col-sm-10" placeholder="Masukan Judul Silabus" name="judul_silabus" required>
                                    </div>
                                    <div class="form-group row">                                   
                                        <label class="col-sm-2 text-right col-form-label" >Kategori Materi Silabus :</label>
                                            <select class="select2 form-control col-sm-10 custom-select" style="height:36px;" name="kategori_file" required>
                                              <option>Teknik Industri</option>
                                              <option>Teknik Mesin</option>
                                              <option>Teknik Kelistrikan</option>
                                              <option>Teknik Informatika</option>
                                              <option>Teknik Tekstil</option>
                                            </select>
                                    </div>
                                    <div class="form-group row">
                                    <label class="col-sm-2 text-right col-form-label">Ringkasan :</label>
                                       <textarea class="col-sm-10" name="ringkasan" ></textarea>
                                  </div>
                                  <div class="form-group row">
                                    <label class="col-sm-2 text-right col-form-label">Upload Foto : </label>
                                    <div class="col-md-10">
                                        
                                            <input type="file"  name="userfile" required>
                                    
                                    </div>
                                </div>
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
                <!-- editor -->

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
        var quill = new Quill('#editor', {
            theme: 'snow'
        });

    </script>
</body>

</html>