<?php
/**
 * @package   OSMap
 * @copyright 2007-2014 XMap - Joomla! Vargas. All rights reserved.
 * @copyright 2016 Open Source Training, LLC. All rights reserved..
 * @author    Guillermo Vargas <guille@vargas.co.cr>
 * @author    Alledia <support@alledia.com>
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 *
 * This file is part of OSMap.
 *
 * OSMap is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * any later version.
 *
 * OSMap is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with OSMap. If not, see <http://www.gnu.org/licenses/>.
 */

namespace Alledia\OSMap\Free\Sitemap\Node;

class MenuItem extends Base
{
    /**
     * The menu item Id
     *
     * @var int
     */
    public $itemId;

    /**
     * The menu type of this menu item.
     *
     * @var string
     */
    public $menuType;

    /**
     * The click behavior of this menu item.
     * Values:
     *   0: parent
     *   1: new window with navigation
     *   2: new window without navigation
     *
     * @var int
     */
    public $browserNav;

    /**
     * Menu entry type
     *
     * @var string
     */
    public $type;

    /**
     * True if the menu item is the home
     *
     * @var bool
     */
    public $isHome = false;

    /**
     * Menu is SSL?
     *
     * @var bool
     */
    public $secure = false;
}