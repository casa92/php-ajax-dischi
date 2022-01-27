Vue.config.devtools = true;


const app = new Vue({
    el: '#root',
    data: {
        discs: [],
        searchText: ''
    },
    methods: {
        getDiscData: function() {
            axios.get('http://localhost:8888/php-ajax-dischi/server.php',
            {
                params: {
                    genre: this.searchText
                }
            })
            
            .then((response) => {
                this.discs = response.data;
            });
        },
        resetSearch: function() {
            this.searchText = '';
            this.getDiscData();
        }
    },
    created: function() {
        this.getDiscData();
    }
});