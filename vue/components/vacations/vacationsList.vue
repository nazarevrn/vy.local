<template>
    <div class="vacations">
        <h1>Список отпусков</h1>
	<ul>
            <li v-for="vacation in vacations" :key="vacation.id">                
                <a href="#" class="" @click="viewVacationsDetails(vacation.id)">{{vacation.id}}</a>
            </li>
	</ul>
    </div>
</template>
<script>    
import axios from 'axios';
 
export default {
    data() {
      return {
          vacations: [],
      }  
    },    
    created() {        
        this.loadVacationsList();
    },
    methods: {
        loadVacationsList() {
            axios
              .get("/vacations")
              .then(response => (this.vacations = response.data))
              .catch(error => console.log(error));            
        },
        viewVacationsDetails(id) {           
            this.$router.push('vacations/'+id);
        }
    }
}
</script>
 
<style scoped>
    .vacations {
        border: 1px solid grey;
        border-radius: 10px;
        margin: 10px;
        padding: 10px;  
    }
</style>