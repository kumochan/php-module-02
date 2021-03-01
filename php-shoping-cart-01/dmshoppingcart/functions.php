<?php

function pf_validate_number($value, $function, $redirect) {
	if(isset($value) == TRUE) {
		if(is_numeric($value) == FALSE) {
			header("Location: " . $redirect);
		}
		else {
			$final = $value;
		}
	}
	else {
		if($function == 'redirect') {
			header("Location: " . $redirect);
		}
		
		if($function == "value") {
			$final = 0;
		}
	}
	
	return $final;
}

function showcart()
{

	if(isset($_SESSION['SESS_ORDERNUM']) == TRUE)
	{
		if(isset($_SESSION['SESS_LOGGEDIN']) ==  TRUE)
		{
			$custsql = "SELECT id, status from orders
					WHERE customer_id = "	. $_SESSION['SESS_USERID'] . "
					AND status < 2;"; 
			$custres = mysql_query($custsql);
			$custrow = mysql_fetch_assoc($custres);
			
			$itemssql = "SELECT products.*, order_items.*, order_items.id AS itemid
					FROM products, order_items
					WHERE order_items.product_id = products.id
					AND order_id = " . $custrow['id'];
			$itemsres = mysql_query($itemssql);
			$itemnumrows = mysql_num_rows($itemsres);
			
		}
		else
		{
			$custsql = "SELECT id, status from orders
					WHERE session = '" . session_id() . "' AND status < 2;"; 
			$custres = mysql_query($custsql);
			$custrow = mysql_fetch_assoc($custres);
			
			$itemssql = "SELECT products.*, order_items.*, order_items.id AS itemid
					FROM products, order_items
					WHERE order_items.product_id = products.id
					AND order_id = " . $custrow['id'];
			$itemsres = mysql_query($itemssql);
			$itemnumrows = mysql_num_rows($itemsres);
		}	
	}
	else
	{
		$itemnumrows = 0;
	}		

	if($itemnumrows == 0)
	{
		echo "You have not added anything to your shopping cart yet.";
		
	}
	else
	{			
		$total = 0;
		echo "<table cellpadding='10'>";
		echo "<tr>";
			echo "<td></td>";
			echo "<td><strong>Item</strong></td>";
			echo "<td><strong>Quantity</strong></td>";
			echo "<td><strong>Unit Price</strong></td>";
			echo "<td><strong>Total Price</strong></td>";
			echo "<td></td>";
		echo "</tr>";
			
		while($itemsrow = mysql_fetch_assoc($itemsres))
		{	
				$quantitytotal = $itemsrow['price'] * $itemsrow['quantity'];
		echo "<tr>";

				if(empty($itemsrow['image'])) {
					echo "<td><img src='./productimages/dummy.jpg' width='50' alt='" . $itemsrow['name'] . "'></td>";
				}
				else {
					echo "<td><img src='./productimages/" . $itemsrow['image'] . "' width='50' alt='" . $itemsrow['name'] . "'></td>";
				}
		
				echo "<td>" . $itemsrow['name'] . "</td>";
				echo "<td>" . $itemsrow['quantity'] . "</td>";
				echo "<td><strong>&pound;" . sprintf('%.2f', $itemsrow['price']) . "</strong></td>";
				echo "<td><strong>&pound;" . sprintf('%.2f', $quantitytotal) . "</strong></td>";
				
				echo "<td>[<a href='http://127.0.0.1:81/Demo-shoppingcart/delete.php?id=" . $itemsrow['itemid'] . "'>X</a>]</td>";
				
				echo "</tr>";
			
			$total = $total + $quantitytotal;
			$totalsql = "UPDATE orders SET total = " . $total . " WHERE id = " . $_SESSION['SESS_ORDERNUM']; 
			$totalres = mysql_query($totalsql);
		}						

		echo "<tr>";
			echo "<td></td>";
			echo "<td></td>";
			echo "<td></td>";
			echo "<td>TOTAL</td>";
			echo "<td><strong>&pound;" . sprintf('%.2f', $total) . "</strong></td>";
			echo "<td></td>";
	echo "</tr>";

	echo "</table>";

	}
}


?>