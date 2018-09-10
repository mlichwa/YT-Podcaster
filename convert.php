<?php
/******************************************************************************
 * Youtube to mp3 converter and podcast feed generator.
 *
 * @author     Michal Lichwa
 * @license    http://opensource.org/licenses/MIT The MIT Licence
 * @version    0.1.0
 *****************************************************************************/
require_once __DIR__ . '/vendor/autoload.php';

define("DOWNLOAD_FOLDER", dirname(__FILE__)."/downloads/"); //Be sure the chmod the download folder. This file needs to have permissions to write to it.
define("DOWNLOAD_FOLDER_PUBLIC", "https://yourwebsite.com/downloads/");

header("Content-Type: application/json");

if(isset($_GET["yt"]) && !empty($_GET["yt"]))
{	
	$youtubelink = $_GET["yt"];
	$command = 'youtube-dl -x --audio-format "mp3" --no-mtime --no-post-overwrites -o "/path/to/your/download/folder/%(title)s.%(ext)s" '. $youtubelink . ' 2>&1';
	echo $command;
	echo shell_exec($command);
}
else if(isset($_GET["delete"]) && !empty($_GET["delete"]))
{
	$id = $_GET["delete"];

	if(unlink(DOWNLOAD_FOLDER.$id.".mp3"))
		echo json_encode(array("error" => false, "message" => "File removed"));
	else
		echo json_encode(array("error" => true, "message" => "File not found"));
}
else
	echo json_encode(array("error" => true, "message" => "Invalid request"));
?>