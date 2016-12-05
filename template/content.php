<?php
include("koneksi.php");
?>

<section class="content-header">
      <h1>
       POLITEKNIK NEGERI SEMARANG
      </h1>
      </section>
<section class="content">
      <div class="row">
        <div class="col-md-12">
          

          <div class="box">
            <div class="box-header">
              <h3 class="box-title" align="center"><p align="center">Data Mahasiswa</p></h3>
               
            </div>
            <div style="float: center;">
              
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-striped">
                <tbody><tr>
                  <th>NIM</th>
                  <th>Name</th>
                  <th>Kelas</th>
                  <th>Jurusan</th>
                  <th>Prodi</th>
                  <th>AKSI</th>

                </tr>
                <td></td><td></td><td></td><td></td><td></td>
                <td><a href="http://localhost/template/index.php?page=content">
                <button type="button" class="btn btn-success">Create</button></td>
              </tr>
                      <?php
                      
                      while($row=mysql_fetch_array($query)){
                      
                      ?>
                <tr>
                  <td name="nim"><?php echo $row['nim']; ?></td>
                  <td><?php echo $row['nama_mhs']; ?></td>
                  <td><?php echo $row['kls']; ?></td>
                  <td><?php echo $row['jur']; ?></td>
                  <td><?php echo $row['prodi']; ?></td>
                  <td><div class="btn-group-horizontal">
                    
                       <a href="update.php?nim=<?php echo $row['nim']; ?>"><button type="button" class="btn btn-warning" data-toggle="modal" >Update</button></a>
                      <a href="delete.php?nim=<?php echo $row['nim']; ?>"><button type="button" class="btn btn-info" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')">Delete</button></a>
                    
                
                    </div>
                  </td>
                </tr>
                <?php } ?>
                
              </tbody></table>

          </div>
       
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      
    </section>
  </post>

  <!--CREATE-->
  <form action="create.php" method="POST">
<section class="content-header">
      <h1>
        Form Create Data
      </h1>
         <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Data Mahasiswa</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="NIM">NIM</label>
                  <input type="text" class="form-control" name="nim" placeholder="Masukkan NIM">
                </div>
                <div class="form-group">
                  <label for="Nama">Nama</label>
                  <input type="Text" class="form-control" name="nama" placeholder="Ketikkan Nama">
                </div>
                <div class="form-group">
                  <label for="kelas">Kelas</label>
                  <input type="text" class="form-control" name="kelas" placeholder="Ketikkan Kelas">
                </div>
                <div class="form-group">
                  <label for="jurusan">Jurusan</label>
                  <input type="text" class="form-control" name="jur" placeholder="Ketikkan Jurusan">
                </div>
                <div class="form-group">
                  <label for="prodi">Prodi</label>
                  <input type="text" class="form-control" name="prodi" placeholder="Ketikkan Prodi">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Save</button>
                <button type="submit" class="btn btn-warning">Save Change</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

   
        </section>
      </post>

    <!-- EDIT -->
   
         