<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration Form</title>
    <link rel="stylesheet" href="style.css"  >
    <script rel="script"   href="script.js"  >

    </script>


  </head>
  <body>

<?php























?>

















    <div class="main-container">

     <div class="form-container">

      <div class="heading">
        <h2>Registration</h2>
      </div>
        

      <form action="/submit" method="post">

        <div class="personal_details">

          <div class="naming_details">
            <div>
              <label for="name" id="subheading"  >Full Name</label>
            <input type="text" name="name" id="name" placeholder="Enter Your name" class="inputarea" required />
            </div>
           
            <div>
              <label for="dateofbirth"  id="subheading"   >Date of Birth</label>
              <input type="date" name="dateofbirth" placeholder="Enter date of birth"  class="inputarea"  required />
            </div>


            <div>
              <label for="email" id="subheading">Email</label>
            <input type="email" name="email" placeholder="Enter Your email" class="inputarea"  required />
            </div>
            
          </div>



            <div  class="Other_details" >
              
              <div>
                <label for="Mobilenumber" id="subheading"     >Mobile Number</label>
                <input type="tel" name="Mobilenumber" id="" placeholder="Enter Your name" class="inputarea" required/>
              </div>
              

                <div>
                <label for="Gender"  id="subheading">Gender</label>
                <input type="text" id="Gender"  name="Gender" placeholder="Enter Your Gender" class="inputarea"   required />
                </div>
                         

                <div>
                   <label for="Occupation" id="subheading"  >Occupation</label>
                  <input type="text" name="Occupation"    placeholder="Enter Your Occupation"  class="inputarea"  required  />
                </div>

                </div>
                
      </div>



      <div class="Identity_Details">

        <div class="naming_details" >

              <div>   
              <label for="Id"   id="subheading"    >Id type</label>
              <input type="number" name="Id" id="idtype" placeholder="Enter ID type" required class="inputarea"  required />
                </div>


                <div>   
              <label for="idnumber"   id="subheading"> ID Number</label>
              <input type="text"  name="idnumber"   id="idnumber" placeholder="Enter ID number" class="inputarea" required  />
                </div>
               
                <div>
                  <label for="issueauthority"  id="subheading"  >Issue Authority </label>
                  <input type="text" name="issueauthority" id="issueauthority"  placeholder="Enter issue department" class="inputarea"  required />
                </div>

                
            </div>
  
  
  
              <div  class="Other_details" >

                <div>
                  <label for="name"   id="subheading"  >Issue Date</label>
                  <input type="date" name="name" id="" placeholder="Enter Issue date" required class="inputarea"  required  />
                </div>


                <div>
                  <label for="name"   id="subheading"     >Issue State</label>
                  <input type="text"   placeholder="Enter ID issue state" class="inputarea" required  />
                </div>


                <div>
                  <label for="name"  id="subheading"    >Expiry Date</label>
                  <input type="date"  placeholder="Enter ID expiry" class="inputarea" required />
                </div>
                
                  </div>

                      
              
                  <div>
                    <button id="nextbutton" type="submit">Next</button>
  
                  </div>
                 




        </div>
  



     </div>   


    </div>









  </body>



</html>
