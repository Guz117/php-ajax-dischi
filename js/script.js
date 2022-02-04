const App = new Vue(
  {
    el: '#app',
    data: {
      cards: [],
      textSearch: 'all'
    },
    created() {
        axios.get('http://localhost/settimana%2015%20php/php-ajax-dischi/server/controller-api.php?genre=all')
        .then((result) => {
            this.cards = result.data.results;
        })
        .catch((error) => { console.log(error); });
    },
    methods: {
      changeGenre() {
        console.log(this.textSearch);
        axios.get('http://localhost/settimana%2015%20php/php-ajax-dischi/server/controller-api.php?genre=' + this.textSearch)
          .then((result) => {
          console.log(result);
          this.cards = result.data.results;
        })
        .catch((error) => {
        console.log(error);
      })
      }
    }
  }
);