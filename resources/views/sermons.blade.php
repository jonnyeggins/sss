<!DOCTYPE html>
<html>
<head>
	<title>
		Test
	</title>
</head>
<body>
	<script src="https://cdn.jsdelivr.net/npm/vue"></script>

	<h1 id="app">Hello ${message}</h1>

<script type="text/javascript">
	var app = new Vue({
		delimiters: ['${', '}'],
	  el: '#app',
	  data: {
	    message: 'Hello Vue!'
	  },
	  methods: {
	    refreshMessage(resource) {
	      this.$http.get('/getLatestSermons').then((response) {
	        this.message = response.data.message;
	      });
	    }
	  }
	});
	app.refreshMessage();	
</script>
</body>
</html>