<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <div class="container">
      <div class="form">
        <div class="contact-info">
          <h3 class="title" style="text-align: center;">THE PAPER HOUSE 🖨️</h3>
          <p class="text" style="color: #000;">
            Google can't give all answers to Life.
            <br>So just login to Our System & Like
            the Status of Easy Life. 
          <br><span style="margin-left: 250px;"> -Agniva</span>
          </p>

          <div class="info">
            <img src="img/login.svg" style="height: 370px; width: 350px;" alt="" />
          </div>

        </div>

        <div class="contact-form" >


          <form action="ownerdashboard.php" method="post" autocomplete="off" style="margin-top: 150px;">
            <h3 class="title" style="text-align: center;">Owner Login</h3>
            <div class="input-container">
              <input type="email" name="email" placeholder="Email" class="input" />
            </div>
            <div class="input-container">
              <input type="password" name="password" placeholder="password" class="input" />
            </div>
            <input type="submit" name="submit" class="btn" />
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
