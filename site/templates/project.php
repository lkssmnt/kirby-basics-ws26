<style>
  .text {
    color: <?= $page->textcolor() ?>;
  }

  img {
    width: 600px;
  }
</style>

<h1><?= $page->title() ?></h1>
<p><?= $page->year() ?></p>

<?php if($page->website()->isNotEmpty()): ?>
<a href="<?= $page->website() ?>">Website</a>
<?php endif ?>

<h3>Images</h3>
<?php foreach($page->gallery()->toFiles() as $image): ?>
  <img src="<?= $image->url() ?>">
<?php endforeach ?>

<div class="text">
  <?= $page->text() ?>
</div>