<?php $this->load->view('templates/header'); ?>
<div class='col-lg-12'>
        <h2 style="margin-top:0px">Kendaraan <?php echo $button ?></h2><br/>
        <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
	    <div class="form-group">
                <label for="varchar">PLAT NOMOR<?php echo form_error('kendaraan_platnomor') ?></label>
                <input type="text" class="form-control" name="kendaraan_platnomor" id="kendaraan_platnomor" placeholder="PLAT NOMOR" value="<?php echo $kendaraan_platnomor; ?>" />
            </div>
	    <div class="form-group">
                <label for="varchar">MERK <?php echo form_error('kendaraan_merk') ?></label>
                <input type="text" class="form-control" name="kendaraan_merk" id="kendaraan_merk" placeholder="MERK" value="<?php echo $kendaraan_merk; ?>" />
            </div>
	    <div class="form-group">
                <label for="varchar">TIPE <?php echo form_error('kendaraan_tipe') ?></label>
                <input type="text" class="form-control" name="kendaraan_tipe" id="kendaraan_tipe" placeholder="TIPE" value="<?php echo $kendaraan_tipe; ?>" />
            </div>
	    <div class="form-group">
                <label for="enum">STATUS <?php echo form_error('kendaraan_status') ?></label>
                <?php
            echo form_dropdown('kendaraan_status',array('bebas'=>'BEBAS','jalan'=>'JALAN'),$kendaraan_status,"class='form-control'");
            ?>
        </div>
            </div>
	    <input type="hidden" name="kendaraan_id" value="<?php echo $kendaraan_id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <button type="reset" class="btn btn-default">Reset</button>
	</form>
    </div>
<?php $this->load->view('templates/footer'); ?>