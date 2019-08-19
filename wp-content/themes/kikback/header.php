<!-- stores head and start of html tags -->
<!DOCTYPE html>
<html>

<head>
  <?php wp_head(); ?>
</head>



<!-- Navigation -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03"
    aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a href="./index.html" id="logo">
        <?php insertImage("/resources/img/kikback-logo.jpg", 'class="card-img-top"'); ?>
        </a>
      </li>

      <!-- DropDown NavBar 1 Begins Here  -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false">
          Shop All Shoes & Sizes

        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="./shop/brand-new/page1.html">Brand New</a>
          <a class="dropdown-item" href="./shop/used-9.10/page1.html">Used (9/10 Condition)</a>
          <a class="dropdown-item" href="./shop/used-8.10/page1.html">Used (8/10 Condition)</a>
          <a class="dropdown-item" href="./shop/kickback-steals/page1.html">KickBack Steals</a>
        </div>
        <!-- Dropdown NavBar 1 Ends Here -->

        <!-- DropDown NavBar 2 Begins Here  -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false">
          Sneaker Size

        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="./shop/sneaker-sizes/size-8.html">Size 8</a>
          <a class="dropdown-item" href="./shop/sneaker-sizes/size-8.5.html">Size 8.5</a>
          <a class="dropdown-item" href="./shop/sneaker-sizes/size-9.html">Size 9</a>
          <a class="dropdown-item" href="./shop/sneaker-sizes/size-9.5.html">Size 9.5</a>
          <a class="dropdown-item" href="./shop/sneaker-sizes/size-10.html">Size 10</a>
          <a class="dropdown-item" href="./shop/sneaker-sizes/size-10.5.html">Size 10.5</a>
          <a class="dropdown-item" href="./shop/sneaker-sizes/size-11.html">Size 11</a>
          <a class="dropdown-item" href="./shop/sneaker-sizes/sizes-11.5.html">Size 11.5</a>
          <a class="dropdown-item" href="./shop/sneaker-sizes/size-12.html">Size 12</a>
          <a class="dropdown-item" href="./shop/sneaker-sizes/size-13.html">Size 13</a>
          <a class="dropdown-item" href="./shop/sneaker-sizes/size-14.html">Size 14</a>
        </div>

        <!-- Dropdown NavBar 2 Ends Here -->

        <!-- DropDown NavBar 3 Begins Here -->
      <li class="nav-item">
        <a class="nav-link " href="#" aria-haspopup="true" aria-expanded="false">
          Restoration
        </a>
        <!-- Dropdown NavBar 2 Ends Here -->


      <li class="nav-item">
        <a class="nav-link" href="./about/index.html">About</a>
      <li class="nav-item">
      </li>
    </ul>

    <a href="checkout.html" a class="a"> <i class="fa fa-shopping-cart" aria-hidden="true" style="padding-right:50px;"></i></a>


    <form class="form-inline my-2 my-lg-0" id="searchbar">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>

  </div>
</nav>
<br>




<body <?php body_class();?> >