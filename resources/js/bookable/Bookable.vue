<template>
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h2>{{ bookable == null ? '' : bookable.title }}</h2>
                    <hr>
                    <article>{{ bookable == null ? '' : bookable.description }}</article>
                </div>      
            </div>
        </div>
        <div class="col-md-4">
            availability & prices
        </div>
    </div>
    
</template>

<script>
    export default {
        
        created() {
            console.log(this.$route.params.id);

            const id = this.$route.params.id;

            const request = axios.get(`/api/bookable/${id}`)
            .then(response  => {
                
                console.log(response.data);

                this.bookable = response.data;
            });
        },

        data() {

            return {
                bookable: null,
            }
        },




    }
</script>
