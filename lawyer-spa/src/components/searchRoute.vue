<template>
  <div class="search">

    <ais-index
    app-id="2J8AZGPKXS"
    api-key="ff8cae4a798729b8a1fd90dfb0f95add"
    index-name="wp_posts_lawfirm"
  >
    <ais-search-box></ais-search-box>
    <ais-results>
      <template slot-scope="{ result }">

            {{result.post_title}}

        <!-- <h2>
          <ais-highlight :result="result" attribute-name="name"></ais-highlight>
        </h2> -->
      </template>
    </ais-results>
  </ais-index>
    
    <section id="main_search">

      <div v-if="searching">
	    	<i>Searching...</i>
	  </div>

      <div class="main_search_wrapper">
        
          
          <input v-model="term" type="search">
          <input v-model="termtwo" type="search">
          <button @click="search">Search</button>
      
      </div><!-- main_search_wrapper -->

      <div class="browse_wrapper">
      
      <span>Browse by:</span>

      <ul>
        <li><a href="">City</a></li>
        <li><a href="">Practice Areas</a></li>
        <li><a href="">Attorneys</a></li>
        <li><a href="">State</a></li>
        <li><a href="">County</a></li>
        
        <li><a href=""></a></li>
      </ul>
    
    </div><!-- browse_wrapper -->


      



    </section><!-- main_search -->

    <section class="search_results_wrapper">
      
      <div class="results" v-for="pos in posts" :key="pos.id">

      <h1 v-html="pos.title.rendered"></h1>

      <p v-html="pos.content.rendered"></p>

     <div v-for="field in pos.acf.attorneys" :key="field.id">

       <p>{{field.attorney_name}}</p>

     </div>

    
    <div v-for="cat in pos.lawfirmcat" :key="cat.id">

      {{cat}}
      
    </div>


  </div><!-- results -->

  <div v-if="noResults">
		Sorry, but no results were found.
	</div>
    
    </section><!-- search_results_wrapper -->

  
  </div><!-- search -->
  
</template>

<script>

import axios from 'axios';

export default {
  name: 'SearchRoute',
  data () {
    return {
      term:[],
      termtwo:[],
      posts: [],
      errors:[],
      noResults:false,
      searching:false
    }
  },
	methods:{
		search:function() {
      this.searching = true;
      axios.get('http://lawyers-test.com/wp-json/wp/v2/lawfirm?search=' + this.term + '')
      .then(response => {
        this.posts = response.data;
        this.noResults = this.posts.length === 0;
        this.searching = false;
      })
      .catch(e => {
        this.errors.push(e)
      })
    }
	}
}
</script>

<style scoped lang="scss">

#main_search {
  height:500px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}



.browse_wrapper {
  margin:120px 0 0;
  ul {
    list-style:none;
    margin:20px 0 0;
    li {
      display: inline-block;
      margin:0 10px;
    }
  }
}



</style>
