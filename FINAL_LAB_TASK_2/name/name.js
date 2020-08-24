
function validate()
{
	var username=document.getElementById('username').value;
	if (username=="") 
	{
		document.getElementById('usernamemsg').innerHTML="Name can not be empty";
		return false;
	}	
	else
	{
		if((username[0]>='a' && username[0]<='z') || (username[0]>='A' && username[0]<='Z'))
		{
			if (username.split("").length>=2) 
			{
				var a=0;
				var b=username.length;
				while(a<b)
				{
					if(!((username[a]>='a' && username[a]<='z') ||(username[a]>='A' && username[a]<='Z') || username[a]=='.' || username[a]=='-' || username[a]==''))
					{
						document.getElementById('usernamemsg').innerHTML="Can only contain A-Z or a-z or . or -";
						return false;
					}
					a=a+1;
				}
				return true;
			}
			else
			{
				document.getElementById('usernamemsg').innerHTML="Contain at least two words";
				return false;
			}
		}
		else
		{
			document.getElementById('usernamemsg').innerHTML="Must start with a letter";
			return false;
		}
	}
	return false;
}

function remover()
{
	document.getElementById('usernamemsg').innerHTML="";
}