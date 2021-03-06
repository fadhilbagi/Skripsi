<br />
<form action="<?= base_url(); ?>index.php/loginguru/doLogin" method="post">
    <h2>Login Guru</h2>
    <hr />
    <?php if ($this->session->flashdata()) { ?>
        <div class="alert alert-warning">
            <?= $this->session->flashdata('msg'); ?>
        </div>
    <?php } ?>
    <div class="form-group">
        <label for="email">Email address:</label>
        <input type="email" name="email" required class="form-control" id="email">
    </div>
    <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" name="password" required class="form-control" id="pwd">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
    <span class="float-right"><a href="<?= base_url() . 'index.php/registerguru'; ?>" class="btn btn-primary">Register</a></span>
</form>