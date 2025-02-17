<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Right Answers Media</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="{{ asset('js/script.js') }}" defer></script>
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="logo">
                <img src="{{ asset('images/logo.png') }}" alt="Logo">
                <span>The Right Answers Media</span>
            </div>
            <ul class="nav-links">
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#">Videos</a></li>
                <li><a href="#">News</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
            <button class="advertise-btn">Advertise With Us</button>
        </nav>
    </header>

    <main>
        <section class="hero">
            <div class="main-video">
                <img src="{{ asset('images/hero.jpg') }}" alt="Main Video">
                <h2>The Ever Changing Situation of The Nigerian Economy</h2>
            </div>
        </section>

        <section class="latest-news">
            <h2>Latest Videos</h2>
            <div class="news-grid">
                <div class="news-item">
                    <img src="{{ asset('images/news1.jpg') }}" alt="News">
                    <p>President Tinubu States That Farming is The Next Big Thing</p>
                </div>
                <div class="news-item">
                    <img src="{{ asset('images/news2.jpg') }}" alt="News">
                    <p>President Trump Declares The Abortion of Transgenders</p>
                </div>
            </div>
        </section>

        <section class="live-radio">
            <h2>Live Radio</h2>
            <div class="radio-container">
                <img src="{{ asset('images/radio.jpg') }}" alt="Live Radio">
                <p>The Long Lasting Impact of Subsidy Removal on The Nigerian Economy</p>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2023 The Right Answers Media. All Rights Reserved.</p>
    </footer>
</body>
</html>

</body>
</html>
