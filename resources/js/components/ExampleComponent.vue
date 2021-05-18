<template>
    <div class="container">
        <h2>Create Word File in Laravel</h2><br/>
        <form ref="form"  @submit.prevent="onSubmit" >
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="Name">Name:</label>
                    <input type="text" v-model="name" class="form-control" name="name">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="Email">Email:</label>
                    <input v-model="email" type="text" class="form-control" name="email">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="Number">Phone Number:</label>
                    <input type="text" v-model="number" class="form-control" name="number">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </div>
        </form>
    </div>
</template>

<script>
    export default {
        data(){
          return{
              name: '',
              email: '',
              number: ''
          }
        },
        methods:{
            onSubmit(){
                var vm = this
                var formdata = new FormData(vm.$refs.form);
                axios.post('/api/documents', formdata).then(function(response){
                    console.log(response.data)
                })
            }
        }
    }
</script>
