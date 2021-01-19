<template>
    <div class="relative-container">
        <div v-if="display" class="time-response-wrapper">
            <p class="response-message">
                Vreme potrebno za dostavu: {{ time }} minuta, Broj porudzbine: {{ order_id }}
            </p>
        </div>
    </div>
</template>

<script>
export default {

    props: ['order_id'],

    data() {
        return {
            time : 99,
            display: false,
            currentTime: ''
        }
    },

    mounted() {
        // Ime kanala na kome event emituje
        window.Echo.channel('time-response.' + this.order_id)
        // Ime samog eventa
        .listen('TimeResponse', (e) => {
            console.log('Ovo je sada iz komponente na kanalu order_id');

            // Show component at all customer views
            this.display = true;

            // Set time in minutes from that was send from backend
            this.time = e.time;
            
            console.log('alert sound');
            // Play alert sound 
            var audio = new Audio('http://www.soundjay.com/button/beep-07.wav'); // path to file
            audio.play();

        });
        // console.log('OMG Realtime bro');
    }

}
</script>

<style scoped>

    .relative-container {
        position: relative;
    }

    .time-response-wrapper {
        position: absolute;
        top: 3px;
        left: 0;
        right: 0;
        padding: 10px;
        background: rgba(255, 230, 0, 0.5);
        color: white;
    }

    .response-message {
        text-transform: uppercase;
        font-size: 20px;
    }
</style>