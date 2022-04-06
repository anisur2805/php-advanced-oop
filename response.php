<?php

$_post_body = array(
      'name'      => 'Some One',
      'email'     => 'some.one@gmail.com',
      'subject'   => 'Hello Some one',
      'comment'   => 'I just try to reach you.',
);
$_url = 'http://wp.local/';
$args = array(
      'body'            => $_post_body,
      'timeout'         => '5',
      'redirection'     => '5',
      'httpversion'     => '1.0',
      'blocking'        => array(),
      'headers'         => array(),
      'cookies'         => array(),
);

// $_post = wp_remote_post( $_url, $args );
// print_r( $_post );