<?php
    // Includi le classi dei modelli necessari
    require_once __DIR__ . "/models/products.php";
    require_once __DIR__ . "/models/category.php";
    require_once __DIR__ . "/models/typeProducts.php";
    require_once __DIR__ . "/models/icon.php";

    // Crea istanze delle categorie
    $category1 = new Category("gatto");
    $category1->setIcon("fa-solid fa-cat"); // Imposta l'icona per la categoria gatto
    $category2 = new Category("cane");
    $category2->setIcon("fa-solid fa-dog"); // Imposta l'icona per la categoria cane

    // Crea istanze delle tipologie di prodotti
    try {
        $type1 = new TypeProducts("Pallina per Cani", "./img/pallina.jpg", 5, "pallina", $category2);
    } catch (Exception $e) {
        echo "Errore: " . $e->getMessage() . "<br";
    }

    try {
        $type2 = new TypeProducts("Tiragraffi", "./img/tiragraffi.jpg", 25, "giochi", $category1);
    } catch (Exception $e) {
        echo "Errore: " . $e->getMessage() . "<br>";
    }

    try {
        $type3 = new TypeProducts("Crocchette per gatto", "./img/crocchette.jpg", 3, "cibo", $category1);
    } catch (Exception $e) {
        echo "Errore: " . $e->getMessage() . "<br>";
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prodotti per animali</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container">
        <!-- prima card -->
        <div class="card mb-3" style="max-width: 18rem;">
            <img src="<?php echo $type1->getImage(); ?>" class="card-img-top" alt="cuscino_cani">
            <div class="card-body">
                <p class="card-text"><?php echo $type1->getName(); ?></p>
                <p class="card-text">Prezzo: <?php echo $type1->getPrice(); ?> €</p>
                <p class="card-text">Tipologia: <?php echo $type1->getType(); ?></p>
                <span class="card-text">Categoria: <?php echo $type1->getCategory()->getCategoryName()?></span>
                <span><?php echo $category2->getIcon() ?></span> <!-- icona cane -->
            </div>
        </div>

        <!-- seconda card-->
        <div class="card mb-3" style="max-width: 18rem;">
            <img src="<?php echo $type2->getImage(); ?>" class="card-img-top" alt="croccantini_gatto">
            <div class="card-body">
                <p class="card-text"><?php echo $type2->getName(); ?></p>
                <p class="card-text">Prezzo: <?php echo $type2->getPrice(); ?> €</p>
                <p class="card-text">Tipologia: <?php echo $type2->getType(); ?></p>
                <span class="card-text">Categoria: <?php echo $type2->getCategory()->getCategoryName()?></span>
                <span><?php echo $category1->getIcon() ?></span> <!-- icona gatto -->
            </div>
        </div>

        <!-- terza card -->
        <div class="card mb-3" style="max-width: 18rem;">
            <img src="<?php echo $type3->getImage(); ?>" class="card-img-top" alt="pallina_gomma">
            <div class="card-body">
                <p class="card-text"><?php echo $type3->getName(); ?></p>
                <p class="card-text">Prezzo: <?php echo $type3->getPrice(); ?> €</p>
                <p class="card-text">Tipologia: <?php echo $type3->getType(); ?></p>
                <span class="card-text">Categoria: <?php echo $type3->getCategory()->getCategoryName()?></span>
                <span><?php echo $category1->getIcon() ?></span> <!-- icona cane -->
            </div>
        </div>
    </div>
</body>

</html>