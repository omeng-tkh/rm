<!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                
                  <h3 class='box-title'>KONTROL</h3>
                      <div class='box box-primary'>
        <form action="<?php echo $action; ?>" method="post"><table class='table table-bordered'>
	    <tr><td>Dokter <?php echo form_error('id_dokter') ?></td>
            <td>
            <?php echo cmb_dinamis('id_dokter','dokter','nama','id','id'); ?>
        </td>
	    <tr><td>No Rm <?php echo form_error('no_rm') ?></td>
            <td><input type="text" class="form-control" name="no_rm" id="no_rm" placeholder="No Rm" value="<?php echo $no_rm; ?>" />
        </td>
	    <tr><td>No Kontrol <?php echo form_error('no_kontrol') ?></td>
            <td><input type="text" class="form-control" name="no_kontrol" id="no_kontrol" placeholder="No Kontrol" value="<?php echo $no_kontrol; ?>" />
        </td>
	    <tr><td>Tgl Kontrol (bulan/tgl/tahun)<?php echo form_error('tgl_kontrol') ?></td>
            <td><input type="date" class="form-control" name="tgl_kontrol" id="tgl_kontrol" placeholder="Tgl Kontrol" value="<?php echo $tgl_kontrol; ?>" />
        </td>
      <tr><td>Ket <?php echo form_error('ket') ?></td>
            <td><select name="ket" class="form-control">
              <option value="sudah">Sudah Kontrol</option>
              <option value="belum">Belum Kontrol</option>
            </td>
        </td>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <tr><td colspan='2'><button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('kontrol') ?>" class="btn btn-default">Cancel</a></td></tr>
	
    </table></form>
    </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->