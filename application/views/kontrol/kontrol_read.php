<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Kontrol Read</h2>
        <table class="table">
	    <tr><td>Id Dokter</td><td><?php echo $id_dokter; ?></td></tr>
	    <tr><td>No Rm</td><td><?php echo $no_rm; ?></td></tr>
	    <tr><td>No Kontrol</td><td><?php echo $no_kontrol; ?></td></tr>
	    <tr><td>Tgl Kontrol</td><td><?php echo $tgl_kontrol; ?></td></tr>
	    <tr><td>Ket</td><td><?php echo $ket; ?></td></tr>
	    <tr><td>Created</td><td><?php echo $created; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('kontrol') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>