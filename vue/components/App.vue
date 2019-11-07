<template>
    <div>
        <p>Тест yii2 + vue.js</p>
 
        <router-link to="/users">Список пользователей</router-link>
        <router-link to="/vacations">Список отпусков</router-link>
 
        <router-view></router-view>
 
        <router-link to="/">Назад</router-link>
    </div>
</template>
 
<script>
 
export default {
 
  data () {
    return {
    }  
  },
 
  mounted: function () {
    //console.log('App component mounted');
  }
 
}
</script>
 
<style>
 
</style>