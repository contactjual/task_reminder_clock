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
    </div>
  </main>

  <!-- time update by javaScript -->
  <script>

  function time () {
    // const timeContainer = document.getElementById("time_container");

    const date = new Date ();
    let getHour = date.getHours();
    let getmin = date.getMinutes();
    let getsec = date.getSeconds();



    // document.getElementById("dayMonYear").innerText = ;
    document.getElementById("hour").innerText = getHour;
    document.getElementById("min").innerText = getmin;
    document.getElementById("second").innerText = getsec;
  }
  
  setInterval(time, 1000);

  </script>

</body>
</html>
