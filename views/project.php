<?php
if (isset($_GET['hapus']))  {
  $id = $_GET['hapus'];
  $q = mysqli_query($conn, "delete from project where id_p=$id");
  
}
?>

<div class="row">
  <div class="col-md-12">
    <h1>
      Project
      <a href="?menu=tambah-project" class="btn btn-primary">Tambah</a>
    </h1>
    <table class="table table-striped" id="">
      <thead>
        <tr>
          <th width="5%">#</th>
          <th width="15%">FOTO</th>
          <th>NAMA</th>
          <th>KETERANGAN</th>
          <th width="20%">AKSI</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $q = mysqli_query($conn, "select * from project");
        while($data = mysqli_fetch_array($q)) {?>
        <tr>
          <td><?=$data['id_p']?></td>
          <td><img src="../foto/<?=$data['foto']?>" width="130px"></td>
          <td><?=$data['nama_p']?></td>
          <td><?=$data['keterangan']?></td>
          <td>
            <a href="?menu=ubah-project&id=<?=$data['id_p']?>" class="btn btn-info">Ubah</a>
            <a onclick="hapus(<?=$data['id_p']?>)" class="btn btn-danger">hapus</a>
          </td>
        </tr>
        <div class="modal fade" id="modal-<?=$data['id_p']?>">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header bg-danger text-white">
                YAKIN HAPUS?
              </div>
              <div class="modal-body">
                apakah yakin ingin menghapus ini?
              </div>
              <div class="modal-footer">
                <a onclick="hapus(<?=$data?>" class="btn btn-danger">ya</a>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
              </div>
            </div>
          </div>
        </div>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>

<script>
  function hapus(id) {
    let h = confirm('hapus project ini?');
    if(h) {
      location.href = "?menu=project&hapus="+id;
    }
  }
</script>