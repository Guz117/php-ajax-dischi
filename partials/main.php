<?php
include __DIR__ . '/../server/db.php';
?>
<main>
    <div class="album">
        <?php foreach ($cards as $card) { ?>
            <div class="music">
                <img class="album-music" src="<?= $card['poster'] ?>" alt="">
                <span class="title"><?= $card['title'] ?></span>
                <span class="author"><?= $card['author'] ?></span>
                <span class="year"><?= $card['year'] ?></span>
            </div>
        <?php } ?>
    </div>
</main>