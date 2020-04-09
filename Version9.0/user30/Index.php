<?php
$apiKey = "bcefc981c1b5f1ec5d17ac5896c6c044";//"You will need to add in the"
$cityId = "5046997"; //5046997 Shakopee City Id
$units = "imperial";//metric-Celcius  imperial-Farhenheit
if ($units == 'imperial'){//Changes the $temp varaible to match 
    $temp = "F";
}
else {
    $temp = "F";
}
$googleApiUrl = "http://api.openweathermap.org/data/2.5/weather?id=" . $cityId . "&lang=en&units=" . $units . "&APPID=" . $apiKey;

$ch = curl_init();

curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);

curl_close($ch);
$data = json_decode($response);
$currentTime = time();
?>
<html lang="en">
<!--Version 7.0 
	Name:
	Date Completed:
    -->
<html>

<head>
    <title>Sonic The Hedgehog</title>
    <link rel='icon' href='CSS/favicon.ico' type='image/x-icon'/ >
    <link rel="stylesheet" href="style.css"
<link rel='icon' href='favicon.ico' type='image/x-icon'/ >
    <link href="CSS/SampleCSS.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="SampleJS.js"></script>

    
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
</head>

<body>
    <section id="header">
        <div class="container">
            <img src="CSS/Sonic%20fr%20Logo.png" class="logo">
            <div class="header-text">
                <h1>History Of<br>Sonic The Hedgehog</h1>
                <span class="square"></span>
                <p>Sonic the Hedgehog is the protagonist of the Sonic the Hedgehog video game series released by Sega, as well as numerous spin-off comics, animations, and other media. Sonic is a blue anthropomorphic hedgehog who can run at supersonic speeds and curl into a ball, primarily to attack enemies. In most games, Sonic must race through levels, collecting power-up rings and avoiding obstacles and enemies.</p>
                <button class="common-btn">READ MORE</button>
                <div class="line">
                    <span class="line-1"></span><br>
                    <span class="line-2"></span><br>
                    <span class="line-3"></span>
<style>
        body {
            font-family: Arial;
            font-size: 0.95em;
            color: #929292;
        }

        .report-container {
            border: #E0E0E0 1px solid;
            padding: 20px 40px 40px 40px;
            border-radius: 2px;
            width: 550px;
            margin: 0 auto;
        }

        .weather-icon {
            vertical-align: middle;
            margin-right: 20px;
        }

        .weather-forecast {
            color: #212121;
            font-size: 1.2em;
            font-weight: bold;
            margin: 20px 0px;
        }

        span.min-temperature {
            margin-left: 15px;
            color: #929292;
        }

        .time {
            line-height: 25px;
        }

    </style>

                </div>"


            </div>
        </div>
    </section>
    <div class="report-container">
        <h2><?php echo $data->name; ?> Weather Status</h2>
        <div class="time">
            <div><?php echo date("l g:i a", $currentTime); ?></div>
            <div><?php echo date("jS F, Y",$currentTime); ?></div>
            <div><?php echo ucwords($data->weather[0]->description); ?></div>
        </div>
        <div class="weather-forecast">
            <img src="http://openweathermap.org/img/w/<?php echo $data->weather[0]->icon; ?>.png" class="weather-icon" /> <?php echo $data->main->temp_max; ?>&deg;<?php echo $temp; ?><span class="min-temperature"><?php echo $data->main->temp_min; ?>&deg;<?php echo $temp; ?></span>
        </div>
        <div class="time">
            <div>Humidity: <?php echo $data->main->humidity; ?> %</div>
            <div>Wind: <?php echo $data->wind->speed; ?> km/h</div>
        </div>
    </div>
      <div class="container">
        <div class="app-title">
            <p>Weather</p>
        </div>
        <div class="notification"> </div>
        <div class="weather-container">
            <div class="weather-icon">
                <img src="icons/unknown.png" alt="">
            </div>
            <div class="temperature-value">
                <p>- °<span>C</span></p>
            </div>
            <div class="temperature-description">
                <p> - </p>
            </div>
            <div class="location">
                <p>-</p>
            </div>
        </div>
    </div>
    <nav id="sideNav">
        <ul>
            <li><a href="#header">HOME</a></li>
            <li><a href="#about">Classic</a></li>
            <li><a href="#features">Adventure</a></li>
            <li><a href="#courses">Modern</a></li>
            <li><a href="#offer">Story-Book</a></li>
            <li><a href="#contact">Games</a></li>
        </ul>
    </nav>
    <img src="CSS/sonic_big_ring_1991_gif_by_augustohirakodias_dbd430c-fullview.png" id="menuBtn">
    <!--about -->

    <section id="about">
        <div class="about-left-col">
            <img src="images/Classic%20Sonic%20.png">
        </div>
        <div class="about-right-col">
            <div class="about-text">
                <h1> Classic Sonic</h1>
                <p>Classic Sonic's world is a near perfect reflection of Sonic's dimension, having the same distinguished locations, like Angel Island and Little Planet, and inhabitants, like Sonic the Hedgehog and Dr. Eggman. The history of Classic Sonic's world likewise closely follows the history of Sonic's dimension, having experienced many of the same events, like the West Side Island incident[note 1] and the Angel Island Incident.However, Classic Sonic's world has witnessed a few events exclusive to itself, like its own Phantom Ruby incident; it is these events that differentiate it from its counterpart.</p><br><br>
                <h2>"We won't make anymore good games..."</h2>
                <h3>----SEGA AMERICA---</h3>
            </div>
        </div>
    </section>




    <section id="features">
        <div class="feature-row">
            <div class="feature-col">
                <img src="images/A-Sonic.png">
                <h4>Adventure 1 and 2 Sonic</h4>
                <p> Adventure 1 Sonic involved a different approached with the setting on earth, most of the game was them chasing after a water monster</p>
            </div>
            <div class="feature-col">
                <img src="images/A-Shadow.png">
                <h4>Shadow The Hedgehog</h4>
                <p> Makes his first series in the second installment of the game as the main new villain and leader of team dark until near the end of the game.</p>
            </div>
            <div class="feature-col">
                <img src="images/S&S.png">
                <h4>Super Forms</h4>
                <p>Super Sonic and Shadow team up in the end of Sonic Adventure 2 to stop Project Shadow and the asteroid from hitting the earth.</p>
            </div>

            <div class="feature-btn">
                <button class="common-btn">Learn More</button></div>

        </div>
    </section>

    <!--courses -->
    <section id="courses">
        <div class="container course-row">
            <div class="course-left-col">
                <div class="course-text">
                    <h1>Modern Sonic<br></h1>
                </div>
                <p>This is The Sonic The Hedgehog of today,the most up to date version of Sonic that SEGA has released to us. Sonic the Hedgehog is the protagonist of the Sonic the Hedgehog video game series released by Sega, as well as numerous spin-off comics, animations, and other media. Sonic is a blue anthropomorphic hedgehog who can run at supersonic speeds and curl into a ball, primarily to attack enemies. In most games, Sonic must race through levels, collecting power-up rings and avoiding obstacles and enemies.</p>
                <button class="common-btn">Modern Sonic Games</button>
            </div>
            <div class="course-right-col">
                <img src="images/Modern%20Sonic%202.png">
            </div>
        </div>
    </section>
    <!--Offer-->
    <section id="offer">
        <div class="about-left-col">
            <img src="images/DSpine.png">
        </div>
        <div class="about-right-col">
            <div class="about-text">
                <h1> Story-Book Sonic, <br> Wii Exclusive</h1>
                <p>The Sonic Storybook series is a collection of Sonic games exclusive to the Wii, in which Sonic the Hedgehog travels into the world of a storybook to stop a great evil that potentially threatens both his world and theirs, meeting alternate versions of his friends and enemies in the process.
                </p>
                <h2>"How's This for an Introduction Then!"</h2>
                <h3>----DarkSpine Sonic---</h3>
                <button class="common-btn">More About Story Book</button>

            </div>
        </div>
    </section>

    <!--contact-->

    <section id="contact">
        <div class="container contact-row">
            <div class="contact-left-col">
                <h1>Sign Up and Join<br> The FanClub :O</h1>
                <form>
                    <input type="text" placeholder="Enter Name">

                    <input type="text" placeholder="Enter Email">

                    <input type="Password" placeholder="Enter Password">
                    <div class="btn-box">
                        <button class="common-btn">Sign Up</button>
                         <button class="common-btn">Become a Member</button>
                        
                       
                    
                    </div> </form>
                        <div class="contact-right-col">
                        </div>

               
    </section>
            
            <form align="right" name="form1" method="post" action="logout.php">
  <label class="logoutLblPos">
  <input name="submit2" type="submit" id="submit2" value="LogOut">
  </label>
</form>
           <body>
<canvas width="400" height="400" id="game"></canvas>
<script>
var canvas = document.getElementById('game');
var context = canvas.getContext('2d');

var grid = 16;
var count = 0;
  
var snake = {
  x: 160,
  y: 160,
  
  // snake velocity. moves one grid length every frame in either the x or y direction
  dx: grid,
  dy: 0,
  
  // keep track of all grids the snake body occupies
  cells: [],
  
  // length of the snake. grows when eating an apple
  maxCells: 4
};
var apple = {
  x: 320,
  y: 320
};

// get random whole numbers in a specific range
// @see https://stackoverflow.com/a/1527820/2124254
function getRandomInt(min, max) {
  return Math.floor(Math.random() * (max - min)) + min;
}

// game loop
function loop() {
  requestAnimationFrame(loop);

  // slow game loop to 15 fps instead of 60 (60/15 = 4)
  if (++count < 4) {
    return;
  }

  count = 0;
  context.clearRect(0,0,canvas.width,canvas.height);

  // move snake by it's velocity
  snake.x += snake.dx;
  snake.y += snake.dy;

  // wrap snake position horizontally on edge of screen
  if (snake.x < 0) {
    snake.x = canvas.width - grid;
  }
  else if (snake.x >= canvas.width) {
    snake.x = 0;
  }
  
  // wrap snake position vertically on edge of screen
  if (snake.y < 0) {
    snake.y = canvas.height - grid;
  }
  else if (snake.y >= canvas.height) {
    snake.y = 0;
  }

  // keep track of where snake has been. front of the array is always the head
  snake.cells.unshift({x: snake.x, y: snake.y});

  // remove cells as we move away from them
  if (snake.cells.length > snake.maxCells) {
    snake.cells.pop();
  }

  // draw apple
  context.fillStyle = 'red';
  context.fillRect(apple.x, apple.y, grid-1, grid-1);

  // draw snake one cell at a time
  context.fillStyle = 'green';
  snake.cells.forEach(function(cell, index) {
    
    // drawing 1 px smaller than the grid creates a grid effect in the snake body so you can see how long it is
    context.fillRect(cell.x, cell.y, grid-1, grid-1);  

    // snake ate apple
    if (cell.x === apple.x && cell.y === apple.y) {
      snake.maxCells++;

      // canvas is 400x400 which is 25x25 grids 
      apple.x = getRandomInt(0, 25) * grid;
      apple.y = getRandomInt(0, 25) * grid;
    }

    // check collision with all cells after this one (modified bubble sort)
    for (var i = index + 1; i < snake.cells.length; i++) {
      
      // snake occupies same space as a body part. reset game
      if (cell.x === snake.cells[i].x && cell.y === snake.cells[i].y) {
        snake.x = 160;
        snake.y = 160;
        snake.cells = [];
        snake.maxCells = 4;
        snake.dx = grid;
        snake.dy = 0;

        apple.x = getRandomInt(0, 25) * grid;
        apple.y = getRandomInt(0, 25) * grid;
      }
    }
  });
}

// listen to keyboard events to move the snake
document.addEventListener('keydown', function(e) {
  // prevent snake from backtracking on itself by checking that it's 
  // not already moving on the same axis (pressing left while moving
  // left won't do anything, and pressing right while moving left
  // shouldn't let you collide with your own body)
  
  // left arrow key
  if (e.which === 37 && snake.dx === 0) {
    snake.dx = -grid;
    snake.dy = 0;
  }
  // up arrow key
  else if (e.which === 38 && snake.dy === 0) {
    snake.dy = -grid;
    snake.dx = 0;
  }
  // right arrow key
  else if (e.which === 39 && snake.dx === 0) {
    snake.dx = grid;
    snake.dy = 0;
  }
  // down arrow key
  else if (e.which === 40 && snake.dy === 0) {
    snake.dy = grid;
    snake.dx = 0;
  }
});

// start the game
requestAnimationFrame(loop);
</script>
</body> 
            <div id="scratch-games" class="container">
           <iframe src="https://scratch.mit.edu/projects/382512597/embed" allowtransparency="true" width="485" height="402" frameborder="0" scrolling="no" allowfullscreen></iframe>
            </div>
            <div id="Sonic-Games" class="container">
              <iframe src="https://scratch.mit.edu/projects/10536844/embed" allowtransparency="true" width="485" height="402" frameborder="0" scrolling="no" allowfullscreen></iframe>
            </div>
            <div id="Sonic-Engine" class="container"><iframe src="https://scratch.mit.edu/projects/378363008/embed" allowtransparency="true" width="485" height="402" frameborder="0" scrolling="no" allowfullscreen></iframe></div>
            /!-- API--/
            
<!--footer      -->
            <section id="footer">
            <div class="container footer-row">
                <hr>
                <div class="footer-left-col">
                <div class="footer-links">
                    <div class="link-title">
                    <h4>Sonic The Hedgehog Games</h4>
                    <small> SonicGames.com</small>
                    <small>More Websites</small></div>
                      <div class="link-title">
                    <h4>About Website</h4>
                    <small> Characters</small>
                    <small>FAQs</small></div>
                <div class="footer-Right-col">
                <p>Right column</p>
                    </div></div>
                    </section>
    <script>
        var menuBTn = document.getElementById("menuBtn");
        var sideNav = document.getElementById("sideNav");

        sideNav.style.right = "-250px";
        menuBtn.onclick = function() {
            if (sideNav.style.right == "-250px") {
                sideNav.style.right = "0";
            } else {
                sideNav.style.right = "-250px";
            }

        }

    </script>
                <script>
	var scroll = new SmoothScroll('a[href*="#"]');
</script>
</body>

</html>
