<?php 
  // True because $a is set

    // $correctemail = "test@test.nl";
    // $correctpassword = "tEst";

    // if ($_POST["email"] == $correctemail && _POST["wachtwoord"] == $correctpassword){
    //     echo "hallo" . $_POST["wachtwoord"] . "| <br>";
    //     echo "your mail is" . $_POST["email"] . "| <br>";
    // }else{
    //     echo "vekeerde wachtwoord of email"
    // }


    $CORRECT_USERNAME = "test@test.nl";
    $CORRECT_PASSWORD = "tEst";

    if ($_POST["email"] == $CORRECT_USERNAME && $_POST['wachtwoord'] == $CORRECT_PASSWORD) {
        echo "Hello " . $_POST['wachtwoord'] . "<br>";
        echo "Your mail is " . $_POST['email'] . "<br>";
    } else {
        echo "Verkeerde wachtwoord";
    }





//   if ((isset($email))&&($wachtwoord)) {
//     echo $email.$wachtwoord;
//     if (($wachtwoord=="")&&($email=""))
//     {

//     }
//     else
//     {
//         echo("verkeerd, geen toegang");
//     }
//   }
// else
// {
//     echo("wachtwoord of email niet ingevoerd");
// }

// $wachtwoord = $_POST["wachtwoord"];
// $email = $_POST["email"];


  
  

// if (empty($wachtwoord)) {
//     echo "klopt niet";
//   }
  
//   // True because $a is set
//   if (isset($wachtwoord)) {
//     echo $email.$wachtwoord;
//   }
?>