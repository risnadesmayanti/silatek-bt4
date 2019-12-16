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
                            <?php foreach($peserta as $i){ ?>
                            <form action="<?php echo base_url(). 'index.php/Peserta/updatingPeserta/'.$i->id; ?>" method="POST" class="form-horizontal" enctype="multipart/form-data">
                                <div class="card-body">
                                    <h4 class="card-title">Informasi Peserta</h4>
                                    <div class="form-group row">
                                        <label class="col-sm-2 text-right col-form-label">Nama Peserta : </label>
                                            <input type="text" class="form-control col-sm-10" placeholder="Isi Nama Peserta" name="nama_peserta" value="<?php echo $i->nama; ?>"  readonly="true" ondblclick="this.readOnly='';">
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 text-right col-form-label">Usia </label>
                                           <input type="number" class="form-control col-sm-10" placeholder="Isi Usia Peserta" name="usia" value="<?php echo $i->usia; ?>"  readonly="true" ondblclick="this.readOnly='';"> 
                                    </div>                                   
                                    <div class="form-group row">
                                        <label class="col-sm-2 text-right col-form-label"> Jenis Kelamin :</label>
                                        <select id="category" class="form-control form-white col-sm-10 select2 custom-select" name="gender" onchange="myFunction(event)" readonly="true" ondblclick="this.readOnly='';">
                                                <option value="<?php echo $i->sex; ?>" disabled><?php echo $i->sex; ?></option>
                                                <option value="Laki-laki">Laki-laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 text-right col-form-label">Pendidikan Terakhir : </label>
                                            <select id="pendidikan" class="form-control form-white col-sm-10 select2 custom-select" name="pendidikan" onchange="myFunction(event)">
                                                <option value="<?php echo $i->pendidikan; ?>" selected><?php echo $i->pendidikan; ?></option>
                                                <option value="SMA">SMA/SMK Sederajat</option>
                                                <option value="Diploma">Diploma III</option>
                                                <option value="Sarjana">Sarjana</option>
                                                <option value="Magister">Magister</option>
                                                <option value="Doktor">Doktoral</option>
                                            </select>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 text-right col-form-label">Asal Jurusan : </label>
                                            <input type="text" class="form-control col-sm-10" placeholder="Isi Nama Jurusan Keilmuan yang terakhir diambil" name="jurusan" value="<?php echo $i->jurusan; ?>"  readonly="true" ondblclick="this.readOnly='';">
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 text-right col-form-label">Daftar Pelatihan : </label>
                                            <select id="pelatihan" class="form-control form-white col-sm-10 custom-select" name="pelatihan" onchange="myFunction(event)">
                                                <option value="<?php echo $i->training; ?>" selected><?php echo $i->training; ?></option>
                                                <?php foreach ($training as $key) { ?>
                                                <option value="<?php echo $key->name; ?>"><?php echo $key->name; ?></option>
                                                <?php } ?>
                                            </select>
                                    </div>
                                    <div class="form-group row">
                                         <label class="col-sm-2 text-right col-form-label">Apakah sudah pelatihan NDT ? : </label>
                                        <div class="col-md-10">
                                            <select id="ndt" class="form-control form-white col-sm-10 select2 custom-select" name="ndt" onchange="myFunction(event)">
                                                <option value="<?php echo $i->status_ndt; ?>" selected><?php if ($i->status_ndt == '0') {
                                                    echo "Tidak";
                                                }else {
                                                    echo "Ya";
                                                }  ?>
                                                   
                                                </option>
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                    </div>
                                        
                                    <div class="form-group row">
                                        <label class="col-sm-2 text-right col-form-label">Jika ya, sebutkan pelatihan NDT tersebut : </label>
                                            <textarea class="form-control col-sm-10" name="deskripsi" value="<?php echo $i->deskripsi; ?>"  readonly="true" ondblclick="this.readOnly='';"></textarea>
                                    </div>
                                    </div> 
                                        <div class="border-top">
                                            <div class="card-body">
                                                <a href="<?php echo base_url('index.php/Peserta'); ?>" class="btn btn-danger ">Cancel</a>
                                                <button type="submit" class="btn btn-success">Save</button>
                                            <?php } ?>
                                            </div>
                                        </div>
                                    
                                </div>
                                </div>
                                
                        </div>
                    </div>
                    
                </div>
                </form> 
                 
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