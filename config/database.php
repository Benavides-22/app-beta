<?php
//database configuration
$LOCA_HOST='localhost';//127.0.0.1
$LOCAL_DBNAME='app_beta';
$LOCAL_USERNAME='postgres';
$LOCAL_PASSWORD='unicesmag';
$LOCAOL_PORT='5432';
//supabase database configuration
$SUPA_HOST='';
$SUPA_DBNAME='';
$SUPA_USERNAME='';
$SUPA_PASSWORD='';
$SUPA_PORT='';
$data_connection="
host=$LOCA_HOST
dbname=$LOCAL_DBNAME
user=$LOCAL_USERNAME
password=$LOCAL_PASSWORD
port=$LOCAOL_PORT
";
$conn=pg_connect($data_connection);
if(!$conn){
    echo"Error:UNABLE TO CONNECT TO DATABASE";
    exit();
}else{
    echo"Success connection!!!";
}
?>
