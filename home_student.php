<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/css/home_student.css">
  <link rel="icon" href="/icon/hard_work_u.svg">
  <title>Report.edu | Student</title>
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
        <li><a href="/#report">Reports</a></li>
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

  <?php require 'connection.php';
        $table = mysqli_query($mysqli, "SELECT * From ticket_info");
        $row=mysqli_fetch_assoc($table) ?>

    <!-- Report -->
    <div id="report">
      <div class="report_img"></div>
      <div class="report_text">
        <h1 class="report_num">Report #: <span class="report_input">000<?php echo $row['report_num']; ?></span></h1>
        <h1 class="report_title">Incident</h1>
        <div class="form_chunk">
            
            <div class="form_block">
              <label for="message">Author: <span class="report_input"><?php echo $row['author']; ?></span></label>
              
            </div>
            <div class="form_block">
              <label for="message">Report Date: <span class="report_input"><?php echo $row['report_date']; ?></span></label>
             
            </div>
            <div class="form_block">
              <label for="message">Report Time: <span class="report_input"><?php echo $row['report_time']; ?></span></label>
            
            </div>
            <div class="form_block">
              <label for="message">Nature of Call: <span class="report_input"><?php echo $row['nat_call']; ?></span></label>
           
            </div>
            <div class="form_block">
              <label for="message">Location: <span class="report_input"><?php echo $row['location']; ?></span></label>
           
            </div>
            <div class="form_block">
              <label for="message">City: <span class="report_input"><?php echo $row['inc_city']; ?></span></label>
           
            </div>
            <div class="form_block">
              <label for="message">State: <span class="report_input"><?php echo $row['inc_state']; ?></span></label>
          
            </div>
            <div class="form_block">
              <label for="message">Zip Code: <span class="report_input"><?php echo $row['inc_zip']; ?></span></label>
            
            </div>
            <div class="form_block">
              <label for="message">From Date: <span class="report_input"><?php echo $row['from_date']; ?></span></label>
           
            </div>
            <div class="form_block">
              <label for="message">From Time: <span class="report_input"><?php echo $row['from_time']; ?></span></label>
           
            </div>
            <div class="form_block">
              <label for="message">To Date: <span class="report_input"><?php echo $row['to_date']; ?></span></label>
           
            </div>
            <div class="form_block">
              <label for="message">To Time: <span class="report_input"><?php echo $row['to_time']; ?></span></label>
            
            </div>
        </div>
        
        <h1 class="nperso_title">Person</h1>
        <div class="form_chunk">
          <div class="form_block_subs">

            <label for="message">Name: <span class="report_input"><?php echo $row['first_name']; ?><?php echo $row['middle_name']; ?><?php echo $row['last_name']; ?></span></label>
            
            
            
          </div>
          <div class="form_block">
            <label for="message">SSN: <span class="report_input"><?php echo $row['ssn']; ?></span></label>
            
          </div>
          <div class="form_block">
            <label for="message">DI of Travel: <span class="report_input"><?php echo $row['di_travel']; ?></span></label>
           
          </div>
          <div class="form_block">
            <label for="message">Street Address: <span class="report_input"><?php echo $row['street_address']; ?></span></label>
           
          </div>
          <div class="form_block">
            <label for="message">Phone#: <span class="report_input"><?php echo $row['phonenum']; ?></span></label>
           
          </div>
          <div class="form_block">
            <label for="message">City: <span class="report_input"><?php echo $row['pers_city']; ?></span></label>
           
          </div>
          <div class="form_block">
            <label for="message">State: <span class="report_input"><?php echo $row['pers_state']; ?></span></label>
          
          </div>
          <div class="form_block">
            <label for="message">Zip Code: <span class="report_input"><?php echo $row['pers_zip_code']; ?></span></label>
            
          </div>
          <div class="form_block">
            <label for="message">Date of Birth: <span class="report_input"><?php echo $row['date_of_birth']; ?></span></label>
            
          </div>
          <div class="form_block">
            <label for="message">Race: <span class="report_input"><?php echo $row['race']; ?></span></label>
           
          </div>
          <div class="form_block">
            <label for="message">Sex: <span class="report_input"><?php echo $row['sex']; ?></span></label>
            
        </div>

        <h1 class="vehicle_title">Vehicle</h1>
        <div class="form_chunk">
          <div class="form_block">
            <label for="message">Involvement:<span class="report_input"><?php echo $row['involvement']; ?></span></label>
           
          </div>
          <div class="form_block">
            <label for="message">Driver's LIC. NO.: <span class="report_input"><?php echo $row['driver']; ?></span></label>
           
          </div>
          <div class="form_block">
            <label for="message">LIC. Year: <span class="report_input"><?php echo $row['year']; ?></span></label>
           
          </div>
          <div class="form_block">
            <label for="message">State: <span class="report_input"><?php echo $row['veh_state']; ?></span></label>
           
          </div>
          <div class="form_block">
            <label for="message">Vehicle Year: <span class="report_input"><?php echo $row['veh_year']; ?></span></label>
           
          </div>
          <div class="form_block">
            <label for="message">Make: <span class="report_input"><?php echo $row['make']; ?></span></label>
           
          </div>
          <div class="form_block">
            <label for="message">Model: <span class="report_input"><?php echo $row['model_veh']; ?></span></label>
           
          </div>
          <div class="form_block">
            <label for="message">Style: <span class="report_input"><?php echo $row['style']; ?></span></label>
           
          </div>
          <div class="form_block">
            <label for="message">Color: <span class="report_input"><?php echo $row['color']; ?></span></label>
           
          </div>
          <div class="form_block">
            <label for="message">VIN: <span class="report_input"><?php echo $row['vin']; ?></span></label>
           
          </div>
        </div>

        <h1 class="property_title">Property</h1>
        <div class="form_chunk">
        <div class="form_block">
          <label for="message">Involvement: <span class="report_input"><?php echo $row['involvement_prop']; ?></span></label>
         
        </div>
        <div class="form_block">
          <label for="message">Article: <span class="report_input"><?php echo $row['article']; ?></span></label>
         
        </div>
        <div class="form_block">
          <label for="message">Brand: <span class="report_input"><?php echo $row['model_prop']; ?></span></label>
       
        </div>
        <div class="form_block">
          <label for="message">Model: <span class="report_input"><?php echo $row['serial_num']; ?></span></label>
        
        </div>
        <div class="form_block">
          <label for="message">Serial Num: <span class="report_input"><?php echo $row['owner']; ?></span></label>
       
        </div>
        <div class="form_block">
          <label for="message">Owner: <span class="report_input"><?php echo $row['involvement']; ?></span></label>
        
        </div>
        <div class="form_block">
          <label for="message">Value: <span class="report_input"><?php echo $row['value']; ?></span></label>
      
        </div>
        <div class="form_block">
          <label for="message">Description: <span class="report_input"><?php echo $row['description']; ?></span></label>
          
        </div>
      </div>

      <h1 class="modus_operandi_title">Modus Operandi</h1>
      <div class="form_chunk">
        <div class="form_block">
          <div class="checkbox_div">
            <label for="gang_act">Gang Act: <span class="report_input"><?php echo $row['gang_act']; ?></span></label>

          </div>
        </div>
        <div class="form_block">
          <label for="message">Means of Attack: <span class="report_input"><?php echo $row['attack']; ?></span></label>
         
        </div>
        <div class="form_block">
          <label for="message">Method of Entry: <span class="report_input"><?php echo $row['entry']; ?></span></label>
         
        </div>
        <div class="form_block">
          <label for="message">Weapon Used: <span class="report_input"><?php echo $row['weapon']; ?></span></label>
        
        </div>
        <div class="form_block">
          <label for="message">Premis Type: <span class="report_input"><?php echo $row['premis_type']; ?></span></label>
        
        </div>
        <div class="form_block">
          <label for="message">Number of Victims: <span class="report_input"><?php echo $row['num_victims']; ?></span></label>
         
        </div>
        <div class="form_block">
          <label for="message">Victims Race: <span class="report_input"><?php echo $row['victims_race']; ?></span></label>
         
        </div>
        <div class="form_block">
          <label for="message">Victims Sex: <span class="report_input"><?php echo $row['victims_sex']; ?></span></label>
       
        </div>
        <div class="form_block">
          <label for="message">Victims Age: <span class="report_input"><?php echo $row['victims_age']; ?></span></label>
         
        </div>
      </div>

      <h1 class="narrative_title">Narrative</h1>
      <div class="form_chunk">
        <div class="form_block">
          <label for="message">Summary: <span class="report_input"><?php echo $row['summary']; ?></span></label>
        
        </div>
        <div class="form_block">
          <label for="message">Narrative: <span class="report_input"><?php echo $row['n_narrative']; ?></span></label>
        
          
        </div>
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
