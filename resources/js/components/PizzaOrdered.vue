<template>
    <div>
    </div>
</template>

<script>
    export default {


        mounted() {      

        window.Echo.channel('order-tracker')
            .listen('PizzaOrdered', (e) => {
                console.log('New Order');                    
                // location.reload();

                // Play alert sound after reload
                // var audio = new Audio('http://www.soundjay.com/button/beep-07.wav'); // path to file
                // audio.play();

                var sound = document.getElementById("audio");
                console.log(sound);                    
                sound.play();

            });
        }
    }
</script>
