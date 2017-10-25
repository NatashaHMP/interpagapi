<?php
$conn = mysqli_connect("localhost", "root", "", "bancointer");
print_r($_POST);
if (!empty($_POST['value']) && !empty($_POST['cnpj'] && !empty($_POST['pin']))){
	$pin = md5($_POST['pin']);
	$query = mysqli_query($conn, "SELECT * FROM empresa WHERE cnpj='{$_POST['cnpj']}' AND pin='{$pin}'");
	if (mysqli_num_rows($query) > 0){
		$empresa_id = mysqli_fetch_row($query)[0];
		header('Content-Type:image/png');
		$token = md5($_POST['value'].$_POST['cnpj'].rand(10000, 99999));
		mysqli_query($conn, "INSERT INTO qrcodes VALUES(default, {$_POST['value']}, '$token', default, $empresa_id)");
		echo $token;
		
		http_response_code(200);
	}
}
else{
	http_response_code(400);
}
?>