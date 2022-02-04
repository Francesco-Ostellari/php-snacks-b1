<!-- Milestone 1
A partire dall'array realizzato stamattina, realizziamo una API che chiameremo con Vue. -->

<!-- Milestone 2
Stampiamo in una pagina tutte le auto con Vue. -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Automobili</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
</head>
<body>
  <!-- main -->
  <main id="app">
    <div class="container">
      <div class="row">
        <div class="col pb-3" v-for="automobile in automobili">
          <div class="automobili">
            <div>
              <img :src="automobile.immagine" :alt="automobile.marca">
            </div>
            <div>
              <span> id:</span>
              {{automobile.id}}
            </div>
            <div>
              <span>marca: </span>
              {{automobile.marca}}
            </div>
            <div>
              <span>prezzo: </span>
              {{automobile.prezzo}}
            </div>
            <div>
              <span>transazione</span>
              {{automobile.trazione}}
            </div>
            <div>
              <span>km: </span>
              {{automobile.km}}
            </div>
            <div>
              <span>modello: </span>
              {{automobile.modello}}
            </div>
            <div>
              <span>accessori: </span>
              <div v-html="automobile.accessori"></div>
            </div>
            <div>
              <span>carburante: </span>
              {{automobile.carburante}}
            </div>
            <div>
              <span>trasmissione: </span>
              {{automobile.trasmissione}}
            </div>
            <div>
              <span>cilindrata: </span>
              {{automobile.cilindrata}}
            </div>
            <div>
              <span>cavalli: </span>
              {{automobile.cavalli}}
            </div>
            <div>
              <span>numero proprietari precedenti: </span>
              {{automobile.proprietari}}
            </div>
              <div>
              <span>targa: </span>
              {{automobile.targa}}
            </div>
            <div>
              <span>colore: </span>
              {{automobile.colore}}
            </div>
            <div>
              <span>anno immatricolazione: </span>
              {{automobile.immatricolazione}}
            </div>
            <div>
              <span>numero porte: </span>
              {{automobile.porte}}
            </div>
            <div>
              <span>località: </span>
              {{automobile.località}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- footer -->
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <script src="js/script.js"></script>
</body>
</html>