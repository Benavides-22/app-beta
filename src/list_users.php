<? php require("../config/database.php");
$sql_users="
Select 
u.firstname||' '||u.lastname as fullname,
u.email,
u.mobile_phone,
case 
when u.status=true then'Active' else 'inactivo'
end as Status,
u.profile_photo
from
users u
";
update users set profile_photo= 'profile_photos.png';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <table border="1" align="cender">
    <tr>
        <th>Fullname </th>
         <th>E-mail</th>
         <th>Mobile phone </th>
         <th>Status </th>
         <th>Photo</th>
         <th>Options </th>
  </tr>
  <tr>
    <td>Peter Loza </td>
    <td>peter@mail.com</td>
    <td>300123 </td>
    <td>Active </td>
    <td><img src  ="icons/users.png" width="50" alt="user photo"> </td>
    <td> <a href="#"> <img src="icons/lapiz.png" width="60" alt="edit user"></a>
        &nbsp;&nbsp;
         <a href = "#"><img src="icons/basura.png" width="40" alt = "delete user">
        </a>
    </td>
  </tr>  
</table>   
</body>
</html>