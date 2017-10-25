<html>
<header>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/dcfe3a3a73.js"></script>
</header>
<body>
	<div class="modal fade" role="dialog" id="qrcode">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h3>Seu QR-Code</h3>
				</div>
				<div class="modal-body">
					<center><i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i></center>
				</div>
				<div class="modal-footer">
					<button class="btn btn-md btn-danger" data-toggle="modal" data-target='#qrcode'>FECHAR</button>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<img src="interpag_logomdpi.png" style="display: block; margin: 0 auto; padding-top: 150px" >
		<hr>
		<form id="formGerar" method="post">
			<div class="form-group">
				<input type="text" name="value" placeholder="Valor Final da Compra" class="form-control" required />
			</div>
			<div class="form-group">
				<input type="text" name="pin" placeholder="PIN" class="form-control" required />
			</div>
			<div class="form-group">
				<input type="submit" class="form-control btn btn-success" data-toggle='modal' data-target='#qrcode' value="Gerar QR-Code" />
			</div>
		</form>
	</div>
	<div class="col-md-4"></div>
	<script src="ajax.js"></script>
</body>
</html>
