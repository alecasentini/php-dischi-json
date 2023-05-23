const { createApp } = Vue

createApp({
    data() {
        return {
            apiUrl: 'apis/listaAlbum.php',
            albums: []

        }
    },
    created() {
        console.log("init")
        axios.get(this.apiUrl)
            .then((res) => {
                this.albums = res.data;
            });
    }

}).mount('#app')