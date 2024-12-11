<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colorful Landing Page</title>
    <Style>
        /* Global Styles */
body {
    font-family: 'Poppins', Arial, sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    color: #333;
}
a{
    text-decoration: none;
}
.container {
    width: 90%;
    max-width: 1200px;
    margin: 0 auto;
    text-align: center;
}

/* Hero Section */
.hero {
    background: linear-gradient(135deg, #ff6f61, #ffc107, #4caf50, #00bcd4);
    background-size: 400% 400%;
    animation: gradientMove 10s ease infinite;
    color: #fff;
    padding: 100px 20px;
}

@keyframes gradientMove {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}

.hero h1 {
    font-size: 3rem;
    margin-bottom: 10px;
    letter-spacing: 2px;
}

.hero p {
    font-size: 1.2rem;
    margin-bottom: 20px;
}

.btn {
    display: inline-block;
    background: #fff;
    color: #333;
    padding: 12px 25px;
    text-decoration: none;
    border-radius: 30px;
    font-weight: bold;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    transition: transform 0.3s, background 0.3s, color 0.3s;
}

.btn:hover {
    transform: scale(1.1);
    background: #333;
    color: #fff;
}

/* Features Section */
.features {
    padding: 50px 20px;
    background: #f8f9fa;

}

.features h2 {
    font-size: 2.5rem;
    margin-bottom: 30px;
    color: #333;
}

.features-grid {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 20px;
}

.feature {
    max-width: 300px;
    padding: 20px;
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s, box-shadow 0.3s;
    height: 300px;
}

.feature:hover {
    transform: translateY(-10px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
}


img{
    border-radius: 50%;
    width: 150px;
    position: relative;
    top: 13px;
}
.icon{
    width: 340px;
    position: relative;
    top: -20px;
    justify-self: center;
    border-radius: 10px;
    height: 180px;
}
.feature h3 {
    font-size: 1.5rem;
    margin-bottom: 10px;
}

/* Footer */
.footer {
    background: linear-gradient(135deg, #333, #555);
    color: #fff;
    padding: 20px;
    text-align: center;
}

.footer p {
    margin: 0;
}
h3, p{
    margin-top: -5px;
}

    </Style>
</head>
<body>
    <header class="hero">
        <div class="container">
            <h1>Welcome to Our Vibrant World</h1>
            <p>Explore endless possibilities with our dynamic solutions.</p>
            <a href="#features" class="btn">Discover More</a>
        </div>
    </header>

    <section id="features" class="features">
        <div class="container">
            <h2>What Makes Us Special?</h2>
            <div class="features-grid">
                <a href="/mc/index.php">
                <div class="feature">
                    <div class="icon" style="background: #ff6f61;">🎨</div>
                    <h3>Creativity</h3>
                    <p>Unleashing innovative ideas to bring your visions to life.</p>
                </div></a>
                <div class="feature">
                    <a href="/karry/index.php">
                    <div class="icon" style="background: #ff6f61;"><img src="/karry/assets/images/picko.jpg" alt=""></div>
                    <h3>Karry James B. Omay</h3>
                    <p>"Time is Gold"</p>
                </div></a>
                <div class="feature">
                    <a href="">
                    <div class="icon" style="background: #4caf50;">🌟</div>
                    <h3>Excellence</h3>
                    <p>Striving for perfection in everything we do.</p>
                </div></a>
                <div class="feature">
                    <a href="">
                    <div class="icon" style="background: #4caf50;">🌟</div>
                    <h3>Excellence</h3>
                    <p>Striving for perfection in everything we do.</p>
                </div></a>
                <div class="feature">
                    <a href="">
                    <div class="icon" style="background: #4caf50;">🌟</div>
                    <h3>Excellence</h3>
                    <p>Striving for perfection in everything we do.</p>
                </div></a>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <p>© All Rights Reserved.</p>
        </div>
    </footer>
</body>
</html>
