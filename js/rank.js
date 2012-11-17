// Create the tooltips only on document load
$(document).ready(function()
{
      $('#show_search').qtip(
      {
         content: {
            // Set the text to an image HTML string with the correct src URL to the loading image you want to use
            text: '<progress>Caricamento...</progress>',
            ajax: {
               url: ROOT+'rank/giocatori.search.php'//IMPORTANT: $(this).attr('rel') // Use the rel attribute of each element for the url to load
            },
            title: {
               text: 'Ricerca avanzata', // Give the tooltip a title using each elements text
               button: true
            }
         },
         position: {
            at: 'bottom center', // Position the tooltip above the link
            my: 'top center',
            viewport: $(window), // Keep the tooltip on-screen at all times
            effect: false // Disable positioning animation
         },
         show: {
            event: 'click',
            solo: true // Only show one tooltip at a time
         },
         hide: 'unfocus',
         style: {
            classes: 'ui-tooltip qtip ui-helper-reset ui-tooltip-default ui-tooltip-shadow ui-tooltip-dark ui-tooltip-pos-tc ui-tooltip-focus ui-tooltip-rounded'
         }
      })
 
   // Make sure it doesn't follow the link when we click it
   .click(function(event) { event.preventDefault(); });
});
