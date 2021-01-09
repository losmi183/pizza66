<template>
    <div>
        <div class="order-nottification p-3 m-3">
            <div class="title-primary">Poslednja Porudzbina</div>
            <div class="d-flex justify-content-between align-items-center mt-2 bg-active p-2">
                <span>{{ id }}</span>
                <span>{{ time }}</span>
                <span>{{ name }}</span>
                <span>{{ phone }}</span>
                <!-- <span>{{ address }}</span> -->
                <span>{{ sum }} RSD</span>
                <a href="/admin/orders/" class="btn btn-secondary">Pogledaj</a>
            </div>
        </div>       

    </div>
</template>

<script>
    export default {

        props: ['id', 'time', 'name', 'phone', 'sum'],

        // data() {
        //     return {
        //         id : this.id,
        //         time: this.time,
        //         name : this.name,
        //         phone : this.phone,
        //         address : this.address,
        //         sum: this.sum
        //     }
        // },

        mounted() {      


            window.Echo.channel('order-tracker')
                .listen('PizzaOrdered', (e) => {
                    console.log('TEST OPET');
                    
                    location.reload();
                });
        }
    }
</script>
