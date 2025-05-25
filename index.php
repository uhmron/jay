<!DOCTYPE html>
<html lang="en">
<head>
<?php include ('header.php') ?>
<title>Apollo MNL</title>    
<link rel="stylesheet" href="style.css" >
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
</head>
<gbody>
<section class="header">
    <div class="title">APOLLO MANILA</div>
</section>

<section class="about">
        <h3>WELCOME</h3>
        <p>We provide the best services for your travel needs.</p>
        <p>Welcome to Apollo Manila, where culinary excellence meets vibrant ambiance. Nestled in the heart of the city,</br>
        Apollo Manila offers a unique dining experience that celebrates the rich flavors of Filipino cuisine with a modern twist.</p>
        <a href="regis.php" class="button">Reserve Now</a>
</section>

<section class="gallery">
        <h3>GALLERY</h3>
        <p>Affordable Eat All You Can Asian food</p>
        <p>Daily Dishes may vary due to seasonal availability and Chef's suggestions.</p>

<div class="image-container">
    <img id="image1" class="image active" src="r.png" alt="Image 1">
    <img id="image2" class="image active" src="s.png" alt="Image 2">
    <img id="image3" class="image active" src="t.png" alt="Image 3">
    <img id="image4" class="image" src="r.png" alt="Image 4">
    <img id="image5" class="image" src="s.png" alt="Image 5">
</div>

<button id="prevBtn"><</button>
<button id="nextBtn">></button>

<script>
    let currentIndex = 0;
    const images = document.querySelectorAll('.image');

    function showImages(index) {
        const totalImages = images.length;
        images.forEach((img, i) => {
            img.classList.toggle('active', i >= index && i < index + 3);
        });
    }

    document.getElementById('nextBtn').addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % (images.length - 2);
        showImages(currentIndex);
    });

    document.getElementById('prevBtn').addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + (images.length - 2)) % (images.length - 2);
        showImages(currentIndex);
    });

    showImages(currentIndex); // Initial display
</script>
</section>
<section class="rate">
    
</section>
</body>
<?php include ('footer.php') ?>
</html>
