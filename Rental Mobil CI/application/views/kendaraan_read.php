<?php $this->load->view('templates/header'); ?>
        <div class="panel-body">
        	        <h2 style="margin-top:0px">DETAIL KENDARAAN</h2>
            <table class="table table-bordered table-striped" id="mytable">
            <tr><td width="200">PLAT NOMOR</td><td><?php echo $kendaraan_platnomor; ?></tr>
	    <tr><td>MERK</td><td><?php echo $kendaraan_merk; ?></td></tr>
	    <tr><td>TIPE</td><td><?php echo $kendaraan_tipe; ?></td></tr>
	    <tr><td>STATUS</td><td><?php echo $kendaraan_status; ?></td></tr>
            <tr><td colspan="2"><a href="<?php echo site_url('kendaraan') ?>" class="btn btn-default">Cancel</button></td></tr>
	</table>
    </div>
<?php $this->load->view('templates/footer'); ?>