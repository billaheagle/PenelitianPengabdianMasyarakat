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
                        <th rowspan="2" style="vertical-align: middle;">No</th>
                        <th rowspan="2" style="vertical-align: middle;">Kode</th>
                        <th rowspan="2" style="vertical-align: middle;">Mata Kuliah</th>
                        <th rowspan="2" style="vertical-align: middle;">Semester</th>
                        <th colspan="2" >SKS</th>
                        <th rowspan="2" style="vertical-align: middle;">Jenis</th>
                        <th rowspan="2" style="vertical-align: middle;">File</th>
                        <th rowspan="2" style="vertical-align: middle;">Action</th>
                    </tr>
                    <tr>
                        <th>Teori</th>
                        <th>Lab</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $no = 1;
                        if($db->show() != null) {
                            foreach($db->show() as $show) {
                    ?>
                     <tr>
                        <td><?php echo $no++; ?></td>
                        <td class="text-left"><?php echo $show['kode_matakuliah']; ?></td>
                        <td><?php echo $show['matakuliah']; ?></td>
                        <td><?php echo $show['semester']; ?></td>
                        <td><?php echo $show['sks_teori']; ?></td>
                        <td><?php echo $show['sks_lab']; ?></td>
                        <td><?php echo $show['jenis']; ?></td>
                        <td width="5%">
                        	<button class="btn btn-primary btn-xs"><i class="fa fa-info-circle"></i></button>
                        </td>
                        <td width="9%">
                        	<button class="btn btn-warning btn-xs" data-toggle="modal" data-target="#edit"><i class="fa fa-edit"></i></button>
                        
                        	<button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete"><i class="fa fa-trash-o"></i></button>
                        
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
                        <th rowspan="2" style="vertical-align: middle;">No</th>
                        <th rowspan="2" style="vertical-align: middle;">Kode</th>
                        <th rowspan="2" style="vertical-align: middle;">Mata Kuliah</th>
                        <th rowspan="2" style="vertical-align: middle;">Semester</th>
                        <th>Teori</th>
                        <th>Lab</th>
                        <th rowspan="2" style="vertical-align: middle;">Jenis</th>
                        <th rowspan="2" style="vertical-align: middle;">File</th>
                        <th rowspan="2" style="vertical-align: middle;">Action</th>
                    </tr>
                    <tr>
                        <th colspan="2">SKS</th>
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
                        <div class="col-xs-4" >
                            <div class="form-group">
                                <label>Kode Mata Kuliah</label>
                                <input type="text" placeholder="Kode" name="kodematakuliah" class="form-control">
                            </div>
                        </div>
                        <div class="col-xs-8">
                            <div class="form-group">
                                <label>Mata Kuliah</label>
                                <input type="text" placeholder="Mata Kuliah" name="matakuliah" class="form-control">
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="form-group">
                                <label>Semester</label>
                                <select name="semester" class="form-control">
                                    <option>Semester</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="Pilihan">Pilihan</option>
                                    <option value="Pendek">Pendek</option>
                                </select>
                            </div>    
                        </div>
                        <div class="col-xs-4">
                            <div class="form-group">
                                <label>SKS Teori</label>
                                <select name="sksteori" class="form-control">
                                    <option>SKS Teori</option>
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="form-group">
                                <label>SKS Lab</label>
                                <select name="skslab" class="form-control">
                                    <option>SKS Lab</option>
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                </select>
                            </div>
                        </div>         
                        <div class="col-xs-4">
                            <div class="form-group">
                                <label>Jenis</label>
                                <select name="jenis" class="form-control">
                                    <option>Jenis</option>
                                    <option value="Wajib">Wajib</option>
                                    <option value="Peminatan AI">Peminatan AI</option>
                                    <option value="PEminatan SE">Peminatan SE</option>
                                    <option value="Pilihan">Pilihan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-8">
                            <div class="form-group">
                                <div class="custom-file">
                                    <label class="custom-file-label" for="customFile">File</label>
                                    <input type="file" class="custom-file-input" id="customFile" name="file">
                                </div>
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

     <div div class="modal fade" id="edit">
    	<div class="modal-dialog">
            <div class="modal-content">
	            <div class="modal-header bg-yellow">
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                <h4 class="modal-title">Edit Data</h4>
	            </div>
               <form action="#">
                    <div class="modal-body row">
                        <input name="id" type="hidden" value="">
                            <div class="col-xs-4" >
                                <div class="form-group">
                                    <label>Kode Mata Kuliah</label>
                                    <input type="text" placeholder="Kode Mata Kuliah" name="kode_matakuliah" class="form-control" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-xs-8">
                                <div class="form-group">
                                    <label>Mata Kuliah</label>
                                    <input type="text" placeholder="Mata Kuliah" name="matakuliah" class="form-control" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-xs-4">
                            <div class="form-group">
                                <label>Semester</label>
                                <select name="semester" class="form-control">
                                    <option>Semester</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="Pilihan">Pilihan</option>
                                    <option value="Pendek">Pendek</option>
                                </select>
                            </div>    
                        </div>
                        <div class="col-xs-4">
                            <div class="form-group">
                                <label>SKS Teori</label>
                                <select name="sks_teori" class="form-control">
                                    <option>SKS Teori</option>
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="form-group">
                                <label>SKS Lab</label>
                                <select name="sks_lab" class="form-control">
                                    <option>SKS Lab</option>
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                </select>
                            </div>
                        </div>         
                        <div class="col-xs-4">
                            <div class="form-group">
                                <label>Jenis</label>
                                <select name="jenis" class="form-control">
                                    <option>Jenis</option>
                                    <option value="Wajib">Wajib</option>
                                    <option value="Peminatan AI">Peminatan AI</option>
                                    <option value="PEminatan SE">Peminatan SE</option>
                                    <option value="Pilihan">Pilihan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-8">
                            <div class="form-group">
                                <div class="custom-file">
                                    <label class="custom-file-label" for="customFile">File</label>
                                    <input type="file" class="custom-file-input" id="customFile" name="file">
                                </div>
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
    
     <div div class="modal fade" id="delete">
    	<div class="modal-dialog">
            <div class="modal-content">
	            <div class="modal-header bg-red">
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                <h4 class="modal-title">Delete Data</h4>
	            </div>
                <form action="#">
                    <input name="id" type="hidden" value="">
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
  </section>
<?php include '../static/bot.php'; ?>
