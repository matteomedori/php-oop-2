<?php

require_once __DIR__.'/../models/Cibo.php';
require_once __DIR__.'/../models/Gioco.php';
require_once __DIR__.'/../models/Cuccia.php';

$crocchette_aabb = new Cibo('Crocchette Aabb',19.99, 1246465, 'https://m.media-amazon.com/images/I/81C3Z9OACqL._AC_UF1000,1000_QL80_.jpg', 'adulto','pollo e tacchino');
$crocchette_aabb->setCategoria('cani');
$crocchette_aabb->setTipoDiProdotto('cibo');

$corda_rossa = new Gioco('Corda rossa',5.50, 1246465, 'https://m.media-amazon.com/images/I/814BZu2szUL._AC_UF1000,1000_QL80_.jpg', 'rosso','2');
$corda_rossa->setCategoria('cani');
$corda_rossa->setTipoDiProdotto('gioco');

$crocchette_bccs = new Cibo('Crocchette Bccs',15.20, 1246465, 'https://media.dm-static.com/images/f_auto,q_auto,c_fit,h_1200,w_1200/v1700323567/products/pim/3065890122222_ShebaCreazioniSalsaTac_PolloVerdure85gr_8367_IT/sheba-cibo-umido-per-gatti-in-salsa-con-tacchino-pollo-e-verdure-creazioni-speciali', 'anziano','pollo e verdure');
$crocchette_bccs->setCategoria('gatti');
$crocchette_bccs->setTipoDiProdotto('cibo');

$palla_nera = new Gioco('Palla nera',0.99, 1246465, 'https://arcaplanet.vtexassets.com/arquivos/ids/235862/kong-ball-extreeme-cane.jpg?v=637454886208130000', 'nero','0.5');
$palla_nera->setCategoria('gatti');
$palla_nera->setTipoDiProdotto('gioco');

$cuccia_media = new Cuccia('Cuccia media',10.50, 1246465, 'https://cdn.produceshop.it/26748-large_default/cuccia-per-cani-taglia-media-in-plastica-esterno-interno-bella.jpg', 30, 20);
$cuccia_media->setCategoria('cani');
$cuccia_media->setTipoDiProdotto('cuccia');

$osso_verde = new Gioco('Osso verde',5.50, 1246465, 'https://arcaplanet.vtexassets.com/arquivos/ids/209744/YES--Osso-in-gomma-verde-con-squittio-14x6-cm.jpg?v=637413991178030000', 'verde','2');
$osso_verde->setCategoria('cani');
$osso_verde->setTipoDiProdotto('gioco');

$cuccia_grande = new Cuccia('Cuccia grande',15.50, 1246465, 'https://cuccepercani.net/wp-content/uploads/2016/07/cucciapercanipvc.jpg', 50, 50);
$cuccia_grande->setCategoria('cani');
$cuccia_grande->setTipoDiProdotto('cuccia');

$cuccia_piccola = new Cuccia('Cuccia piccola',5.50, 1246465, 'https://www.cherubin.it/wp-content/uploads/cucce-per-cani.jpg', 10,10);
$cuccia_piccola->setCategoria('gatti');
$cuccia_piccola->setTipoDiProdotto('cuccia');

$crocchette_lpss = new Cibo('Crocchette Lpss',10, 1246465, 'https://bennet-cdn.thron.com/delivery/public/thumbnail/bennet/4666fe91-67b1-4efe-b3d4-9ff2363a9402/BEB9AN0/std/300x300/M_3776051_1.jpg', 'cucciolo','carote e manzo');
$crocchette_lpss->setCategoria('cani');
$crocchette_lpss->setTipoDiProdotto('cibo');

$products = [
    $crocchette_aabb,
    $corda_rossa,
    $crocchette_bccs,
    $palla_nera,
    $cuccia_media,
    $osso_verde,
    $cuccia_grande,
    $cuccia_piccola,
    $crocchette_lpss
];

?>