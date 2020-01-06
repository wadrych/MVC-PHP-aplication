<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="../css/styles.css" />
    <title>City Fitness - Galeria</title>


  </head>
  <body>
    <header class="row">
      <div class="col-12">
        <h1>City Fitness</h1>
        <div class="row">
          <div class="col-4" id="line-space"></div>
          <div class="col-4" id="line"></div>
        </div>

        <h3>Klub Fitness</h3>
      </div>

      <nav class="col-12">
        <ul>
          <li><a href="/">Strona główna</a></li>
          <li><a href="/exercises">Zajęcia</a></li>
          <li>
            <div class="dropdown">
              <div class="dropbtn">
                <a href="/contact" id="contact-drop">Kontakt</a>
              </div>
              <div class="dropdown-content">
                <a href="/#kontakt-trener">Do trenerów</a>
              </div>
            </div>
          </li>
          <li><a href="../gallery/1">Galeria</a></li>
          <li class="active"><a href="../favourites">Ulubione</a></li>
          <li><a href="/login">Konto</a></li>
        </ul>
      </nav>
    </header>

    <section class="row">
      <div class="row">
        <div class="col-2 space"></div>
        <section class="row col-8">
          <form id="save_choosed" action="/favourites/delete" method="POST" enctype="multipart/form-data">
          <div class="col-12 name">
            <input type="submit" class="btn" value="Usuń wybrane z ulubionych"></a>
            <h2>Ulubione</h2>
          </div>
          <?php  foreach($images as $image): ?>
          <article class="col-4 col-s-6">
            <div class="pic_holder">
              <a href="/images/watermark_<?php echo $image->id .  '.' . $image->format; ?>">
                <img class="gallery_1" src="/images/thumbnail_<?php echo $image->id .  '.' . $image->format; ?>"></img>
              </a>
              <p>
                <?php echo $image->name ?> - <?php echo $image->author ?>
                <input type="checkbox" name="image[]" value="<?php echo  $image->id; ?>">
              </p>
            </div>
          </article>
          <?php endforeach; ?>
          </form>
          </div>
        </section>
      </div>
    </section>

    <footer class="row">
      <div class="footer">
        <p>
          Strona została stworzona przez Wojciecha Adrycha na potrzeby projektu
          z HiH
        </p>
      </div>
      <br />
      <button id="darkmode" onclick="toggleDarkMode()">Dark mode</button>
    </footer>
  </body>
  
  <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

<script src="../js/darkmode.js"></script>
</html>
