<?php $this->load->view('templates/header'); ?>
        <div class="panel-body">
        	        <h2 style="margin-top:0px">DETAIL KENDARAAN</h2>
            <table class="table table-bordered table-striped" id="mytable">
	    <tr><td>Nama Pelanggan</td><td><?php echo $pelanggan_nama; ?></td></tr>
	    <tr><td>Alamat Pelanggan</td><td><?php echo $pelanggan_alamat; ?></td></tr>
	    <tr><td>No Telepon</td><td><?php echo $pelanggan_telpon; ?></td></tr>
            <tr><td colspan="2"><a href="<?php echo site_url('pelanggan') ?>" class="btn btn-default">Cancel</button></td></tr>
	</table>
    </div>
<?php $this->load->view('templates/footer'); ?>
