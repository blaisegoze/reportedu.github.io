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
        while($row=mysqli_fetch_assoc($table)){?>

    <!-- Report -->
    <div id="report">
      <div class="report_img"></div>
      <div class="report_text">
        <h1 class="report_num">Report #:<span class="report_input"><?php echo $row['report_num']; ?></span></h1>
        <h1 class="report_title">Incident</h1>
        <div class="form_chunk">
            
            <div class="form_block">
              <label for="message">Author<span class="report_input"></span></label>
              
            </div>
            <div class="form_block">
              <label for="message">Report Date</label>
             
            </div>
            <div class="form_block">
              <label for="message">Report Time</label>
            
            </div>
            <div class="form_block">
              <label for="message">Nature of Call</label>
           
            </div>
            <div class="form_block">
              <label for="message">Location</label>
           
            </div>
            <div class="form_block">
              <label for="message">City</label>
           
            </div>
            <div class="form_block">
              <label for="message">State</label>
          
            </div>
            <div class="form_block">
              <label for="message">Zip Code</label>
            
            </div>
            <div class="form_block">
              <label for="message">From Date</label>
           
            </div>
            <div class="form_block">
              <label for="message">From Time</label>
           
            </div>
            <div class="form_block">
              <label for="message">To Date</label>
           
            </div>
            <div class="form_block">
              <label for="message">To Time</label>
            
            </div>
        </div>
        
        <h1 class="nperso_title">Person</h1>
        <div class="form_chunk">
          <div class="form_block_subs">
            <label for="message">Name</label>
            <div class="form_block_sub">
            
            </div>
          </div>
          <div class="form_block">
            <label for="message">SSN</label>
            
          </div>
          <div class="form_block">
            <label for="message">DI of Travel</label>
           
          </div>
          <div class="form_block">
            <label for="message">Street Address</label>
           
          </div>
          <div class="form_block">
            <label for="message">Phone#</label>
           
          </div>
          <div class="form_block">
            <label for="message">City</label>
           
          </div>
          <div class="form_block">
            <label for="message">State</label>
          
          </div>
          <div class="form_block">
            <label for="message">Zip Code</label>
            
          </div>
          <div class="form_block">
            <label for="message">Date of Birth</label>
            
          </div>
          <div class="form_block">
            <label for="message">Race</label>
           
          </div>
          <div class="form_block">
            <label for="message">Sex</label>
            
          </div>
          <div class="form_block">
            <label for="message">Height</label>
           
          </div>
          <div class="form_block">
            <label for="message">Weight</label>
           
          </div>
          <div class="form_block">
            <label for="message">Hair</label>
          
          </div>
          <div class="form_block">
            <label for="message">Eyes</label>
           
          </div>
        </div>

        <h1 class="vehicle_title">Vehicle</h1>
        <div class="form_chunk">
          <div class="form_block">
            <label for="message">Involvement</label>
           
          </div>
          <div class="form_block">
            <label for="message">Driver's LIC. NO.</label>
           
          </div>
          <div class="form_block">
            <label for="message">LIC. Year</label>
           
          </div>
          <div class="form_block">
            <label for="message">State</label>
           
          </div>
          <div class="form_block">
            <label for="message">Vehicle Year</label>
           
          </div>
          <div class="form_block">
            <label for="message">Make</label>
           
          </div>
          <div class="form_block">
            <label for="message">Model</label>
           
          </div>
          <div class="form_block">
            <label for="message">Style</label>
           
          </div>
          <div class="form_block">
            <label for="message">Color</label>
           
          </div>
          <div class="form_block">
            <label for="message">VIN</label>
           
          </div>
        </div>

        <h1 class="property_title">Property</h1>
        <div class="form_chunk">
        <div class="form_block">
          <label for="message">Involvement</label>
         
        </div>
        <div class="form_block">
          <label for="message">Article</label>
         
        </div>
        <div class="form_block">
          <label for="message">Brand</label>
       
        </div>
        <div class="form_block">
          <label for="message">Model</label>
        
        </div>
        <div class="form_block">
          <label for="message">Serial Num</label>
       
        </div>
        <div class="form_block">
          <label for="message">Owner</label>
        
        </div>
        <div class="form_block">
          <label for="message">Value</label>
      
        </div>
        <div class="form_block">
          <label for="message">Description</label>
          
        </div>
      </div>

      <h1 class="modus_operandi_title">Modus Operandi</h1>
      <div class="form_chunk">
        <div class="form_block">
          <div class="checkbox_div">
         
            <label for="gang_act">Gang Act</label>
          </div>
        </div>
        <div class="form_block">
          <label for="message">Means of Attack</label>
         
        </div>
        <div class="form_block">
          <label for="message">Method of Entry</label>
         
        </div>
        <div class="form_block">
          <label for="message">Weapon Used</label>
        
        </div>
        <div class="form_block">
          <label for="message">Premis Type</label>
        
        </div>
        <div class="form_block">
          <label for="message">Number of Victims</label>
         
        </div>
        <div class="form_block">
          <label for="message">Victims Race</label>
         
        </div>
        <div class="form_block">
          <label for="message">Victims Sex</label>
       
        </div>
        <div class="form_block">
          <label for="message">Victims Age</label>
         
        </div>
      </div>

      <h1 class="narrative_title">Narrative</h1>
      <div class="form_chunk">
        <div class="form_block">
          <label for="message">Summary</label>
        
        </div>
        <div class="form_block">
          <label for="message">Narrative</label>
        
          <?php } ?>
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
