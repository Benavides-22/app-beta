<?php include('../config/database.php');
//get data
$f_name = $_POST ['fname'];
$l_name = $_POST  ['lname'];
$e_mail = $_POST  ['email'];
$m_phone = $_POST  ['mphone'];
$p_sswd = $_POST  ['passwd'];
$enc_pass=md5($p_sswd);
//Validar email existente
$check_email = "SELECT * FROM users WHERE email = '$e_mail'";
$result_email = pg_query($check_email);

if (pg_num_rows($result_email) > 0) {
    echo "El email ya está registrado";
    exit;
}

$sql = "INSERT INTO users (firstname,lastname,email,mobile_phone,password,password_again) 
values('$f_name','$l_name','$e_mail','$m_phone','$p_sswd','$enc_pass')";
//execute query
pg_query ($sql);