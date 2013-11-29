<?php

namespace Elao\Bundle\Theme\TwitterBootstrap3Bundle\Util;

use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * HTML Attributes Bag
 */
abstract class AttributeBag
{
    /**
     * HTML Attributes
     *
     * @var array
     */
    protected $attibutes;

    /**
     * Constructor
     *
     * @param array $options
     */
    public function __construct($options = array())
    {
        $this->resolveOptions($options);
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    abstract protected function setDefaultOptions(OptionsResolverInterface $resolver);

    /**
     * Build the attributes based on given options
     *
     * @param array $options
     */
    private function resolveOptions($options = array())
    {
        $resolver = new OptionsResolver();

        $this->setDefaultOptions($resolver);

        $this->attributes = $resolver->resolve($options);
    }

    /**
     * Get resolved attributes
     *
     * @return array
     */
    public function getAttributes()
    {
        return $this->attributes;
    }
}
