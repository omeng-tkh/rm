<div class="content-wrapper">
    
    <section class="content">
        <div class="box box-warning box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">INPUT DATA VIEW_KONTROL</h3>
            </div>
            <form action="<?php echo $action; ?>" method="post">
            
<table class='table table-bordered>'        

	    <tr><td width='200'>No Rm <?php echo form_error('no_rm') ?></td><td><input type="text" class="form-control" name="no_rm" id="no_rm" placeholder="No Rm" value="<?php echo $no_rm; ?>" /></td></tr>
	    <tr><td width='200'>Tanggal <?php echo form_error('tanggal') ?></td><td><input type="date" class="form-control" name="tanggal" id="tanggal" placeholder="Tanggal" value="<?php echo $tanggal; ?>" /></td></tr>
	    <tr><td width='200'>No Kontrol <?php echo form_error('no_kontrol') ?></td><td><input type="text" class="form-control" name="no_kontrol" id="no_kontrol" placeholder="No Kontrol" value="<?php echo $no_kontrol; ?>" /></td></tr>
	    <tr><td width='200'>Tanggal Kontrol <?php echo form_error('tanggal_kontrol') ?></td><td><input type="date" class="form-control" name="tanggal_kontrol" id="tanggal_kontrol" placeholder="Tanggal Kontrol" value="<?php echo $tanggal_kontrol; ?>" /></td></tr>
	    <tr><td width='200'>Dokter <?php echo form_error('dokter') ?></td><td><input type="text" class="form-control" name="dokter" id="dokter" placeholder="Dokter" value="<?php echo $dokter; ?>" /></td></tr>
	    <tr><td width='200'>Spesialis <?php echo form_error('spesialis') ?></td><td><input type="text" class="form-control" name="spesialis" id="spesialis" placeholder="Spesialis" value="<?php echo $spesialis; ?>" /></td></tr>
	    <tr><td width='200'>Keterangan <?php echo form_error('keterangan') ?></td><td><input type="text" class="form-control" name="keterangan" id="keterangan" placeholder="Keterangan" value="<?php echo $keterangan; ?>" /></td></tr>
	    <tr><td></td><td><input type="hidden" name="" value="<?php echo $; ?>" /> 
	    <button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
	    <a href="<?php echo site_url('medis') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a></td></tr>
	</table></form>        </div>
</div>
</div>