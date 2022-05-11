<?php
/** @var array $buttonGroup */
/** @var array $coolerButtonGroup */
?>

<div class="button-group">
    <?php foreach($buttonGroup as $button): ?>
        <?php render('views/atoms/button.php', compact('button'))?>
    <?php endforeach;?>

    <?php foreach($coolerbuttonGroup as $coolerButton): ?>
        <?php render('views/atoms/button.php', compact('coolerButton'))?>
        <?php endforeach;?>
</div>
