<?php

require_once __DIR__.'/../models/Cibo.php';
require_once __DIR__.'/../models/Gioco.php';
require_once __DIR__.'/../models/Cuccia.php';

$products = [
    new Cibo('Crocchette Aabb',19.99, 1246465,'cani', 'https://m.media-amazon.com/images/I/81C3Z9OACqL._AC_UF1000,1000_QL80_.jpg', 'cibo','adulto','pollo e tacchino'),
    new Gioco('Corda rossa',5.50, 1246465,'cani', 'https://m.media-amazon.com/images/I/814BZu2szUL._AC_UF1000,1000_QL80_.jpg', 'gioco','rosso','2'),
    new Cibo('Crocchette Bccs',15.20, 1246465,'gatti', 'https://media.dm-static.com/images/f_auto,q_auto,c_fit,h_1200,w_1200/v1700323567/products/pim/3065890122222_ShebaCreazioniSalsaTac_PolloVerdure85gr_8367_IT/sheba-cibo-umido-per-gatti-in-salsa-con-tacchino-pollo-e-verdure-creazioni-speciali', 'cibo','anziano','pollo e verdure'),
    new Gioco('Palla nera',0.99, 1246465,'gatti', 'https://arcaplanet.vtexassets.com/arquivos/ids/235862/kong-ball-extreeme-cane.jpg?v=637454886208130000', 'gioco','nero','0.5'),
    new Cuccia('Cuccia media',10.50, 1246465,'cani', 'https://cdn.produceshop.it/26748-large_default/cuccia-per-cani-taglia-media-in-plastica-esterno-interno-bella.jpg', 'cuccia', 30,20),
    new Gioco('Osso verde',5.50, 1246465,'cani', 'https://arcaplanet.vtexassets.com/arquivos/ids/209744/YES--Osso-in-gomma-verde-con-squittio-14x6-cm.jpg?v=637413991178030000', 'gioco','verde','2'),
    new Cuccia('Cuccia grande',15.50, 1246465,'cani', 'https://cuccepercani.net/wp-content/uploads/2016/07/cucciapercanipvc.jpg', 'cuccia', 50, 50),
    new Cuccia('Cuccia piccola',5.50, 1246465,'gatti', 'https://www.cherubin.it/wp-content/uploads/cucce-per-cani.jpg', 'cuccia', 10,10),
    new Cibo('Crocchette Lpssss',10, 1246465,'cani', 'https://bennet-cdn.thron.com/delivery/public/thumbnail/bennet/4666fe91-67b1-4efe-b3d4-9ff2363a9402/BEB9AN0/std/300x300/M_3776051_1.jpg', 'cibo','cucciolo','carote e manzo')
];

?>