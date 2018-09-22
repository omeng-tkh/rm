<div class="content-wrapper">
    
    <section class="content">
        <div class="box box-warning box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">INPUT DATA KONTROL</h3>
            </div>
            <form action="<?php echo $action; ?>" method="post">
            
<table class='table table-bordered>'        

	    <tr><td width='200'>Id Dokter <?php echo form_error('id_dokter') ?></td><td><input type="text" class="form-control" name="id_dokter" id="id_dokter" placeholder="Id Dokter" value="<?php echo $id_dokter; ?>" /></td></tr>
	    <tr><td width='200'>No Rm <?php echo form_error('no_rm') ?></td><td><input type="text" class="form-control" name="no_rm" id="no_rm" placeholder="No Rm" value="<?php echo $no_rm; ?>" /></td></tr>
	    <tr><td width='200'>No Kontrol <?php echo form_error('no_kontrol') ?></td><td><input type="text" class="form-control" name="no_kontrol" id="no_kontrol" placeholder="No Kontrol" value="<?php echo $no_kontrol; ?>" /></td></tr>
	    <tr><td width='200'>Tgl Kontrol <?php echo form_error('tgl_kontrol') ?></td><td><input type="date" class="form-control" name="tgl_kontrol" id="tgl_kontrol" placeholder="Tgl Kontrol" value="<?php echo $tgl_kontrol; ?>" /></td></tr>
	    <tr><td width='200'>Ket <?php echo form_error('ket') ?></td><td><input type="text" class="form-control" name="ket" id="ket" placeholder="Ket" value="<?php echo $ket; ?>" /></td></tr>
	    <tr><td width='200'>Created <?php echo form_error('created') ?></td><td><input type="date" class="form-control" name="created" id="created" placeholder="Created" value="<?php echo $created; ?>" /></td></tr>
	    <tr><td></td><td><input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
	    <a href="<?php echo site_url('kontrol') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a></td></tr>
	</table></form>        </div>
</div>
</div>