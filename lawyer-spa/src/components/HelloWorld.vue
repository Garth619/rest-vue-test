<template>
  <div class="hello">
    
    <div v-for="pos in posts" :key="pos.id">

      <h1 v-html="pos.title.rendered"></h1>

      <p v-html="pos.content.rendered"></p>

     <div v-for="field in pos.acf.attorneys" :key="field.id">

       <p>{{field.name}}</p>

     </div>

    </div>

  </div>
</template>

<script>

import axios from 'axios';

export default {
  name: 'HelloWorld',
  data () {
    return {
      // msg: 'Welcome to Your Vue.js App',
      posts: []
    }
  },
  created:function() {
    axios.get('http://lawyers-test.com/wordpress/wp-json/wp/v2/lawfirm').then(response => this.posts = response.data);
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h1, h2 {
  font-weight: normal;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #42b983;
}
</style>
