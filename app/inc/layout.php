<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
<head>
    <meta charset="utf-8">
    <title><?php print $title; ?></title>
    <meta name="viewport" content="width=device-width; user-scalable=0" />
    <link rel="stylesheet" href="/main.css?0.1.4">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="file/logo180.png" sizes="180x180">
    <link rel="icon" href="/logo32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/logo16.png" sizes="16x16" type="image/png">
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="Hacker Gaucho" />
    <meta property="og:description" content="Hacker Gaucho">
    <meta name="twitter:description" content="Hacker Gaucho" />
    <meta property="og:image" content="/logo.png">
    <meta name="twitter:image" content="/logo.png" />
</head>
<body>
    <div class="c">
        <div class="r">
            <div class="g3"></div><!--g3-->
            <div class="g6 moz-reader-content">
                <div class="center">
                    <a href="/" title="Hacker Gaucho">
                        <img src="/logo96.png" alt="Hacker Gaucho">
                    </a>
                </div><!--center-->
                <div class="nav-horizontal" id="nav-horizontal">
                    <?php
                    require 'categorias.php';
                    if(@is_array($categorias)){
                        print '<ul>';
                        foreach ($categorias as $link => $categoria) {
                            print '<li><a href="/'.$link.'">'.mb_ucfirst($categoria).'</a></li>';
                        }
                        print '</ul>';
                    }
                    ?>
                </div>
                <?php print $content; ?>
            </div><!--g6-->
            <div class="g3"></div><!--g3-->
        </div><!--r-->
    </div><!--c-->
    <?php
    require 'is_dev.php';
    if(!is_dev()){
        ?>
        <!-- Matomo -->
        <script type="text/javascript">
        var _paq = _paq || [];
        /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
        _paq.push(["setCookieDomain", "*.hackergaucho.com.br"]);
        _paq.push(['trackPageView']);
        _paq.push(['enableLinkTracking']);
        (function() {
            var u="//piwik.mushape.com/";
            _paq.push(['setTrackerUrl', u+'piwik.php']);
            _paq.push(['setSiteId', '1']);
            var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
            g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
        })();
    </script>
    <noscript><p><img src="//piwik.mushape.com/piwik.php?idsite=1&amp;rec=1" style="border:0;" alt="" /></p></noscript>
    <!-- End Matomo Code -->
    <?php
}
?>
</body>
</html>
