<?php snippet("header") ?>

<h1><?= $page->title() ?></h1>

<div class="text">
  <?= $page->bio() ?>
</div>

<?php if($page->email()->isNotEmpty()): ?>
<a href="mailto:<?= $page->email() ?>">Mail</a>
<?php endif ?>

<?php snippet("footer") ?>