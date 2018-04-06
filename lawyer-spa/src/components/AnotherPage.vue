 <template v-if="page">
 
   <div class="anotherpage" v-if="page && page != ''" :key="page.id">

        <h1>{{page.title.rendered}}</h1>

        <div class="page_content" v-html="page.content.rendered"></div>

    </div><!-- anotherpage -->

</template>

 <script>
 
import axios from 'axios';

 export default {
  name: 'AnotherPage',
  data () {
    return {
      page: [],
      errors:[]
    }
  },
  created:function() {
    axios.get('http://lawyers-test.com/wordpress/wp-json/wp/v2/pages/10')
    .then(response => {
      this.page = response.data
    })
    .catch(e => {
      this.errors.push(e)
    })
  }
}
 
 </script>

 <style>
 
 .page_content {
    max-width:500px;
    margin:0 auto;
 }
 
 </style>