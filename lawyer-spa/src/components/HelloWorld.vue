<template>
  <div class="hello">
    
    <div v-for="pos in posts">

      <h1 v-html="pos.title.rendered"></h1>

      <p v-html="pos.content.rendered"></p>

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
    axios.get('http://lawyers-test.com/wordpress/wp-json/wp/v2/lawfirm').then(response => {

      for(let post in response.data) {
        this.posts.push(response.data[post]);
      }

    });
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
