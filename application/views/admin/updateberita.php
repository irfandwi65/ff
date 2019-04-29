
<body>
	<div class="container"><br>
	<h1>Edit Berita</h1><br>
	<?php foreach ($berita as $key) { ?>
		<form method="post" enctype="multipart/form-data" action="<?php echo base_url('index.php/Dashboard/editAction/'.$key->id_berita); ?>">
		  <div class="form-group">
		    <label for="formGroupExampleInput">Judul</label>
		    <input type="text" name="judul" value="<?php echo $key->judul; ?>" class="form-control" id="formGroupExampleInput" placeholder="Judul">
		  </div>
		  <div class="form-group">
		    <label for="exampleFormControlSelect1">Kategori</label>
		    <select name="kategori" class="form-control" id="exampleFormControlSelect1">
		      <option value="current-affairs">current affairs</option>
		      <option value="budaya-pop">budaya pop</option>
		      <option value="politik">politik</option>
		    </select>
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput2">Penulis</label>
		    <input type="text" name="penulis" value="<?php echo $key->penulis; ?>" class="form-control" id="formGroupExampleInput2" placeholder="Penulis">
		  </div>
		  <div class="form-group">
		    <label for="exampleFormControlTextarea1">Isi Berita</label>
		    <textarea name="isi" class="form-control" rows="3"><?php echo $key->isi; ?></textarea>
		  </div>
		  <div class="form-group">
		    <label for="exampleFormControlFile1">Input Gambar</label>
		    <input type="file" name="gambar" class="form-control-file" id="exampleFormControlFile1">
		  </div>
		  <div class="control-group"> 
			<div class="controls">  
				<button type="submit" class="btn btn-primary btn-block">Edit</button>  
				<button type="reset" class="btn btn-danger btn-block">Reset</button>
			</div> 
		  </div>
		</form> 
	<?php } ?> 
	</div>


</body>