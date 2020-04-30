<?php if(isset($params['slug']) && $params['slug'] !== null) : ?>
    <?php $pageTitle = str_replace('-', ' ', ucfirst($params['slug'])); ?>
    <h1><?=  $pageTitle = str_replace('-', ' ', ucfirst($params['slug'])); ?></h1>
    <?php else :?>
    <h1><?= 'Nos réalisations' ?></h1>
    <a href="<?= $router->generate('achievement', ['slug' => 'mon-kiffe']); ?>">Voir plus...</a>
<?php endif ?>

<?php ob_start(); ?>
<script> </script>
<?php $pageJavascripts = ob_get_clean(); ?>