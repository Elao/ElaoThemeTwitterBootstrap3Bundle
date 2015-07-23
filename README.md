ElaoThemeTwitterBootstrap3Bundle
================================

Twitter Bootstrap 3 theme for Elao Theme Bundle

Installation:
--------------

Add ElaoThemeTwitterBootstrap3Bundle to your composer.json:
``` json
{
    "require": {
        "elao/theme-twitter-bootstrap-3-bundle": "~1.0"
    }
}
```

Now download the bundle by running the command:

``` bash
$ php composer.phar update elao/theme-twitter-bootstrap-3-bundle
```

Register the bundle in the kernel:

``` php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new Elao\Bundle\Theme\TwitterBootstrap3Bundle\ElaoThemeTwitterBootstrap3Bundle(),
    );
}
```

### Features

* [Form Themes](Resources/doc/form_themes.md)
* [Twig Templates](Resources/doc/twig_templates.md)
* [Twig Helpers](Resources/doc/twig_helpers.md)

