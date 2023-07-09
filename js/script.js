const { createApp } = Vue

createApp({
    data() {
        return {
            hello: 'hello',
            apiUrl: 'server.php'
        }

    },
    mounted() {
        axios.get(this.apiUrl).then((response) => {
            console.log(response.data)
        })

    },
}).mount('#app')