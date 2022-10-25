<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php wp_head(); ?>
</head>

<body>

  <header class="site-header">
    <h1 class="site-header-logo">
      <a href="#">Creative Galaxy</a>
    </h1>

    <button class="site-header-nav-btn" id="nav-btn"></button>

    <div class="site-header-nav-container">
      <nav class="site-header-nav">
        <ul>
          <li>
            <a href="#">Home</a>
          </li>
          <li>
            <a href="#">About</a>
          </li>
          <li>
            <a href="#">Works</a>
          </li>
          <li>
            <a href="#">News</a>
          </li>
          <li>
            <a href="#">Contact</a>
          </li>
        </ul>
      </nav>
      <form action="" class="site-header-search">
        <input type="search" name="s">
        <button class="site-header-search-btn"></button>
      </form>
    </div>
  </header>

  <main>