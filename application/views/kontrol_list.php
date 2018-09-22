
        <!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                  <h3 class='box-title'>KONTROL LIST <?php echo anchor('kontrol/create/','Create',array('class'=>'btn btn-danger btn-sm'));?>
		            <?php echo anchor(site_url('kontrol/word'), '<i class="fa fa-file-word-o"></i> Word', 'class="btn btn-primary btn-sm"'); ?>
                </div><!-- /.box-header -->
                <div class='box-body'>
        <table class="table table-bordered table-striped" id="mytable">
            <thead>
                <tr>
                    <th width="80px">No</th>
		    <th>Tanggal</th>
		    <th>No Rm</th>
            <th>No Kontrol</th>
		    <th>Tgl Kontrol</th>
            <th>Dokter</th>
            <th>Spesialis</th>
            <th>Ket</th>

		    <th>Action</th>
                </tr>
            </thead>
	    <tbody>
            <?php
            $start = 0;
            foreach ($kontrol_data as $kontrol)
            {
                ?>
                <tr>
            <td><?php echo ++$start ?></td>
		    <td><?php echo $kontrol->created ?></td>            
		    <td><?php echo $kontrol->no_rm ?></td>
		    <td><?php echo $kontrol->no_kontrol ?></td>
            <td><?php echo $kontrol->tgl_kontrol ?></td>
            <td><?php echo $kontrol->nama ?></td>
            <td><?php echo $kontrol->spesialis ?></td>
            
		    <td><?php echo $kontrol->ket ?></td>
		    <td style="text-align:center" width="140px">
			<?php 
			echo anchor(site_url('kontrol/update/'.$kontrol->id),'<i class="fa fa-pencil-square-o"></i>',array('title'=>'edit','class'=>'btn btn-danger btn-sm')); 
			echo '  '; 
			echo anchor(site_url('kontrol/delete/'.$kontrol->id),'<i class="fa fa-trash-o"></i>','title="delete" class="btn btn-danger btn-sm" onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
			?>
		    </td>
	        </tr>
                <?php
            }
            ?>
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