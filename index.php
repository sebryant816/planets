<!DOCTYPE html>

<html lang="en">

<head>
    
        <!-- //meta data to allow pages to adjust to mobile devices//--->

            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">

            <title>PLANETS</title>

            <!-- Latest compiled and minified CSS -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

            <!-- jQuery library -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

            <!-- Popper JS -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

            <!-- Latest compiled JavaScript -->
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
            <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
            <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

<style>

    hr.new1 {
    border: 1px solid #cc9900;
    }

</style>

</head>

    <body style="background: url(images/space.jpg);color:white;">
 
  

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    ?>


    <!--Heading--->
    <div class="container-fluid" style="text-align:center;color: #ffd24d; font-size:85px;text-shadow:2px 2px #cc9900;padding-top:100px;">
      <div class="row">
        <div class="col-md-12">
          <p> A Tour of Our Solar System</p>
        </div>
      </div>
    </div>


      <br><br>
      <br><br>
      <hr class="new1">
      <!---Mercury--->

    <div class="container" style="padding-top:50px;padding-bottom:40px;">
      <div class="row">
        <div class="col-md-2"style="text-align:center;">

        <table>
            <tr>
   
                 <?php

                   $sql = "SELECT * FROM planets WHERE id=1";
                   $result = mysqli_query($conn, $sql);

                   if (mysqli_num_rows($result) > 0) {
                   // output data of each row
                   while($row = mysqli_fetch_assoc($result)) {

                   ?>
                   <td><?=$row["googlemaps"]?></td>

                   <?
                     }
                     } else {
                     echo "0 results";
                     }
                   ?>

               </tr>
           </table>
  
               <p style="font-size:9px; color:#cc9900">Click image for Google Maps</a>
         </div>
  
        <!-- Display col  2 --->

         <div class="col-md-5">

             <table>
                 <tr>

                     <?php

                       $sql = "SELECT * FROM planets WHERE id=1";
                       $result = mysqli_query($conn, $sql);

                       if (mysqli_num_rows($result) > 0) {
                       // output data of each row
                       while($row = mysqli_fetch_assoc($result)) {

                       ?>
                       <td><?=$row["planet"]?></td>


                       <?
                         }
                         } else {
                         echo "0 results";
                         }

                       ?>

               </tr>
             </table>
               <br>
             <table>
                <tr>
   
                <?php
                   $sql = "SELECT * FROM planets WHERE id=1";
                   $result = mysqli_query($conn, $sql);

                   if (mysqli_num_rows($result) > 0) {
                   // output data of each row
                   while($row = mysqli_fetch_assoc($result)) {

                   ?>
                   <td><?=$row["distance"]?></td>


                   <?
                     }
                     } else {
                     echo "0 results";
                     }

                   ?>
             
               </tr>
            </table>
            <table>
               <tr>
   
                <?php

                   $sql = "SELECT * FROM planets WHERE id=1";
                   $result = mysqli_query($conn, $sql);

                   if (mysqli_num_rows($result) > 0) {
                   // output data of each row
                   while($row = mysqli_fetch_assoc($result)) {

                   ?>
                   <td><?=$row["radius"]?></td>

                   <?
                     }
                     } else {
                     echo "0 results";
                     }

                   ?>
             
               </tr>
            </table>
            <table>
               <tr>

                <?php

                   $sql = "SELECT * FROM planets WHERE id=1";
                   $result = mysqli_query($conn,$sql);

                   if (mysqli_num_rows($result) > 0) {
                   // output data of each row
                   while($row = mysqli_fetch_assoc($result)) {

                   ?>
                   <td><?=$row["mass"]?></td>

                   <?
                     }
                     } else {
                     echo "0 results";
                     }
                   ?>

                </tr>   
           </table>
           <table>
                <tr>

                    <?php

                   $sql = "SELECT * FROM planets WHERE id=1";
                   $result = mysqli_query($conn,$sql);

                   if (mysqli_num_rows($result) > 0) {
                   // output data of each row
                   while($row = mysqli_fetch_assoc($result)) {

                   ?>
                   <td><?=$row["lengthday"]?></td>


                   <?
                     }
                     } else {
                     echo "0 results";
                     }

                   ?>

                   </tr>
               
               </table>
               <table>
               
                    <tr>

                    <?php

                    $sql = "SELECT * FROM planets WHERE id=1";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) {

                    ?>
                    <td><?=$row["orbitalperiod"]?></td>


                    <?
                      }
                      } else {
                      echo "0 results";
                      }

                    ?>

                    </tr>

                </table>
    
              </div>
               <!-- display col  3 --->
    
              <div class="col-md-5">

                    <br>

                    <table>

                       <tr>

                    <?php

                       $sql = "SELECT * FROM planets WHERE id=1";
                       $result = mysqli_query($conn, $sql);

                       if (mysqli_num_rows($result) > 0) {
                       // output data of each row
                       while($row = mysqli_fetch_assoc($result)) {

                       ?>
                       <td><?=$row["description"]?></td>

                       <?
                         }
                         } else {
                         echo "0 results";
                         }

                       ?>

                       </tr>

                       </table>
                </div>

           </div>
            </div>

        <hr class="new1">

        <!---Venus--->

        <div class="container" style="padding-top:40px;padding-bottom:50px;">
          <div class="row">
            <div class="col-md-2">

            <table>

                       <tr>

                    <?php

                       $sql = "SELECT * FROM planets WHERE id=2";
                       $result = mysqli_query($conn, $sql);

                       if (mysqli_num_rows($result) > 0) {
                       // output data of each row
                       while($row = mysqli_fetch_assoc($result)) {

                       ?>
                       <td><?=$row["googlemaps"]?></td>


                       <?
                         }
                         } else {
                         echo "0 results";
                         }

                       ?>

                       </tr>

                       </table>
                       <p style="font-size:9px; color:#cc9900">Click image for Google Maps</a>  
             </div>
  
        <!-- Display col  2 --->

             <div class="col-md-5">

             <table>

                       <tr>

                    <?php

                       $sql = "SELECT * FROM planets WHERE id=2";
                       $result = mysqli_query($conn, $sql);

                       if (mysqli_num_rows($result) > 0) {
                       // output data of each row
                       while($row = mysqli_fetch_assoc($result)) {

                       ?>
                       <td><?=$row["planet"]?></td>


                       <?
                         }
                         } else {
                         echo "0 results";
                         }

                       ?>

                       </tr>

                       </table>

                       <br>

                       <table>

                       <tr>

                    <?php

                       $sql = "SELECT * FROM planets WHERE id=2";
                       $result = mysqli_query($conn, $sql);

                       if (mysqli_num_rows($result) > 0) {
                       // output data of each row
                       while($row = mysqli_fetch_assoc($result)) {

                       ?>
                       <td><?=$row["distance"]?></td>


                       <?
                         }
                         } else {
                         echo "0 results";
                         }

                       ?>

                       </tr>

                       </table>

                       <table>

                       <tr>

                    <?php

                       $sql = "SELECT * FROM planets WHERE id=2";
                       $result = mysqli_query($conn, $sql);

                       if (mysqli_num_rows($result) > 0) {
                       // output data of each row
                       while($row = mysqli_fetch_assoc($result)) {

                       ?>
                       <td><?=$row["radius"]?></td>


                       <?
                         }
                         } else {
                         echo "0 results";
                         }

                       ?>

                       </tr>

                       </table>

                       <table>

                       <tr>

                    <?php

                       $sql = "SELECT * FROM planets WHERE id=2";
                       $result = mysqli_query($conn,$sql);

                       if (mysqli_num_rows($result) > 0) {
                       // output data of each row
                       while($row = mysqli_fetch_assoc($result)) {

                       ?>
                       <td><?=$row["mass"]?></td>


                       <?
                         }
                         } else {
                         echo "0 results";
                         }

                       ?>

                       </tr>

                       </table>
                       <table>

                       <tr>

                    <?php

                       $sql = "SELECT * FROM planets WHERE id=2";
                       $result = mysqli_query($conn,$sql);

                       if (mysqli_num_rows($result) > 0) {
                       // output data of each row
                       while($row = mysqli_fetch_assoc($result)) {

                       ?>
                       <td><?=$row["lengthday"]?></td>


                       <?
                         }
                         } else {
                         echo "0 results";
                         }

                       ?>

                       </tr>

                       </table>
        <table>

        <tr>

        <?php

        $sql = "SELECT * FROM planets WHERE id=2";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {

        ?>
        <td><?=$row["orbitalperiod"]?></td>


        <?
          }
          } else {
          echo "0 results";
          }

        ?>

        </tr>

            </table>



                    </div>
        <!-- display col  3 --->

        <div class="col-md-5">

        <br>

                    <table>

                       <tr>

                    <?php

                       $sql = "SELECT * FROM planets WHERE id=2";
                       $result = mysqli_query($conn, $sql);

                       if (mysqli_num_rows($result) > 0) {
                       // output data of each row
                       while($row = mysqli_fetch_assoc($result)) {

                       ?>
                       <td><?=$row["description"]?></td>

                       <?
                         }
                         } else {
                         echo "0 results";
                         }

                       ?>

                       </tr>

                       </table>
                </div>

           </div>
        </div>
        <hr class="new1">

        <!---Earth--->

        <div class="container" style="padding-top:40px;padding-bottom:50px;">
          <div class="row">
            <div class="col-md-2">

            <table>

                       <tr>

                    <?php

                       $sql = "SELECT * FROM planets WHERE id=3";
                       $result = mysqli_query($conn, $sql);

                       if (mysqli_num_rows($result) > 0) {
                       // output data of each row
                       while($row = mysqli_fetch_assoc($result)) {

                       ?>
                       <td><?=$row["googlemaps"]?></td>


                       <?
                         }
                         } else {
                         echo "0 results";
                         }

                       ?>

                       </tr>

                       </table>
                       <p style="font-size:9px; color:#cc9900">Click image for Google Maps</a>
             </div>

        <!-- Display col  2 --->

             <div class="col-md-5">

             <table>

                       <tr>

                    <?php

                       $sql = "SELECT * FROM planets WHERE id=3";
                       $result = mysqli_query($conn, $sql);

                       if (mysqli_num_rows($result) > 0) {
                       // output data of each row
                       while($row = mysqli_fetch_assoc($result)) {

                       ?>
                       <td><?=$row["planet"]?></td>


                       <?
                         }
                         } else {
                         echo "0 results";
                         }

                       ?>

                       </tr>

                       </table>

                       <br>

                       <table>

                       <tr>

                    <?php

                       $sql = "SELECT * FROM planets WHERE id=3";
                       $result = mysqli_query($conn, $sql);

                       if (mysqli_num_rows($result) > 0) {
                       // output data of each row
                       while($row = mysqli_fetch_assoc($result)) {

                       ?>
                       <td><?=$row["distance"]?></td>


                       <?
                         }
                         } else {
                         echo "0 results";
                         }

                       ?>

                       </tr>

                       </table>

                       <table>

                       <tr>

                    <?php

                       $sql = "SELECT * FROM planets WHERE id=3";
                       $result = mysqli_query($conn, $sql);

                       if (mysqli_num_rows($result) > 0) {
                       // output data of each row
                       while($row = mysqli_fetch_assoc($result)) {

                       ?>
                       <td><?=$row["radius"]?></td>


                       <?
                         }
                         } else {
                         echo "0 results";
                         }

                       ?>

                       </tr>

                       </table>

                       <table>

                       <tr>

                    <?php

                       $sql = "SELECT * FROM planets WHERE id=3";
                       $result = mysqli_query($conn,$sql);

                       if (mysqli_num_rows($result) > 0) {
                       // output data of each row
                       while($row = mysqli_fetch_assoc($result)) {

                       ?>
                       <td><?=$row["mass"]?></td>


                       <?
                         }
                         } else {
                         echo "0 results";
                         }

                       ?>

                       </tr>

                       </table>
                       <table>

                       <tr>

                    <?php

                       $sql = "SELECT * FROM planets WHERE id=3";
                       $result = mysqli_query($conn,$sql);

                       if (mysqli_num_rows($result) > 0) {
                       // output data of each row
                       while($row = mysqli_fetch_assoc($result)) {

                       ?>
                       <td><?=$row["lengthday"]?></td>


                       <?
                         }
                         } else {
                         echo "0 results";
                         }

                       ?>

                       </tr>

                       </table>
        <table>

            <tr>

                <?php

                $sql = "SELECT * FROM planets WHERE id=3";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {

                ?>
                <td><?=$row["orbitalperiod"]?></td>


                <?
                  }
                  } else {
                  echo "0 results";
                  }

                ?>

             </tr>
        </table>

         </div>
        <!-- display col  3 --->

        <div class="col-md-5">

        <br>

         <table>

                <tr>

                    <?php

                       $sql = "SELECT * FROM planets WHERE id=3";
                       $result = mysqli_query($conn, $sql);

                       if (mysqli_num_rows($result) > 0) {
                       // output data of each row
                       while($row = mysqli_fetch_assoc($result)) {

                       ?>
                       <td><?=$row["description"]?></td>

                       <?
                         }
                         } else {
                         echo "0 results";
                         }

                       ?>

                       </tr>

                       </table>
                </div>

           </div>
        </div>
        <hr class="new1">

        <!---Mars--->

        <div class="container" style="padding-top:40px;padding-bottom:50px;">
          <div class="row">
            <div class="col-md-2">

            <table>

                       <tr>

                    <?php

                       $sql = "SELECT * FROM planets WHERE id=4";
                       $result = mysqli_query($conn, $sql);

                       if (mysqli_num_rows($result) > 0) {
                       // output data of each row
                       while($row = mysqli_fetch_assoc($result)) {

                       ?>
                       <td><?=$row["googlemaps"]?></td>


                       <?
                         }
                         } else {
                         echo "0 results";
                         }

                       ?>

                       </tr>

                       </table>
                       <p style="font-size:9px; color:#cc9900">Click image for Google Maps</a>
             </div>

        <!-- Display col  2 --->

             <div class="col-md-5">

             <table>

                       <tr>

                    <?php

                       $sql = "SELECT * FROM planets WHERE id=4";
                       $result = mysqli_query($conn, $sql);

                       if (mysqli_num_rows($result) > 0) {
                       // output data of each row
                       while($row = mysqli_fetch_assoc($result)) {

                       ?>
                       <td><?=$row["planet"]?></td>


                       <?
                         }
                         } else {
                         echo "0 results";
                         }

                       ?>

                       </tr>

                       </table>

                       <br>

                       <table>

                       <tr>

                    <?php

                       $sql = "SELECT * FROM planets WHERE id=4";
                       $result = mysqli_query($conn, $sql);

                       if (mysqli_num_rows($result) > 0) {
                       // output data of each row
                       while($row = mysqli_fetch_assoc($result)) {

                       ?>
                       <td><?=$row["distance"]?></td>


                       <?
                         }
                         } else {
                         echo "0 results";
                         }

                       ?>

                       </tr>

                       </table>

                       <table>

                       <tr>

                    <?php

                       $sql = "SELECT * FROM planets WHERE id=4";
                       $result = mysqli_query($conn, $sql);

                       if (mysqli_num_rows($result) > 0) {
                       // output data of each row
                       while($row = mysqli_fetch_assoc($result)) {

                       ?>
                       <td><?=$row["radius"]?></td>


                       <?
                         }
                         } else {
                         echo "0 results";
                         }

                       ?>

                       </tr>

                       </table>

                       <table>

                       <tr>

                    <?php

                       $sql = "SELECT * FROM planets WHERE id=4";
                       $result = mysqli_query($conn,$sql);

                       if (mysqli_num_rows($result) > 0) {
                       // output data of each row
                       while($row = mysqli_fetch_assoc($result)) {

                       ?>
                       <td><?=$row["mass"]?></td>


                       <?
                         }
                         } else {
                         echo "0 results";
                         }

                       ?>

                       </tr>

                       </table>
                       <table>

                       <tr>

                    <?php

                       $sql = "SELECT * FROM planets WHERE id=4";
                       $result = mysqli_query($conn,$sql);

                       if (mysqli_num_rows($result) > 0) {
                       // output data of each row
                       while($row = mysqli_fetch_assoc($result)) {

                       ?>
                       <td><?=$row["lengthday"]?></td>


                       <?
                         }
                         } else {
                         echo "0 results";
                         }

                       ?>

                       </tr>

                       </table>
        <table>

        <tr>

        <?php

        $sql = "SELECT * FROM planets WHERE id=4";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {

        ?>
        <td><?=$row["orbitalperiod"]?></td>


        <?
          }
          } else {
          echo "0 results";
          }

        ?>

        </tr>

            </table>



                    </div>
        <!-- display col  3 --->

        <div class="col-md-5">

        <br>

                    <table>

                       <tr>

                    <?php

                       $sql = "SELECT * FROM planets WHERE id=4";
                       $result = mysqli_query($conn, $sql);

                       if (mysqli_num_rows($result) > 0) {
                       // output data of each row
                       while($row = mysqli_fetch_assoc($result)) {

                       ?>
                       <td><?=$row["description"]?></td>

                       <?
                         }
                         } else {
                         echo "0 results";
                         }

                       ?>

                       </tr>

                       </table>
                </div>

           </div>
        </div>
        <hr class="new1">

        <!---Jupiter--->

        <div class="container" style="padding-top:40px;padding-bottom:50px;">
          <div class="row">
            <div class="col-md-2">

            <table>

                       <tr>

                    <?php

                       $sql = "SELECT * FROM planets WHERE id=5";
                       $result = mysqli_query($conn, $sql);

                       if (mysqli_num_rows($result) > 0) {
                       // output data of each row
                       while($row = mysqli_fetch_assoc($result)) {

                       ?>
                       <td><?=$row["googlemaps"]?></td>


                       <?
                         }
                         } else {
                         echo "0 results";
                         }

                       ?>

                       </tr>

                       </table>
                       <p style="font-size:9px; color:#cc9900">Click image for Google Maps</a>
             </div>

        <!-- Display col  2 --->

             <div class="col-md-5">

             <table>

                       <tr>

                    <?php

                       $sql = "SELECT * FROM planets WHERE id=5";
                       $result = mysqli_query($conn, $sql);

                       if (mysqli_num_rows($result) > 0) {
                       // output data of each row
                       while($row = mysqli_fetch_assoc($result)) {

                       ?>
                       <td><?=$row["planet"]?></td>


                       <?
                         }
                         } else {
                         echo "0 results";
                         }

                       ?>

                       </tr>

                       </table>

                       <br>

                       <table>

                       <tr>

                    <?php

                       $sql = "SELECT * FROM planets WHERE id=5";
                       $result = mysqli_query($conn, $sql);

                       if (mysqli_num_rows($result) > 0) {
                       // output data of each row
                       while($row = mysqli_fetch_assoc($result)) {

                       ?>
                       <td><?=$row["distance"]?></td>


                       <?
                         }
                         } else {
                         echo "0 results";
                         }

                       ?>

                       </tr>

                       </table>

                       <table>

                       <tr>

                    <?php

                       $sql = "SELECT * FROM planets WHERE id=5";
                       $result = mysqli_query($conn, $sql);

                       if (mysqli_num_rows($result) > 0) {
                       // output data of each row
                       while($row = mysqli_fetch_assoc($result)) {

                       ?>
                       <td><?=$row["radius"]?></td>


                       <?
                         }
                         } else {
                         echo "0 results";
                         }

                       ?>

                       </tr>

                       </table>

                       <table>

                       <tr>

                    <?php

                       $sql = "SELECT * FROM planets WHERE id=5";
                       $result = mysqli_query($conn,$sql);

                       if (mysqli_num_rows($result) > 0) {
                       // output data of each row
                       while($row = mysqli_fetch_assoc($result)) {

                       ?>
                       <td><?=$row["mass"]?></td>


                       <?
                         }
                         } else {
                         echo "0 results";
                         }

                       ?>

                       </tr>

                       </table>
                       <table>

                       <tr>

                    <?php

                       $sql = "SELECT * FROM planets WHERE id=5";
                       $result = mysqli_query($conn,$sql);

                       if (mysqli_num_rows($result) > 0) {
                       // output data of each row
                       while($row = mysqli_fetch_assoc($result)) {

                       ?>
                       <td><?=$row["lengthday"]?></td>


                       <?
                         }
                         } else {
                         echo "0 results";
                         }

                       ?>

                       </tr>

                       </table>
        <table>

        <tr>

        <?php

        $sql = "SELECT * FROM planets WHERE id=5";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {

        ?>
        <td><?=$row["orbitalperiod"]?></td>


        <?
          }
          } else {
          echo "0 results";
          }

        ?>

        </tr>

            </table>



                    </div>
        <!-- display col  3 --->

        <div class="col-md-5">

        <br>

                    <table>

                       <tr>

                    <?php

                       $sql = "SELECT * FROM planets WHERE id=5";
                       $result = mysqli_query($conn, $sql);

                       if (mysqli_num_rows($result) > 0) {
                       // output data of each row
                       while($row = mysqli_fetch_assoc($result)) {

                       ?>
                       <td><?=$row["description"]?></td>

                       <?
                         }
                         } else {
                         echo "0 results";
                         }

                       ?>

                       </tr>

                       </table>
                </div>

           </div>
        </div>

        <hr class="new1">

        <!---Saturn--->

        <div class="container" style="padding-top:40px;padding-bottom:50px;">
          <div class="row">
            <div class="col-md-2">

            <table>

                       <tr>

                    <?php

                       $sql = "SELECT * FROM planets WHERE id=6";
                       $result = mysqli_query($conn, $sql);

                       if (mysqli_num_rows($result) > 0) {
                       // output data of each row
                       while($row = mysqli_fetch_assoc($result)) {

                       ?>
                       <td><?=$row["googlemaps"]?></td>


                       <?
                         }
                         } else {
                         echo "0 results";
                         }
                       ?>

                       </tr>

                       </table>
                       <p style="font-size:9px; color:#cc9900">Click image for Google Maps</a>
             </div>

        <!-- Display col  2 --->

             <div class="col-md-5">

             <table>
                     <tr>

                    <?php

                       $sql = "SELECT * FROM planets WHERE id=6";
                       $result = mysqli_query($conn, $sql);

                       if (mysqli_num_rows($result) > 0) {
                       // output data of each row
                       while($row = mysqli_fetch_assoc($result)) {

                       ?>
                       <td><?=$row["planet"]?></td>


                       <?
                         }
                         } else {
                         echo "0 results";
                         }

                       ?>

                       </tr>

                       </table>

                       <br>

                       <table>

                       <tr>

                    <?php

                       $sql = "SELECT * FROM planets WHERE id=6";
                       $result = mysqli_query($conn, $sql);

                       if (mysqli_num_rows($result) > 0) {
                       // output data of each row
                       while($row = mysqli_fetch_assoc($result)) {

                       ?>
                       <td><?=$row["distance"]?></td>


                       <?
                         }
                         } else {
                         echo "0 results";
                         }

                       ?>

                   </tr>
               </table>
               <table>
                   <tr>

                        <?php
                           $sql = "SELECT * FROM planets WHERE id=6";
                           $result = mysqli_query($conn, $sql);

                           if (mysqli_num_rows($result) > 0) {
                           // output data of each row
                           while($row = mysqli_fetch_assoc($result)) {

                           ?>
                           <td><?=$row["radius"]?></td>


                           <?
                             }
                             } else {
                             echo "0 results";
                             }
                           ?>

                      </tr>
               </table>
               <table>
                       <tr>

                            <?php
                           $sql = "SELECT * FROM planets WHERE id=6";
                           $result = mysqli_query($conn,$sql);

                           if (mysqli_num_rows($result) > 0) {
                           // output data of each row
                           while($row = mysqli_fetch_assoc($result)) {

                           ?>
                           <td><?=$row["mass"]?></td>


                           <?
                             }
                             } else {
                             echo "0 results";
                             }
                           ?>

                </tr>
           </table>
           <table>
                <tr>

                            <?php

                           $sql = "SELECT * FROM planets WHERE id=6";
                           $result = mysqli_query($conn,$sql);

                           if (mysqli_num_rows($result) > 0) {
                           // output data of each row
                           while($row = mysqli_fetch_assoc($result)) {

                           ?>
                           <td><?=$row["lengthday"]?></td>


                           <?
                             }
                             } else {
                             echo "0 results";
                             }

                           ?>

                  </tr>
            </table>
            <table>
                  <tr>

                        <?php

                        $sql = "SELECT * FROM planets WHERE id=6";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {

                        ?>
                        <td><?=$row["orbitalperiod"]?></td>


                        <?
                          }
                          } else {
                          echo "0 results";
                          }

                        ?>

                    </tr>

                </table>

            </div>
             <!-- display col  3 --->

            <div class="col-md-5">
                <br>
                <table>
                   <tr>

                        <?php

                           $sql = "SELECT * FROM planets WHERE id=6";
                           $result = mysqli_query($conn, $sql);

                           if (mysqli_num_rows($result) > 0) {
                           // output data of each row
                           while($row = mysqli_fetch_assoc($result)) {

                           ?>
                           <td><?=$row["description"]?></td>

                           <?
                             }
                             } else {
                             echo "0 results";
                             }

                           ?>

                       </tr>
                     </table>
                </div>
           </div>
        </div>
        <hr class="new1">

        <!---Uranus--->

        <div class="container" style="padding-top:40px;padding-bottom:50px;">
          <div class="row">
            <div class="col-md-2">

            <table>

                       <tr>

                    <?php

                       $sql = "SELECT * FROM planets WHERE id=7";
                       $result = mysqli_query($conn, $sql);

                       if (mysqli_num_rows($result) > 0) {
                       // output data of each row
                       while($row = mysqli_fetch_assoc($result)) {

                       ?>
                       <td><?=$row["googlemaps"]?></td>


                       <?
                         }
                         } else {
                         echo "0 results";
                         }
                       ?>

                    </tr>
                </table>
                       <p style="font-size:9px; color:#cc9900">Click image for Google Maps</a>
           </div>
            <!-- Display col  2 --->
           <div class="col-md-5">

             <table>
                 <tr>

                    <?php

                       $sql = "SELECT * FROM planets WHERE id=7";
                       $result = mysqli_query($conn, $sql);

                       if (mysqli_num_rows($result) > 0) {
                       // output data of each row
                       while($row = mysqli_fetch_assoc($result)) {

                       ?>
                       <td><?=$row["planet"]?></td>


                       <?
                         }
                         } else {
                         echo "0 results";
                         }
                       ?>

                    </tr>
               </table>
               <br>
               <table>
                     <tr>

                        <?php
                       $sql = "SELECT * FROM planets WHERE id=7";
                       $result = mysqli_query($conn, $sql);

                       if (mysqli_num_rows($result) > 0) {
                       // output data of each row
                       while($row = mysqli_fetch_assoc($result)) {
                       ?>
                       <td><?=$row["distance"]?></td>


                       <?
                         }
                         } else {
                         echo "0 results";
                         }
                       ?>

                     </tr>
                  </table>
                  <table>
                       <tr>

                            <?php
                           $sql = "SELECT * FROM planets WHERE id=7";
                           $result = mysqli_query($conn, $sql);

                           if (mysqli_num_rows($result) > 0) {
                           // output data of each row
                           while($row = mysqli_fetch_assoc($result)) {

                           ?>
                           <td><?=$row["radius"]?></td>


                           <?
                             }
                             } else {
                             echo "0 results";
                             }

                           ?>

                       </tr>
               </table>
               <table>
                       <tr>

                            <?php

                               $sql = "SELECT * FROM planets WHERE id=7";
                               $result = mysqli_query($conn,$sql);

                               if (mysqli_num_rows($result) > 0) {
                               // output data of each row
                               while($row = mysqli_fetch_assoc($result)) {

                               ?>
                               <td><?=$row["mass"]?></td>


                               <?
                                 }
                                 } else {
                                 echo "0 results";
                                 }
                               ?>

                      </tr>

               </table>
               <table>

                    <tr> 

                        <?php

                           $sql = "SELECT * FROM planets WHERE id=7";
                           $result = mysqli_query($conn,$sql);

                           if (mysqli_num_rows($result) > 0) {
                           // output data of each row
                           while($row = mysqli_fetch_assoc($result)) {

                           ?>
                           <td><?=$row["lengthday"]?></td>
                       <?
                         }
                         } else {
                         echo "0 results";
                         }

                       ?>

                    </tr>
               
                </table>
                <table>

                    <tr>

                        <?php

                        $sql = "SELECT * FROM planets WHERE id=7";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {

                        ?>
                        <td><?=$row["orbitalperiod"]?></td>


                        <?
                          }
                          } else {
                          echo "0 results";
                          }

                        ?>

                    </tr>

                </table>

         </div>
        <!-- display col  3 --->

        <div class="col-md-5">
        <br>
            <table>
              <tr>
   
                    <?php

                       $sql = "SELECT * FROM planets WHERE id=7";
                       $result = mysqli_query($conn, $sql);

                       if (mysqli_num_rows($result) > 0) {
                       // output data of each row
                       while($row = mysqli_fetch_assoc($result)) {

                       ?>
                       <td><?=$row["description"]?></td>

                       <?
                         }
                         } else {
                         echo "0 results";
                         }

                       ?>

               </tr>
             </table>
          </div>
       </div>
    </div>

    <hr class="new1">

<!---Neptune--->

    <div class="container" style="padding-top:40px;padding-bottom:50px;">
      <div class="row">
        <div class="col-md-2">
             <table>
               <tr>

                <?php

                   $sql = "SELECT * FROM planets WHERE id=8";
                   $result = mysqli_query($conn, $sql);

                   if (mysqli_num_rows($result) > 0) {
                   // output data of each row
                   while($row = mysqli_fetch_assoc($result)) {

                   ?>
                   <td><?=$row["googlemaps"]?></td>


                        <?
                     }
                     } else {
                     echo "0 results";
                     }
                      ?>
             
               </tr>
            </table>
               <p style="font-size:9px; color:#cc9900">Click image for Google Maps</a>
     </div>
     <!-- Display col  2 --->
     <div class="col-md-5">
        
                <table>
                      <tr>

                            <?php

                               $sql = "SELECT * FROM planets WHERE id=8";
                               $result = mysqli_query($conn, $sql);

                               if (mysqli_num_rows($result) > 0) {
                               // output data of each row
                               while($row = mysqli_fetch_assoc($result)) {

                               ?>
                               <td><?=$row["planet"]?></td>


                               <?
                                 }
                                 } else {
                                 echo "0 results";
                                 }

                               ?>

                        </tr>
               
               </table>
               <br>
               <table>
               
                        <tr>

                           <?php

                           $sql = "SELECT * FROM planets WHERE id=8";
                           $result = mysqli_query($conn, $sql);

                           if (mysqli_num_rows($result) > 0) {
                           // output data of each row
                           while($row = mysqli_fetch_assoc($result)) {

                           ?>
                           <td><?=$row["distance"]?></td>


                           <?
                             }
                             } else {
                             echo "0 results";
                             }

                           ?>
             
                      </tr>
               
              </table>
              <table>

                     <tr>

                       <?php

                       $sql = "SELECT * FROM planets WHERE id=8";
                       $result = mysqli_query($conn, $sql);

                       if (mysqli_num_rows($result) > 0) {
                       // output data of each row
                       while($row = mysqli_fetch_assoc($result)) {

                       ?>
                       <td><?=$row["radius"]?></td>


                       <?
                         }
                         } else {
                         echo "0 results";
                         }

                       ?>
             
                   </tr>
               
               </table>

               <table>
               
                       <tr>

                        <?php

                           $sql = "SELECT * FROM planets WHERE id=8";
                           $result = mysqli_query($conn,$sql);

                           if (mysqli_num_rows($result) > 0) {
                           // output data of each row
                           while($row = mysqli_fetch_assoc($result)) {

                           ?>
                           <td><?=$row["mass"]?></td>


                           <?
                             }
                             } else {
                             echo "0 results";
                             }

                           ?>

                       </tr>
                  </table>
                  <table>
                       <tr>

                            <?php

                           $sql = "SELECT * FROM planets WHERE id=8";
                           $result = mysqli_query($conn,$sql);

                           if (mysqli_num_rows($result) > 0) {
                           // output data of each row
                           while($row = mysqli_fetch_assoc($result)) {

                           ?>
                           <td><?=$row["lengthday"]?></td>

                           <?
                             }
                             } else {
                             echo "0 results";
                             }

                           ?>

                        </tr>
               
                   </table>
                   <table>
               
                        <tr>

                        <?php

                        $sql = "SELECT * FROM planets WHERE id=8";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {

                        ?>
                        <td><?=$row["orbitalperiod"]?></td>


                        <?
                          }
                          } else {
                          echo "0 results";
                          }

                        ?>

                        </tr>

                     </table>

              </div>
                <!-- display col  3 --->
              <div class="col-md-5">

                        <br>

                     <table>
                       <tr>

                        <?php

                       $sql = "SELECT * FROM planets WHERE id=8";
                       $result = mysqli_query($conn, $sql);

                       if (mysqli_num_rows($result) > 0) {
                       // output data of each row
                       while($row = mysqli_fetch_assoc($result)) {

                       ?>
                       <td><?=$row["description"]?></td>

                       <?
                         }
                         } else {
                         echo "0 results";
                         }

                       ?>

                       </tr>
                   </table>
              </div>
           </div>
        </div>
</body>
</html>
