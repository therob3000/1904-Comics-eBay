var clip = new ZeroClipboard( document.getElementById("copy-button"), {
  moviePath: "js/zeroclipboard.swf"
} );
clip.on('mousedown',function() {
  clip.setText(document.getElementById('copy-content').value);
  console.log("copying...");
});
clip.on('complete',function(client,args) {
  console.log('copied: ' + args.text);
});