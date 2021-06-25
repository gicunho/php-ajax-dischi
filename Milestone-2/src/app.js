const app = new Vue({
    el: '#root',
    data: {
        albums: null
    },
    methods: {
    },
    mounted() {
        axios.get('./src/api/albums_api.php')
        .then(resp => {
            console.log(resp.data);
            this.albums = resp.data;
        }).catch(e => {
            console.error(e);
        })
    }
})