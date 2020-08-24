
function validate()
{
	if(document.getElementById('degree1').checked || document.getElementById('degree2').checked || document.getElementById('degree3').checked)
	{
		return true;
	}
	if(document.getElementById('degree1').checked=="" || document.getElementById('degree2').checked=="" || document.getElementById('degree3').checked=="")
	{
		document.getElementById('degreemsg').innerHTML="Choose atleast one degree";
		return false;
	}
	
}