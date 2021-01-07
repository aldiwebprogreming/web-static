<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />    
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <link rel="icon" href="dk.png">
	<title>Dewan Demo Conbobox bertingkat</title>
	<link rel="stylesheet" href="css/bootstrap-4.3.1.min.css">
</head>
<body>
	<nav class="navbar navbar-dark bg-primary fixed-top">
	  <a class="navbar-brand" href="index.php" style="color: #fff;">
	    Dewan Komputer
	  </a>
	</nav>

	<div class="container mb-5">
		<h2 align="center" style="margin: 60px 10px 10px 10px;">Dewan Demo Combobox Bertingkat Daerah Indonesia</h2><hr>
		<div class="row">
			<div class="col-sm-6">
				<div class="form-group">
					<label>Provinsi</label>
					<select class="form-control" name="provinsi" id="provinsi">
						<option value=""> Pilih Provinsi</option>
					</select>
				</div>
				
				<div class="form-group">
					<label>Kabupaten</label>
					<select class="form-control" name="kabupaten" id="kabupaten">
						<option value=""></option>
					</select>
				</div>

				<div class="form-group">
					<label>Kecamatan</label>
					<select class="form-control" name="kecamatan" id="kecamatan">
						<option value=""></option>
					</select>
				</div>

				<div class="form-group">
					<label>Kelurahan</label>
					<select class="form-control" name="kelurahan" id="kelurahan">
						<option value=""></option>
					</select>
				</div>

			</div>
		</div>
		<hr>
	</div>

	<div class="navbar bg-dark fixed-bottom">
		<div style="color: #fff;">© <?php echo date('Y'); ?> Copyright:
		    <a href="https://dewankomputer.com/"> Dewan Komputer</a>
		</div>
	</div>

	<script src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
          	$.ajax({
                type: 'POST',
              	url: "get_provinsi.php",
              	cache: false, 
              	success: function(msg){
                  $("#provinsi").html(msg);
                }
            });

          	$("#provinsi").change(function(){
          	var provinsi = $("#provinsi").val();
	          	$.ajax({
	          		type: 'POST',
	              	url: "get_kabupaten.php",
	              	data: {provinsi: provinsi},
	              	cache: false,
	              	success: function(msg){
	                  $("#kabupaten").html(msg);
	                }
	            });
            });

            $("#kabupaten").change(function(){
          	var kabupaten = $("#kabupaten").val();
	          	$.ajax({
	          		type: 'POST',
	              	url: "get_kecamatan.php",
	              	data: {kabupaten: kabupaten},
	              	cache: false,
	              	success: function(msg){
	                  $("#kecamatan").html(msg);
	                }
	            });
            });

            $("#kecamatan").change(function(){
          	var kecamatan = $("#kecamatan").val();
	          	$.ajax({
	          		type: 'POST',
	              	url: "get_kelurahan.php",
	              	data: {kecamatan: kecamatan},
	              	cache: false,
	              	success: function(msg){
	                  $("#kelurahan").html(msg);
	                }
	            });
            });
         });
	</script>
</body>
</html>