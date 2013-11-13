<?php

namespace Elao\ThemeBundle\TwitterBootstrap3Bundle\Util;

use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Elao\ThemeBundle\TwitterBootstrap3Bundle\Util\TooltipBag;

class PopoverBag extends TooltipBag
{
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
