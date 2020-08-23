function validate()
{
	var a=document.bd.bd;
	if (a.value == "Select Blood Group") 
	{
		document.getElementById('bdmsg').innerHTML="Select A Blood Group";
		return false;
	}
	else
	{
		return true;
	}
}