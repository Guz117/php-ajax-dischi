const App = new Vue(
  {
    el: '#app',
    data: {
      cards: []
    },
    created() {
        axios.get('http://localhost/settimana%2015%20php/php-ajax-dischi/server/controller-api.php?album=all')
        .then((result) => {
            this.cards = result.data;
        })
        .catch((error) => { console.log(error); });
    }
  }
);