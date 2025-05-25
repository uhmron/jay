<link rel="stylesheet" href="style.css">
<nav>
    <a href="index.php"><img src="apollo.png"></a>
        <t>Apollo Manila</t>
        <div class="nav-links " id="navLinks">
            <i class="fa fa-times " onclick="hideMenu() "></i>            
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="regis.php">Reserve</a></li>
                    <li><a href="check-status.php">Check</a></li>
                    <li><a href="aindex.php">Admin</a></li>
                </ul>
            <i class="fa fa-bars " onclick="showMenu() "></i>
        </div>
</nav>

<script>
        var navLinks = document.getElementById("navLinks ");

        function showMenu() {
            navLinks.style.right = "0 ";
        }

        function hideMenu() {
            navLinks.style.right = "-200px ";
        }
</script>