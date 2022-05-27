<template>
    <div  >
        <router-link to="" ><div v-bind:class="{ effect: ifActive }"   @click="close_modal" class="modals_bg"></div></router-link>
        <router-link to="/login" ><button @click="open_modal" class="btn btn-secondary sign_btn  " >SignUp</button></router-link>
        <div v-bind:class="{ effect: ifActive }"  class="modals">
            <router-view></router-view>
        </div>
    </div>
    
</template>

<script>
export default {
    data() {
        return {
            ifActive : true,
        }
    },
    methods: {
        open_modal() {
            this.ifActive = false;
            
        },
        close_modal(){
            this.ifActive = true;

        }
    }
}
</script>

<style>
.effect{
    display: none;
    transition: .5s;
}
.modals_bg{
    width: 100%;
    height: 100%;
    left: 0;
    top: 0;
    background: rgba(48, 48, 48, 0.623);
    position: fixed;
    z-index: 1;
    transition: .5s;
}
.modals{
    min-width: 350px;
    background: rgb(78, 78, 78);
    width: 20%;
    height: 700px;
    position: fixed;
    top: 100px;
    z-index: 9999;
    transition: .5s;
    right: 40%;
}
@media only screen and (max-width: 768px) {
    .modals{
        right: 25%;
    }
}
@media only screen and (max-width: 550px) {
    .modals{
        right: 15%;
    }
}

</style>