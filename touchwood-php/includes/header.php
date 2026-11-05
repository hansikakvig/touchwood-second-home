<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>A Home Away From Home | Touchwood Lifespaces</title>
  <meta name="description" content="Why more and more people are choosing a second home, and what a hill-side home away from home near Igatpuri, Nashik looks like.">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;0,800;1,500;1,700&family=Lora:ital,wght@0,400;0,500;1,400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="progress" aria-hidden="true"><span id="progressBar"></span></div>

<header class="header" id="header">
  <div class="wrap">
    <a class="logo" href="#top" data-scroll="#top" aria-label="Touchwood Lifespaces">
      <svg class="logo-mark" viewBox="0 0 48 48" fill="none">
        <path d="M24 2 43 13v22L24 46 5 35V13z" fill="#fff"/>
        <path d="M14 24c0-5 3-7 6-7 5 0 6 14 11 14 3 0 5-2 5-7s-2-7-5-7c-5 0-6 14-11 14-3 0-6-2-6-7z" stroke="#343434" stroke-width="2.6" fill="none"/>
      </svg>
      <span class="logo-text"><b>touchwood</b><i>LIFESPACES</i><small>Thoughtful by Nature</small></span>
    </a>
    <nav class="nav" id="nav">
      <?php foreach ($nav as [$label, $href]): $internal = $href[0] === '#'; ?>
        <a href="<?= e($href) ?>"
           <?= $internal ? 'data-scroll="' . e($href) . '"' : 'target="_blank" rel="noreferrer"' ?>><?= e($label) ?></a>
      <?php endforeach; ?>
      <button class="toggle" id="toggle" aria-label="Toggle accent" aria-pressed="false"></button>
    </nav>
    <button class="burger" id="burger" aria-label="Menu"><span></span><span></span><span></span></button>
  </div>
</header>
