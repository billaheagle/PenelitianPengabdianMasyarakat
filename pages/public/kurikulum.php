<?php include '../static/top.php'; ?>
  <section class="content row">
    <?php
        $no = 1;
        while($no < 9) {
    ?>
  	<div class="col-xs-6">
        <div class="box">
            <table class="table table-bordered text-center">
                <thead>
                	<tr>
                		<th colspan="5" style="background-color: aqua;">Semester <?php echo $no; ?></th>
                	</tr>
                    <tr>
                        <th rowspan="2" style="vertical-align: middle;">Kode</th>
                        <th rowspan="2" style="vertical-align: middle;">Mata Kuliah</th>
                        <th colspan="2" >SKS</th>
                        <th rowspan="2" style="vertical-align: middle;">Jenis</th>
                    </tr>
                    <tr>
                        <th>Teori</th>
                        <th>Lab</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($db->search_by_field('semester', $no++) as $show) {
                    ?>
                    <tr>
                        <td class="text-left"><?php echo $show['kode_matakuliah']; ?></td>
                        <td><?php echo $show['matakuliah']; ?></td>
                        <td><?php echo $show['sks_teori']; ?></td>
                        <td><?php echo $show['sks_lab']; ?></td>
                        <td><?php echo $show['jenis']; ?></td>
                    </tr>  
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php
        }
    ?>
</section>
<?php include '../static/bot.php'; ?>
