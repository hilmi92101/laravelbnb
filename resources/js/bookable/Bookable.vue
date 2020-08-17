<template>
    <div>
        sss
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
