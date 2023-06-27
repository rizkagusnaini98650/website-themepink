<!DOCTYPE html>
<html>

<head>
    <title>Membuat CRUD Dengan CodeIgniter | https://sugrahaku.com</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
    <script src="<?php echo base_url('assets/js/jquery-3.1.1.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
</head>

<body>
    <div class="container">
        <h1 class="text-center">Data Orang</h1>
        <p class="text-center">Selamat Datang, <?php echo $this->session->userdata("email"); ?></p>
        <div class="form-group text-right">
            <a data-toggle="modal" data-target="#tambah-data" class="btn btn-primary">Tambah</a>

        </div>
        <?= $this->session->flashdata('notif') ?>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>

                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>email</th>
                    <th>umur</th>
                    <th>alamat</th>
                    <th>hobi</th>

                </tr>
            </thead>
            <tbody>
                <?php $no = 0;
                foreach ($data as $dt) { ?>
                    <tr>
                        <td><?php echo ++$no; ?></td>
                        <td><?php echo $dt['Firstname']; ?></td>
                        <td><?php echo $dt['Lastname']; ?></td>
                        <td><?php echo $dt['email']; ?></td>
                        <td><?php echo $dt['umur']; ?></td>
                        <td><?php echo $dt['alamat']; ?></td>
                        <td><?php echo $dt['hobi']; ?></td>
                        <td>
                            <a href="javascript:;" data-id="<?php echo $dt['id'] ?>" data-Firstname="<?php echo $dt['Firstname'] ?>" data-Lastname="<?php echo $dt['Lastname'] ?>" data-email="<?php echo $dt['email'] ?>" data-toggle="modal" data-target="#edit-data">
                                <button data-toggle="modal" data-target="#ubah-data" class="btn btn-info">Ubah</button>
                            </a>
                            <a href="#" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <!-- Modal Tambah -->
    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="tambah-data" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                    <h4 class="modal-title">Tambah Data</h4>
                </div>
                <form class="form-horizontal" action="<?php echo base_url('user/tambah') ?>" method="post" enctype="multipart/form-data" role="form">
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="col-lg-2 col-sm-2 control-label">Firstname</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" name="Firstname" placeholder="Tuliskan Nama Depan">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 col-sm-2 control-label">Lastname</label>
                            <div class="col-lg-10">
                                <textarea class="form-control" name="Lastname" placeholder="Lastname"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 col-sm-2 control-label">email</label>
                            <div class="col-lg-10">
                                <textarea class="form-control" name="email" placeholder="email"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 col-sm-2 control-label">umur</label>
                            <div class="col-lg-10">
                                <textarea class="form-control" name="umur" placeholder="umur"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 col-sm-2 control-label">alamat</label>
                            <div class="col-lg-10">
                                <textarea class="form-control" name="alamat" placeholder="alamat></textarea>
                          </div>
                      </div>
                      <div class=" form-group">
                          <label class="col-lg-2 col-sm-2 control-label">hobi</label>
                          <div class="col-lg-10">
                              <input type="text" class="form-control" name="hobi" placeholder="hobi">
                          </div>
                      </div>
                  </div>
                  <div class="modal-footer">
                      <button class="btn btn-info" type="submit"> Simpan&nbsp;</button>
                      <button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
                  </div>
                 </form>
             </div>
         </div>
     </div>
 </div>
 <!-- END Modal Tambah -->
 <!-- Modal Ubah -->
 <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="edit-data" class="modal fade">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                 <h4 class="modal-title">Ubah Data</h4>
             </div>
             <form class="form-horizontal" action="<?php echo base_url('admin/ubah') ?>" method="post" enctype="multipart/form-data" role="form">
              <div class="modal-body">
                      <div class="form-group">
                          <label class="col-lg-2 col-sm-2 control-label">Firstname</label>
                          <div class="col-lg-10">
                           <input type="hidden" id="Firstname" name="Firstname">
                              <input type="text" class="form-control" id="Firstname" name="Firstname" placeholder="Tuliskan Nama Depan">
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-lg-2 col-sm-2 control-label">Lastname</label>
                          <div class="col-lg-10">
                           <input type="hidden" id="Lastname" name="Lastname">
                              <input type="text" class="form-control" id="Lastname" name="Lastname" placeholder="Tuliskan Nama Belakang">
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-lg-2 col-sm-2 control-label">Lastname</label>
                          <div class="col-lg-10">
                           <input type="hidden" id="Lastname" name="Lastname">
                              <input type="text" class="form-control" id="Lastname" name="Lastname" placeholder="Tuliskan Nama Belakang">
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-lg-2 col-sm-2 control-label">email</label>
                          <div class="col-lg-10">
                           <input type="hidden" id="email" name="email">
                              <input type="text" class="form-control" id="email" name="email" placeholder="Tuliskan nama email">
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-lg-2 col-sm-2 control-label">umur</label>
                          <div class="col-lg-10">
                           <input type="hidden" id="umur" name="umur">
                              <input type="text" class="form-control" id="umur" name="umur" placeholder="Tuliskan umur">
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-lg-2 col-sm-2 control-label">alamat</label>
                          <div class="col-lg-10">
                           <input type="hidden" id="alamat" name="alamat">
                              <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Tuliskan alamat">
                          </div>
                      </div>
                 
                      <div class="form-group">
                          <label class="col-lg-2 col-sm-2 control-label">hobi</label>
                          <div class="col-lg-10">
                              <input type="text" class="form-control" id="hobi" name="hobi" placeholder="Tuliskan hobi">
                          </div>
                      </div>
                  </div>
                  <div class="modal-footer">
                      <button class="btn btn-info" type="submit"> Simpan&nbsp;</button>
                      <button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
                  </div>
                 </form>
             </div>
         </div>
     </div>
 </div>
 <!-- END Modal Ubah -->
 <script>
     $(document).ready(function() {
         // Untuk sunting
         $('#edit-data').on('show.bs.modal', function (event) {
             var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
             var modal          = $(this)

             // Isi nilai pada field
             modal.find('#Firstname').attr("value",div.data('Firstname'));
             modal.find('#Lastname').attr("value",div.data('Lastname'));
             modal.find('#email').attr("value",div.data('email'));
             modal.find('#mur').attr("value",div.data('umur'));
             modal.find('#alamat').attr("value",div.data('alamat'));
             modal.find('#hobi').attr("value",div.data('hobi'));
         });
     });
 </script>
</body>
</html>