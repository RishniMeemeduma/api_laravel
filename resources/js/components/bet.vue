<template>

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-md-8">

                <div class="card">

                    <div class="card-header">Laravel bet view</div>

    

                    <div class="card-body">

                        <div v-if="success != ''" class="alert alert-success" role="alert">

                          {{success}}

                        </div>

                        <form @submit="formSubmit" enctype="multipart/form-data">

                        <strong>bet:</strong>

                        <input type="text" class="form-control" v-model="stake_amount">

                        
    

                        <button class="btn btn-success">Submit</button>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

</template>

   

<script>

    export default {

        mounted() {

            console.log('Component mounted.')

        },

        data() {

            return {

              name: '',

              file: '',

              success: ''

            };

        },

        methods: {

            onFileChange(e){

                console.log(e.target.files[0]);

                this.file = e.target.files[0];

            },

            formSubmit(e) {

                e.preventDefault();

                let currentObj = this;

   

                const config = {

                    headers: { 'content-type': 'multipart/form-data' }

                }

    

                let formData = new FormData();

                formData.append('file', this.file);

   

                axios.post('/add_bet', formData, config)

                .then(function (response) {

                    currentObj.success = response.data.success;

                })

                .catch(function (error) {

                    currentObj.output = error;

                });

            }

        }

    }

</script>