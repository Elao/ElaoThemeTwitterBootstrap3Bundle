<?php

namespace Elao\ThemeBundle\TwitterBootstrap3Bundle\Twig\Extension;

use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\Options;

class TwitterBootstrap3Extension extends \Twig_Extension
{
    /**
     * The Twig templating service
     *
     * @var Twig_Environment
     */
    private $templating;

    /**
     * Constructor
     *
     * @param Twig_Environment $templating
     */
    public function __construct(\Twig_Environment $templating)
    {
        $this->templating = $templating;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'elao_theme_twitter_bootstrap_3_extension';
    }

    /**
     * {@inheritdoc}
     */
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('bool_to_str', array($this, 'booleanToString')),
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getFunctions()
    {
        return array(
            new \Twig_SimpleFunction('tooltip', array($this, 'tooltip'), array('is_safe' => array('html'))),
            new \Twig_SimpleFunction('popover', array($this, 'popover'), array('is_safe' => array('html'))),
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getTests()
    {
        return array();
    }

    /**
     * Tooltip
     *
     * @param array $parameters
     * @return string
     */
    public function tooltip($parameters = array())
    {
        $resolver = new OptionsResolver();

        $resolver->setOptional(
            array(
                'animation',
                'html',
                'placement',
                'selector',
                'title',
                'trigger',
                'delay',
                'container',
            )
        );

        $resolver->setAllowedTypes(
            array(
                'animation' => 'bool',
                'html'      => 'bool',
                'placement' => 'string',
                'selector'  => array('string', 'bool'),
                'title'     => 'string',
                'container' => array('string', 'bool'),
            )
        );

        $resolver->setAllowedValues(
            array(
                'placement' => array('top', 'bottom', 'left', 'right', 'auto'),
                'trigger'   => array('click', 'hover', 'focus', 'manual'),
            )
        );

        $attributes = array_merge(
            $resolver->resolve($parameters),
            array('toggle' => 'tooltip')
        );

        return $this->templating->render(
            'ElaoThemeTwitterBootstrap3Bundle:Block:data_attributes.html.twig',
            array(
                'attributes' => $attributes,
            )
        );
    }

    /**
     * Popover
     *
     * @param array $parameters
     * @return string
     */
    public function popover($parameters = array())
    {
        $resolver = new OptionsResolver();

        $resolver->setOptional(
            array(
                'animation',
                'html',
                'placement',
                'selector',
                'trigger',
                'title',
                'content',
                'delay',
                'container',
            )
        );

        $resolver->setAllowedTypes(
            array(
                'animation' => 'bool',
                'html'      => 'bool',
                'placement' => 'string',
                'selector'  => array('string', 'bool'),
                'title'     => 'string',
                'content'   => 'string',
                'container' => array('string', 'bool'),
            )
        );

        $resolver->setAllowedValues(
            array(
                'placement' => array('top', 'bottom', 'left', 'right', 'auto'),
                'trigger'   => array('click', 'hover', 'focus', 'manual'),
            )
        );

        $attributes = array_merge(
            $resolver->resolve($parameters),
            array('toggle' => 'popover')
        );

        return $this->templating->render(
            'ElaoThemeTwitterBootstrap3Bundle:Block:data_attributes.html.twig',
            array(
                'attributes' => $attributes,
            )
        );
    }

    /**
     * Give the string version of a boolean (for Twitter Boostrap 3 javascript config)
     *
     * @param boolean $value
     * @return string
     */
    public function booleanToString($value = null)
    {
        if (is_bool($value)) {
            $value = $value ? 'true' : 'false';
        }

        return $value;
    }
}
