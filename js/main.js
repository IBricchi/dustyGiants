var form = false;
var newQuote;
var newAuthor;
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
var u = getUrlVars()["u"];
function newQuote(){
	swal({	
			title: "Add your quote!",
			text: 'Do not use parentheses "":',
			type: "input",
			showCancelButton: true,
			closeOnConfirm: false,
			animation: "slide-from-top",
			inputPlaceholder: "Write something" 
		},
		function(inputValue){
			if (inputValue === false) return false;
			if (inputValue === "") {
				swal.showInputError("You have to write something");
				return false;
			}
			newQuote = inputValue;
			swal({	
					title: "Author!",
					text: "Capitalise first letter:",
					type: "input",
					showCancelButton: true,
					closeOnConfirm: false,
					animation: "slide-from-top",
					inputPlaceholder: "Write something" 
				},
				function(inputValue){
					if (inputValue === false) return false;
					if (inputValue === "") {
						swal.showInputError("That name is not valid");
						return false;
					}
					newAuthor = inputValue;
					$("html").append('<form id="form" action="newQuote.php" method="post"><input type="hidden" name="quote" value='+newQuote+'><input type="hidden" name="author" value='+newAuthor+'><input type="hidden" name="u" value="'+u+'"></form>');
					$("#form").submit();
				});
		});
}
function changePass() {
	swal({
		title: "New password here!",
		text: "----------------------------------------",
		type: "input",
		showCancelButton: true,
		closeOnConfirm: false,
		animation: "slide-from-top",
		inputPlaceholder: "Write something"
	},
	function(inputValue){
		if (inputValue === false) return false;
		if (inputValue === "") {
			swal.showInputError("You need to write something!");
			return false
		}
		pass = inputValue;
		swal("Nice!", "changing password"); 
		setTimeout(function(){
			$("html").append('<form id="loginForm" action="changePass.php" method="post"><input type="hidden" name="user" value="'+u+'"><input type="hidden" name="newPass" value="'+pass+'"></form>');
			$('#loginForm').submit();
		},1000);
	});
}