var isNS=(navigator.appName=="Netscape")?1:0;if(navigator.appName=="Netscape"){document.captureEvents(Event.MOUSEDOWN||Event.MOUSEUP)}window.onbeforeunload=confirmExit;function confirmExit(d){if(document.forms[0].btnSubmit.value==logoutValue){var c="mode=193&username="+encodeURIComponent(document.frmHTTPClientLogin.username.value)+"&a="+(new Date).getTime();var a="logout.xml";var b=getAjaxObject();b.open("POST",a,true);b.setRequestHeader("Content-Type","application/x-www-form-urlencoded");b.send(c);agt=navigator.userAgent.toLowerCase();if(agt.indexOf("safari")==-1){alert(logoutMessage)}}}document.onkeydown=function(d){var a=(document.layers);var b=false;var c=false;if(a){eventChooser=keyStroke.which;isAlter=keyStroke.altKey;c=keyStroke.ctrlKey}else{if(d){eventChooser=d.keyCode;isAlter=d.altKey;c=d.ctrlKey}else{eventChooser=event.keyCode;isAlter=event.altKey;c=event.ctrlKey}}which=String.fromCharCode(eventChooser);xCode=which.charCodeAt(0);if(xCode==116){if(a){keyStroke.which=0}else{if(d){d.preventDefault();d.stopPropagation()}else{event.returnValue=false;event.keyCode=0}}}};document.onmousedown=function(c){var b=(isNS)?c:event;var a=(isNS)?b.which:b.button;if((a==2)||(a==3)){return false}};document.oncontextmenu=function(){return false};