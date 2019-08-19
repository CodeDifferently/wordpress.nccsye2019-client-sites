<div class="card h-100">
  <?php insertImage("/resources/img/kikback-tkbsteals.png", 'class="card-img-top"'); ?>
  <div class="card-body">
    <h4 class="card-title">
    <?php insertLink("/wordpress/shop-page/kickbck-steals/page1") ?>TBK Steals</a></li>
    </h4>

    <div class="container">
      <table class="table">
        <thead>
          <tr>
            <th>Past Events</th>
          </tr>
        </thead>

        <tbody>
          <?php
              $month = "Apr";
              $dayOfMonth = "28th";
              $dayOfWeek = "Saturday";
              $timeOfDay = "02:00AM EDT";
              $numberOfGuests = 8;
              $location = "Middletown";
              include("_kikback-event.php");?>

          <?php
              $month = "Mar";
              $dayOfMonth = "24th";
              $dayOfWeek = "Saturday";
              $timeOfDay = "12:00PM EDT";
              $numberOfGuests = 9;
              $location = "Middletown";
              include("_kikback-event.php");?>

          <?php
              $month = "Feb";
              $dayOfMonth = "10th";
              $dayOfWeek = "Saturday";
              $timeOfDay = "12:00PM EDT";
              $numberOfGuests = 8;
              $location = "16 North Broad Street, Wilmington, DE";
              include("_kikback-event.php");?>
        </tbody>
      </table>
    </div>
  </div>
</div>