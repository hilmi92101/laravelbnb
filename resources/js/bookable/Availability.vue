<template>
    <div>
        <h6 class="text-uppercase text-secondary font-weight-bolder">Check Availability</h6>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="from">From</label>
                <input 
                    type="text" 
                    name="from" 
                    class="form-control form-control-sm" 
                    placeholder="Start Date"
                    v-model="from"
                    @keyup.enter="check"
                >

            </div>
            <div class="form-group col-md-6">
                <label for="to">To</label>
                <input 
                    type="text" 
                    name="to" 
                    class="form-control form-control-sm" 
                    placeholder="To Date"
                    v-model="to"
                    @keyup.enter="check"
                >

            </div>

            <button class="btn btn-secondary btn-block" @click="check" :disable="loading">Check!</button>
        </div>
    </div>
    
</template>

<script>
    export default {
        
        created() {
            
        },

        data() {

            return {
                from: null,
                to: null,
                loading: false,
                status: null,
                errors: null,
            }
        },

        methods: {

            check() {

                this.loading = true;
                this.errors = true;
                

                var id = this.$route.params.id;
                var from = '2020-11-06';
                var to = '2020-11-07';
                var url = `/api/bookables/${id}/availability?from=${from}&to=${to}`;

                //console.log(url);

                var self = this;

                const request = axios.get(url)
                .then(response  => {
                    
                    this.status = response.status;
                    this.loading = false;
                    console.log(response.data);

                }).catch(error => {

                    if(422 === error.response.status){
                        this.errors = error.response.data.errors;
                    }

                    this.status = error.response.status;

                }).then(()  => {
                    
                    this.loading = false;

                });
            },
        },




    }
</script>

<style scoped>
    
    label {

        font-size: 0.7rem;
        text-transform: uppercase;
        color: gray;
        font-weight: bolder;
    }

</style>
