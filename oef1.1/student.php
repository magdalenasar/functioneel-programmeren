<?php
//associative array maken met de data
$student =	[
    "voornaam" =>  "Jan",
    "naam" =>  "Janssens",
    "straat" =>  "Oude baan",
    "huisnr" =>  "22",
    "postcode" =>  2800,
    "gemeente" =>  "Mechelen",
    "geboortedatum" =>  "14/05/1991",
    "telefoon" =>  "015 24 24 26",
    "e-mail" =>  "jan.janssens@gmail.com"
];

//de array omzetten naar HTML table
// function ucfirst() maakt de labels met een hoofdletter te beginnen
function StudentToTable($student)
{
    echo "<h1>Student</h1>";
    print "<table>";

    foreach ($student as $key => $value)
    {
        print "<tr><td>" . ucfirst($key) . "</td><td>" . $value . "</td></tr>\n";
    }
    print "</table>";
}

StudentToTable($student);



/* output:
<h1>Student</h1>
<table>
<tr><td>Voornaam</td><td>Jan</td></tr>
<tr><td>Naam</td><td>Janssens</td></tr>
<tr><td>Straat</td><td>Oude baan</td></tr>
<tr><td>Huisnr</td><td>22</td></tr>
<tr><td>Postcode</td><td>2800</td></tr>
<tr><td>Gemeente</td><td>Mechelen</td></tr>
<tr><td>Geboortedatum</td><td>14/05/1991</td></tr>
<tr><td>Telefoon</td><td>015 24 24 26</td></tr>
<tr><td>E-mail</td
*/