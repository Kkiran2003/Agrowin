 <?php

// Database connection

$host = "localhost";
$user = "root";        // your DB username
$pass = "";            // your DB password
$db = "agrowin";          // your DB name

// Create connection
$conn =mysqli_connect($host, $user, $pass, $db);

// Check connection
if (!$conn) {
    die("Connection failed: ");
}
else{
    echo '✅ ';
}

// Validate POST data
if($_SERVER['REQUEST_METHOD'] =='POST'){
    // Collect data from POST
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone_no = $_POST['phone_no'];
    $Dist = $_POST['district'];
}
    // Insert into the database (only 4 fields)
    $stmt ="INSERT INTO `login`(`srn`, `first_name`, `last_name`, `phone_no`, `district`) VALUES ('','$first_name','$last_name ','$phone_no','$Dist')";
    $result = mysqli_query($conn,$stmt);
  


    // Execute and give feedback
    if ($result) {
         echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                          <strong> Success! </strong> ✅ तुमची माहिती यशस्वीरित्या नोंदवली गेली आहे!
                            </div>';
    }
     else {
       echo '<div class="alert alert-Danger alert-dismissible fade show" role="alert">
                                  <strong> error! </strong> we are facing some technical problem issue sorry for inconvinience
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true"> &times;</span>
                                  </button>
                                  </div>'; 
 }
              
 ?>