<template>
    <div class="p-5">
        <h2 class=" text-center text-light mb-2">Signup Form</h2>
        <div class="alert-success text-center mb-2" v-show="success"> User Register Successfully ! </div>
        <form   @submit.prevent="addUser()"  >
            
                <div class="form-group">
                    <label   style="color:white; font:size:17px">Name</label>
                    <input type="text" class="form-control" name="name" v-model="reg.name"  placeholder="Enter Name">
                    <div class="alert-danger" v-if="error && error.name">
                        {{ error.name[0] }}
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1"  style="color:white; font:size:17px">Email address</label>
                    <input type="email" class="form-control" name="email" v-model="reg.email"  placeholder="Enter email">
                    <div class="alert-danger" v-if="error && error.email">
                        {{ error.email[0] }}
                    </div>
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1" style="color:white; font:size:17px">Password</label>
                    <input type="password" name="password" v-model="reg.password" class="form-control"  placeholder="Password">
                    <div class="alert-danger" v-if="error && error.password">
                        {{ error.password[0] }}
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1" style="color:white; font:size:17px">Confirm Password</label>
                    <input type="password" name="password_confirmation" v-model="reg.password_confirmation" class="form-control"  placeholder="Confirm Password">
                </div>
                <button class="btn btn-warning py-1" type="submit">SignUp</button><br><br>
                <router-link to="/login" ><a href="">Already Have An Account?</a> </router-link>
        </form>
    </div>
        
</template> 

<script>
export default {
    data: function(){
        return{
            reg:{},
            error:{},
            success: false,
        }
    },
    methods:{
        addUser(){
            axios.post('/register', this.reg)
            .then (response => {
                this.success = true,
                this.reg = {};
                this.error={};
                window.location.href = "/home";
            })
            .catch (error =>{
                if (error.response.status==422) {
                    this.error = error.response.data.errors;
                }
            });
        }
    }
}
</script>

<style>

</style>