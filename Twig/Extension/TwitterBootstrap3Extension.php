<?php

/**
 * This file is part of the Elao Twitter Bootstrap 3 Theme Bundle.
 *
 * Copyright (C) 2013 Elao
 *
 * @author Elao <contact@elao.com>
 */

namespace Elao\Bundle\Theme\TwitterBootstrap3Bundle\Twig\Extension;

use Elao\Bundle\Theme\TwitterBootstrap3Bundle\Behaviour\AttributeBagInterface;
use Elao\Bundle\Theme\TwitterBootstrap3Bundle\Util\TooltipBag;
use Elao\Bundle\Theme\TwitterBootstrap3Bundle\Util\PopoverBag;
use Elao\Bundle\Theme\TwitterBootstrap3Bundle\Util\CollapseBag;

/**
 * Elao Theme Twitter Bootstrap3 Twig Extension
 */
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
            new \Twig_SimpleFunction('collapse', array($this, 'collapse'), array('is_safe' => array('html'))),
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
     *
     * @return string
     */
    public function tooltip($parameters = array())
    {
        return $this->renderAttributes(new TooltipBag($parameters));
    }

    /**
     * Popover
     *
     * @param array $parameters
     *
     * @return string
     */
    public function popover($parameters = array())
    {
        return $this->renderAttributes(new PopoverBag($parameters));
    }

    /**
     * Collapse
     *
     * @param array $parameters
     *
     * @return string
     */
    public function collapse($parameters = array())
    {
        return $this->renderAttributes(new CollapseBag($parameters));
    }

    /**
     * Render attributes
     *
     * @param AttributeBagInterface $bag
     *
     * @return string
     */
    protected function renderAttributes(AttributeBagInterface $bag)
    {
        return $this->templating->render(
            'ElaoThemeTwitterBootstrap3Bundle:Block:data_attributes.html.twig',
            array('attributes' => $bag->getAttributes())
        );
    }

    /**
     * Give the string version of a boolean (for Twitter Boostrap 3 javascript config)
     *
     * @param boolean $value
     *
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
