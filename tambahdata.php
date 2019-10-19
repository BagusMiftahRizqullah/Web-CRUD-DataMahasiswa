<!DOCTYPE html>
<html>
<head>
 <title>Form Biodata</title>
 <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head> <script type="text/javascript">
  function validate(){
   var nama= document.getElementById('nama').value;
   var Alamat= document.getElementById('alamat').value;
   var Pendidikan= document.getElementById('pendidikan').value;
   var jeniskelamin= document.getElementById('jeniskelamin').value;
   if(nama==''||Alamat==''||Pendidikan==''){
    alert("Maaf Form anda belum lengkap !!");
   }else{
    alert("Terima Kasih telah mendaftar "+nama);
   }
   return false;
  }
</script>
<script>
  function hanyaAngka(evt) {
		  var charCode = (evt.which) ? evt.which : event.keyCode
		   if (charCode > 31 && (charCode < 48 || charCode > 57))
 
		    return false;
		  return true;
		}
 </script>
<body>
 <div class="container">
  <div class="row">
   <div class="col-md-3 col-sm-3 "></div>
   <div class="col-md-6 col-sm-6 ">
    <h2 style="align-content: center;">Form Pendaftaran</h2>
    
    <form onsubmit="return validate();" method="post" action="simpandata.php">
     <div class="form-group">
                  <label for="nim">NIM</label>
                  <input type="text" class="form-control" maxlength="10" onkeypress="return hanyaAngka(event)" name="nim" >
                </div>

      <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" class="form-control" name="nama" >
                </div>

        <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <input type="text" class="form-control" name="alamat" >
                </div>


        <div class="form-group">
                  <label for="nomertelepon">Nomer Telephone</label>
                  <input type="text" class="form-control" maxlength="13" onkeypress="return hanyaAngka(event)" name="notelpon" >
                </div>

      <div class="form-group">
                  <label>Pendidikan</label>
                  <select class="form-control" name="pendidikan">
                    <option value="">Pilih Pendidikan</option>
                    <option value="SD">SD</option>
                    <option value="SMP">SMP</option>
                    <option value="SMA">SMA</option>
                    <option value="Perguruan Tinggi">Perguruan Tinggi</option>
                  </select>
                </div>

                <div class="row">
                    <div class="col-md-6">
                      <div class="radio">
                        <label>
                          <input type="radio" name="jenisKelamin"  value="Pria"> Pria
                        </label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="radio">
                        <label>
                          <input type="radio" name="jenisKelamin"  value="Wanita"> Wanita
                        </label>
                      </div>
                    </div>
                  </div>
        
         <input type="submit" name="btn" class="btn btn-primary btn-block" value="REGISTER">
    </form>
   </div>
   <div class="col-md-3 col-sm-3"></div>
  </div>
 </div>
</body>
</html>