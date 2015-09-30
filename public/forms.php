<!DOCTYPE html>
<html>
<body>
    <head>
        <meta charset="utf-8">
        <title>Form</title>
    </head>
    <h1>GET</h1>
    <?php var_dump($_GET); ?>

    <h1>POST</h1>
    <?php var_dump($_POST); ?>
   
   <h2>Search</h2>

	<form method="GET" action="/forms.php">
	<p>
        <label for="search">Search</label>
        <input id="search" name="Search" type="text" placeholder="Search Here">
    </p>
    <p>
        <button type="submit">Search!</button>
    </p>
    <h2>Log In Info</h2>

  	<form method="POST" action="/forms.php">
	<p>
        <label for="username">Username</label>
        <input id="username" name="Username" type="text" placeholder="Type Username Here">
    </p>
    <p>
        <label for="password">Password</label>
        <input id="password" name="password" type="password" placeholder="Password Goes Here">
     </p>
     <p>
        <button type="submit">Log In!</button>

    </p>
    <h2>Sign-Up Form</h2>
     <form method="POST" action="/forms.php">

    <p>
    	<label for="name">Name</label>
    	<input id="name" name="name" type="text" placeholder="Type Name Here">
    </p>
    <p>
    	<label for="su_username">Username</label>
        <input id="su_username" name="su_username" type="text" placeholder="Type Username Here">
     </p>
     <p>
        <label for="su_password">Password</label>
        <input id="su_password" name="su_password" type="su_password" placeholder="Password Goes Here">
    </p>
    <p>
        <button type="submit">Sign-Up!</button>
    </p>
    <p>
    <h2>Contact Me</h2>
    <form method="POST" action="/forms.php">

    	<label for="address">Address</label>
    	<input id="address" name="address" type="text" placeholder="Address">
    </p>
    <p>
    	<label for="subject">Subject</label>
        <input id="subject" name="Subject" type="text" placeholder="Subject">
     </p>
     <p>
        <label for="body">Body</label>
     </p>
     <p>
        <textarea id="body" name="body" type="textarea" placeholder="Type your message here"></textarea>
     </p>
     <p>
        <button type="submit">Contact Me!</button>
    </p>
    </form>
</body>
</html>