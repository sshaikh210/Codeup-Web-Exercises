<?php

function sillyFunction ()
	{
		throw new Exception ("NONONONONOOOOOOOOOOOOOO!");
		echo "I am code from inside the function\n";
	}

	try {
		echo "I am code before the function\n";
		sillyFunction();
		echo "I am code after the function\n";

	} catch(Exception $e) {
		echo "Oh noes!! An exception was raised!\n";
	}
		echo "But I'm still going baby!\n";

?>