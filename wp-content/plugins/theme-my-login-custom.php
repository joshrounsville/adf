<?php

function tml_registration_errors( $errors ) {
  if ( empty( $_POST['first_name'] ) )
    $errors->add( 'empty_first_name', '<strong>ERROR</strong>: Please enter your first name.' );

  if ( empty( $_POST['last_name'] ) )
    $errors->add( 'empty_last_name', '<strong>ERROR</strong>: Please enter your last name.' );

  if ( empty( $_POST['date_of_birth'] ) )
    $errors->add( 'empty_date_of_birth', '<strong>ERROR</strong>: Please enter your date of birth.' );

  if ( empty( $_POST['phone_number'] ) )
    $errors->add( 'empty_phone_number', '<strong>ERROR</strong>: Please enter your phone number.' );

  if ( empty( $_POST['goals_short_term'] ) )
    $errors->add( 'empty_goals_short_term', '<strong>ERROR</strong>: Please enter your short term soccer goals.' );

  if ( empty( $_POST['goals_long_term'] ) )
    $errors->add( 'empty_goals_long_term', '<strong>ERROR</strong>: Please enter your long term soccer goals.' );

  if ( empty( $_POST['guardian_first_name'] ) )
    $errors->add( 'empty_guardian_first_name', '<strong>ERROR</strong>: Please enter parent/guardian first name.' );

  if ( empty( $_POST['guardian_last_name'] ) )
    $errors->add( 'empty_guardian_last_name', '<strong>ERROR</strong>: Please enter parent/guardian last name.' );

  if ( empty( $_POST['guardian_email'] ) )
    $errors->add( 'empty_guardian_email', '<strong>ERROR</strong>: Please enter parent/guardian email address.' );

  if ( empty( $_POST['guardian_phone_number'] ) )
    $errors->add( 'empty_guardian_phone_number', '<strong>ERROR</strong>: Please enter parent/guardian phone number.' );

  if ( empty( $_POST['hear_about_us'] ) )
    $errors->add( 'empty_hear_about_us', '<strong>ERROR</strong>: Please tell us how you heard about us.' );

  if ( empty( $_POST['program'] ) )
    $errors->add( 'empty_program', '<strong>ERROR</strong>: Please select a program.' );


  return $errors;
}

add_filter( 'registration_errors', 'tml_registration_errors' );



function tml_user_register( $user_id ) {
  if ( !empty( $_POST['first_name'] ) )
    update_user_meta( $user_id, 'first_name', $_POST['first_name'] );

  if ( !empty( $_POST['last_name'] ) )
    update_user_meta( $user_id, 'last_name', $_POST['last_name'] );

  if ( !empty( $_POST['date_of_birth'] ) )
    update_user_meta( $user_id, 'date_of_birth', $_POST['date_of_birth'] );

  if ( !empty( $_POST['position'] ) )
    update_user_meta( $user_id, 'position', $_POST['position'] );

  if ( !empty( $_POST['phone_number'] ) )
    update_user_meta( $user_id, 'phone_number', $_POST['phone_number'] );

  if ( !empty( $_POST['current_club'] ) )
    update_user_meta( $user_id, 'current_club', $_POST['current_club'] );

  if ( !empty( $_POST['goals_short_term'] ) )
    update_user_meta( $user_id, 'goals_short_term', $_POST['goals_short_term'] );

  if ( !empty( $_POST['goals_long_term'] ) )
    update_user_meta( $user_id, 'goals_long_term', $_POST['goals_long_term'] );

  if ( !empty( $_POST['guardian_first_name'] ) )
    update_user_meta( $user_id, 'guardian_first_name', $_POST['guardian_first_name'] );

  if ( !empty( $_POST['guardian_last_name'] ) )
    update_user_meta( $user_id, 'guardian_last_name', $_POST['guardian_last_name'] );

  if ( !empty( $_POST['guardian_email'] ) )
    update_user_meta( $user_id, 'guardian_email', $_POST['guardian_email'] );

  if ( !empty( $_POST['guardian_phone_number'] ) )
    update_user_meta( $user_id, 'guardian_phone_number', $_POST['guardian_phone_number'] );

  if ( !empty( $_POST['hear_about_us'] ) )
    update_user_meta( $user_id, 'hear_about_us', $_POST['hear_about_us'] );

  if ( !empty( $_POST['program'] ) )
    update_user_meta( $user_id, 'program', $_POST['program'] );
}

add_action( 'user_register', 'tml_user_register' );




function tml_user_update( $user_id ) {
  if ( current_user_can('edit_user', $user_id) )
    update_user_meta( $user_id, 'favorite_player', $_POST['favorite_player'] );

  if ( current_user_can('edit_user', $user_id) )
    update_user_meta( $user_id, 'position', $_POST['position'] );

  if ( current_user_can('edit_user', $user_id) )
    update_user_meta( $user_id, 'place_of_birth', $_POST['place_of_birth'] );

  if ( current_user_can('edit_user', $user_id) )
    update_user_meta( $user_id, 'instagram_account', $_POST['instagram_account'] );

  if ( current_user_can('edit_user', $user_id) )
    update_user_meta( $user_id, 'facebook_account', $_POST['facebook_account'] );

  if ( current_user_can('edit_user', $user_id) )
    update_user_meta( $user_id, 'twitter_account', $_POST['twitter_account'] );

  if ( current_user_can('edit_user', $user_id) )
    update_user_meta( $user_id, 'first_name', $_POST['first_name'] );

  if ( current_user_can('edit_user', $user_id) )
    update_user_meta( $user_id, 'last_name', $_POST['last_name'] );

  if ( current_user_can('edit_user', $user_id) )
    update_user_meta( $user_id, 'date_of_birth', $_POST['date_of_birth'] );

  if ( current_user_can('edit_user', $user_id) )
    update_user_meta( $user_id, 'phone_number', $_POST['phone_number'] );

  if ( current_user_can('edit_user', $user_id) )
    update_user_meta( $user_id, 'current_club', $_POST['current_club'] );

  if ( current_user_can('edit_user', $user_id) )
    update_user_meta( $user_id, 'goals_short_term', $_POST['goals_short_term'] );

  if ( current_user_can('edit_user', $user_id) )
    update_user_meta( $user_id, 'goals_long_term', $_POST['goals_long_term'] );

  if ( current_user_can('edit_user', $user_id) )
    update_user_meta( $user_id, 'guardian_first_name', $_POST['guardian_first_name'] );

  if ( current_user_can('edit_user', $user_id) )
    update_user_meta( $user_id, 'guardian_last_name', $_POST['guardian_last_name'] );

  if ( current_user_can('edit_user', $user_id) )
    update_user_meta( $user_id, 'guardian_email', $_POST['guardian_email'] );

  if ( current_user_can('edit_user', $user_id) )
    update_user_meta( $user_id, 'guardian_phone_number', $_POST['guardian_phone_number'] );

  if ( current_user_can('edit_user', $user_id) )
    update_user_meta( $user_id, 'hear_about_us', $_POST['hear_about_us'] );

  if ( current_user_can('edit_user', $user_id) )
    update_user_meta( $user_id, 'program', $_POST['program'] );
}

add_action( 'personal_options_update', 'tml_user_update' );


?>