<template>
  <div class="search">
    
    <section id="main_search">

      <div class="main_search_wrapper">

        <form action="/action_page.php">
          <input type="text" placeholder="Search.." name="search">
          <input type="text" placeholder="Search.." name="search">
          <button type="submit">Search</button>
      </form>
    
    </div><!-- main_search_wrapper -->

    <div class="browse_wrapper">
      
      <span>Browse</span>

      <ul>
        <li><a href="">City</a></li>
        <li><a href="">City</a></li>
        <li><a href="">City</a></li>
        <li><a href="">City</a></li>
        <li><a href="">City</a></li>
      </ul>
    
    </div><!-- browse_wrapper -->

    </section><!-- main_search -->

  
  </div><!-- search -->
</template>

<script>

import axios from 'axios';

export default {
  name: 'SearchRoute',
  data () {
    return {
      posts: [],
      errors:[]
    }
  },
  created() {
    axios.get('http://lawyers-test.com/wp-json/wp/v2/lawfirm')
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

#main_search {
  height:100vh;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

.main_search_wrapper {
 
}

.browse_wrapper {
  margin:90px 0 0;
  ul {
    list-style: none;
  }
}



</style>
