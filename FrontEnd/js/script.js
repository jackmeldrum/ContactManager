
// HTTP: a protocol for sending/receiving data over the internet
// All HTTP rquests illicit a response. All requests and responses (can) have...
// 1. A Method: the method of a request should describe the intent of the request
// Example:
// GET: retrieving data
// POST: sending data
// ...
// 2. Headers: extra data that is sent at the beginning of the request/response. Usually it's metadata or
// 			   describes the content of the request/response.
// 3. Parameters/data: extra data that is used in front-end/back-end code in some operation

// Query String: a list of key/value pairs at the end of a URL used to send request parameters/data
// Example:
//                   v
// http://example.com?name=Joe&age=50

// To use APIs, you need to know...
// 1. The "endpoint(s)" or URL to send request(s) to
// 2. Any required headers
// 3. Any required parameters/data
// 4. The format of the response (JSON, HTML, XML, etc...)

// Fetch: a function that sends an HTTP request to the specified server
// 		  and lets you (optionally) handle the response.
var contacts_table = document.getElementById('contacts_table')
var button = document.getElementById('view_button');
button.addEventListener('click',function(){
  fetch( "http://cop4331.club:8080/api/contact", {
    method: "GET",
    headers: { },
    // NOTE: You can't use the "body" option with the "GET" method
    // 	   To send data with the "GET" method. You must use the query string at the end of the URL
    //body: { filter: "recent" }
  } ).then( function( response ){
    return response.json( );
  } ).then( function( response ){
    contacts_table.innerHTML = '';
    for (var i = 0; i <response.length; i++)
    {
      contacts_table.innerHTML+= `
      <tr>
      <td>${response[i].first_name}</td>
      <td>${response[i].last_name}</td>
      <td>${response[i].phone_number}</td>
      <td>${response[i].email}</td>
      </tr>
      `;

    }

    console.log( response[0].first_name + " " + response[0].last_name );
  } );
});
