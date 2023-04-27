<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/css/index.css">
  <link rel="icon" href="/icon/hard_work_u.svg">
  <title>Report.edu | Create</title>
</head>

<body>
  <!-- Navigation Bar -->
  <nav class="nav_background">
    <div class="nav_content">
      <a class="logo" href="/home_student.php">
        <svg id="Layer_2" data-name="Layer 2" viewBox="0 0 265.21 282.26">
          <g id="Layer_1-2" data-name="Layer 1">
            <path class="cls-1" d="M247.02,272.51c0,3.56-3.07,6.45-6.85,6.45s-6.85-2.89-6.85-6.45,3.06-6.46,6.85-6.46,6.85,2.89,6.85,6.46Z"/>
            <path class="cls-1" d="M265.21,0V15.41l-2.33,.07c-12.49,.36-20.73,2.26-24.49,5.64-2.51,2.28-5.51,8.05-5.51,22.69V198.75c0,26.89-8.72,47.8-25.93,62.09-17.1,14.21-42.1,21.42-74.32,21.42s-58.36-6.79-76.63-20.17c-18.49-13.57-27.86-32.77-27.86-57.08V15.85H0V0H158.64V15.85h-30.53V202.17c0,17.98,3.13,31.28,9.31,39.53,6.1,8.16,15.41,12.13,28.45,12.13,15.77,0,28.1-4.78,36.65-14.21,8.64-9.5,13.01-23.26,13.01-40.87V43.81c0-14.5-2.95-20.35-5.43-22.74-3.66-3.47-11.73-5.35-23.97-5.59l-2.3-.05-.3-15.43h81.68Z"/>
          </g>
        </svg>
      </a>
      <ul class="nav_links">
        <li><a href="/home_student.php">Reports</a></li>
        <li><a href="/index.php">Create</a></li>
        <li><a href="/sign_in/sign_in_student.php">Sign Out</a></li>
      </ul>
      <div class="menu_burger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
      </div>
    </div>
  </nav>
  <nav class="form_nav_background">
    <div class="form_nav_content">
      <ul class="form_nav_links">
        <li><a href="/#incident">Incident</a></li>
        <li><a href="/#person">Person</a></li>
        <li><a href="/#vehicle">Vehicle</a></li>
        <li><a href="/#property">Property</a></li>
        <li><a href="/#modus_operandi">Modus Operandi</a></li>
        <li><a href="/#narrative">Narrative</a></li>
      </ul>
    </div>
  </nav>





  <!-- Form Start -->
  <form action="index_php.php" method="post">

  
    <!-- Incident -->
    <div id="incident">
      <div class="incident_img"></div>
      <div class="incident_text">
        <h1 class="incident_title">Incident</h1>
        <p class="incident_sub_title">...</p>
        
        <div class="form_chunk">
            
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
