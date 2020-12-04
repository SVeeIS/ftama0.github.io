<!-- Printing -->
	<link rel="stylesheet" href="css/printing.css">
		
<?php
session_start();
error_reporting(0);
include('includes/config.php');
	$Kode = $_GET['code'];
	$mySql ="SELECT * FROM calon";
	$myQry = mysqli_query($koneksidb, $mySql);
?>
<html>
<head>
    <style>
        .new{
            background-color: yellowgreen;
        }
    </style>
</head>
<body>
<div id="section-to-print">
<div id="only-on-print">
	<h2>Detail Vote Calon</h2>
</div>
<div class="modal-header">
	<button type="button" method="GET" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
	<h4 class="modal-title" id="myModalLabel">Detail Vote Calon</h4>
</div>
<div><br/></div>
<form id="theform" data-parsley-validate class="form-horizontal form-label-left" action="insertvote.php" method="post" onsubmit="return valid(this);" enctype="multipart/form-data">
                    
	<div class="form-group">
		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">No. Urut</label>
			<div class="col-md-6 col-sm-6 col-xs-12">
                <select class="form-control col-md-7 col-xs-12" name="nomor" required>
					<option value=""> == Pilih No. Urut == </option>
					<?php
	    		    	while ($result = mysqli_fetch_array($myQry)){
					?>
					<option value="<?php echo htmlentities($result['no_urut']);?>">No. Urut <?php echo htmlentities($result['no_urut']);?></option>
					<?Php
						}
					?>
				</select>
			</div>
	</form>
	<div class="modal-footer">
    <button class="btn btn-default new" type="submit">Buat Vote</button>
	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	</div>

</div>

</body>
</html>