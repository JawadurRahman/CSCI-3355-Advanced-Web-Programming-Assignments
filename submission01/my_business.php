<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Business Name</title>
    <link rel="stylesheet" href="css/my_css.css">
</head>

<body>

    <header>
        <!-- Business Logo -->
        <img src="images/logo.png" alt="Business Logo" class="logo">

        <!-- Welcome Message and Log In Button -->
        <div class="welcome">
            <p>Welcome</p>
            <button disabled>Log In</button>
            <p class="quotation">"Your static quotation" - Author</p>
        </div>

        <!-- Menu Bar -->
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li class="dropdown">
                    <a href="#">Products</a>
                    <div class="dropdown-content">
                        <a href="#">Category 1</a>
                        <a href="#">Category 2</a>
                        <!-- Add more categories based on your business -->
                    </div>
                </li>
                <!-- Replace "Events" with your business-specific menu item -->
                <li class="dropdown">
                    <a href="#">Business-Specific Item</a>
                    <div class="dropdown-content">
                        <a href="#">Subcategory 1</a>
                        <a href="#">Subcategory 2</a>
                        <!-- Add more subcategories based on your business -->
                    </div>
                </li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">About Us</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <!-- Main Content -->
        <section class="overview">
            <h1>Welcome to Your Business</h1>
            <p>This is a general overview/introduction to your business.</p>
        </section>

        <!-- Product Image -->
        <img src="images/products/product1.jpg" alt="Product Image" class="product-image">
    </main>

    <footer>
        <!-- Copyright Notice -->
        <p>&copy; 2024 Your Business Name | Version 1.0 | Created by Your Name</p>
    </footer>

</body>

</html>
