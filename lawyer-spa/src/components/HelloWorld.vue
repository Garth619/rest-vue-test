<template>
  <div class="hello">
    
    <div v-for="pos in posts" :key="pos.id">

      <h1 v-html="pos.title.rendered"></h1>

      <p v-html="pos.content.rendered"></p>

     <div v-for="field in pos.acf.attorneys" :key="field.id">

       <p>{{field.name}}</p>

      <p>{{field.position}}</p>

     </div>

    
    <div v-for="cat in pos.lawfirmcat" :key="cat.id">

      {{cat}}
      
    </div>


  </div>

  <div class="errors" v-for="error of errors" :key="error.id">

    {{error.message}}
  
  </div><!-- errors -->

  </div><!-- hello -->
</template>

<script>

import axios from 'axios';

export default {
  name: 'HelloWorld',
  data () {
    return {
      posts: [],
      errors:[]
    }
  },
  created() {
    axios.get('http://lawyers-test.com/wp-json/wp/v2/lawfirm?search=Garrett')
    .then(response => {
      this.posts = response.data
    })
    .catch(e => {
      this.errors.push(e)
    })
  }
}
</script>

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
