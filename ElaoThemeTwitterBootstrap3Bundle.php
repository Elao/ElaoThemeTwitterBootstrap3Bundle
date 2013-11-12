<?php 

namespace Elao\Theme\TwitterBootstrap3;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ElaoThemeTwitterBootstrap3Bundle extends Bundle
{
	/**
	 * {@inheritdoc}
	 */ 
	public function getParent()
    {
        return 'ElaoThemeBundle';
    }
}