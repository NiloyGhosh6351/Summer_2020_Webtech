
function validate()
{
	var day=document.getElementById('day').value;
	var month=document.getElementById('month').value;
	var year=document.getElementById('year').value;
	if (day!="" && month!="" && year!="") 
	{
		if(day>0 && day<32 && month>0 && month<13 && year>1899 && year<2017)
		{
			return true;
		}
		else
		{
			document.getElementById('dateofbirthmsg').innerHTML="day range 0 to 31 and month range 1 to 12 and year range 1900 to 2016";
			return false;
		}
	}
	else
	{
		document.getElementById('dateofbirthmsg').innerHTML="Date can not be empty";
		return false;
	}
	
}
function remover()
{
	document.getElementById('dateofbirthmsg').innerHTML="";
}
