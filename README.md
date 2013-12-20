ElaoThemeTwitterBootstrap3Bundle
================================

Twitter Bootstrap 3 theme for Elao Theme Bundle

Form Themes
-----------

Two form layouts provided:
- __form_default_layout.html.twig__
- __form_horizontal_layout.html.twig__

To theme all forms as default :

    twig:
        form:
            resources:
                - "ElaoThemeTwitterBootstrap3Bundle:Form:form_default_layout.html.twig"

To theme a specifique form as horizontal :

    {% form_theme form 'ElaoThemeTwitterBootstrap3Bundle:Form:form_horizontal_layout.html.twig' %}

Twig helpers
------------

### Tooltip & Popover data attributes renderers:

    <a href="#" title="My title" {{ tooltip({placement: 'bottom'}) }}>
        Hover me!
    </a>

The _tooltip_ fuction accepts arguments [as defined in Twitter Bootstrap 3](http://getbootstrap.com/javascript/#tooltips)

    <div {{ popover({content: include('AcmeDemoBundle:Foo:bar.html.twig'), html: true}) }}>
        Click me!
    </div>

The _popover_ fuction accepts arguments [as defined in Twitter Bootstrap 3](http://getbootstrap.com/javascript/#popovers)

__Note:__ These functions only render html attributes, you need to do the Javascript part, ex:

    <script>
        $('[data-toggle="tooltip"]').tooltip();
        $('[data-toggle="popover"]').popover();
    </script>
