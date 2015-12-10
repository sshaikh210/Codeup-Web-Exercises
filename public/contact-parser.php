<?php

function parseContacts($filename)
{
	$contactsArray = array();
	$handle = fopen($filename, 'r');
	$contents = fread($handle, filesize($filename));
	$contentsArray = explode("\n", trim($contents));
	foreach ($contentsArray as $value) {
		$separate = explode("|", $value);

		$name = $separate[0];
		$phone = $separate[1];
		$areacode = substr($phone, 0, 3);
		$prefix = substr($phone, 3, 3);
		$last = substr($phone, -4);
		$phone = $areacode.'-'.$prefix.'-'.$last;
		$contacts[] = [
			'name' => $name,
			'phone' => $phone,
		];
		}
		fclose($handle);
			return ($contacts);

}
var_dump(parseContacts('contacts.txt'));
