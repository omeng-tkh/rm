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
        <h2>Kontrol List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Id Dokter</th>
		<th>No Rm</th>
		<th>No Kontrol</th>
		<th>Tgl Kontrol</th>
		<th>Ket</th>
		<th>Created</th>
		
            </tr><?php
            foreach ($kontrol_data as $kontrol)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $kontrol->id_dokter ?></td>
		      <td><?php echo $kontrol->no_rm ?></td>
		      <td><?php echo $kontrol->no_kontrol ?></td>
		      <td><?php echo $kontrol->tgl_kontrol ?></td>
		      <td><?php echo $kontrol->ket ?></td>
		      <td><?php echo $kontrol->created ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>