<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap"
      rel="stylesheet"
    />
    
    <link rel="stylesheet" href="../css/styles.css" />
    <title>City Fitness - Strona Główna</title>
  </head>
  <body>
    <header>
      <div class="row" id="top">
        <div class="col-2 col-s-2"></div>
        <div class="col-8 col-s-8">
          <h1>City Fitness</h1>
        </div>
        <div class="col-2 col-s-2">
          <svg
            width="100"
            height="100"
            xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink"
          >
            <image
              id="znaczek"
              transform="rotate(10 0 50) scale(0.8)"
              xlink:href="https://mdn.mozillademos.org/files/6457/mdn_logo_only_color.png"
              height="100"
              width="100"
            />
            <animate
              xlink:href="#znaczek"
              attributeType="CSS"
              attributeName="opacity"
              from="1"
              to="0"
              dur="10s"
              repeatCount="indefinite"
            />
          </svg>
        </div>
      </div>

      <div class="row">
        <div class="col-4 col-s-4" id="line-space"></div>
        <div class="col-4 col-s-4" id="line"></div>
      </div>
      <div class="row">
        <div class="col-12 col-s-12"><h3>Klub Fitness</h3></div>
      </div>

      <nav class="col-12">
        <ul>
          <li class="active"><a href="/">Strona główna</a></li>
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
          <li><a href="/login">Konto</a></li>
        </ul>
      </nav>
    </header>
    <div class="row">
      <div class="col-2 space"></div>
      <section class="row col-8" id="strefy">
        <div class="col-12 name">
          <h2>Nasza oferta</h2>
        </div>
        <article class="col-12 col-s-12 ">
          <div>
            <h3>Strefa Wolnych Ciężąrów</h3>
            <p>
              Zapraszamy do strefy wolnych ciężarów, do Państwa dyspozycji
              oddajemy wysokiej klasy sprzęt marki Olymp. Ćwiczenie na nim to
              czysta przyjemność. Jego jakość gwarantuje Wam przyjemny i
              bezpieczny trening.
            </p>
          </div>
        </article>

        <article class="col-12 col-s-12 ">
          <div>
            <h3>Strefa Cardio</h3>
            <p>
              W strefie cardio znajdą Państwo 20 bieżni, 10 orbitreków, 10
              rowerów oraz 3 energonometry. Sprzęt na bieżąco serwisujemy i
              dbamy o to by zawsze spełniał wymagania nawet nabardziej
              zaawansowanych klientów.
            </p>
          </div>
        </article>

        <article class="col-12 col-s-12 ">
          <div>
            <h3>Strefa Fitness</h3>
            <p>
              Oprócz szerokiej gamy zajęć grupowych, dla klientów o każdym
              możlwiym stopniu zaawansowania, w godzinach gdy sala jest wolna
              jest oddana do Państwa użytku. Znajdą tam Państwo wszystkie
              akcesoria potrzebne do przeprowadzenia treningu.
            </p>
          </div>
        </article>
      </section>
    </div>
    <div class="row">
      <div class="col-2 space"></div>
      <section class="row col-8" id="personel">
        <div class="col-12 name">
          <h2>Nasi trenerzy</h2>
        </div>
        <article class="col-4 col-s-6 trainer">
          <div>
            <img src="../assets/boy.png" alt="Marek Kowalski" />
            <h3>Marek Kowalski</h3>
            <p>
              <i
                >"Sport to moja pasja od dziecka nie mogłem usiedzieć chwili bez
                ruchu. Teraz zarażam innych pozytwną energią"</i
              >
            </p>
          </div>
        </article>
        <article class="col-4 col-s-6 trainer">
          <div>
            <img src="../assets/001-man.png" alt="Jan Kakareko" />
            <h3>Jan Kakareko</h3>
            <p>
              <i
                >"Na swoich zajęciach przekazuje dobre oraz sprawdzone pryncypia
                sportów sylwetkowych, ze mną zajedziesz daleko"</i
              >
            </p>
          </div>
        </article>
        <article class="col-4 col-s-6 trainer">
          <div>
            <img src="../assets/004-woman.png" alt="Monika Pogorzelska" />
            <h3>Monika Pogorzelska</h3>
            <p>
              <i
                >"Zmienianie życia ludzi to moja pasja. Razem ze mną odmienisz
                swój wizerunek na zawsze. Pomogę Ci odnaleźć lepszą wersję
                samego siebie"</i
              >
            </p>
          </div>
        </article>
        <article class="col-4 col-s-6 trainer">
          <div>
            <img src="../assets/005-woman-1.png" alt="Maria Duma" />
            <h3>Maria Duma</h3>
            <p>
              <i
                >"Masz tylko jedno życie, wykorzystaj je nalepiej jak tylko
                potrafisz!" Zapraszam na zajęcia pod moim okiem, napewno się nie
                zawiedziesz</i
              >
            </p>
          </div>
        </article>
        <article class="col-4 col-s-6 trainer">
          <div>
            <img src="../assets/003-boy.png" alt="Kacper Stokarczuk" />
            <h3>Kacper Stokarczuk</h3>
            <p>
              <i
                >"Jestem profesjonalistą z wieloletnim doświadczeniem, moja
                wiedza zdecydowanie przyspieszy twoją droge do
                samospełnienia"</i
              >
            </p>
          </div>
        </article>
        <article class="col-4 col-s-6 trainer">
          <div>
            <img src="../assets/002-man-1.png" alt="Kuba Dudicz" />
            <h3>Kuba Dudicz</h3>
            <p>
              <i
                >"Jeśli chcesz dowiedzieć się jak to jest żyć pełnią życia
                zapraszam na moje zajęcia. Tu dostaniesz taki zastrzyk energii
                jakiego nigdy wcześniej nie doświadczyłeś"</i
              >
            </p>
          </div>
        </article>
      </section>
    </div>

    <div class="row" id="kontakt-trener">
      <div class="col-2 space"></div>
      <section class="row col-8">
        <div class="col-12 name">
          <h2>Kontakt do trenerów</h2>
        </div>
        <article class="col-12 col-s-12">
          <div class="row">
            <div class="col-12 col-s-12">
              Marek Kowalski:
              <a href="mailto:marek.kowalski@trener.pl"
                >marek.kowalski@trener.pl</a
              >
              &nbsp;&nbsp;&nbsp;&nbsp;
              <a href="http://marek-kowalski.pl">marek-kowalski.pl</a><br />
              Jan Kakareko:
              <a href="mailto:jan.kakareko@trener.pl">jan.kakareko@trener.pl</a
              >&nbsp;&nbsp;&nbsp;&nbsp;
              <a href="http://jan-kakareko.pl">jan-kakareko.pl</a><br />
              Monika Pogorzelska:
              <a href="mailto:monika.pogorzelska@trener.pl"
                >monika.pogorzelska@trener.pl</a
              >&nbsp;&nbsp;&nbsp;&nbsp;
              <a href="http://monika-pogorzelska.pl">monika-pogorzelska.pl</a
              ><br />
            </div>
          </div>
        </article>
      </section>
    </div>
    
    <div class="row">
      <div class="col-2 space"></div>
      <section class="row col-8">
        <div class="col-12 name">
          <h2>Galeria</h2>
        </div>
        <article class="col-12 col-s-12">
          <div class="row">
            <div class="col-3 col-s-6">
              <img class="gallery" src="../assets/1.jpg" alt="gym" />
            </div>
            <div class="col-3 col-s-6">
              <img class="gallery" src="../assets/2.jpg" alt="gym" />
            </div>
            <div class="col-3 col-s-6">
              <img class="gallery" src="../assets/3.jpg" alt="gym" />
            </div>
            <div class="col-3 col-s-6">
              <img class="gallery" src="../assets/4.jpg" alt="gym" />
            </div>
            <div class="col-3 col-s-6">
              <img class="gallery" src="../assets/5.jpg" alt="gym" />
            </div>
            <div class="col-3 col-s-6">
              <img class="gallery" src="../assets/6.jpg" alt="gym" />
            </div>
          </div>
        </article>
      </section>
    </div>

    <footer class="row">
      <div class="footer">
        <p class="foot">
          Strona została stworzona przez Wojciecha Adrycha na potrzeby projektu
          z HiH
          <br />
          Icons made by
          <a href="https://www.flaticon.com/authors/monkik" title="monkik"
            >monkik</a
          >
          from
          <a href="https://www.flaticon.com/" title="Flaticon"
            >www.flaticon.com</a
          ><br />
          <a href="#top">Do góry!</a> <br>
          <button id="darkmode" onclick="toggleDarkMode()">Dark mode</button>
        </p>
      </div>
    </footer>
    
  </body>
  
  <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
    <script src="../js/darkmode.js"></script>
</html>
