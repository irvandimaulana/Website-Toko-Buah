<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg">
                            Tambah Data
                        </button>
                        <br> </br>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Buah</th>
                                    <th>Tanggal Jual</th>
                                    <th>Jumlah Penjualan/Kg</th>
                                    <th>Harga Rp</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 0;
                                $query = mysqli_query($koneksi, "SELECT * FROM penjualan_buah");
                                while ($mhs = mysqli_fetch_array($query)) {
                                    $no++;
                                ?>
                                    <tr>
                                        <td width=5%><?php echo $no; ?></td>
                                        <td><?php echo $mhs['nama']; ?></td>
                                        <td><?php echo $mhs['tgl']; ?></td>
                                        <td><?php echo $mhs['jml']; ?></td>
                                        <td><?php echo $mhs['hrg']; ?></td>
                                        <td> 
                                          <a onclick="hapus_data(<?php echo $mhs['id']; ?>)" class="btn btn-sm btn-danger">Hapus</a>
                                          <a href="index.php?page=edit-data&& id=<?php echo $mhs['id']; ?>" class="btn btn-sm btn-success">Edit</a>
                                          <a class= "view-data btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-view" 
                                          data-nama="<?php echo $mhs['nama']; ?>"
                                          data-tanggaljual="<?php echo $mhs['tgl']; ?>"
                                          data-jumlahbeli="<?php echo $mhs['jml']; ?>"
                                          data-harga="<?php echo $mhs['hrg']; ?>">View Data</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>

                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>

 <!-- Tambah Data  -->
<div class="modal fade" id="modal-lg">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Data</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="get" action="add/tambah_data.php">
            <div class="modal-body">
            
              <div class="form-row">
                <div class="col">
                <select class="custom-select" id="inputGroupSelect01" name="nama" required>
                    <option selected>Pilih Buah</option>
                    <option value="Semangka">Semangka</option>
                    <option value="Jambu">Jambu</option>
                    <option value="Manggis">Manggis</option>
                    <option value="Buah Naga">Buah Naga</option>
                    <option value="Strawberry">Strawberry</option>
                    <option value="Jeruk">Jeruk</option>
                    <option value="Apel">Apel</option>
                    <option value="Mangga">Mangga</option>
                    <option value="Durian">Durian</option>
                    <option value="Melon">Melon</option>
                    <option value="Alpukat">Alpukat</option>
                    </select>
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="Tanggal Jual" name="tgl" required>
                </div>
                   <div class="col">
                  <input type="text" class="form-control" placeholder="Jumlah Beli/Kg" name="jml" required>
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="Bayar" name="hrg" required>
                </div>
                </div>
           
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
        </form>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
 <!-- Akhir Tambah Data  -->
 

  <!-- View Data  -->
 <div class="modal fade" id="modal-view">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">View Data</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="get" action="add/tambah_data.php">
            <div class="modal-body">
            
              <div class="form-row">
                <div class="col">
                    Nama Buah : <span id='nama'> </span>
                </div>
                <div class="col">
                  Tanggal Jual : <span id='tgl'> </span>
                </div>
                   <div class="col">
                  Jumlah Beli/Kg : <span id='jml'> </span>
                </div>
                <div class="col">
                  Bayar : <span id='hrg'> </span>
                </div>
                </div>
           
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
            </div>
        </div>
        </form>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
 <!-- Akhir View Data  -->

  <!-- Awal Hapus Data  -->
<script>
  function hapus_data (data_id){
    Swal.fire({
      title: 'Apakah Data Akan Dihapus?',
      showCancelButton:true,
      confirmButtonText:'Hapus Data',
      confirmButtonColor:'#CD5C5C',
    }).then((result)=>{
      if (result.isConfirmed){
        window.location=("delete/hapus_data.php?id="+data_id)
      }
    })
  }
  </script>
   <!-- Akhir Hapus Data  -->