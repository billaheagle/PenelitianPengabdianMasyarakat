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
                        <th>Bidang Keahlian</th>
                        <th>Tingkat</th>
                        <th>Tahun</th>
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
                        <td class="text-left"><?php echo $show['bidang_keahlian']; ?></td>
                        <td><?php echo $show['tingkat']; ?></td>
                        <td><?php echo $show['tahun']; ?></td>
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
                        <th>Bidang Keahlian</th>
                        <th>Tingkat</th>
                        <th>Tahun</th>
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
	                <h4 class="modal-title">Modal Tambah</h4>
	            </div>
                <form action="#">
                    <div class="modal-body row">
                        <div class="col-lg-6" >
                            <div class="form-group"> 
                                <label>Bidang Keahlian</label>
                                <input type="text" placeholder="Bidang Keahlian" name="bidang_keahlian" class="form-control" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Tingkat</label>
                                <select name="tingkat" class="form-control">
                                    <option>Tingkat</option>
                                    <?php foreach($tingkat as $s) { 
                                        echo "<option value='$s'>$s</option>";
                                    } ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Tahun</label>
                                <select name="tahun" class="form-control">
                                    <option>Tahun</option>
                                    <?php
                                    $s = 2010;
                                    while($s < 2025) {  
                                        echo "<option value='$s'>$s</option>";
                                        $s++;
                                    } ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="custom-file">
                                <label>File</label>
                                <input type="file" name="file" class="custom-file-input" id="customFile" autocomplete="off">
                            </div>
                        </div>    
               	    </div>
	                <div class="modal-footer">
	                   <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
	                <h4 class="modal-title">Modal Edit</h4>
	            </div>
                <form action="#">
                    <div class="modal-body row">
                        <input name="id" type="hidden" value="<?php echo $show['id']; ?>">
                            <div class="col-lg-6" >
                                <div class="form-group">
                                    <label>Bidang Keahlian</label>
                                    <input type="text" placeholder="Bidang Keahlian" name="bidang_keahlian" value="<?php echo $show['bidang_keahlian']; ?>" class="form-control" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Tingkat</label>
                                    <select name="tingkat" class="form-control">
                                        <?php foreach($tingkat as $s) {  
                                            if($s == $show['tingkat']) {
                                                echo "<option selected value='$s'>$s</option>";
                                            } else {
                                                echo "<option value='$s'>$s</option>";
                                            }
                                        } ?>
                                    </select>
                                </div>    
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Tahun</label>
                                    <select name="tahun" class="form-control">
                                        <?php
                                            $s = 2010;
                                            while($s < 2025) {  
                                                if($s == $show['tahun']) {
                                                    echo "<option selected value='$s'>$s</option>";
                                                } else {
                                                    echo "<option value='$s'>$s</option>";
                                                }
                                                $s++;
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="custom-file">
                                    <label>File</label>
                                    <input type="file" name="file" class="custom-file-input" id="customFile" autocomplete="off">
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
	                <h4 class="modal-title">Modal Delete</h4>
	            </div>
                <form action="#">
                    <div class="modal-body">
                        <input name="id" type="hidden" value="<?php echo $show['id']; ?>">
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
