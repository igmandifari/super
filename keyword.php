
<!DOCTYPE html>
<html>
<head>
	<title>Bootstrap Part 11 : Membuat Navigasi Tabs dan Pills Bootstrap</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
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
    <div class="starter-template" style="text-align:left;">
			<h2><b>Pengenalan</b></h2>
				<p>Keyword Cipher. Kode ini juga termasuk pengembangan dari caesar cipher, yaitu menggunakan pergeseran tertentu. Namun yang berbeda pada kode ini yaitu pergeserannya menggunakan kata kunci yang telah ditentukan.<br>

Lebih jelasnya kita langsung ke contoh :
<br>
Misalnya kita ingin menyamarkan kata 'Silent Detective'
<br>
Kata kunci yang kita gunakan adalah Sherlock 
<br>
Maka susunan alfabet dalam cipher ini menjadi :
<br><br>

Alfabet Biasa:    ABCDEFGHIJKLMNOPQRSTUVWXYZ<br>
Alfabet Sandi:    SHERLOCKABDFGIJMNPQTUVWXYZ</p>
		  </div>
		  <div class="button">
		  	 <a class="btn btn-success" href="keyword-enkripsi.php" role="button">Enkripsi</a>
		  </div>
    
	</div>
	
 
</body>
</html>