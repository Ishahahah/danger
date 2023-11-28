<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Navbar with Image Background</title>
    <style>
    /* Reset default margin and padding for the page */
body, html {
    margin: 0;
    padding: 0;
}

/* Styling the navbar */
.navbar {
    background-color: #333;
    overflow: hidden;
}

.navbar ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}

.navbar li {
    float: left;
}

.navbar li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

/* Change color of links on hover */
.navbar li a:hover {
    background-color: #ddd;
    color: black;
}

/* Styling the main content area */
.main-content {
    width: 100%;
    height: 100vh; /* Set height to cover the entire viewport */
    background-image: url('p.jpg');
    background-size: cover;
    background-position: center;
}
</style>
</head>
<body>

<nav class="navbar">
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Contact</a></li>
    </ul>
</nav>

<div class="main-content">
    <!-- Content goes here -->
</div>

</body>
</html>
