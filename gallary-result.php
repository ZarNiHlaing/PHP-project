<?php require("./template/header.php"); ?>
<?php include("./template/sidebar.php"); ?>

<?php
$photos = array_filter(scandir("photos"), fn ($el) => $el != "." && $el != "..");
?>
<section class=" columns-3 gap-3 mt-5">
    <?php foreach ($photos as $photo) : ?>
        <img class=" mb-3 rounded-lg" src="photos/<?= $photo ?>" alt="">
    <?php endforeach ?>
</section>
<?php include("./template/footer.php"); ?>