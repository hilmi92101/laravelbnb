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
                    class="col d-flex align-items-stretch"
                    v-for="(bookable, column) in bookablesInRow(row)"
                    :key="'row' + row + column"
                >
                    <BookableListItem 

                        v-bind="bookable"
                        
                    >
                    </BookableListItem>

                    
                </div>

                <div class="col" v-for="p in placeholderInRow(row)" :key="'placeholderInRow' + row + p"></div>
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

            var self = this;

            this.loading = true;

            const request = axios.get("/api/bookables")
            .then(response  => {
                
                //console.log(response.data);

                this.bookables = response.data.data;
                //this.bookables.push({title:'x', description:'y'});
                this.loading = false;
            });

            //console.log(request);

    		
    	},

    	

        components: {
        	BookableListItem
        }
    }
</script>
