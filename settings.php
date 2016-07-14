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
 * Version details
 *
 * @package    theme
 * @subpackage bcu_ingenio
 * @copyright  2014 Birmingham City University <michael.grant@bcu.ac.uk>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 *
 */

$settings = null;
require_once __DIR__.'/libs/admin_confightmleditor.php';
defined('MOODLE_INTERNAL') || die;
if (is_siteadmin()) {

    $ADMIN->add('themes', new admin_category('theme_bcu_ingenio', 'BCU_ingenio'));

    $temp = new admin_settingpage('theme_bcu_ingenio_colour', get_string('coloursettings', 'theme_bcu_ingenio'));
    $temp->add(new admin_setting_heading('theme_bcu_ingenio_colour', get_string('coloursettingsheading', 'theme_bcu_ingenio'),
        format_text(get_string('colourdesc', 'theme_bcu_ingenio'), FORMAT_MARKDOWN)));

    $name = 'theme_bcu_ingenio/linkcolor';
    $title = get_string('linkcolor', 'theme_bcu_ingenio');
    $description = get_string('linkcolordesc', 'theme_bcu_ingenio');
    $default = '#001E3C';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $temp->add($setting);

    $name = 'theme_bcu_ingenio/linkhover';
    $title = get_string('linkhover', 'theme_bcu_ingenio');
    $description = get_string('linkhoverdesc', 'theme_bcu_ingenio');
    $default = '#001E3C';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_bcu_ingenio/maincolor';
    $title = get_string('maincolor', 'theme_bcu_ingenio');
    $description = get_string('maincolordesc', 'theme_bcu_ingenio');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#001E3C', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_bcu_ingenio/backcolor';
    $title = get_string('backcolor', 'theme_bcu_ingenio');
    $description = get_string('backcolordesc', 'theme_bcu_ingenio');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#FFF', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_bcu_ingenio/buttoncolour';
    $title = get_string('buttoncolour', 'theme_bcu_ingenio');
    $description = get_string('buttoncolourdesc', 'theme_bcu_ingenio');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#00aeef', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_bcu_ingenio/buttonhovercolour';
    $title = get_string('buttonhovercolour', 'theme_bcu_ingenio');
    $description = get_string('buttonhovercolourdesc', 'theme_bcu_ingenio');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#0084c2', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_bcu_ingenio/rendereroverlaycolour';
    $title = get_string('rendereroverlaycolour', 'theme_bcu_ingenio');
    $description = get_string('rendereroverlaycolourdesc', 'theme_bcu_ingenio');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#001E3C', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_bcu_ingenio/rendereroverlayfontcolour';
    $title = get_string('rendereroverlayfontcolour', 'theme_bcu_ingenio');
    $description = get_string('rendereroverlayfontcolourdesc', 'theme_bcu_ingenio');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#FFF', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_bcu_ingenio/dividingline';
    $title = get_string('dividingline', 'theme_bcu_ingenio');
    $description = get_string('dividinglinedesc', 'theme_bcu_ingenio');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#B7B3EF', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_bcu_ingenio/navbarborder';
    $title = get_string('navbarborder', 'theme_bcu_ingenio');
    $description = get_string('navbarborderdesc', 'theme_bcu_ingenio');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#B7B3EF', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_bcu_ingenio/navbarhover';
    $title = get_string('navbarhover', 'theme_bcu_ingenio');
    $description = get_string('navbarhoverdesc', 'theme_bcu_ingenio');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#3C469C', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_bcu_ingenio/breadcrumb';
    $title = get_string('breadcrumb', 'theme_bcu_ingenio');
    $description = get_string('breadcrumbdesc', 'theme_bcu_ingenio');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#b4bbbf', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_bcu_ingenio/activebreadcrumb';
    $title = get_string('activebreadcrumb', 'theme_bcu_ingenio');
    $description = get_string('activebreadcrumbdesc', 'theme_bcu_ingenio');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#e8eaeb', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $ADMIN->add('theme_bcu_ingenio', $temp);

    $temp = new admin_settingpage('theme_bcu_ingenio_header', get_string('headersettings', 'theme_bcu_ingenio'));
    $temp->add(new admin_setting_heading('theme_bcu_ingenio_header', get_string('headersettingsheading', 'theme_bcu_ingenio'),
        format_text(get_string('headerdesc', 'theme_bcu_ingenio'), FORMAT_MARKDOWN)));

    $name = 'theme_bcu_ingenio/sitetitle';
    $title = get_string('sitetitle', 'theme_bcu_ingenio');
    $description = get_string('sitetitledesc', 'theme_bcu_ingenio');
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_bcu_ingenio/logo';
    $title = get_string('logo', 'theme_bcu_ingenio');
    $description = get_string('logodesc', 'theme_bcu_ingenio');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logo');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_bcu_ingenio/alertbox';
    $title = get_string('alertbox', 'theme_bcu_ingenio');
    $description = get_string('alertboxdesc', 'theme_bcu_ingenio');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);

    $temp->add(new admin_setting_heading('theme_bcu_ingenio_usernav', get_string('usernavheading', 'theme_bcu_ingenio'),
        format_text(get_string('usernavdesc', 'theme_bcu_ingenio'), FORMAT_MARKDOWN)));
    
    // Enable My.
    $name = 'theme_bcu_ingenio/enablemy';
    $title = get_string('enablemy', 'theme_bcu_ingenio');
    $description = get_string('enablemydesc', 'theme_bcu_ingenio');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Enable View Profile.
    $name = 'theme_bcu_ingenio/enableprofile';
    $title = get_string('enableprofile', 'theme_bcu_ingenio');
    $description = get_string('enableprofiledesc', 'theme_bcu_ingenio');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Enable Edit Profile.
    $name = 'theme_bcu_ingenio/enableeditprofile';
    $title = get_string('enableeditprofile', 'theme_bcu_ingenio');
    $description = get_string('enableeditprofiledesc', 'theme_bcu_ingenio');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Enable Calendar.
    $name = 'theme_bcu_ingenio/enablecalendar';
    $title = get_string('enablecalendar', 'theme_bcu_ingenio');
    $description = get_string('enablecalendardesc', 'theme_bcu_ingenio');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Enable Private Files.
    $name = 'theme_bcu_ingenio/enableprivatefiles';
    $title = get_string('enableprivatefiles', 'theme_bcu_ingenio');
    $description = get_string('enableprivatefilesdesc', 'theme_bcu_ingenio');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Enable Badges.
    $name = 'theme_bcu_ingenio/enablebadges';
    $title = get_string('enablebadges', 'theme_bcu_ingenio');
    $description = get_string('enablebadgesdesc', 'theme_bcu_ingenio');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $temp->add(new admin_setting_heading('theme_bcu_ingenio_navbar', get_string('navbarsettingsheading', 'theme_bcu_ingenio'),
        format_text(get_string('navbardesc', 'theme_bcu_ingenio'), FORMAT_MARKDOWN)));
    
    $name = 'theme_bcu_ingenio/enablehome';
    $title = get_string('home');
    $description = get_string('enablehomedesc', 'theme_bcu_ingenio');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_bcu_ingenio/enablemyhome';
    $title = get_string('myhome');
    $description = get_string('enablemyhomedesc', 'theme_bcu_ingenio', get_string('myhome'));
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_bcu_ingenio/enableevents';
    $title = get_string('events', 'theme_bcu_ingenio');
    $description = get_string('enableeventsdesc', 'theme_bcu_ingenio');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_bcu_ingenio/enablemysites';
    $title = get_string('mysites', 'theme_bcu_ingenio');
    $description = get_string('enablemysitesdesc', 'theme_bcu_ingenio');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_bcu_ingenio/enablethiscourse';
    $title = get_string('thiscourse', 'theme_bcu_ingenio');
    $description = get_string('enablethiscoursedesc', 'theme_bcu_ingenio');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Enable help link.
    $name = 'theme_bcu_ingenio/enablehelp';
    $title = get_string('enablehelp', 'theme_bcu_ingenio');
    $description = get_string('enablehelpdesc', 'theme_bcu_ingenio');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $temp->add($setting);

    $name = 'theme_bcu_ingenio/helptarget';
    $title = get_string('helptarget', 'theme_bcu_ingenio');
    $description = get_string('helptargetdesc', 'theme_bcu_ingenio');
    $choices = array(
        '_blank' => get_string('targetnewwindow', 'theme_bcu_ingenio'),
        '_self' => get_string('targetsamewindow', 'theme_bcu_ingenio'),
    );
    $setting = new admin_setting_configselect($name, $title, $description, '_blank', $choices);
    $temp->add($setting);

    $name = 'theme_bcu_ingenio/toolsmenu';
    $title = get_string('toolsmenu', 'theme_bcu_ingenio');
    $description = get_string('toolsmenudesc', 'theme_bcu_ingenio');
    $setting = new admin_setting_configtextarea($name, $title, $description, '', PARAM_RAW, '50', '10');
    $temp->add($setting);

    $ADMIN->add('theme_bcu_ingenio', $temp);

    $temp = new admin_settingpage('theme_bcu_ingenio_frontpage_blocks', get_string('frontpageblocksettings', 'theme_bcu_ingenio'));

    $name = 'theme_bcu_ingenio/infobox';
    $title = get_string('infobox', 'theme_bcu_ingenio');
    $description = get_string('infoboxdesc', 'theme_bcu_ingenio');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_bcu_ingenio/infobox2';
    $title = get_string('infobox2', 'theme_bcu_ingenio');
    $description = get_string('infobox2desc', 'theme_bcu_ingenio');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);

    $temp->add(new admin_setting_heading('theme_bcu_ingenio_marketing', get_string('marketingsettingsheading', 'theme_bcu_ingenio'),
        format_text(get_string('marketingdesc', 'theme_bcu_ingenio'), FORMAT_MARKDOWN)));

    $name = 'theme_bcu_ingenio/market1';
    $title = get_string('market1', 'theme_bcu_ingenio');
    $description = get_string('market1desc', 'theme_bcu_ingenio');
    $default = '';
    $setting = new bcu_ingenio_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_bcu_ingenio/market2';
    $title = get_string('market2', 'theme_bcu_ingenio');
    $description = get_string('market2desc', 'theme_bcu_ingenio');
    $setting = new bcu_ingenio_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_bcu_ingenio/market3';
    $title = get_string('market3', 'theme_bcu_ingenio');
    $description = get_string('market3desc', 'theme_bcu_ingenio');
    $setting = new bcu_ingenio_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_bcu_ingenio/market4';
    $title = get_string('market4', 'theme_bcu_ingenio');
    $description = get_string('market4desc', 'theme_bcu_ingenio');
    $setting = new bcu_ingenio_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $ADMIN->add('theme_bcu_ingenio', $temp);

    $temp = new admin_settingpage('theme_bcu_ingenio_frontpage_slider', get_string('frontpageslidersettings', 'theme_bcu_ingenio'));

    $temp->add(new admin_setting_heading('theme_bcu_ingenio_slideshow', get_string('slideshowsettingsheading', 'theme_bcu_ingenio'),
        format_text(get_string('slideshowdesc', 'theme_bcu_ingenio'), FORMAT_MARKDOWN)));

    $name = 'theme_bcu_ingenio/p1';
    $title = get_string('p1', 'theme_bcu_ingenio');
    $description = get_string('p1desc', 'theme_bcu_ingenio');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'p1');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_bcu_ingenio/p1url';
    $title = get_string('p1url', 'theme_bcu_ingenio');
    $description = get_string('p1urldesc', 'theme_bcu_ingenio');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $temp->add($setting);

    $name = 'theme_bcu_ingenio/p1cap';
    $title = get_string('p1cap', 'theme_bcu_ingenio');
    $description = get_string('p1capdesc', 'theme_bcu_ingenio');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_bcu_ingenio/p2';
    $title = get_string('p2', 'theme_bcu_ingenio');
    $description = get_string('p2desc', 'theme_bcu_ingenio');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'p2');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_bcu_ingenio/p2url';
    $title = get_string('p2url', 'theme_bcu_ingenio');
    $description = get_string('p2urldesc', 'theme_bcu_ingenio');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $temp->add($setting);

    $name = 'theme_bcu_ingenio/p2cap';
    $title = get_string('p2cap', 'theme_bcu_ingenio');
    $description = get_string('p2capdesc', 'theme_bcu_ingenio');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_bcu_ingenio/p3';
    $title = get_string('p3', 'theme_bcu_ingenio');
    $description = get_string('p3desc', 'theme_bcu_ingenio');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'p3');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_bcu_ingenio/p3url';
    $title = get_string('p3url', 'theme_bcu_ingenio');
    $description = get_string('p3urldesc', 'theme_bcu_ingenio');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $temp->add($setting);

    $name = 'theme_bcu_ingenio/p3cap';
    $title = get_string('p3cap', 'theme_bcu_ingenio');
    $description = get_string('p3capdesc', 'theme_bcu_ingenio');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_bcu_ingenio/p4';
    $title = get_string('p4', 'theme_bcu_ingenio');
    $description = get_string('p4desc', 'theme_bcu_ingenio');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'p4');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_bcu_ingenio/p4url';
    $title = get_string('p4url', 'theme_bcu_ingenio');
    $description = get_string('p4urldesc', 'theme_bcu_ingenio');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $temp->add($setting);

    $name = 'theme_bcu_ingenio/p4cap';
    $title = get_string('p4cap', 'theme_bcu_ingenio');
    $description = get_string('p4capdesc', 'theme_bcu_ingenio');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_bcu_ingenio/p5';
    $title = get_string('p5', 'theme_bcu_ingenio');
    $description = get_string('p5desc', 'theme_bcu_ingenio');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'p5');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_bcu_ingenio/p5url';
    $title = get_string('p5url', 'theme_bcu_ingenio');
    $description = get_string('p5urldesc', 'theme_bcu_ingenio');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $temp->add($setting);

    $name = 'theme_bcu_ingenio/p5cap';
    $title = get_string('p5cap', 'theme_bcu_ingenio');
    $description = get_string('p5capdesc', 'theme_bcu_ingenio');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);

    $ADMIN->add('theme_bcu_ingenio', $temp);

    $temp = new admin_settingpage('theme_bcu_ingenio_frontpage_courses', get_string('frontpagecoursesettings', 'theme_bcu_ingenio'));
    $temp->add(new admin_setting_heading('theme_bcu_ingenio_frontpage_courses', get_string('frontpagesettingsheading', 'theme_bcu_ingenio'),
        format_text(get_string('frontpagedesc', 'theme_bcu_ingenio'), FORMAT_MARKDOWN)));

    $name = 'theme_bcu_ingenio/frontpagerenderer';
    $title = get_string('frontpagerenderer', 'theme_bcu_ingenio');
    $description = get_string('frontpagerendererdesc', 'theme_bcu_ingenio');
    $choices = array(
        1 => get_string('frontpagerendereroption1', 'theme_bcu_ingenio'),
        2 => get_string('frontpagerendereroption2', 'theme_bcu_ingenio'),
        3 => get_string('frontpagerendereroption3', 'theme_bcu_ingenio'),
    );
    $setting = new admin_setting_configselect($name, $title, $description, 2, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_bcu_ingenio/frontpagerendererdefaultimage';
    $title = get_string('frontpagerendererdefaultimage', 'theme_bcu_ingenio');
    $description = get_string('frontpagerendererdefaultimagedesc', 'theme_bcu_ingenio');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'frontpagerendererdefaultimage');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_bcu_ingenio/tilesshowcontacts';
    $title = get_string('tilesshowcontacts', 'theme_bcu_ingenio');
    $description = get_string('tilesshowcontactsdesc', 'theme_bcu_ingenio');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 1);
    $temp->add($setting);

    $name = 'theme_bcu_ingenio/tilesshowallcontacts';
    $title = get_string('tilesshowallcontacts', 'theme_bcu_ingenio');
    $description = get_string('tilesshowallcontactsdesc', 'theme_bcu_ingenio');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 0);
    $temp->add($setting);

    $name = 'theme_bcu_ingenio/tilescontactstitle';
    $title = get_string('tilescontactstitle', 'theme_bcu_ingenio');
    $description = get_string('tilescontactstitledesc', 'theme_bcu_ingenio');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 1);
    $temp->add($setting);

    $ADMIN->add('theme_bcu_ingenio', $temp);

    $temp = new admin_settingpage('theme_bcu_ingenio_layout', get_string('layoutsettings', 'theme_bcu_ingenio'));
    $temp->add(new admin_setting_heading('theme_bcu_ingenio_layout', get_string('layoutsettingsheading', 'theme_bcu_ingenio'),
        format_text(get_string('layoutdesc', 'theme_bcu_ingenio'), FORMAT_MARKDOWN)));

    $name = 'theme_bcu_ingenio/blockside';
    $title = get_string('blockside', 'theme_bcu_ingenio');
    $description = get_string('blocksidedesc', 'theme_bcu_ingenio');
    $setting = new admin_setting_configselect($name, $title, $description, 0,
    array(
            0 => get_string('rightblocks', 'theme_bcu_ingenio'),
            1 => get_string('leftblocks', 'theme_bcu_ingenio'),
        ));
    $temp->add($setting);

    $ADMIN->add('theme_bcu_ingenio', $temp);

    $temp = new admin_settingpage('theme_bcu_ingenio_footer', get_string('footersettings', 'theme_bcu_ingenio'));
    $temp->add(new admin_setting_heading('theme_bcu_ingenio_footer', get_string('footersettingsheading', 'theme_bcu_ingenio'),
        format_text(get_string('footerdesc', 'theme_bcu_ingenio'), FORMAT_MARKDOWN)));

    $name = 'theme_bcu_ingenio/showfooterblocks';
    $title = get_string('showfooterblocks', 'theme_bcu_ingenio');
    $description = get_string('showfooterblocksdesc', 'theme_bcu_ingenio');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 1);
    $temp->add($setting);

    $name = 'theme_bcu_ingenio/footer1header';
    $title = get_string('footer1header', 'theme_bcu_ingenio');
    $description = get_string('footer1desc', 'theme_bcu_ingenio');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_bcu_ingenio/footer1content';
    $title = get_string('footer1content', 'theme_bcu_ingenio');
    $description = get_string('footer1contentdesc', 'theme_bcu_ingenio');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_bcu_ingenio/footer2header';
    $title = get_string('footer2header', 'theme_bcu_ingenio');
    $description = get_string('footer2desc', 'theme_bcu_ingenio');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_bcu_ingenio/footer2content';
    $title = get_string('footer2content', 'theme_bcu_ingenio');
    $description = get_string('footer2contentdesc', 'theme_bcu_ingenio');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_bcu_ingenio/footer3header';
    $title = get_string('footer3header', 'theme_bcu_ingenio');
    $description = get_string('footer3desc', 'theme_bcu_ingenio');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_bcu_ingenio/footer3content';
    $title = get_string('footer3content', 'theme_bcu_ingenio');
    $description = get_string('footer3contentdesc', 'theme_bcu_ingenio');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_bcu_ingenio/footer4header';
    $title = get_string('footer4header', 'theme_bcu_ingenio');
    $description = get_string('footer4desc', 'theme_bcu_ingenio');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_bcu_ingenio/footer4content';
    $title = get_string('footer4content', 'theme_bcu_ingenio');
    $description = get_string('footer4contentdesc', 'theme_bcu_ingenio');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_bcu_ingenio/footnote';
    $title = get_string('footnote', 'theme_bcu_ingenio');
    $description = get_string('footnotedesc', 'theme_bcu_ingenio');
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);

    $ADMIN->add('theme_bcu_ingenio', $temp);

    $temp = new admin_settingpage('theme_bcu_ingenio_generic', get_string('customcssjssettings', 'theme_bcu_ingenio'));
    $temp->add(new admin_setting_heading('theme_bcu_ingenio_generic', get_string('genericsettingsheading', 'theme_bcu_ingenio'),
        format_text(get_string('genericsettingsdescription', 'theme_bcu_ingenio'), FORMAT_MARKDOWN)));

    // Custom CSS file.
    $name = 'theme_bcu_ingenio/customcss';
    $title = get_string('customcss', 'theme_bcu_ingenio');
    $description = get_string('customcssdesc', 'theme_bcu_ingenio');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Section for javascript to be added e.g. Google Analytics.
    $name = 'theme_bcu_ingenio/jssection';
    $title = get_string('jssection', 'theme_bcu_ingenio');
    $description = get_string('jssectiondesc', 'theme_bcu_ingenio');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_bcu_ingenio/fsize';
    $title = get_string('fsize', 'theme_bcu_ingenio');
    $description = get_string('fsizedesc', 'theme_bcu_ingenio');
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $temp->add($setting);

    $ADMIN->add('theme_bcu_ingenio', $temp);
}
