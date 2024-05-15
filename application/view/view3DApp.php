<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
 
    <!-- X3dom -->
    <link rel='stylesheet' type='text/css' href='css/x3dom.css'>
    
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="css/all.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <script src="https://kit.fontawesome.com/4d12fb354e.js" crossorigin="anonymous"></script>

    <!-- Use a light box to view images in the gallery -->
    <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.min.css">

    <title>Coca Cola 3D App</title>
  </head>
  <body id="bodyColor">
    <!-- Background Image Section -->
    <div style="position: fixed; top: 0; left: 0; width: 100%; height: 100vh; z-index: -10; background: url('assets/images/coke-bg.jpg') no-repeat center center / cover;">
    </div>
    <nav id="headerColor" class="navbar navbar-expand-sm navbar-dark" style="background-color: rgba(0, 0, 0, 0.8);">
      <div class="container-fluid">  
        <!-- Brand -->
        <div class="logo">
          <a class="navbar-brand" href="index.php">
          <h3>The</h3>
          <h1>1</h1>
          <h1>oca</h1>
          <h2>Cola</h2>
          <h3>Company</h3>
          <p>Refreshing the world, one story at a time</p>
          </a>
        </div> 
        
        <!-- Collapsible Navbar Menu Icon -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <!-- Link Menu item button to the links class navbar-collapse selector -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Links -->
            <ul class="navbar-nav ml-auto"> <!-- Use mx-auto to align centre, default to left or use mr-auto -->
              <li class="nav-item">
                <a class="nav-link active" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a id="navAbout" class="nav-link" href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="About Web 3D Applications" data-content="3D Apps is a final year and postgraduate module ...">About</a>
              </li>
              
              <!-- navModels -->
              <li class="nav-item">
                <a id="navModels" class="nav-link"  href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="X3D Models" data-content="There are three X3D models: Coke, Sprite and Fanta">Models</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="modal" data-target="#myModal">Contact</a>
              </li>
            </ul>
        </div>
      </div>
    </nav>
    
    <div class="container-fluid main_contents">
      <div id="home">
        <div class="row"> <!-- Main_3D Image or Carousel -->
          <div class ="col-sm-12">
            <div id="main_3d_image">
                <div id="main_text" class="col-xs-12 col-sm-4">
                  <div id="title_home"></div>
                  <div id="subTitle_home"></div>
                  <a href="https://www.coca-cola.co.uk/brands"><button class="btn btn-success" on-click><div id="description_home"></div></button></a>
                </div> 
            </div> 
          </div>  
        </div> 

        <div class="row">
          <!-- Coca Cola Column -->
          <div class="col-sm-4">
            <div class="card">
              <a href="assets/images/render_images/coke.jpg" data-fancybox data-caption="My 3D Coke Can Render">
                <img class="card-img-top img-fluid img-thumbnail" src="assets/images/site_images/coca_cola.jpg" alt="Coca Cola">
              </a>
              <div class="card-body">
                <div id="title_left" class="card-title drinksText"></div>
                <div id="subTitle_left" class="card-subtitle drinksText"></div>
                <div id="description_left" class="card-text drinksText"></div>   
                <a href="https://www.coca-cola.com/gb/en/brands/coca-cola-original-taste" class="btn btn-success btn-responsive">Find out more ...</a>          
              </div>
            </div>
          </div>
        
          <!-- Sprite Column -->
          <div class="col-sm-4">
            <div class="card">
              <a href="assets/images/render_images/sprite.jpg" data-fancybox data-caption="My 3D Sprite Bottle Render" class="img-narrow">
                <img class="card-img-top img-fluid img-thumbnail" src="assets/images/site_images/sprite.jpg" alt="Sprite">
              </a>
              <div class="card-body">
                <div id="title_centre" class="card-title drinksText"></div>
                <div id="subTitle_centre" class="card-subtitle drinksText"></div>
                <div id="description_centre" class="card-text drinksText"></div>   
                <a href="https://www.coca-cola.com/gb/en/brands/sprite" class="btn btn-success btn-responsive">Find out more ...</a>
              </div>
            </div>
          </div>
            
          <!-- Fanta Column -->
          <div class="col-sm-4">
            <div class="card">
              <a href="assets/images/render_images/fanta.jpg" data-fancybox data-caption="My 3D Fanta Can Render" class="thumbnail">
                <img class="card-img-top img-fluid img-thumbnail" src="assets/images/site_images/fanta.jpg" alt="Fanta">
              </a>
              <div class="card-body">
                <div id="title_right" class="card-title drinksText"></div>
                <div id="subTitle_right" class="card-subtitle drinksText"></div>
                <div id="description_right" class="card-text drinksText"></div>   
                <a href="https://www.coca-cola.com/gb/en/brands/fanta" class="btn btn-success btn-responsive">Find out more ...</a>
              </div>
            </div>
          </div>    
        </div> 
      </div>
      
      <!-- About page block element -->
      <div id="about" >
        <div class="row" style="background-color: rgba(200,0, 0, 0.8);">
          <h2>Total Beverage Company</h2><br>
          <h3>The Coca-Cola Company (NYSE: KO) is a total beverage company with products sold in more than 200 countries and territories.</h3>
        </div>  
      </div> <!-- End home page -->

      <!-- Start X3D models and 3D Image Gallery -->
      <div id="models">
        <!-- Row to hold two cards to hold 1) the X3D model, and 2) the gallery-->
        <div class="row">
            <!-- X3D Models — Place 4 models in here for the assignment -->
            <div class="col-sm-8">
                <div class="card text-left">
                    <div class="card-header">
                      <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                          <a id="navCoke" class="nav-link active" href="#" onclick="selectCoke();">Coke</a>
                        </li>
                        <li class="nav-item">
                          <a id="navSprite" class="nav-link" href="#" onclick="selectSprite();">Sprite</a>
                        </li>
                        <li class="nav-item">
                          <a id="navFanta" class="nav-link" href="#" onclick="selectFanta();">Fanta</a>
                        </li>
                      </ul>
                    </div>  
                    <div class="card-body">
                    <!-- Coke X3D model -->
                    <div id="coke">
                        <div id="x3dModelTitle_coke" class="card-title drinksText"></div>
                        <!-- Place the X3D code here -->
                        <div class="model3D">
                            <x3d id="modelCoke">
                                <scene>
                                    <inline id="coke_x3d" nameSpaceName="modelCoke" mapDEFToID="true" onclick="animateModel();" url="assets/x3d/coke.x3d" > </inline>
                                </scene>
                            </x3d>
                        </div> 
                        <div id="x3dCreationMethod_coke" class="card-text drinksText"></div>
                    </div>
                    <!-- Sprite X3D model -->
                    <div id="sprite" style="display:none;">
                        <div id="x3dModelTitle_sprite" class="card-title drinksText"></div>
                        <!-- Place the X3D code here -->
                        <div class="model3D">
                            <x3d id="modelSprite">
                                <scene>
                                    <inline id="sprite_x3d" nameSpaceName="modelSprite" mapDEFToID="true" onclick="animateModel();" url="assets/x3d/sprite.x3d"> </inline>
                                </scene>
                            </x3d>
                        </div> 
                        <div id="x3dCreationMethod_sprite" class="card-text drinksText"></div>
                    </div>
                    <!-- Fanta X3D model -->
                    <div id="fanta" style="display:none;">
                        <div id="x3dModelTitle_fanta" class="card-title drinksText"></div>
                        <!-- Place the X3D code here -->
                        <div class="model3D">
                            <x3d id="modelFanta">
                                <scene>
                                  <Transform>
                                    <inline id="fanta_x3d" nameSpaceName="modelFanta" mapDEFToID="true" onclick="animateModel();" url="assets/x3d/fanta.x3d"> </inline>
                                  </Transform>
                                </scene>
                            </x3d>
                        </div> 
                        <div id="x3dCreationMethod_fanta" class="card-text drinksText"></div>
                    </div>
                    <div id="interaction">
                      <div class="camera-btns">
                        <div class="btn-group">
                          <a class="btn btn-sm btn-primary disabled" href="#" id="x3dCameraTitle"></a>
                          <a class="btn btn-sm btn-success" href="#" onclick="cameraFront();">Front</a>
                          <a class="btn btn-sm btn-success" href="#" onclick="cameraBack();">Back</a>
                          <a class="btn btn-sm btn-success" href="#" onclick="cameraLeft();">Left</a>
                          <a class="btn btn-sm btn-success" href="#" onclick="cameraRight();">Right</a>
                          <a class="btn btn-sm btn-success" href="#" onclick="cameraTop();">Top</a>
                          <a class="btn btn-sm btn-success" href="#" onclick="cameraBottom();">Bottom</a>
                        </div>
                        <div id="x3dCameraSubtitle"  class="card-text drinksText"></div>
                      </div>
                      <div class="camera-btns">
                        <div class="btn-group">
                          <a class="btn btn-sm btn-primary disabled" href="#" id="x3dRenderTitle"></a>
                          <a class="btn btn-sm btn-warning" href="#" onclick="wireframe();">Wire</a>
                          <a class="btn btn-sm btn-warning" href="#" onclick="headlight();">Light</a>
                          <a class="btn btn-sm btn-warning" href="#" onclick="changeTexture();">Texture</a>
                        </div>
                        <div id="x3dRenderSubtitle"  class="card-text drinksText"></div>
                      </div>
                      <div class="camera-btns">
                        <div class="btn-group">
                          <a class="btn btn-sm btn-primary disabled" href="#" id="x3dAnimationTitle"></a>
                          <a href="#" class="btn btn-sm btn-secondary" onclick="startAnimation();">Start</a>
                          <a href="#" class="btn btn-sm btn-secondary" onclick="stopAnimation();">Stop</a>
                        </div>
                        <div id="x3dAnimationSubtitle"  class="card-text drinksText"></div>
                      </div>
                    </div>  
                  </div>  
                </div>
            </div>

            <!-- 3D image gallery -->
            <div class="col-sm-4">
                <div class="card text-left">
                    <div class="card-header gallery-header">
                        <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Gallery</a>
                        </li>
                    </div>
                    <div class="card-body">
                        <div class="card-title title_gallery drinksText"></div>
                        <div class="gallery" id="gallery"></div>
                        <div class="card-text description_gallery drinksText"></div>
                    </div>
                </div> <!-- End gallery card -->
            </div> <!-- End gallery column -->
        </div> <!-- End row for X3D Model and Gallery -->
      </div> <!-- End X3D Models and Gallery -->
  

      <!-- Row to hold one card to hold the coke descriptive text, etc.-->
      <div id="cokeDescription" class="row" >
          <div class="col-sm-12">
              <div class="card">
                  <div class="card-body">
                      <div id="title_coke" class="card-title drinksText"></div>
                      <div id="subTitle_coke" class="card-subtitle drinksText"></div>
                      <div id="description_coke" class="card-text drinksText"></div>   
                      <a href="https://www.coca-cola.com/gb/en/brands/coca-cola-original-taste" class="btn btn-success btn-responsive">Visit Coke</a>                 
                  </div>
              </div>
          </div>
      </div> <!-- End coke description contents -->

      <!-- Row to hold one card to hold the sprite descriptive text, etc.-->
      <div id="spriteDescription" class="row" >
          <div class="col-sm-12">
              <div class="card">
                  <div class="card-body">
                      <div id="title_sprite" class="card-title drinksText"></div>
                      <div id="subTitle_sprite" class="card-subtitle drinksText"></div>
                      <div id="description_sprite" class="card-text drinksText"></div>  
                      <a href="https://www.coca-cola.com/gb/en/brands/sprite" class="btn btn-success btn-responsive">Visit Sprite</a>                 
                  </div>
              </div>
          </div>
      </div> <!-- End sprite description contents -->

      <!-- Row to hold one card to hold the fanta descriptive text, etc.-->
      <div id="fantaDescription" class="row" >
          <div class="col-sm-12">
              <div class="card">
                  <div class="card-body">
                      <div id="title_fanta" class="card-title drinksText"></div>
                      <div id="subTitle_fanta" class="card-subtitle drinksText"></div>
                      <div id="description_fanta" class="card-text drinksText"></div>  
                      <a href="https://www.coca-cola.com/gb/en/brands/fanta" class="btn btn-success btn-responisve">Visit Fanta.</a>                 
                  </div>
              </div>
          </div>
        </div> <!-- End fanta description contents -->  
    </div>  


    <!-- Your 3D App footer -->
    <nav id="footerColor" class="navbar navbar-expand-sm footer" style="background-color: rgba(200, 200, 200, 0.8);">
      <div class="container">   
          <div class="navbar-text float-left copyright">
              <p><span class="align-baseline"></span>&copy 2024 Mobile Web 3D Applications | <a href="javascript:changeLook()">Restyle</a> | <a href="javascript:changeBack()">Reset</a></span></p>
          </div>
          <div class="navbar-text social">
                <a href="#"><i class="fab fa-github-square fa-2x fa-pull-right"></i></a>
                <a href="#"><i class="fab fa-google-plus-square fa-2x fa-pull-right"></i></a>
                <a href="#"><i class="fab fa-twitter-square fa-2x fa-pull-right"></i></a>
                <a href="#"><i class="fab fa-facebook-square fa-2x fa-pull-right"></i></a>
          </div>
      </div>
    </nav>  

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">3D App Contact Details</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <p>Jerome Siu, Email: ys458@sussex.ac.uk</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- 
    -->
    <script src="scripts/js/jquery-3.7.1.js"></script>
    <script src="scripts/js/popper.min.js"></script>
    <script src="scripts/js/bootstrap.js"></script>
    <script src="scripts/js/bootstrap.bundle.min.js"></script>

    <!-- <script src="all.js"></script> -->
    <script type='text/javascript' src='scripts/js/x3dom.js'></script> 
    <script type='text/javascript' src='scripts/js/custom.js'></script>

    <!-- JavaScript to swap for SPA and restyle -->
    <script src="scripts/js/swap_restyle.js"></script>

    <!-- JavaScript and PHP based Gallery generator  -->
    <script src="scripts/js/gallery_generator.js"></script>
    
    <!-- JQuery code to get content data from a backend JSON file -->
    <script src="scripts/js/getJsonData.js"></script>

    <!-- JavaScript model interactions -->
    <script src="scripts/js/modelInteractions.js"></script>

    <!--fancyBox3 => http://fancyapps.com/fancybox/3/ -->
    <script src="scripts/js/jquery.fancybox.min.js"></script>

  </body>
</html>
