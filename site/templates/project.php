<?php snippet("header") ?>

<style>
  .text p {
    color: <?= $page->textcolor() ?>;    
  }
</style>

<h1><?= $pag->title() ?></h1>
<p><?= $page->year() ?></p>

<?php /*

  Authors can now be stored as page references in the authors field in the content.
  For this to work the author page has to exist and be published.

*/ ?>

<h3>
  <?php $authorPages = $page->authors()->toPages(); ?>

  <ul>
    <?php foreach ($authorPages as $authorPage): ?>
      <li>
        <a href="<?= $authorPage->url() ?>"><?= $authorPage->title() ?></a>
      </li>
    <?php endforeach ?>
  </ul>
</h3>


<?php foreach ($page->websites()->toStructure() as $website): ?>
  <a href="<?= $website->url() ?>"><?= $website->title()->isNotEmpty() ? $website->title() : $website->url() ?></a>
<?php endforeach ?>


<?php /*
<?php if($page->website()->isNotEmpty()): ?>
<a href="<?= $page->website() ?>">
  <?php if($page->websitelabel()->isNotEmpty()): ?>
  <?= $page->websitelabel() ?>
  <?php else: ?>
  Website
  <?php endif?>
</a>
<?php endif ?>

<?php if($page->website()->isNotEmpty()): ?>
<?php $label = $page->websitelabel() ?>
<a href="<?= $page->website() ?>"><?= $label->isNotEmpty() ? $label : 'Website' ?></a>
<?php endif ?>
*/ ?>

<h3>Images</h3>
<?php foreach ($page->gallery()->toFiles() as $image): ?>
  <img src="<?= $image->url() ?>">
<?php endforeach ?>

<div class="text">
  <?= $page->text() ?>
</div>

<?php snippet("footer") ?>