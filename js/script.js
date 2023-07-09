const { createApp } = Vue

createApp({
    data() {
        return {
            apiUrl: 'server.php',
            tasks: []
        }

    },
    mounted() {
        axios.get(this.apiUrl).then((response) => {
            console.log(response.data)
            this.tasks = response.data
        })

    },
}).mount('#app')