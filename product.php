<?php
    // config.php contains database connection information, tools.php does xyz
	require "config.php";
	require "tools.php";
	
	// Get category from header 
	$id = ($_GET['id']);
	
	// Query to search database for items included in $category
	$query = "SELECT * FROM products WHERE product_id = '$id'";
	$result = mysqli_query($connection,$query);
	
	// Search database
	$result = mysqli_query($connection,$query);
	
	// Display error if database query was unsuccessful
	if(!$result){
		die(mysqli_errno() . " Database query failed.");
	}
	
	
	// Set up variables from query to be used in website body
	while($product = mysqli_fetch_assoc($result)){
    	$product_id = $product["product_id"];
    	$name = $product["name"];
    	$description = $product["description"];
    	$price = $product["price"];
    	$size = $product["size"];
    	$image_path = $product["image_path"];
	}
	
?>

<!DOCTYPE html>
<html lang="en">
    <!-- Starter template from https://getbootstrap.com/docs/4.1/getting-started/introduction/#starter-template used -->
    <head>    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    
    <?php
    // Add product name to title
    echo "<title>$name - Feel Good Drinks Co.</title>";
    ?>
    </head>
    <body>
        <header>
            <h1>Product - Feel Good Drinks Co.</h1>
        </header>
        <nav>
            <a href="index.php">Home</a>
            <a href="shop.php?category=All">Shop</a>
        </nav>
        <main>
            <?php
                echo "<img src='$image_path' alt='$name image'>";
            ?>
            <?php
                echo "<h3>$name</h3>";
            ?>
            <?php
                echo "<h4>$size ml</h4>";
            ?>
            <?php
                echo "<h4>$$price</h4>";
            ?>
            <?php
                echo "<p>$description</p>";
            ?>
        </main>
        
        <?php
            // Call echo_footer from tools.php to show footer
            echo_footer();
        ?>
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>

<?php
	// Release $result
	mysqli_free_result($result);
	
	// Close connection to database
	mysqli_close($connection);
?>