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
                        <th rowspan="2">No</th>
                        <th rowspan="2">Kode</th>
                        <th rowspan="2">Mata Kuliah</th>
                        <th rowspan="2">Semester</th>
                        <th colspan="2">SKS</th>
                        <th rowspan="2">Jenis</th>
                        <th rowspan="2">File</th>
                        <th rowspan="2" colspan="3">Action</th>
                    </tr>
                    <tr>
                        <th>Teori</th>
                        <th>Lab</th>
                    </tr>
                </thead>
                <tbody>
                     <tr>
                        <td>1</td>
                        <td class="text-left">CSSE303</td>
                        <td>Rekayasa Perangkat Lunak</td>
                        <td>5</td>
                        <td>3</td>
                        <td>0</td>
                        <td>Wajib</td>
                        <td>
                        	<button class="btn btn-block btn-primary btn-xs"><i class="fa fa-info-circle"></i></button>
                        </td>
                        <td width="1%">
                        	<button class="btn btn-warning btn-xs" data-toggle="modal" data-target="#edit"><i class="fa fa-edit"></i></button>
                        </td>
                        <td width="1%">
                        	<button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete"><i class="fa fa-trash-o"></i></button>
                        </td>
                        <td width="1%">
                        	<button class="btn btn-info btn-xs"><i class="fa fa-print"></i></button>
                        </td>
                    </tr>  
                </tbody>
                <tfoot>
                <tr>
                        <th rowspan="2">No</th>
                        <th rowspan="2">Kode</th>
                        <th rowspan="2">Mata Kuliah</th>
                        <th rowspan="2">Semester</th>
                        <th colspan="2">SKS</th>
                        <th rowspan="2">Jenis</th>
                        <th rowspan="2">File</th>
                        <th rowspan="2" colspan="3">Action</th>
                    </tr>
                    <tr>
                        <th>Teori</th>
                        <th>Lab</th>
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
                <div class="modal-body">
                    <form action="GET">
                        <div class="col-xs-4" >
                            <label>Kode Mata Kuliah</label></br>
                            <input type="text" placeholder="Kode" name="kodematakuliah" class="form-control">
                            <br>
                        </div>
                        <div class="col-xs-8">
                            <label>Mata Kuliah</label></br>
                            <input type="text" placeholder="Mata Kuliah" name="matakuliah" class="form-control">
                            <br>
                        </div>
                        <div class="col-xs-4">
                            <label>Semester</label></br>
                            <select name="semester" class="form-control">
                                <option value="1">Semester</option>
                            </select>
                            <br>
                        </div>
                        <div class="col-xs-4">
                            <label>SKS Teori</label></br>
                            <select name="semester" class="form-control">
                                <option value="1">SKS Teori</option>
                            </select>
                            <br>
                        </div>
                        <div class="col-xs-4">
                            <label>SKS Lab</label></br>
                            <select name="semester" class="form-control">
                                <option value="1">SKS Lab</option>
                            </select>
                            <br>
                        </div>         
                        <div class="col-xs-4">
                            <label>Jenis</label></br>
                            <select name="jenis" class="form-control">
                                <option value="Wajib">Jenis</option>
                            </select>
                            <br>
                        </div>
                        <div class="col-xs-8">
                            <label for="File">File</label>
                            <div class="input-group">
                                    <input type="text" class="form-control">
                                <span class="input-group-btn">
                                <button class="btn btn-info btn-flat" type="file">Browse</button>
                                </span>
                            </div>
                            <br>
                        </div>    
                    </form>
               	</div>
	            <div class="modal-footer">
	                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	                <button type="button" class="btn btn-success">Save</button>
	            </div>
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
                <div class="modal-body">
                <form action="GET">
                        <div class="col-xs-4" >
                            <label>Kode Mata Kuliah</label></br>
                            <input type="text" placeholder="Kode" name="kodematakuliah" class="form-control">
                            <br>
                        </div>
                        <div class="col-xs-8">
                            <label>Mata Kuliah</label></br>
                            <input type="text" placeholder="Mata Kuliah" name="matakuliah" class="form-control">
                            <br>
                        </div>
                        <div class="col-xs-4">
                            <label>Semester</label></br>
                            <select name="semester" class="form-control">
                                <option value="1">Semester</option>
                            </select>
                            <br>
                        </div>
                        <div class="col-xs-4">
                            <label>SKS Teori</label></br>
                            <select name="semester" class="form-control">
                                <option value="1">SKS Teori</option>
                            </select>
                            <br>
                        </div>
                        <div class="col-xs-4">
                            <label>SKS Lab</label></br>
                            <select name="semester" class="form-control">
                                <option value="1">SKS Lab</option>
                            </select>
                            <br>
                        </div>         
                        <div class="col-xs-4">
                            <label>Jenis</label></br>
                            <select name="jenis" class="form-control">
                                <option value="Wajib">Jenis</option>
                            </select>
                            <br>
                        </div>
                        <div class="col-xs-8">
                            <label for="File">File</label>
                            <div class="input-group">
                                    <input type="text" class="form-control">
                                <span class="input-group-btn">
                                <button class="btn btn-info btn-flat" type="file">Browse</button>
                                </span>
                            </div>
                            <br>
                        </div>    
                    </form>
               	</div>
	            <div class="modal-footer">
	                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	                <button type="button" class="btn btn-warning">Save changes</button>
	            </div>
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
                <div class="modal-body">
                       <p>Apakah anda yakin menghapus data ini&#63;</p>  
               	</div>
	            <div class="modal-footer">
	                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	                <button type="button" class="btn btn-danger">Delete</button>
	            </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.example-modal -->
  </section>
<?php include '../static/bot.php'; ?>
