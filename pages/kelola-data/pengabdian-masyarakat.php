<?php include '../static/top.php'; ?>
  <section class="content">
    <div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-ban"></i> Alert!</h4>
        Gagal! Menambahkan Data
    </div>
    <!--<div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-ban"></i> Alert!</h4>
        Gagal! Menghapus Data
    </div>
    <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-ban"></i> Alert!</h4>
        Sukses! Menambahkan Data
    </div>
    <div class="alert alert-warning alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-ban"></i> Alert!</h4>
        Gagal! Mengubah Data 
    </div>
    <div class="alert alert-info alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-ban"></i> Alert!</h4>
        Sukses! Menghapus Data
    </div>
    <div class="alert alert-info alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-ban"></i> Alert!</h4>
        Sukses! Mengedit Data
    </div>-->
    <div class="box">
        <div class="box-header">
            <div class="text-right"><button class="btn btn-success btn-sm" data-toggle="modal" data-target="#save"><i class="fa fa-plus"></i></button></div>


        </div><!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped text-center">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tema</th>
                        <th>Judul</th>
                        <th>Tanggal</th>
                        <th>Tempat</th>
                        <th>Integrasi</th>
                        <th>File</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $no = 1;
                        if($db->search_by_field('id_user' , $_SESSION['user']) != null) {
                            foreach($db->search_by_field('id_user' , $_SESSION['user']) as $show) {
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td class="text-left"><?php echo $show['tema']; ?></td>
                        <td><?php echo $show['judul']; ?></td>
                        <td><?php echo $show['tanggal']; ?></td>
                        <td><?php echo $show['tempat']; ?></td>
                        <td><?php echo $show['id_matakuliah']; ?></td>
                        <td width="5%">
                        	<button class="btn btn-primary btn-xs"><i class="fa fa-info-circle"></i></button>
                        </td>
                        <td width="9%">
                        	<button class="btn btn-warning btn-xs" data-toggle="modal" data-target="#edit-<?php echo $show['id']; ?>"><i class="fa fa-edit"></i></button>
                       
                        	<button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete-<?php echo $show['id']; ?>"><i class="fa fa-trash-o"></i></button>
                        
                        	<button class="btn btn-info btn-xs"><i class="fa fa-print"></i></button>
                        </td>
                    </tr> 
                    <?php 
                            }
                        }
                    ?> 
                </tbody>
                <tfoot>
                  <tr>
                        <th>No</th>
                        <th>Tema</th>
                        <th>Judul</th>
                        <th>Tanggal</th>
                        <th>Tempat</th>
                        <th>Integrasi</th>
                        <th>File</th>
                        <th>Action</th>
                  </tr>
                </tfoot>
            </table>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
      <div div class="modal fade" id="save">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-green">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Tambah Data</h4> 
                </div>
                <form action="action.php?table=<?php echo $table; ?>&action=store" method="post">
                <div class="modal-body row">
                        <input name="id_user" type="hidden" value="<?php echo $_SESSION['user']; ?>">
                        <div class="col-lg-6" >
                            <div class="form-group">
                            <label>Tema</label>
                            <input type="text" placeholder="Tema" name="tema" class="form-control" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                            <label>Judul</label>
                            <input type="text" placeholder="Judul" name="judul" class="form-control" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea class="form-control" name="deskripsi" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                            <label>Tempat</label>
                            <input type="text" placeholder="Tempat" name="tempat" class="form-control" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                            <label>Tanggal</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" name="tanggal" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" autocomplete="off">
                             </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                            <label>Sumber Pembiayaan</label>
                            <input type="text" placeholder="Sumber Pembiayaan" name="sumber_pembiayaan" class="form-control" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-lg-6">
                        <div class="form-group">
                            <label>Biaya</label>
                            <div class="input-group">
                            <span class="input-group-addon" style="background-color: rgb(230, 230, 230);">Rp.</span>
                            <input type="text" placeholder="Biaya" name="biaya" class="form-control" autocomplete="off">
                            </div>
                         </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                            <label>Evaluasi</label>
                            <textarea class="form-control" name="evaluasi" rows="3"></textarea>
                            </div>
                        </div>
                         <div class="col-lg-12">
                            <div class="form-group">
                            <label for=" Mahasiswa">Mahasiswa yang Terlibat</label>
                            <div class="input-group">
                                    <input type="text" placeholder="Mahasiswa" name="id_mahasiswa" class="form-control" autocomplete="off">
                                <span class="input-group-btn">
                                <button class="btn btn-flat btn-secondary" type="file">Tambah</button>
                                </span>
                            </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                            <label>Integrasi</label>
                            <input type="text" placeholder="Kode Mata Kuliah" name="id_matakuliah" class="form-control" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="custom-file">
                                <label>File</label>
                                <input type="file" name="file" class="custom-file-input" id="customFile">
                            </div>
                        </div>       
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </form>
         </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.example-modal -->
    <?php
        if($db->search_by_field('id_user' , $_SESSION['user']) != null) {
            foreach($db->search_by_field('id_user' , $_SESSION['user']) as $show) {
    ?>
     <div div class="modal fade" id="edit-<?php echo $show['id']; ?>">
    	<div class="modal-dialog">
            <div class="modal-content">
	            <div class="modal-header bg-yellow">
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                <h4 class="modal-title">Edit Data</h4>
	            </div>
                <form action="action.php?table=<?php echo $table; ?>&action=update" method="post">
                    <div class="modal-body row">
                        <input name="id" type="hidden" value="<?php echo $show['id']; ?>">
                        <div class="col-lg-6" >
                            <div class="form-group">
                            <label>Tema</label>
                            <input type="text" placeholder="Tema" name="tema" class="form-control" value="<?php echo $show['tema']; ?>" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-lg-6">
                             <div class="form-group">
                            <label>Judul</label>
                            <input type="text" placeholder="Judul" name="judul" class="form-control" value="<?php echo $show['judul']; ?>" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-lg-12">
                             <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea class="form-control" name="deskripsi" rows="3"><?php echo $show['deskripsi']; ?></textarea>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                            <label>Tempat</label>
                            <input type="text" placeholder="Tempat" name="tempat" class="form-control" value="<?php echo $show['tempat']; ?>" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                            <label>Tanggal</label>
                                <div class="input-group">
                                <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                                </div>
                            <input type="text" name="tanggal" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" value="<?php echo date('d/m/Y', strtotime($show['tanggal']));?>" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                             <div class="form-group">
                            <label>Sumber Pembiayaan</label>
                            <input type="text" placeholder="Sumber Pembiayaan" name="sumber_pembiayaan" class="form-control" value="<?php echo $show['sumber_pembiayaan']; ?>" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                            <label>Biaya</label>
                            <div class="input-group">
                            <span class="input-group-addon" style="background-color: rgb(230, 230, 230);">Rp.</span>
                            <input type="text" name="biaya" placeholder="Biaya" class="form-control" value="<?php echo $show['biaya']; ?>" autocomplete="off">
                            </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                             <div class="form-group">
                            <label>Evaluasi</label>
                            <textarea class="form-control" name="evaluasi" rows="3"><?php echo $show['evaluasi']; ?></textarea>
                            </div>
                        </div>
                         <div class="col-lg-12">
                             <div class="form-group">
                            <label for=" Mahasiswa">Mahasiswa yang terlibat</label>
                            <div class="input-group">
                                    <input type="text" name="id_mahasiswa" placeholder="Mahasiswa" class="form-control" autocomplete="off">
                                <span class="input-group-btn">
                                <button class="btn btn-flat btn-secondary" type="file">Tambah</button>
                                </span>
                            </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                             <div class="form-group">
                            <label>Integrasi</label>
                            <input type="text" placeholder="Kode Mata Kuliah" name="id_matakuliah" class="form-control" value="<?php echo $show['id_matakuliah']; ?>" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="custom-file">
                                <label>File</label>
                                <input type="file" name="file" class="custom-file-input" id="customFile">
                            </div>    
                        </div>    
                   
               	</div>
	            <div class="modal-footer">
	                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	                <button type="submit" class="btn btn-warning">Save changes</button>
	            </div>
              </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.example-modal -->
     <div div class="modal fade" id="delete-<?php echo $show['id']; ?>">
    	<div class="modal-dialog">
            <div class="modal-content">
	            <div class="modal-header bg-red">
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                <h4 class="modal-title">Delete Data</h4>
	            </div>
                <form action="action.php?table=<?php echo $table; ?>&action=delete" method="post">
                    <input name="id" type="hidden" value="<?php echo $show['id']; ?>">
                    <div class="modal-body">
                        <p>Apakah anda yakin menghapus data ini?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.example-modal -->
    <?php
            }
        }
    ?>
  </section>
<?php include '../static/bot.php'; ?>
