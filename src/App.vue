<template>
  <div id="app">
    <img src="./assets/logo.png">
    <HelloWorld @get="getData"/>
  </div>
</template>

<script>
import axios from 'axios';
import HelloWorld from './components/HelloWorld'

export default {
  name: 'App',
  components: {
    HelloWorld
  },
  methods: {
    getData: function() {
      console.log('test2');
      axios.get('/api/')
        .then(response => {
          // JSON responses are automatically parsed.
          console.log(response.data);
          // this.posts = response.data
        })
        .catch(e => {
          console.log(e);
          // this.errors.push(e)
        })
    }
  }
}
</script>

<style>
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
