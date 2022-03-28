<?php include "header.php" ?>
<h1 style="margin-left:35px">Envie de lire..? Voici tous nos articles</h1>
<img class="nos"  src="http://localhost:8000/assets/img/lifestyle/2.png" alt="">
<?php
foreach ($chat as $res) {  ?>
    <div class="card">
        <h5 class="card-header"><?= $res['titre'] ?></h5>
        <div class="card-body">
            <p class="card-text"><?= $res['contenu'] ?></p>
            <a href="/supprimer?id=<?=$res['id']?>" class="btn btn-secondary">Supprimer</a>
        </div>
    </div>
<?php } ?>


<?php include "footer.php" ?>