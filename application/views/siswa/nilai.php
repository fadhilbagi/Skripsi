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
            <h1 class="h3 mb-0 text-gray-800">Quiz</h1>
          </div>

            <!-- /.row -->
            <div class="row">
				<div class="col-xl col-lg">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Hasil</h6>
                  
                </div>
				
				
        
                <div class="col-lg-12 col-xl ">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <br/>
                        </div>
                        <div class="panel-body">
						<center><b><h1>Nilai<h1>
								<b><?php echo $this->session->userdata['nilai'];?></b><br>
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
