<?php $this->load->view('templates/header'); ?>
<div class='col-lg-12'>
    <h2 style="margin-top:0px">Pelanggan <?php echo $button ?></h2><br/>
    <form action="<?php echo $action; ?>" method="post">
        <div class="form-group">
            <label for="varchar">NAMA LENGKAP<?php echo form_error('pelanggan_nama') ?></label>
            <input type="text" class="form-control" name="pelanggan_nama" id="pelanggan_nama" placeholder="NAMA LENGKAP" value="<?php echo $pelanggan_nama; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">USERNAME<?php echo form_error('username') ?></label>
            <input type="text" class="form-control" name="username" id="username" placeholder="USERNAME" value="<?php echo $username; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">PASSWORD<?php echo form_error('password') ?></label>
            <input type="password" class="form-control" name="password" id="password" placeholder="PASSWORD" value="<?php echo $password; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">NO TELPON <?php echo form_error('pelanggan_telpon') ?></label>
            <input type="text" class="form-control" name="pelanggan_telpon" id="pelanggan_telpon" placeholder="NO TELPON" value="<?php echo $pelanggan_telpon; ?>" />
        </div>
        <div class="form-group">
            <label for="pelanggan_alamat">ALAMAT LENGKAP<?php echo form_error('pelanggan_alamat') ?></label>
            <textarea class="form-control" rows="3" name="pelanggan_alamat" id="pelanggan_alamat" placeholder="ALAMAT"><?php echo $pelanggan_alamat; ?></textarea>
        </div>
        <input type="hidden" name="pelanggan_id" value="<?php echo $pelanggan_id; ?>" /> 
        <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
        <button type="Reset" class="btn btn-default">Reset</button>
        </form>
    </div>
<?php $this->load->view('templates/footer'); ?>
