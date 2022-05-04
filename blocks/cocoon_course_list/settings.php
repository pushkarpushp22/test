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

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {
    $options = array('all'=>get_string('allcourses', 'block_cocoon_course_list'), 'own'=>get_string('owncourses', 'block_cocoon_course_list'));

    $settings->add(new admin_setting_configselect('block_cocoon_course_list_adminview', get_string('adminview', 'block_cocoon_course_list'),
                       get_string('configadminview', 'block_cocoon_course_list'), 'all', $options));

    $settings->add(new admin_setting_configcheckbox('block_cocoon_course_list_hideallcourseslink', get_string('hideallcourseslink', 'block_cocoon_course_list'),
                       get_string('confighideallcourseslink', 'block_cocoon_course_list'), 0));
}
