<template>
    <div>
        Rows is {{ rows }}
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
                loading: false,
                columns: 3,
    		}
    	},

        computed: {

            rows() {

                return this.bookables === null 
                ? 0
                : Math.ceil(this.bookables.length / this.columns)
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
                    {
                        title: "Cheap Villa 3",
                        itemContent: "Cheap Villa 3",
                        price: 500,

                    },
                    {
                        title: "Cheap Villa 4",
                        itemContent: "Cheap Villa 4",
                        price: 500,

                    },
                    {
                        title: "Cheap Villa 5",
                        itemContent: "Cheap Villa 5",
                        price: 500,

                    },
                    {
                        title: "Cheap Villa 6",
                        itemContent: "Cheap Villa 6",
                        price: 500,

                    },
                    {
                        title: "Cheap Villa 7",
                        itemContent: "Cheap Villa 7",
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
