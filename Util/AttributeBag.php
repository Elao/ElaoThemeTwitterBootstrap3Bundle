<?php

/**
 * This file is part of the Elao Twitter Bootstrap 3 Theme Bundle.
 *
 * Copyright (C) 2013 Elao
 *
 * @author Elao <contact@elao.com>
 */

namespace Elao\Bundle\Theme\TwitterBootstrap3Bundle\Util;

use Symfony\Component\OptionsResolver\OptionsResolver;
use Elao\Bundle\Theme\TwitterBootstrap3Bundle\Behaviour\AttributeBagInterface;

/**
 * HTML Attributes Bag
 */
abstract class AttributeBag implements AttributeBagInterface
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
    public function __construct(array $options = array())
    {
        $this->resolveOptions($options);
    }

    /**
     * @param OptionsResolver $resolver
     */
    abstract protected function setDefaultOptions(OptionsResolver $resolver);

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
