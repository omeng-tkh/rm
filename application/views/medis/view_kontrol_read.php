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
        <h2 style="margin-top:0px">View_kontrol Read</h2>
        <table class="table">
	    <tr><td>No Rm</td><td><?php echo $no_rm; ?></td></tr>
	    <tr><td>Tanggal</td><td><?php echo $tanggal; ?></td></tr>
	    <tr><td>No Kontrol</td><td><?php echo $no_kontrol; ?></td></tr>
	    <tr><td>Tanggal Kontrol</td><td><?php echo $tanggal_kontrol; ?></td></tr>
	    <tr><td>Dokter</td><td><?php echo $dokter; ?></td></tr>
	    <tr><td>Spesialis</td><td><?php echo $spesialis; ?></td></tr>
	    <tr><td>Keterangan</td><td><?php echo $keterangan; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('medis') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>