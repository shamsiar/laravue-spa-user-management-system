<template>
    <div>
        <h4  class=" p-3  font-weight-bold" >User List :</h4>
        <ul>
            <li v-for="user in users">{{ user.name }}</li>
        </ul>
    </div>
</template>

<script>
export default {
    data(){
        return{
            users : []
        }
    },
    created(){
        axios.get('/users')
        .then(response => this.users = response.data);
    }
}
</script>

<style>

</style>