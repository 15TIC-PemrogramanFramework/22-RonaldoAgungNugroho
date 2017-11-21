<?php $this->load->view('templates/header'); ?>
<div class='col-lg-12'>
    <h2 style="margin-top:0px">Tarif <?php echo $button ?></h2><br/>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
                <label for="int">KENDARAAN <?php echo form_error('kendaraan_id') ?></label>
                <?php
                echo dropdown('kendaraan_id', 'kendaraan', 'kendaraan_platnomor', 'kendaraan_id', 12);
                ?>
            </div>
	    <div class="form-group">
                <label for="int">TARIF PERHARI <?php echo form_error('tarif_perhari') ?></label>
                <input type="text" class="form-control" name="tarif_perhari" id="tarif_perhari" placeholder="TARIF PERHARI" value="<?php echo $tarif_perhari; ?>" />
            </div>
	    <div class="form-group">
                <label for="int">TARIF OVERTIME <?php echo form_error('tarif_overtime') ?></label>
                <input type="text" class="form-control" name="tarif_overtime" id="tarif_overtime" placeholder="TARIF OVERTIME" value="<?php echo $tarif_overtime; ?>" />
            </div>
	    <input type="hidden" name="tarif_id" value="<?php echo $tarif_id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
        <button type="Reset" class="btn btn-default">Reset</button>
	</form>
    </div>
    <?php $this->load->view('templates/footer'); ?>
