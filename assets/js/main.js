const { createApp } = Vue

createApp({
    data() {
        return {
            apiUrl: 'apis/listaAlbum',
            albums: []

        }
    },
    created() {
        axios.get(this.apiUrl)
            .then((res) => {
                this.albums = res.data;
            });
    }

}).mount('#app')