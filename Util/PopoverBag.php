<?php

namespace Elao\Bundle\Theme\TwitterBootstrap3Bundle\Util;

use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Elao\Bundle\Theme\TwitterBootstrap3Bundle\Util\TooltipBag;

/**
 * Popover HTML Attributes Bag
 */
class PopoverBag extends TooltipBag
{
    /**
     * {@inheritdoc}
     */
    protected function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        parent::setDefaultOptions($resolver);

        $resolver->replaceDefaults(
            array(
                'toggle' => 'popover',
            )
        );

        $resolver->setOptional(
            array(
                'content',
            )
        );

        $resolver->setAllowedTypes(
            array(
                'content' => 'string',
            )
        );
    }
}
