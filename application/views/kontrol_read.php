
        <!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                <h3 class='box-title'>Kontrol Read</h3>
        <table class="table table-bordered">
	    <tr><td>Id Dokter</td><td><?php echo $nama; ?></td></tr>
	    <tr><td>No Rm</td><td><?php echo $no_rm; ?></td></tr>
	    <tr><td>No Kontrol</td><td><?php echo $no_kontrol; ?></td></tr>
	    <tr><td>Tgl Kontrol</td><td><?php echo $tgl_kontrol; ?></td></tr>
	    <tr><td>Ket</td><td><?php echo $ket; ?></td></tr>
	    <tr><td>Created</td><td><?php echo $created; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('kontrol') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->