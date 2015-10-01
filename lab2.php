<?php
//lab2-2.php 

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo basename($_SERVER['PHP_SELF']);
//echo THIS_PAGE;
//die;
?>

<html>
<body>
		<form name="form" method="post" action="">
		<p>Please your favorite toppings for your sundae:</p>
		<input type="checkbox" name="topping[]" value="chocolate" />Chocolate<br />
		<input type="checkbox" name="topping[]" value="pineapple" />Pineapple<br />
		<input type="checkbox" name="topping[]" value="peanuts" />Peanuts<br />
		<input type="checkbox" name="topping[]" value="sprinkles" />Sprinkles<br />
		<input type="checkbox" name="topping[]" value="coconut" />Dried Coconut<br />
		<input type="submit" value="Show Them" name="submit" />
		
		</form>		
		<br />
	
<?php 

	if (isset($_POST['submit'])) 
{
    if (isset($_POST['topping'])) 
	{ 	$items = $_POST['topping'];
	
	if (count($items) == 1)
		
		{
		echo "Thank you for selecting the following topping:" . "<br />";
		echo $items[0];}
		else{
	
		$last = array_pop($items);
		$items_string = implode(", ",$items);
		$items_string .= " and " . $last;
		
		//$items_string = $items_string . $last;
		echo "Thank you for selecting the following toppings:" . "<br />"; 
		echo $items_string;
		}

	
		
	
	
	}
    else 
	{ echo "You did not select a topping. It is imperative that you go back and select a topping for your ice cream sundae."; 
	
	}
}







?>
</body>
</html>
	
	
	
	
	
	
	
	
	
	