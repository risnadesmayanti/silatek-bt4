<div id="content">

  <!-- MODAL DELETE START -->
   <div class="modal fade" id="myModalDelete">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="text-align: center;">Konfirmasi Hapus Data</h4>
          
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <p>Yakin menghapus data ini? </p>


        </div>

        
        <!-- Modal footer -->
       <form role="form" method="post" action="category_delete" id="delete_data">
                <input type="hidden" id="delete_item_id" name="id" value="12">
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger">Yes</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
                </div>
            </form>
        
      </div>
    </div>
  </div>
  <!-- STOP -->

<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
             <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Informasi Kumpulan Silabus</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Informasi Kumpulan Silabus</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Daftar Silabus</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <div id="zero_config_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                                      <!-- <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                          <div class="dataTables_length" id="zero_config_length">
                                            <label>Show <select name="zero_config_length" aria-controls="zero_config" class="form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label>
                                          </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                          <div id="zero_config_filter" class="dataTables_filter">
                                            <label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="zero_config"></label></div>
                                          </div>
                                        </div> -->
                                        <div class="row">
                                          <div class="col-sm-12">
                                            <a class="btn btn-secondary btn-sm" href="<?php echo base_url('index.php/Silabus/AddSlbs'); ?>"><i class="fas fa-plus"></i> Tambah File Silabus</a>
                                            <table id="zero_config" class="table table-striped table-bordered dataTable" role="grid" aria-describedby="zero_config_info" style="margin-top: 1%">
                                        <thead>
                                            <tr role="row">
                                              <th>No</th>
                                              <th width="30%">Judul </th>
                                              <th>Kategori Silabus</th>
                                              <th>Deskripsi Silabus</th>
                                              <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>               
                                        <?php $i=1; foreach ($slbs as $key ) { ?>
                         
                                        <tr>
                                          <td style="text-align: center;"><?php echo $i; ?></td>
                                          <td><?php echo $key->judul; ?></td>
                                          <td><?php echo $key->kategori; ?></td>
                                          <td><?php echo $key->ringkasan; ?></td>
                                          <td style="text-align: center;">
                                            <!-- <a href="#" id="<?php //echo $key->id; ?>" class="btn btn-primary btn-mini view_data" title="Lihat Detail" data-toggle="modal" data-target="#myModal"><i class="icon icon-eye-open"></i></a> --> 
                                            
                                            <a href="<?php echo base_url(). 'index.php/Silabus/updateSlbs/'. $key->id?>" class="btn btn-success btn-mini" title="Lihat Detail"><i class="mdi mdi-eye"></i></a> 
                                            <!-- <button type="button" class="btn btn-success btn-mini" data-toggle="modal" data-target="#modal-tambah" title="Lihat Detail"><i class="icon icon-eye-open"></i></button> -->
                                            <!-- <a href="" data id="<?php //echo base_url(). 'index.php/Instruktur/updateIns/'. $key->id?>" class="btn btn-success btn-mini view_data" data-toggle="modal" data-target="#modal-edit" title="Lihat Detail"><i class="icon icon-eye-open"></i></a> -->

                                            <a href="<?php echo base_url(). 'index.php/Silabus/delete/'. $key->id; ?>" onclick="return confirm('Are you sure to delete this data?')" class="btn btn-danger btn-mini" title="Hapus Data"><i class="mdi mdi-delete"></i></a>
                                          </td>
                                        </tr>
                                       <?php $i++;} ?>
                                       
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                                
                            </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->


</div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script> 
 <!-- jQuery DataTables JS CDN -->
 <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
 <!-- Bootstrap JS CDN -->
 <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
 <!-- Bootstrap JS CDN -->
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 
   <script type="text/javascript">
   $(document).ready(function(){
    $('#dataTable').DataTable();
         // Start jQuery click function to view Bootstrap modal when view info button is clicked
            $('.view_data').click(function(){
             // Get the id of selected phone and assign it in a variable called phoneData
                var phoneData = $(this).attr('id');
                // Start AJAX function
                $.ajax({
                 // Path for controller function which fetches selected phone data
                    url: '<?php echo base_url(); ?>Dashboard/details/',
                    // Method of getting data
                    method: "POST",
                    // Data is sent to the server
                    data: {phoneData:phoneData},
                    // Callback function that is executed after data is successfully sent and recieved
                    success: function(data){
                     // Print the fetched data of the selected phone in the section called #phone_result 
                     // within the Bootstrap modal
                        $('#phone_result').html(data);
                        // Display the Bootstrap modal
                        $('#modal-edit').modal('show');
                    }
                    // error: console.log();
             });
             // End AJAX function
         });
     });  
</script>
