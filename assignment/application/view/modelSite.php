<!-- Code adapted from module tutorials and www.w3schools.com -->

<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="UTF-8">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="css/bootstrap-4.4.1.css">
  <script src="http://code.jquery.com/jquery-latest.js"></script>
  <script type="text/javascript" src="scripts/gallery_generator.js"></script>
  <link rel='stylesheet' type='text/css' href='css/x3dom.css'>
  <link rel="stylesheet" href="css/all.css">
  <link rel="stylesheet" href="css/custom.css">
  <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.min.css">

  <title> Web 3D Applications Website</title>
   

</head>
<body id="bodyColor">

  <!-- Navbar -->
  <nav id="headerColor" class="navbar sticky-top navbar-expand-sm navbar_model">
    <div class="container-fluid">
      <div class="logo">
        <a class="navbar-brand" href="index.php">
          <h1>3D!Models!Website</h1>
          <p>Showcasing the very best 3D models!</p>
        </a>
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
      </button>


      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php"><u>Home</u></a>
          </li>
        
          <li class="nav-item">
            <a id="navAbout" class="nav-link" href="#" data-toggle="popover" data-trigger="hover"
              data-placement="bottom" title="Gallery!of!Models"
              data-content="Click to view the gallery, MentalRay has been used to make these as realistic as possible!"><u>Gallery</u></a>
          </li>

          <li class="nav-item">
            <a id="navModels" class="nav-link" href="#" data-toggle="popover" data-trigger="hover"
              data-placement="bottom" title="X3D!Models"
              data-content="Click to view the four X3d Models; Sprite Bottle, SNES Contoller, Coffee Mug and a Chair! "><u>Models</u></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="modal" data-target="#contactModal"><u>Details</u></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- First Page -->
  <div class="container-fluid main_contents">
    <div id="home">
      <div class="row">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="assets/images/snes2.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="assets/images/coffeimage5.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="assets/images/chair4.jpg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>

          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      
      <br>
      <br>
      <hr>
      <br> 
      <br>
      <br>
      <div class="container-fluid bg-2 text-center">
        <div class="logo">
          <a class="navbar-brand" style="margin-bottom: 50px; margin-top: 50px;">
            <h1>Ò!!!Welcome!!!Ó<h1>

          </a>
        </div>
        <p>
        <br>  
        <br>
          <br>
          Welcome to this website, created for the 2020 Web 3D module at the University of Sussex.
          <br>This site was built using multiple different technologies, including Bootstrap 4, HTML, CSS, PHP and
          various others.
          <br>The other pages on this site contain a gallery, 3D models and information about the software and techniques used.
          <br>Four different 3D models have been made for this site, a couple using Blender and a couple using 3DS Max.
          <br>All of the code and models can be found on Github, via the links in the footer. 
          <br>
          <br>
          <br>
          <br>
          <br>
        </p>
        <hr>
      </div>
      <div class="container-fluid bg-3 text-center">
      <br>
      <br>
      <br>
        <h1 class="margin">Ò!!!Category!of!3D!Models!!!Ó</h1><br><br>
        <div class="row">
          <div class="col-sm-3">
          <div class="card text-center">
          <div class="card-body">
            <a id="navModels1" type="button" class="btn btn-secondary" style="width: 100%"class="nav-link" href="#" >SNES</a>
            <img class="card-img-top img-fluid img-thumbnail" src="assets/images/site_images/snes.jpg"
              class="img-responsive margin" style="width:100%" alt="Image">
            <p>The SNES is Nintendo's second programmable home console, following the Nintendo Entertainment System (NES).
               The console introduced advanced graphics and sound capabilities compared with other systems at the time. 
               The system was designed to accommodate the ongoing development of a variety of enhancement chips integrated 
               in game cartridges to be competitive into the next generation.(Wikipedia)</p>
          </div>
          </div>
          </div>

          <div class="col-sm-3">
          <div class="card text-center">
          <div class="card-body">
            <a id="navModels2" type="button"  class="btn btn-secondary" style="width: 100%" class="nav-link"  href="#">Sprite</a>
            <img class="card-img-top img-fluid img-thumbnail" src="assets/images/site_images/spriteglass.jpg"
              class="img-responsive margin" style="width:100%" alt="Image">
            <p>Sprite is a clear soda with a lemon-lime flavor and known for its green color branding. Sprite is caffeine free,
               crisp tasting, and has a wide fan base since its introduction in 1961. Sprite is often thought to be a close competitor 
               to 7 Up. Sprint as a wide fan base, and one that has changed a bit in demographics over the years. Nonetheless, Sprite has 
               managed to stay relevant as one of the most popular sodas in the world. (snackhistory.com)</p>
          </div>
          </div>
          </div>

          <div class="col-sm-3">
          <div class="card text-center">
          <div class="card-body">
            <a id="navModels3" type="button" class="btn btn-secondary" style="width: 100%" class="nav-link"  href="#">Chair</a>
            <img class="card-img-top img-fluid img-thumbnail" src="assets/images/site_images/chair.png"
              class="img-responsive margin" style="width:100%" alt="Image">
            <p>One of the basic pieces of furniture, a chair is a type of seat. Its primary features are two pieces of a durable material,
               attached as back and seat to one another at a 90° or slightly greater angle, with usually the four corners of the horizontal 
               seat attached in turn to four legs—or other parts of the seat's underside attached to three legs or to a shaft about which a 
               four-arm turnstile on rollers can turn.<br>(Wikipedia)</p>
          </div>
          </div>
          </div>

          <div class="col-sm-3">
          <div class="card text-center">
          <div class="card-body">
            <a id="navModels4" type="button"  class="btn btn-secondary"  style="width: 100%"  class="nav-link"  href="#">Coffee</a>
            <img class="card-img-top img-fluid img-thumbnail" src="assets/images/site_images/coffee.jpg"
              class="img-responsive margin" style="width:100%" alt="Image">
            <p>The history of coffee dates back to the 15th century, and possibly earlier with a number of reports and legends surrounding its
               first use. The earliest substantiated evidence of either coffee drinking or knowledge of the coffee tree is from the early 15th 
               century, in the Sufi monasteries of Yemen,[1] spreading soon to Mecca and Cairo.  By the 16th century, it had reached the rest of
                the Middle East, South India, Persia, Turkey, and northern Africa. (Wikipedia)</p>
          </div>
          </div>
          </div>
        </div>
      </div>
    </div>  

    <!-- Second Page -->
    <div id="about">
      
      <div class="col-sm-12">
        <div class="card text-left">
            <div class="card-body">
                <div class="card-title title_gallery modelText"></div>
                <div class="gallery" id="gallery"></div>
                <div class="card-text description_gallery modelText"></div>
            </div>
        </div> 
      </div> 
    </div>

    <!-- Thrid Page -->
    <div id="models">

     
      <div class="row">
       
        <div class="col-sm-4">

          <div class="card text-left">
            <div class="card-body">
            <div class="btn-group btn-group-justified" style="width:100%">
              <a id="navSprite" href="#" class="btn btn-mdb-color"style="background-color: #17a2b8;"><u>Sprite</u></a>
              <a id="navSnes"href="#" class="btn btn-mdb-color" style="background-color:#20c997;"><u>SNES</u></a>
              <a id="navCoffee" href="#" class="btn btn-mdb-color" style="background-color: #bdc2c7;"><u>Coffee</u></a>
              <a id="navChair"href="#" class="btn btn-mdb-color" style="background-color: #e05260be;"><u>Chair</u></a>
            </div>
        </div>

            <div id="one">
            <div class="card-body">

              <div class="btn-group-vertical" style="width: 100%; margin-bottom: 10px;">
                <a href="#" type="button" class="btn btn-outline-info waves-effect" onclick="spin();">Rotate</a>
                <a href="#" type="button" class="btn btn-outline-info waves-effect" onclick="stopRotation();"">Stop</a>
              </div>



              <div class="btn-group-vertical" style="width: 100%;">
                <a class="btn btn-outline-info waves-effect" href="#" onclick="cameraFront();">Front</a>
                <a class="btn btn-outline-info waves-effect" href="#" onclick="cameraBack();">Back</a>
                <a class="btn btn-outline-info waves-effect" href="#" onclick="cameraLeft();">Left</a>
                <a class="btn btn-outline-info waves-effect" href="#" onclick="cameraRight();">Right</a>
              </div>


              <div class="btn-group-vertical" style="width: 100%; margin-top: 10px;">
                <button type="button" class="btn btn-outline-info waves-effect" onclick="wireframe();">Wireframe</button>
                <button type="button" class="btn btn-outline-info waves-effect" onclick="poly();">Poly</button>
              </div>

              
              </div>
            </div>

            <div id="two">
              <div class="card-body">
  
                <div class="btn-group-vertical" style="width: 100%; margin-bottom: 10px;">
                  <a href="#" type="button" class="btn btn-outline-success waves-effect" onclick="spinn();">Rotate</a>
                  <a href="#" type="button" class="btn btn-outline-success waves-effect" onclick="stopRotationn();"">Stop</a>
                </div>
  
  
  
                <div class="btn-group-vertical" style="width: 100%;">
                  <a class="btn btn-outline-success waves-effect" href="#" onclick="cameraFront2();" >Front</a>
                  <a class="btn btn-outline-success waves-effect" href="#" onclick="cameraBack2();"  >Back</a>
                  <a class="btn btn-outline-success waves-effect" href="#" onclick="cameraLeft2();"  >Left</a>
                  <a class="btn btn-outline-success waves-effect" href="#" onclick="cameraRight2();" >Right</a>
                </div>
  
  
                <div class="btn-group-vertical" style="width: 100%; margin-top: 10px;">
                <button type="button" class="btn btn-outline-success waves-effect" onclick="wireframe2();">Wireframe</button>
                <button type="button" class="btn btn-outline-success waves-effect" onclick="poly2();">Poly</button>
                </div>
  
               
              
                </div>
              </div>

              <div id="three">
                <div class="card-body">
    
                  <div class="btn-group-vertical" style="width: 100%; margin-bottom: 10px;">
                    <a href="#" type="button" class="btn btn-outline-secondary waves-effect" onclick="drink();">Drink</a>
                    <a href="#" type="button" class="btn btn-outline-secondary waves-effect" onclick="stopDrink();"">Stop</a>
                  </div>
    
    
    
                  <div class="btn-group-vertical" style="width: 100%;">
                    <a class="btn btn-outline-secondary waves-effect" href="#" onclick="cameraFront3();">Front</a>
                    <a class="btn btn-outline-secondary waves-effect" href="#" onclick="cameraBack3();" >Back</a>
                    <a class="btn btn-outline-secondary waves-effect" href="#" onclick="cameraLeft3();" >Left</a>
                    <a class="btn btn-outline-secondary waves-effect" href="#" onclick="cameraRight3();">Right</a>
                  </div>
    
    
                  <div class="btn-group-vertical" style="width: 100%; margin-top: 10px;">
                  <button type="button" class="btn btn-outline-secondary waves-effect" onclick="wireframe3();">Wireframe</button>
                  <button type="button" class="btn btn-outline-secondary waves-effect" onclick="poly3();">Poly</button>
                  </div>
    
                  
                  </div>
                </div>

                <div id="four">
                  <div class="card-body">
      
                    <div class="btn-group-vertical" style="width: 100%; margin-bottom: 10px;">
                      <a href="#" type="button" class="btn btn-outline-danger waves-effect" onclick="rotate();">Rotate</a>
                      <a href="#" type="button" class="btn btn-outline-danger waves-effect" onclick="stopRotate();"">Stop</a>
                    </div>
      
      
      
                    <div class="btn-group-vertical" style="width: 100%;">
                      <a class="btn btn-outline-danger waves-effect" href="#" onclick="cameraFront4();" >Front</a>
                      <a class="btn btn-outline-danger waves-effect" href="#" onclick="cameraBack4();" >Back</a>
                      <a class="btn btn-outline-danger waves-effect" href="#" onclick="cameraLeft4();" >Left</a>
                      <a class="btn btn-outline-danger waves-effect" href="#" onclick="cameraRight4();" >Right</a>
                    </div>
      
      
                    <div class="btn-group-vertical" style="width: 100%; margin-top: 10px;">
                    <button type="button" class="btn btn-outline-danger waves-effect" onclick="wireframe4();">Wireframe</button>
                    <button type="button" class="btn btn-outline-danger waves-effect" onclick="poly4();">Poly</button>
                    </div>
      
                    
                    </div>
                  </div>
            </div>


          </div> 
        
        
        <div class="col-sm-8">
          <div class="card text-left">
            <div class="card-header">
              <ul class="nav nav-tabs card-header-tabs">
                <h2>!!Interact!!with!!the!!3D!!model!!</h2>
            </div>
            <div class="card-body">
              <div id="sprite">
                <div id="x3dModelTitle_sprite" class="card-title modelText"></div>
               
                <div class="model3D">
                  <x3d id="model">
                    <scene>
                      <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="assets/x3d/SpriteFinal.x3d">
                      </inline>
                    </scene>
                  </x3d>
                </div>
                <div id="x3dCreationMethod_sprite" class="card-text modelText"></div>
              </div>
             
              <div id="snes" style="display:none;">
                <div id="x3dModelTitle_snes" class="card-title modelText"></div>
                
                <div class="model3D">
                  <x3d id="model2">
                    <scene>
                      <inline nameSpaceName="model2" mapDEFToID="true" onclick="animateModel2();"
                        url="assets/x3d/SnesFinal.x3d"> </inline>
                    </scene>
                  </x3d>
                </div>
                <div id="x3dCreationMethod_snes" class="card-text modelText"></div>
              </div>
             
              <div id="coffee" style="display:none;">
                <div id="x3dModelTitle_coffee" class="card-title modelText"></div>
                
                <div class="model3D">
                  <x3d id="model3">

                    <scene>
                      <inline nameSpaceName="model3" mapDEFToID="true" onclick="animateModel3();"
                        url="assets/x3d/CoffeeFinal.x3d"> </inline>
                    </scene>
                  </x3d>
                </div>
                <div id="x3dCreationMethod_coffee" class="card-text modelText"></div>
              </div>

              <div id="chair" style="display:none;">
                <div id="x3dModelTitle_chair" class="card-title modelText"></div>
               
                <div class="model3D">
                  <x3d id="model4">
                    <scene>
                      <inline nameSpaceName="model4" mapDEFToID="true" onclick="animateModel4();"
                        url="assets/x3d/ChairFinal.x3d"> </inline>
                    </scene>
                  </x3d>
                </div>
                <div id="x3dCreationMethod_chair" class="card-text modelText"></div>
              </div>
            </div>
          </div>
        </div>

       
      </div>
    </div> 

   
    <div id="interaction" class="row">
     
      <div class="col-sm-4">
        <div class="card text-center">
         
          <div class="card-body">
            <div class="card-Title x3dCamera_Subtitle modelText" style="margin-bottom:30px">
              <h2>Ò!!Modeling!!Software!!used!!Ó </h2>
            </div>
            <div id="spriteDescription">
            <div class="row">
              <img class="img-responsive margin" src='assets/images/gallery_images/<?php echo $image3D_1?>.png' style="width:100%" alt="Image">
              </div>
              </div>


              <div id="snesDescription">
            <div class="row">
              <img class="img-responsive margin" src='assets/images/gallery_images/<?php echo $image3D_1?>.png' style="width:100%" alt="Image">
              <img class="img-responsive margin" src='assets/images/gallery_images/<?php echo $image3D_2?>.png' style="width:100%" alt="Image">
           
              </div>
              </div>


              <div id="coffeeDescription">
            <div class="row">
              <img class="img-responsive margin" src='assets/images/gallery_images/<?php echo $image3D_1?>.png' style="width:100%" alt="Image">
              <img class="img-responsive margin" src='assets/images/gallery_images/<?php echo $image3D_2?>.png' style="width:100%" alt="Image">
              </div>
              </div>


              <div id="chairDescription">
            <div class="row">
              <img class="img-responsive margin" src='assets/images/gallery_images/<?php echo $image3D_1?>.png' style="width:100%" alt="Image">
              </div>
              </div>
            </div>
           
            </div>
          </div>

          
        
      
      
      <div class="col-sm-8">

        <div id="spriteDescriptionn" class="row">
          <div class="col-sm-12">
            <div class="card">
              <div class="card-body">
                <div id="title_sprite" class="card-title modelText"></div>
                <div id="subTitle_sprite" class="card-subtitle modelText"></div>
                <div id="description_sprite" class="card-text modelText"></div>
                <p>Sprite is a colorless, lemon and lime-flavored soft drink created by The Coca-Cola Company. It was
                  first developed in West Germany in 1959 as Fanta Klare Zitrone and was introduced in the United States
                  under the current brand name Sprite in 1961 as a competitor to 7 Up. (Wikipedia). This model was created using 
                  3Ds Max. The tutorial from the lab sessions was used, however, different 
                  techniques were used for some elements. For example, the dimples down the side of the bottle, these were implemented 
                  using a boolean modifier on lots of small spheres placed around the bottle. 
                  </p>
                <a href="https://en.wikipedia.org/wiki/Sprite_(drink)" class="btn btn-primary btn-responsive" style="float:right">Find out more about Sprite!</a>
              </div>
            </div>
          </div>
        </div> 

        
        <div id="snesDescriptionn" class="row">
          <div class="col-sm-12">
            <div class="card">
              <div class="card-body">
                <div id="title_snes" class="card-title modelText"></div>
                <div id="subTitle_snes" class="card-subtitle modelText"></div>
                <div id="description_snes" class="card-text modelText"></div>
                <p>The Super Nintendo Entertainment System (SNES),also known as the Super NES or Super
                  Nintendo, is a 16-bit home video game console developed by Nintendo that was released in 1990 in
                  Japan and South Korea, 1991 in North America, 1992 in Europe and Australasia (Oceania), and 1993 in
                  South America. (Wikipedia) 
                  <br>
                  <br>
                  This model was created using Blender. I used the following tutorial: <a href= "https://www.youtube.com/watch?v=1J1kCNYHL7I">Youtube Link</a>
                  <br>
                  <br>
                  This gave me the core idea, alowing me to adapt it slightly. As Blender allows you to export straight to X3D, I though this would make things much simpler.
                  This was not the case, I had issues with the materials, despite the face they were simple colours and textures. The soloution was to export to .abc (Alembic), I could
                  then drag and drop the file into my 3Ds Max scene. Here I was able to add materials, cameras and animations to finish the model.
                  </p>
                <a href="https://en.wikipedia.org/wiki/Super_Nintendo_Entertainment_System" class="btn btn-primary btn-responsive" style="float:right">Find out more about SNES!</a>
              </div>
            </div>
          </div>
        </div> 
        
        <div id="coffeeDescriptionn" class="row">
          <div class="col-sm-12">
            <div class="card">
              <div class="card-body">
                <div id="title_coffee" class="card-title modelText"></div>
                <div id="subTitle_coffee" class="card-subtitle modelText"></div>
                <div id="description_coffee" class="card-text modelText"></div>
                <p>The cappuccino is served in its own cup, a 171 ml porcelain cup served on an accompanying saucer. The
                  size of the cup reflects the traditional cappuccino, a drink with a 1:1:1 ratio. 57 ml espresso, 57 ml
                  steamed milk, 57 ml integrated foam.
                  <br>
                  <br>
                  This model was also made in Blender. There are various small details that may go unnoticed, however, I felt they were necessary 
                  as they make the whole thing appear more realistic. The small 'notch' on the saucer is a good example of this, it isn't immediately 
                  noticeable however it subtly gives an element of realism. Originally, the mug was made of glass, however, X3D only supports simple textures 
                  so, a white porcelain effect was the best I could do. Other materials can been seen in the gallery.

                  <br>
                  <br>
                  The process of converting this model to X3D was exactly the same as the SNES controller. 
                  </p>
                <a href="https://en.wikipedia.org/wiki/Cappuccino" class="btn btn-primary btn-responisve" style="float:right">Click here to see more!</a>
              </div>
            </div>
          </div>
        </div>

        <div id="chairDescriptionn" class="row">
          <div class="col-sm-12">
            <div class="card">
              <div class="card-body">
                <div id="title_chair" class="card-title modelText"></div>
                <div id="subTitle_chair" class="card-subtitle modelText"></div>
                <div id="description_chair" class="card-text modelText"></div>
                <p>Chairs were in existence since at least the Early Dynastic Period of Egypt (c. 3100 BC). They were
                  covered with cloth or leather, were made of carved wood, and were much lower than today's chairs –
                  chair seats were sometimes only 10 inches (25 cm) high.[12] In ancient Egypt chairs appear to have
                  been of great richness and splendor.(Wikipedia)
                  <br>
                  <br>
                  This model was created in 3Ds Max, making user of the following tutorial: <a href= "https://www.youtube.com/watch?v=w_unzLDGj9U">Youtube Link</a>.
                  This was exported as VRML and converted to X3D using the InstantReality converter.
                  </p>
                <a href="https://en.wikipedia.org/wiki/Chair" class="btn btn-primary btn-responisve" style="float:right">Click here to see more!</a>
              </div>
            </div>
          </div>
        </div> 
      </div>
     

    </div> 

   



  </div> 

 
  <nav id="footerColor" class="navbar navbar-expand-sm footer">
    <div class="container-fluid">
      <div class="navbar-text float-centre email">
        <p><span class="align-baseline float-center">dlp25@sussex.ac.uk | 
          
        <a href="javascript:changeLook()">Colour</a>
         | 
        <a href="javascript:changeBack()">Reset</a>
        |
        <a href="https://github.com/dlpayne/3dAppAssignment" target="_blank">Github</a> 
        |
        <a href="https://github.com/dlpayne/3dAppAssignment" target="_blank">Models</a>
        |
      </span></p>
      </div>
    </div>
  </nav>

 
  <div class="modal fade" id="contactModal">
    <div class="modal-dialog">
      <div class="modal-content">

      
        <div class="modal-header">
          <h4 class="modal-title">Further Deails</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

       
        <div class="modal-body">
          <p>As a result of Covid-19, my access to a Windows machine was limited. My initial plan was to incorporate an SQL Database to store 
            some data. Software issues caused problems and as a result of this I decided to leave this element out. Data, such as images, are accessed using PHP.<br> Two of the models were 
            created using Blender and two were created with 3DS Max. Models created in Blender were exported as .abc (Alembic) files. These 
            were then placed into the 3DS Max scene where the animations and VRML helpers could be implemented. The models were finally
            exported to VRML and converted to X3D.<br>
            To create the realistic looking images, found in the image gallery, I used MentalRay renderer. For the background of the images I created a plane 
            and a wall, making sure to apply a chamfer to the parts that join, creating a smooth connection. I then applied various lights to get the effect
            I wanted. I am fairly pleased with the results.</p>
        </div>

       
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>

  
  <script src="scripts/js/jquery-3.4.1.js"></script>
  <script src="scripts/js/popper.min.js"></script>
  <script src="scripts/js/bootstrap-4.4.1.js"></script>
  <script src='scripts/js/x3dom.js'></script>
  <script src="scripts/js/custom.js" crossorigin="anonymous"></script> 
  <script src="scripts/js/swap_restyle.js"></script> 
  <script src="scripts/js/gallery_generator.js"></script>
  <script src="scripts/js/getJsonData.js"></script>
  <script src="scripts/js/modelInteractions.js"></script>
  <script src="scripts/js/jquery.fancybox.min.js"></script>

</body>
</html>