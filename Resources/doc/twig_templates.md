Twig Embedable Templates
------------------------

## Navbar

You can embed `ElaoThemeTwitterBootstrap3Bundle:Block:navbar.html.twig` and redefine any of its blocks:

```twig
{% embed 'ElaoThemeTwitterBootstrap3Bundle:Block:navbar.html.twig' %}

    {% block class parent() ~ 'navbar-default navbar-fixed-top' %}

    {% block brand %}
        <a class="navbar-brand" href="{{ path('homepage') }}">
            Acme
        </a>
    {% endblock %}

    {% block navs %}
        <ul class="nav navbar-nav">
            <!-- ... -->
        </ul>
    {% endblock %}
{% endembed %}
```
