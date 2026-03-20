<?php
//database configuration
$LOCA_HOST='localhost';//127.0.0.1
$LOCAL_DBNAME='app_beta';
$LOCAL_USERNAME='postgres';
$LOCAL_PASSWORD='benavides';
$LOCAL_PORT='5432';
//supabase database configuration
$SUPA_HOST='aws-1-us-east-2.pooler.supabase.com';
$SUPA_DBNAME='postgres';
$SUPA_USERNAME='postgres.qjiciljryzzgzjfcxzqs';
$SUPA_PASSWORD='unicesmag@@';
$SUPA_PORT='6543';



$local_data_connection="
host=$LOCA_HOST
dbname=$LOCAL_DBNAME
user=$LOCAL_USERNAME
password=$LOCAL_PASSWORD
port=$LOCAL_PORT
";
$supa_data_connection="
host=$SUPA_HOST
dbname=$SUPA_DBNAME
user=$SUPA_USERNAME
password=$SUPA_PASSWORD
port=$SUPA_PORT
";

$local_conn=pg_connect($local_data_connection);
if(!$local_conn){
    echo"Error:UNABLE TO CONNECT TO LOCAL DATABASE";
    exit();
}else{
    echo"Local success connection!!!";
}

/*
$supa_conn=pg_connect($supa_data_connection);
if(!$supa_conn){
    echo"Error:UNABLE TO CONNECT TO SUPABASE DATABASE";
    exit();
}else{
    echo"<br>Supabase success connection!!!";
}

?>
*/