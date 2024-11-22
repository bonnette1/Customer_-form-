
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank you</title>
    <link href="response.css" rel="stylesheet">

</head>
<body>
    <h1>CUSTOMER FORM RESPONSE</h1>
    <p class="intro">The following table displays responses collected from the customer form.</p>
    <div class="response">
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   $Name=$_POST['name']; 
   $Age=$_POST['age'];
   $Email=$_POST['email'];
   $Address=$_POST['address'];
   $Date=$_POST['date'];
   $tel=$_POST['contact'];
   $Flavour =$_POST['flavour'];
   $rate =$_POST['rate'];
   $Milkshake =$_POST['milkshake'];
   $Milkrate =$_POST['milkrate'];
   $Shortcake =$_POST['shortcake'];
   $cream=$_POST['colorPicker'];
   $Shortrate =$_POST['shortrate'];
   $Recommandate=$_POST['recommendations'];
   $suggestion=$_POST["improve"];
   $comment=$_POST['comments'];



}


?>
<table border="1">
    <tr>
        <th rowspan="2">Name</th>
        <th rowspan="2">Age</th>
        <th rowspan="2">Email</th>
        <th rowspan="2">Telno.</th>
        <th rowspan="2">Address</th>
        <th rowspan="2">Date</th>
        <th colspan="4">Flavour</th>
        <th colspan="3">Rate</th>
        <th rowspan="2">Recommendation</th>
        <th rowspan="2">Improvement</th>
        <th rowspan="2">Comments</th>
    </tr>
    <tr>
        <th>Ice Cream</th>
        <th>Milkshake</th>
        <th>Shortcake</th>
        <th>cream colour</th>
        <th>Ice Cream</th>
        <th>Milkshake</th>
        <th>Shortcake</th>
    </tr>
    <tr>
        <td><?php echo $Name ?></td>
        <td><?php echo $Age ?></td>
        <td><?php echo $Email ?></td>
        <td><?php echo $tel ?></td>
        <td><?php echo $Address ?></td>
        <td><?php echo $Date ?></td>
        <td><?php echo $Flavour ?></td>
        <td><?php echo $Milkshake ?></td>
        <td><?php echo $Shortcake ?></td>
        <td><?php echo $cream ?></td>
        <td><?php echo $rate ?></td>
        <td><?php echo $Milkrate ?></td>
        <td><?php echo $Shortrate ?></td>
        <td><?php echo $Recommandate ?></td>
        <td><?php echo $suggestion ?></td>
        <td><?php echo $comment ?></td>
    </tr>

</table>
</div>
<p class="conc">Thank you for your patience and collaboration</p>
</body>
</html>