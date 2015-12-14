ElaoThemeTwitterBootstrap3Bundle ![](https://img.shields.io/badge/Symfony-2.3-blue.svg)
================================

Twitter Bootstrap 3 theme for Elao Theme Bundle

Form Themes
-----------

Three form layouts are provided:

* `form_default_layout.html.twig`
* `form_horizontal_layout.html.twig`
* `form_horizontal_partial_layout.html.twig`

To theme all forms as default, in your `app/config/config.yml` file:

```yml
twig:
    form:
        resources:
            - "ElaoThemeTwitterBootstrap3Bundle:Form:form_default_layout.html.twig"
```

To theme a specifique form:

```twig
{% form_theme form 'ElaoThemeTwitterBootstrap3Bundle:Form:form_default_layout.html.twig' %}
```

### Form Horizontal:

__To theme a specific row as horizontal__:

Theme your form with the `form_horizontal_partial_layout.html.twig` layout and specify the `horizontal` option when you need it:

```twig
{{ form_row(child, {horizontal: true}) }}
```

__To theme a whole form as horizontal:__

Theme the whole form with the `form_horizontal_layout.html.twig` layout:

```twig
{% form_theme form 'ElaoThemeTwitterBootstrap3Bundle:Form:form_horizontal_layout.html.twig' %}
```

_Note:_ 100% of the form will be themed as horizontal. If you need one or more field to be standard, use the `form_horizontal_partial_layout.html.twig` layout.

You can also customize the grid behaviour of the field:

```twig
{{ form_row(child, {horizontal: true, label_columns: 2}) }}
{{ form_row(child, {horizontal: true, label_columns: 2, widget_columns: 4, grid_size: 6}) }}
```

Twig helpers
------------

### Tooltip & Popover data attributes renderers:

```twig
<a href="#" title="My title" {{ tooltip({placement: 'bottom'}) }}>
    Hover me!
</a>
```

The _tooltip_ fuction accepts arguments [as defined in Twitter Bootstrap 3](http://getbootstrap.com/javascript/#tooltips)

```twig
<div {{ popover({content: include('AcmeDemoBundle:Foo:bar.html.twig'), html: true}) }}>
    Click me!
</div>
```

The _popover_ fuction accepts arguments [as defined in Twitter Bootstrap 3](http://getbootstrap.com/javascript/#popovers)

__Note:__ These functions only render html attributes, you need to do the Javascript part, ex:

```javascript
$('[data-toggle="tooltip"]').tooltip();
$('[data-toggle="popover"]').popover();
```
