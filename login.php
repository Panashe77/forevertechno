<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = sprintf("SELECT * FROM user
                    WHERE email = '%s'",
                   $mysqli->real_escape_string($_POST["email"]));
    
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
    
    if ($user) {
        
        if (password_verify($_POST["password"], $user["password_hash"])) {
            
            session_start();
            
            session_regenerate_id();
            
            $_SESSION["user_id"] = $user["id"];
            
            header("Location: index.html");
            exit;
        }
    }
    
    $is_invalid = true;
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
	<link rel="stylesheet" href="style.css">
</head>
<body>

<section id="header">
			<a href="#"><img src="logo.png" class="logo" alt=""></a>
		<div>
			<u1 id="navbar">
				<li><a href="index.html">Home</a></li>
				<li><a class = "active" href="login.php">Login</a></li>
				<li><a href="signup.html">Signup</a></li>
				<li><a href="about.html">About</a></li>
				<li><a href="cart_index.php">Contact</a></li>
				<li><a href="contact.html">Contact</a></li>
				<li id="ig-bag"><a href="cart.php"><i class="far fa-shopping-bag"></i></a></li>
				<a href="#" id="close"><i class="far fa-times"></i></a>
				
			</u1>
		</div>
		
		<div id="mobile">
			<a href="cart.html"><i class="far fa-shopping-bag"></i></a>
			<i id="bar" class="fas fa-outdent"></i>

		</div>
	</section>

    <section id = "page-header">
		
		<h2>#gainaccess</h2>
		
		<p>Let your journet begin</p>
		
	</section>
    
    <h1>Login</h1>

    
    
    <?php if ($is_invalid): ?>
        <em>Invalid login</em>
    <?php endif; ?>

    <form method="post">
        <label for="email">email</label>
        <input type="email" name="email" id="email"
               value="<?= htmlspecialchars($_POST["email"] ?? "") ?>">
        
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        
        <button>Log in</button>
    </form>

    <section id="newsletter" class="first-section second-section">
		<div class="newstext">
			<h4>Sign Up For Newsletters</h4>
			<p>Get E-mail updates about our latest shop and <span>special offers.</span>
			</p>
		</div>
		<div class="form">
			<input type="text" placeholder="Your email address">
			<button class="normal">Sign Up</button>
		</div>
	</section>

	<footer class="first-section">
		<div class="col">
			<img class="logo" src="logo.png" alt="">
			<h4>Contact</h4>
			<p><strong>Address:</strong> 150 Belgravia Road, Rustdale, Cape Town</p>
			<p><strong>Phone:</strong> 0815465865</p>
			<p><strong>Hours:</strong> 10:00 - 18:00, Mon - Sat</p>
			<div class="follow">
				<h4>Follow us</h4>
				<div class="icon">
					<i class="fab fa-facebook-f"></i>
					<i class="fab fa-twitter"></i>
					<i class="fab fa-instagram"></i>
					<i class="fab fa-pinterest-p"></i>
					<i class="fab fa-youtube"></i>
				</div>
			</div>
		</div>
		<div class="col">
			<h4>About</h4>
			<a href="#">About us</a>
			<a href="#">Delivery Information</a>
			<a href="#">Privacy Policy</a>
			<a href="#">Terms & Conditions</a>
			<a href="#">Contact Us</a>
		</div>

		<div class="col">
			<h4>My Account</h4>
			<a href="#">Sign Inc</a>
			<a href="#">View Cart</a>
			<a href="#">My Wishlist</a>
			<a href="#">Track My Order</a>
			<a href="#">Help</a>
		</div>

		<div class="col install">
			<h4>Install App</h4>
			<p>From App Store or Google Play</p>
			<div class="row">
				<img src="Download-Apple.jpg" alt="">
				<img src="Download-PlayStore.jpg" alt="">
			</div>
			<p>Secure Payment Gateways</p>
			<img src="pay-method.png" alt="">
		</div>

		
	</footer>

    <script src="script.js"></script>
    
</body>
</html>







