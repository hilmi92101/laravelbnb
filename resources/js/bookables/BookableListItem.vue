<template>
    <div>
        <h3>{{ title }}</h3>
        <p>{{ itemContent }}</p>
        <p>{{ price }}</p>
    </div>
</template>

<script>
    export default {
        
        mounted() {
            console.log('Component mounted.')
        },



        props: {
            "title": String,
            "itemContent": String,
            "price": Number,
        },


    }
</script>
