<body>
<form name="inlog" action="../private/validate.php" method="POST">
    <p>email <input type="text" name="email" /></p>
    <p>password <input type="text" name="password" /></p>
    <input type="submit" name="verzenden" value="Verzenden">
    </form>
    


<?php
require_once('/xampp/htdocs/phpschool/private/db_connect.php');

?>

</body>