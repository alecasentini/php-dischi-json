const { createApp } = Vue

createApp({
    data() {
        return {
            apiUrl: 'apis/listaAlbum.php',
            albums: [],
            overlayVisible: false,
            overlayData: {}
        }
    },
    created() {
        axios.get(this.apiUrl)
            .then((res) => {
                this.albums = res.data;
            });
    },
    methods: {
        showOverlay(album) {
            this.overlayData = album;
            this.overlayVisible = true;
        },
        hideOverlay() {
            this.overlayVisible = false;
        }
    }

}).mount('#app')
