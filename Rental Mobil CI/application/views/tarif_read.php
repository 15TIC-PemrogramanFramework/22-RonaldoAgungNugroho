<?php $this->load->view('templates/header'); ?>
        <div class="panel-body">
        	        <h2 style="margin-top:0px">DETAIL TARIF</h2><br/>
            <table class="table table-bordered table-striped" id="mytable">
	    <tr><td width="200">PLAT NOMOR</td><td><?php echo $kendaraan_id; ?></td></tr>
	    <tr><td>TARIF PERHARI</td><td><?php echo $tarif_perhari; ?></td></tr>
	    <tr><td>TARIF OVERTIME</td><td><?php echo $tarif_overtime; ?></td></tr>
            <tr><td colspan="2"><a href="<?php echo site_url('tarif') ?>" class="btn btn-default">Cancel</button></td></tr>
	</table>
    </div>
    <?php $this->load->view('templates/footer'); ?>
