
        <!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                  <h3 class='box-title'>Sudah Dikontrol <?php echo anchor('kontrol/create/','Create',array('class'=>'btn btn-danger btn-sm'));?>
		            <?php echo anchor(site_url('sudah_kontrol/word'), '<i class="fa fa-file-word-o"></i> Word', 'class="btn btn-primary btn-sm"'); ?>
                </div><!-- /.box-header -->
                <div class='box-body'>
        <table class="table table-bordered table-striped" id="mytable">
            <thead>
                <tr>
                    <th width="80px">No</th>
		    <th>No Rm</th>
		    <th>Tanggal</th>
		    <th>No Kontrol</th>
		    <th>Tanggal Kontrol</th>
		    <th>Dokter</th>
		    <th>Spesialis</th>
		    <th>Keterangan</th>
                </tr>
            </thead>
	    <tbody>
            <?php
            $start = 0;
            foreach ($sudah_kontrol_data as $sudah_kontrol)
            {
                ?>
                <tr>
		    <td><?php echo ++$start ?></td>
		    <td><?php echo $sudah_kontrol->no_rm ?></td>
		    <td><?php echo $sudah_kontrol->tanggal ?></td>
		    <td><?php echo $sudah_kontrol->no_kontrol ?></td>
		    <td><?php echo $sudah_kontrol->tanggal_kontrol ?></td>
		    <td><?php echo $sudah_kontrol->dokter ?></td>
		    <td><?php echo $sudah_kontrol->spesialis ?></td>
		    <td><?php echo $sudah_kontrol->keterangan ?></td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
        <script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js') ?>"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $("#mytable").dataTable();
            });
        </script>
                    </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->