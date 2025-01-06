<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Digital Clock</title>
  <link rel="stylesheet" href="styles.css">
</head>

<body>

  <div class="container">
    <?php
    // set default time zone 
    date_default_timezone_set("Asia/Dhaka");
    ?>

    <main>

      <!-- clock container for tablate and mobile start-->
      <div id="time_container2" class="clock-container2">
        <div class="day" id="day_name2"><?php echo date("l") ?></div>
        <div class="date" id="dayMonYear2"><?php echo date("jS F Y") ?></div>
        <div class="time">
          <div class="time-part">
            <span class="value" id="hour2"><?php echo date("H") ?></span>
            <span class="label">hour</span>
          </div>
          <div class="time-part">
            <span class="value" id="min2"><?php echo date("i") ?></span>
            <span class="label">minutes</span>
          </div>
          <div class="time-part">
            <span class="value" id="second2"><?php echo date("s") ?></span>
            <span class="label">seconds</span>
          </div>
        </div>
      </div>
      <!-- clock container for tablate and mobile end-->



      <!-- task for daylight -->
      <div id="daylight">
        <h2>Tasks on day</h2>
        <p id="task_1">[<span id="from1">9</span>-<span id="to1">13</span>]-><span id="task1">Learn PHP</span></p>
        <p id="task_2">[<span id="from2">13</span>-<span id="to2">15</span>]-><span id="task2">Break for lunch</span>
        </p>
        <p id="task_3">[<span id="from3">15</span>-<span id="to3">16</span>]-><span id="task3">Learn PHP</span></p>
        <p id="task_4">[<span id="from4">16</span>-<span id="to4">18</span>]-><span id="task4">Break for physical
            exercise</span>
        </p>
      </div>

      <div id="time_container" class="clock-container">
        <div class="day" id="day_name"><?php echo date("l") ?></div>
        <div class="date" id="dayMonYear"><?php echo date("jS F Y") ?></div>
        <div class="time">
          <div class="time-part">
            <span class="value" id="hour"><?php echo date("H") ?></span>
            <span class="label">hour</span>
          </div>
          <div class="time-part">
            <span class="value" id="min"><?php echo date("i") ?></span>
            <span class="label">minutes</span>
          </div>
          <div class="time-part">
            <span class="value" id="second"><?php echo date("s") ?></span>
            <span class="label">seconds</span>
          </div>
        </div>
      </div>

      <div id="night">
        <h2>Tasks on night</h2>
        <p id="task_5">[<span id="from5">18</span>-<span id="to5">20</span>]-><span id="task5">Social media
            marketing</span></p>
        <p id="task_6">[<span id="from6">20</span>-<span id="to6">21</span>]-><span id="task6">Break for dinner</span>
        </p>
        <p id="task_7">[<span id="from7">21</span>-<span id="to7">00</span>]-><span id="task7">Learn PHP and [PS:30 -
            Pnt-Ms:30]</span></p>
        <p id="task_8">[<span id="from8">00</span>-<span id="to8">9</span>]-><span id="task8">Break for rest</span></p>
      </div>
    </main>


    <!-- time and schedule update by javaScript -->
    <script>

      function time() {

        // get timing 
        const date = new Date();
        let getHour = date.getHours();
        let getmin = date.getMinutes();
        let getsec = date.getSeconds();

        // set schedule funciton
        setSchedule(getHour, getmin);

        // set timing update
        document.getElementById("hour").innerText = getHour.toString().padStart(2, "0");
        document.getElementById("min").innerText = getmin.toString().padStart(2, "0");
        document.getElementById("second").innerText = getsec.toString().padStart(2, "0");

        // for clock-container2
        document.getElementById("hour2").innerText = getHour.toString().padStart(2, "0");
        document.getElementById("min2").innerText = getmin.toString().padStart(2, "0");
        document.getElementById("second2").innerText = getsec.toString().padStart(2, "0");
      }

      setInterval(time, 1000);

      function setSchedule(hour, min) {
        if (hour >= 9 && hour < 13) {
          document.getElementById("task_2").classList.remove("task_colo");
          document.getElementById("task_1").classList.add("task_colo");
        }
        if (hour >= 13 && hour < 15) {
          document.getElementById("task_1").classList.remove("task_colo");
          document.getElementById("task_2").classList.add("task_colo");
        }
        if (hour >= 15 && hour < 16) {
          document.getElementById("task_2").classList.remove("task_colo");
          document.getElementById("task_3").classList.add("task_colo");
        }
        if (hour >= 16 && hour < 18) {
          document.getElementById("task_3").classList.remove("task_colo");
          document.getElementById("task_4").classList.add("task_colo");
        }
        if (hour >= 18 && hour < 20) {
          document.getElementById("task_4").classList.remove("task_colo");
          document.getElementById("task_5").classList.add("task_colo");
        }
        if (hour >= 20 && hour < 21) {
          document.getElementById("task_5").classList.remove("task_colo");
          document.getElementById("task_6").classList.add("task_colo");
        }
        if (hour >= 21 && hour <= 23) {
          document.getElementById("task_6").classList.remove("task_colo");
          document.getElementById("task_7").classList.add("task_colo");
        }
        if (hour === 00 && hour < 9) {
          document.getElementById("task_7").classList.remove("task_colo");
          document.getElementById("task_8").classList.add("task_colo");
        }

      }

    </script>
  </div>

</body>

</html>