<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
  margin:0;
  padding:0;
  box-sizing: border-box;
}

html{
  background-color:#fff;
  color:#555;
  font-family: 'Lato', 'Arial','sans-serif';
  font-weight:300;
  font-size:20px;
  text-rendering: optimizeLegibility;
}

.row{
  max-width: 1140px;
  margin: 0 auto;
}


header{
  background-image:linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.7)),url("resto.jpg");
  background-size:cover;
  background-position:center;
  height:100vh;
}

h1{
  margin:0;
  margin-bottom:20px;
  color:#fff;
  font-size:240%;
  font-weight:300;
  text-transform:uppercase;
  letter-spacing:1px;
  word-spacing:4px;
  text-shadow: 2px 2px 9px rgba(0, 0, 10, .8);
}

.hero-text-box{
  position:absolute;
  width:1140px;
  top:60%;
  left:50%;
  transform:translate(-50%, -50%);
}

.btn:link,.btn:visited{
  display:inline-block;
  padding: 10px 30px;
  font-weight:300;
  text-decoration:none;
  border-radius:30px;
  color:#fff;
}

.btn:hover,.btn:active{
  background-color:#e74c3c;
  color: black;
  border: 2px solid #e74c3c;
  transition:background-color .3s;
}

.btn-full:link,.btn:visited{
  background-color:#e74c3c;
}

.btn-ghost:link,.btn:visited{
  border: 2px solid #e74c3c;
}


.logo{
  height: 105px;
  width:auto;
  float:left;
  margin-top:20px;
}


.main-nav{
  float:right;
  list-style:none;
  margin-top:55px;
}

.main-nav li{
  display: inline-block;
  margin-left:40px;
}

.main-nav li a:link, .main-nav li a:visited{
  color: #fff;
  text-decoration:none;
  text-transform:uppercase;
  font-size: 90%;
  border-bottom: 2px solid transparent;
  transition:border-bottom .2s;
  padding: 5px 0;
  text-shadow: 2px 2px 9px rgba(0, 0, 10, .8);

}

.main-nav li a:hover, .main-nav li a:active{
  border-bottom: 2px solid #e74c3c;
  
}



@media only screen and (max-width: 1140px) {
  .hero-text-box{
  position:absolute;
  width:940px;
  top:60%;
  left:50%;
  transform:translate(-50%, -50%);
}
  .row{
      width:940px;
  }
}


@media only screen and (max-width: 960px) {
  .hero-text-box{
  position:absolute;
  width:840px;
  top:60%;
  left:50%;
  transform:translate(-50%, -50%);
}
  .row{
      width:840px;
  }
}


@media only screen and (max-width: 960px) {
  .hero-text-box{
  position:absolute;
  width:740px;
  top:60%;
  left:50%;
  transform:translate(-50%, -50%);
}
  .row{
      width:740px;
  }
  h1{
    font-size:200%;
  }
}


@media only screen and (max-width: 740px) {
  .hero-text-box{
  position:absolute;
  width:640px;
  top:60%;
  left:50%;
  transform:translate(-50%, -50%);
}
  .row{
      width:640px;
  }
  h1{
    font-size:180%;
  }
  
.btn:link,.btn:visited{
  display:inline-block;
  padding: 8px 15px;
  font-weight:300;
  text-decoration:none;
  border-radius:30px;
  color:#fff;
  font-size:16px;
}
}


@media only screen and (max-width: 640px) {
  .hero-text-box{
  position:absolute;
  width:540px;
  top:60%;
  left:50%;
  transform:translate(-50%, -50%);
}
  .row{
      width:540px;
  }
  h1{
    font-size:150%;
  }
  
  .logo{
    height:50px;
  }
  
.btn:link,.btn:visited{
  display:inline-block;
  padding: 8px 15px;
  font-weight:300;
  text-decoration:none;
  border-radius:30px;
  color:#fff;
  font-size:16px;
}
}


@media only screen and (max-width: 430px) {
  .hero-text-box{
  position:absolute;
  width:340px;
  top:60%;
  left:50%;
  transform:translate(-50%, -50%);
}
  .row{
      width:340px;
  }
  h1{
    font-size:105%;
  }
  
  .logo{
    height:100px;
    position:absolute;
    top: 26%;
    left:0;
  }
  
.btn:link,.btn:visited{
  display:inline-block;
  padding: 8px 15px;
  font-weight:300;
  text-decoration:none;
  border-radius:30px;
  color:#fff;
  font-size:12px;
}
  
  .main-nav li{
  display: inline-block;
  margin-left:10px;
}
  
  .main-nav{
  float:right;
  list-style:none;
  margin-top:15px;
}
  
}
    </style>
</head>
<body>
    <header>
        <nav>
            <div class="row">
                <img src="1.png" class="logo">
                <ul class="main-nav">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Books</a></li>
                  <li><a href="#">About</a></li>
                  <li><a href="#">Contact</a></li>
                </ul>
            </div>
        </nav>
        <div class="hero-text-box">
          <h1>Sudip's Restro<br>Satisfy Your Taste Buds and Appetite
          </h1>
            <a class="btn btn-full" href="admin_login.php">Admin Login</a>
            <a class="btn btn-full" href="#">User Login</a>
        </div>
      </header>
</body>
</html>
