<?php
// about_us.php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eskina Coffee | About Us</title>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Noto+Serif:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="about_us.css">
</head>
<body>

    <!-- Navbar -->
    <nav>
        <div class="logo">
        <img src="images/logo_img.jpg" alt="Eskina Coffee Logo"> Eskina Coffee </div>

        <input type="checkbox" id="menu-toggle">
        <label for="menu-toggle" class="hamburger">☰</label>

        <!-- ✅ Wrap links inside ul for better styling -->
        <ul class="nav-links">
            <li><a href="index.php#home">Home</a></li>
            <li><a href="menu.php">Menu</a></li>
            <li><a href="about_us.php" class="active">About Us</a></li>
            <li><a href="contact_us.php">Contact Us</a></li>
        </ul>
    </nav>

    <section class="about-us">
        <h2>ABOUT US</h2> <br>
        <div class="about-container">
            
            <!-- Left Column -->
            <div class="about-left">
            <p>
                Welcome to Eskina Coffee! We believe that coffee is more than just a drink, it’s an experience that brings people together.
                Founded with the vision of creating a warm and welcoming space, our cafe is a place where friends, families, and coffee lovers 
                can connect, relax, and enjoy handcrafted beverages made with passion.
            </p>
            <p>
                Quality beans that are expertly brewed to bring out their distinct flavors are what we take delight in sourcing. We provide 
                a variety of pastries and comfort food to complete your cafe experience in addition to our specialty drinks. Eskina Coffee has 
                a comfortable spot for everyone, whether you’re there to work, hang out with friends, or just take a break.
            </p>
            </div>

            <!-- Right Column -->
            <div class="about-right">
            <p>
                The word "Eskina," which is commonly used in the Philippines, comes from the Spanish word “esquina,” which also means 
                “corner,” especially a street corner or an alleyway.
            </p>
            <p>
                Eskina Coffee was established in June 2023. Owned by two dedicated partners and managed by an experienced cafe manager, 
                our team works hard to bring a unique coffee experience to every guest.
           
                Despite being new to the coffee business, our team embraced every challenge with determination, learning and growing 
                along the way. In a short period of time, we have created a warm environment where people come for meaningful conversations 
                along with delicious coffee.
            </p>
            </div>
    
        </div>
    </section>

    <footer>
        <div class="footer-container">
        <!-- Left side -->
        <div class="footer-left">
            <img src="images/logo_img.jpg" alt="Eskina Coffee Logo">
            <h2>Eskina Coffee</h2>
        </div>

        <!-- Right side -->
        <div class="footer-right">
            <a href="https://www.facebook.com/eskinacoffee" target="_blank" class="social-link">
            <img src="images/facebook.svg" alt="Facebook" class="icon"> Eskina Coffee
            </a>
        
            <a href="https://www.instagram.com/eskinacoffeeph/" target="_blank" class="social-link">
            <img src="images/instagram.svg" alt="Instagram" class="icon"> eskinacoffeeph
            </a>

            <a href="https://mail.google.com/mail/?view=cm&fs=1&to=eskinacoffee@gmail.com" 
                    target="_blank"  class="email-link">
            <img src="images/email.svg" alt="Email" class="icon"> eskinacoffee@gmail.com
            </a>
        </div>
        </div>

        <!-- Bottom copyright -->
        <div class="footer-bottom">
        Copyright &copy; <?php echo date("Y"); ?> Eskina Coffee
        </div>
    </footer>

</body>
</html>