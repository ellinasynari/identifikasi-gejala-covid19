
<div class="container">

<!-- Outer Row -->
<div class="row justify-content-center">

    <div class="col-xl-8 col-lg-10 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                        <div class="p-5">
                        <?php
include"koneksi.php";
if(isset($_POST['simpan'])){
$simpan=mysqli_query($kon,"insert into user values ('', '$_POST[username]','$_POST[password]','$_POST[nm_lengkap]', '$_POST[jns_kelamin]', '$_POST[usia]', '$_POST[alamat]', '$_POST[no_hp]', '$_POST[pekerjaan]')");

if($simpan){
echo"<script>

window.location.href='index.php?p=regscs';
</script>";
}else{
echo"<script>
window.location.href='index.php?p=registrasi';
</script>";
}
}
?>
<div id="kat">
<div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Silahkan Melakukan Registrasi</h1>
                            </div>
<form action='' method="post">
<div class="form-group">
    Username (Gunakan nama+umur, Contoh: rani22)
<input name="username" type="text" required class="form-control form-control-user" />
</div>
<div class="form-group">
    Password
<input name="password" placeholder="Password" required type="password" class="form-control form-control-user" placeholder="Masukkan Password...">

</div>
<div class="form-group">
    Nama Lengkap
<input name="nm_lengkap" type="text" required class="form-control form-control-user" />
</div>
<div class="form-group">
    Jenis Kelamin
<select name="jns_kelamin" id="gender" required class="form-control form-control-user">
    								<option value="">Silahkan Dipilih</option>
                   					 <option value="L">Laki-Laki</option>
                  					  <option value="P">Perempuan</option>
</select>
</div>
<div class="form-group">
    Usia
<input name="usia" type="text" required class="form-control form-control-user" />

</div>
<div class="form-group">
    Alamat
<input name="alamat" type="text" required class="form-control form-control-user" />
</div>
<div class="form-group">
    Nomor HP/Whatsapp
<input name="no_hp" type="number" max="999999999999999" required class="form-control form-control-user" />
</div>
<div class="form-group">
    Pekerjaan
<input name="pekerjaan" type="text" required class="form-control form-control-user" />
</div>


<hr>
<input name="simpan" type="submit" class="btn btn-primary btn-user btn-block" name="Submit" value="DAFTAR"></input>

                                        
</form>
  </div>  
                                    
                </div>

            </div>

        </div>

    </div>
    </div>
    </div>
    </div>