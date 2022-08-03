<form name="myForm" id="myForm" action="https://olympus1.mygreatlearning.com/learner_engagements/video_watch_events?pb_id=581" method="post" enctype="multipart/form-data">
  <label for="fname">ranges[0][s]:</label>
  <input type="text" id="fname" name="ranges[0][s]" value="<?php echo $_GET['ranges'][0]['s']; ?>"><br><br>
  <label for="lname">ranges[0][e]:</label>
  <input type="text" id="lname" name="ranges[0][e]" value="<?php echo $_GET['ranges'][0]['e']; ?>"><br><br>
  <label for="fname">page_id:</label>
  <input type="text" id="fname" name="page_id" value="<?php echo $_GET['page_id']; ?>"><br><br>
  <label for="lname">course_id:</label>
  <input type="text" id="lname" name="course_id" value="<?php echo $_GET['course_id']; ?>"><br><br>
  <label for="fname">position:</label>
  <input type="text" id="fname" name="position" value="<?php echo $_GET['position']; ?>"><br><br>
  <label for="lname">module_item_id:</label>
  <input type="text" id="lname" name="module_item_id" value="<?php echo $_GET['module_item_id']; ?>"><br><br>
  <label for="fname">lms_user_id:</label>
  <input type="text" id="fname" name="lms_user_id" value="<?php echo $_GET['lms_user_id']; ?>"><br><br>
  <label for="lname">mid:</label>
  <input type="text" id="lname" name="mid" value="<?php echo $_GET['mid']; ?>"><br><br>
  <label for="fname">media_type:</label>
  <input type="text" id="fname" name="media_type" value="<?php echo $_GET['media_type']; ?>"><br><br>
  <label for="lname">duration:</label>
  <input type="text" id="lname" name="duration" value="<?php echo $_GET['duration']; ?>"><br><br>
  <input type="submit" value="Submit">
</form>

<script type="text/javascript">
    setTimeout(function(){
      document.forms["myForm"].submit();
    }, <?php echo $_GET['ranges'][0]['s']*50; ?>);
</script>