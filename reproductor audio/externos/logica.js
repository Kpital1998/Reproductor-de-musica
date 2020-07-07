new Vue({
    el:".container",
    data:{
        titulo:"Canciones",
        //Direccion del archivo
        direccion:"musica/",
        //Esta es una variable para mostrar el nombre de las canciones
        cancion:"Cancion",
        //Variable creada para almacenar iconos
        icon:"fa fa-play"
    },
    methods:{
        reproducir(){
            var audio = document.getElementById("audio")
            audio.play()
            this.icon="fa fa-pause"
        },

        pausar(){
            var audio = document.getElementById("audio")
            audio.pause()
            this.icon="fa fa-play"
        }
    }
});