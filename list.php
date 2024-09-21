<?php
// List all data from the database
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Grants Listing</title>
</head>
<body>



    <table>
        <thead>
            <tr>
                <td>Opportunity Title</td>
                <td>Short Description</td>
                <td>Division</td>
                <td>Status</td>
                <td>Requirements</td>
                <td>Guidelines</td>
                <td>Timeline</td>
                <td>Funding Amount</td>
                <td>Flag</td>
                <td>Partner</td>
                <td>City</td>
                <td>State</td>
                <td>Notes</td>
                <td>Post Date</td>
                <td>Close Date</td>
            </tr>
        </thead>

        <tbody>


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
                <td><a href='$url'>$title</a></td>
                <td>$description</td>
                <td>$division</td>
                <td>$status</td>
                <td>$requirements</td>
                <td>$guidelines</td>
                <td>$timeline</td>
                <td>$funding_amount</td>
                <td>$flag</td>
                <td>$partner</td>
                <td>$city</td>
                <td>$state</td>
                <td>$notes</td>
                <td>$posted_date</td>
                <td>$close_date</td>
            </tr>
        ";
    }
?>
        </tbody>
    </table>



</body>
</html>

