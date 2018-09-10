<?php

/******************************************************************************
 *
 * Youtube to mp3 converter and podcast feed generator.
 * Configuration file
 *
 * @author     Michal Lichwa
 * @license    http://opensource.org/licenses/MIT The MIT Licence
 * @version    0.1.0
 *****************************************************************************/

/**
 * The base path to scan for media items
 * This is relative to the current script
 */
$media_base_path = 'downloads';

/**
 * Whether to check for mediainfo
 */
$mediainfo_check = false;

/**
 * Feed info
 *
 * Basic feed information.
 *
 * description: basically anything you want, may appear in feed reader
 * link: dummy or real URL
 * title: your feed title as it appears in the feed reader
 * image: main image for feed (optional)
 */
$conf = array(
    'description' => 'Feed Title',
    'link'        => 'https://yourwebsite.com',
    'title'       => 'My Youtube Podcasts',
    'image'       => 'cast.jpg'
);

/**
 * File extensions
 *
 * Extensions to use for feed item creation. Add your own extensions to be
 * included, the corresponding MIME types are generated automatically.
 */
$exts = array(
    'flac' => 'audio/flac',
    'm4a'  => 'audio/mp4',
    'm4b'  => 'audio/mp4',
    'mp3'  => 'audio/mp3',
    'mp4'  => 'audio/mp4',
    'oga'  => 'audio/ogg',
    'ogg'  => 'audio/ogg'
);
