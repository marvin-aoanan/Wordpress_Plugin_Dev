<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

// Hooks run when wordpress loads

add_action('after_setup_theme', 'load_carbon_fields');
add_action('carbon_fields_register_fields', 'create_options_page');

function load_carbon_fields()
{
    \Carbon_Fields\Carbon_Fields::boot();
}

function create_options_page()
{
    Container::make('theme_options', __('Contact Form'))
        ->set_icon('dashicons-email')
        ->add_fields(array(
            Field::make( 'checkbox', 'contact_plugin_active', __('Active') )
                ->set_option_value( 'yes' ),

            Field::make('text', 'contact_plugin_recipient', __('Recipient Email'))->set_attribute('placeholder', 'your@email.com')
                ->set_help_text('The email that the form is submitted'),

            Field::make('textarea', 'contact_plugin_message', __('Confirmation Message'))
                ->set_rows(4)
                ->set_attribute('placeholder', 'Enter confirmation message')
                ->set_help_text('Type the message you want the sender wants to recieve')
        ));
}
