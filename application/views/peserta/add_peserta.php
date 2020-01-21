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
                        <h4 class="page-title">Formulir Tambah Data Peserta</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Peserta</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Tambah Data Peserta</li>
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
                            <form action="<?php echo base_url(). 'index.php/Peserta/AddingPeserta'; ?>" method="POST" class="form-horizontal" enctype="multipart/form-data">
                                <div class="card-body">
                                    <h4 class="card-title">Informasi Peserta</h4>
                                    <div class="form-group row">
                                        <label class="col-sm-2 text-right col-form-label">Nama Peserta : </label>
                                            <input type="text" class="form-control col-sm-10" placeholder="Isi Nama Peserta" name="nama_peserta">
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 text-right col-form-label">Usia </label>
                                           <input type="number" class="form-control col-sm-10" placeholder="Isi Usia Peserta" name="usia"> 
                                    </div>                                   
                                    <div class="form-group row">
                                        <label class="col-sm-2 text-right col-form-label"> Jenis Kelamin :</label>
                                        <select id="category" class="form-control form-white col-sm-10 select2 custom-select" name="gender" onchange="myFunction(event)">
                                                <option disabled selected>Choose Gender Type</option>
                                                <option value="laki-laki">Laki-laki</option>
                                                <option value="perempuan">Perempuan</option>
                                            </select>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 text-right col-form-label">Pendidikan Terakhir : </label>
                                            <select id="pendidikan" class="form-control form-white col-sm-10 select2 custom-select" name="pendidikan" onchange="myFunction(event)">
                                                <option disabled selected>Pilih pendidikan terakhir ... </option>
                                                <option value="sma">SMA/SMK Sederajat</option>
                                                <option value="diploma">Diploma III</option>
                                                <option value="sarjana">Sarjana</option>
                                                <option value="magister">Magister</option>
                                                <option value="doktor">Doktoral</option>
                                            </select>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 text-right col-form-label">Asal Jurusan : </label>
                                            <input type="text" class="form-control col-sm-10" placeholder="Isi Nama Jurusan Keilmuan yang terakhir diambil" name="jurusan">
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 text-right col-form-label">Daftar Pelatihan : </label>
                                            <select id="pelatihan" class="form-control form-white col-sm-10 custom-select" name="pelatihan" onchange="myFunction(event)">
                                                <option disabled selected>Pilih pelatihan yang diambil ... </option>
                                                <?php foreach ($training as $key) { ?>
                                                <option value="<?php echo $key->trainingId; ?>"><?php echo $key->name; ?> - <?php 
                                                $date = date_create($key->start);
                                                echo date_format($date, 'd/m/Y H:i:s'); ?></option>
                                                <?php } ?>
                                            </select>
                                    </div>
                                    <div class="form-group row">
                                         <label class="col-sm-2 text-right col-form-label">Apakah sudah pelatihan NDT ? : </label>
                                        <div class="col-md-10">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" id="customControlValidation1" name="ndt"  value="yes" required>
                                                <label class="custom-control-label" for="customControlValidation1">Yes</label>
                                            </div>
                                             <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" id="customControlValidation2" value="no" name="ndt" required>
                                                <label class="custom-control-label" for="customControlValidation2">No</label>
                                            </div>
                                        </div>
                                    </div>
                                        
                                    <div class="form-group row">
                                        <label class="col-sm-2 text-right col-form-label">Jika ya, sebutkan pelatihan NDT tersebut : </label>
                                            <textarea class="form-control col-sm-10" name="deskripsi"></textarea>
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
            var optionSelected = $("option:selected", '#category');
            money = optionSelected.attr("data-price");
            document.getElementById("myText").value = e.target.value;
        }
    </script>

<script type="text/javascript">
    var money = 0;
    function myFunction(e) {
        document.getElementById("myText").value = $("option:selected", "#category").attr("data-price")
        document.getElementById("kuota").value = $("option:selected", "#category").attr("data-kuota")
    }
</script>