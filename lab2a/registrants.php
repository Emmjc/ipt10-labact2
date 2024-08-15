<?php
// Open the CSV file
$file = fopen('registrations.csv', 'r');

// Initialize an array to hold the CSV data
$registrants = [];

// Loop through each line in the CSV
while (($data = fgetcsv($file)) !== FALSE) {
    $registrants[$data[0]] = $data[1];
}

// Close the CSV file
fclose($file);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrants</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
            font-family: Arial, Helvetica, sans-serif;
        }
        th {
            background-color: #f2f2f2;
            font-family: Arial, Helvetica, sans-serif;
        }
        h1 {
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body>
    <h1> Registrants </h1>
    <table>
        <thead>
            <tr>
                <th>Complete Name</th>
                <th>Birthday</th>
                <th>Age</th>
                <th>Contact Number</th>
                <th>Sex</th>
                <th>Program</th>
                <th>Complete Address</th>
                <th>Email Address</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $registrants['fullname'] ?></td>
                <td><?= $registrants['birthdate'] ?></td>
                <td><?= $registrants['age'] ?></td>
                <td><?= $registrants['contact_number'] ?></td>
                <td><?= $registrants['sex'] ?></td>
                <td><?= $registrants['program'] ?></td>
                <td><?= $registrants['address'] ?></td>
                <td><?= $registrants['email'] ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>
