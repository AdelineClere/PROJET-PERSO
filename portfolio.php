<?php
require_once("inc/init.inc.php");
require_once("inc/header.php");
include_once("inc/nav.php");
?>
    


        <!-- Menu Portfolio -->   
        <section class="headerPortfolio">
            <div class="container-fluid">
                <div class="row"> 
                    <div class="col-sm-12 navPortfolio parallax">
                        <div class="container">
                            <ul class="menuPortfolio animated bounceInLeft">
                                <div class="row"> 
                                    <div class="col-sm-3 col-xs-6 col"> 
                            <!--    <div class="col-sm-3 col-sm-push-1 col-xs-6 col-xs-push-1">     -->
                                    <li><a href="#web">Web<br>-</a></li>
                                    </div>
                                    <div class="col-sm-3 col-xs-6 col"> 
                                        <li><a href="#edition">Edition<br>-</a></li>
                                    </div>
                                    <div class="col-sm-3 col-xs-6 col"> 
                                        <li><a href="#identite">Identité<br>-</a></li>
                                    </div>
                                    <div class="col-sm-3 col-xs-6 col"> 
                                        <li><a href="#matteP">Matte-<br>painting</a></li>
                                    </div>
                                </div>
                            </ul>  
                        </div>             
                    </div>
                </div>
            </div>
        </section>

     
        <!-- Section Portfolio --> 
        <section id="Portfolio" class="col-xs-12">
            <div class="container">
                <div class="row">
                
                    <!-- Section Web - Images used to open the lightbox -->
                    <div class="col-sm-12 portfolioWeb">
                        <h2 id="web">Web</h2>
                        <!--    <p class="pWeb">
                            Intégration HTML 5 / CSS 3 | Responsive Web Design (mobile) | Bootstrap | JavaScript, Jquery | CMS WordPress | Base de données MySQL | PHP procédure et orienté objet | Ajax | Synfonie
                            </p>    -->
                            <div class="jauge"> 
                                <div class="col-sm-6 col-xs-12">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-warning2" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                        <p class="langage">HTML</p>   
                                        </div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-warning2" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                        <p class="langage">css</p>
                                        </div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-warning2" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                        <p class="langage">Bootstrap</p> 
                                        </div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-warning2" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                        <p class="langage">Javascript</p>
                                        </div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-warning2" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                        <p class="langage">jQuery</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-xs-12 ">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-warning2" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                        <p class="langage">Wordpress</p>
                                        </div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-warning2" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                        <p class="langage">MySql</p>
                                        </div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-warning2" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                        <p class="langage">PHP + PHPoo</p>
                                        </div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-warning2" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                        <p class="langage">Ajax</p> 
                                        </div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-warning2" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                                        <p class="langage">Symfonie</p>
                                        </div>
                                        <br>
                                    </div>
                                </div>
                            </div>  

                            <div class="row">
                                <div class="col-md-3 col-sm-6 vignettes">
                                    <img class="img-responsive thumbnail" src="img/web/w1.jpg" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
                                </div>
                                <div class="col-md-3 col-sm-6 vignettes">
                                    <img class="img-responsive thumbnail" src="img/web/w2.jpg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
                                </div>
                                <div class="col-md-3 col-sm-6 vignettes">
                                    <img class="img-responsive thumbnail" src="img/web/w3.jpg" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
                                </div>
                                <div class="col-md-3 col-sm-6 vignettes">
                                    <img class="img-responsive thumbnail" src="img/web/w4.jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
                                </div>
                                <div class="col-md-3 col-sm-6 vignettes">
                                    <img class="img-responsive thumbnail" src="img/web/w5.jpg" style="width:100%" onclick="openModal();currentSlide(45)" class="hover-shadow cursor">
                                </div>
                                <div class="col-md-3 col-sm-6 vignettes">
                                    <img class="img-responsive thumbnail" src="img/web/w6.jpg" style="width:100%" onclick="openModal();currentSlide(6)" class="hover-shadow cursor">
                                </div>
                                <div class="col-md-3 col-sm-6 vignettes">
                                    <img class="img-responsive thumbnail" src="img/web/w7.jpg" style="width:100%" onclick="openModal();currentSlide(7)" class="hover-shadow cursor">
                                </div>
                                <div class="col-md-3 col-sm-6 vignettes">
                                    <img class="img-responsive thumbnail" src="img/web/w8.jpg" style="width:100%" onclick="openModal();currentSlide(8)" class="hover-shadow cursor">
                                </div>
                            </div>

                            <!-- The Modal/Lightbox -->
                            <div id="myModal" class="modal">
                                <span class="close cursor" onclick="closeModal()">&times;</span>
                                <div class="modal-content">

                                    <div class="mySlides">
                                    <div class="numbertext">1 / 8</div>
                                    <img src="img/web/w1.jpg" style="width:100%">
                                    </div>
                                    <div class="mySlides">
                                    <div class="numbertext">2 / 8</div>
                                    <img src="img/web/w2.jpg" style="width:100%">
                                    </div>
                                    <div class="mySlides">
                                    <div class="numbertext">3 / 8</div>
                                    <img src="img/web/w3.jpg" style="width:100%">
                                    </div>
                                    <div class="mySlides">
                                    <div class="numbertext">4 / 8</div>
                                    <img src="img/web/w4.jpg" style="width:100%">
                                    </div>                                    
                                    <div class="mySlides">
                                    <div class="numbertext">5 / 8</div>
                                    <img src="img/web/w5.jpg" style="width:100%">
                                    </div>  
                                    <div class="mySlides">
                                    <div class="numbertext">6 / 8</div>
                                    <img src="img/web/w6.jpg" style="width:100%">
                                    </div> 
                                    <div class="mySlides">
                                    <div class="numbertext">7 / 8</div>
                                    <img src="img/web/w7.jpg" style="width:100%">
                                    </div> 
                                    <div class="mySlides">
                                    <div class="numbertext">8 / 8</div>
                                    <img src="img/web/w8.jpg" style="width:100%">
                                    </div> 

                                    <!-- Next/previous controls -->                              
                                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                                    <a class="next" onclick="plusSlides(1)">&#10095;</a>

                                    <!-- Caption text -->
                                    <div class="caption-container">
                                    <p id="caption"></p>
                                    </div>

                                        <!-- Thumbnail image controls -->
                                        <div class="col-md-3 col-sm-6">
                                        <img class="demo cursor" src="img/web/w1.jpg" style="width:60%" onclick="currentSlide(1)" alt="Exercice de codage html/css/Bootstrap/jquery">
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                        <img class="demo cursor" src="img/web/w2.jpg" style="width:60%" onclick="currentSlide(2)" alt="Exercice de codage html/css/Bootstrap/jquery">
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                        <img class="demo cursor" src="img/web/w3.jpg" style="width:60%" onclick="currentSlide(3)" alt="Création de mon premier site portfiolio, Wordpress, 2016">
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                        <img class="demo cursor" src="img/web/w4.jpg" style="width:60%" onclick="currentSlide(4)" alt="Création du site Paris sur Vin, Wordpress">
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                        <img class="demo cursor" src="img/web/w5.jpg" style="width:60%" onclick="currentSlide(5)" alt="Conception graphique et fonctionnelle, Salon Pause café tea time">
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                        <img class="demo cursor" src="img/web/w6.jpg" style="width:60%" onclick="currentSlide(6)" alt="Conception graphique et fonctionnelle, Salon Pause café tea time">
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                        <img class="demo cursor" src="img/web/w7.jpg" style="width:60%" onclick="currentSlide(7)" alt="Création graphique et technique (Photoshop), application Novartis-Lucentis">
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                        <img class="demo cursor" src="img/web/w8.jpg" style="width:60%" onclick="currentSlide(8)" alt="Création graphique et technique (Photoshop), application Laboratoire Roche-Shugai">
                                        </div>
                                </div>
                            </div>



                    <!-- Section Edition --> 
                    <div class="col-sm-12 portfolioEdition ">
                    <hr>
                    <h2 id="edition">Edition</h2>
                            <div class="row">               
                                <div class="col-md-3 col-sm-6 vignettes"> 
                                    <img class="img-responsive thumbnail" src="img/ed/e1.jpg" alt="" style="width:100%" onclick="openModal2();currentSlide2(9)" class="hover-shadow cursor">
                                </div>
                                <div class="col-md-3 col-sm-6 vignettes"> 
                                    <img class="img-responsive thumbnail" src="img/ed/e2.jpg" alt="" style="width:100%" onclick="openModal2();currentSlide2(10)" class="hover-shadow cursor">
                                </div> 
                                <div class="col-md-3 col-sm-6 vignettes"> 
                                    <img class="img-responsive thumbnail" src="img/ed/e3.jpg" alt="" style="width:100%" onclick="openModal2();currentSlide2(11)" class="hover-shadow cursor">
                                </div> 
                                <div class="col-md-3 col-sm-6 vignettes"> 
                                    <img class="img-responsive thumbnail" src="img/ed/e4.jpg" alt="" style="width:100%" onclick="openModal2();currentSlide2(12)" class="hover-shadow cursor">
                                </div> 
                                <div class="col-md-3 col-sm-6 vignettes"> 
                                    <img class="img-responsive thumbnail" src="img/ed/e5.jpg" alt="" style="width:100%" onclick="openModal2();currentSlide2(13)" class="hover-shadow cursor">
                                </div> 
                                <div class="col-md-3 col-sm-6 vignettes"> 
                                    <img class="img-responsive thumbnail" src="img/ed/e6.jpg" alt="" style="width:100%" onclick="openModal2();currentSlide2(14)" class="hover-shadow cursor">
                                </div> 
                                <div class="col-md-3 col-sm-6 vignettes"> 
                                    <img class="img-responsive thumbnail" src="img/ed/e7.jpg" alt="" style="width:100%" onclick="openModal2();currentSlide2(15)" class="hover-shadow cursor">
                                </div> 
                                <div class="col-md-3 col-sm-6 vignettes"> 
                                    <img class="img-responsive thumbnail" src="img/ed/e8.jpg" alt="" style="width:100%" onclick="openModal2();currentSlide2(16)" class="hover-shadow cursor">
                                </div> 
                                <div class="col-md-3 col-sm-6 vignettes"> 
                                    <img class="img-responsive thumbnail" src="img/ed/e9.jpg" alt="" style="width:100%" onclick="openModal2();currentSlide2(17)" class="hover-shadow cursor">
                                </div> 
                                <div class="col-md-3 col-sm-6 vignettes"> 
                                    <img class="img-responsive thumbnail" src="img/ed/e10.jpg" alt="" style="width:100%" onclick="openModal2();currentSlide2(18)" class="hover-shadow cursor">
                                </div> 
                                <div class="col-md-3 col-sm-6 vignettes"> 
                                    <img class="img-responsive thumbnail" src="img/ed/e11.jpg" alt="" style="width:100%" onclick="openModal2();currentSlide2(19)" class="hover-shadow cursor">
                                </div> 
                                <div class="col-md-3 col-sm-6 vignettes"> 
                                    <img class="img-responsive thumbnail" src="img/ed/e12.jpg" alt="" style="width:100%" onclick="openModal2();currentSlide2(20)" class="hover-shadow cursor">
                                </div> 
                                <div class="col-md-3 col-sm-6 vignettes"> 
                                    <img class="img-responsive thumbnail" src="img/ed/e13.jpg" alt="" style="width:100%" onclick="openModal2();currentSlide2(21)" class="hover-shadow cursor">
                                </div> 
                                <div class="col-md-3 col-sm-6 vignettes"> 
                                    <img class="img-responsive thumbnail" src="img/ed/e14.jpg" alt="" style="width:100%" onclick="openModal2();currentSlide2(22)" class="hover-shadow cursor">
                                </div> 
                                <div class="col-md-3 col-sm-6 vignettes"> 
                                    <img class="img-responsive thumbnail" src="img/ed/e15.jpg" alt="" style="width:100%" onclick="openModal2();currentSlide2(23)" class="hover-shadow cursor">
                                </div> 
                                <div class="col-md-3 col-sm-6 vignettes"> 
                                    <img class="img-responsive thumbnail" src="img/ed/e16.jpg" alt="" style="width:100%" onclick="openModal2();currentSlide2(24)" class="hover-shadow cursor">
                                </div> 
                                <div class="col-md-3 col-sm-6 vignettes"> 
                                    <img class="img-responsive thumbnail" src="img/ed/e17.jpg" alt="" style="width:100%" onclick="openModal2();currentSlide2(25)" class="hover-shadow cursor">
                                </div> 
                                <div class="col-md-3 col-sm-6 vignettes"> 
                                    <img class="img-responsive thumbnail" src="img/ed/e18.jpg" alt="" style="width:100%" onclick="openModal2();currentSlide2(26)" class="hover-shadow cursor">
                                </div>  
                                <div class="col-md-3 col-sm-6 vignettes"> 
                                    <img class="img-responsive thumbnail" src="img/ed/e19.jpg" alt="" style="width:100%" onclick="openModal2();currentSlide2(27)" class="hover-shadow cursor">
                                </div> 
                            </div>
                            <!-- The Modal/Lightbox -->
                            <div id="myModal2" class="modal">
                                <span class="close cursor" onclick="closeModal2()">&times;</span>
                                <div class="modal-content">

                                    <div class="mySlides">
                                    <div class="numbertext"></div>
                                    <img src="img/ed/e1.jpg" style="width:100%">
                                    </div>
                                    <div class="mySlides">
                                    <div class="numbertext"></div>
                                    <img src="img/ed/e2.jpg" style="width:100%">
                                    </div>
                                    <div class="mySlides">
                                    <div class="numbertext"></div>
                                    <img src="img/ed/e3.jpg" style="width:100%">
                                    </div>                                    
                                    <div class="mySlides">
                                    <div class="numbertext"></div>
                                    <img src="img/ed/e4.jpg" style="width:100%">
                                    </div>  
                                    <div class="mySlides">
                                    <div class="numbertext"></div>
                                    <img src="img/ed/e5.jpg" style="width:100%">
                                    </div> 
                                    <div class="mySlides">
                                    <div class="numbertext"></div>
                                    <img src="img/ed/e6.jpg" style="width:100%">
                                    </div> 
                                    <div class="mySlides">
                                    <div class="numbertext"></div>
                                    <img src="img/ed/e7.jpg" style="width:100%">
                                    </div>
                                    <div class="mySlides">
                                    <div class="numbertext"></div>
                                    <img src="img/ed/e8.jpg" style="width:100%">
                                    </div>
                                    <div class="mySlides">
                                    <div class="numbertext"></div>
                                    <img src="img/ed/e9.jpg" style="width:100%">
                                    </div>
                                    <div class="mySlides">
                                    <div class="numbertext"></div>
                                    <img src="img/ed/e10.jpg" style="width:100%">
                                    </div>
                                    <div class="mySlides">
                                    <div class="numbertext"></div>
                                    <img src="img/ed/e11.jpg" style="width:100%">
                                    </div>
                                    <div class="mySlides">
                                    <div class="numbertext"></div>
                                    <img src="img/ed/e12.jpg" style="width:100%">
                                    </div>
                                    <div class="mySlides">
                                    <div class="numbertext"></div>
                                    <img src="img/ed/e13.jpg" style="width:100%">
                                    </div>
                                    <div class="mySlides">
                                    <div class="numbertext"></div>
                                    <img src="img/ed/e14.jpg" style="width:100%">
                                    </div>
                                    <div class="mySlides">
                                    <div class="numbertext"></div>
                                    <img src="img/ed/e15.jpg" style="width:100%">
                                    </div>
                                    <div class="mySlides">
                                    <div class="numbertext"></div>
                                    <img src="img/ed/e16.jpg" style="width:100%">
                                    </div>
                                    <div class="mySlides">
                                    <div class="numbertext"></div>
                                    <img src="img/ed/e17.jpg" style="width:100%">
                                    </div>
                                    <div class="mySlides">
                                    <div class="numbertext"></div>
                                    <img src="img/ed/e18.jpg" style="width:100%">
                                    </div>
                                    <div class="mySlides">
                                    <div class="numbertext"></div>
                                    <img src="img/ed/e19.jpg" style="width:100%">
                                    </div> 
                                    <!-- Next/previous controls -->                               
                                    <a class="prev" onclick="plusSlides2(-1)">&#10094;</a>
                                    <a class="next" onclick="plusSlides2(1)">&#10095;</a>
                                    <!-- Caption text -->
                                    <div class="caption-container">
                                    <p id="caption2"></p>
                                    </div>
                                        <!-- Thumbnail image controls -->
                                        <div class="col-md-3 col-sm-6">
                                        <img class="demo cursor" src="img/ed/e1.jpg" style="width:60%" onclick="currentSlide2(9)" alt="">
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                        <img class="demo cursor" src="img/ed/e2.jpg" style="width:60%" onclick="currentSlide2(10)" alt="">
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                        <img class="demo cursor" src="img/ed/e3.jpg" style="width:60%" onclick="currentSlide2(11)" alt="">
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                        <img class="demo cursor" src="img/ed/e4.jpg" style="width:60%" onclick="currentSlide2(12)" alt="">
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                        <img class="demo cursor" src="img/ed/e5.jpg" style="width:60%" onclick="currentSlide2(13)" alt="">
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                        <img class="demo cursor" src="img/ed/e6.jpg" style="width:60%" onclick="currentSlide2(14)" alt="">
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                        <img class="demo cursor" src="img/ed/e7.jpg" style="width:60%" onclick="currentSlide2(15)" alt="">
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                        <img class="demo cursor" src="img/ed/e8.jpg" style="width:60%" onclick="currentSlide2(16)" alt="">
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                        <img class="demo cursor" src="img/ed/e9.jpg" style="width:60%" onclick="currentSlide2(17)" alt="">
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                        <img class="demo cursor" src="img/ed/e10.jpg" style="width:60%" onclick="currentSlide2(18)" alt="">
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                        <img class="demo cursor" src="img/ed/e11.jpg" style="width:60%" onclick="currentSlide2(19)" alt="">
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                        <img class="demo cursor" src="img/ed/e12.jpg" style="width:60%" onclick="currentSlide2(20)" alt="">
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                        <img class="demo cursor" src="img/ed/e13.jpg" style="width:60%" onclick="currentSlide2(21)" alt="">
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                        <img class="demo cursor" src="img/ed/e14.jpg" style="width:60%" onclick="currentSlide2(22)" alt="C">
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                        <img class="demo cursor" src="img/ed/e15.jpg" style="width:60%" onclick="currentSlide2(23)" alt="">
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                        <img class="demo cursor" src="img/ed/e16.jpg" style="width:60%" onclick="currentSlide2(24)" alt="">
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                        <img class="demo cursor" src="img/ed/e17.jpg" style="width:60%" onclick="currentSlide2(25)" alt="">
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                        <img class="demo cursor" src="img/ed/e18.jpg" style="width:60%" onclick="currentSlide2(26)" alt="">
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                        <img class="demo cursor" src="img/ed/e19.jpg" style="width:60%" onclick="currentSlide2(27)" alt="">
                                        </div>
                                </div>
                            </div>

                    </div>
                    <!-- Section Identité --> 
                    <div class="col-sm-12 portfolioIdentite">
                    <hr>
                        <h2 id="identite">Identité</h2>
                            <div class="row" "margeFin">               
                                <div class="col-md-3 col-sm-6 vignettes"> 
                                    <img class="img-responsive thumbnail" src="img/identite/i1.jpg" alt="" style="width:100%" onclick="openModal3();currentSlide3(28)" class="hover-shadow cursor">   
                                </div> 
                                <div class="col-md-3 col-sm-6 vignettes"> 
                                    <img class="img-responsive thumbnail" src="img/identite/i2.jpg" alt="" style="width:100%" onclick="openModal3();currentSlide3(29)" class="hover-shadow cursor">   
                                </div> 
                                <div class="col-md-3 col-sm-6 vignettes"> 
                                    <img class="img-responsive thumbnail" src="img/identite/i3.jpg" alt="" style="width:100%" onclick="openModal3();currentSlide3(30)" class="hover-shadow cursor">   
                                </div> 
                                <div class="col-md-3 col-sm-6 vignettes"> 
                                    <img class="img-responsive thumbnail" src="img/identite/i4.jpg" alt="" style="width:100%" onclick="openModal3();currentSlide3(31)" class="hover-shadow cursor">   
                                </div> 
                                <div class="col-md-3 col-sm-6 vignettes"> 
                                    <img class="img-responsive thumbnail" src="img/identite/i5.jpg" alt="" style="width:100%" onclick="openModal3();currentSlide3(32)" class="hover-shadow cursor">   
                                </div> 
                                <div class="col-md-3 col-sm-6 vignettes"> 
                                    <img class="img-responsive thumbnail" src="img/identite/i6.jpg" alt="" style="width:100%" onclick="openModal3();currentSlide3(33)" class="hover-shadow cursor">   
                                </div>                                    
                            </div>
                         <!-- The Modal/Lightbox -->
                         <div id="myModal3" class="modal">
                                <span class="close cursor" onclick="closeModal3()">&times;</span>
                                <div class="modal-content">
                                    <div class="mySlides">
                                    <div class="numbertext"></div>
                                    <img src="img/identite/i1.jpg" style="width:100%">
                                    </div>
                                    <div class="mySlides">
                                    <div class="numbertext"></div>
                                    <img src="img/identite/i2.jpg" style="width:100%">
                                    </div>
                                    <div class="mySlides">
                                    <div class="numbertext"></div>
                                    <img src="img/identite/i3.jpg" style="width:100%">
                                    </div>
                                    <div class="mySlides">
                                    <div class="numbertext"></div>
                                    <img src="img/identite/i4.jpg" style="width:100%">
                                    </div>
                                    <div class="mySlides">
                                    <div class="numbertext"></div>
                                    <img src="img/identite/i5.jpg" style="width:100%">
                                    </div>
                                    <div class="mySlides">
                                    <div class="numbertext"></div>
                                    <img src="img/identite/i6.jpg" style="width:100%">
                                    </div>                                    
                                    <!-- Next/previous controls -->                              
                                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                                    <!-- Caption text -->
                                    <div class="caption-container">
                                    <p id="caption3"></p>
                                    </div>
                                        <!-- Thumbnail image controls -->
                                        <div class="col-md-3 col-sm-6">
                                        <img class="demo cursor" src="img/identite/i1.jpg" style="width:60%" onclick="currentSlide3(28)" alt="">
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                        <img class="demo cursor" src="img/identite/i2.jpg" style="width:60%" onclick="currentSlide3(29)" alt="">
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                        <img class="demo cursor" src="img/identite/i3.jpg" style="width:60%" onclick="currentSlide3(30)" alt="">
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                        <img class="demo cursor" src="img/identite/i4.jpg" style="width:60%" onclick="currentSlide3(31)" alt="">
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                        <img class="demo cursor" src="img/identite/i5.jpg" style="width:60%" onclick="currentSlide3(32)" alt="">
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                        <img class="demo cursor" src="img/identite/i6.jpg" style="width:60%" onclick="currentSlide3(33)" alt="">
                                        </div>
                                </div>
                            </div>
                    <!-- Section Matte-painting --> 
                    <div class="col-sm-12 portfolioMP">
                    <hr>
                        <h2 id="matteP">Matte-painting</h2>
                            <div class="row" "margeFin">               
                                <div class="col-md-3 col-sm-6 vignettes"> 
                                    <img class="img-responsive thumbnail" src="img/matte/mp1.jpg" alt="" style="width:100%" onclick="openModal4();currentSlide4(34)" class="hover-shadow cursor">   
                                </div> 
                                <div class="col-md-3 col-sm-6 vignettes"> 
                                    <img class="img-responsive thumbnail" src="img//matte/mp2.jpg" alt="" style="width:100%" onclick="openModal4();currentSlide4(35)" class="hover-shadow cursor">   
                                </div> 
                                <div class="col-md-3 col-sm-6 vignettes"> 
                                    <img class="img-responsive thumbnail" src="img/matte/mp3.jpg" alt="" style="width:100%" onclick="openModal4();currentSlide4(36)" class="hover-shadow cursor">   
                                </div> 
                                <div class="col-md-3 col-sm-6 vignettes"> 
                                    <img class="img-responsive thumbnail" src="img/matte/mp4.jpg" alt="" style="width:100%" onclick="openModal4();currentSlide4(37)" class="hover-shadow cursor">   
                                </div> 
                                <div class="col-md-3 col-sm-6 vignettes"> 
                                    <img class="img-responsive thumbnail" src="img/matte/mp5.jpg" alt="" style="width:100%" onclick="openModal4();currentSlide4(38)" class="hover-shadow cursor">   
                                </div> 
                                <div class="col-md-3 col-sm-6 vignettes"> 
                                    <img class="img-responsive thumbnail" src="img/matte/mp6.jpg" alt="" style="width:100%" onclick="openModal4();currentSlide4(39)" class="hover-shadow cursor">   
                                </div>                                    
                            </div>
                         <!-- The Modal/Lightbox -->
                         <div id="myModal4" class="modal">
                                <span class="close cursor" onclick="closeModal4()">&times;</span>
                                <div class="modal-content">
                                    <div class="mySlides">
                                    <div class="numbertext"></div>
                                    <img src="img/matte/mp1.jpg" style="width:100%">
                                    </div>
                                    <div class="mySlides">
                                    <div class="numbertext"></div>
                                    <img src="img/matte/mp2.jpg" style="width:100%">
                                    </div>
                                    <div class="mySlides">
                                    <div class="numbertext"></div>
                                    <img src="img/matte/mp3.jpg" style="width:100%">
                                    </div>
                                    <div class="mySlides">
                                    <div class="numbertext"></div>
                                    <img src="img/matte/mp4.jpg" style="width:100%">
                                    </div>
                                    <div class="mySlides">
                                    <div class="numbertext"></div>
                                    <img src="img/matte/mp5.jpg" style="width:100%">
                                    </div>
                                    <div class="mySlides">
                                    <div class="numbertext"></div>
                                    <img src="img/matte/mp6.jpg" style="width:100%">
                                    </div>                                    
                                    <!-- Next/previous controls -->                              
                                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                                    <!-- Caption text -->
                                    <div class="caption-container">
                                    <p id="caption4"></p>
                                    </div>
                                        <!-- Thumbnail image controls -->
                                        <div class="col-md-3 col-sm-6">
                                        <img class="demo cursor" src="img/matte/mp1.jpg" style="width:60%" onclick="currentSlide4(34)" alt="">
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                        <img class="demo cursor" src="img/matte/mp2.jpg" style="width:60%" onclick="currentSlide4(35)" alt="">
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                        <img class="demo cursor" src="img/matte/mp3.jpg" style="width:60%" onclick="currentSlide4(36)" alt="">
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                        <img class="demo cursor" src="img/matte/mp4.jpg" style="width:60%" onclick="currentSlide4(37)" alt="">
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                        <img class="demo cursor" src="img/matte/mp5.jpg" style="width:60%" onclick="currentSlide4(38)" alt="">
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                        <img class="demo cursor" src="img/matte/mp6.jpg" style="width:60%" onclick="currentSlide4(39)" alt="">
                                        </div>
                                </div>
                            </div>
                 
                </div>  <!-- end div row -->
            </div>  <!-- end div container -->
        </section> <!-- end section portfolio -->
     
        
        <button><a href="#top"><i class="glyphicon glyphicon-menu-up color" aria-hidden="true"></i></a></button>
        
        
        
<!-- --------------------------------- JS MODAL -------------------------------------- -->
 
<script>

// WEB
function openModal() {
  document.getElementById('myModal').style.display = "block";
}

function closeModal() {
  document.getElementById('myModal').style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}

// EDITION
function openModal2() {
  document.getElementById('myModal2').style.display = "block";
}
function closeModal2() {
  document.getElementById('myModal2').style.display = "none";
}
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides2(n) {
  showSlides(slideIndex += n);
}
function currentSlide2(n) {
  showSlides(slideIndex = n);
}
function showSlides2(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption2");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}

// IDENTITE
function openModal3() {
  document.getElementById('myModal3').style.display = "block";
}
function closeModal3() {
  document.getElementById('myModal3').style.display = "none";
}
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides3(n) {
  showSlides(slideIndex += n);
}
function currentSlide3(n) {
  showSlides(slideIndex = n);
}
function showSlides3(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption3");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}

// MATTE-PAINTING
function openModal4() {
  document.getElementById('myModal4').style.display = "block";
}
function closeModal4() {
  document.getElementById('myModal4').style.display = "none";
}
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides4(n) {
  showSlides(slideIndex += n);
}
function currentSlide4(n) {
  showSlides(slideIndex = n);
}
function showSlides4(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption4");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>


<!-- ----------------------------------------------------------------------- -->


<?php
require_once("inc/footer.php");
?>
    
    
    
      














