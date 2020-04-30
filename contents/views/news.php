<?php if(isset($params['slug']) && $params['slug'] !== null) : ?>
    <?php $pageTitle = str_replace('-', ' ', ucfirst($params['slug'])); ?>
    <h1><?=  $pageTitle = str_replace('-', ' ', ucfirst($params['slug'])); ?></h1>
    <?php else :?>
    <h1><?= 'Notre Actualité' ?></h1>
    <a href="<?= $router->generate('single_news', ["slug" => "Aujourd'hui"]); ?>">Voir plus...</a>
<?php endif ?>

<?php ob_start(); ?>
<script> </script>
<?php $pageJavascripts = ob_get_clean(); ?>