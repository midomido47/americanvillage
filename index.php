<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/reset.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
  <title>Welcome to Nexseed</title>
</head>

<body>
  <header>
    <div class="header-left">
      <img src="<?php echo get_template_directory_uri(); ?>/img/logo-white.png" alt="logo" class="logo">
      <span>NexSeed</span>
    </div>
    <input type="checkbox" id="wrap">
    <label class="hamburger" for="wrap">
      <span class="pate"></span>
    </label>
    <div class="header-right">
      <ul>
        <li>Programming</li>
        <li>English</li>
      </ul>
    </div>
    <?php wp_head(); ?> //:コロンはナミかっこの代わり
  </header>

  <main>
    <section class="container">
      <h1 class="title">Welcome to Nexseed</h1>
      <div id =""></>
      <ul class="guideline">
        <li>Be Athlete</li>
        <li>Go World</li>
        <li>Enjoy Everything</li>
      </ul>
    </section>
    <section class="programming">
      <h2>Programming</h2>
      <div class="contents">
        <p class="description">
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum, molestiae? Optio dolor rem necessitatibus pariatur odio nesciunt, nostrum magnam hic recusandae assumenda animi. Exercitationem mollitia earum eligendi animi porro consectetur?
        </p>
        <img src="<?php echo get_template_directory_uri(); ?>/img/programming.jpg" alt="programming">
      </div>
    </section>
    <section class="English">
      <h2>English</h2>
      <div class="contents">
        <p class="description">
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum, molestiae? Optio dolor rem necessitatibus pariatur odio nesciunt, nostrum magnam hic recusandae assumenda animi. Exercitationem mollitia earum eligendi animi porro consectetur?
        </p>
        <img src="<?php echo get_template_directory_uri(); ?>/img/programming.jpg" alt="English">
      </div>
    </section>
  </main>
  <footer>
    <p>Copyright <small>&copy;</small> SeedKun Inc.</p>
  </footer>
</body>

</html>