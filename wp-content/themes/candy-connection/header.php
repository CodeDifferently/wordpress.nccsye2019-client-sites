<!-- stores head and start of html tags -->
<!DOCTYPE html>
<html>
  <head><?php wp_head(); ?></head>



  <!-- Navigation -->
  <ul class="topnav" align="center">
    <center>
      <li><?php insertimage("/resources/img/candy-connection-logo.png", 'height="auto" width="45%" id="Logo"') ?></li>  
      <li><a class="active" href="..\Main-Page\index.html">Home</a></li>
      <li><?php insertLink("/candy-connection/about")?>About</a></li>
      <li><?php insertLink("/candy-connection/cotton-candy")?>Cotton Candy</a></li>
      <li><?php insertLink("/candy-connection/italian-ice")?>Italian Ice</a></li>
      <li><?php insertLink("/candy-connection/special-events")?>Special Events</a></li>
      <li><?php insertLink("/candy-connection/shopping/cart", 'class="icon-button shopping-cart fa-lg"')?><i class="fa fa-shopping-cart"></i><span></span></a>
      <li><a href="https://www.instagram.com/candyconnections/" align="Right" target="_blank"><i class="fa fa-instagram"></i></a>
      <li><a href="https://www.facebook.com/CandyConnections/" align="Right" target="_blank"><i class="fa fa-facebook"></i></a>
    </center>
  </ul>

  


  <body <?php body_class();?> >
