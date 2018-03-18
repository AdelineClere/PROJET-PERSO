<div class="col-md-6 col-md-offset-3"> 
            <div class="panel-default border">  <!--cf Bootstrap/Components/Panels-->
                <div class="panel-heading text-center">
                    <h2> <?= $produit['titre'] ?> </h2>     <!-- Guillemets?=  > remplace un echo-->
                </div>
                <div class="panel-body">
                    <p class="text-center">
                        <img src=" <?= $produit['photo'] ?>" alt="" class="img-responsive tofProduit">  <!-- ⚠️ Aff tof -->
                    </p>   
                    <p class="text-center">Catégorie : <?= $produit['categorie'] ?> <br></p>
                    <p class="text-center">Couleur : <?= $produit['couleur'] ?> <br>
                    <p class="text-center">Taille : <?= $produit['taille'] ?> <br>
                    <p class="text-center">Description : <?= $produit['description'] ?> <br>
                    <p class="text-center">Prix : <?= $produit['prix'] ?> € <br></p>    
                
                    <?php  if($produit['stock'] > 0) : ?>
                    <!-- ⚠️ Voir stock - on aurait pu mettre : ...0) {} else{} ... et ?> à la fin -->

                        <em>Nombre de produit(s) disponible(s) : <?= $produit['stock'] ?> </em><hr>
                        <form method="post" action="panier.php">
                            <input type="hidden" name="id_produit" value="<?= $produit['id_produit'] ?>"> 
                            <!-- ⚠️ input caché pr que PANIER sache de quel pdt il s'agit -->
                                <label for="quantite"> Quantité </label>
                                <select class="form-control" id="quantite" name="quantite"> <!-- ⚠️ selecteur de Qtt -->
                                    <?php   for($i = 1; $i <= $produit['stock'] && $i <= 5; $i++) // on affiche 5 max !
                                            {
                                                echo "<option>$i</option>";
                                            }
                                    ?>
                                </select><br>
                            <input type="submit" name="ajout_panier" class="btn btn-primary col-md-12" value="Ajouter au panier">   <!-- btn ajout panier-->
                    
                                    <?php else: ?>
                                        <div class="alert alert-danger text-center">Rupture de stock !!</div>  <!-- RUPTURE stock-->
                    <?php endif; ?>

                </div> <!-- panel-body -->
            </div> <!-- panel-default border -->
</div> <!-- class row --> 