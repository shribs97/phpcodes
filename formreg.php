<html>
   <body style="background-color: purple; color: whitesmoke;">
   <fieldset>
       <legend>Exam Form</legend>
       <form action="formreg.php" method="post">
          <b>  Name :
           <input type="text" placeholder="First Name" id="t1" >
           <input type="text" placeholder="Middle Name" id="t2">
           <input type="text" placeholder="Last Name" id="t3"> <br><br>
           Date of Birth :
           <input type="date"> <br><br>
           Address :
           <input type="text" placeholder="Enter Your living address"><br><br>
           Mobile No :
           <input type="text" placeholder="Enter Your Mobile No"><br><br>
           Email :
           <input type="text" placeholder="Enter Your Email"><br><br>
           <input type="submit" id="btn" value="Submit" name="exam" style="margin-left: 100px; width: 250; height:50;">
            <b>
       </form>
    </fieldset>
    <fieldset>
        <legend>Hostel Form</legend>
       <form action="formreg.php" method="post" >
          <b>  Name :
           <input type="text" placeholder="First Name" id="t1" >
           <input type="text" placeholder="Middle Name" id="t2">
           <input type="text" placeholder="Last Name" id="t3"> <br><br>
           Date of Birth :
           <input type="date"> <br><br>
           Address :
           <input type="text" placeholder="Enter Your living address"><br><br>
           Mobile No :
           <input type="text" placeholder="Enter Your Mobile No"><br><br>
           Email :
           <input type="text" placeholder="Enter Your Email"><br><br>
           <input type="submit" id="btn" value="Submit" name="hostel" style="margin-left: 100px; width: 250; height:50;">
            <b>
       </form>
</fieldset>
       <?php
            if(!empty($_POST["exam"]))
            {
                echo "Exam form is submitted...!";
            }
            else if(!empty($_POST["hostel"]))
            {
                echo "Hostel form is submitted...!";
            }
            else
            {
                echo " ";
            }
       ?>
   </body>
</html>
