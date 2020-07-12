<template>
    <div>
        Rows is {{ rows }}
        <div v-if="loading">Loading</div>
        <div v-else>
            <div 
                class="row mb-4"
                v-for="row in rows"
                :key="'row' + row"
            >
                <div 
                    class="col"
                    v-for="(bookable, column) in bookablesInRow(row)"
                    :key="'row' + row + column"
                >
                    <BookableListItem 

                        

                        :title="bookable.title" 
                        :item-content="bookable.itemContent" 
                        :price="bookable.price"
                    >
                    </BookableListItem>

                    <div 

                        class="col"
                        v-for="p in placeholderInRow(row)"
                        :key="'placeholderInRow' + row + p"

                    >
                        
                    </div>
                </div>
            </div>
                
            
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

        methods: {

            bookablesInRow(row) {

                return this.bookables.slice((row - 1) * this.columns, row * this.columns);
            },

            placeholderInRow(row) {

                return this.columns - this.bookablesInRow(row).length;
            },

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
