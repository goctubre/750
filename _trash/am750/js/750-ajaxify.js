let ajaxify = new Ajaxify({
  elements: "#insidedonde", //#primary
  selector : "a:not(.no-ajaxy)", //selector for links to trigger swapping - not elements to be swapped - i.e. a selection of links
  //visual effects settings
  requestDelay : 0, //in msec - Delay of Pronto request
  //scrolltop : "s", // Smart scroll, true = always scroll to top of page, false = no scroll
  scrolltop : true,
  inline : true,
  //script and style handling settings, prefetch
  deltas : true, // true = deltas loaded, false = all scripts loaded
  //alwayshints: "750-v04.js",
  //inline : true,
  //inlineskip : "vacunas" // strings - separated by ", " - if matched in any inline scripts - these are NOT are executed - set "inline" to true beforehand 
 });