
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Keyword Cipher</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />
	
	
    <!-- Bootstrap Select Css -->
    <link href="../../plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />
	<script language="JavaScript" src="js/caesar.js"></script>
<script language="JavaScript" src="js/keymaker.js"></script>
<script language="JavaScript" src="js/util.js"></script>
<script language="JavaScript">

function start_update()
{
   if (! document.getElementById)
   {
      alert('Sorry, you need a newer browser.');
      return;
   }

   if ((! document.Caesar_Loaded) || (! document.Util_Loaded) ||
       (! document.Keymaker_Loaded) ||
       (! document.getElementById('caesar')))
   {
      window.setTimeout('start_update()', 100);
      return;
   }
   Keymaker_Start();
   upd();
}


function upd()
{
   var e, keyunchanged = 1, textunchanged = 1;

   if (! IsUnchanged(document.encoder.key))
   {
      keyunchanged = 0;
      e = document.getElementById('alphabet');
      e.innerHTML = HTMLEscape(MakeKeyedAlphabet(document.encoder.key.value));
   }
	
   if (! IsUnchanged(document.encoder.text))
   {
      textunchanged = 0;
      ResizeTextArea(document.encoder.text);
   }
   
   if (keyunchanged *
       textunchanged *
       IsUnchanged(document.encoder.N) *
       IsUnchanged(document.encoder.encdec))
   {
      window.setTimeout('upd()', 100);
      return;
   }
       
   e = document.getElementById('caesar');
   
   if (document.encoder.text.value == '')
   {
      e.innerHTML = '"Ketikan yang ingin di enkripsi / deskripsi, maka akan muncul hasilnya disini"';
   }
   else
   {
      e.innerHTML = SwapSpaces(HTMLEscape(Caesar(document.encoder.encdec.value * 1,
         document.encoder.text.value, document.encoder.N.value * 1,
	 document.encoder.key.value)));
   }

   window.setTimeout('upd()', 100);
}

function insert_alphabet()
{
   document.encoder.text.value = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
   upd();
}
	
function ZapSpaces()
{
   var i, s = "", t;
   
   t = document.encoder.text.value;
   for (i = 0; i < t.length; i ++)
   {
      if (t.charAt(i) != ' ')
      {
         s += t.charAt(i);
      }
   }
   document.encoder.text.value = s;
   upd();
}

window.setTimeout('start_update()', 100);

// --></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</head>

<body class="theme-red">
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
				<a class="nav-link" href="keyword.php">Keyword Cipher<span class="sr-only">(current)</span></a>
			</li>
			</ul>
		</div>
</nav>
    
    <section class="content">
    <tr>
			<td colspan="3">
				<h1 style="text-align:center;">KEYWORD CIPHER ENKRIPSI</h1>
			</td>
		</tr>
<form name="encoder" method=post action="#" onsubmit="return false;">
<p>Pilih mode : <select name="encdec">
   <option value="1">Enkripsi
   <option value="-1">Dekripsi
</select>
<div style="display:none">
<P>  
<select name="N">
</select>
</p>
</div>
<p>
<div class="form-group">
<div class="form-line" >
<input class="form-control no-resize" type="text" name="key" size="40" value="" placeholder="Masukan kata kunci...">
</div>
</div></p>
<p>Maka, susunan alphabet menjadi :  <tt><code><span id='alphabet'></span></code></tt></p>
<p><div class="form-group">
                                        <div class="form-line">
                                            <textarea name="text" rows="4" class="form-control no-resize" placeholder="Masukan PlaningText..."></textarea>
                                        </div>
                                    </div></p>
</form>
<table border="0" cellpadding="0" cellspacing="0" class="r_box" align="center" style="margin-top: 8px; margin-bottom: 8px;"><tr><td class="r_box"><span id='caesar'></span>
</td></tr></table>
													</div>
												</div>
									</div>
								</div>
							</div>
						</div>
					</div>	
			</div>
		</div>
            <!-- #END# Example Tab -->   
	   
    </section>

	    <!-- Select Plugin Js -->
    <script src="../../plugins/bootstrap-select/js/bootstrap-select.js"></script>
	
    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>
	
	    <!-- Select Plugin Js -->
    <script src="../../plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="plugins/morrisjs/morris.js"></script>

    <!-- ChartJs -->
    <script src="plugins/chartjs/Chart.bundle.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="plugins/flot-charts/jquery.flot.js"></script>
    <script src="plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="plugins/flot-charts/jquery.flot.time.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/index.js"></script>
	
	    <link href="../../plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
	<script src="js/ga.js" type="text/javascript"></script>


</body>

</html>