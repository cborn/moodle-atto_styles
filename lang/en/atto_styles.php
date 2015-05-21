<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'atto_styles', language 'en'.
 *
 * @package    atto_styles
 * @copyright  2013 Damyon Wiese  <damyon@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['config'] = 'Styles Config';
$string['config_desc'] = 'Custom styles configuration in JSON format, for example:<br />
        {<br />
        &nbsp;&nbsp;&nbsp;&nbsp;"title": "Blue Box",<br />
        &nbsp;&nbsp;&nbsp;&nbsp;"type": "block",<br />
        &nbsp;&nbsp;&nbsp;&nbsp;"classes": "box blue"<br />
        },{<br />
        &nbsp;&nbsp;&nbsp;&nbsp;"title": "Red Box",<br />
        &nbsp;&nbsp;&nbsp;&nbsp;"type": "inline",<br />
        &nbsp;&nbsp;&nbsp;&nbsp;"classes": "box red"<br />
        }<br />
        <br />
        The config titles can also support the multilang filter is enabled, but additonal double-quotes will need to be escaped<br />
        {<br />
        &nbsp;&nbsp;&nbsp;&nbsp;"title": "&lt;span class=\\"multilang\\" lang=\\"en\\"&gt;Blue Box&lt;/span&gt;&lt;span class=\\"multilang\\" lang=\\"de\\"&gt;Blau Box&lt;/span&gt;",<br />
        &nbsp;&nbsp;&nbsp;&nbsp;"type": "block",<br />
        &nbsp;&nbsp;&nbsp;&nbsp;"classes": "bluebox"<br />
        }<br />
        <br />
        Multiple classes can be defined for each item, separated by a space<br/ >
        <br />
        There are 2 options for the "type" setting: "block" or "inline"<br />
        "block" will create a &lt;div&gt; tag with the appropriate classes and will act as a standard block level element. This will take over the current block level element and may apply to more than just the currently selected text<br />
        "inline" will create a &lt;span&gt; tag with the give classes and will act as a standard inline element. This will only apply to the currently selected text';
$string['nostyle'] = 'No Style';
$string['pluginname'] = 'Styles';
$string['settings'] = 'Styles Settings';