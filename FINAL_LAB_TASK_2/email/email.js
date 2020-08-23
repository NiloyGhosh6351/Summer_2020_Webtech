
function validate()
{
	var email=document.getElementById('email').value;
	if (email=="") 
	{
		document.getElementById('emailmsg').innerHTML="Email can not be empty";
		return false;
	}	
}

function remover()
{
	document.getElementById('emailmsg').innerHTML="";
}