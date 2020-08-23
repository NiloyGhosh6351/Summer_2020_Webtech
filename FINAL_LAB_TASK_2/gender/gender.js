
function validate()
{
	var a=document.gender.gender;
	for (i=0;i<a.length;i++) 
	{
		if (a[i].checked==true) 
		{
			return true;
		}
	}
	document.getElementById('gendermsg').innerHTML="Gender Required";
	return false;
}