<?php
require_once("inc/init.inc.php");
require_once("inc/header.php");
include_once("inc/nav.php");
?>
    
        <!-- Menu Portfolio -->   
        <section class="headerPortfolio">
            <div class="container">
                <div class="row"> 
                    <div class="col-sm-12" "navPortfolio">
                        <ul class="menuPortfolio">
                            <div class="row"> 
                                <div class="col-md-3 col-sm-6"> 
                                    <li><a href="#web">Web</a></li>
                                </div>
                                <div class="col-md-3 col-sm-6"> 
                                    <li><a href="#edition">Edition</a></li>
                                </div>
                                <div class="col-md-3 col-sm-6"> 
                                    <li><a href="#identite">Identité</a></li>
                                </div>
                                <div class="col-md-3 col-sm-6"> 
                                    <li><a href="#matteP">Matte-painting</a></li>
                                </div>
                            </div>
                        </ul>               
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Section Portfolio --> 
        <section id="Portfolio" class="col-xs-12">
            <div class="container">
                <div class="row">
                    <!-- Section Web -->
                    <div class="col-sm-12" "portfolioWeb">
                        <h2 id="web">Web</h2>
                            <div class="row"> 

                            <?php
                                $resultat = $pdo->query("SELECT * FROM portfolio WHERE categorie = 'web'");

                                for($i = 1; $i < $resultat->rowCount(); $i++)
                                {
                                    $legend = $resultat->fetch(PDO::FETCH_ASSOC);
                                    echo '<div class="col-md-3 col-sm-6"> 
                                    <img id="myImg" class="img-responsive thumbnail" src="img/web/w' . $i . '.jpg" alt="' . $legend['description'] . '" class="img-responsive">
                                    </div>
                                    <div id="myModal" class="modal">
                                        <span class="close">&times;</span>
                                        <img class="modal-content" id="img' . $i . '">
                                        <div id="caption"></div>
                                    </div>';
                                }
                                ?>

                        <!--    <div class="col-md-3 col-sm-6"> 
                                    <img id="myImg" class="img-responsive thumbnail" src="img/web/w1.jpg" alt="codage page apple" class="img-responsive">
                                </div>
                                <div class="col-md-3 col-sm-6"> 
                                    <img class="img-responsive thumbnail" src="img/web/w2.jpg" alt="Design Pause café tea time home" class="img-responsive">
                                </div>  
                                <div class="col-md-3 col-sm-6">   
                                    <img class="img-responsive thumbnail" src="img/web/w3.jpg" alt="Design Pause café tea time" class="img-responsive">
                                </div>  
                                <div class="col-md-3 col-sm-6">   
                                    <img class="img-responsive thumbnail" src="img/web/w4.jpg" alt="Création Wordpress Paris sur Vins" class="img-responsive">
                                </div>  
                                <div class="col-md-3 col-sm-6">   
                                    <img class="img-responsive thumbnail" src="img/web/w5.jpg" alt="Design application laboratoires Chugai" class="img-responsive">
                                </div>  
                                <div class="col-md-3 col-sm-6">   
                                    <img class="img-responsive thumbnail" src="img/web/w6.jpg" alt="Design application laboratoires Roche - Chugai" class="img" class="img-responsive">
                                </div>   
                                <div class="col-md-3 col-sm-6"> 
                                    <img class="img-responsive thumbnail" src="img/webw7.jpg" alt="Design application Novartis Lucentis">
                                </div>  -->
                            </div>  
                        <hr>
                    </div>

                    <!-- Section Edition --> 
                    <div class="col-sm-12" "portfolioEdition">
                        <h2 id="edition">Edition</h2>
                        <div class="row">
                            <div class="col-md-3 col-sm-6 col-sx-12"><img src="img/web/w1.jpg" alt="" class="img"></div>
                            <div class="col-md-3 col-sm-6 col-sx-12"><img src="img/web/w2.jpg" alt="" class="img"></div>
                            <div class="col-md-3 col-sm-6 col-sx-12"><img src="img/web/w3.jpg" alt="" class="img"></div>
                            <div class="col-md-3 col-sm-6 col-sx-12"><img src="img/web/w4.jpg" alt="" class="img"></div>
                            <div class="col-md-3 col-sm-6 col-sx-12"><img src="img/web/w5.jpg" alt="" class="img"></div>
                            <div class="col-md-3 col-sm-6 col-sx-12"><img src="img/web/w6.jpg" alt="" class="img"></div>
                            <div class="col-md-3 col-sm-6 col-sx-12"><img src="img/web/w7.jpg" alt="" class="img"></div>
                            
                    </div>
                        <hr>
                    </div>
                
                    <!-- Section Identité --> 
                    <div class="col-sm-12" "portfolioIdentite">
                        <h2 id="identite">Identité</h2>
              
                        <hr>
                    </div>

                <!-- Section Matte-painting --> 
                    <div class="col-sm-12" "portfolioMatte">
                        <h2 id="matteP">Matte-painting</h2>
                            
                        <hr>
                    </div>
                 
                </div>  <!-- end div row -->
            </div>  <!-- end div container -->
        </section> <!-- end section portfolio -->
     
        
        <button><a href="#top"><i class="glyphicon glyphicon-menu-up color" aria-hidden="true"></i></a></button>
        
        
 <!-- --------------------------------- JS POPUP MODAL-------------------------------------- -->

    <script>
        // document.addEventListener("DOMContentLoaded", function() 
        // {
            // Get the modal
        
    

            var modal = document.getElementById('myModal');

            // Get the image and insert it inside the modal - use its "alt" text as a caption
            var img = document.getElementById('myImg');

        for (var i = 1; i < 7; i++) {

            var modalImg = document.getElementById("img"+i);
            console.info(modalImg);
            var captionText = document.getElementById("caption");
            img.onclick = function(){
                modal.style.display = "block";
                modalImg.src = this.src;
                console.info(modalImg.src);
                captionText.innerHTML = this.alt;
            }

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];

            // When the user clicks on <span> (x), close the modal
            span.onclick = function() { 
                modal.style.display = "none";
            }
        } 
        // });   
    </script>







 <!-- ----------------------------------------------------------------------- -->

<?php
require_once("inc/footer.php");
?>
    
    
    
      














