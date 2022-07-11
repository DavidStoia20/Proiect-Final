<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dentalux</title>
    <link rel="shortcut icon" type="image/png" href="images/favicon.png" />
    <!-- CSS only -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
    <script defer async src="index.js"></script>
  </head>
  <body>
    <!-- Aici incepe navbar-ul -->
    <nav class="navbar navbar-expand-lg nav-back sticky-top" id="nav">
      <div class="container">
        <a class="navbar-brand" href="#">Dentalux</a>
        <button
          class="navbar-toggler navbar-toggler-right"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#servicii">Servicii</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#despre">Despre noi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#programari">Programari</a>
            </li> 
          </ul>
          <a class="logout ms-auto" href="LOGOUT.php">Log-out</a>
        </div>

      </div>
    </nav>
    <!-- AICI SE TERMINA NAVBAR-UL -->
    <!-- hero image -->
    <section id="hero" class="d-flex align-item-center">
      <div class="container text-center position-relative">
        <h1>Ceva umplutura</h1>
        <h2>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus quia
          suscipit harum deleniti quis voluptas nisi fuga id, error nihil
          excepturi?
        </h2>
        <!-- Button trigger modal -->
<!-- <button type="button" class="main-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
Programeaza-te
</button> -->

      </div>
    </section>
    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Programare</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container">
          <div class="container-fluid mt-5">
            <form id="validare" action="index.html" method="GET">

  
              <label class="mx-4" for="name">Name:</label>
              <input
                type="text"
                id="name"
                name="name"
                placeholder="Nume complet"
              /><br /><br />
              <label class="mx-4" for="email">Email:</label>
              <input
                type="email"
                id="email"
                name="email"
                placeholder="exemplu@yahoo.com"
              /><br /><br />
              <label for="pnumber">Phone number:</label>
              <input type="text" id="pnumber" name="pnumber" /><br /><br />
              <input class="btn-Trimite" type="submit" value="Trimite" />
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

    <!-- programari -->

<section id="programari" class="programari mt-5 mb-3 py-5">
<div class="container">
        <div class="section-title">
          <h2 class="text-center">Programari</h2>
          </div>

          <table class="table table-hover">
      <thead>
        <tr>
          <th>ID</th>
          <th>userName</th>
          <th>userEmail</th>
          <th>userPnumber</th>
          <th>Edit</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $conn = new mysqli('localhost', 'myuser', '123', 'finalproject');

        // testez realizarea corectă a conexiunii
        if($conn->connect_error){
            echo 'Eroare! '.$conn->connect_error;
        }
            $interogare = "SELECT * FROM appointment ;";
            $result = $conn->query($interogare);
            if(!$result) {
              die("invalid query: " . $conn->error);
            }
        
        while($row = $result->fetch_assoc()) {
          echo"<tr>
          <td>" . $row["ID"] . "</td>
          <td>" . $row["userName"] . "</td>
          <td>" . $row["userEmail"] . "</td>
          <td>" . $row["userPnumber"] . "</td>
          <td>
          <a class='btn btn-danger'href='Delete.php' > Delete </a>
          </td>
        </tr>";
        }
      
        ?>
      </tbody>
    </table>

        <!---->
      </div>
</section>


    <!-- servicii -->
    <section id="servicii" class="servicii mt-5 mb-3 py-5">
      <div class="container">
        <div class="section-title">
          <h2 class="text-center">Servicii</h2>
          <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nostrum
            magni itaque iste! Cum, dicta error.
          </p>
        </div>
        <div class="row d-flex justify-content-around">
          <div class="card mt-5" style="width: 18rem">
            <img
              src="images/control.jpg"
              class="card-img-top"
              alt="missing pic."
            />
            <div class="card-body">
              <h4 class="m-auto">Control dentar</h4>
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
            </div>
          </div>
          <div class="card mt-5" style="width: 18rem">
            <img
              src="images/Radiografie-dentara..jpg"
              class="card-img-top"
              alt="missing pic."
            />
            <div class="card-body">
              <h4>radiografie dentara</h4>
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
            </div>
          </div>
          <div class="card mt-5" style="width: 18rem">
            <img
              src="images/ortodont.jpg"
              class="card-img-top"
              alt="missing pic."
            />
            <div class="card-body">
              <h4>Ortodont</h4>
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
            </div>
          </div>
          <div class="card mt-5" style="width: 18rem">
            <img
              src="./images/Stomdas-Endodontie.jpg"
              class="card-img-top"
              alt="missing pic."
            />
            <div class="card-body">
              <h4>Endodontie</h4>
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
            </div>
          </div>
          <div class="card mt-5" style="width: 18rem">
            <img
              src="./images/pedodontie.jpg"
              class="card-img-top"
              alt="missing pic."
            />
            <div class="card-body">
              <h4>Pedodontie</h4>
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
            </div>
          </div>
          <div class="card mt-5" style="width: 18rem">
            <img
              src="./images/chirurgie-orala.jpg"
              class="card-img-top"
              alt="missing pic."
            />
            <div class="card-body">
              <h4>Chirurgie-stomatologica</h4>
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
            </div>
          </div>

        </div>


        <!---->
      </div>
    </section>
    <section id="despre" class="about-section mt-5 mb-3 py-5">
      <div class="container">
        <div class="section-title">
          <h2 class="text-center">Despre noi</h2>
          <h4 class="mt-5">Povestea noastra</h4>
        </div>
        <div id="continut" class="row d-flex justify-content around mt-5">
          <p class="par mb-3">
            De douăzeci de ani punem focus pe acordarea de servicii medicale premium cu ajutorul celor mai inovatoare tehnici de tratament și a echipamentelor performante, precum și pe construirea unei echipe medicale dedicată performanței, pasionată de profesie și cu empatie pentru pacienți.  În prezent, echipa medicală <u> Dentalux </u>Group numără peste 60 de membri, pregătiți în a obține cele mai bune rezultate, de fiecare dată, pentru toți pacienții care ajung în clinicile noastre.
          </p>
          <p class="par mb-3">
            Eforturile susținute depuse de-a lungul timpului au făcut ca peste 33.000 de pacienți să aibă încredere în serviciile noastre și să ajungă să facă parte din marea familie <u> Dentalux.</u>  Faptul că peste 74% din pacienții noștri devin fideli și raman în sistem, reprezintă pentru noi cea mai mare satisfacție profesională și cea mai puternică dovadă a faptului că serviciile noastre sunt apreciate.
          </p>
          <p class="par mb-3">
            Poziționarea strategică a centrelor, în zone de interes turistic a condus la dezvoltarea segmentului de turism medical, național și international, care s-a dezvoltat de la sine, datorită cererii de servicii medicale dentare - marca <u>Dentalux.</u> 
          </p>
          <p class="par mb-3">
            Ne-am propus sa depasim mereu asteptarile pacienților noștri oferind servicii medicale la standarde premium, să investim în cele mai inovatoare echipamente și să acordăm cele mai avansate tratamente medicale, în deplină siguranță și confort.
          </p>
        </div>
        <div>
          <h4>Ce dotări avem în Clinica de Stomatologie </h4>
        </div>
        <div id="continut2" class="row d-flex justify-content around mt-5">
          <p class="par mb-3">
            Stomatologia evolueaza in permanenta pentru a se putea adapta nevoilor pacientilor din ziua de astazi. Daca nu ati vizitat un cabinet stomatologic de ceva timp, veti descoperi cu placere existenta unor tehnici si aparaturi moderne menite sa creasca calitatea actului medical.
          </p>
          <p class="par mb-3">
            Noile tehnici sunt menite sa ofere solutii moderne la problemele dentare traditionale. Exista o gama larga de aparaturi de ultima generatie din care medicul stomatolog poate alege in functie de cazul clinic si dotarile fiecarui cabinet.
          </p>
          <p class="par mb-3">
            Poate ca ati auzit sau ati citit pe diverse site-uri cum o serie de clinici ofera "aparatura de ultima generatie" sau "tratamente ultramoderne". Sa vedem in continuare care sunt aceste tehnici si aparaturi si cum pot ele creste calitatea si confortul tratamentelor dentare.
          </p>
          <p class="par mb-3">
            Diagnodent este un dispozitiv modern cu ajutorul caruia medicii stomatologi pot depista leziuni carioase incipiente. Aparatul, mic si portabil, foloseste calitatile fasciculelor laser si al ultrasunetelor pentru a depista cariile mici mai repede decat metodele traditionale.
          </p>
          <p class="par mb-3">
            Dispozitivul este extrem de folositor in descoperirea cariilor situate in zone greu de detectat cu ajutorul radiografiilor dentare (cum ar fi, de exemplu, santurile si fisurile de pe fata ocluzala a molarilor si premolarilor). Folosind Diagnodent-ul, acuratetea diagnosticului acestor leziuni incipiente creste semnificativ; prin urmare, tratamentul poate incepe imediat, impiedicand progresia cariilor si limitand pierderile de tesut dentar sanatos.
          </p>
          <p class="par mb-3">
            Abraziunea cu aer ofera o alternativa tratamentelor cu ajutorul frezei dentare. Abraziunea cu aer se foloseste mai ales pentru curatarea leziunilor carioase mici dar poate fi utilizata si pentru "repararea" unor obturatii vechi sau pentru indepartarea petelor superficiale de pe suprafata dintilor.
          </p>
          <p class="par mb-3">
            Abraziunea cu aer utilizeaza un jet fin de particule care este indreptat catre zona dintelui ce urmeaza a fi "curatata". Jetul contine un amestec de aer si particule de oxid de aluminiu, fiind propulsat cu ajutorul aerului comprimat ce circula prin aparat. Jetul se va "izbi" de dinte, indepartand treptat tesuturile cariate care vor fi ulterior absorbite printr-un mic tub.
          </p>
          <p class="par mb-3">
            In comparatie cu freza dentara traditionala, abraziunea cu aer nu va genera nici caldura, nici presiune si nici vibratii. In plus, trebuie adaugat si efectul psihologic, stiind ca pentru multe persoane, freza dentara reprezinta un motiv intemeiat de a trece cat mai rar pragul medicului stomatolog. De cele mai multe ori, abraziunea cu aer nu necesita anestezie; de asemenea, aceasta ajuta si la pastrarea unei cantitati mai mari de tesut dentar sanatos.
          </p>
          <img class="mb-5" src="./images/stomatologie-generala-bacau.jpg" alt="missing pic...">
          <img class="mb-5" src="./images/dentist-makes-surgery-to-woman-dental-clinic-1024x684.jpg" alt="missing pic...">  
        </div>
    </section>
    <!-- FOOTER -->
    <footer class="footer py-4 mt-5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-4 text-lg-left">
            Copyright &copy;Dentalux2022
          </div>
          <div class="col-lg-4 my-3 my-lg-0 ">
            <a href="https://www.instagram.com/">
              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
              </svg>
            </a>
            <a href="https://www.facebook.com/">
              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
              </svg>
            </a>
          </div>
        </div>
      </div>

    </footer>

    <!-- JavaScript Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>

 