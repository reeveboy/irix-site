<?php
$data ;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "irix";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    // echo "db connected";
}

$sql = "select * from registration";
$result = $conn->query($sql);

// if ($result->num_rows > 0) {
//   // output data of each row
//   while($row = $result->fetch_assoc()) {
//     echo "id: " . $row["id"]. " - Name: " . $row["collage_name"]. " " . $row["lastname"]. "<br>";
//   }
// } else {
//   echo "0 results";
// }



$conn->close();
?>
<!DOCTYPE html>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <style>
        .center{
            display: flex;
            align-items: center;
            align-content:center;
            justify-content: space-evenly;
            padding: 2rem;
            margin-top: 100px;
        }

        input[type = text] {
            width: 100%;
            padding: 10px 15px;
            margin: 5px 0;
            box-sizing: border-box;
        }
    </style>
    <title>I-RIX Registeration</title>
  </head>
  <body style="padding: 1.5rem; background-color:#120D28; color: aliceblue; ">

    <div class="container">
      <div style="padding: 1.5rem; border:whitesmoke; border: size 1px; border: 2px solid red; border-radius: 1.5rem;">
      <table class="table" style="color : white "> 
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Collage</th>
      <th scope="col">Team Leader</th>
      <th scope="col">Team Leader Contact</th>
      <th scope="col">Email</th>
      <th scope="col">Futsal</th>
      <th scope="col">Gaming</th>
    </tr>
  </thead>
  <tbody>
    <?php
      if($result){
        foreach($result as $key => $value){
          $futsal = $value["futsal"] ? "yes" : "no";
          $gaming = $value["gaming"] ? "yes" : "no";
        echo "
        <tr>
        <th scope='".$key."'>".$key."</th>
        <td>".$value["collage_name"]."</td>
        <td>".$value["team_leader_name"]."</td>
        <td>".$value["team_leader_contact"]."</td>
        <td>".$value["email"]."</td>
        <td>".$futsal."</td>
        <td>".$gaming."</td>
      </tr>
        ";
        }
      }
    ?>
    
    <!-- <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr> -->
  </tbody>
</table>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
