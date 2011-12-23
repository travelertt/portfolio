/**
 * Portfolio Scripts
 */
//@codekit-prepend "jquery.lettering.js";

// We define a function that takes one parameter named $.
(function ($) { $(document).ready(function() {
  
  /**
   * Lettering script for Front page Welcome Text
   */
  $(".tt-welcome").lettering('lines').children('span').lettering('words');
  
  /**
   * Effect to cause the Sticker to spin when clicked.
   */
  $(".tt-sticker img").click(function(){
    $(this).toggleClass("spin");
  });

// Here we immediately call the function with jQuery as the parameter.
});}(jQuery));
