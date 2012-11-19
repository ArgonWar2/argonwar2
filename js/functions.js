$(function(){
   // Match tags with a title attribute and use it as the content (default).
   $('*[title]').qtip({
      style: { classes: 'ui-tooltip-dark ui-tooltip-shadow ui-tooltip-rounded' }
   });
});