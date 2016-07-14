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
 
?>

<footer id="page-footer">
    <div id="course-footer"><?php echo $OUTPUT->course_footer(); ?></div>
    <?php if($PAGE->theme->settings->showfooterblocks) { ?>
    <div class="container">
        <div class="row-fluid">
            <?php if (!empty($PAGE->theme->settings->footer1content)) { ?>
            <div class="left-col span3" id="contactdetails">
                <h3 title="<?php $OUTPUT->get_setting('footer1header', 'format_text'); ?>"><?php echo $OUTPUT->get_setting('footer1header', 'format_text'); ?></h3>
                <?php echo $OUTPUT->get_setting('footer1content', 'format_html'); ?>
            </div>
            <?php } ?>
            <?php if (!empty($PAGE->theme->settings->footer2content)) { ?>
            <div class="left-col span3" id="footer-faculties">
                <h3 title="<?php $OUTPUT->get_setting('footer2header', 'format_text'); ?>"><?php echo $OUTPUT->get_setting('footer2header', 'format_text'); ?></h3>
                <?php echo $OUTPUT->get_setting('footer2content', 'format_html'); ?>
            </div>
            <?php } ?>
            <?php if (!empty($PAGE->theme->settings->footer3content)) { ?>
            <div class="left-col span3" id="social-connect">
                <h3 title="<?php $OUTPUT->get_setting('footer3header', 'format_text'); ?>"><?php echo $OUTPUT->get_setting('footer3header', 'format_text'); ?></h3>
                <?php echo $OUTPUT->get_setting('footer3content', 'format_html'); ?>
            </div>
            <?php } ?>
            <?php if (!empty($PAGE->theme->settings->footer4content)) { ?>
            <div class="left-col span3">
                <h3 title="<?php $OUTPUT->get_setting('footer4header', 'format_text'); ?>"><?php echo $OUTPUT->get_setting('footer4header', 'format_text'); ?></h3>
                <?php echo $OUTPUT->get_setting('footer4content', 'format_html'); ?>
            </div>
            <?php } ?>
        </div>
    </div>
    <?php } ?>
    <?php if($PAGE->theme->settings->showfooterblocks) { ?>
    <div class="info container2 clearfix">
        <div class="container">
            <div class="row-fluid">
                <div class="span3">
                    <?php echo $html->footnote; ?>
                </div>
                <div class="span6 helplink">
                    <?php echo $OUTPUT->page_doc_link(); ?>
                </div>
                <div class="span3">
                    <?php echo $OUTPUT->standard_footer_html(); ?>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
</footer>
<a class="back-to-top" href="#top" ><i class="fa fa-angle-up "></i></a>
    <?php echo $OUTPUT->standard_end_of_body_html() ?>

</div>
<?php echo $PAGE->theme->settings->jssection; ?>
</body>
</html>
