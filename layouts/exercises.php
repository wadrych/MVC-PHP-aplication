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
    <link rel="stylesheet" href="../css/exercises_styles.css" />

    <title>City Fitness - Plan Zajęć</title>
    
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
          <li class="active"><a href="/exercises">Zajęcia</a></li class="active">
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
          <li><a href="/login">Konto</a></li>
        </ul>
      </nav>
    </header>

    <section class="row">
      <div class="col-1  space"></div>
      <div class="col-10 name">
        <h2>Plan zajęć</h2>
      </div>

      <div class="col-1  space" style="height:100px"></div>
      <div class="col-1 space"></div>
      <article class="col-10" id="contact">
        <div class="container">
          <div id="information">
            <p>
              W celu uzyskania dodatkowych informacji prosimy o kontakt
              telefoniczny
            </p>
          </div>
          <table>
            <thead>
              <tr>
                <th>Godz.</th>
                <th>Poniedziałek</th>
                <th>Wtorek</th>
                <th>Środa</th>
                <th>Czwartek</th>
                <th>Piątek</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>8:00</th>
                <td>
                  <h4>MODELOWANIE SYLWETKI</h4>
                  Piotrek
                </td>
                <td></td>
                <td>
                  <h4>MODELOWANIE SYLWETKI</h4>
                  Piotrek
                </td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <th>9:00</th>
                <td></td>
                <td>
                  <h4>STEP & SHAPE</h4>
                  Rysiek
                </td>
                <td></td>
                <td>
                  <h4>STEP & SHAPE</h4>
                  Rysiek
                </td>
                <td>
                  <h4>SZTANGI</h4>
                  Maciek
                </td>
              </tr>
              <tr>
                <th>10:00</th>
                <td>
                  <h4>JOGA</h4>
                  Kinga
                </td>
                <td></td>
                <td>
                  <h4>JOGA DLA SENIORÓW</h4>
                  Kinga
                </td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <th>17:00</th>
                <td>
                  <h4>SZTANGI</h4>
                  Maciek
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <th>18:00</th>
                <td>
                  <h4>FIT LADY</h4>
                  Natalia
                </td>
                <td>
                  <h4>Trampoliny</h4>
                  Monia
                </td>
                <td>
                  <h4>FIT LADY</h4>
                  Natalia
                </td>
                <td>
                  <h4>Trampoliny</h4>
                  Monia
                </td>
                <td>
                  <h4>ZUMBARASIL</h4>
                  Fabio
                </td>
              </tr>
              <tr>
                <th>19:00</th>
                <td>
                  <h4>BODY SHPAE</h4>
                  Monika
                </td>
                <td>
                  <h4>ZUMBARASIL</h4>
                  Fabio
                </td>
                <td>
                  <h4>ZDROWY KRĘGOSŁUP</h4>
                  Robert
                </td>
                <td>
                  <h4>ZUMBA</h4>
                  Gosia
                </td>
                <td>
                  <h4>STRETCHING</h4>
                  Łukasz
                </td>
              </tr>
              <tr>
                <th>20:00</th>
                <td>
                  <h4>ZDROWY KRĘGOSŁUP</h4>
                  Robert
                </td>
                <td>
                  <h4>POŚLADKI, PŁASKI BRZUCH</h4>
                  Ania
                </td>
                <td>
                  <h4>FIT BODY</h4>
                  Robert
                </td>
                <td>
                  <h4>POŚLADKI, PŁASKI BRZUCH</h4>
                  Martyna
                </td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>
      </article>
    </section>

    <footer class="row">
      <div class="footer">
        <p>
          Strona została stworzona przez Wojciecha Adrycha na potrzeby projektu
          z HiH
        </p>
      </div>
      
      <button id="darkmode" onclick="toggleDarkMode()">Dark mode</button>
    </footer>
  </body>
  
  <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <script src="../js/darkmode.js"></script>
</html>
