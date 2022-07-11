

function onClaimChange(id, status){
	alert("Changing Claim status to "+status);
	const xhttp = new XMLHttpRequest();
	xhttp.open("POST", "/akenkan/actions/claim_processor.php");
		xhttp.onreadystatechange = function (){
			if (xhttp.readyState == XMLHttpRequest.DONE){
				alert(xhttp.response);
			}
		}
		xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xhttp.send("id="+ id + "&status="+status);


}