<?php
// ACTION UNTUK UBAH DATANYA
if (isset($_POST['simpan'])) {
  $nama = $_POST['nama'];
  $jabatan = $_POST['jabatan'];
  $perusahaan = $_POST['perusahaan'];
  $mobile = $_POST['mobile'];
  $email = $_POST['email'];
  $alamat = $_POST['alamat'];
  $foto = $_POST['foto'];

  $query = mysqli_query($conn, "update user set nama='$nama', jabatan='$jabatan', perusahaan='$perusahaan', mobile='$mobile', email='$email', alamat='$alamat', foto='$foto' where id=1");
}


// ACTION UNTUK AMBIL DATA SAAT INI
$query = mysqli_query($conn, "select * from user where id=1");
$data = mysqli_fetch_assoc($query);
?>
<div class="row">
  <div class="col-md-6">
    <h1>Update Profile</h1>
    <form action="" method="POST"> 
      <div class="form-group">
        <label for="form-label">NAMA LENGKAP</label>
        <input name="nama" type="text" class="form-control" value="<?=$data['nama']?>" >
      </div>
      <div class="form-group">
        <label for="">Jabatan</label>
        <input name="jabatan" type="text" value="<?=$data['jabatan']?>" class="form-control">
      </div>
      <div class="form-group">
        <label for="">Perusahaan</label>
        <input name="perusahaan" type="text" value="<?=$data['perusahaan']?>" class="form-control">
      </div>
      <div class="form-group">
        <label for="">Mobile</label>
        <input name="mobile" type="text" value="<?=$data['mobile']?>" class="form-control">
      </div>
      <div class="form-group">
        <label for="">Email</label>
        <input name="email" type="text" value="<?=$data['email']?>" class="form-control">
      </div>
      <div class="form-group">
        <label for="">Alamat</label>
        <input name="alamat" type="text" value="<?=$data['alamat']?>" class="form-control">
      </div>
      <div class="form-group">
        <label for="">Foto</label>
        <img src="<?=$data['foto']?>" width="100" style="border-radius:50%">
        <input name="foto" type="text" value="" class="form-control">
      </div>
      <button class="btn btn-primary" type="submit" name="simpan">Simpan</button>
    </form>
  </div>
</div>