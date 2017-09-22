<?php
/**
 * @file
 * This file creates an article for the 'Highlighted Top' view mode.
 */

$file = file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/assets/sample-content/articles.json');
$articles = json_decode($file, TRUE);
$title = $articles[7]['title'];

include $_SERVER['DOCUMENT_ROOT'] . '/components/view-modes/highlighted-top/template.php';