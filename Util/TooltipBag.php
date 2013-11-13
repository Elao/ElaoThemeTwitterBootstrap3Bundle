<?php

namespace Elao\ThemeBundle\TwitterBootstrap3Bundle\Util;

use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Elao\ThemeBundle\TwitterBootstrap3Bundle\Util\AttributeBag;

class TooltipBag extends AttributeBag
{
    protected function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(
            array(
                'toggle' => 'tooltip',
            )
        );

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
    }
}
