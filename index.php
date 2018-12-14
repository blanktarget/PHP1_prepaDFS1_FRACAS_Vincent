<?php
require_once('./templates/header.html');
require_once('./action/addProdAction.php');
?>

<main class="flex">
    <form class="column">
        <h2>Daft Punk - Discovery</h2>
        <img src="https://i2.wp.com/www.samples.fr/wp-content/uploads/2016/07/71bsHTr6idL._SL1500_.jpg?w=1500&ssl=1">
        <label>Prix: </label>
        <p>15€</p>
        <label>Quantité:</label>
        <input type="number" min="0">
        <input type="submit" value="Ajouter au panier" action="addProdAction" method="post">
    </form>

    <form class="column">
        <h2>Justice - Cross</h2>
        <img src="https://images.genius.com/88279d192cd7f9400881fdf14c5bbaab.1000x1000x1.jpg">
        <label>Prix: </label>
        <p>12.99€</p>
        <label>Quantité:</label>
        <input type="number" min="0">
        <input type="submit" value="Ajouter au panier" action="addProdAction" method="post">
    </form>

    <form class="column">
        <h2>Eminem - Marshall Mathers</h2>
        <img src="https://www.hiphop-spirit.com/images/albums/eminem-the-marshall-mathers-lp-2-1047.jpg">
        <label>Prix: </label>
        <p>19€</p>
        <label>Quantité:</label>
        <input type="number" min="0">
        <input type="submit" value="Ajouter au panier" action="addProdAction" method="post">
    </form>
</main>

<input type="submit" value="Accéder au panier" action="logAction">

<?
require_once('./templates/footer.html');
?>