<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css" />
    <title>Sign in & Sign up Form</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
        <form id="login-form" action="login.php" class="sign-in-form" method="POST">
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input name="username" type="text" placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input name="password" type="password" placeholder="Password" />
            </div>
            <input type="submit" value="Login" class="btn solid" />

            <div id="error-message" class="error-message"></div>
           
          </form>
          <form action="process_form.php" method="POST" class="sign-up-form">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input name="nom" type="text" placeholder="First name" />
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input name="prenom" type="text" placeholder="Last Name" />
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input name="username" type="text" placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input name="email" type="email" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input id="password" name="password" type="password" placeholder="Password" required  />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input name="confirm_password" type="password" placeholder="Confirm password" required />
            </div>
            <div class="input-field">
              <i class="fas fa-calendar"></i>
              <input name="birthdate" type="text" placeholder="BirthDate" onfocus="(this.type='date')"class="form-control"/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input name="matricule" type="number" placeholder="Matricule" />
            </div>
            <div class="input-field">
              <i class="fas fa-calendar"></i>
              <input name="date_daumbauche" type="text" placeholder="date d'embauche" onfocus="(this.type='date')"class="form-control"/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input name="SF" type="text" placeholder="SF" />
            </div>
            <div class="input-field">
              <i class="fas fa-address-book"></i>
              <input name="adress"type="text" placeholder="adress">
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input name="type" type="text" placeholder="type" />
            </div>
            
            <input type="submit" class="btn" value="Sign up" />
            <div id="message-container" class="message-container">

            
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
              ex ratione. Aliquid!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="img/2.png" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
              laboriosam ad deleniti.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="img/2.png" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="app.js"></script>
    
  </body>
</html>
