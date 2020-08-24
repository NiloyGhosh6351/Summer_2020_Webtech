
function validate()
{
	if (document.getElementById('number').value!="" && document.getElementById('file').value!="") 
	{
		if (parseInt(number,10)>0) 
		{
			return true;
		}
		else
		{
			document.getElementById('filemsg').innerHTML="Enter positive number";
			return false;
		}
	}
	else
	{
		document.getElementById('filemsg').innerHTML="File and user id required";
		return false;
	}
}
