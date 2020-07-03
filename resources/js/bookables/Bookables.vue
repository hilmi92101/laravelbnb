<template>
    <div>
        <BookableListItem title="Cheap Villa" item-content="A very cheap villa 1" :price="200"></BookableListItem>
        <BookableListItem title="Cheap Villa 2" item-content="A very cheap villa 2" :price="300"></BookableListItem>
    </div>
</template>

<script>

	import BookableListItem from "./BookableListItem";

    export default {

    	beforeCreate() {
    		console.log('before create');
    	},

    	created() {
    		console.log('created');
    	},

    	beforeMount() {
    		console.log('before mount');
    	},

        mounted() {
            console.log('Component mounted')
        },

        beforeDestroy() {
            console.log('before destroy')
        },

        destroyed() {
            console.log('destroyed')
        },

        components: {
        	BookableListItem
        }
    }
</script>
