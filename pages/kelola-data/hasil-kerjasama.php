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
    					<th>Judul Kegiatan</th>
    					<th>Lembaga Mitra</th>
    					<th>Tingkat</th>
    					<th>Tanggal</th>
    					<th>Durasi</th>
    					<th>Manfaat</th>
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
    					<td class="text-left"><?php echo $show['judul_kegiatan']; ?></td>
    					<td><?php echo $show['lembaga_mitra']; ?></td>
    					<td><?php echo $show['tingkat']; ?></td>
    					<td><?php echo $show['tanggal']; ?></td>
    					<td><?php echo $show['durasi']; ?></td>
    					<td><?php echo $show['manfaat']; ?></td>
    					<td>
    						<button class="btn btn-block btn-primary btn-xs"><i class="fa fa-info-circle"></i></button>
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
    					<th>Judul Kegiatan</th>
    					<th>Lembaga Mitra</th>
    					<th>Tingkat</th>
    					<th>Tanggal</th>
    					<th>Durasi</th>
    					<th>Manfaat</th>
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
    			<form action="#">
    				<div class="modal-body row">
    					<div class="col-xs-12" >
    						<div class="form-group">
    							<label>Judul Kegiatan</label>
    							<input type="text" placeholder="Judul Kegiatan" name="Judul Kegiatan" class="form-control">
    						</div>
    					</div>
    					<div class="col-xs-6">
    						<div class="form-group">
    							<label>Lembaga Mitra</label>
    							<input type="text" placeholder="Lembaga Mitra" name="Lembaga Mitra" class="form-control">
    						</div>
    					</div>
    					<div class="col-xs-6">
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
    					<div class="col-xs-6">
    						<div class="form-group">
    							<label>Tanggal</label>
    							<div class="input-group">
    								<div class="input-group-addon">
    									<i class="fa fa-calendar"></i>
    								</div>
    								<input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="">
    							</div>
    						</div>
    					</div>
    					<div class="col-xs-6">
    						<div class="form-group">
    							<label>Durasi</label>
    							<input type="text" placeholder="Durasi" name="Durasi" class="form-control">
    						</div>
    					</div>
    					<div class="col-xs-12">
    						<div class="form-group">
    							<label>Manfaat</label>
    							<textarea class="form-control" rows="3"></textarea>
    						</div>
    					</div>
    					<div class="col-xs-12">
    						<div class="custom-file">
    							<label>File</label>
    							<input type="file" class="custom-file-input" id="customFile">
    						</div>
    					</div>    
    					
    				</div>
    				<div class="modal-footer">
    					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    					<button type="submit" class="btn btn-success">Save Changes</button>
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
    			<form action="#">
                    <div class="modal-body row">
                        <input name="id" type="hidden" value="<?php echo $show['id']; ?>">
    					<div class="col-xs-12" >
    						<div class="form-group">
    							<label>Judul Kegiatan</label>
    							<input type="text" placeholder="Judul Kegiatan" name="Judul Kegiatan" class="form-control" value="<?php echo $show['judul_kegiatan']; ?>" autocomplete="off">
    						</div>
    					</div>
    					<div class="col-xs-6">
    						<div class="form-group">
    							<label>Lembaga Mitra</label>
    							<input type="text" placeholder="Lembaga Mitra" name="Lembaga Mitra" class="form-control" value="<?php echo $show['lembaga_mitra']; ?>" autocomplete="off">
    						</div>
    					</div>
    					<div class="col-xs-6">
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
    					<div class="col-xs-6">
    						<div class="form-group">
    							<label>Tanggal</label>
    							<div class="input-group">
    								<div class="input-group-addon">
    									<i class="fa fa-calendar"></i>
    								</div>
    								<input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" value="<?php echo date('d/m/Y', strtotime($show['tanggal']));?>" autocomplete="off">
    							</div>
    						</div>
    					</div>
    					<div class="col-xs-6">
    						<div class="form-group">
    							<label>Durasi</label>
    							<input type="text" placeholder="Durasi" name="Durasi" class="form-control" value="<?php echo $show['durasi']; ?>" autocomplete="off">
    						</div>
    					</div>
    					<div class="col-xs-12">
    						<div class="form-group">
    							<label>Manfaat</label>
    							<textarea class="form-control" rows="3"><?php echo $show['manfaat']; ?></textarea>
    						</div>
    					</div>
    					<div class="col-xs-12">
    						<div class="custom-file">
    							<label>File</label>
    							<input type="file" class="custom-file-input" id="customFile">
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
                <form action="#">
        			<div class="modal-body">
                        <input name="id" type="hidden" value="<?php echo $show['id']; ?>">
        				<p>Apakah anda yakin ingin menghapus data ini?</p>
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
