<template>
    <div class="user">
        <h1>Просмотр пользователя с ID={{user.id}}</h1>
        <form>
        <div>
            <label for="user_id">User_id</label>
            <span>{{user.id}}</span>
        </div>
        <div>
            <label for="login">Login</label>
            <span>{{user.login}}</span>
        </div>
        <div>
            <label for="email">Email</label>
            <span>{{user.email}}</span>
        </div>
        <div>
            <label for="surname">Фамилия</label>
            <span>{{user.surname}}</span>
        </div>
        <div>
            <label for="name">Имя</label>
            <span>{{user.name}}</span>
        </div>
        <div>
            <label for="updatet_at">Изменен</label>
            <span>{{user.updatet_at}}</span>
        </div>
        <div>
            <label for="created">Создан</label>
            <span>{{user.created}}</span>
        </div>
        </form>    
    </div>
</template>
 
<script>
import axios from 'axios';
 
export default {
    data() {
        return {
            user: {}
        }
    },
    created() {
        this.loadUsersDetails(this.$route.params.id);
    },
 
    methods: {
        loadUsersDetails(id) {
            axios
              .get("/users/"+id)
              .then(response => (this.user = response.data))
              .catch(error => console.log(error));                
        }
    },
 
    watch: {
        '$route.params.id' (id) {
            this.loadUsersDetails(id);
        }
    }
 
    }    
</script>
 
<style scoped>
    .user {
        border: 1px solid grey;
        border-radius: 10px;
        margin: 10px 0;
        padding: 10px;  
    }
</style>