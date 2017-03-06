
function del() {
	$.get("del.php");
	console.log("deleted");
	return false;
}
function add() {
	$.get("add.php");
	console.log("added");
	return false;
}