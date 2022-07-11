


function onBookUpload(){
	event.preventDefault();

	var id = document.getElementById("id");
	var name = document.getElementById("title");
	var description = document.getElementById("description");
	var publish_date = document.getElementById("publish_date");
	var status = document.getElementById("status");
	var author = document.getElementById("author");
	var genre = document.getElementById("genre");
	var publisher = document.getElementById("publisher");
	var price = document.getElementById("price");

	var e =  upload_image("image");
	alert(e);



	const xhttp = new XMLHttpRequest();
	xhttp.open("POST", "/akenkan/actions/book_processor.php");
		xhttp.onreadystatechange = function (){
			if (xhttp.readyState == XMLHttpRequest.DONE){
				if (xhttp.response == "Added Book: "+name.value){
					alert(xhttp.response);
					resetElement(name);
					resetElement(description);
					resetElement(publish_date);
					resetElement(id);
					resetElement(publish_date);
					resetElement(publisher);
					resetElement(price);
				}else {
					alert(xhttp.response);
				}
			}
		}
		xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		// xhttp.send("action=add_book&title="+ name.value +"&description="+description.value +"&publish_date="+publish_date.value +"&status="+status.value +"&author="+author.value +"&genre="+genre.value +"&publisher="+publisher.value+"&id="+id.value +"&price="+price.value  );

}

function upload_image(elementName){
	var path = "";

	var image= document.getElementById(elementName).files[0];
	formData = new FormData();
	var xhr = new XMLHttpRequest();

    // Open the connection
    xhr.open('POST', '/akenkan/actions/book_processor.php');
	formData.append('/akenkan/actions/book_processor.php', image, image.name)

    // Set up a handler for when the task for the request is complete
    xhr.onload = function () {
      if (xhr.readyState == XMLHttpRequest.DONE) {
		alert(xhr.response);
		path = xhr.response;
      }
    };

    // Send the data.
    xhr.send("action=upload_image&data="+formData);
	return "k"+ path;
}

function onBookEdit(){
	event.preventDefault();

	var id = document.getElementById("id");
	var name = document.getElementById("title");
	var description = document.getElementById("description");
	var publish_date = document.getElementById("publish_date");
	var status = document.getElementById("status");
	var author = document.getElementById("author");
	var genre = document.getElementById("genre");
	var publisher = document.getElementById("publisher");
	var price = document.getElementById("price");

	const xhttp = new XMLHttpRequest();
	xhttp.open("POST", "/akenkan/actions/book_processor.php");
		xhttp.onreadystatechange = function (){
			if (xhttp.readyState == XMLHttpRequest.DONE){
				if (xhttp.response == "Updated Book: "+name.value){
					alert(xhttp.response);
					console.log(xhttp.response);
					window.location = "grid.php";
				}else {
					alert(xhttp.response);
				}
			}
		}
		xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xhttp.send("action=update_book&title="+ name.value +"&description="+description.value +"&publish_date="+publish_date.value +"&status="+status.value +"&author="+author.value +"&genre="+genre.value +"&publisher="+publisher.value+"&id="+id.value +"&price="+price.value  );

}


function onAuthorCreate(){
	var name = document.getElementById("author_name");
	event.preventDefault();
	const xhttp = new XMLHttpRequest();
	xhttp.open("POST", "/akenkan/actions/book_processor.php");
		xhttp.onreadystatechange = function (){
			if (xhttp.readyState == XMLHttpRequest.DONE){
				if (xhttp.response == "Added author: "+name.value){
					alert(xhttp.response);
					resetElement(name);
				}else {
					alert(xhttp.response);
				}
			}
		}
		xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xhttp.send("action=add_author&name="+ name.value);


}

function onStatusChange(id, status){
	const xhttp = new XMLHttpRequest();
	xhttp.open("POST", "/akenkan/actions/book_processor.php");
		xhttp.onreadystatechange = function (){
			if (xhttp.readyState == XMLHttpRequest.DONE){
					alert(status +xhttp.response);
			}
		}
		xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xhttp.send("action=update_status&id="+ id + "&status="+status);


}


function onPublisherCreate(){
	var name = document.getElementById("publisher_name");
	event.preventDefault();
	const xhttp = new XMLHttpRequest();
	xhttp.open("POST", "/akenkan/actions/book_processor.php");
		xhttp.onreadystatechange = function (){
			if (xhttp.readyState == XMLHttpRequest.DONE){
				if (xhttp.response == "Added publisher: "+name.value){
					alert(xhttp.response);
					resetElement(name);
				}else {
					alert(xhttp.response);
				}
			}
		}
		xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xhttp.send("action=add_publisher&name="+ name.value);


}


function onGenreCreate(){
	var name = document.getElementById("genre_name");
	event.preventDefault();
	const xhttp = new XMLHttpRequest();
	xhttp.open("POST", "/akenkan/actions/book_processor.php");
		xhttp.onreadystatechange = function (){
			if (xhttp.readyState == XMLHttpRequest.DONE){
				if (xhttp.response == "Added Genre: "+name.value){
					alert(xhttp.response);
					resetElement(name);
				}else {
					alert(xhttp.response);
				}
			}
		}
		xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xhttp.send("action=add_genre&name="+ name.value);


}

function resetElement(element){
	element.value = "";
}