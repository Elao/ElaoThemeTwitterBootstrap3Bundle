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
use Elao\Bundle\Theme\TwitterBootstrap3Bundle\Util\TooltipBag;

/**
 * Popover HTML Attributes Bag
 */
class PopoverBag extends TooltipBag
{
    /**
     * {@inheritdoc}
     */
    protected function setDefaultOptions(OptionsResolver $resolver)
    {
        parent::setDefaultOptions($resolver);

        $resolver->setDefault('toggle', 'popover');
        $resolver->setDefined(array('content'));
        $resolver->setAllowedTypes('content', 'string');
    }
}
