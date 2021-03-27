// Two prameters is user by Borwser refresh data post issue solved
// And main Instruction this option thruogh Browser Back button Disabled

history.pushState(null,null,location.href);
	window.onpopstate = function(){
	history.go(1);
};

// Two prameters is user by Borwser refresh data post issue solved
// And main Instruction this option thruogh Browser Back button Disabled

function preventBack(){window.history.forward();}
setTimeout("preventBack()", 0);
window.onunload=function(){null};

// $_____________________End Coding _$_of javascript_________________________$