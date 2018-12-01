    <div class = "container">
    
      <h1>Snap Attendance</h1>

       <div><?php echo $error;?></div>

            <form method = "post" id = "signUpForm" >
              
              <p> Add Instructors Profile to the Database</p>
              
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

                 <label>

                      <input class="form-control"  type = "checkbox" name = "stayLoggedIn" value =1> Stay Logged In

                 </label>

               </div>

               <fieldset class="form-group">

                    <input type ="hidden" name="signUp" value="1">
                    <input class="btn btn-success" type="submit" name ="submit" value = "Sign up">

                </fieldset>
              
				<p><a class="toggleForm"> <u>Log In</u> </a> </p>

            </form>

            <form method = "post" id = "logInForm" >

              <p> Instructors Login</p>
               <fieldset class="form-group">

                  <input class="form-control" name="email" type="text" placeholder="Email Address">

                </fieldset>

               <fieldset class="form-group">

                  <input class="form-control"  name="password" type="password" placeholder="Password">

               </fieldset >

               <div class ="checkbox">

                 <label>

                      <input class="form-control"  type = "checkbox" name = "stayLoggedIn" value =1> Stay Logged In

                </label>

               </div>

                  <input type ="hidden" name="signUp" value="0">

                <input class="btn btn-success" type="submit" name ="submit" value = "Log In">
              
              	<p><a class="toggleForm"> <u>Sign Up</u> </a></p>

            </form>

      </div>
