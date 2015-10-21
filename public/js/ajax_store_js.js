"use strict";
(function() {
    $(document).ready(function(){
      $("#ref_butn").click(function(){
     location.reload();
      });
    });
    // TODO: Create an ajax GET request for /data/inventory.json
   $.ajax("/data/inventory.json");

    // TODO: Take the data from inventory.json and append it to the products table
    //       HINT: Your data should come back as a JSON object; use console.log() to inspect
    //             its contents and fields
    //       HINT: You will want to target #insertProducts for your new HTML elements
     $.ajax("/data/inventory.json").done(function(data) {

        var productData = [];

        data.forEach(function(name) {
             productData += '<tr><td>' + name.title + '</td><td>' + name.quantity + '</td><td>' + name.price + '</td><td>' + name.categories + '</td></tr>';

             $('#insertProducts').html(productData)
        });
        console.log("Data returned from server:");
        console.log(data);
    });
    $('#insertProducts').html(productData);

    })();