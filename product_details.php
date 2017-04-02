<?php
include "dbconnect.php";

$results = executeQuery("SELECT * FROM PRODUCTS WHERE id =" . $_GET["id"] . "");

?>

<h1><?php echo $results[0]['pr_name']; ?></h1>

<p>
<img width="200px" height="200px" src="<?php echo $results[0]['pr_image']; ?>" /></div>
</p>

<p>
<?php echo $results[0]['pr_description']; ?>
</p>