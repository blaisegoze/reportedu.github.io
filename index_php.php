<?php
require 'connection.php';

$author = $_POST['author'];
$report_date = $_POST['report_date'];
$report_time = $_POST['report_time'];
$nat_call = $_POST['nat_call'];
$location = $_POST['location'];
$inc_city = $_POST['inc_city'];
$inc_state = $_POST['inc_state'];
$inc_zip = $_POST['inc_zip'];
$from_date = $_POST['from_date'];
$from_time = $_POST['from_time'];
$to_date = $_POST['to_date'];
$to_time = $_POST['to_time']; 

$first_name = $_POST['first_name'];
$middle_name = $_POST['middle_name'];
$last_name = $_POST['last_name'];
$ssn = $_POST['ssn'];
$di_travel = $_POST['di_travel'];
$street_address = $_POST['street_address'];
$phonenum = $_POST['phonenum'];
$pers_city = $_POST['pers_city'];
$pers_state = $_POST['pers_state'];
$pers_zip_code = $_POST['pers_zip_code'];
$date_of_birth = $_POST['date_of_birth'];
$race = $_POST['race'];
$sex = $_POST['sex'];

$involvement = $_POST['involvement'];
$driver = $_POST['driver'];
$year = $_POST['year'];
$veh_state = $_POST['veh_state'];
$veh_year = $_POST['veh_year'];
$make = $_POST['make'];
$model_veh = $_POST['model_veh'];
$style = $_POST['style'];
$color = $_POST['color'];
$vin = $_POST['vin'];

$involvement_prop = $_POST['involvement_prop'];
$article = $_POST['article'];
$brand = $_POST['brand'];
$model_prop = $_POST['model_prop'];
$serial_num = $_POST['serial_num'];
$owner = $_POST['owner'];
$value = $_POST['value'];
$description = $_POST['description'];

$gang_act = isset($_POST['gang_act']) ? 'Yes' : 'No';
$means_of_attack = $_POST['attack'];
$method_of_entry = $_POST['entry'];
$weapon_used = $_POST['weapon'];
$premis_type = $_POST['premis_type'];
$num_victims = $_POST['num_victims'];
$victims_race = $_POST['victims_race'];
$victims_sex = $_POST['victims_sex'];
$victims_age = $_POST['victims_age'];

$summary = $_POST['summary'];
$n_narrative = $_POST['n_narrative'];

$query = "INSERT INTO ticket_info VALUES('', '$author', '$report_date', '$report_time', '$nat_call', '$location', '$inc_city', '$inc_state', '$inc_zip', '$from_date', '$from_time', '$to_date', '$to_time', '$first_name', '$middle_name', '$last_name', '$ssn', '$di_travel', '$street_address', '$phonenum', '$pers_city', '$pers_state', '$pers_zip_code', '$date_of_birth', '$race', '$sex', '$involvement', '$driver', '$year', '$veh_state', '$veh_year', '$make', '$model_veh', '$style', '$color', '$vin', '$involvement_prop', '$article', '$brand', '$model_prop', '$serial_num', '$owner', '$value', '$description', '$gang_act', '$means_of_attack', '$method_of_entry', '$weapon_used', '$premis_type', '$num_victims', '$victims_race', '$victims_sex', '$victims_age', '$summary', '$n_narrative')";
  $stmt = mysqli_stmt_init($mysqli);
  mysqli_query($mysqli, $query);

  
?>