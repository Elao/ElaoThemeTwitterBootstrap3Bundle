<?php

/**
 * This file is part of the Elao Twitter Bootstrap 3 Theme Bundle.
 *
 * Copyright (C) 2013 Elao
 *
 * @author Elao <contact@elao.com>
 */

namespace Elao\Bundle\Theme\TwitterBootstrap3Bundle\Behaviour;

/**
 * HTML Attributes Bag Interface
 */
interface AttributeBagInterface
{
    /**
     * Constructor
     *
     * @param array $options
     */
    public function __construct(array $options = array());

    /**
     * Get attributes
     *
     * @return array
     */
    public function getAttributes();
}
