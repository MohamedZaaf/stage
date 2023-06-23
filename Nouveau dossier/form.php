<!DOCTYPE html>
<html>
    <head>
        <title>form </title>
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <link rel="stylesheet" type="text/css" href="style.php">
    </head>
    <body>
        <form action="process_form.php" method="POST">
<div class="form">
    <input type="text" name="nom" placeholder="first name"><br>
    <input type="text" name="prenom" placeholder="last name" > <br>
    <input type="text" name="birthdate" placeholder="BirthDate" onfocus="(this.type='date')"><br>   
    <input type="number" name="matricule" placeholder="matricule"><br> 
    <input type="date" name="date_daumbauche" placeholder="date d'embauche" onfocus="(this.type='date')"> <br>
    <select type="text" name="SF">
                        
        <option>marier</option>
        <option>devorcer</option>
        <option>selibataire</option>
    
    </select>  <br>
    <input type="text" name="adress" placeholder="adresse"><br>
    <input type="text" name="type" placeholder="type"><br>
    <select type="text" name="voyage">
                        
        <option>Turkey</option>
        <option>Spain</option>
        <option>Omra</option>
                    
    </select>  <br>  
  <select type="text" name="session">
    <option>from 20/07/2023 to 25/07/2023 </option>
    <option>from 20/08/2023 to 25/08/2023 </option>
    
  </select><br>

    <input type="submit" value="Submit">

</div>
</form>
    </body>
</html>


<form id="message" action="process_form.php" method="POST">
              
                            <input  class="form-control" type="text" name="nom" placeholder="first name"><br>
                            <input  class="form-control" type="text" name="prenom" placeholder="last name" > <br>
                            <input  class="form-control" type="text" name="birthdate" placeholder="BirthDate" onfocus="(this.type='date')"><br>   
                            <input  class="form-control" type="number" name="matricule" placeholder="matricule"><br> 
                            <input  class="form-control" type="date" name="date_daumbauche" placeholder="date d'embauche" onfocus="(this.type='date')"> <br>
                            <select class="form-control" type="text" name="SF">
                        
                              <option>marier</option>
                              <option>devorcer</option>
                              <option>selibataire</option>
    
                            </select>  <br>
                            <input type="text" name="adress" placeholder="adresse">  <br>
                            <input type="text" name="type" placeholder="type">  <br>
                            <select type="text" class="form-control" name="voyage" >
                              <option value="" disabled selected hidden>Voyage</option>
                              <option>Turkey</option>
                              <option>Spain</option>
                              <option>Omra</option>
                              <i class="fa-solid fa-arrow-down"></i>
                            </select><br>
                            <select type="text" class="form-control" name="session" >
                              <option value="" disabled selected hidden>session</option>
                              <option value="option1">from 20/07/2023 to 25/07/2023</option>
                              <option value="option2">from 20/08/2023 to 25/08/2023 </option>

                            <input type="submit" value="Book Now" class="submit" required>
                            
              
                          </form>