<?php
// List all data from the database

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
    <title>Grants Listing</title>
</head>
<body>

<?php
include 'header.php';
?>

<div class="tableau-div">
    <a href="tableau.html" class="tableau">Tableau Data</a>
</div>


<div class="search-box">
    <form action="" method="post">
        <input type="search" id="search-grants" placeholder="Search for Tree Planting Grant Opportunities" class="search-input" autocomplete="off">
    </form>
</div>


    <table>
        <thead>
            <tr>
                <th>Opportunity Title</th>

                <th>Division</th>
                <th>Status</th>
<!--                <th>Requirements</th>-->
<!--                <th>Guidelines</th>-->
<!--                <th>Timeline</th>-->
                <th>Funding Amount</th>
<!--                <th>Flag</th>-->
<!--                <th>Partner</th>-->
<!--                <th>City</th>-->
<!--                <th>State</th>-->
<!--                <th>Notes</th>-->
                <th>Post Date</th>
                <th>Close Date</th>
            </tr>
        </thead>

        <tbody id="grants-list">


<?php
    include 'db.php';

    $query = "SELECT * FROM grant_opportunities";

    $result = mysqli_query($con, $query) or die("Sorry could not get opportunities");

    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['opportunity_id'];
        $title = $row['opportunity_title'];
        $url = $row['opportunity_url'];
        $description = $row['opportunity_description'];
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
            <tr>
                <td><a href='view-listing.php?grant-id=$id' target='_blank'>$title</a></td>
             
                <td>$division</td>
                <td>$status</td>
              
                <td>$funding_amount</td>
            
                <td>$posted_date</td>
                <td>$close_date</td>
            </tr>
        ";



//        echo "
//            <tr>
//                <td><a href='$url'>$title</a></td>
//                <td>$description</td>
//                <td>$division</td>
//                <td>$status</td>
//                <td>$requirements</td>
//                <td>$guidelines</td>
//                <td>$timeline</td>
//                <td>$funding_amount</td>
//                <td>$flag</td>
//                <td>$partner</td>
//                <td>$city</td>
//                <td>$state</td>
//                <td>$notes</td>
//                <td>$posted_date</td>
//                <td>$close_date</td>
//            </tr>
//        ";
    }
?>
        </tbody>
    </table>


<script src="ajax.js"></script>
</body>
</html>

