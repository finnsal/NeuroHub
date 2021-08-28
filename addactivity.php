<?php
echo "hello"
  echo($_GET['activityname']);
?>
<html>
  <head>
    <link rel="stylesheet" href="settingsstylesheet.css">
    <title>Settings</title>
    <script>
      activitylist = document.getElementsByTagName("activityname");
      function todaystasks() {
        System.out.println(activitylist);
      }
    </script>
  </head>

  <body>
   <div class="return">
     <a href="home.html"><button class='returnbtn'>Back to home</button></a>
   </div>
   <form action="" method="GET">
     <fieldset>
       <legend class="calendartable">Add activity:</legend>
       <p>Class name:</p>
       <textarea rows="1" cols="64" name="activityname">Enter class name</textarea>
       <p>Type:</p>
       <select id="activitytype">
         <option>Class</option>
         <option>Tutorial</option>
         <option>Lecture</option>
         <option>Assignment</option>
         <option>Test</option>
       </select>
       <p>Day:</p>
       <select id="activityday">
         <option>Monday</option>
         <option>Tuesday</option>
         <option>Wednesday</option>
         <option>Thursday</option>
         <option>Friday</option>
         <option>Saturday</option>
         <option>Sunday</option>
       </select>
       <p>Date:</p><input type="date" id="activitydate">
       <p>Start time:</p><input type="time" id="starttime"></input>
       <p>End time:</p><input type="time" id="endtime"></input>
       <p>Class link:</p><input type="url" id="classurl"></input> <br>
       <p>Repeat weekly?</p>
       <label>Yes</label><input type="radio" id="weekly"> <br>
       <label>No</label><input type="radio" id="weekly"> <br>
       <br><a href="home.html"><input type="submit" value="Add activity"></a>
      </fieldset>
      </form>
      <p><script> document.write(activitylist) </script></p>
      <?php
        echo($_GET['activityname']);
      ?>

     <!--
     <div class="typedropdown">
         <button class="typebtn">Type</button>
         <div class="dropdown-content">
           <ls>Lecture</ls>
           <a href="#">Class</a>
           <a href="#">Tutorial</a>
           <a href="#">Lab</a>
           <a href="#">Test</a>
           <a href="#">Assignment</a>
         </div>
     </div>
     -->
  </body>
</html>
