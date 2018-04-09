 <template v-if="page">
 
   <div class="firstroute" v-if="firstroute && firstroute != ''" :key="firstroute.id">

        <h1>{{firstroute.title.rendered}}</h1>

        <div class="page_content" v-html="firstroute.content.rendered"></div>

    </div><!-- anotherpage -->

</template>

 <script>
 
import axios from 'axios';

 export default {
  name: 'FirstRoute',
  data () {
    return {
      firstroute: [],
      errors:[]
    }
  },
  created:function() {
    axios.get('http://lawyers-test.com/wordpress/wp-json/wp/v2/pages/10')
    .then(response => {
      this.firstroute = response.data
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