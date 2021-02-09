<!DOCTYPE html>
<html lang="en">

<head>
<?php $this->load->view("guru/_partial/head.php") ?>
<link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
<link href="<?php echo base_url('assets/datatables/css/dataTables.bootstrap.css')?>" rel="stylesheet">
<link href="<?php echo base_url('assets/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')?>" rel="stylesheet">
   
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
      <div id="content" >

        <!-- Topbar -->
        <?php $this->load->view("guru/_partial/navbar.php") ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">List Quiz</h1>
          </div>

            <!-- /.row -->
            <div class="row">
				<div class="col-xl col-lg">
              <div class="card shadow mb-12">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Pengaturan</h6>
                  
                </div>
				
				
        
                <div class="col-lg-12 col-xl ">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <br/>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
			<!--						
        
        <br />
        <button class="btn btn-success" onclick="add_person()"><i class="glyphicon glyphicon-plus"></i> Add Person</button>
        <button class="btn btn-default" onclick="reload_table()"><i class="glyphicon glyphicon-refresh"></i> Reload</button>
       
		<br />
        <br />
		 -->
        <table id="table" class="table table-striped table-bordered " cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Matkul</th>
                    <th>Judul</th>
                    <th>Media</th>
                    <th style="width:125px;">Action</th>
                </tr>
            </thead>
            <tbody>
            </tbody>

            <tfoot>
            <tr>
                <th>Matkul</th>
                <th>Judul</th>
                <th>Media</th>
                <th>Action</th>
            </tr>
            </tfoot>
        </table>	
														
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
<script src="<?php echo base_url('assets/jquery/jquery-2.1.4.min.js')?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('assets/datatables/js/dataTables.bootstrap.js')?>"></script>
<script src="<?php echo base_url('assets/bootstrap-datepicker/js/bootstrap-datepicker.min.js')?>"></script>


<script type="text/javascript">

var save_method; //for save method string
var table;

$(document).ready(function() {

    //datatables
    table = $('#table').DataTable({ 

        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('person/ajax_list')?>",
            "type": "POST"
        },

        //Set column definition initialisation properties.
        "columnDefs": [
        { 
            "targets": [ -1 ], //last column
            "orderable": false, //set not orderable
        },
        ],

    });

    //datepicker
    $('.datepicker').datepicker({
        autoclose: true,
        format: "yyyy-mm-dd",
        todayHighlight: true,
        orientation: "top auto",
        todayBtn: true,
        todayHighlight: true,  
    });

});



function add_person()
{
    save_method = 'add';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
    $('#modal_form').modal('show'); // show bootstrap modal
    $('.modal-title').text('Add Person'); // Set Title to Bootstrap modal title
}

function edit_person(id)
{
    save_method = 'update';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string

    //Ajax Load data from ajax
    $.ajax({
        url : "<?php echo site_url('person/ajax_edit/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
            $('[name="id"]').val(data.id);
            $('[name="judul"]').val(data.judul);
            $('[name="mapel"]').val(data.mapel);
            $('[name="media"]').val(data.media);
			$('[name="P1"]').val(data.P1);
			$('[name="P2"]').val(data.P2);
			$('[name="P3"]').val(data.P3);
			$('[name="P4"]').val(data.P4);
			$('[name="P5"]').val(data.P5);
			$('[name="P6"]').val(data.P6);
			$('[name="P7"]').val(data.P7);
			$('[name="P8"]').val(data.P8);
			$('[name="P9"]').val(data.P9);
			$('[name="P10"]').val(data.P10);
            $('[name="A1"]').val(data.A1);
			$('[name="A2"]').val(data.A2);
			$('[name="A3"]').val(data.A3);
			$('[name="A4"]').val(data.A4);
			$('[name="A5"]').val(data.A5);
			$('[name="A6"]').val(data.A6);
			$('[name="A7"]').val(data.A7);
			$('[name="A8"]').val(data.A8);
			$('[name="A9"]').val(data.A9);
			$('[name="A10"]').val(data.A10);
			$('[name="B1"]').val(data.B1);
			$('[name="B2"]').val(data.B2);
			$('[name="B3"]').val(data.B3);
			$('[name="B4"]').val(data.B4);
			$('[name="B5"]').val(data.B5);
			$('[name="B6"]').val(data.B6);
			$('[name="B7"]').val(data.B7);
			$('[name="B8"]').val(data.B8);
			$('[name="B9"]').val(data.B9);
			$('[name="B10"]').val(data.B10);
			$('[name="C1"]').val(data.C1);
			$('[name="C2"]').val(data.C2);
			$('[name="C3"]').val(data.C3);
			$('[name="C4"]').val(data.C4);
			$('[name="C5"]').val(data.C5);
			$('[name="C6"]').val(data.C6);
			$('[name="C7"]').val(data.C7);
			$('[name="C8"]').val(data.C8);
			$('[name="C9"]').val(data.C9);
			$('[name="C10"]').val(data.C10);
			$('[name="D1"]').val(data.D1);
			$('[name="D2"]').val(data.D2);
			$('[name="D3"]').val(data.D3);
			$('[name="D4"]').val(data.D4);
			$('[name="D5"]').val(data.D5);
			$('[name="D6"]').val(data.D6);
			$('[name="D7"]').val(data.D7);
			$('[name="D8"]').val(data.D8);
			$('[name="D9"]').val(data.D9);
			$('[name="D10"]').val(data.D10);
			$('[name="ANS1"]').val(data.ANS1);
			$('[name="ANS2"]').val(data.ANS2);
			$('[name="ANS3"]').val(data.ANS3);
			$('[name="ANS4"]').val(data.ANS4);
			$('[name="ANS5"]').val(data.ANS5);
			$('[name="ANS6"]').val(data.ANS6);
			$('[name="ANS7"]').val(data.ANS7);
			$('[name="ANS8"]').val(data.ANS8);
			$('[name="ANS9"]').val(data.ANS9);
			$('[name="ANS10"]').val(data.ANS10);
			$('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
}

function reload_table()
{
    table.ajax.reload(null,false); //reload datatable ajax 
}

function save()
{
    $('#btnSave').text('saving...'); //change button text
    $('#btnSave').attr('disabled',true); //set button disable 
    var url;

    if(save_method == 'add') {
        url = "<?php echo site_url('person/ajax_add')?>";
    } else {
        url = "<?php echo site_url('person/ajax_update')?>";
    }

    // ajax adding data to database
    $.ajax({
        url : url,
        type: "POST",
        data: $('#form').serialize(),
        dataType: "JSON",
        success: function(data)
        {

            if(data.status) //if success close modal and reload ajax table
            {
                $('#modal_form').modal('hide');
                reload_table();
            }

            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable 


        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error adding / update data');
            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable 

        }
    });
}

function delete_person(id)
{
    if(confirm('Are you sure delete this data?'))
    {
        // ajax delete data to database
        $.ajax({
            url : "<?php echo site_url('person/ajax_delete')?>/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
                //if success reload ajax table
                $('#modal_form').modal('hide');
                reload_table();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });

    }
}

</script>

<!-- Bootstrap modal -->
<div class="modal fade" id="modal_form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
               
            </div>
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="id"/> 
					<input type="hidden" value="" name="email"/> 
                    <div class="form-body">
                        
                        <div class="form-group">
                            <b><label class="control-label col-md-3">Judul</label>
                           
                                <input name="judul" placeholder="Judul" class="form-control" type="text">
                                <span class="help-block"></span>
                            
                       <div>
						<div class="form-group">
                            <br><label class="control-label col-md-3">Mata Kuliah</label>
                            
                                <select value="mapel"name="mapel" id="mapel"required class="form-control">
						<?php
							foreach($groups as $row)
							{ 
								echo '<option value="'.$row->mapel.'">'.$row->mapel.'</option>';
							}
							?>
				</select>
								<span class="help-block"></span>
                            
                        </div>
                        
                        <div class="form-group">
                            <label class="control-label col-md-3">Media</label>
                            
                                <select required class="form-control" value="media"name="media" id="media">
   <?php 
			
            foreach($media as $row)
            { 
              echo '<option value="'.$row->name.'">'.$row->name.'</option>';
            }
            ?>
</select>
                          </b><br>
                        </div>
						<b>Pertanyaan 1 <textarea name="P1" required class="form-control" placeholder="Enter text"></textarea>
a. <input name="A1" required class="form-control" placeholder="Enter text">
b. <input name="B1" required class="form-control" placeholder="Enter text">
c. <input name="C1" required class="form-control" placeholder="Enter text">
d. <input name="D1" required class="form-control" placeholder="Enter text">
Jawaban : <select name="ANS1" required class="form-control"><option value="A">A</option><option value="B">B</option><option value="C">C</option><option value="D">D</option><option value="E">E</option></select>
<br><br>
<b>Pertanyaan 2 <textarea name="P2" required class="form-control" placeholder="Enter text"></textarea>
a. <input name="A2" required class="form-control" placeholder="Enter text">
b. <input name="B2" required class="form-control" placeholder="Enter text">
c. <input name="C2" required class="form-control" placeholder="Enter text">
d. <input name="D2" required class="form-control" placeholder="Enter text">
Jawaban : <select name="ANS2" required class="form-control" ><option value="A">A</option><option value="B">B</option><option value="C">C</option><option value="D">D</option><option value="E">E</option></select>
<br><br>
<b>Pertanyaan 3 <textarea name="P3" required class="form-control" placeholder="Enter text"></textarea>
a. <input name="A3" required class="form-control" placeholder="Enter text">
b. <input name="B3" required class="form-control" placeholder="Enter text">
c. <input name="C3" required class="form-control" placeholder="Enter text">
d. <input name="D3" required class="form-control" placeholder="Enter text">
Jawaban : <select name="ANS3" required class="form-control"><option value="A">A</option><option value="B">B</option><option value="C">C</option><option value="D">D</option><option value="E">E</option></select>
<br><br>
<b>Pertanyaan 4 <textarea name="P4" required class="form-control" placeholder="Enter text"></textarea>
a. <input name="A4" required class="form-control" placeholder="Enter text">
b. <input name="B4" required class="form-control" placeholder="Enter text">
c. <input name="C4" required class="form-control" placeholder="Enter text">
d. <input name="D4" required class="form-control" placeholder="Enter text">
Jawaban : <select name="ANS4" required class="form-control"><option value="A">A</option><option value="B">B</option><option value="C">C</option><option value="D">D</option><option value="E">E</option></select>
<br><br>
<b>Pertanyaan 5 <textarea name="P5" required class="form-control" placeholder="Enter text"></textarea>
a. <input name="A5" required class="form-control" placeholder="Enter text">
b. <input name="B5" required class="form-control" placeholder="Enter text">
c. <input name="C5" required class="form-control" placeholder="Enter text">
d. <input name="D5" required class="form-control" placeholder="Enter text">
Jawaban : <select name="ANS5" required class="form-control"><option value="A">A</option><option value="B">B</option><option value="C">C</option><option value="D">D</option><option value="E">E</option></select>
<br><br>
<b>Pertanyaan 6 <textarea name="P6" required class="form-control" placeholder="Enter text"></textarea>
a. <input name="A6" required class="form-control" placeholder="Enter text">
b. <input name="B6" required class="form-control" placeholder="Enter text">
c. <input name="C6" required class="form-control" placeholder="Enter text">
d. <input name="D6" required class="form-control" placeholder="Enter text">
Jawaban : <select name="ANS6" required class="form-control"><option value="A">A</option><option value="B">B</option><option value="C">C</option><option value="D">D</option><option value="E">E</option></select>
<br><br>
<b>Pertanyaan 7 <textarea name="P7" required class="form-control" placeholder="Enter text"></textarea>
a. <input name="A7" required class="form-control" placeholder="Enter text">
b. <input name="B7" required class="form-control" placeholder="Enter text">
c. <input name="C7" required class="form-control" placeholder="Enter text">
d. <input name="D7" required class="form-control" placeholder="Enter text">
Jawaban : <select name="ANS7" required class="form-control"><option value="A">A</option><option value="B">B</option><option value="C">C</option><option value="D">D</option><option value="E">E</option></select>
<br><br>
<b>Pertanyaan 8 <textarea name="P8" required class="form-control" placeholder="Enter text"></textarea>
a. <input name="A8" required class="form-control" placeholder="Enter text">
b. <input name="B8" required class="form-control" placeholder="Enter text">
c. <input name="C8" required class="form-control" placeholder="Enter text">
d. <input name="D8" required class="form-control" placeholder="Enter text">
Jawaban : <select name="ANS8" required class="form-control"><option value="A">A</option><option value="B">B</option><option value="C">C</option><option value="D">D</option><option value="E">E</option></select>
<br><br>
<b>Pertanyaan 9 <textarea name="P9" required class="form-control" placeholder="Enter text"></textarea>
a. <input name="A9" required class="form-control" placeholder="Enter text">
b. <input name="B9" required class="form-control" placeholder="Enter text">
c. <input name="C9" required class="form-control" placeholder="Enter text">
d. <input name="D9" required class="form-control" placeholder="Enter text">
Jawaban : <select name="ANS9" required class="form-control"><option value="A">A</option><option value="B">B</option><option value="C">C</option><option value="D">D</option><option value="E">E</option></select>
<br><br>
<b>Pertanyaan 10 <textarea name="P10" required class="form-control" placeholder="Enter text"></textarea>
a. <input name="A10" required class="form-control" placeholder="Enter text">
b. <input name="B10" required class="form-control" placeholder="Enter text">
c. <input name="C10" required class="form-control" placeholder="Enter text">
d. <input name="D10" required class="form-control" placeholder="Enter text">
Jawaban : <select name="ANS10" required class="form-control"><option value="A">A</option><option value="B">B</option><option value="C">C</option><option value="D">D</option><option value="E">E</option></select>
<br><br>
                        
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->
</body>
</html>