<template>
    <form action="">
        <v-selectpage
            v-model="form"
            :data="users"
            key-field="id"
            show-field="name"
            :multiple="true"
        ></v-selectpage>
        <button type="submit" class="btn btn-sm btn-outline-danger float-right mt-3" @click.prevent="save()">Submit</button>
    </form>

</template>

<script>
    export default {
        name: "SelectPage",
        data(){
            return {
                users: [],
                form: ''
            }
        },
        created(){
            this.getUsers();
        },
        methods: {
            getUsers(){
                axios.get('/users')
                    .then(res => {
                        this.users = res.data;
                    }).catch(err => {
                    console.log(err)
                });
            },
            save(){
                console.log(this.form)
            }
        }
    }
</script>

<style scoped>

</style>
