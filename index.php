<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Digital Clock</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <?php
  // set default time zone 
  date_default_timezone_set("Asia/Dhaka");
  ?>

  <main>
      <!-- task for daylight -->
    <div id="daylight">
      <h2>Tasks on day</h2>
      <p>[<span id="from1">09</span>-<span id="to1">01</span>]-><span id="task1">Learn PHP</span></p>
      <p>[<span id="from2">09</span>-<span id="to2">01</span>]-><span id="task2">Break for lunch</span></p>
      <p>[<span id="from3">09</span>-<span id="to3">01</span>]-><span id="task3">Learn PHP</span></p>
      <p>[<span id="from4">09</span>-<span id="to4">01</span>]-><span id="task4">Break for physical exercise</span></p>
    </div>

    <div id="time_container" class="clock-container">
      <div class="day" id="day_name"><?php echo date("l")?></div>
      <div class="date" id="dayMonYear"><?php echo date("jS F Y")?></div>
      <div class="time">
        <div class="time-part">
          <span class="value" id="hour"><?php echo date("H")?></span>
          <span class="label">hour</span>
        </div>
        <div class="time-part">
          <span class="value" id="min"><?php echo date("i")?></span>
          <span class="label">minutes</span>
        </div>
        <div class="time-part">
          <span class="value" id="second"><?php echo date("s")?></span>
          <span class="label">seconds</span>
        </div>
      </div>
    </div>

    <div id="night">
      <h2>Tasks on night</h2>
      <p>[<span id="from5">06</span>-<span id="to5">08</span>]-><span id="task5">Social media marketing</span></p>
      <p>[<span id="from6">09</span>-<span id="to6">01</span>]-><span id="task6">Break for dinner</span></p>
      <p>[<span id="from7">09</span>-<span id="to7">01</span>]-><span id="task7">Learn PHP and [PS:30 - Pnt-Ms:30]</span></p>
      <p>[<span id="from8">09</span>-<span id="to8">01</span>]-><span id="task8">Break for rest</span></p>
    </div>
  </main>

  <!-- time update by javaScript -->
  <script>

  function time () {

    // get timing 
    const date = new Date ();
    let getHour = date.getHours();
    let getmin = date.getMinutes();
    let getsec = date.getSeconds();

    // set schedule funciton
    setSchedule (getHour, getmin);

    // set timing update
    document.getElementById("hour").innerText = getHour;
    document.getElementById("min").innerText = getmin;
    document.getElementById("second").innerText = getsec;
  }
  
  setInterval(time, 1000);

  function setSchedule (hour, min) {
    if (hour >= "09" && hour <= "01") {
      document.getElementById("from1").innerText = "09";
      document.getElementById("to1").innerText = "01";
      document.getElementById("task1").innerText = "Learn PHP";
    } 
    if (hour >= "01" && hour <= "03") {
      document.getElementById("from2").innerText = "01";
      document.getElementById("to2").innerText = "03";
      document.getElementById("task2").innerText = "Break for lunch";
    } 
  }

  </script>

</body>
</html>
