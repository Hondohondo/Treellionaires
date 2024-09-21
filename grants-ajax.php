<?php

if(isset($_GET['q'])) {
    $search = $_GET['q'];

    include 'db.php';

    $query = "SELECT * FROM grant_opportunities WHERE opportunity_title LIKE '%{$search}%'";

    $result = mysqli_query($con, $query);

    $grants = [];

    while($row = mysqli_fetch_assoc($result)) {
        /*in this case I dont want to return json, but table*/
      /*  $grants[] = [
          'id' => $row['opportunity_id'],
          'title' => $row['opportunity_title'],
          'url' => $row['opportunity_url'],
          'description' => $row['opportunity_description'],
          'division' => $row['division'],
        ];*/
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
             
                <td>$division</td>
                <td>$status</td>
              
                <td>$funding_amount</td>
            
                <td>$posted_date</td>
                <td>$close_date</td>
            </tr>
        ";
    }
//    echo "$grants";
  /*  header('Content-type: application/json');
    echo json_encode($grants);

    exit;*/
}
