<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>CAESAR CIPHER - PROGRAM KRIFTOGRAFI</title>

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
</head>

<body class="theme-red">
<?php
		
		if (isset($_POST['submit'])){
		
		// ini untuk convert string menjadi uppercase
		function cltn($char){
		$char = strtoupper($char);
		$ord = ord($char);
		return ($ord > 64 && $ord < 91) ? ($ord - 64) : false;
		}

		// Fungsi Enkripsi
					// Ambil Value Inputan
		function encrypt_cipher($str, $plus){
		// Validasi Input Jika Benar Numeric dan String
		if( is_numeric($plus) && $plus <= 26 && is_string($str) ) {
		// Membuat Variabel $al dengan Nilai Array (a-z)
		$al = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
		$nstr = '';
		// Convert Inputan String Ke Array Pake str_split
		foreach( str_split($str) as $i => $v ) {
		//convert string menjadi uppercase
		if( cltn($v) ) {
		$ltn = cltn($v) - 1;
		if( ( $ltn + $plus ) > 25 ) {
		$nstr .= $al[( $ltn + $plus ) - 25];
		}else{
		$nstr .= $al[$ltn+$plus];
		}
		}else{
		$nstr .= $v;
		}
		}
		return $nstr;
		}else{
		return false;	
		}
		}

		} // end isset
		?>	
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.html">PROGRAM KRIFTOGRAFI</a>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MENU NAVIGASI</li>

                        <a href="index.php">
                            <span>Beranda</span>
                        </a>
                    <li>
						<a href="atbash.php">
                            <span>Atbash Cipher</span>
                        </a>
                    </li>				
					<li class="active">
						<a href="caesar.php">
                            <span>Caesar Cipher</span>
                        </a>
					</li>
						<a href="keyword.php">
                            <span>Keyword Cipher</span>
                        </a>
						<a href="Polybius.php">
                            <span>PlayFair Cipher</span>
                        </a>
                    <li> </div>
            <!-- #Menu -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar --> <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
			<div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="home">
                                    <b>CAESAR CIPHER</b>
										<p>
										Caesar cipher merupakan salah satu jenis cipher substitusi yang membentuk cipher dengan cara melakukan penukaran karakter pada plainteks menjadi tepat satu karakter pada chiperteks. Teknik seperti ini disebut juga sebagai chiper abjad tunggal. Algoritma kriptografi Caesar Cipher sangat mudah  untuk digunakan. Inti dari algoritma kriptografi ini adalah  melakukan pergeseran terhadap semua karakter pada  plainteks dengan nilai pergeseran yang sama.
										</p>
									<hr>
									<p>
									<b>Adapun langkah-langkah yang dilakukan untuk membentuk chiperteks dengan Caesar Cipher adalah :</b><br>

1. Menentukan besarnya pergeseran karakter yang  digunakan dalam   membentuk  cipherteks ke plainteks.<br>
2. Menukarkan karakter pada plainteks menjadi cipherteks dengan berdasarkan pada pergeseran yang telah ditentukan sebelumnya.
									</p>
									<hr>
									<b>Dilihat dari keterangan diatas, maka :</b>
										<p>Berikut adalah contoh penggunaan Caesar Cipher dengan besar pergeseran sebesar 3 karakter. Dengan nilai pergeseran tersebut, didapat tabel pergeseran nilai Caesar Cipher sebagai berikut :</p>
									
									<p>A  B  C  D  E  F  G  H  I  J    K  L  M  N  O  P  Q  R  S   T   U  V  W  X  Y  Z (PlainText)<br>

D  E  F  G  H  I   J   K  L M  N  O  P   Q  R  S  T   U  V  W  X  Y   Z   A  B  C (CipherText)
									</p>
								</div>
							</div>

						</div>
					</div>
				</div>
				
				<?php
				function Cipher($ch, $key)
																	{
																		if (!ctype_alpha($ch))
																			return $ch;

																		$offset = ord(ctype_upper($ch) ? 'A' : 'a');
																		return chr(fmod(((ord($ch) + $key) - $offset), 26) + $offset);
																	}
				?>

					<div class="col-sm-6">
						<div class="card">
							<div class="body">
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane fade in active" id="home">
										<b>PlainText</b><br><br>
												<div class="row clearfix">
													<div class="col-sm-12" id="caesar">
														<form  action="caesar.php#caesar" method="get">
															<div class="form-group">
																<div class="form-line" >
																	<input class="form-control no-resize" placeholder="Masukan PlainText..." name="enkripsi" value="<?php
																	error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

																	function Decipher($input, $key)
																	{
																		return Encipher($input, 26 - $key);
																	}
																	$text = $_GET['dekripsi'];
																	$deret = $_GET['jd_dekripsi'];
																	echo $cipherText = Decipher($text, $deret);
																	?>"></input>
																</div>
															</div>
															<div class="form-group">
																<div class="form-line" >
																	<input class="form-control no-resize" placeholder="Masukan Jumlah Deret..." name="jd_enkripsi"></input>
																</div>
															</div>
															<button type="submit" value="Enkripsi" class="btn bg-teal waves-effect" onclick="Decipher();">
															<span>ENKRIPSI</span>
															</button>
														</form>
													</div>
												</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-sm-6">
						<div class="card">
							<div class="body">
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane fade in active" id="home">
										<b>CipherText</b><br><br>
												<div class="row clearfix">
													<div class="col-sm-12" id="caesar">
														<form  action="caesar.php#caesar" method="get">
															<div class="form-group">
																<div class="form-line" >
																	<input class="form-control no-resize" placeholder="CipherText..." value="<?php
																	error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
																	function Encipher($input, $key)
																	{
																		$output = "";

																		$inputArr = str_split($input);
																		foreach ($inputArr as $ch)
																			$output .= Cipher($ch, $key);

																		return $output;
																	}
																	$text = $_GET['enkripsi'];
																	$deret = $_GET['jd_enkripsi'];
																	echo $cipherText = Encipher($text, $deret);
																	?>" name="dekripsi"></input>
																</div>
															</div>
															<div class="form-group">
																<div class="form-line" >
																	<input class="form-control no-resize" placeholder="Masukan Jumlah Deret..." name="jd_dekripsi"></input>
																</div>
															</div>
															<button type="submit" value="dekripsi" class="btn bg-teal waves-effect" >
															<span>DEKRIPSI</span>
														</button>
														</form>
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
</body>

</html>