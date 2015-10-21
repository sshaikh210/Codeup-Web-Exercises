$(document).ready(function(){
  "use strict";
  });
var blogRequest = $.get('data/blog.json');

blogRequest.always(function() {
  console.log("Request Sent");
});
blogRequest.fail(function(data, error) {
  console.log(error);
  console.log(data);
});
blogRequest.done(function(data){
console.log(data);

var populateBlog = [];

data.forEach (function(object, index, array) {
  console.log(object.title + " " + object.categories);
  console.log(index);
  console.log(array);
  populateBlog += '<div>'
            + '<h1 class="title">' + object.title + '</h1>'
            + '<p class="post">' + object.posts + '</p>'
            + '<p class="tags">' + object.tags + '</p>'
            + '<p class="date">' + object.date + '</p>'
});
$('#posts').html(populateBlog)

});