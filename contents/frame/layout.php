<!DOCTYPE html>
<html lang="fr" class="h-100">
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="description" content="<?= (!empty($description)) ? $description : ''; ?>">
    <meta name="<?= (!empty($robotName)) ? $robotName : ''; ?>" content="<?= (!empty($robotContent)) ? $robotContent : ''; ?>" />

    <title>KAPITALIS | <?= (!empty($pageTitle)) ? $pageTitle : ' '; ?></title>

<!-- CSS
================================================== -->


 </head>
<body>
        
<div class="body-inner">

<!--/ Topbar start -->
<!--/ Topbar end -->

<!-- Header start -->
<!--/ Header end -->


<!-- Specific Content -->
<?= $content; ?>
<!-- End Specific Content -->


<!-- Footer start -->
<!-- Footer end -->

</div><!-- Body inner end -->

</body>


<?= $pageJavascripts ?? ''; ?>
</html>