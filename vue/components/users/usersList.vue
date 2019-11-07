<template>
    <div class="users">
        <h1>Список пользователей</h1>
	<ul>
            <li v-for="user in users" :key="user.id">                
                <a href="#" class="" @click="viewUsersDetails(user.id)">{{user.id}}</a>
            </li>
	</ul>
    </div>
</template>
<script>    
import axios from 'axios';
 
export default {
    data() {
      return {
          users: [],
      }  
    },    
    created() {        
        this.loadUsersList();
    },
    methods: {
        loadUsersList() {
            axios
              .get("/users")
              .then(response => (this.users = response.data))
              .catch(error => console.log(error));            
        },
        viewUsersDetails(id) {           
            this.$router.push('users/'+id);
        }
    }
}
</script>
 
<style scoped>
    .users {
        border: 1px solid grey;
        border-radius: 10px;
        margin: 10px;
        padding: 10px;  
    }
</style>