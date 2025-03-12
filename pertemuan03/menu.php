<?php
$menus = [
    'Home'=>'./index.php', 
    'About'=>'./about.php', 
    'Contact'=>'./contact.php', 
    'Events'=>'./events.php', 
    'Favorite'=>'./favorite.php',
]
?>
<!-- Sidebar-->
<div class="border-end bg-white" id="sidebar-wrapper">
    <div class="sidebar-heading border-bottom bg-light">Start Bootstrap</div>
    <div class="list-group list-group-flush">
        <?php foreach($menus as $menu => $url): ?>
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?= $url ?>"><?= $menu ?></a>
        <?php endforeach; ?>
    </div>
</div>