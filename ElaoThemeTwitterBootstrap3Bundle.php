<?php

namespace Elao\ThemeBundle\TwitterBootstrap3Bundle;

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
