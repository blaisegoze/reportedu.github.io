<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/css/index.css">
  <title>Report.edu</title>
</head>

<body>
  <!-- Navigation Bar -->
  <nav>
    <div class="nav_content">
      <a class="logo" href="/#home">
        <svg id="Layer_2" data-name="Layer 2" viewBox="0 0 265.21 282.26">
          <g id="Layer_1-2" data-name="Layer 1">
            <path class="cls-1" d="M247.02,272.51c0,3.56-3.07,6.45-6.85,6.45s-6.85-2.89-6.85-6.45,3.06-6.46,6.85-6.46,6.85,2.89,6.85,6.46Z"/>
            <path class="cls-1" d="M265.21,0V15.41l-2.33,.07c-12.49,.36-20.73,2.26-24.49,5.64-2.51,2.28-5.51,8.05-5.51,22.69V198.75c0,26.89-8.72,47.8-25.93,62.09-17.1,14.21-42.1,21.42-74.32,21.42s-58.36-6.79-76.63-20.17c-18.49-13.57-27.86-32.77-27.86-57.08V15.85H0V0H158.64V15.85h-30.53V202.17c0,17.98,3.13,31.28,9.31,39.53,6.1,8.16,15.41,12.13,28.45,12.13,15.77,0,28.1-4.78,36.65-14.21,8.64-9.5,13.01-23.26,13.01-40.87V43.81c0-14.5-2.95-20.35-5.43-22.74-3.66-3.47-11.73-5.35-23.97-5.59l-2.3-.05-.3-15.43h81.68Z"/>
          </g>
        </svg>
      </a>
      <ul class="nav_links">
        <li><a href="/#incident">Incident</a></li>
        <li><a href="/#person">Person</a></li>
        <li><a href="/#vehicle">Vehicle</a></li>
        <li><a href="/#property">Property</a></li>
        <li><a href="/#modus_operandi">Modus Operandi</a></li>
        <li><a href="/#narrative">Narrative</a></li>
        <li><a href="/sign_in/sign_in_student.php">Sign In</a></li>
      </ul>
      <div class="menu_burger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
      </div>
    </div>
  </nav>


  <!-- Home -->
  <div id="home" class="hero">
    <div class="hero_image rellax" data-rellax-speed="10">
    </div>
    <div class="hero_text">
      <h1 class="hero_title rellax" data-rellax-speed="2">Report.edu</h1>
      <p class="hero_sub_title rellax" data-rellax-speed="2">College of the Ozarks</p>
    </div>
  </div>


  <!-- Form Start -->
  <form>

  
    <!-- Incident -->
    <div id="incident">
      <div class="incident_img"></div>
      <div class="incident_text">
        <h1 class="incident_title">Incident</h1>
        <p class="incident_sub_title">...</p>
        
        <div class="form_chunk">
            <div class="form_block">
              <label for="message">REPORT NUM(FIX LATER)</label>
              <input type="text" id="report_num" name="report_num" placeholder="REPORT NUM(FIX LATER)" required>
            </div>
            <div class="form_block">
              <label for="message">Author</label>
              <input type="text" id="author" name="author" placeholder="Author" required>
            </div>
            <div class="form_block">
              <label for="message">Report Date</label>
              <input type="text" id="report_date" name="report_date" placeholder="Report Date" required>
            </div>
            <div class="form_block">
              <label for="message">Report Time</label>
              <input type="text" id="report_time" name="report_time" placeholder="Report Time" required>
            </div>
            <div class="form_block">
              <label for="message">Nature of Call</label>
              <input type="text" id="nat_call" name="nat_call" placeholder="Nature of Call" required>
            </div>
            <div class="form_block">
              <label for="message">Location</label>
              <input type="text" id="location" name="location" placeholder="Location" required>
            </div>
            <div class="form_block">
              <label for="message">City</label>
              <input type="text" id="inc_city" name="inc_city" placeholder="City" required>
            </div>
            <div class="form_block">
              <label for="message">State</label>
              <input type="text" id="inc_state" name="inc_state" placeholder="State" required>
            </div>
            <div class="form_block">
              <label for="message">Zip Code</label>
              <input type="text" id="inc_zip" name="inc_zip" placeholder="Zip Code" required>
            </div>
            <div class="form_block">
              <label for="message">From Date</label>
              <input type="text" id="from_date" name="from_date" placeholder="From Date" required>
            </div>
            <div class="form_block">
              <label for="message">From Time</label>
              <input type="text" id="from_time" name="from_time" placeholder="From Time" required>
            </div>
            <div class="form_block">
              <label for="message">To Date</label>
              <input type="text" id="to_date" name="to_date" placeholder="To Date" required>
            </div>
            <div class="form_block">
              <label for="message">To Time</label>
              <input type="text" id="to_time" name="to_time" placeholder="To Time" required>
            </div>
        </div>

      </div>
    </div>


    <!-- Person -->
    <div id="person">
      <div class="person_img"></div>
      <div class="person_text">
        <h1 class="person_title">Person</h1>
        <p class="person_sub_title">...</p>

        <div class="form_chunk">
          <div class="form_block_subs">
            <label for="message">Name</label>
            <div class="form_block_sub">
              <input type="text" id="first_name" name="first_name" placeholder="First" required>
              <input type="text" id="middle_name" name="middle_name" placeholder="Middle" required>
              <input type="text" id="last_name" name="last_name" placeholder="Last" required>
            </div>
          </div>
          <div class="form_block">
            <label for="message">SSN</label>
            <input type="number" onkeydown="return event.keyCode !== 69" id="ssn" name="ssn" placeholder="SSN" required>
          </div>
          <div class="form_block">
            <label for="message">DI of Travel</label>
            <input type="text" id="di_travel" name="di_travel" placeholder="DI of Travel" required>
          </div>
          <div class="form_block">
            <label for="message">Street Address</label>
            <input type="text" id="street_address" name="street_address" placeholder="Street Address" required>
          </div>
          <div class="form_block">
            <label for="message">Phone#</label>
            <input type="text" id="phonenum" name="phonenum" placeholder="Phone#" required>
          </div>
          <div class="form_block">
            <label for="message">City</label>
            <input type="text" id="pers_city" name="pers_city" placeholder="City" required>
          </div>
          <div class="form_block">
            <label for="message">State</label>
            <input type="text" id="pers_state" name="pers_state" placeholder="State" required>
          </div>
          <div class="form_block">
            <label for="message">Zip Code</label>
            <input type="number" id="pers_zip_code" name="pers_zip_code" placeholder="Zip Code" required>
          </div>
          <div class="form_block">
            <label for="message">Date of Birth</label>
            <input type="text" id="date_of_birth" name="date_of_birth" placeholder="Date of Birth" required>
          </div>
          <div class="form_block">
            <label for="message">Race</label>
            <input type="text" id="race" name="race" placeholder="Race" required>
          </div>
          <div class="form_block">
            <label for="message">Sex</label>
            <select type="text" id="sex" name="sex" required>
              <option disabled selected value>Select</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
              <option value="other">Other</option>
            </select>
          </div>
          <div class="form_block">
            <label for="message">Height</label>
            <input type="text" id="height" name="height" placeholder="Height" required>
          </div>
          <div class="form_block">
            <label for="message">Weight</label>
            <input type="text" id="weight" name="weight" placeholder="Weight" required>
          </div>
          <div class="form_block">
            <label for="message">Hair</label>
            <input type="text" id="hair" name="hair" placeholder="Hair" required>
          </div>
          <div class="form_block">
            <label for="message">Eyes</label>
            <input type="text" id="eyes" name="eyes" placeholder="Eyes" required>
          </div>
        </div>

      </div>
    </div>


    <!-- Vehicle -->
    <div id="vehicle">
      <div class="vehicle_img"></div>
        <div class="vehicle_text">
            <h1 class="vehicle_title">Vehicle</h1>
            <p class="vehicle_sub_title">...</p>

            <div class="form_chunk">
              <div class="form_block">
                <label for="message">Involvement</label>
                <input type="text" id="involvement" name="involvement" placeholder="Involvement" required>
              </div>
              <div class="form_block">
                <label for="message">Driver's LIC. NO.</label>
                <input type="text" id="driver" name="driver" placeholder="LIC. NO." required>
              </div>
              <div class="form_block">
                <label for="message">LIC. Year</label>
                <input type="text" id="year" name="year" placeholder="LIC. Year" required>
              </div>
              <div class="form_block">
                <label for="message">State</label>
                <input type="text" id="veh_state" name="veh_state" placeholder="State" required>
              </div>
              <div class="form_block">
                <label for="message">Vehicle Year</label>
                <input type="text" id="veh_year" name="veh_year" placeholder="Vehicle Year" required>
              </div>
              <div class="form_block">
                <label for="message">Make</label>
                <input type="text" id="make" name="make" placeholder="Make" required>
              </div>
              <div class="form_block">
                <label for="message">Model</label>
                <input type="text" id="model_veh" name="model_veh" placeholder="Model" required>
              </div>
              <div class="form_block">
                <label for="message">Style</label>
                <input type="text" id="style" name="style" placeholder="Style" required>
              </div>
              <div class="form_block">
                <label for="message">Color</label>
                <input type="text" id="color" name="color" placeholder="Color" required>
              </div>
              <div class="form_block">
                <label for="message">VIN</label>
                <input type="text" id="vin" name="vin" placeholder="VIN" required>
              </div>
            </div>

      </div>
    </div>


    <!-- Property -->
    <div id="property">
      <div class="property_img"></div>
        <div class="property_text">
            <h1 class="property_title">Property</h1>
            <p class="property_sub_title">...</p>

            <div class="form_chunk">
              <div class="form_block">
                <label for="message">Involvement</label>
                <input type="text" id="involvement_prop" name="involvement_prop" placeholder="Involvement" required>
              </div>
              <div class="form_block">
                <label for="message">Article</label>
                <input type="text" id="article" name="article" placeholder="Article" required>
              </div>
              <div class="form_block">
                <label for="message">Brand</label>
                <input type="text" id="brand" name="brand" placeholder="Brand" required>
              </div>
              <div class="form_block">
                <label for="message">Model</label>
                <input type="text" id="model_prop" name="model_prop" placeholder="Model" required>
              </div>
              <div class="form_block">
                <label for="message">Serial Num</label>
                <input type="text" id="serial_num" name="serial_num" placeholder="Serial Num" required>
              </div>
              <div class="form_block">
                <label for="message">Owner</label>
                <input type="text" id="owner" name="owner" placeholder="Owner" required>
              </div>
              <div class="form_block">
                <label for="message">Value</label>
                <input type="text" id="value" name="value" placeholder="Value" required>
              </div>
              <div class="form_block">
                <label for="message">Description</label>
                <textarea type="text" id="description" name="description" placeholder="Description" required></textarea>
              </div>
            </div>

        </div>
    </div>


    <!-- Modus Operandi -->
    <div id="modus_operandi">
      <div class="modus_operandi_img"></div>
      <div class="modus_operandi_text">
        <h1 class="modus_operandi_title">Modus Operandi</h1>
        <p class="modus_operandi_sub_title">...</p>


            <div class="form_chunk">
              <div class="form_block">
                <div class="checkbox_div">
                  <input type="checkbox" id="gang_act" name="gang_act" value="gang_act">
                  <label for="gang_act">Gang Act</label>
                </div>
              </div>
              <div class="form_block">
                <label for="message">Means of Attack</label>
                <input type="text" id="attack" name="attack" placeholder="Means of Attack" required>
              </div>
              <div class="form_block">
                <label for="message">Method of Entry</label>
                <input type="text" id="entry" name="entry" placeholder="Method of Entry" required>
              </div>
              <div class="form_block">
                <label for="message">Weapon Used</label>
                <input type="text" id="weapon" name="weapon" placeholder="Weapon Used" required>
              </div>
              <div class="form_block">
                <label for="message">Premis Type</label>
                <input type="text" id="premis_type" name="premis_type" placeholder="Premis Type" required>
              </div>
              <div class="form_block">
                <label for="message">Number of Victims</label>
                <input type="text" id="num_victims" name="num_victims" placeholder="Number of Victims" required>
              </div>
              <div class="form_block">
                <label for="message">Victims Race</label>
                <input type="text" id="victims_race" name="victims_race" placeholder="Victims Race" required>
              </div>
              <div class="form_block">
                <label for="message">Victims Sex</label>
                <input type="text" id="victims_sex" name="victims_sex" placeholder="Victims Sex" required>
              </div>
              <div class="form_block">
                <label for="message">Victims Age</label>
                <input type="text" id="victims_age" name="victims_age" placeholder="Victims Age" required>
              </div>
            </div>


      </div>
    </div>


    <!-- Narrative -->
    <div id="narrative">
      <div class="narrative_img"></div>
      <div class="narrative_text">
        <h1 class="narrative_title">Narrative</h1>
        <p class="narrative_sub_title">...</p>

        <div class="form_chunk">
          <div class="form_block">
            <label for="message">Summary</label>
            <input type="text" id="summary" name="summary" placeholder="Summary" required>
          </div>
          <div class="form_block">
            <label for="message">Narrative</label>
            <input type="text" id="n_narrative" name="n_narrative" placeholder="Narrative" required>
          </div>
          <button class="btn_submit" type="submit" value="Submit">Submit</button>
        </div>
        
      </div>
    </div>


  <!-- Form End -->
  </form>


  <!-- Footer -->
  <footer>
    <div class="footer_content">
      <div class="footer_text">© 2023,  College of the Ozarks ®</div>
      <ul class="footer_links">
        <li><a href="https://www.artstation.com/blaisegoze" target="_blank">
          <svg viewBox="0 0 24.9 21.96"><g id="a"/><g id="b"><g id="c"><g id="d"><g><path class="e" d="M0,16.93c5.08,0,10.15,0,15.23,0,.1,0,.25,.07,.3,.15,.91,1.55,1.81,3.12,2.71,4.68,.03,.06,.04,.13,.06,.2H4.11s-.06-.03-.1-.04c-.85-.13-1.47-.59-1.89-1.33-.65-1.14-1.31-2.27-1.97-3.4-.04-.07-.1-.14-.16-.21v-.05Z"/><path class="e" d="M9.79,0C10.77,0,11.7,0,12.63,0c.61,0,1.23-.02,1.84,.04,.79,.08,1.41,.5,1.81,1.19,.97,1.67,1.92,3.34,2.88,5.01,1.79,3.13,3.58,6.27,5.38,9.4,.49,.84,.49,1.69,.03,2.52-.68,1.22-1.39,2.42-2.09,3.63-.02,.03-.04,.06-.08,.11L9.79,0Z"/><path class="e" d="M2.06,13.34L7.72,3.56l5.65,9.78H2.06Z"/></g></g></g></g></svg>
        </a></li>
        <li><a href="https://www.instagram.com/blaisegoze" target="_blank">
          <svg viewBox="0 0 21.78 21.81"><g id="a"/><g id="b"><g id="c"><g id="d"><g><path class="e" d="M9.35,0c1.5,0,3.01,0,4.51,0,.19,.02,.38,.03,.57,.05,.79,.07,1.59,.06,2.36,.21,2.36,.46,3.91,1.85,4.59,4.17,.28,.95,.3,1.92,.33,2.89,.05,1.68,.09,3.36,.07,5.04-.02,1.43-.02,2.87-.21,4.28-.38,2.76-2.36,4.63-5.21,4.95-1.46,.17-2.95,.19-4.43,.2-1.88,.02-3.75-.02-5.63-.06-1.06-.02-2.09-.23-3.04-.73-1.12-.59-1.96-1.46-2.51-2.61C.19,17.23,.07,15.97,.04,14.73-.03,12.14,.01,9.56,.02,6.97c0-.88,.08-1.77,.35-2.61C1.16,1.94,2.86,.58,5.35,.26c1.22-.16,2.47-.13,3.7-.2,.1,0,.2-.04,.3-.07Zm1,19.86c1.39-.04,2.83-.07,4.26-.13,.64-.03,1.28-.06,1.9-.17,1.49-.28,2.53-1.12,2.94-2.6,.18-.67,.28-1.37,.29-2.07,.03-2.04,0-4.07-.03-6.11-.01-1.04-.03-2.09-.14-3.13-.21-1.94-1.42-3.19-3.35-3.45-.94-.13-1.9-.16-2.85-.16-2.04,0-4.07,.03-6.11,.07-.64,.01-1.28,.07-1.91,.16-1.65,.24-2.85,1.35-3.13,2.99-.16,.93-.23,1.89-.23,2.83,0,2.62,.04,5.23,.1,7.85,.02,.75,.29,1.45,.72,2.07,.77,1.11,1.86,1.65,3.18,1.71,1.43,.07,2.86,.09,4.34,.14Z"/><path class="e" d="M10.86,16.53c-3.15,0-5.44-2.57-5.58-5.26-.19-3.46,2.64-6.02,5.71-5.97,3.03,.05,5.56,2.63,5.52,5.67-.04,3.08-2.59,5.58-5.65,5.55Zm3.62-5.6c.06-1.83-1.46-3.6-3.56-3.61-2-.01-3.64,1.61-3.64,3.58,0,1.98,1.6,3.58,3.53,3.63,2.08,.05,3.75-1.74,3.67-3.59Z"/><path class="e" d="M15.32,5.12c0-.73,.57-1.32,1.29-1.34,.74-.02,1.33,.57,1.34,1.32,0,.74-.57,1.36-1.32,1.34-.79-.02-1.32-.64-1.32-1.32Z"/></g></g></g></g></svg>
        </a></li>
        <li><a href="https://www.youtube.com/@blaisegoze" target="_blank">
          <svg viewBox="0 0 30.56 21.42"><g id="a"/><g id="b"><g id="c"><g id="d"><path class="e" d="M14.89,0c2.71,.08,5.42,.13,8.13,.24,1.25,.05,2.5,.17,3.74,.36,1.81,.28,2.95,1.46,3.3,3.26,.27,1.36,.39,2.74,.44,4.12,.05,1.43,.06,2.87,.04,4.3-.03,1.63-.13,3.25-.4,4.86-.12,.74-.28,1.47-.72,2.1-.67,.96-1.59,1.52-2.74,1.65-1.31,.15-2.63,.27-3.95,.34-3.45,.19-6.9,.21-10.35,.15-1.79-.03-3.59-.1-5.38-.2-1.06-.06-2.13-.16-3.18-.33-1.76-.27-2.93-1.44-3.28-3.19-.24-1.18-.35-2.37-.42-3.56C.01,12.43-.04,10.76,.03,9.09c.07-1.77,.15-3.54,.5-5.28C.86,2.19,1.8,1.09,3.41,.67c.73-.19,1.5-.25,2.26-.31,3.07-.25,6.15-.29,9.23-.36Zm5.32,10.73l-7.96-4.58V15.31l7.96-4.58Z"/></g></g></g></svg>
        </a></li>
      </ul>
    </div>
  </footer>
  
  <script src="js/main.js"></script>
  <script src="js/index.js"></script>

  <script src="https://cdn.jsdelivr.net/gh/dixonandmoe/rellax@master/rellax.min.js"></script>
  
  <script>
    var rellax = new Rellax('.rellax');
  </script>

</body>

</html>

<?php
require 'connection.php';


if(isset($_POST["submit"])){
  

$report_num = $_POST['report_num'];
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

$query = mysqli_query($mysqli,"INSERT INTO ticket_info VALUES('$report_num', '$author', '$report_date', '$report_time', '$nat_call', '$location', '$inc_city', '$inc_state', '$inc_zip', '$from_date', '$from_time', '$to_date', '$to_time', '$first_name', '$middle_name', '$last_name', '$ssn', '$di_travel', '$street_address', '$phonenum', '$pers_city', '$pers_state', '$pers_zip_code', '$date_of_birth', '$race', '$sex', '$involvement', '$driver', '$year', '$veh_state', '$veh_year', '$make', '$model_veh', '$style', '$color', '$vin', '$involvement_prop', '$article', '$brand', '$model_prop', '$serial_num', '$owner', '$value', '$description', '$gang_act', '$means_of_attack', '$method_of_entry', '$weapon_used', '$premis_type', '$num_victims', '$victims_race', '$victims_sex', '$victims_age', '$summary', '$n_narrative')");
  if ($query){
    echo "<h2>Successful!</h2>";
  }
  else {
    echo "<h2>Not Successful</h2>";}
  }
?>