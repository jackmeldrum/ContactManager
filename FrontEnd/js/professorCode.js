
var urlBase = 'https://cop4331.club/LAMPAPI';

var userId = 0;
var firstName = "";
var lastName = "";


function showLogin()
{
	hideOrShow("main-screen", false);
	hideOrShow("loginDiv", true);
}

function doSearch()
{
	hideOrShow("search-bar", true);
	hideOrShow("add-a-contact", false);
}

function completeSearch()
{
	hideOrShow("search-bar", false);
}


function doAdd()
{
	hideOrShow("main-screen", false);
	hideOrShow("search-bar", false);
	hideOrShow("add-a-contact", true);
}

function completeAdd()
{
	hideOrShow("main-screen", false);
}

function showSignUp()
{
	hideOrShow("main-screen", false);
	hideOrShow("sign-up-page", true);
}

function doLogin()
{
	userId = 0;
	firstName = "";
	lastName = "";

	var login = document.getElementById("loginName").value;
	var password = document.getElementById("loginPassword").value;

	document.getElementById("loginResult").innerHTML = "";

	var jsonPayload = '{"login" : "' + login + '", "password" : "' + password + '"}';
	var url = urlBase + '/Login.php';

	var xhr = new XMLHttpRequest();
	xhr.open("POST", url, false);
	xhr.setRequestHeader("Content-type", "application/json; charset=UTF-8");
	try
	{
		xhr.send(jsonPayload);

		var jsonObject = JSON.parse( xhr.responseText );

		userId = jsonObject.id;

		if( userId < 1 )
		{
			document.getElementById("loginResult").innerHTML = "User/Password combination incorrect";
			return;
		}

		firstName = jsonObject.firstName;
		lastName = jsonObject.lastName;

		// Clear UI fields
		// Took out for testing
		// document.getElementById("colorText").value = "";
		// document.getElementById("searchText").value = "";
		// document.getElementById("colorSearchResult").innerHTML = "";
		// document.getElementById("colorList").innerHTML = "";
		//
		// document.getElementById("loginName").value = "";
		// document.getElementById("loginPassword").value = "";


		// hideOrShow( "loggedInDiv", true);
		// hideOrShow( "accessUIDiv", true);

		hideOrShow("main-screen", false);
		hideOrShow("loginDiv", false);
		hideOrShow("sign_up_sheet", false);
		hideOrShow("main-contact-page", true);

	}
	catch(err)
	{
		document.getElementById("loginResult").innerHTML = err.message;
	}

}

function doLogout()
{
	userId = 0;
	firstName = "";
	lastName = "";

	hideOrShow( "loggedInDiv", false);
	hideOrShow( "accessUIDiv", false);
	hideOrShow( "loginDiv", true);
}

function hideOrShow( elementId, showState )
{
	var vis = "visible";
	var dis = "block";
	if( !showState )
	{
		vis = "hidden";
		dis = "none";
	}

	document.getElementById( elementId ).style.visibility = vis;
	document.getElementById( elementId ).style.display = dis;
}

function addColor()
{
	var newColor = document.getElementById("colorText").value;
	document.getElementById("colorAddResult").innerHTML = "";

	var jsonPayload = '{"color" : "' + newColor + '", "userId" : ' + userId + '}';
	var url = urlBase + '/AddColor.php';

	var xhr = new XMLHttpRequest();
	xhr.open("POST", url, true);
	xhr.setRequestHeader("Content-type", "application/json; charset=UTF-8");
	try
	{
		xhr.onreadystatechange = function()
		{
			if (this.readyState == 4 && this.status == 200)
			{
				document.getElementById("colorAddResult").innerHTML = "Color has been added";
			}
		};
		xhr.send(jsonPayload);
	}
	catch(err)
	{
		document.getElementById("colorAddResult").innerHTML = err.message;
	}

}

function searchColor()
{
	var srch = document.getElementById("searchText").value;
	document.getElementById("colorSearchResult").innerHTML = "";

	var colorList = document.getElementById("colorList");
	colorList.innerHTML = "";

	var jsonPayload = '{"search" : "' + srch + '"}';
	var url = urlBase + '/SearchColors.php';

	var xhr = new XMLHttpRequest();
	xhr.open("POST", url, true);
	xhr.setRequestHeader("Content-type", "application/json; charset=UTF-8");
	try
	{
		xhr.onreadystatechange = function()
		{
			if (this.readyState == 4 && this.status == 200)
			{
				hideOrShow( "colorList", true );

				document.getElementById("colorSearchResult").innerHTML = "Color(s) has been retrieved";
				var jsonObject = JSON.parse( xhr.responseText );

				var i;
				for( i=0; i<jsonObject.results.length; i++ )
				{
					var opt = document.createElement("option");
					opt.text = jsonObject.results[i];
					opt.value = "";
					colorList.options.add(opt);
				}
			}
		};
		xhr.send(jsonPayload);
	}
	catch(err)
	{
		document.getElementById("colorSearchResult").innerHTML = err.message;
	}

}
