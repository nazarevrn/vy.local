<template>
    <div class="vacation">
        <h1>Просмотр отпуска с ID={{vacation.id}}</h1>
        <form>
        <div>
            <label for="user_id">User_id</label>
            <span>{{vacation.user_id}}</span>
        </div>
        <div>
            <label for="begin">Begin</label>
            <span>{{vacation.begin}}</span>
        </div>
        <div>
            <label for="end">End</label>
            <span>{{vacation.end}}</span>
        </div>
        <div>
            <label for="status">Status</label>
            <span>{{vacation.status}}</span>
        </div>
        </form>    
    </div>
</template>
 
<script>
import axios from 'axios';
 
export default {
    data() {
        return {
            vacation: {}
        }
    },
    created() {
        this.loadVacationsDetails(this.$route.params.id);
    },
 
    methods: {
        loadVacationsDetails(id) {
            axios
              .get("/vacations/"+id)
              .then(response => (this.vacation = response.data))
              .catch(error => console.log(error));                
        }
    },
 
    watch: {
        '$route.params.id' (id) {
            this.loadVacationsDetails(id);
        }
    }
 
    }    
</script>
 
<style scoped>
    .vacation {
        border: 1px solid grey;
        border-radius: 10px;
        margin: 10px 0;
        padding: 10px;  
    }
</style>