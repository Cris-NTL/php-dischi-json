const { createApp } = Vue

createApp({
    data() {
        return {
            items: []
        }
    },
    mounted() {
        axios.get("http://localhost/Boolean/php-dischi-json/server.php")
            .then((resp) => {
                console.log(resp);
                this.items = resp.data.results
            })
    }
}).mount('#app')
