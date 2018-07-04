<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Titulo enviado: {{ title }} </div>



                    <div class="card-body">
                        Eu sou o Componente exemplo com vue
                    </div>

                    <br>
                    <a href="/welcome">Welcome</a>
                    <br>
                    <a href="/">Home</a>

                    <div @click="ola('50')">Aqui Tem evento texto</div>



                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['title'],
        mounted() {
            console.log('Component mounted.')
        },
        methods: {

            ola (par)
            {
                alert('Ola mundo ' + par)
            }

        }
    }
</script>
