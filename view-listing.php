<?php
// List one listing from the database

// Turn off all error reporting.
error_reporting(0);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>View Grant</title>
</head>
<body>

<?php
include 'header.php';
?>

<?php
    include 'db.php';

    $grant_id = $_GET['grant-id'];

    $query = "SELECT * FROM grant_opportunities where opportunity_id = $grant_id";

    $result = mysqli_query($con, $query) or die("Sorry could not get opportunities");

    $row = mysqli_fetch_assoc($result);
    $id = $row['opportunity_id'];
    $title = $row['opportunity_title'];
    $url = $row['opportunity_url'];
    $description = $row['short_description'];
    $division = $row['division'];
    $status = $row['status'];
    $posted_date = $row['posted_date'];
    $close_date = $row['close_date'];
    $requirements = $row['requirements'];
    $guidelines = $row['guidelines'];
    $timeline = $row['timeline'];
    $funding_amount = $row['funding_amount'];
    $flag = $row['flag'];
    $partner = $row['partner'];
    $city = $row['city'];
    $state = $row['state'];
    $notes = $row['notes'];

    echo "
              <div class='container view-container'>
                <h3 class='heading-three'>$title</h3>
                <p class='view-para'><strong>Short Description:</strong>
                    $description
                </p>
                <p class='view-para'><strong>Requirement:</strong>
                Participants must be private landowners, community organizations, or local government entities in Florida with a minimum of 5 acres of land available for reforestation. Eligible lands must be degraded or underutilized forest areas that can benefit from reforestation. Applicants should demonstrate a commitment to long-term forest management and adhere to the program's guidelines for sustainable practices.
                </p>
                
                <div class='view-details'>
                    <div class='side-1'>
                     <p class='view-para'><strong>Division:</strong>
                $division</p> 
                
                <p class='view-para'><strong>Status:</strong>
                $status</p>
                    </div>
                    <div class='side-2'>
                         <p class='view-para'><strong>Post Date:</strong>
                $posted_date</p> 
                
                <p class='view-para'><strong>Close Date:</strong>
                $close_date
               </p>  
                    
                    </div>
                
                </div>
               
                   
           
               
                <p class='view-para'><strong>Funding Amount:</strong>
                    $$funding_amount
               </p>
               
               <p>
               &nbsp;
                </p>
               
               <button>
                    Apply today
               </button>
                
              
              </div>
            ";


?>

</body>
</html>
