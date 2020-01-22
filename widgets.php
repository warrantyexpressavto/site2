<?php
include "header.php";
?>

    <main role="main">

     <div class="container mt-4">
       <div class="row">
         <div class="col-md-12">
           <h2 class="text-center">JqueryUI Widgets</h2>
         </div>
       </div>
       <div class="row">
         <div class="col-md-4">
           <h2 class="text-center">Accordion widget</h2>
           <div class="accord">
             <h3><a href="#">Section 1</a></h3>
             <div>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias nisi consectetur, minus laborum molestiae officia.
               Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium voluptatum sunt dolor quidem, earum atque quod voluptatibus sit quas sapiente reprehenderit recusandae unde ab voluptatem fugit repellat qui, nobis numquam perferendis molestias quae consectetur. Quo cum facilis a, consequatur error magnam dolorum ipsam. Vero debitis cumque accusantium, omnis quas laudantium.
               </p>
             </div>
             <h3><a href="#">Section 2</a></h3>
             <div>
               <ul>
                 <li>Punkt 1</li>
                 <li>Punkt 2</li>
                 <li>Punkt 3</li>
                 <li>Punkt 4</li>
               </ul>
             </div>
             <h3><a href="#">Section 3</a></h3>
             <div>
              <img src="img/Desert.jpg" width="200" alt="">
             </div>
           </div>
         </div>
         <div class="col-md-8">
           <h2 class="text-center">Tabs Widget</h2>
            <div class="tabs">
              <ul>
                <li><a href="#tab1">Vkladka1</a></li>
                <li><a href="#tab2">Vkladka2</a></li>
                <li><a href="#tab3">Vkladka3</a></li>
              </ul>
              <div id="tab1">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur sapiente temporibus corporis rem dolorem maxime animi cumque cum provident veniam! Iusto facere tempore consequatur, eligendi quaerat labore nulla! Aspernatur, asperiores!</p>
              </div>
              <div id="tab2">
                <ul>
                  <li>Punkt 1</li>
                  <li>Punkt 2</li>
                  <li>Punkt 3</li>
                </ul>
              </div>
              <div id="tab3">
                <img src="img/Desert.jpg" width="200" alt="">
              </div>
            </div>
         </div>
       </div>
       <div class="row">
         <div class="col-md-6">
           <h2 class="text-center">Widget Menu</h2>
           <ul class="menu">
             <li>Punkt 1</li>
             <li>Punkt 2
               <ul>
                 <li>Podpunkt 2.1</li>
                 <li>Podpunkt 2.2</li>
               </ul>
             </li>
             <li>Punkt 3</li>
             <li>Punkt 4</li>
           </ul>
         </div>
         <div class="col-md-6">
           <h2 class="text-center">Widget Button</h2>
           <button class="btnwidget">Button</button>
           <a href="#" class="btnwidget">Link</a>
         </div>
       </div>
       <div class="row">
         <div class="col-md-6">
           <h2 class="text-center">Widget datepicker</h2>
           Дата: <input type="text" class="data">
         </div>
         <div class="col-md-6">
           <h2 class="text-center">Widget Slider</h2>
           <p>
  <label for="amount">Price range:</label>
  <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
            </p>
 <div id="slider-range"></div>
         </div>
       </div>
       <div class="row">
         <div class="col-md-12">
           <h2 class="text-center">Widget Dialog</h2>
         </div>
         <div class="col-md-6">
           <p class="hide" title="dialog">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas, a?
           </p>
           <button class="btnwidget dial">Open Dialog</button>
         </div>
         <div class="col-md-6">
          <form class="hide">
            <div class="form-group">
              <label for="login">Login</label>
              <input type="text" class="form-control" id="login">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password">
            </div>
            <button type="submit" class="btnwidget">Submit</button>
          </form>
           <button class="btnwidget login">Login</button>
         </div>
       </div>
     </div>
      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4">
            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2>Heading</h2>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2>Heading</h2>
            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2>Heading</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

      </div><!-- /.container -->


      <?php 
         include "footer.php";
      ?>