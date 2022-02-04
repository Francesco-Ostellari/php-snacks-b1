const App = new Vue(
  {
    el: '#app',
    data: {
      automobili: []
    },
    created() {
      axios.get('http://localhost/php-snacks-b1/server/controller-api.php').then((result) => {
        this.automobili = result.data.results;
      }).catch((error) => { console.log(error); });
    }
  }
);