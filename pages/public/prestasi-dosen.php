<?php include '../static/top.php'; ?>
  <section class="content">
    <div class="row">
      <?php
        $no = 1;
        foreach($db->show() as $show) {
      ?>
      <div class="col-md-3">
        <div class="box">
          <div class="box-header">
            <img src="images.png" alt="Foto" width="100%">
          </div>
          <div class="box-body">
            <h4><b><?php echo $show['bidang_keahlian']; ?></b></h4>
            <p>Sedikit deskripsi untuk menjelaskan isi dari blog ini</p>
          </div>
        </div>
      </div>
      <?php
        }
      ?>
    </div>
  </section>
<?php include '../static/bot.php'; ?>
