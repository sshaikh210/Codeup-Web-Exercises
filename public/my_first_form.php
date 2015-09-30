<?php
  var_dump($_GET);
  var_dump($_POST);
?>
<!DOCTYPE html>
<html>
<body>
    <head>
        <meta charset="utf-8">
        <title>Form</title>
    </head>
    <main>
        <h1 style="color:blue;text-decoration:underline;">User Login</h1>
    </main>
<form method="POST" action="/my_first_form.php">
    <p>
        <label for="username">Username</label>
        <input id="username" name="username" type="text" placeholder="Submit Username Here">
    </p>
    <p>
        <label for="password">Password</label>
        <input id="password" name="password" type="password" placeholder="Password Goes Here">
    </p>
    <p>
        <button type="submit">Login</button>
    </p>
    <p>
        <input type="checkbox" id="mailing_list" name="mailing_list" value="yes">
        <label for="mailing_list">Sign me up for the mailing list!</label>
    </p>
    <p>
        <h1>Compose an E-mail</h1>
    </p>
    <p>
        <label for="to">To</label>
        <input id="to" name="to" type="text" placeholder="Sending To">
    </p>
    <p>
        <label for="from">From</label>
        <input id="from" name="from" type="text" placeholder="Sent From">
    </p>
    <p>
        <label for="subject">Subject</label>
        <input id="subjbect" name="subject" type="text" placeholder="E-mail Subject">
    </p>
    <p>
        <label for="body">Body</label>
    </p>
    <p>
        <textarea id="email_body" name="email_body" placeholder="Content Here"></textarea>
    <p>

        <button type="send">Send!</button>
    <p>
        <input type="checkbox" id="mailing_list" name="mailing_list" value="" checked>
        <label for="mailing_list">Save copy to my sent folder!</label>
    </p>
    <p>
        <p>What operating systems have you used?</p>
        <label><input type="checkbox" id="os1" name="os[]" value="linux"> Linux</label>
        <label><input type="checkbox" id="os2" name="os[]" value="osx"> OS X</label>
        <label><input type="checkbox" id="os3" name="os[]" value="windows"> Windows</label>
    </p>
        <p>What is the capital of Texas?</p>
        <label>
            <input type="radio" name="q1" value="houston">
            Houston
        </label>
        <label>
            <input type="radio" name="q1" value="dallas">
            Dallas
        </label>
        <label>
            <input type="radio" name="q1" value="austin">
            Austin
        </label>
        <label>
            <input type="radio" name="q1" value="san antonio">
            San Antonio
        </label>
        <label>
            <input type="radio" name="q1" value="none of the above">
            None of the Above
        </label>
    </p>
    <p>
    <form method="POST" action="/my_first_form.php">
        <h1>Multiple Choice Test</h1>
        <p>Who was the first President of the US?</p>
         <label>
            <input type="radio" name="first_president" value="george_washington">
            George Washington
        </label>
         <label>
            <input type="radio" name="first_president" value="george_bush">
            George Bush
        </label>
         <label>
            <input type="radio" name="first_president" value="sam_houston">
            Sam Houston
        </label>
        <p>Who is the current President of the US?</p>
        <label>
            <input type="radio" name="current_president" value="barack_obama">
            Barack Obama
        </label>
            <input type="radio" name="current_president" value="hillary_clinton">
            Hillary Clinton
    <p>
        <button type="submit">Submit!</button>
    </p>
    <p>
        <p>Who is in the Executive Branch?</p>
        <label><input type="checkbox" id="eb1" name="eb[]" value="barack_obama"> Barack Obama</label>
        <label><input type="checkbox" id="eb2" name="eb[]" value="joe_biden"> Joe Biden</label>
        <label><input type="checkbox" id="eb3" name="eb[]" value="george_bush"> George Bush</label>
        <label><input type="checkbox" id="eb4" name="eb[]" value="dick_cheney"> Dick Cheney</label>
    </p>
    <p>
        <button type="submit">Submit!</button>
    </p>
    <p>
    <form method="POST" action="/my_first_form.php">
    <h1>Select Testing</h1>
        <p>Are you at Codeup?</p>
        <p><label for="transmission"> </label>
        <select id="transmission" name="transmission">
        <option value="1">Yes</option>
        <option value="2">No</option>
    </p>
    </select>
      <p>
        <button type="submit">Submit!</button>
    </p>
    <label for="os">Which have been Presidents? </label>
    <p>
    <select id="os" name="os[]" multiple>
    <option value="obama">Obama</option>
    <option value="clinton">Clinton</option>
    <option value="romney">Romney</option>
    </select>
    </p>
    <p><button type="submit">Submit!</button></p>
</form>
</body>
</html>