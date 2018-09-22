
        <!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                <h3 class='box-title'>View_kontrol Read</h3>
        <table class="table table-bordered">
	    <tr><td>No Rm</td><td><?php echo $no_rm; ?></td></tr>
	    <tr><td>Tanggal</td><td><?php echo $tanggal; ?></td></tr>
	    <tr><td>No Kontrol</td><td><?php echo $no_kontrol; ?></td></tr>
	    <tr><td>Tanggal Kontrol</td><td><?php echo $tanggal_kontrol; ?></td></tr>
	    <tr><td>Dokter</td><td><?php echo $dokter; ?></td></tr>
	    <tr><td>Spesialis</td><td><?php echo $spesialis; ?></td></tr>
	    <tr><td>Keterangan</td><td><?php echo $keterangan; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('sudah_kontrol') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->