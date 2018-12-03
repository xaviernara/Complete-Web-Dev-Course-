    <div class = "container">
    
      <h1><font color = "black">Snap Attendance</font></h1>

       <div id ="errors"><?php echo $error; ?></div>

            <form method = "post" id = "signUpForm" >
              
              <p> <font color = "black">Add Instructors Profile to the Database</font></p>
              
              <fieldset class="form-group">

                <input class="form-control" name="email" type="text" placeholder="Email address">

              </fieldset >

               <fieldset class="form-group">

                   <input class="form-control" name="password" type="password" placeholder="Password">

               </fieldset>
              
              <fieldset class="form-group">

                   <input class="form-control" name="full_name" type="text" placeholder="Full Name">

               </fieldset>
              
               <fieldset class="form-group">

                   <input class="form-control" name="username" type="text" placeholder="Username">

               </fieldset>
              
              <fieldset class="form-group">

                   <input class="form-control" name="courseName" type="text" placeholder="Course Name (e.g. CS303)">

               </fieldset>
              
               <fieldset class="form-group">

                   <input class="form-control" name="courseID" type="text" placeholder="Course ID (e.g. 595)">

               </fieldset>
              
  
               <div class ="checkbox">

                 <label><font color = "black">

                      <input class="form-control"  type = "checkbox" name = "stayLoggedIn" value =1> Stay Logged In

                 </label></font>

               </div>

               <fieldset class="form-group">

                    <input type ="hidden" name="signUp" value="1">
                    <input class="btn btn-success" type="submit" name ="submit" value = "Sign up">

                </fieldset>
              
				<p><a class="toggleForm"><font color = "blue"> <u>Log In</u> </a> </font></p>

            </form>

            <form method = "post" id = "logInForm" >

              <p><font color = "black"> Instructors Login</font></p>
               <fieldset class="form-group">

                  <input class="form-control" name="email" type="text" placeholder="Email Address">

                </fieldset>

               <fieldset class="form-group">

                  <input class="form-control"  name="password" type="password" placeholder="Password">

               </fieldset >

               <div class ="checkbox">

                 <label><font color = "black">

                      <input class="form-control"  type = "checkbox" name = "stayLoggedIn" value =1> Stay Logged In

                </label></font>

               </div>

                  <input type ="hidden" name="signUp" value="0">

                <input class="btn btn-success" type="submit" name ="submit" value = "Log In">
              
              	<p><a class="toggleForm"><font color = "blue"> <u>Sign Up</u> </font></a></p>

            </form>

      </div>
