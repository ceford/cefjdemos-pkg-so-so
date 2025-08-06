<?php
/**
 * @package    Joomla.Language
 *
 * @copyright (C) 2025 Clifford E Ford. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 *
 * @phpcs:disable Squiz.Classes.ValidClassName.NotCamelCaps
 *
 * @phpcs:disable PSR1.Classes.ClassDeclaration.MissingNamespace
 */

// phpcs:disable PSR1.Files.SideEffects
\defined('_JEXEC') or die;
// phpcs:enable PSR1.Files.SideEffects

/**
 * so-SO localise class.
 *
 * @since  1.6
 */
abstract class So_SOLocalise
{
    /**
     * Returns the potential suffixes for a specific number of items
     *
     * @param int $count  The number of items.
     *
     * @return  array  An array of potential suffixes.
     *
     * @since   1.6
     */
    public static function getPluralSuffixes($count)
    {
        if ($count == 0) {
            return ['0'];
        } elseif ($count == 1) {
            return ['ONE', '1'];
        } else {
            return ['OTHER', 'MORE'];
        }
    }
}
