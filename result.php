<?php
// Capture the data from the URL
$name = htmlspecialchars($_GET['name']);
$usn = htmlspecialchars($_GET['usn']);
$email = htmlspecialchars($_GET['email']);
$dob = htmlspecialchars($_GET['dob']);
$phone = htmlspecialchars($_GET['phone']);
$qualification = htmlspecialchars($_GET['qualification']);
$suggestion = htmlspecialchars($_GET['suggestion']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Details</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="result-container">
        <h3>Your Application Details</h3>
        <table>
            <tr>
                <th>Full Name</th>
                <td><?php echo $name; ?></td>
            </tr>
            <tr>
                <th>USN</th>
                <td><?php echo $usn; ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?php echo $email; ?></td>
            </tr>
            <tr>
                <th>Date of Birth</th>
                <td><?php echo $dob; ?></td>
            </tr>
            <tr>
                <th>Phone</th>
                <td><?php echo $phone; ?></td>
            </tr>
            <tr>
                <th>Qualification</th>
                <td><?php echo $qualification; ?></td>
            </tr>
            <tr>
                <th>Suggestion</th>
                <td><?php echo $suggestion; ?></td>
            </tr>
        </table>
    </div>
</body>
</html>