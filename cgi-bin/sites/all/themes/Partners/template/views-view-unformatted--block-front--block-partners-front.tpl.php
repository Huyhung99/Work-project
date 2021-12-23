<?php global $language;?>
<?php
    if ($language->language == 'en'){
        $title = 'Partners';
    }elseif ($language->language == 'vi'){
        $title = 'Đối tác';
    }
?>
<div class="partners">
    <div class="site-heading text-center">
        <h2><?= $title ?></h2>
    </div>
    <div class="container">
        <div class="clients-items owl-carousel owl-theme text-center">
            <?php foreach ($rows as $row): ?>
                <?php print $row ?>
            <?php endforeach; ?>
        </div>
    </div>
</div>

