<?php
/** @var array $buttonGroup */
/** @var array $coolerButtonGroup*/
?>

<div class="button-group">
    <?php foreach($buttonGroup as $button): ?>
        <?php render('views/atoms/button.php', compact('button'))?>
    <?php endforeach;?>
</div>

<div class="button-group">
    <?php foreach($coolerButtonGroup as $coolButton):?>
        <?php render('views/atoms/button.php', compact('coolButton')); ?>
    <?php endforeach;?>
</div>
