const App = new Vue(
  {
    el: '#app',
    data: {
      automobili: [],
      filtroColore: 'all',
      filtroTrasmissione: 'all',
      arrayFiltered: []
    },
    methods: {
      colorCars() {
        if (this.filtroColore !='all'  && this.filtroTrasmissione != "all") {
          this.arrayFiltered = this.automobili.filter((el) => {
            return el.colore == this.filtroColore && el.trasmissione == this.filtroTrasmissione; 
          });
        } else if (this.filtroColore == "all" && this.filtroTrasmissione != "all") {
          this.arrayFiltered = this.automobili.filter((el) => {
            return el.trasmissione == this.filtroTrasmissione;
          });
        } else if (this.filtroColore != "all" && this.filtroTrasmissione == "all") {
          this.arrayFiltered = this.automobili.filter((el) => {
            return el.colore == this.filtroColore;
          });
        } else {
          this.arrayFiltered = this.automobili;
        }
      }
    },
    created() {
      axios.get('http://localhost/php-snacks-b1/server/controller-api.php').then((result) => {
        this.automobili = result.data.results;
        this.arrayFiltered = this.automobili;
      }).catch((error) => { console.log(error); });
    }
  }
);