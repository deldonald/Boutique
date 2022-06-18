
<?php

include "header.php";

?>
  
       
    
        <!-- container -->
        <div class="container">
    
            <ol class="breadcrumb">
                <li><a href="index.html">Accueil</a></li>
            </ol>
    
            <div class="row">
                
                <!-- Article main content -->
                <article class="col-sm-9 maincontent">
                    <header class="page-header">
                        <h1 class="page-title">Contactez nous </h1>
                    </header>
                    
                    <p>
                        Nous aimerions recevoir de vos nouvelles. Vous souhaitez travailler ensemble? Remplissez le formulaire ci-dessous avec quelques informations sur votre projet et je vous répondrai dès que possible. Veuillez m'accorder quelques jours pour répondre.
                    </p>
                    <br>
                        <form class="form-horizontal" action="php/saveur.php" method="post">
                            <div class="row">
                                <div class="col-sm-4">
                                <input name="nom" type="text" placeholder=" nom" required class="form-control">
                                </div>
                                <div class="col-sm-4">
                                <input name="email" type="text" placeholder="email" required class="form-control">
                                </div>
                                <div class="col-sm-4">
                                <input name="telephone" type="text" placeholder="telephone" required class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-12">
                                    <textarea name="message" placeholder="Tapez votre message ici svp..." class="form-control" rows="9"></textarea>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label class="checkbox"><input type="checkbox"> S'inscrire aux Newsletters</label>
                                </div>
                                       
                                <ol class="breadcrumb">
                                    <li><input  class="btn btn-action" type="submit" value="Envoyez"></li>
                                </ol>
                                    
                                </div>
                            </div>
                        </form>
    
                </article>
                <!-- /Article -->
                
                <!-- Sidebar -->
                <aside class="col-sm-3 sidebar sidebar-right">
    
                    <div class="widget">
                        <h4>Adresse</h4>
                        <address>
                            52 Avenue Paul VALERY, Sarcelles, BP:95200, France
                        </aù ddress>
                        <h4>Phone:</h4>
                        <address>
                            (+33) 53366695
                        </address>
                    </div>
    
                </aside>
                <!-- /Sidebar -->
    
            </div>
        </div>	<!-- /container -->
        
        <section class="container-full top-space">
            <div id="map"></div>
        </section>
        <?php

include "footer.php";

?>