<!DOCTYPE html>
<html>
<head>
	<title>Rail Fence Cipher</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<script type="text/javascript">
	function Encrypt() {
	    plaintext = document.getElementById("p").value.toLowerCase().replace(/[^a-z]/g, "");  
	    if(plaintext.length < 1){ alert("Masukan plaintext"); return; }    
	    var key = document.getElementById("key").value.toLowerCase().replace(/[^a-z]/g, "");  
	    var pc = document.getElementById("pc").value.toLowerCase().replace(/[^a-z]/g, "");
	    if(pc=="") pc = "x";    
	    while(plaintext.length % key.length != 0) plaintext += pc.charAt(0);    
	    var colLength = plaintext.length / key.length;
	    var chars = "abcdefghijklmnopqrstuvwxyz"; 
	    ciphertext = ""; k=0;
	    for(i=0; i < key.length; i++){
	        while(k<26){
	            t = key.indexOf(chars.charAt(k));
	            arrkw = key.split(""); arrkw[t] = "_"; key = arrkw.join("");
	            if(t >= 0) break;
	            else k++;
	        }
	        for(j=0; j < colLength; j++) ciphertext += plaintext.charAt(j*key.length + t);
	    }
	    document.getElementById("c").value = ciphertext;
	}

	function Decrypt(f) {
	    ciphertext = document.getElementById("c").value.toLowerCase().replace(/[^a-z]/g, "");  
	    if(ciphertext.length < 1){ alert("Masukan Cipher Text ( Huruf Saja )"); return; }    
	    keyword = document.getElementById("key").value.toLowerCase().replace(/[^a-z]/g, ""); 
	    klen = keyword.length;
	    if(klen <= 1){ alert("keyword minimal 2 karakter"); return; }
	    if(ciphertext.length % klen != 0){ alert("ciphertext belum di masukan, hasilnya mungkin akan salah"); }
	    // first we put the text into columns based on keyword length
	    var cols = new Array(klen);
	    var colLength = ciphertext.length / klen;
	    for(i=0; i < klen; i++) cols[i] = ciphertext.substr(i*colLength,colLength);
	    // now we rearrange the columns so that they are in their unscrambled state
	    var newcols = new Array(klen);
	    chars="abcdefghijklmnopqrstuvwxyz"; j=0;i=0;
	    while(j<klen){
	        t=keyword.indexOf(chars.charAt(i));        
	        if(t >= 0){
	            newcols[t] = cols[j++];
	            arrkw = keyword.split(""); arrkw[t] = "_"; keyword = arrkw.join("");
	        }else i++;         
	    }    
	    // now read off the columns row-wise
	    plaintext = "";
	    for(i=0; i < colLength; i++){
	        for(j=0; j < klen; j++) plaintext += newcols[j].charAt(i);
	    }            
	    document.getElementById("p").value = plaintext;    
	}
 </script>
<body>	
	</div>
		<nav class="navbar navbar-dark bg-dark">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<a class="navbar-brand" href="railfence.php">Rail Fence Cipher</a>

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
	<table class="table table-hover" style="width:80%; padding:100px;">
		<tr>
			<td colspan="3">
				<h1 style="text-align:center;">RAIL FENCE ENKRIPSI</h1>
			</td>
		</tr>
		<tr>
			<td>PlainText</td>
			<td>:</td>
			<td>
				<textarea id="p" class="form-control" name="p" rows="4" cols="50" placeholder="Masukan PlainText"></textarea>
			</td>
		</tr>
		<tr>
			<td>Keyword</td>
			<td>:</td>
			<td>
				<input id="key" placeholder="Keyword" class="form-control" name="key" size="10" value="" type="text"> 
			</td>
		</tr>
		<tr>
			<td colspan="3">
				<input id="pc" name="pc"  size="1" value="x" type="hidden">
				<input name="btnEn"  class="btn btn-success" value="Encrypt" onclick="Encrypt()" type="button"> 
			</td>
		</tr>
		<tr>
			<td>CipherText</td>
			<td>:</td>
			<td>
				<textarea id="c" class="form-control" name="c" rows="4" cols="50" placeholder="Hasil CipherText"></textarea>
			</td>
		</tr>
	</table>
	</table>
    <div class="bawahan">
        <p style="color:red;">Di copy dulu hasil nya,nanti baru lanjut ke enkripsi :) 
        <a class="btn btn-primary" href="railfence-deskripsi.php" role="button">Deskripsi</a></p>
    </div>
</div><!-- /.container -->
	
 
</body>
</html>