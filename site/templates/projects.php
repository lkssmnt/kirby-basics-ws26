<?php snippet("header") ?>

<h1><?= $page->title() ?></h1>

<?php foreach ($page->children() as $projectPage): ?>
  <a href="<?= $projectPage->url() ?>"><?= $projectPage->title() ?></a>
<?php endforeach ?>

<?php snippet("footer") ?>