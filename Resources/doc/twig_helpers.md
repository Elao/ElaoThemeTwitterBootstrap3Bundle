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

### Collapse data attributes renderers:

Data attribute rendered for the ["Collapse" Bootstrap feature](http://getbootstrap.com/javascript/#collapse)

```twig
<button type="button" {{ collapse({parent: '#parent', target: '#target'}) }}>
  Simple collapsible
</button>
```
