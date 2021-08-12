<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Feedback Form</title>
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
          Average players want to be left alone. Good players want to be coached. Great players want to be told the truth
          <br><span style="margin-left: 250px;"> -Doc Rivers</span>
          </p>

          <div class="info">
            <img src="img/feedback.svg" style="height: 380px; width: 350px;" alt="" />
          </div>

        </div>

        <div class="contact-form" >


          <form action="" method="post" autocomplete="off" style="margin-top: 50px;">
            <h3 class="title" style="text-align: center;">Feedback Form</h3>
            <div class="input-container">
              <input type="text" name="name" placeholder="Name" class="input" />
            </div>
            <div class="input-container">
              <input type="email" name="email" placeholder="Email" class="input" />
            </div>
            <div class="input-container">
              <input type="tel" name="phone" placeholder="Phone No." class="input" />
            </div>
            <div class="input-container textarea">
              <textarea name="message" placeholder="Feedback" class="input"></textarea>
            </div>
            <input type="submit" name="submit" class="btn" />
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
