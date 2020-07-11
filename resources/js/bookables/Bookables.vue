<template>
    <div>
        <div v-if="loading">Loading</div>
        <div v-else>
            <BookableListItem 

                v-for="(bookable, index) in bookables"
                :key="index"

                :title="bookable.title" 
                :item-content="bookable.itemContent" 
                :price="bookable.price"
            >
            </BookableListItem>
        </div>
        
        
    </div>
</template>

<script>

	import BookableListItem from "./BookableListItem";

    export default {

    	data: function() {

    		return {

    			bookables: null,
                loading: false
    		}
    	},

    	created() {

            this.loading = true;

    		setTimeout(() => {

				this.bookables = [

                    {

                        title: "Cheap Villa 1",
                        itemContent: "Cheap Villa 1",
                        price: 200,

                    },
                    {
                        title: "Cheap Villa 2",
                        itemContent: "Cheap Villa 2",
                        price: 500,

                    },


                ];

                this.loading = false;

    		}, 1000);
    	},

    	

        components: {
        	BookableListItem
        }
    }
</script>
