<?php
$servername = "127.0.0.1:52974";
$username = "azure";
$password = "6#vWHD_$";
$dbname = "tourpackage";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO Package (tourname, country, startdate, enddate, price, max_member, details)
VALUES ('Fall in love at Paris', 'France', '2022-01-01' ,'2022-01-15' ,'80000' ,'30' ,'Eiffel Tower, Louvre Museum, Palace of Versailles
');";

$sql .= "INSERT INTO Package (tourname, country, startdate, enddate, price, max_member, details)
VALUES ('Arigatoooooo', 'Japan', '2022-04-01' ,'2022-04-10' ,'40000' ,'30' ,'Mount Fuji, Osaka Castle, Onsen');";

$sql .= "INSERT INTO Package (tourname, country, startdate, enddate, price, max_member, details)
VALUES ('Annyeonghaseyo Oppa', 'Korea', '2022-10-14', '2022-10-20', '25000', '30','N Seoul Tower, Myeongdong, Lotte World');";

$sql .= "INSERT INTO Package (tourname, country, startdate, enddate, price, max_member, details)
VALUES ('I Rome You', 'Italy', '2022-04-11', '2022-04-20', '85000', '25', 'Colosseum, Grand Canal in Venice, Leaning Tower');";

$sql .= "INSERT INTO Package (tourname, country, startdate, enddate, price, max_member, details)
VALUES ('Catching Aurora', 'Finland', '2022-08-22', '2022-09-10', '90000', '15','Lake Saimaa, Olavinlinna Castle, Northern Lights');";

$sql .= "INSERT INTO Package (tourname, country, startdate, enddate, price, max_member, details)
VALUES ('Finding Bubble Tea', 'Taiwan', '2022-10-11', '2022-10-18', '15000', '45','Kenting National Park, Shilin Night Market, Longshan Temple');";

$sql .= "INSERT INTO Package (tourname, country, startdate, enddate, price, max_member, details)
VALUES ('How to be a NewYorker', 'USA', '2022-07-20', '2022-08-01', '90000', '25','Statue of Libert, Empire State Building, Central Park');";

$sql .= "INSERT INTO Package (tourname, country, startdate, enddate, price, max_member, details)
VALUES ('Hungry at Hungary', 'Hungary', '2022-12-25', '2023-01-03', '70000', '30','Fisherman s Bastion, Margaret Island, Buda Castle')";

if ($conn->multi_query($sql) === TRUE) {
  echo "New records created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>