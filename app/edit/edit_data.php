<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM penjualan_buah WHERE id='$id'");
$view = mysqli_fetch_array($query);
?>


<section class="content">
    <div class="container-fluid">
<div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Edit Data Penjualan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form method='get' action='update/update_data.php'>
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
                        <label>Tanggal Beli</label>
                        <input type="text" class="form-control" placeholder="Tanggal Beli" name='tgl' value="<?php echo $view['tgl'];?>">
                      </div>
                    </div>
                    </div>
                     <div class="row">
                    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Jumlah Beli/Kg</label>
                        <input type="text" class="form-control" placeholder="Jumlah" name='jml' value="<?php echo $view['jml'];?>">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Harga</label>
                        <input type="text" class="form-control" placeholder="Harga" name='hrg' value="<?php echo $view['hrg'];?>">
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