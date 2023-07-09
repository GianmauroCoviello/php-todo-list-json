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
    methods: {
        updateTasks() {
            const data = {
                text: this.taskItem,
                done: this.done
            }

            axios.post(this.apiUrl, data, {
                header: ('Content-Type: multipart/form-data')

            }).then((response) => {
                this.taskItem = ''
                this.done = ''
                this.tasks = response.data

            })
        }
    },
}).mount('#app')