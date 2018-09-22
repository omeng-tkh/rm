<!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                
                  <h3 class='box-title'>VIEW_KONTROL</h3>
                      <div class='box box-primary'>
        <form action="<?php echo $action; ?>" method="post"><table class='table table-bordered'>
	    <tr><td>No Rm <?php echo form_error('no_rm') ?></td>
            <td><input type="text" class="form-control" name="no_rm" id="no_rm" placeholder="No Rm" value="<?php echo $no_rm; ?>" />
        </td>
	    <tr><td>Tanggal <?php echo form_error('tanggal') ?></td>
            <td><input type="text" class="form-control" name="tanggal" id="tanggal" placeholder="Tanggal" value="<?php echo $tanggal; ?>" />
        </td>
	    <tr><td>No Kontrol <?php echo form_error('no_kontrol') ?></td>
            <td><input type="text" class="form-control" name="no_kontrol" id="no_kontrol" placeholder="No Kontrol" value="<?php echo $no_kontrol; ?>" />
        </td>
	    <tr><td>Tanggal Kontrol <?php echo form_error('tanggal_kontrol') ?></td>
            <td><input type="text" class="form-control" name="tanggal_kontrol" id="tanggal_kontrol" placeholder="Tanggal Kontrol" value="<?php echo $tanggal_kontrol; ?>" />
        </td>
	    <tr><td>Dokter <?php echo form_error('dokter') ?></td>
            <td><input type="text" class="form-control" name="dokter" id="dokter" placeholder="Dokter" value="<?php echo $dokter; ?>" />
        </td>
	    <tr><td>Spesialis <?php echo form_error('spesialis') ?></td>
            <td><input type="text" class="form-control" name="spesialis" id="spesialis" placeholder="Spesialis" value="<?php echo $spesialis; ?>" />
        </td>
	    <tr><td>Keterangan <?php echo form_error('keterangan') ?></td>
            <td><input type="text" class="form-control" name="keterangan" id="keterangan" placeholder="Keterangan" value="<?php echo $keterangan; ?>" />
        </td>
	    <tr><td colspan='2'><button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('sudah_kontrol') ?>" class="btn btn-default">Cancel</a></td></tr>
	
    </table></form>
    </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->