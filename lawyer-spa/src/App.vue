<template>
  <div id="app">
    <!-- <img src="./assets/logo.png"> -->

  <!-- <div class="nav">
    <router-link to="/">Home</router-link>
     <router-link to="/hello">Hello</router-link>
    <router-link to="/anotherpage">Another Page</router-link>
    <router-link to="/firstroute/lawfirmscat">First Route</router-link>
  </div> -->


    <router-view/>
  </div>
</template>

<script>
export default {
  name: 'App'
}
</script>

<style>

* {margin:0;padding:0;outline: none;}


a {outline: none;}
a img {border:none}

textarea { resize: none;}

*, *:before, *:after {-moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box;}


html {-webkit-text-size-adjust: 100%;} /* Disables scaling on landscape mobile */


body {
-webkit-font-smoothing: antialiased;
-moz-osx-font-smoothing: grayscale;
text-shadow: 1px 1px 1px rgba(0,0,0,0.05);
line-height: 1;
font-family: 'Avenir', Helvetica, Arial, sans-serif;
text-align: center;
color: #2c3e50;
}

header, section, nav, footer {
	display: block;
}

input, textarea {
	-webkit-appearance: none;
	border-radius: 0;
}


</style>
