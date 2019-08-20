<div class="card h-100">
  <?php insertImage("/resources/img/kikback-tkbsteals.png", 'class="card-img-top"'); ?>
  <div class="card-body">


    <div class="container">
      <h3>Past Events</h3>

      <table class="table">
        <tbody>
          <?php
            $kikbackLocation = "16N Broad Street Middletown, DE";?>

          <?php
              $month = "Apr";
              $dayOfMonth = "28th";
              $dayOfWeek = "Saturday";
              $timeOfDay = "02:00AM";
              $numberOfGuests = 8;
              $location = $kikbackLocation;
              include("_kikback-event.php");?>

          <?php
              $month = "Mar";
              $dayOfMonth = "24th";
              $dayOfWeek = "Saturday";
              $timeOfDay = "12:00PM";
              $numberOfGuests = 9;
              $location = $kikbackLocation;
              include("_kikback-event.php");?>

          <?php
              $month = "Feb";
              $dayOfMonth = "10th";
              $dayOfWeek = "Saturday";
              $timeOfDay = "12:00PM";
              $numberOfGuests = 7;
              $location = $kikbackLocation;
              include("_kikback-event.php");?>
        </tbody>
      </table>
    </div>
  </div>
  <h4 class="card-title">
    <?php insertAnchor("/wordpress/shop-page/kickbck-steals/page1") ?>Current TBK Steals</a>
  </h4>
</div>