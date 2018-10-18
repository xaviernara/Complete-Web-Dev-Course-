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

               <div class ="checkbox">

                 <label>

                      <input class="form-control"  type = "checkbox" name = "stayLoggedIn" value =1> Stay Logged In

                 </label>

               </div>

               <fieldset class="form-group">

                    <input type ="hidden" name="signUp" value="1">
                    <input class="btn btn-success" type="submit" name ="submit" value = "Sign up">

                </fieldset>
              
				<p> <a class="toggleForm">Log In</a> </p>

            </form>

            <form method = "post" id = "logInForm" >

              <p> Instructors Login</p>
               <fieldset class="form-group">

                  <input class="form-control" name="email" type="text" placeholder="Email address">

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
              
              	<p><a class="toggleForm"> Sign Up </a></p>

            </form>

      </div>
