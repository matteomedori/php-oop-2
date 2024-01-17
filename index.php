<?php
require_once __DIR__.'/database/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prodotti per Cani e Gatti</title>
    <!-- My Css -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Prodotti per cani e gatti</h1>
        </div>
    </header>
    <main>
        <ul class="products container">
            <?php foreach($products as $product): ?>
            <li class="product">
                <h2><span class="key">Nome: </span><?php echo $product->getName()?></h2>
                <h2><span class="key">Prezzo: </span><?php echo $product->getPrice()?>€</h2>
                <h2><span class="key">Categoria: </span> 
                <?php if($product->getCategoria() === 'cani'): ?>
                    &#128054;
                <?php elseif($product->getCategoria() === 'gatti'): ?>
                    &#128008;
                <?php endif; ?>
                <?php if($product->getTipoDiProdotto() === 'cibo'): ?>
                    <h2><span class="key">Fascia d'età: </span><?php echo $product->fasciaEta?></h2>
                    <h2><span class="key">A base di: </span><?php echo $product->aBaseDi?></h2>
                <?php elseif($product->getTipoDiProdotto() === 'gioco'): ?>
                    <h2><span class="key">Colore: </span><?php echo $product->getColore()?></h2>
                    <h2><span class="key">Peso: </span><?php echo $product->getPeso()?>kg</h2>
                <?php elseif($product->getTipoDiProdotto() === 'cuccia'): ?>   
                    <h2><span class="key">Lunghezza: </span><?php echo $product->lunghezza?>cm</h2>
                    <h2><span class="key">Larghezza: </span><?php echo $product->larghezza?>cm</h2>
                <? endif; ?>
                <h2><span class="key">Tipologia: </span><?php echo $product->getTipoDiProdotto()?></h2>
                <img src="<?php echo $product->getImmagine()?>" alt="">
                </li>
            <? endforeach; ?>
        </ul>
    </main>
</body>
</html>