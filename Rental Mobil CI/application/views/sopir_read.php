<?php $this->load->view('templates/header'); ?>
        <div class="panel-body">
        	        <h2 style="margin-top:0px">DETAIL SOPIR</h2><br/>
            <table class="table table-bordered table-striped" id="mytable">
	    <tr><td>Alamat</td><td><?php echo $sopir_alamat; ?></td></tr>
	    <tr><td>Nama</td><td><?php echo $sopir_nama; ?></td></tr>
	    <tr><td>Telepon</td><td><?php echo $sopir_telpon; ?></td></tr>
	    <tr><td>No KTP</td><td><?php echo $sopir_ktp; ?></td></tr>
	    <tr><td>No SIM</td><td><?php echo $sopir_sim; ?></td></tr>
	    <tr><td>Status</td><td><?php echo $sopir_status; ?></td></tr>
	    <tr><td>Tarif</td><td><?php echo $harga; ?></td></tr>
            <tr><td colspan="2"><a href="<?php echo site_url('sopir') ?>" class="btn btn-default">Cancel</button></td></tr>
	</table>
    </div>
   <?php $this->load->view('templates/footer'); ?>