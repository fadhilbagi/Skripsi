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
		  			<?php
						foreach($data2->result_array() as $i):
						for($a=1;$a<=10;$a++){
						$b=strval($a);
						$c='Q'.$b;
						$d='ANS'.$b;
						$e='mapel';
						
						?>	
						<input type="text" name="<?php echo $d?>" value="<?php echo $i[$d];?>">
						<?php
						}
					?>
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Quiz</h1>
          </div>

            <!-- /.row -->
            <div class="row">
				<div class="col-xl col-lg">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Soal</h6>
                  
                </div>
				
				
        
                <div class="col-lg-12 col-xl ">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <br/>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg  ">
								Judul 	&nbsp 	&nbsp 	&nbsp 	&nbsp 	&nbsp 	&nbsp: <?php echo $i['judul'];?><br>
								Mata Kuliah : <?php echo $i['mapel'];?><br>
								Media  	&nbsp 	&nbsp 	&nbsp 	&nbsp 	&nbsp: <?php echo $i['media'];?><br><br/>
								
													<form method="post" role="form" action="<?php echo base_url().'index.php/siswa/kuis/jawab'?>">
														<input type="hidden" name="id" value="">
														<div class="form-group">
															<b><label>1.<?php echo $i['P1'];?></b>
														<div class="form-group">
														<input type="radio" name="ans1" value="A"><label>A.<?php echo $i['A1'];?></label>
														</div>
														<div class="form-group">
														<input type="radio" name="ans1" value="B"><label>B.<?php echo $i['B1'];?></label>
														</div>
														<div class="form-group">
														<input type="radio" name="ans1" value="C"><label>C.<?php echo $i['B1'];?></label>
														</div>
														<div class="form-group">
														<input type="radio" name="ans1" value="D"><label>D.<?php echo $i['B1'];?></label>
														</div>
														
														<input type="hidden" name="id" value="">
														<div class="form-group">
															<b><label>2.<?php echo $i['P2'];;?></b>
														
														<div class="form-group">
														<input type="radio" name="ans2" value="A"><label>A.<?php echo $i['A2'];?></label>
														</div>
														<div class="form-group">
														<input type="radio" name="ans2" value="B"><label>B.<?php echo $i['B2'];?></label>
														</div>
														<div class="form-group">
														<input type="radio" name="ans2" value="C"><label>C.<?php echo $i['B2'];?></label>
														</div>
														<div class="form-group">
														<input type="radio" name="ans2" value="D"><label>D.<?php echo $i['B2'];?></label>
														</div>
														
														<input type="hidden" name="id" value="">
														<div class="form-group">
															<b><label>3.<?php echo $i['P3'];;?></b>
														
														<div class="form-group">
														<input type="radio" name="ans3" value="A"><label>A.<?php echo $i['A3'];?></label>
														</div>
														<div class="form-group">
														<input type="radio" name="ans3" value="B"><label>B.<?php echo $i['B3'];?></label>
														</div>
														<div class="form-group">
														<input type="radio" name="ans3" value="C"><label>C.<?php echo $i['B3'];?></label>
														</div>
														<div class="form-group">
														<input type="radio" name="ans3" value="D"><label>D.<?php echo $i['B3'];?></label>
														</div>
														
														<input type="hidden" name="id" value="">
														<div class="form-group">
															<b><label>4.<?php echo $i['P4'];;?></b>
														
														<div class="form-group">
														<input type="radio" name="ans4" value="A"><label>A.<?php echo $i['A4'];?></label>
														</div>
														<div class="form-group">
														<input type="radio" name="ans4" value="B"><label>B.<?php echo $i['B4'];?></label>
														</div>
														<div class="form-group">
														<input type="radio" name="ans4" value="C"><label>C.<?php echo $i['B4'];?></label>
														</div>
														<div class="form-group">
														<input type="radio" name="ans4" value="D"><label>D.<?php echo $i['B4'];?></label>
														</div>
														
														<input type="hidden" name="id" value="">
														<div class="form-group">
															<b><label>5.<?php echo $i['P5'];;?></b>
														
														<div class="form-group">
														<input type="radio" name="ans5" value="A"><label>A.<?php echo $i['A5'];?></label>
														</div>
														<div class="form-group">
														<input type="radio" name="ans5" value="B"><label>B.<?php echo $i['B5'];?></label>
														</div>
														<div class="form-group">
														<input type="radio" name="ans5" value="C"><label>C.<?php echo $i['B5'];?></label>
														</div>
														<div class="form-group">
														<input type="radio" name="ans5" value="D"><label>D.<?php echo $i['B5'];?></label>
														</div>
														
														<input type="hidden" name="id" value="">
														<div class="form-group">
															<b><label>6.<?php echo $i['P6'];;?></b>
														<div class="form-group">
														<input type="radio" name="ans6" value="A"><label>A.<?php echo $i['A6'];?></label>
														</div>
														<div class="form-group">
														<input type="radio" name="ans6" value="B"><label>B.<?php echo $i['B6'];?></label>
														</div>
														<div class="form-group">
														<input type="radio" name="ans6" value="C"><label>C.<?php echo $i['B6'];?></label>
														</div>
														<div class="form-group">
														<input type="radio" name="ans6" value="D"><label>D.<?php echo $i['B6'];?></label>
														</div>
														
														<input type="hidden" name="id" value="">
														<div class="form-group">
															<b><label>7.<?php echo $i['P7'];;?></b>
														
														<div class="form-group">
														<input type="radio" name="ans7" value="A"><label>A.<?php echo $i['A7'];?></label>
														</div>
														<div class="form-group">
														<input type="radio" name="ans7" value="B"><label>B.<?php echo $i['B7'];?></label>
														</div>
														<div class="form-group">
														<input type="radio" name="ans7" value="C"><label>C.<?php echo $i['B7'];?></label>
														</div>
														<div class="form-group">
														<input type="radio" name="ans7" value="D"><label>D.<?php echo $i['B7'];?></label>
														</div>
														
														
														<input type="hidden" name="id" value="">
														<div class="form-group">
															<b><label>8.<?php echo $i['P8'];;?></b>
														
														<div class="form-group">
														<input type="radio" name="ans8" value="A"><label>A.<?php echo $i['A8'];?></label>
														</div>
														<div class="form-group">
														<input type="radio" name="ans8" value="B"><label>B.<?php echo $i['B8'];?></label>
														</div>
														<div class="form-group">
														<input type="radio" name="ans8" value="C"><label>C.<?php echo $i['B8'];?></label>
														</div>
														<div class="form-group">
														<input type="radio" name="ans8" value="D"><label>D.<?php echo $i['B8'];?></label>
														</div>
														
														<input type="hidden" name="id" value="">
														<div class="form-group">
															<b><label>9.<?php echo $i['P9'];;?></b>
														
														<div class="form-group">
														<input type="radio" name="ans9" value="A"><label>A.<?php echo $i['A9'];?></label>
														</div>
														<div class="form-group">
														<input type="radio" name="ans9" value="B"><label>B.<?php echo $i['B9'];?></label>
														</div>
														<div class="form-group">
														<input type="radio" name="ans9" value="C"><label>C.<?php echo $i['B9'];?></label>
														</div>
														<div class="form-group">
														<input type="radio" name="ans9" value="D"><label>D.<?php echo $i['B9'];?></label>
														</div>
														
														
														<input type="hidden" name="id" value="">
														<div class="form-group">
															<b><label>10.<?php echo $i['P10'];;?></b>
														
														<div class="form-group">
														<input type="radio" name="ans10" value="A"><label>A.<?php echo $i['A10'];?></label>
														</div>
														<div class="form-group">
														<input type="radio" name="ans10" value="B"><label>B.<?php echo $i['B10'];?></label>
														</div>
														<div class="form-group">
														<input type="radio" name="ans10" value="C"><label>C.<?php echo $i['B10'];?></label>
														</div>
														<div class="form-group">
														<input type="radio" name="ans10" value="D"><label>D.<?php echo $i['B10'];?></label>
														</div>
														<center><button type="submit" class="btn btn-primary">Submit</button>
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
