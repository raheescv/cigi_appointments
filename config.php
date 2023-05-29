<?php
/* ----------------------------------------------------------------------------
 * Easy!Appointments - Open Source Web Scheduler
 *
 * @package     EasyAppointments
 * @author      A.Tselegidis <alextselegidis@gmail.com>
 * @copyright   Copyright (c) 2013 - 2020, Alex Tselegidis
 * @license     http://opensource.org/licenses/GPL-3.0 - GPLv3
 * @link        http://easyappointments.org
 * @since       v1.0.0
 * ---------------------------------------------------------------------------- */

/**
 * Easy!Appointments Configuration File
 *
 * Set your installation BASE_URL * without the trailing slash * and the database
 * credentials in order to connect to the database. You can enable the DEBUG_MODE
 * while developing the application.
 *
 * Set the default language by changing the LANGUAGE constant. For a full list of
 * available languages look at the /application/config/config.php file.
 *
 * IMPORTANT:
 * If you are updating from version 1.0 you will have to create a new "config.php"
 * file because the old "configuration.php" is not used anymore.
 */
class Config {

    // ------------------------------------------------------------------------
    // GENERAL SETTINGS
    // ------------------------------------------------------------------------

    const BASE_URL      = 'https://booking.cigi.org';
    const LANGUAGE      = 'english';
    const DEBUG_MODE    = FALSE;

    // ------------------------------------------------------------------------
    // DATABASE SETTINGS
    // ------------------------------------------------------------------------

    const DB_HOST       = 'localhost';
    const DB_NAME       = 'u511725780_booking';
    const DB_USERNAME   = 'u511725780_book';
    const DB_PASSWORD   = 'DkS]x|1j[4';

    // ------------------------------------------------------------------------
    // GOOGLE CALENDAR SYNC
    // ------------------------------------------------------------------------

    const GOOGLE_SYNC_FEATURE   = TRUE; // Enter TRUE or FALSE
    const GOOGLE_PRODUCT_NAME   = 'CIGI Appointments';
    const GOOGLE_CLIENT_ID      = '602520676223-mgktvbpplua832o1qebu5k6217duthr1.apps.googleusercontent.com';
    const GOOGLE_CLIENT_SECRET  = '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';
    const GOOGLE_API_KEY        = 'AIzaSyC4R2g_OuzvFzFInipyVN84gts3NxZjmrw';
}

/* End of file config.php */
/* Location: ./config.php */
