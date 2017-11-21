<?php $this->load->view('templates/header'); ?>
<div class='col-lg-12'>
    <h2 style="margin-top:0px">Transaksi <?php echo $button ?></h2><br/>
    <form action="<?php echo $action; ?>" method="post">
        <div class="form-group">
            <label for="int">PELANGGAN <?php echo form_error('pelanggan_id') ?></label>
            <?php
            echo dropdown('pelanggan_id', 'pelanggan', 'pelanggan_nama', 'pelanggan_id', 4, '', $pelanggan_id);
            ?>
        </div>
        <div class="form-group">
            <label for="int">SUPIR <?php echo form_error('sopir_id') ?></label>
            <?php echo dropdown('sopir_id', 'sopir', 'sopir_nama', 'sopir_id', 4,'', $sopir_id) ?>
        </div>
        <div class="form-group">
            <label for="int">PILIH KENDARAAN <?php echo form_error('kendaraan_id') ?></label>
            <?php
            echo dropdown('kendaraan_id', 'kendaraan', 'kendaraan_platnomor', 'kendaraan_id', 5,'',$kendaraan_id);
            ?>
            </div>
        <div class="form-group">
            <label for="date">TANGGAL MULAI <?php echo form_error('transaksi_tglmulai') ?></label>
            <input type="date" class="form-control" name="transaksi_tglmulai" id="transaksi_tglmulai" placeholder="transaksi_tglmulai" value="<?php echo $transaksi_tglmulai; ?>" />
        </div>
        <div class="form-group">
            <label for="date">TANGGAL SELESAI <?php echo form_error('transaksi_tglselesai') ?></label>
            <input type="date" class="form-control" name="transaksi_tglselesai" id="transaksi_tglselesai" placeholder="TANGGAL SELESAI" value="<?php echo $transaksi_tglselesai; ?>" />
        </div>
        <input type="hidden" name="transaksi_id" value="<?php echo $transaksi_id; ?>" /> 
        <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
        <button type="reset" class="btn btn-default">Reset</button>
    </form>
</div>
<?php $this->load->view('templates/footer'); ?>
