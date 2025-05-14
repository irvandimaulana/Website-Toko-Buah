<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM tambah_buah WHERE id='$id'");
$view = mysqli_fetch_array($query);
?>


<section class="content">
    <div class="container-fluid">
<div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Edit Data Pasokan Buah</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form method='get' action='update/update_pasokan.php'>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nama Buah</label>
                        <input type="text" class="form-control" placeholder="Nama Buah" name='nama' value="<?php echo $view['nama'];?>">
                        <input type="text" class="form-control" placeholder="Nama Buah" name='id' value="<?php echo $view['id'];?>" hidden>
  
                    </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Tanggal Masuk</label>
                        <input type="text" class="form-control" placeholder="Tanggal Masuk" name='tgl_msk' value="<?php echo $view['tgl_msk'];?>">
                      </div>
                    </div>
                    </div>
                     <div class="row">
                    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Jumlah Pasokan/Kg</label>
                        <input type="text" class="form-control" placeholder="Jumlah" name='jml' value="<?php echo $view['jml'];?>">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Pemasok</label>
                        <input type="text" class="form-control" placeholder="Pemasok" name='pemasok' value="<?php echo $view['pemasok'];?>">
                      </div>
                    </div>
                  </div>
                  <button type="submit" class = "btn btn-sm btn-info">Simpan</button>
                </form>
              </div>
              <!-- /.card-body -->
            </div>

</div>
</section>