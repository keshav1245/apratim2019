var teamsolo,teamsoloSelect,eventType;
var culTeam,culSolo,culTeamDiv,culSoloDiv;
var techTeam,techSolo,techTeamDiv,techSoloDiv;
var literaryTeam,literarySolo,literaryTeamDiv,literarySoloDiv;
var gamingTeam,gamingSolo,gamingTeamDiv,gamingSoloDiv;
var regisForm,regisFormSolo,name,leaderName,email,contact,college,regisButton,teamMem,teamDetails;
var nameS,emailS,contactS,regisButtonSolo,collegeS;
var eventName;

window.onload = function(){

	teamsolo = document.getElementById('category');
	teamsoloSelect = document.getElementById('categoryCul');
	eventType = document.getElementById('eventType');

	culTeamDiv = document.getElementById('culturalTeam');
	culSoloDiv = document.getElementById('culturalSolo');
	culTeam = document.getElementById('categoryCulTeam');
	culSolo = document.getElementById('categoryCulSolo');

	techTeamDiv = document.getElementById('techTeam');
	techSoloDiv = document.getElementById('techSolo');
	techTeam = document.getElementById('categoryTechTeam');
	techSolo = document.getElementById('categoryTechSolo');

	literaryTeamDiv = document.getElementById('literaryTeam');
	literarySoloDiv = document.getElementById('literarySolo');
	literaryTeam = document.getElementById('categoryLiteraryTeam');
	literarySolo = document.getElementById('categoryLiterarySolo');

	gamingTeamDiv = document.getElementById('gamingTeam');
	gamingSoloDiv = document.getElementById('gamingSolo');
	gamingTeam = document.getElementById('categoryGamingTeam');
	gamingSolo = document.getElementById('categoryGamingSolo');

	regisForm = document.getElementById('regisForm');
	regisFormSolo =document.getElementById("regisFormSolo");
	name = document.getElementById('name');
	email = document.getElementById("email");
	contact = document.getElementById("teamleadercontact");
	leaderName = document.getElementById("teamleader");
	college = document.getElementById("college");
	nameS = document.getElementById('nameS');
	emailS = document.getElementById("emailS");
	contactS = document.getElementById("contactS");
	collegeS = document.getElementById("collegeS");
	regisButton = document.getElementById("regisButton");
	regisButtonSolo = document.getElementById("regisButtonS");
	teamMem = document.getElementById("teamMem");
	teamDetails = document.getElementById('teamDetails');

	teamsolo.style.display = "none";
	culTeamDiv.style.display = "none";
	culSoloDiv.style.display = "none";
	techTeamDiv.style.display = "none";
	techSoloDiv.style.display = "none";
	literaryTeamDiv.style.display = "none";
	literarySoloDiv.style.display = "none";
	gamingTeamDiv.style.display = "none";
	gamingSoloDiv.style.display = "none";
	regisForm.style.display = "none";
	regisFormSolo.style.display = "none";

	eventType.addEventListener('change',event);
	teamsoloSelect.addEventListener('change',teamsolofunction);

	categoryCulTeam.addEventListener('change',formRegistration);
	categoryCulSolo.addEventListener('change',formRegistrationSolo);
	categoryTechTeam.addEventListener('change',formRegistration);
	categoryTechSolo.addEventListener('change',formRegistrationSolo);
	categoryLiteraryTeam.addEventListener('change',formRegistration);
	categoryLiterarySolo.addEventListener('change',formRegistrationSolo);
	categoryGamingTeam.addEventListener('change',formRegistration);
	categoryGamingSolo.addEventListener('change',formRegistrationSolo);

	regisButton.addEventListener('click',submitTeam);
	regisButtonSolo.addEventListener('click',submitSolo);

}

function closeAllDivs(){
	culTeamDiv.style.display = "none";
	techTeamDiv.style.display = "none";
	literaryTeamDiv.style.display = "none";
	gamingTeamDiv.style.display = "none";
	gamingSoloDiv.style.display = "none";	
	literarySoloDiv.style.display = "none";
	techSoloDiv.style.display = "none";
	culSoloDiv.style.display = "none";
	regisForm.style.display = "none";
	regisFormSolo.style.display = "none";
}

function formRegistration(){
	if(this.value == ""){
		// closeAllDivs();
		regisForm.style.display = "none";
	}else{

		eventName = this.value;
		regisForm.style.display = "block";
		alert(eventName);
	}
}

function formRegistrationSolo(){
	if(this.value == ""){
		// closeAllDivs();
		regisFormSolo.style.display = "none";
	}else{
		eventName = this.value;
		alert(eventName);
		regisFormSolo.style.display = "block";
	}
}

function teamsolofunction(){
	if(teamsoloSelect.value == ""){
		closeAllDivs();
	}else if(teamsoloSelect.value == "team"){
		if(eventType.value == "cultural"){
			closeAllDivs();
			culTeamDiv.style.display = "block";
		}else if(eventType.value == "tech"){
			closeAllDivs();
			techTeamDiv.style.display = "block";
		}else if(eventType.value == "literary"){
			closeAllDivs();
			literaryTeamDiv.style.display = "block";
		}else if(eventType.value == "gaming"){
			closeAllDivs();
			gamingTeamDiv.style.display = "block";
		}

	}else if(teamsoloSelect.value == "solo"){
		if(eventType.value == "cultural"){
			closeAllDivs();
			culSoloDiv.style.display = "block";
		}else if(eventType.value == "tech"){
			closeAllDivs();
			techSoloDiv.style.display = "block";
		}else if (eventType.value == "literary"){
			closeAllDivs();
			literarySoloDiv.style.display = "block";
		}else if (eventType.value == "gaming"){
			closeAllDivs();
			gamingSoloDiv.style.display = "block";
		}
	}
}


function event() {

	closeAllDivs();
	if(eventType.value == ""){
		teamsolo.style.display = 'none';
	}else if(eventType.value == "cultural"){
		teamsolo.style.display = 'block';
		teamsoloSelect.selectedIndex = "0";
	}else if(eventType.value == "tech"){
		teamsoloSelect.selectedIndex = "0";
		teamsolo.style.display = 'block';
	}else if(eventType.value == "gaming"){
		teamsoloSelect.selectedIndex = "0";
		teamsolo.style.display = 'block';
	}else if(eventType.value == "literary"){
		teamsolo.style.display = 'block';
		teamsoloSelect.selectedIndex = "0";
	}
	
}

function submitSolo(){
	if(nameS.value == "" || emailS.value == "" || contactS.value == "" || collegeS.value == "" || eventName == ""){
		alert("One or More Fields is/are Missing !");
	}else{
		$.ajax({
			url: "http://localhost/apratim2019/php/register.php",
			type: "POST",
			dataType: 'json',
			data: ({"category":"solo","name":nameS.value,"email":emailS.value,"contact":contactS.value,"college":collegeS.value,"event":eventName}),
			success: function(data){
				console.log(data);
				if(data.success){
					alert(data.success);
					window.location.href = 'index.html';	
				}else{
					alert(data.error);
				}
			}
		});		
	}
}

function submitTeam(){
	if(name.value == "" || email.value == "" || contact.value == "" || college.value == "" || eventName == "" || teamMem.value == "" || teamDetails.value == "" || leaderName.value == ""){
		alert("One or More Fields is/are Missing !");
	}else{
		$.ajax({
			url: "http://localhost/apratim2019/php/register.php",
			type: "POST",
			dataType: 'json',
			data: ({"category":"team","name":name.value,"email":email.value,"contact":contact.value,"college":college.value,"event":eventName,"teamMem":teamMem.value,"teamDetails":teamDetails.value,"leader":leaderName.value}),
			success: function(data){
				console.log(data);
				if(data.success){
					alert(data.success);
					window.location.href = 'index.html';	
				}else{
					alert(data.error);
				}
			}
		});
	}
}

