<?php snippet("header") ?>

<h1><?= $site->title() ?></h1>

<?php /*
  page://projects is a reference to the texts page. I’ve changed the Uuid to "projects" in
  content/1_projekte/projects.txt.

  If you get an error here, you need to change the uuid in your own content folder.
*/ ?>

<?php $projectsPage = page('page://projects') ?>
<h2>
  <a href="<?= $projectsPage->url() ?>"><?= $projectsPage->title() ?></a>
</h2>

<ul>
  <?php foreach ($projectsPage->children() as $projectPage): ?>
    <li>
      <a href="<?= $projectPage->url() ?>"><?= $projectPage->title() ?></a>
    </li>
  <?php endforeach ?>
</ul>

<?php /*
  page://texts is a reference to the texts page. I’ve changed the Uuid to "texts" in
  content/2_texts/texts.txt.

  If you get an error here, you need to change the uuid in your own content folder.
*/ ?>

<?php $textsPage = page('page://texts') ?>
<h2>
  <a href="<?= $textsPage->url() ?>"><?= $textsPage->title() ?></a>
</h2>

<ul>
  <?php foreach ($textsPage->children() as $textPage): ?>
    <li>
      <a href="<?= $textPage->url() ?>"><?= $textPage->title() ?></a>
    </li>
  <?php endforeach ?>
</ul>

<?php snippet("footer") ?>