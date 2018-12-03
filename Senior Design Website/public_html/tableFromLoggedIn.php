
<!DOCTYPE html>
          <html>
          <body>
              <table>
                <tr>
                  <th> Student </th>
                  <th> PUID </th>
                  <th> Course </th>
                  <th> Attendance Date </th>
                </tr>
                <?php
                	include("htmlFromIndex.php");
                    //$link = mysqli_connect("shareddb-h.hosting.stackcp.net", "userName-343365c7", "KatekyoReborn19", "userName-343365c7"); 
					$link = mysqli_connect("localhost", "root", "", "userName-343365c7");
                    if (mysqli_connect_error()) {

                            die ("There was an error connecting to the database".mysqli_connect_error());

                    } 
                    
                    //$incorrectQuery = "SELECT fullname FROM StudentsInfo WHERE PUID IN(SELECT PUID FROM attednace_lessons WHERE PUID = PUID) ";
                    //$query = "SELECT * attednace_lessons FROM attednace_lessons JOIN StudentsInfo ON PUID = PUID WHERE PUID = PUID LIMIT 1";
                    $query = "SELECT DISTINCT fullName, PUID, date, attendance from attedance_lessons, StudentsInfo WHERE attendance_lessons.PUID = StudentsInfo.PUID";
                    //attednace_lessons WHERE StudentsInfo ON PUID = PUID WHERE PUID = PUID LIMIT 1";

					//$query=SELECT DISTINCT fullName, PUID, date, attendance from attendance_lessons, StudentsInfo WHERE attendance_lessons.PUID = StudentsInfo.PUID
                    $result = $link->query($query);

                    if($result->num_rows >0){
                        while($row = $result -> fetch_assoc()){
                            echo ("<tr><td>".$row["PUID"]. "</td><td>". $row["fullname"]."</td><td>"."</td></tr>");
                        }
                    }
                ?>

              </table>
            </body>
            </html>
