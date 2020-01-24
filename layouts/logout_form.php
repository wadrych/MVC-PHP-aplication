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
    <title>City Fitness - Logowanie</title>
    
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
          <li><a href="../favourites">Ulubione</a></li>
          <li class="active"><a href="/login">Konto</a></li>
        </ul>
      </nav>
    </header>

    <section class="row">
      <div class="col-2  space"></div>
      <div class="col-8 name">
        <h2>Konto</h2>
      </div>
      <div class="col-2  space" style="height:100px"></div>
      <div class="col-2 space"></div>
        <?php 
            if($message != "")
            {
              echo '
              <article class="col-8 col-s-12">
                <div class="col-12 warning" >
                    <p>'
                        .$message. 
                    '</p>    
                </div>
              </article>
              <div class="col-2  space" ></div>
              </div>
              <div class="col-12 row">
              <div class="col-2 space"></div>';
            }
        ?>
      <article class="col-8 col-s-12">
        <div class="container">
          <form id="logout"  action="../login/logout" method="POST" enctype="multipart/form-data">
          <div class="row">
            <div class="col-6">
              <p>Zalogowano jako:
                <?php echo $_SESSION['login']; ?>
              </p>
            </div>
            <div class="col-6">
              <input type="submit" value="Wyloguj">
            </div>
          </div>  
          </form>
        </div>
      </article>
    </section>

    <footer class="row">
      <div class="footer">
        <p>
          Strona została stworzona przez Wojciecha Adrycha na potrzeby projektu
          z HiH
        </p>
      </div> <br>
      <button id="darkmode" onclick="toggleDarkMode()">Dark mode</button>
    </footer>
  </body>
  <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  
  <script src="../js/darkmode.js"></script>
</html>
