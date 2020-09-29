<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="styles.css">
    <title>Sliding Text</title>
</head>

<body>
    <div class="container">
        <div class="navbar">
            <div class="logo">
                Logo
            </div>
            <nav>
                <ul>
                    <li>
                        <a href="">About</a>
                    </li>
                    <li>
                        <a href="">Library</a>
                    </li>
                    <li>
                        <a href="">Blog</a>
                    </li>
                    <li>
                        <a href="">Contact</a>
                    </li>
                </ul>
            </nav>
            <div class="user">
                <p>Stephen Kamau</p>
                <img src="images/user.png" alt="User Profile" />
            </div>
        </div>

        <div class="sidebar">
            <img src="images/search.png" alt="Search icon" class="search-icon">
            <div class="social-links">
                <img src="images/fb.png" alt="FaceBook">
                <img src="images/instagram.png" alt="FaceBook">
                <img src="images/twitter.png" alt="FaceBook">
            </div>
            <img src="images/info.png" alt="Search icon" class="info-icon">
        </div>
        <div class="msg-container">
            <div id="slider">
                <div class="msg-col">
                    <h1>The Reasoning</h1>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Reiciendis nemo cupiditate, 
                        sapiente eaque magnam neque delectus rem voluptatum odit ipsum.
                    </p>
                    <a href="#">Learn More</a>
                </div>
                <div class="msg-col">
                    <h1>The Knowledge</h1>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Reiciendis nemo cupiditate, 
                        sapiente eaque magnam neque delectus rem voluptatum odit ipsum.
                    </p>
                    <a href="#">Learn More</a>
                </div>
                <div class="msg-col">
                    <h1>The Intelligence</h1>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Reiciendis nemo cupiditate, 
                        sapiente eaque magnam neque delectus rem voluptatum odit ipsum.
                    </p>
                    <a href="#">Learn More</a>
                </div>
                <div class="msg-col">
                    <h1>The Learning</h1>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Reiciendis nemo cupiditate, 
                        sapiente eaque magnam neque delectus rem voluptatum odit ipsum.
                    </p>
                    <a href="#">Learn More</a>
                </div>
            </div>
        </div>

        <div class="controller">
            <div id="line1"></div>
            <div id="line2"></div>
            <div id="line3"></div>
            <div id="line4"></div>
            <div id="active"></div>
        </div>
    </div>


    <script>
        var slider = document.getElementById('slider');
        var active = document.getElementById('active');
        var line1 = document.getElementById('line1');
        var line2 = document.getElementById('line2');
        var line3 = document.getElementById('line3');
        var line4 = document.getElementById('line4');

        line1.onclick = function () {
            slider.style.transform = 'translateX(0)';
            active.style.top = '0px';
        }

        line2.onclick = function () {
            slider.style.transform = 'translateX(-25%)';
            active.style.top = '80px';
        }

        line3.onclick = function () {
            slider.style.transform = 'translateX(-50%)';
            active.style.top = '160px';
        }

        line4.onclick = function () {
            slider.style.transform = 'translateX(-75%)';
            active.style.top = '240px';
        }

    </script>

</body>

</html>