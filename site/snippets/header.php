<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $site->title() ?> | <?= $page->title() ?></title>
  <link href="/assets/css/styles.css" rel="stylesheet">
</head>

<body>

<nav>
  <ul>

    <?php foreach($site->nav()->toPages() as $navPage): ?>

    <li>
      <a href="<?= $navPage->url() ?>"><?= $navPage->title() ?></a>
    </li>

    <?php endforeach ?>    
  </ul>

  <ul>
    <li>
      <a href="<?= $page->url("de") ?>">DE</a>
    </li>
    <li>
      <a href="<?= $page->url("en") ?>">EN</a>
    </li>
  </ul>
</nav>