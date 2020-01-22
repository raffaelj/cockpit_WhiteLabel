<?php

$this->on('admin.init', function() {

    $this->on(['app.layout.header', 'app.login.header'], function() {

        $config = $this->retrieve('whitelabel', false);

        if (!$config || !isset($config['logo'])) return;

        $url = $config['logo'];

        if (!\filter_var($url, FILTER_VALIDATE_URL)) {

            if ($path = $this->pathToUrl($url)) {
                $url = $path;
            } elseif (strpos($url, ':') === false) {
                $url = $this->getSiteUrl(true) . '/' . ltrim($url, '/');
            } else {
                return;
            }

        }

        $width  = $config['logoWidth']  ?? false;
        $height = $config['logoHeight'] ?? false;

        echo '<style>';

        echo '.login-image, .app-logo {background-image: url("' . $url . '");}';

        echo '.app-logo {background-position: left center;'
              . ($width  ? 'width:'  . $width  . ';' : '')
              . ($height ? 'height:' . $height . ';' : '')
              . '}';

        if ($config['hideName'] ?? false) echo '.app-name {display: none;}';

        echo '</style>';

    });

});
