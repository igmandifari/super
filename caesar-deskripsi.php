<?php
		
        if(isset($_POST['submit1'])){
                function Cipher($ch, $key)
                {
                    if (!ctype_alpha($ch))
                            return $ch;
    
                    $offset = ord(ctype_upper($ch) ? 'A' : 'a');
                    return chr(fmod(((ord($ch) + $key) - $offset), 26) + $offset);
                }
    
                function Encipher($input, $key)
                {
                    $output = "";
    
                    $inputArr = str_split($input);
                    foreach ($inputArr as $ch)
                            $output .= Cipher($ch, $key);
    
                    return $output;
                }
    
                function Decipher($input, $key)
                {
                        return Encipher($input, 26 - $key);
                }
                
                
            }else if(isset($_POST['submit2'])){
                function Cipher($ch, $key)
                {
                    if (!ctype_alpha($ch))
                            return $ch;
    
                    $offset = ord(ctype_upper($ch) ? 'A' : 'a');
                    return chr(fmod(((ord($ch) + $key) - $offset), 26) + $offset);
                }
    
                function Encipher($input, $key)
                {
                    $output = "";
    
                    $inputArr = str_split($input);
                    foreach ($inputArr as $ch)
                            $output .= Cipher($ch, $key);
    
                    return $output;
                }
    
                function Decipher($input, $key)
                {
                        return Encipher($input, 26 - $key);
                }
            }
            ?>
<!DOCTYPE html>
<html>
<head>
	<title>Caesar Cipher</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script>
    $(function () {
        //Initialize Select2 Elements
        $('.select2').select2()

    })
    </script>
</head>
<body>	
	</div>
		<nav class="navbar navbar-dark bg-dark">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<a class="navbar-brand" href="index.php">Super Enkripsi</a>

		<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
			<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
			<li class="nav-item active">
				<a class="nav-link" href="railfence.php">Rail Fence Cipher<span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="caesar.php">Caesar Cipher<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
				<a class="nav-link" href="keyword.php">keyword Cipher<span class="sr-only">(current)</span></a>
			</li>
			</ul>
		</div>
	</nav>
	</div>	
	
	<div class="container">
        
    <tr>
			<td colspan="3">
				<h1 style="text-align:center;">CAESAR CIPHER DESKRIPSI</h1>
			</td>
		</tr>
    
 
  <div class="box box-info">
      
      <br>
      <p class="login-box-msg" style="font-size:20px !important"><b></b></p>    
              <form name="enkripsi" method="post" style="width:80%;">
                <div class="box-body">
                  <div class="form-group">
                    <label>Plain Text :</label>
                    <textarea name="plain" required="true" oninvalid="this.setCustomValidity('Tidak boleh kosong!')" 
                                 oninput="setCustomValidity('')" type="text" class="form-control" name="p" rows="4" cols="50" placeholder="Masukan Plain Text"></textarea>            
                  </div>
                  <div class="form-group">
                    <label>Keyword :</label>
                    <input title="Pilih Key." required="true" oninvalid="this.setCustomValidity('Tidak boleh kosong!')" 
                                 oninput="setCustomValidity('')" type="number" class="form-control" name="metode" placeholder="Keyword">
                  </div>
                  
                  </div>
                
                <div class="box-footer">
                    <table class="table table-hover" style="width:80%; padding:100px;">
                        <tr>
                            <td><input type="submit" name="submit2" value="Decrypt" style="width: 80px" class="btn btn-primary"></td>
                        </tr>
                    </table>
                </div>
              </form>
                <div class="box-body">
                    <label>Hasil Enkripsi</label>
                    <table class="table table-hover" style="width:80%; padding:100px;">
                        <tr style="background-color:white">
                            <td style="text-align:center"><b><?php if (isset($_POST['submit1'])){ echo Encipher($_POST['plain'], $_POST['metode']);} 
                            if (isset($_POST['submit2'])){ echo Decipher($_POST['plain'], $_POST['metode']);}?></b></td>
                        </tr>
                    </table>
                    <label>Teks Asli</label>
                    <table class="table table-hover" style="width:80%; padding:100px;">
                        <tr style="background-color:white">
                            <td style="text-align:center"><b><?php if (isset($_POST['submit1'])){ echo Decipher(Encipher($_POST['plain'], $_POST['metode']),$_POST['metode']);} 
                            if (isset($_POST['submit2'])){ echo Encipher(Decipher($_POST['plain'], $_POST['metode']),$_POST['metode']);}?></b></td>
                        </tr>
                    </table>
                    <label>Key</label>
                    <table class="table table-hover" style="width:80%; padding:100px;">
                        <tr style="background-color:white">
                            <td style="text-align:center"><b><?php if (isset($_POST['submit1'])){ echo $_POST['metode'];} 
                            if (isset($_POST['submit2'])){ echo $_POST['metode'];}?></b></td>
                        </tr>
                    </table>
                    <div class="bawahan">
            <p style="color:red;">Di copy dulu hasil nya,nanti baru lanjut ke Enkripsi/Dekripsi :)</p>
            <a class="btn btn-success" href="caesar-enkripsi.php" role="button">Enkripsi</a></p> 
        </div>
        <br>
        <br>
                  </div>
          </div>

    </table>
  </div>
      <div class="register-box-footer">
          <p style="text-align: center">Copyright &copy; 2018 EM-Studio</p>
      </div>        
  </div>    
    
	</div>
	
 
</body>
</html>