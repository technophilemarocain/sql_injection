<?php include('dbconnect.php') ?>

<style>
.rTable    { display: table; }
		.rTableRow       { display: table-row; }
		.rTableHeading    { display: table-header-group; }
		.rTableBody    { display: table-row-group; }
		.rTableFoot    { display: table-footer-group; }
		.rTableCell, .rTableHead  { display: table-cell; }
.rTable {
		    	display: table;
		    	width: 50%;
		}
		.rTableRow {
		    	display: table-row;
		}
		.rTableHeading {
		    	display: table-header-group;
		    	background-color: #ddd;
		}
		.rTableCell, .rTableHead {
		    	display: table-cell;
		    	padding: 3px 10px;
		    	border: 1px solid #999999;
                vertical-align: top;
		}
		.rTableHeading {
		    	display: table-header-group;
		    	background-color: #ddd;
		    	font-weight: bold;
		}
		.rTableFoot {
		    	display: table-footer-group;
		    	font-weight: bold;
		    	background-color: #ddd;
		}
		.rTableBody {
		    	display: table-row-group;
		}
</style>
<?php 
$results = array();
if(isset($_POST['submit'])) {
    $results = executeQuery("SELECT * FROM PRODUCTS WHERE pr_name like '%" . mysql_real_escape_string($_POST["product"]) . "%'");
}
?>

<p>Products Search</p>
<form action="" method="post">
<p><input type="text" name="product" />
<input type="submit" name="submit" value="Search"/>
</form>
</p>
<h2>Porducts Resluts</h2>
<div class="rTable">
<div class="rTableRow">
<div class="rTableHead"><strong>Name</strong></div>
<div class="rTableHead"><span style="font-weight: bold;">Description</span></div>
<div class="rTableHead">Image</div>
</div>
<?php foreach($results as $result): 
?>
<div class="rTableRow">
    <div class="rTableCell"><a href="product_details.php?id=<?php echo  $result['id']; ?>"><?php echo $result['pr_name']; ?></a></div>
    <div class="rTableCell"><?php echo $result['pr_description']; ?></div>
    <div class="rTableCell"><img width="200px" height="200px" src="<?php echo $result['pr_image']; ?>" alt="checked" /></div>
</div>
<?php endforeach; ?>

</div>