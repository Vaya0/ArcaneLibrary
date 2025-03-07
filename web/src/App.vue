<template>
  <div>test</div>
</template>

<script>
import axios from 'axios';

export default {
  name: 'App',
  components: {

  },
  mounted() {
    axios.get('http://127.0.0.1:8000/test')
      .then(response => {
      console.log(response.data);
      })
      .catch(error => {
      console.error('There was an error!', error);
      });
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #890505;
  margin-top: 60px;
}
</style>
