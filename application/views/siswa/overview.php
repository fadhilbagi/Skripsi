<!DOCTYPE html>
<html lang="en">

<head>
<?php $this->load->view("siswa/_partial/head.php") ?>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php $this->load->view("siswa/_partial/sidebar.php") ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php $this->load->view("siswa/_partial/navbar.php") ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Profile</h1>
          </div>

            <!-- /.row -->
            <div class="row">
				<div class="col-xl col-lg">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Pengaturan Umum</h6>
                  
                </div>
				
				
        
                <div class="col-lg-12 col-xl ">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <br/>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg  ">
											 <?php
						foreach($data2->result_array() as $i):
							$id=$i['user_id'];
							$name=$i['name'];
							$email=$i['email'];
							$gaya=$i['gaya'];
							?>
													<form method="post" role="form" action="<?php echo base_url().'index.php/siswa/overview/edit_user'?>">
														<input type="hidden" name="id" value="<?php echo $id ?>">
														<div class="form-group">
															<b><label>Username</b>
															<input name="name" required class="form-control" placeholder="Enter text" value="<?php echo $name;?>">
														</div>
														<div class="form-group">
															<b><label>Password</label></b>
															<input name="password"  required type="password"class="form-control" placeholder="Enter text" value="">
														</div>
														<div class="form-group">
															<b><label>Email</label></b>
															<input name="email" required class="form-control" placeholder="Enter text" value="<?php echo $email;?>">
														</div>
														
														<div class="form-group">
															<b><label>Gaya Belajar</label></b>
															<input name="gaya" class="form-control" placeholder="Enter text" disabled value="<?php echo $gaya;?>">
														</div>
														<div class="form-group">
														<center><button type="submit" class="btn btn-primary">Simpan</button>
														</div>
													</form>
														
							<?php endforeach;?>	
														
									</div>
			
					
								 
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
		</div>
		<div class="row">
				<div class="col-xl col-lg">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Ganti Foto Profile</h6>
                  
                </div>
				
				
        
                <div class="col-lg-12 col-xl ">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <br/>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg  ">
											
								<b><label>Upload Photo Profile	</label></b><br>
								
														<?php echo form_open_multipart('siswa/overview/aksi_upload');?>
													
															  <input type="file" name="berkas" />
														<br /><br />
														<center><input type="submit" value="Upload" class="btn btn-primary" /> 			
														<br><br />
									</div>
			
					
								 
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
		</div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php $this->load->view("siswa/_partial/footer.php") ?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <?php $this->load->view("siswa/_partial/logout.php") ?>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url('assets/jquery/jquery.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url('assets/jquery-easing/jquery.easing.min.js') ?>"></script>
  
  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url('js/sb-admin-2.min.js') ?>"></script>

  <!-- Page level plugins -->
  <script src="<?php echo base_url('assets/chart.js/Chart.min.js') ?>"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url('js/demo/chart-area-demo.js') ?>"></script>
  <script src="<?php echo base_url('js/demo/chart-pie-demo.js') ?>"></script>

  <script type="text/javascript">
	BASE_URL = "<?php echo base_url();?>"
</script>
  <script src="<?php echo base_url('js/plupload/plupload.full.min.js')?>"></script>
  <script src="<?php echo base_url('js/application.js')?>"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<?php 
if ($error == 'success'){
?>
<script> Swal.fire(
  'Good job!',
  'You clicked the button!',
  'success'
); </script>
<?php
}
?>
</body>

</html>
