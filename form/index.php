<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Naftal</title>

    <link rel="stylesheet" href="styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <!-- Bootstrap Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap Link -->


    <!-- Font Awesome Cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- Font Awesome Cdn -->


    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <!-- Google Fonts -->
</head>
<body>
    





    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container">
          <a class="navbar-brand" href="index.html" id="logo"><span>N</span>aftal</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span><i class="fa-solid fa-bars"></i></span>
          </button>
          <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link active" href="index.html">Home</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="#services">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#gallary">Gallary</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
              </li>
             
            </ul>
            <form class="d-flex">
              <button id="myButton" class="btn btn-primary" onclick="" type="button">Book</button>
            </form>
            <div id="overlay"></div>
            <div id="myForm">
                <!-- Votre formulaire ici -->
                <section class="book" id="book">
                    <div class="container">
              
                      <div class="main-text">
                        <h1><span>B</span>ook</h1>
                      </div>
                      
                      <div class="row">
              
                        <div class="col-md-6 py-3 py-md-0">
                          <div class="card">
                            <img src="./images/b5.png" alt="">
                          </div>
                        </div>
              
                        <div class="col-md-6 py-3 py-md-0">
                        <form id="message" action="process_form.php" method="POST">
                            <input type="text" name="nom" placeholder="first name" class="form-control"><br>
                            <input type="text" name="prenom" placeholder="last name"class="form-control" > <br>
                            <input type="text" name="birthdate" placeholder="BirthDate" onfocus="(this.type='date')"class="form-control"><br>   
                            <input type="number" name="matricule" placeholder="matricule"><br> 
                            <input type="text" name="date_daumbauche" placeholder="date d'embauche" onfocus="(this.type='date')"class="form-control"> <br>
                            <select id="mySelect" type=text name="SF" class="form-control">
                                <option value="" disabled selected hidden>sétuatuion familiale</option>                
                                <option>marier</option>
                                <option>devorcer</option>
                                <option>selibataire</option>
                            
                            </select>  <br>
                            <input type="text" name="adress" placeholder="adresse"class="form-control"><br>
                            <input type="text" name="type" placeholder="type"class="form-control"><br>
                            <select id="mySelect" class="form-control" type="text" name="voyage">
                            
                                <option value="" disabled selected hidden>voyage</option>                
                                <option>Turkey</option>
                                <option>Spain</option>
                                <option>Omra</option>
                                            
                            </select>  <br>  
                           <select id="mySelect" type="text" name="session"class="form-control">
                             <option value="" disabled selected hidden>session</option>
                             <option>from 20/07/2023 to 25/07/2023 </option>
                             <option>from 20/08/2023 to 25/08/2023 </option>
                            
                            </select><br>

                          <input type="submit" value="Book Now" class="submit" required>

                        </form>
                        <div id="messageDiv"></div>

                        </div>
              
                      </div>
                    </div>
                  </section>
                  <!-- Votre formulaire ici -->
              </div>
          </div>
        </div>
      </nav>
    <!-- Navbar End -->





    <!-- Home Section Start -->
    <div class="home">
        <div class="content">
            <h5>Welcome To <span>N</span>aftal</h5>
            <h1>Visit <span class="changecontent"></span></h1>
            <p>Votre satisfaction est notre priorité</p>
            <a href="#services">Book Place</a>
        </div>
    </div>
    <!-- Home Section End -->





    







    







    <!-- Section Services Start -->
    <section class="services" id="services">
      <div class="container">

        <div class="main-txt">
          <h1><span>S</span>ervices</h1>
        </div>

        <div class="row" style="margin-top: 30px;">

          <div class="col-md-4 py-3 py-md-0">

            <div class="card">
              <i class="fas fa-hotel"></i>
              <div class="card-body">
                <h3>Affordable Hotel</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A, eaque.</p>
              </div>
            </div>

          </div>
          <div class="col-md-4 py-3 py-md-0">

            <div class="card">
              <i class="fas fa-utensils"></i>
              <div class="card-body">
                <h3>Food & Drinks</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A, eaque.</p>
              </div>
            </div>

          </div>
          <div class="col-md-4 py-3 py-md-0">

            <div class="card">
              <i class="fas fa-bullhorn"></i>
              <div class="card-body">
                <h3>Safty Guide</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A, eaque.</p>
              </div>
            </div>

          </div>



        </div>


        <div class="row" style="margin-top: 30px;">

          <div class="col-md-4 py-3 py-md-0">

            <div class="card">
              <i class="fas fa-globe-asia"></i>
              <div class="card-body">
                <h3>Around The World</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A, eaque.</p>
              </div>
            </div>

          </div>
          <div class="col-md-4 py-3 py-md-0">

            <div class="card">
              <i class="fas fa-plane"></i>
              <div class="card-body">
                <h3>Fastest Travel</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A, eaque.</p>
              </div>
            </div>

          </div>
          <div class="col-md-4 py-3 py-md-0">

            <div class="card">
              <i class="fas fa-hiking"></i>
              <div class="card-body">
                <h3>Adventures</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A, eaque.</p>
              </div>
            </div>

          </div>



        </div>

      </div>
    </section>
    <!-- Section Services End -->




    <!-- Section Gallary Start -->
    <section class="gallary" id="gallary">
      <div class="container">

        <div class="main-txt">
          <h1><span>G</span>allary</h1>
        </div>

        <div class="row" style="margin-top: 30px;">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="./images/1.jpg" alt="" height="230px">
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="./images/5.jpg" alt="" height="230px">
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="./images/g3.png" alt="" height="230px">
            </div>
          </div>
        </div>


        <div class="row" style="margin-top: 30px;">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="./images/g4.png" alt="" height="230px">
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="./images/g5.png" alt="" height="230px">
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="./images/g6.png" alt="" height="230px">
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- Section Gallary End -->







    <!-- About Start -->
    <section class="about" id="about">
      <div class="container">

        <div class="main-txt">
          <h1>About <span>Us</span></h1>
        </div>

        <div class="row" style="margin-top: 50px;">

          <div class="col-md-6 py-3 py-md-0">
            <div class="card">
              <img src="./images/b3.png" alt="">
            </div>
          </div>

          <div class="col-md-6 py-3 py-md-0">
            <h2>A propos de Naftal</h2>
            <p>Naftal est une société par actions (SPA) au capital social de 160 000 000 000 .00 DA. Fondée en 1982 et filiale à 100% du Groupe Sonatrach, elle est rattachée à l’activité commercialisation. Elle a pour mission principale, la distribution et la commercialisation des produits pétroliers et dérivés sur le marché national.</p>
            <button id="about-btn" onclick="url='https://www.naftal.dz/fr/index.php/a-propos-de-naftal'">Read More...</button>
          </div>

        </div>

      </div>
    </section>
    <!-- About End -->








    <!-- Footer Start -->
    <footer id="footer">
      <h1><span>N</span>aftal</h1>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus fugiat, ipsa quos nulla qui alias.</p>
      <div class="social-links">
        <i class="fa-brands fa-twitter"></i>
        <i class="fa-brands fa-facebook"></i>
        <i class="fa-brands fa-instagram"></i>
        <i class="fa-brands fa-youtube"></i>
        <i class="fa-brands fa-pinterest-p"></i>
      </div>
      <div class="credit">
        <p>Designed By <a href="#">Zaaf Mohamed</a></p>
      </div>
      <div class="copyright">
        <p>&copy;Copyright SA Coding. All Rights Reserved</p>
      </div>
    </footer>
    <!-- Footer End -->







    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="main.js"></script>
    <script>
    $(document).ready(function() {
   $('#message').submit(function(e) {
      e.preventDefault(); // Prevent form submission

      var formData = $(this).serialize(); // Serialize form data

      $.ajax({
         url: $(this).attr('action'),
         type: $(this).attr('method'),
         data: formData,
         success: function(response) {
            $('#messageDiv').html(response); // Update the message div with the response
         },
         error: function() {
            $('#messageDiv').html("Error occurred while processing the form."); // Display an error message
         }
      });
   });
});

    
    
    </script>
</body>
</html>