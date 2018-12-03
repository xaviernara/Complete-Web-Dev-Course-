
<form method = "post" id = "studentAddForm" >
              
              <p><font color="black"> Add Students Profile & Classes to the Database</font></p>
              
              <fieldset class="form-group">

                <input class="form-control" name="studentName" type="text" placeholder="Add Student's Full Name">

              </fieldset >

               <fieldset class="form-group">

                   <input class="form-control" name="studentId" type="text" placeholder="Add Student's Id">

               </fieldset>
  
  				<fieldset class="form-group">

                   <input class="form-control" name="instructorClasses" type="text" placeholder="Add Course">

               </fieldset>
  
  				<fieldset class="form-group">

                   <input class="form-control" name="courseID" type="text" placeholder="Add Course ID">

               </fieldset>
  
              <fieldset class="form-group">
                
				<!--	<input type="hidden" name="updateDatabase" value="1">
				-->
                    <input class="btn btn-success" type="submit" name ="UpdateDatabase" value = "Update Database">

              </fieldset>
  
  			              <fieldset class="form-group">
				<!--	<input type="hidden" name="viewClasses" value="1">
				-->
                    <input class="btn btn-success" type="submit" name ="ViewClasses" value = "View Classes">

              </fieldset>
			  
			   </fieldset>
  
  			              <fieldset class="form-group">
				<!--	<input type="hidden" name="viewClasses" value="1">
				-->
                    <input class="btn btn-success" type="submit" name ="ViewStudents" value = "View Students">

              </fieldset>
			  
			  </fieldset>
  
  			              <fieldset class="form-group">
				<!--	<input type="hidden" name="viewClasses" value="1">
				-->
                    <input class="btn btn-success" type="submit" name ="ViewStudents" value = "View Attendance">

              </fieldset>
  
            </form>
