<?php
/**
 * Custom fiedls.
 */
defined('ABSPATH') || exit;

/**
 * Function wpfep_add_profile_tab_meta_fields()
 * adds the default WordPress profile fields (major ones) to the profile tab.
 *
 * @param (array) $fields are the current array of fields added to this filter.
 *
 * @return (array) $fields are the modified array of fields to pass back to the filter
 */
function wpfep_add_profile_tab_meta_fields($fields)
{
    $fields[] = [
        'id'      => 'user_email',
        'label'   => __('Email Address', 'wp-front-end-profile'),
        'desc'    => __('Edit your email address - used for resetting your password etc.', 'wp-front-end-profile'),
        'type'    => 'email',
        'classes' => 'user_email',
    ];

    $fields[] = [
        'id'      => 'first_name',
        'label'   => __('First Name', 'wp-front-end-profile'),
        'desc'    => __('Edit your first name.', 'wp-front-end-profile'),
        'type'    => 'text',
        'classes' => 'first_name',
    ];

    $fields[] = [
        'id'      => 'last_name',
        'label'   => __('Last Name', 'wp-front-end-profile'),
        'desc'    => __('Edit your last name.', 'wp-front-end-profile'),
        'type'    => 'text',
        'classes' => 'last_name',
    ];

    $fields[] = [
        'id'      => 'user_url',
        'label'   => __('URL', 'wp-front-end-profile'),
        'desc'    => __('Edit your profile associated URL.', 'wp-front-end-profile'),
        'type'    => 'text',
        'classes' => 'user_url',
    ];

    $fields[] = [
        'id'      => 'description',
        'label'   => __('Description/Bio', 'wp-front-end-profile'),
        'desc'    => __('Edit your description/bio.', 'wp-front-end-profile'),
        'type'    => 'wysiwyg',
        'classes' => 'description',
    ];

    return $fields;
}
add_filter('wpfep_fields_profile', 'wpfep_add_profile_tab_meta_fields', 10);

/**
 * Wpfep_add_password_tab_fields()
 * adds the password update fields to the passwords tab.
 *
 * @param (array) $fields are the current array of fields added to this filter.
 *
 * @return (array) $fields are the modified array of fields to pass back to the filter
 */
function wpfep_add_password_tab_fields($fields)
{
    $fields[] = [
        'id'      => 'user_pass',
        'label'   => __('Password', 'wp-front-end-profile'),
        'desc'    => __('New Password', 'wp-front-end-profile'),
        'type'    => 'password',
        'classes' => 'user_pass',
    ];

    return $fields;
}
add_filter('wpfep_fields_password', 'wpfep_add_password_tab_fields', 10);
