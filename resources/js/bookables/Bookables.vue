<template>
    <div>
        <BookableListItem 
        	:title="bookable1.title" 
        	:item-content="bookable1.itemContent" 
        	:price="bookable1.price">
    	</BookableListItem>
        <BookableListItem 
        	:title="bookable2.title" 
        	:item-content="bookable2.itemContent" 
        	:price="bookable2.price">
    	</BookableListItem>
        
    </div>
</template>

<script>

	import BookableListItem from "./BookableListItem";

    export default {

    	data: function() {

    		return {

    			bookable1: {
    				title: "Cheap Villa 1",
    				itemContent: "Cheap Villa 1",
    				price: 200,

    			},

    			bookable2: {
    				title: "Cheap Villa 2",
    				itemContent: "Cheap Villa 2",
    				price: 500,

    			},
    		}
    	},

    	beforeCreate() {
    		console.log('before create');
    	},

    	created() {
    		console.log('created');

    		setTimeout(() => {

				this.bookable1.title = 'Hello World';
				this.bookable2.title = 'Hello World 2';

    		}, 1000);
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
