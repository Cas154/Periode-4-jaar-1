<body>
<form name="inlog" action="" method="POST">
    <p>email <input type="email" name="email" required /></p>
    <p>password <input type="password" name="password" required /></p>
    <p>
             <label>Select list</label>
             <select id="myList">
               <option value="1">intern</option>
               <option value="2">education</option>
               <option value="3">company</option>
             </select>
          </p>
    <input type="submit" name="send" value="Verzenden">
    </form>
    


<?php
require_once('/xampp/htdocs/phpschool/private/db_connect.php');
if(isset($_POST["send"]))
{
    IEC($_POST['myList'])
}
function IEC($myList){
    if($myList == 1){

    }
    elseif($myList == 2){

    }
    else{
        
    }


}







require_once('/xampp/htdocs/phpschool/private/db_connect.php');
$password = $_POST['password'];
    $email = $_POST['email'];

$hashed_password = password_hash($password, PASSWORD_DEFAULT);


$data = [
    $email = $_POST['email'],
    $password = $_POST['password']
    $rol = $_POST['myList']
];
if($rol == 1){
$sql = "INSERT INTO intern (email, passwd) VALUES (:email, :passwd)";
$stmt= $pdo->prepare($sql);
$stmt->execute($data);
}


?>
</body>