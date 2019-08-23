<?php ini_set("display_errors",1);
error_reporting(E_ALL);

 ?>
<head>
<title>Matrix Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/colorpicker.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/datepicker.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/uniform.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/select2.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/matrix-style.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/matrix-media.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-wysihtml5.css" />
<link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
  <style type="text/css">
    .imagebox .alert {
      transform: translateY(130%);
      transition-timing-function: ease-in;
      transition: 0.2s;
    }
    .imagebox.alert-is-shown .alert {
      transition: 0.25s;
      transition-timing-function: ease-out;
      
      transform: translateY(0);
      opacity: 1;
    }

    .imagebox {
      width: 261px;
      margin: 0 auto;
      /*border: 10px solid #666666;*/
      height: 250px;
      position: relative;
      overflow: hidden;
      /*border-radius: 80px 80px / 25px 25px 25px 25px;*/
      &::before {
        content: "";
        background: #666666;
        position: absolute;
        z-index: 20;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 30px;
      }
      &::after {
        content: "";
        background: #848484;
        position: absolute;
        z-index: 20;
        bottom: 30px;
        left: 0;
        width: 100%;
        height: 25px;
      }
    }

    .alert {
     /* width: 90%;
      height: 60px;*/
      left: 3%;
      bottom: 5%;
      background: white;
      /*border-radius: 4px;*/
      opacity: 0;
      /*box-shadow: 0 5px 15px rgba(black, 0.2);*/
      position: absolute;
      z-index: 10;
    }


    .isi {
      position: relative;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      font: 12px monospace;
      color: #999;
      text-transform: uppercase;
    }
</style>
</head>
<body>
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
                            <?php foreach($instruktur as $i){ ?>
                            <form action="<?php echo base_url(). 'index.php/Instruktur/updatingIns/'.$i->id; ?>" method="POST" class="form-horizontal" enctype="multipart/form-data">
                                <div class="card-body">
                                    <h4 class="card-title">Personal Info</h4>
                                    <div class="form-group row">
                                        <div class="imagebox">
                                          <div class="isi">
                                            <input type="hidden" name="old_image" value="<?php echo base_url('upload/instruktur/'.$i->image) ?>">
                                            <img src="<?php echo base_url('upload/instruktur/'.$i->image) ?>" class="img-polaroid" width="250px"/>
                                          </div>
                                          <div class="alert">
                                            <input type="file" name="userfile">
                                          </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 text-right col-form-label">Nama Lengkap : </label>
                                            <input type="text" class="form-control col-sm-10" placeholder="Isi Nama Lengkap" name="nama" value="<?php echo $i->nama; ?>"  readonly="true" ondblclick="this.readOnly='';">
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 text-right col-form-label">Tempat Lahir : </label>
                                            <input type="text" class="form-control col-sm-10" placeholder="Contoh : Bandung" name="tempat_lahir" value="<?php echo $i->tempat_lahir; ?>"  readonly="true" ondblclick="this.readOnly='';">
                                    </div>                                   
                                    <div class="form-group row">
                                    <label class="col-sm-2 text-right col-form-label">Tanggal Lahir : </label>
                                      <input type="text" class="form-control col-sm-10 mydatepicker" placeholder="mm/dd/yyyy" value="<?php echo $i->tgl_lahir; ?>" class="datepicker span11" name="tgl_lahir" readonly="true" ondblclick="this.readOnly='';">
                                  </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 text-right control-label col-form-label">Alamat Lengkap :</label>
                                        <!-- <div class="col-sm-10"> -->
                                            <textarea class="form-control col-sm-10" name="alamat" placeholder=""  readonly="true" ondblclick="this.readOnly='';"><?php echo $i->alamat; ?>></textarea>
                                        <!-- </div> -->
                                    </div>
                                       <div class="form-group row">
                                          <label class="col-sm-2 text-right col-form-label">No Kontak : </label>
                                              <input type="text" class="form-control col-sm-10" placeholder="Contoh : Bandung" name="no_kontak" value="<?php echo $i->no_kontak; ?>"  readonly="true" ondblclick="this.readOnly='';">
                                      </div>  
                                    <div class="form-group row">
                                    <label class="col-sm-2 text-right col-form-label">Upload Foto : </label>
                                    <div class="col-md-10">
                                        
                                            <label><?php echo $i->image; ?></label>&nbsp<input type="file"  name="image">
                                    
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
                                      <input type="text" class="form-control col-sm-10" placeholder="Masukan Asal Instansi" name="asal_instansi" value="<?php echo $i->asal_instansi; ?>"  readonly="true" ondblclick="this.readOnly='';" >
                              </div>
                              <div class="form-group row">                                   
                                  <label class="col-sm-2 text-right col-form-label" >Spesialisasi :</label>
                                      <select class="select2 form-control col-sm-9 custom-select" style="height:36px;" name="spesialisasi" readonly="true">
                                        <option>Teknik Industri</option>
                                        <option>Teknik Mesin</option>
                                        <option>Teknik Kelistrikan</option>
                                        <option>Teknik Informatika</option>
                                        <option>Teknik Tekstil</option>

                                        <option value="<?php echo $i->spesialisasi; ?>" selected><?php echo $i->spesialisasi; ?></option>
                                      </select>
                                      <input type="button" onclick="enable()" value="Ubah Data" class="col-sm-1" >
                                    
                              </div>
                              <div class="form-group row">
                                        <label class="col-sm-2 text-right control-label col-form-label">Keterangan :</label>
                                        <!-- <div class="col-sm-10"> -->
                                            <textarea class="form-control col-sm-10" name="ket" placeholder=""  readonly="true" ondblclick="this.readOnly='';"><?php echo $i->deskripsi; ?></textarea>
                                        <!-- </div> -->
                                    </div>
                              <div class="border-top">
                                    <div class="card-body">
                                        <a href="<?php echo base_url('index.php/instruktur'); ?>" class="btn btn-danger ">Cancel</a>
                                        <button type="submit" class="btn btn-success">Save</button>
                                    </div>
                                </div>
                            </form> 
                          <?php } ?>
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

    <footer>
      <script>// https://css-tricks.com/snippets/javascript/loop-queryselectorall-matches/
    var forEach = function (array, callback, scope) {
      for (var i = 0; i < array.length; i++) {
        callback.call(scope, i, array[i]); // passes back stuff we need
      }
    };

    var imageboxs = document.querySelectorAll(".imagebox");

    forEach(imageboxs, function(index, value) {
      value.addEventListener("dblclick", function() {
        this.classList.toggle("alert-is-shown");
      });
    });
    </script>
    <script type="text/javascript">
      function enable() {
      document.getElementById("mySelect").disabled=false;
    }
    </script>
  </footer>

