$(function(){
	for (var i = 0; i < studentNum; i++) {
		$("#studentImage"+i).css({"background-image":"url(../img/"+i+".jpg)"});
		$("#studentImage"+i).parent().children("form").hide();
	}
})
function editUsers(w) {
	swal({
		title: "Change your description!",
		text: "Write something interesting:",
		type: "input",
		showCancelButton: true,
		closeOnConfirm: false,
		animation: "slide-from-top",
		inputPlaceholder: "Write something"
	},function(inputValue){
		if (inputValue === false) return false;
		if (inputValue === "") {
			swal.showInputError("You need to write something!");
			return false;
		}
		$("html").append('<form id="changeDesc" action="changeDesc.php"><input type="text" name="loc" value="'+w+'"><input type="text" name="desc" value="'+inputValue+'"></form>');
		$("#changeDesc").submit();
	});
}
function editImg(w) {
	$("#studentImage"+w).parent().children(".studentDesc").toggle();
	$("#studentImage"+w).parent().children("form").toggle();
}