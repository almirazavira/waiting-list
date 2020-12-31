<?php
error_reporting(0);
include 'header.php'; ?>

<style>

.table td,
.table th{
    padding: 30px;
}
.tooltip .arrow:before {
  border-left-color: #dc3545;
}
.tooltip .tooltip-inner {
  background: #dc3545;
}

</style>

<div class="container">
    <div class="panel">
        <div class="panel-heading">
            
            <div>
            <h4><i class="glyphicon glyphicon-user "></i> Selamat Datang di Restoran EatWell!</h4>
            </div>
            <hr>
            <h4> Waiting List</h4>
        </div>
        <div class="panel-body">
            <div class="panel-body">
                <br/>
 <br>
                
            </div>
            <br/>
            <div class="panel">
            <div class="panel-heading">
                <h4>Ingin menunggu? Silahkan masukkan nama Anda!</h4>
            </div>
            <div class="panel-body">
                <form method="post" action="pengunjung_aksi.php">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nama_pengunjung" placeholder="Masukkan nama ..">
                    </div>
                    <br/>
                    <input type="submit" class="btn btn-primary" value="Submit">
                </form>
            </div>
        </div>
            <div>
            <div class="table-responsive">
                <table class="table table-bordered table-striped" ">

                    <?php
                    include '../koneksi.php';
                    if(mysqli_num_rows($data)){
                    while($d=mysqli_fetch_array($data)){
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $d['nama_pengunjung']; ?></td>
                            <td>
                                <a href="pengunjung_edit.php?id=<?php echo $d['id']; ?>" class="btn btn-sm btn-info">Edit</a>
                                <a href="pengunjung_hapus.php?id=<?php echo $d['id']; ?>" class="btn btn-sm btn-danger">Hapus</a>
                            </td>
                        </tr>
                        <?php
                    }}else{
                        echo
                        '<tr><td colspan="6"><center>Tidak ditemukan</center></td>
                        
                    </tr>' ;
                    }
                    
                    ?>
                </table>
            </div>
            
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>
