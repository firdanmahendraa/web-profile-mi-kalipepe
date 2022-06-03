fetch("http://localhost/web-profile-mi-kalipepe/api").then((data) => {
	return data.json();
}).then((objectData) => {
	console.log(objectData); 
	let tableData="";
	for(let values in objectData){
		tableData += `<tr>
		<td>${objectData[values].id_guru}</td>
		</tr>`
	}
	document.getElementById("table_body").innerHTML=tableData;
})


