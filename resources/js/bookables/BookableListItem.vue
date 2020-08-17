<template>

    <div class="card w-100">
        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
        <div class="card-body">
            <h5 class="card-title">{{ title }}</h5>
            <p class="card-text">{{ itemDescription }}</p>
            <p class="card-text">{{ price }}</p>
            <a href="#" class="btn btn-primary">Details</a>
        </div>
    </div>
</template>

<script>
    export default {
        
        mounted() {
            //console.log('Component mounted.')
        },


        props: {
            "title": String,
            "itemDescription": String,
            "price": Number,
        },


    }
</script>
