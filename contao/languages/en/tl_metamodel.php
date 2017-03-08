<?php

/**
 * This file is part of MetaModels/core.
 *
 * (c) 2012-2017 The MetaModels team.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * This project is provided in good faith and hope to be usable by anyone.
 *
 * @package    MetaModels
 * @subpackage Core
 * @author     Christian Schiffler <c.schiffler@cyberspectrum.de>
 * @author     Christian de la Haye <service@delahaye.de>
 * @copyright  2012-2017 The MetaModels team.
 * @license    https://github.com/MetaModels/core/blob/master/LICENSE LGPL-3.0
 * @filesource
 */

/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_metamodel']['name']                 = array('Name', 'MetaModel name.');
$GLOBALS['TL_LANG']['tl_metamodel']['tstamp']               = array('Revision date', 'Date and time of the latest revision');
$GLOBALS['TL_LANG']['tl_metamodel']['tableName']            = array('Table name', 'Name of database table to store items to.');
$GLOBALS['TL_LANG']['tl_metamodel']['mode']                 = array('Parent list mode', 'Mode to use for parent/child relationship.');
$GLOBALS['TL_LANG']['tl_metamodel']['translated']           = array('Translation', 'Check if this MetaModel shall support translation/multilingualism.');
$GLOBALS['TL_LANG']['tl_metamodel']['languages']            = array('Languages to provide for translation', 'Specify all languages that shall be available for translation.');
$GLOBALS['TL_LANG']['tl_metamodel']['languages_langcode']   = array('Language', 'Select the languages you want to provide.');
$GLOBALS['TL_LANG']['tl_metamodel']['languages_isfallback'] = array('Fallback language', 'Check the language that shall be used as fallback.');
$GLOBALS['TL_LANG']['tl_metamodel']['varsupport']           = array('Variant support', 'Check if this MetaModel shall support variants of items.');
$GLOBALS['TL_LANG']['tl_metamodel']['sorting']              = array('Sorting', 'Sorting order of items.');

/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_metamodel']['title_legend']         = 'Name and table';
$GLOBALS['TL_LANG']['tl_metamodel']['translated_legend']     = 'Translation';
$GLOBALS['TL_LANG']['tl_metamodel']['advanced_legend']      = 'Advanced settings';

/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_metamodel']['new']                  = array('New MetaModel', 'Create a new MetaModel.');
$GLOBALS['TL_LANG']['tl_metamodel']['edit']                 = array('Manage items', 'Manage items of MetaModel ID %s');
$GLOBALS['TL_LANG']['tl_metamodel']['copy']                 = array('Copy MetaModel definition', 'Copy definition of MetaModel ID %s');
$GLOBALS['TL_LANG']['tl_metamodel']['delete']               = array('Delete MetaModel', 'Delete MetaModel ID %s');
$GLOBALS['TL_LANG']['tl_metamodel']['show']                 = array('MetaModel details', 'Show details of MetaModel ID %s');
$GLOBALS['TL_LANG']['tl_metamodel']['editheader']           = array('Edit MetaModel', 'Edit the MetaModel ID %s');
$GLOBALS['TL_LANG']['tl_metamodel']['fields']               = array('Define attributes', 'Define attributes for MetaModel ID %s');
$GLOBALS['TL_LANG']['tl_metamodel']['filter']               = array('Define filters', 'Define filters for MetaModel ID %s');
$GLOBALS['TL_LANG']['tl_metamodel']['rendersettings']       = array('Define render settings', 'Define render settings for MetaModel ID %s');
$GLOBALS['TL_LANG']['tl_metamodel']['dca']                  = array('Define input screens', 'Define input screens for MetaModel ID %s');
$GLOBALS['TL_LANG']['tl_metamodel']['dca_combine']          = array('Define input/output combinations', 'Define input/output combinations for MetaModel ID %s');
$GLOBALS['TL_LANG']['tl_metamodel']['cut']                  = array('Move MetaModel', 'Define the order of your MetaModels.');
$GLOBALS['TL_LANG']['tl_metamodel']['searchable_pages']     = array('Define search settings', 'Define search settings for MetaModel ID %s');
$GLOBALS['TL_LANG']['tl_metamodel']['pastenew'][0]          = 'Add new at the top';
$GLOBALS['TL_LANG']['tl_metamodel']['pastenew'][1]          = 'Add new after MetaModel ID %s';
$GLOBALS['TL_LANG']['tl_metamodel']['pasteafter'][0]        = 'Create new MetaModel';
$GLOBALS['TL_LANG']['tl_metamodel']['pasteafter'][1]        = 'Create new after MetaModel ID %s';

/**
 * Misc.
 */
$GLOBALS['TL_LANG']['tl_metamodel']['itemFormatCount']['0']  = '%s items';
$GLOBALS['TL_LANG']['tl_metamodel']['itemFormatCount']['1']  = '%s item';
$GLOBALS['TL_LANG']['tl_metamodel']['itemFormatCount']['2:'] = '%s items';
