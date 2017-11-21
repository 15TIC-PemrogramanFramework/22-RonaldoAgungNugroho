<?php $this->load->view('templates/header'); ?>
        <div class="panel-body">
        	        <h2 style="margin-top:0px">DETAIL SOPIR</h2><br/>
            <table class="table table-bordered table-striped" id="mytable">
	    <tr><td width="200">PELANGGAN</td><td><?php echo $pelanggan_id; ?></td></tr>
	    <tr><td>SOPIR</td><td><?php echo $sopir_id; ?></td></tr>
	    <tr><td>PLAT NOMOR</td><td><?php echo $kendaraan_id; ?></td></tr>
            <tr><td>MULAI</td><td><?php echo tgl_indo($transaksi_tglmulai); ?></td></tr>
	    <tr><td>SELESAI</td><td><?php echo $transaksi_tglselesai; ?></td></tr>
	    <tr><td>TOTAL</td><td><?php echo $transaksi_total; ?></td></tr>
	    <tr><td>STATUS</td><td><?php echo $transaksi_status; ?></td></tr>
            <tr><td colspan="2"><a href="<?php echo site_url('transaksi') ?>" class="btn btn-default">Cancel</button></td></tr>
	</table>
    </div>
    <?php $this->load->view('templates/footer'); ?>
