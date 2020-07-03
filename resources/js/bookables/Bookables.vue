<template>
    <div>
        <BookableListItem 
        	v-if="bookable1 !== null"
        	:title="bookable1.title" 
        	:item-content="bookable1.itemContent" 
        	:price="bookable1.price">
    	</BookableListItem>
        <BookableListItem 
        	v-if="bookable2 !== null"
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

    			/*bookable1: {
    				title: "Cheap Villa 1",
    				itemContent: "Cheap Villa 1",
    				price: 200,

    			},

    			bookable2: {
    				title: "Cheap Villa 2",
    				itemContent: "Cheap Villa 2",
    				price: 500,

    			},*/

    			bookable1: null,
    			bookable2: null,
    		}
    	},

    	beforeCreate() {
    		console.log('before create');
    	},

    	created() {
    		console.log('created');

    		setTimeout(() => {

				this.bookable1 = {
    				title: "Cheap Villa 1",
    				itemContent: "Cheap Villa 1",
    				price: 200,

    			}

    			this.bookable2  = {
    				title: "Cheap Villa 2",
    				itemContent: "Cheap Villa 2",
    				price: 500,

    			}

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
