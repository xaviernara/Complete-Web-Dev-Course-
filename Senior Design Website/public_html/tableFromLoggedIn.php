
<!DOCTYPE html>
          <html>
          <body>
              <table>
                <tr>
                  <th> Student </th>
                  <th> PUID </th>
                  <th> Date </th>
                  <th> Attendance </th>
                </tr>
				<tbody>
                <?php
                	include("htmlFromIndex.php");
					include("mySQLConnection.php");
					
					if (isset($_POST["ViewStudents"])) {
					/*
                    //$link = mysqli_connect("shareddb-h.hosting.stackcp.net", "userName-343365c7", "KatekyoReborn19", "userName-343365c7"); 
					$link = mysqli_connect("localhost", "root", "", "userName-343365c7");
                    if (mysqli_connect_error()) {

                            die ("There was an error connecting to the database".mysqli_connect_error());

                    } 
                    */
                    //$incorrectQuery = "SELECT fullname FROM StudentsInfo WHERE PUID IN(SELECT PUID FROM attednace_lessons WHERE PUID = PUID) ";
                    //$query = "SELECT * attednace_lessons FROM attednace_lessons JOIN StudentsInfo ON PUID = PUID WHERE PUID = PUID LIMIT 1";
                    //$query = "SELECT DISTINCT fullName, PUID, date, attendance from attedance_lessons, StudentsInfo WHERE attendance_lessons.PUID = StudentsInfo.PUID";
                    //attednace_lessons WHERE StudentsInfo ON PUID = PUID WHERE PUID = PUID LIMIT 1";

					$query = "SELECT DISTINCT studentsinfo.fullName,studentsinfo.PUID, attendance_lessons.date, attendance_lessons.attendance FROM studentsinfo INNER JOIN attendance_lessons on studentsinfo.PUID = attendance_lessons.PUID";
					//$query=SELECT DISTINCT fullName, PUID, date, attendance from attendance_lessons, StudentsInfo WHERE attendance_lessons.PUID = StudentsInfo.PUID
                    $result = mysqli_query($link, $query);

						if (mysqli_num_rows($result)> 0){
							//output data of each row
							while ($row = mysqli_fetch_assoc($result)){
							?>	
					
	
								
								<tr>
								
								<td><font color ='black'><?php $row["fullName"] ?> </font> <br></td>
								<td><font color ='black'><?php $row["PUID"] ?> </font> <br></td>
								<td><font color ='black'><?php $row["date"] ?> </font> <br></td>
								<td><font color ='black'><?php $row["attendance"] ?> </font> <br></td>
								
								</tr>
				<?php	
							}
						}
						else{
							echo "Theres no students in your courses!";
						}
				
					
					}
				 ?>
				 
				 
				<?php
					/*
                    if($result->num_rows >0){
                        while($row = $result -> fetch_assoc()){
                            echo ("<tr><td>".$row["PUID"]. "</td><td>". $row["fullname"]."</td><td>"."</td></tr>");
                        }
                    }
					*/
                ?>
				</tbody>
              </table>
            </body>
            </html>
