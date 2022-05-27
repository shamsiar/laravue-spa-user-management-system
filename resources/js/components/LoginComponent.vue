<template>
    <div class="p-5">
        <h2 class=" text-center text-light mb-5">Login Form</h2>
        <div class="alert alert-danger" v-if="error && error.email ">
            {{ error.email[0] }}
        </div>
        <form @submit.prevent="loginUser()">
            <div class="form-group">
                <label for="exampleInputEmail1"  style="color:white; font:size:17px">Email address</label>
                <input v-model="log.email" name="email" type="email" v-bind:class="{ error: haveError } " class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1" style="color:white; font:size:17px">Password</label>
                <input v-model="log.password" name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <button class="btn btn-success py-1">Login</button>
            <div class="form-group mt-3">
                <router-link to="/signup" ><a href="/signup">New User? Click Here</a></router-link>
            </div>
        </form>
    </div>
</template>

<script>
export default {
    data: function(){
        return{
            log:{},
            error:{},
            haveError: false,
        }
    },
    methods:{
        loginUser(){
            axios.post('/login', this.log)
            .then (response => {
                this.error={};
                this.haveError=false;
                window.location.href = "/home";
            })
            .catch (error =>{
                if (error.response.status==422) {
                    this.haveError=true;
                    this.error = error.response.data.errors;
                }
            });
        }
    }
}
</script>


<style>
.error{
    border: 1px solid red;

}

</style>