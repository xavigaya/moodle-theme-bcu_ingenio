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
 * @subpackage bcu
 * @copyright  2014 Birmingham City University <michael.grant@bcu.ac.uk>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 *
 */

require_once(dirname(__FILE__) . '/includes/header.php'); 
$left = theme_bcu_get_block_side();
?>
<div id="page" class="container-fluid">

    <header id="page-header" class="clearfix">
    <img src="<?php echo $OUTPUT->pix_url('nsl_logo', 'theme')?>" id="logo">
       
        <div id="course-header">
            <?php echo $OUTPUT->course_header(); ?>
        </div>
    </header>
    
    <header role="banner" class="navbar 2navbar-fixed-top<?php echo $html->navbarclass ?>">
    <nav role="navigation" class="navbar-inner">
        <div class="container-fluid">
            <a class="brand" href="<?php echo $CFG->wwwroot;?>"><?php echo $SITE->shortname; ?></a>
            <a class="btn btn-navbar" data-toggle="workaround-collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <div class="nav-collapse collapse">
                <?php echo $OUTPUT->custom_menu(); ?>
                <ul class="nav pull-right">
                    <li><?php echo $OUTPUT->page_heading_menu(); ?></li>
                    <li class="navbar-text"><?php echo $OUTPUT->login_info() ?></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
    

    <div id="page-content" class="row-fluid">    
        <div id="<?php echo $regionbsid ?>" class="span9">
            <div class="row-fluid">
                <div id="page-navbar" class="span12">
                    <nav class="breadcrumb-button"><?php echo $OUTPUT->page_heading_button(); ?></nav>
                    <?php echo $OUTPUT->navbar(); ?>
                </div>
                <?php
                    if($left == 1) {
                        echo $OUTPUT->blocks('side-post', 'span3 desktop-first-column');
                    }
                ?>
                <section id="region-main" class="span8 pull-right">
                    <?php
                    echo $OUTPUT->course_content_header();
                    echo $OUTPUT->main_content();
                    echo $OUTPUT->course_content_footer();
                    ?>
                </section>
                <?php echo $OUTPUT->blocks('side-pre', 'span4 desktop-first-column'); ?>
            </div>
        </div>
        <?php
            if($left == 0) {
                echo $OUTPUT->blocks('side-post', 'span3');
            }
        ?>
    </div>

    <?php require_once(dirname(__FILE__) . '/includes/footer.php'); ?>