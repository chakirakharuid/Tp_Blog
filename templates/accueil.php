<?php include "header.php"?>
    <div class="banner-area banner-inner-1 bg-black" >
        <!-- banner area start -->
        <div class="banner-inner pt-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="thumb after-left-top">
                            <img src="http://localhost:8000/assets/img/fashion/1.png" alt="img">
                        </div>
                    </div>
                    <div class="col-lg-6 align-self-center">
                        <div class="banner-details mt-4 mt-lg-0">
                            <div class="post-meta-single">
                                <ul>
                                    <li><a class="tag-base tag-blue" href="#ajout"> Je poste un Article</a></li>
                                    <li class="date"><i class="fa fa-clock-o"></i>28.03.2022</li>
                                </ul>
                            </div>
                            <h2>Bienvenue sur notre blog.</h2>
                            <p>C'est un blog pas comme les autres ici c'est vous qui créer les articles vous pouvez également les supprimer ou les modifier. </p>
                            <a class="btn btn-blue" href="#">Lire Plus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- banner area end -->

        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-post-wrap style-white">
                        <div class="thumb">
                            <img src="assets/img/post/1.png" alt="img">
                            <a class="tag-base tag-blue" href="#">Tech</a>
                        </div>
                        <div class="details">
                            <h6 class="title"><a href="#">La catégorie liée aux technologies et multimedia</a></h6>
                            <div class="post-meta-single mt-3">
                                <ul>
                                    <li><i class="fa fa-clock-o"></i>28.22.2022</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-post-wrap style-white">
                        <div class="thumb">
                            <img src="assets/img/post/2.png" alt="img">
                            <a class="tag-base tag-orange" href="#">Food</a>
                        </div>
                        <div class="details">
                            <h6 class="title"><a href="#">Une envie de recettes, regarder les articles de cette rubrique</a></h6>
                            <div class="post-meta-single mt-3">
                                <ul>
                                    <li><i class="fa fa-clock-o"></i>28.03.2022</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-post-wrap style-white">
                        <div class="thumb">
                            <img src="http://localhost:8000/assets/img/sports/9.png" height="270px" alt="img">
                            <a class="tag-base tag-blue" href="#">Sport</a>
                        </div>
                        <div class="details">
                            <h6 class="title"><a href="#">1 2 3 Partez ! A tous les sportifs du dimanche </a></h6>
                            <div class="post-meta-single mt-3">
                                <ul>
                                    <li><i class="fa fa-clock-o"></i>28.03.2022</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-post-wrap style-white">
                        <div class="thumb">
                            <img src="http://localhost:8000/assets/img/lifestyle/9.png" height="270px" alt="img">
                            <a class="tag-base tag-orange" href="#">Actu Monde</a>
                        </div>
                        <div class="details">
                            <h6 class="title"><a href="#">Actu Monde</a></h6>
                            <div class="post-meta-single mt-3">
                                <ul>
                                    <li><i class="fa fa-clock-o"></i>28.03.2022</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="ski">
        <div class="formulaire_ajout" id="ajout">
            <form action="/ajout" method="POST">
                <div class="input">
                    <label for="Nom" class="visually-hidden"> Nom</label>
                    <input type="text" class="form-control" name="nom" id="Nom" placeholder="Nom">
                </div>
                <div class="input">
                    <label for="catégorie" class="visually-hidden">Catégorie</label>
                    <input type="text" class="form-control" id="catégorie" name="categorie" placeholder="Nom de la catégorie">
                </div>
                <div class="input">
                    <label for="titre" class="visually-hidden"></label>
                    <input type="text" class="form-control" id="titre" name="titre" placeholder="Titre  de votre Article">
                </div>
                <div class="mb-3">
                    <div class="input">
                        <label for="exampleFormControlTextarea1" class="form-label">Ecrivez votre arcticle</label>
                        <textarea class="form-control" name="contenu" id="exampleFormControlTextarea1" rows="3"></textarea>
                        <div class="input">
                        </div>
                        <button  style="margin-top:20px"type="submit" class="btn btn-primary">Poster</button>
            </form>
        </div>
    </div>

<?php include "footer.php" ?>