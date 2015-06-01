<?php include('includes/header.php');?>
  <!-- END MAIN CONTAINER -->
  <div class="container">
    
    <!-- HOME TOP -->
    <div class="row">

      <!-- CAROUSEL -->
      <div class="span7">
        <div id="myCarousel" class="carousel slide">
          <div class="carousel-inner">
            <div class="item active">
              <img src="img/delete.jpg" alt="">
            </div>
            <div class="item">
              <img src="img/delete.jpg" alt="">
            </div>
            <div class="item">
              <img src="img/delete.jpg" alt="">
            </div>
          </div>
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
        </div>
      </div>
      <!-- END CAROUSEL -->


      <!-- REQUEST ESTIMATE -->
      <div class="span5 home-quote">
        <h1>want to chat <br/>or require a<br/><strong>free quotation?</strong></h1>
        <p><strong>Leave us your details and we'll call you back!</strong></p>
        <form id="form" name="form" method="post" action="">
        <input type="text" name="name" id="name" value="Your name">
        <input type="text" name="name" id="phone" value="Telephone Number">
        <input type="submit" value="Call me back!" class="btn">
        </form>
      </div><!-- END REQUEST ESTIMATE -->


    </div><!-- END HOME TOP -->

    <hr>

    <!-- HOME 3 BOXES -->
    <div class="row home-boxes">
      <div class="span4 home-box1">
        <h2>New build</h2>
        <h3>Sub heading here</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis modi nobis ipsa earum perferendis corrupti temporibus cum eaque necessitatibus eius distinctio sed velit commodi ex consectetur porro vero veniam possimus!</p>
        <a href="" class="btn">Read more ></a>
      </div>
      <div class="span4 home-box2">
        <h2>Renovation</h2>
        <h3>Sub heading here</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea officiis quas odio aliquam ad totam eum consequuntur? Quod accusantium debitis velit inventore ipsa fugiat quasi totam perferendis ea nam ut!</p>
        <a href="" class="btn">Read more ></a>
      </div>
      <div class="span4 home-box3">
        <h2>Renewable</h2>
        <h3>Sub heading here</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat eaque ut iste dicta corporis earum doloribus dolorem at ipsam natus exercitationem accusantium blanditiis dolor excepturi veniam minus iure deserunt voluptatibus.</p>
        <a href="" class="btn">Read more ></a>
      </div>
    </div><!-- END HOME 3 BOXES -->

    <hr>

    <!-- LOGOS -->
    <div class="row">
      <div class="span5"><img src="img/client-logos-1.png" /></div>
      <div class="span7 hidden-phone"><img src="img/client-logos-2.png" /></div>
    </div><!-- END LOGOS -->

<?php include('includes/footer.php');?>