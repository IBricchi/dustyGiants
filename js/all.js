var u=getUrlVars()["u"];
var visits=localStorage.getItem("visit");
var name=localStorage.getItem("name");
var login;
var pass;
$(function(){
	$("head").append("<script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');ga('create', 'UA-71624396-4', 'auto');ga('send', 'pageview');</script>")
})
function firstLoad() {
	swal({	
		title: "First Name!",
		text: "Capitalise first letter:",
		type: "input",
		closeOnConfirm: false,
		animation: "slide-from-top",
		inputPlaceholder: "Write something" 
	},
	function(inputValue){
		if (inputValue === false) return false;
		if (inputValue !== "Prowse" && !($.inArray(inputValue, students) >= 0) || inputValue === "") {
			swal.showInputError("That name is not valid");
			return false;
		}
		login=inputValue;
		swal({	
			title: "Yout Password!",
			text: "If you haven't changed your password, it is \"password1\":",
			type: "input",
			closeOnConfirm: false,
			animation: "slide-from-top",
			inputPlaceholder: "Write something" 
		},
		function(inputValue){
			if (inputValue === false) return false;
			pass=inputValue;
			swal({
				title: "Nice!", 
				text: "Welcome " + "checking password", 
				type: "success",
				showConfirmButton: false}); 
				setTimeout(function(){
					$("html").append('<form id="loginForm" action="userLogin.php" method="post"><input type="hidden" name="login" value="'+login+'"><input type="hidden" name="pass" value="'+pass+'"></form>');
					$('#loginForm').submit();
				},1000);
		});
	});
};
function getUrlVars(){
    var vars = [], hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for(var i = 0; i < hashes.length; i++)
    {
        hash = hashes[i].split('=');
        vars.push(hash[0]);
        vars[hash[0]] = hash[1];
    }
    return vars;
}
function checkVisit() {
	if (localStorage.getItem("visit") != 1) {
		if (window.location.href==="http://dustygiants.tk/"){
			firstLoad();
		}else{
			window.location.href="http://dustygiants.tk/";
		}
	}else if(visits == 1){
		if (u != name) {
			window.location.href = '?u='+name;
		}
	} 
}
function logout(){
	localStorage.clear();
	location.reload();
}
$
(function(){
	var hours = 24; // Reset when storage is more than 24hours
	var now = new Date().getTime();
	var setupTime = localStorage.getItem('setupTime');
	if (setupTime == null) {
	    localStorage.setItem('setupTime', now)
	} else {
	    if(now-setupTime > hours*60*60*1000) {
	        localStorage.clear()
	        localStorage.setItem('setupTime', now);
	    }
	}
	checkVisit()
})