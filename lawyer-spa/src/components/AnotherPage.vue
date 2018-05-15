 <template>
  <div>
<ais-index
    app-id="latency"
    api-key="3d9875e51fbd20c7754e65422f7ce5e1"
    index-name="bestbuy"
  >
    <ais-search-box></ais-search-box>
    <ais-results>
      <template slot-scope="{ result }">
        <h2>
          <ais-highlight :result="result" attribute-name="name"></ais-highlight>
        </h2>
      </template>
    </ais-results>
  </ais-index>

  </div>
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
    axios.get('http://lawyers-test.com/wp-json/wp/v2/pages/10')
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