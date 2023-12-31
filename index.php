<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <title>Document</title>
</head>
    <body>
        <div id="app">
            <div class="container mt-5">
                <div class="row">
                    <div class="col">
                        <div class="title m-3">
                            <h1>Todo List</h1>
                        </div>
                        
                        <div class="card p-4">
                            <ul class="list-group">
                                <li v-for="(task, index) in tasks" :key="index" class="list-group-item d-flex justify-content-between mb-1">
                                    <h5>{{task.text}}</h5>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary">
                                            <i class="fa-solid fa-check"></i>
                                        </button>
                                        <button type="button" class="btn btn-warning">
                                            <i class="fa-sharp fa-solid fa-file-pen"></i>
                                        </button>
                                        <button type="button" class="btn btn-danger">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </li>
                            </ul>
                            <ul class="list-group mt-2">
                                <li class="list-group-item d-flex justify-content-between">
                                    <div class="input-group">
                                        <input type="text" @keyup.enter="updateTasks" v-model="taskItem" class="form-control" placeholder="Inserisci task">
                                    </div>
                                    <button @click='updateTasks' type="button" class="btn btn-success">
                                        <i class="fas fa-plus"></i>
                                        <span>Aggiungi</span>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js"></script>
        <script type='text/javascript' src="./js/script.js"></script>
    </body>
</html>

