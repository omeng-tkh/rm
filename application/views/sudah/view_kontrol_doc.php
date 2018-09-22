<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            .word-table {
                border:1px solid black !important; 
                border-collapse: collapse !important;
                width: 100%;
            }
            .word-table tr th, .word-table tr td{
                border:1px solid black !important; 
                padding: 5px 10px;
            }
        </style>
    </head>
    <body>
        <h2>View_kontrol List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>No Rm</th>
		<th>Tanggal</th>
		<th>No Kontrol</th>
		<th>Tanggal Kontrol</th>
		<th>Dokter</th>
		<th>Spesialis</th>
		<th>Keterangan</th>
		
            </tr><?php
            foreach ($view_kontrol_data as $sudah_kontrol)
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
                <?php
            }
            ?>
        </table>
    </body>
</html>