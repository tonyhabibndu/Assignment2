<?php
// Change the order in the header in order to swap the columns
$headers = [
    ["key" => "lastName", "label" => "Last Name"],
    ["key" => "firstName", "label" => "First Name"],
    ["key" => "email", "label" => "Email"],
    ["key" => "age", "label" => "Age"]
];
# loop over the headers, then grab they key, and access the key in the body loop variable
#first iteraton => row = [] => loop over the headers as header => header["key"] = firstName, lastName, email, age
$body = [
    [
        "firstName" => ["value" => "Tony", "color" => "red"],
        "lastName" => ["value" => "Habib", "color" => "magenta"],
        "email" => ["value" => "thabib@ndu.edu.lb", "color" => "blue"],
        "age" => ["value" => "28", "color" => "green"],
    ],
    [
        "firstName" => ["value" => "Elias", "color" => "magenta"],
        "lastName" => ["value" => "Damoury", "color" => "blue"],
        "email" => ["value" => "edamoury@ndu.edu.lb", "color" => "green"],
        "age" => ["value" => "21", "color" => "red"],
    ],
    [
        "firstName" => ["value" => "Bassel", "color" => "blue"],
        "lastName" => ["value" => "Succar", "color" => "green"],
        "email" => ["value" => "bsuccar@ndu.edu.lb", "color" => "magenta"],
        "age" => ["value" => "20", "color" => "red"],
    ],
    [
        "firstName" => ["value" => "Marilyne", "color" => "green"],
        "lastName" => ["value" => "Nakad", "color" => "magenta"],
        "email" => ["value" => "mnakad@ndu.edu.lb", "color" => "red"],
        "age" => ["value" => "19", "color" => "blue"],
    ],
    [
        "firstName" => ["value" => "Paul", "color" => "magenta"],
        "lastName" => ["value" => "Araj", "color" => "green"],
        "email" => ["value" => "paraj@ndu.edu.lb", "color" => "blue"],
        "age" => ["value" => "55", "color" => "red"],
    ]
];

function print_headers($headers)
{
    print "<tr>";
    foreach ($headers as $header) {
        print "<th>{$header['label']}</th>";
    }
    print "</tr>";
}

function print_table($headers, $body)
{
    print_headers($headers);

    foreach ($body as $row) {
        print "<tr>";
        foreach ($headers as $header) {
            print "<td style='color: {$row[$header["key"]]["color"]}'>{$row[$header["key"]]["value"]}</td>";

        }
        print "</tr>";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Assignment 2</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
<table>
    <?php print_table($headers, $body) ?>
</table>

</body>
</html>


