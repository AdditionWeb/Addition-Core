<?php

/* Alter The Events Calendar Datepicker */

function event_bar_modify_placeholder_text( array $filters ) {
    $filters['tribe-bar-date']['html'] = str_replace(
      '>',
      'readonly>',
      $filters['tribe-bar-date']['html'] );
    return $filters;
}

add_filter( 'tribe-events-bar-filters', 'event_bar_modify_placeholder_text', 100 );

/* Tribe, replace custom strings */
function tribe_custom_theme_text ( $translation, $text, $domain ) {

    $custom_text = array(
        'There were no results found.' => 'There appears to be no scheduled events. There may be unlisted events, so be sure to check with the church congregation!',
    );

    if( (strpos($domain, 'tribe-') === 0 || strpos($domain, 'the-events-') === 0 || strpos($domain, 'event-') === 0) && array_key_exists($translation, $custom_text) ) {
        $translation = $custom_text[$translation];
    }

    return $translation;
}

add_filter('gettext', 'tribe_custom_theme_text', 20, 3);
