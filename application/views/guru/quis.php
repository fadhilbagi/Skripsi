<!DOCTYPE html>
<html lang="en">

<head>
<?php $this->load->view("guru/_partial/head.php") ?>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php $this->load->view("guru/_partial/sidebar.php") ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php $this->load->view("guru/_partial/navbar.php") ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Kuis</h1>
          </div>

            <!-- /.row -->
            <div class="row">
				<div class="col-xl col-lg">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                
				
				
        
                
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
                  <h6 class="m-0 font-weight-bold text-primary">Tambah Kuis</h6>
                  
                </div>
				
				
        
                <div class="col-lg-12 col-xl ">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <br/>
                        </div>
                        <div class="panel-body">
                            <div class="row">
								
                                <div class="col-lg  ">	
								<?php echo form_open_multipart('guru/kuis/doregister');?>
															<b><label>Judul Kuis :</b>
															<div class="form-group">
															<input name="judul" required class="form-control" placeholder="Enter text">
														</div>

<b><label>Mata Kuliah :</b>
<select value="matkul"name="matkul" id="matkul"required class="form-control">
   <?php 
			
            foreach($groups as $row)
            { 
              echo '<option value="'.$row->mapel.'">'.$row->mapel.'</option>';
            }
            ?>
</select><br>
														
								<b><label>Media Pembelajaran :</label></b><br>
								<select required class="form-control" value="media"name="media" id="media">
   <?php 
			
            foreach($media as $row)
            { 
              echo '<option value="'.$row->name.'">'.$row->name.'</option>';
            }
            ?>
</select><b><br><br><label>Soal :</b><br>
<b>Pertanyaan 1 <textarea name="p1" required class="form-control" placeholder="Enter text"></textarea>
a. <input name="a1" required class="form-control" placeholder="Enter text">
b. <input name="b1" required class="form-control" placeholder="Enter text">
c. <input name="c1" required class="form-control" placeholder="Enter text">
d. <input name="d1" required class="form-control" placeholder="Enter text">
e. <input name="e1" required class="form-control" placeholder="Enter text">
Jawaban : <select name="ans1" required class="form-control"><option value="A">A</option><option value="A">A</option><option value="B">B</option><option value="C">C</option><option value="D">D</option><option value="E">E</option></select>
<br><br>
<b>Pertanyaan 2 <textarea name="p2" required class="form-control" placeholder="Enter text"></textarea>
a. <input name="a2" required class="form-control" placeholder="Enter text">
b. <input name="b2" required class="form-control" placeholder="Enter text">
c. <input name="c2" required class="form-control" placeholder="Enter text">
d. <input name="d2" required class="form-control" placeholder="Enter text">
e. <input name="e2" required class="form-control" placeholder="Enter text">
Jawaban : <select name="ans2" required class="form-control" ><option value="A">A</option><option value="A">A</option><option value="B">B</option><option value="C">C</option><option value="D">D</option><option value="E">E</option></select>
<br><br>
<b>Pertanyaan 3 <textarea name="p3" required class="form-control" placeholder="Enter text"></textarea>
a. <input name="a3" required class="form-control" placeholder="Enter text">
b. <input name="b3" required class="form-control" placeholder="Enter text">
c. <input name="c3" required class="form-control" placeholder="Enter text">
d. <input name="d3" required class="form-control" placeholder="Enter text">
e. <input name="e3" required class="form-control" placeholder="Enter text">
Jawaban : <select name="ans3" required class="form-control"><option value="A">A</option><option value="A">A</option><option value="B">B</option><option value="C">C</option><option value="D">D</option><option value="E">E</option></select>
<br><br>
<b>Pertanyaan 4 <textarea name="p4" required class="form-control" placeholder="Enter text"></textarea>
a. <input name="a4" required class="form-control" placeholder="Enter text">
b. <input name="b4" required class="form-control" placeholder="Enter text">
c. <input name="c4" required class="form-control" placeholder="Enter text">
d. <input name="d4" required class="form-control" placeholder="Enter text">
e. <input name="e4" required class="form-control" placeholder="Enter text">
Jawaban : <select name="ans4" required class="form-control"><option value="A">A</option><option value="A">A</option><option value="B">B</option><option value="C">C</option><option value="D">D</option><option value="E">E</option></select>
<br><br>
<b>Pertanyaan 5 <textarea name="p5" required class="form-control" placeholder="Enter text"></textarea>
a. <input name="a5" required class="form-control" placeholder="Enter text">
b. <input name="b5" required class="form-control" placeholder="Enter text">
c. <input name="c5" required class="form-control" placeholder="Enter text">
d. <input name="d5" required class="form-control" placeholder="Enter text">
e. <input name="e5" required class="form-control" placeholder="Enter text">
Jawaban : <select name="ans5" required class="form-control"><option value="A">A</option><option value="A">A</option><option value="B">B</option><option value="C">C</option><option value="D">D</option><option value="E">E</option></select>
<br><br>
<b>Pertanyaan 6 <textarea name="p6" required class="form-control" placeholder="Enter text"></textarea>
a. <input name="a6" required class="form-control" placeholder="Enter text">
b. <input name="b6" required class="form-control" placeholder="Enter text">
c. <input name="c6" required class="form-control" placeholder="Enter text">
d. <input name="d6" required class="form-control" placeholder="Enter text">
e. <input name="e6" required class="form-control" placeholder="Enter text">
Jawaban : <select name="ans6" required class="form-control"><option value="A">A</option><option value="A">A</option><option value="B">B</option><option value="C">C</option><option value="D">D</option><option value="E">E</option></select>
<br><br>
<b>Pertanyaan 7 <textarea name="p7" required class="form-control" placeholder="Enter text"></textarea>
a. <input name="a7" required class="form-control" placeholder="Enter text">
b. <input name="b7" required class="form-control" placeholder="Enter text">
c. <input name="c7" required class="form-control" placeholder="Enter text">
d. <input name="d7" required class="form-control" placeholder="Enter text">
e. <input name="e7" required class="form-control" placeholder="Enter text">
Jawaban : <select name="ans7" required class="form-control"><option value="A">A</option><option value="A">A</option><option value="B">B</option><option value="C">C</option><option value="D">D</option><option value="E">E</option></select>
<br><br>
<b>Pertanyaan 8 <textarea name="p8" required class="form-control" placeholder="Enter text"></textarea>
a. <input name="a8" required class="form-control" placeholder="Enter text">
b. <input name="b8" required class="form-control" placeholder="Enter text">
c. <input name="c8" required class="form-control" placeholder="Enter text">
d. <input name="d8" required class="form-control" placeholder="Enter text">
e. <input name="e8" required class="form-control" placeholder="Enter text">
Jawaban : <select name="ans8" required class="form-control"><option value="A">A</option><option value="A">A</option><option value="B">B</option><option value="C">C</option><option value="D">D</option><option value="E">E</option></select>
<br><br>
<b>Pertanyaan 9 <textarea name="p9" required class="form-control" placeholder="Enter text"></textarea>
a. <input name="a9" required class="form-control" placeholder="Enter text">
b. <input name="b9" required class="form-control" placeholder="Enter text">
c. <input name="c9" required class="form-control" placeholder="Enter text">
d. <input name="d9" required class="form-control" placeholder="Enter text">
e. <input name="e9" required class="form-control" placeholder="Enter text">
Jawaban : <select name="ans9" required class="form-control"><option value="A">A</option><option value="A">A</option><option value="B">B</option><option value="C">C</option><option value="D">D</option><option value="E">E</option></select>
<br><br>
<b>Pertanyaan 10 <textarea name="p10" required class="form-control" placeholder="Enter text"></textarea>
a. <input name="a10" required class="form-control" placeholder="Enter text">
b. <input name="b10" required class="form-control" placeholder="Enter text">
c. <input name="c10" required class="form-control" placeholder="Enter text">
d. <input name="d10" required class="form-control" placeholder="Enter text">
e. <input name="e10" required class="form-control" placeholder="Enter text">
Jawaban : <select name="ans10" required class="form-control"><option value="A">A</option><option value="A">A</option><option value="B">B</option><option value="C">C</option><option value="D">D</option><option value="E">E</option></select>
<br><br>
<button class="btn btn-success" id="btn_upload" type="submit">Submit</button>

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
      <?php $this->load->view("guru/_partial/footer.php") ?>
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
  <?php $this->load->view("guru/_partial/logout.php") ?>

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
