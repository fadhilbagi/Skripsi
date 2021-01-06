<br />
<form action="<?= base_url(); ?>index.php/registerguru/doRegister" method="post">
    <h2>Registration</h2>
    <hr />
    <!-- show error messages if the form validation fails -->
    <?php if ($this->session->flashdata()) { ?>
        <div class="alert alert-danger">
            <?=$this->session->flashdata('errors'); ?>
        </div>
    <?php } ?>
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" required class="form-control" id="name">
    </div>
    <div class="form-group">
        <label for="email">Email address:</label>
        <input type="email" name="email" required class="form-control" id="email">
    </div>
    <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" name="password" required class="form-control" id="pwd">
    </div>
	<div class="form-group">
        <label for="pelajaran">Pelajaran:</label>
        <select name="pelajaran">
  <option value="Matematika">Matematika</option>
  <option value="Bhs Indonesia">Bahasa Indonesia</option>
  <option value="Bhs Inggris">Bahasa Inggris</option>
  
</select>
<div class="form-group">
                    <label>Category</label>
                    <select class="form-control" name="category" id="category" required>
                        <option value="">No Selected</option>
                        <?php foreach($category as $row):?>
                        <option value="<?php echo $row->pelajaran;?>"><?php echo $row->pelajaran;?></option>
                        <?php endforeach;?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Sub Category</label>
                    <select class="form-control" id="sub_category" name="sub_category" required>
                        <option>No Selected</option>
 
                    </select>
                  </div>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
    <span class="float-right"><a href="<?= base_url() . 'index.php/login'; ?>" class="btn btn-primary">Login</a></span>
</form>
<script src="<?php echo base_url('assets/jquery/jquery.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script type="text/javascript">
        $(document).ready(function(){
 
            $('#category').change(function(){ 
                var id=$(this).val();
                $.ajax({
                    url : "<?php echo site_url('registerguru/get_sub_category');?>",
                    method : "POST",
                    data : {id: id},
                    async : true,
                    dataType : 'json',
                    success: function(data){
                         
                        var html = '';
                        var i;
                        for(i=0; i<data.length; i++){
                            html += '<option value='+data[i].mapel+'>'+data[i].mapel+'</option>';
                        }
                        $('#sub_category').html(html);
 
                    }
                });
                return false;
            }); 
             
        });
    </script>
