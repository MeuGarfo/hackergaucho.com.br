<hr>
<h1 class="center">Comentários</h1>
<div id="disqus_thread" class="center">
    <a href="#" class="comments-holder" onclick="loadDisqus();return false;">Comentar</a>
</div>
<script>
var disqus_shortname = "hackergaucho";
var is_disqus_loaded = false;
function loadDisqus() {
  if (!is_disqus_loaded){
    is_disqus_loaded = true;
    var d = document, s = d.createElement('script');
    s.src = '//' + disqus_shortname +'.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
  }
};
</script>
