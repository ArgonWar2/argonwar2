/*! 
*  Copyright 2006-2011 Dynamic Site Solutions.
*  Free use of this script is permitted for non-commercial applications,
*  subject to the requirement that this comment block be kept and not be
*  altered.  The data and executable parts of the script may be changed
*  as needed.  Dynamic Site Solutions makes no warranty regarding fitness
*  of use or correct function of the script.  Terms for use of this script
*  in commercial applications may be negotiated; for this, or for other
*  questions, contact "license-info@dynamicsitesolutions.com".
*
*  Script by: Dynamic Site Solutions -- http://www.dynamicsitesolutions.com/
*  Last Updated: 2011-03-09

How To Use The Script

The script looks for an element with the ID attribute set to "addBookmarkContainer" and appends a new link (<a>) element as a child of it. The following code is an example of the elements needed to use this script on a page (change the path as needed).

<script type="text/javascript" src="/js/add_bookmark.js">
</script>
<p id="addBookmarkContainer"></p>

*/

//IE5+/Win, Firefox, Netscape 6+, Opera 7+, Safari, Google Chrome for Windows,
// Konqueror 3, IE5/Mac, iCab 3

var isMSIE=/*@cc_on!@*/false; // http://dean.edwards.name/weblog/2007/03/sniff/
var isIEmac=false; /*@cc_on @if(@_jscript&&!(@_win32||@_win16)&& 
(@_jscript_version<5.5)) isIEmac=true; @end @*/
var undefined;

function isEmpty(s){return ((s=='')||/^\s*$/.test(s));}

var addBookmarkObj = {
  linkText:'Aggiungi il sito ai tuoi preferiti',
  title:document.title,
  URL:location.href,
  addTextLink:function(parId){
    if(addBookmarkObj.checkMobileDevice()) return;
    var a=addBookmarkObj.makeLink(parId,1);
    if(a){
      jQuery(a).text(addBookmarkObj.linkText);
      return;
    }
    var cont=addBookmarkObj.getParent(parId);
    if(!cont) return;
    jQuery(cont).append('<span>'+addBookmarkObj.findKeys()+'</span>');
  },
  addImageLink:function(parId,imgPath){
    if(!imgPath || isEmpty(imgPath)) return;
    if(addBookmarkObj.checkMobileDevice()) return;
    var o=addBookmarkObj,a=o.makeLink(parId),img=document.createElement('img');
    img.title=img.alt=o.modal?o.linkText:o.findKeys();
    img.src=imgPath;
    a.appendChild(img);
  },
  makeLink:function(parId,isText){
    var cont=addBookmarkObj.getParent(parId);
    if(!cont) return null;
    var a=document.createElement('a');
    a.href=addBookmarkObj.URL;
    var s=document.createElement('div').style;
    var isFx35plus=((navigator.userAgent.toLowerCase().indexOf('firefox')!=-1)
      && (s.wordWrap!==undefined) && (s.MozTransform!==undefined));
    if(window.external && isMSIE && !isIEmac){
      // IE4/Win generates an error when you
      // execute 'typeof(window.external.AddFavorite)'
      // In IE7 the page must be from a web server, not directly from a local 
      // file system, otherwise, you will get a permission denied error.
      // Maxthon shows 'typeof(window.external.AddFavorite)' as 'undefined'
      // even though it is defined.
      a.onclick=function(){ // IE/Win
        try {
          window.external.AddFavorite(addBookmarkObj.URL,addBookmarkObj.title);
        } catch(ex){
          addBookmarkObj.displayMsg(addBookmarkObj.findKeys());
        }
        return false;
      }
      addBookmarkObj.modal=1;
    } else if(window.opera || isFx35plus){ // Opera 7+, Firefox 3.5+
      a.title=addBookmarkObj.title,a.rel='sidebar';
      addBookmarkObj.modal=1;
    } else if(isText) {
      return null;
    } else {
      a.onclick=function(){
        addBookmarkObj.displayMsg(this.firstChild.title);
        return false;
      }
    }
    return cont.appendChild(a);
  },
  displayMsg:function(t){
  	alert('After closing this dialog, '+t.charAt(0).toLowerCase()+t.slice(1));
  },
  getParent:function(parId){
    if(!document.getElementById || !document.createTextNode) return null;
    parId=((typeof(parId)=='string')&&!isEmpty(parId))
      ?parId:'addBookmarkContainer';
    return document.getElementById(parId)||null;
  },
  findKeys:function(){
    // user agent sniffing is bad in general, but this is one of the times 
    // when it's really necessary
    var ua=navigator.userAgent.toLowerCase(),Webkit=(ua.indexOf('webkit')!=-1),
      Mac=/mac(\s*os|intosh|.*p(ower)?pc)/.test(ua),
      str=(Mac?'Command/Cmd':'Ctrl');
    if(window.opera && (!opera.version || (opera.version()<9))) {
      str+=' + T';  // Opera versions before 9
    } else if(ua.indexOf('konqueror')!=-1) {
      str+=' + B'; // Konqueror
    } else if(window.opera || window.home || Webkit || isMSIE || Mac) {
      // IE, Firefox, Netscape, Safari, Google Chrome, Opera 9+, iCab, IE5/Mac
      str+=' + D';
    }
    return ((str)?'Premi '+str+' ;-)':str);
  },
  checkMobileDevice:function(){
    var r='iphone|ipod|android|palm|symbian|windows ce|windows phone|iemobile|'+
    'blackberry|smartphone|netfront|opera m|htc[-_].*opera';
    return (new RegExp(r)).test(navigator.userAgent.toLowerCase());
  }
}


jQuery(document).ready(addBookmarkObj.addTextLink);


// to make multiple links, do something like this:
/*
jQuery(document).ready(function(){
  var f=addBookmarkObj.addTextLink;
  f();
  f('otherContainerID');
});
*/

// below is an example of how to make an image link with this
// the first parameter is the ID. If you pass an empty string it defaults to
// 'addBookmarkContainer'.
/*
jQuery(document).ready(function(){
  addBookmarkObj.addImageLink('','/images/add-bookmark.jpg');
});
*/
