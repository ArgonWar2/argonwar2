<script>
var protocol = window.location.protocol;
var host = window.location.host;
var pathname = window.location.pathname;

var root = protocol + '//' + host + '/' + pathname;

alert('Expected: http://localhost/');
alert('root: '+root);
</script>