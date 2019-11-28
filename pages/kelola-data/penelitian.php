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
                  <tr>
                        <td>1</td>
                        <td class="text-left">ESQ Berbagi</td>
                        <td>ACT</td>
                        <td>Jumat, 1 Januari 2019</td>
                        <td>Jakarta</td>
                        <td>Blablabla</td>
                        <td width="5%">
                            <button class="btn btn-primary btn-xs"><i class="fa fa-info-circle"></i></button>
                        </td>
                        <td width="9%">
                            <button class="btn btn-warning btn-xs" data-toggle="modal" data-target="#edit"><i class="fa fa-edit"></i></button>
            
                            <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete"><i class="fa fa-trash-o"></i></button>
                       
                            <button class="btn btn-info btn-xs"><i class="fa fa-print"></i></button>
                        </td>
                  </tr>  
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
                <form action="#">
                <div class="modal-body row">
                        <div class="col-xs-6">
                            <div class="form-group">
                            <label>Tema</label>
                            <input type="text" placeholder="Tema" name="tema" class="form-control" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-xs-6">
                             <div class="form-group">
                            <label>Judul</label>
                            <input type="text" placeholder="Judul" name="judul" class="form-control" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-xs-12">
                             <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea class="form-control" rows="3" name="deskripsi"></textarea>
                            </div>
                        </div>
                        <div class="col-xs-6">
                             <div class="form-group">
                            <label>Tempat</label>
                            <input type="text" placeholder="Tempat" name="tempat" class="form-control" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="form-group">
                            <label>Tanggal</label>
                                <div class="input-group">
                                <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control" name="tanggal" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="form-group">
                            <label>Sumber Pembiayaan</label>
                            <input type="text" placeholder="Sumber Pembiayaan" name="sumber_pembiayaan" class="form-control" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="form-group">
                            <label>Biaya</label>
                            <div class="input-group">
                            <span class="input-group-addon" style="background-color: rgb(230, 230, 230);">Rp.</span>
                            <input type="text" name="biaya" placeholder="Biaya" class="form-control" autocomplete="off">
                            </div>
                        </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="form-group">
                            <label>Evaluasi</label>
                            <textarea class="form-control" name="evaluasi" rows="3"></textarea>
                            </div>
                        </div>
                         <div class="col-xs-12">
                            <div class="form-group">
                            <label for=" Mahasiswa">Mahasiswa yang Terlibat</label>
                                <div class="input-group">
                                    <input type="text" name="id_user" placeholder="Mahasiswa" class="form-control" autocomplete="off">
                                <span class="input-group-btn">
                                <button class="btn btn-flat btn-secondary" type="file">Tambah</button>
                                </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="form-group">
                            <label>Integrasi</label>
                            <input type="text" placeholder="Kode Mata Kuliah" name="id_matakuliah" class="form-control" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="custom-file">
                                <label>File</label>
                                <input type="file" class="custom-file-input" name="file" id="customFile">
                            </div>   
                        </div>    
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success">Save</button>
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
                        <div class="col-xs-6" >
                            <div class="form-group">
                            <label>Tema</label>
                            <input type="text" placeholder="Tema" name="tema" class="form-control" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="form-group">
                            <label>Judul</label>
                            <input type="text" placeholder="Judul" name="judul" class="form-control" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea class="form-control" name="deskripsi" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="form-group">
                            <label>Tempat</label>
                            <input type="text" placeholder="Tempat" name="tempat" class="form-control" autocomplete="off">
                            </div>
                        </div>
                       <div class="col-xs-6">
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
                        <div class="col-xs-6">
                            <div class="form-group">
                            <label>Sumber Pembiayaan</label>
                            <input type="text" placeholder="Sumber Pembiayaan" name="sumber_pembiayaan" class="form-control" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="form-group">
                            <label>Biaya</label></br>
                                <div class="input-group">
                                <span class="input-group-addon" style="background-color: rgb(230, 230, 230);">Rp.</span>
                                <input type="text" name="biaya" placeholder="Biaya" class="form-control" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="form-group">
                            <label>Evaluasi</label></br>
                            <textarea class="form-control" name="biaya" rows="3"></textarea>
                            </div>
                        </div>
                         <div class="col-xs-12">
                            <div class="form-group">
                            <label for=" Mahasiswa">Mahasiswa yang Terlibat</label>
                                <div class="input-group">
                                <input type="text" placeholder="Mahasiswa" name="id_user" class="form-control" autocomplete="off">
                                <span class="input-group-btn">
                                <button class="btn btn-flat btn-secondary" type="file">Tambah</button>
                                </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="form-group">
                            <label>Integrasi</label></br>
                            <input type="text" placeholder="Kode Mata Kuliah" name="id_matakuliah" class="form-control" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-xs-6">
                             <div class="custom-file">
                                <label>File</label>
                                <input type="file" name="file" class="custom-file-input" id="customFile">
                            </div>   
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
