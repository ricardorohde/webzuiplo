<!DOCTYPE html>
<html>
<head>
	<title>Upload Image by BaliDev</title>
	<!--Materialize css dan javascript -->
	<link href="<?php echo base_url();?>/assets/materialize/css/materialize.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>/assets/materialize/css/materialize.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-2.1.2.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>

</head>
<body>
<!--Navbar Materialize -->
	<nav>
	    <div class="nav-wrapper">
	      <a href="#" class="brand-logo">BaliDev</a>
	      <ul id="nav-mobile" class="right hide-on-med-and-down">
	        <li><a href="<?php echo site_url('upload/list')?>">Lihat</a></li>
	      </ul>
	    </div>
  	</nav>
	<div class="container">

		<div class="row" style="margin-top: 120px">
			<div class="col s12 m8 offset-m2 l6 offset-l3">
				<div class="card-panel">
				<?php if(isset($pesan)){
						echo "<h5>$pesan</h5>";
					}?>
					 <div class="row valign-wrapper">
            			<div class="col s12">
            				<?php
            					echo form_open_multipart('upload/upload');?>
											<input type="text" name="nama_rumah" value="nama rumah">
											<input type="text" name="nama_pemilik_rumah" value="nama_pemilik_rumah">
											<input type="text" name="nmr_kontak_pemilik" value="085770537062">
											<input type="text" name="alamat" value="alamat">
											<input type="text" name="nama_pengelola" value="nama_pengelola">
											<input type="text" name="nmr_pengelola" value="085770537062">
											<input type="text" name="harga_sewa" value="harga_sewa">
											<input type="text" name="jenjang_waktu" value="jenjang_waktu">
											<input type="text" name="ket_biaya" value="ket_biaya">
											<input type="text" name="luas_kamar" value="luas_kamar">
											<input type="text" name="fasilitas_kamar_lain" value="fasilitas_kamar_lain">
											<input type="text" name="fasilitas_kamar_mandi_lain" value="fasilitas_kamar_mandi_lain">
            					<div class='file-field input-field'>
	            					<div class="btn orange">
									        <span>FILE</span>
									        <input type="file" name="imgName">
								     		</div>
	            					<div class="file-path-wrapper">
								        	<input class="file-path validate" type="text" name="imgName">
								     		</div>
										     </br>
							    		</div>
											<div class='file-field input-field'>
	            					<div class="btn orange">
									        <span>FILE</span>
									        <input type="file" name="imgName2">
								     		</div>
	            					<div class="file-path-wrapper">
								        	<input class="file-path validate" type="text" name="imgName2">
								     		</div>
										     </br>
							    		</div>
											<div class='file-field input-field'>
	            					<div class="btn orange">
									        <span>FILE</span>
									        <input type="file" name="imgName3">
								     		</div>
	            					<div class="file-path-wrapper">
								        	<input class="file-path validate" type="text" name="imgName3">
								     		</div>
										     </br>
							    		</div>
											<div class='file-field input-field'>
	            					<div class="btn orange">
									        <span>FILE</span>
									        <input type="file" name="imgName4">
								     		</div>
	            					<div class="file-path-wrapper">
								        	<input class="file-path validate" type="text" name="imgName4">
								     		</div>
										     </br>
							    		</div>
											<div class='file-field input-field'>
	            					<div class="btn orange">
									        <span>FILE</span>
									        <input type="file" name="imgName5">
								     		</div>
	            					<div class="file-path-wrapper">
								        	<input class="file-path validate" type="text" name="imgName5">
								     		</div>
										     </br>
							    		</div>
											<div class='file-field input-field'>
	            					<div class="btn orange">
									        <span>FILE</span>
									        <input type="file" name="imgName6">
								     		</div>
	            					<div class="file-path-wrapper">
								        	<input class="file-path validate" type="text" name="imgName6">
								     		</div>
										     </br>
							    		</div>
											<div class='file-field input-field'>
	            					<div class="btn orange">
									        <span>FILE</span>
									        <input type="file" name="imgName7">
								     		</div>
	            					<div class="file-path-wrapper">
								        	<input class="file-path validate" type="text" name="imgName7">
								     		</div>
										     </br>
							    		</div>
							    <div class="row center-align">
								      <input type="submit" value="submit" class="btn orange">
								 </div>
							  <?php form_close(); ?>
            			</div>

            		</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
