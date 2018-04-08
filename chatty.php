<!DOCTYPE html>
<html>
<head>
<title>Chatbot</title>
<style>
body { 
	color: #421;font-weight: bold; font-size: 18px; background: #EE4; 
	background-image: url("wow.jpg"); background-size:cover; margin-top:200px; 
}
span { 
	color: #711; 
} 
::-webkit-input-placeholder { 
	color: #000;
}
#main { 
	  margin-left: 1200px; margin-top:250px;
	border: 0px solid #421; padding-left: 40px; font-size:40px; 
}
#main div { 
	margin: 10px; 
} 
#input { 
	border-radius: 10px; background: 	#D3D3D3; padding: 15px; border: 3px solid #421; 
}
</style>
</head>
<body>
<div id="main">
	<div>You: <span id="user"></span></div>
	<div>Helpi: <span id="chatbot"></span></div>
	<div><input id="input" type="text" placeholder="Share with me" autocomplete="off"/></div>
</div>
<script type="text/javascript">
var trigger = [
	["hi","hey","hola","hello"], 
	["how are you", "how is life", "how are things"],
	["what are you doing", "what is going on","Whats Up"],
	["how old are you"],
	["who are you", "are you human", "are you bot", "are you human or bot","what are you"],
	["who created you", "who made you"],
	["your name please",  "your name", "may i know your name", "what is your name"],
	["i love you"],
	["good"],
	["I am sad", "I am bored", "I am tired"],
	["help me", "tell me something"],
	["ah", "yes", "ok", "okay", "nice", "thanks", "thank you"],
	["bye", "good bye", "goodbye", "see you later"]
];
var reply = [
	["Hi","Hey","Hello"], 
	["Fine", "Pretty well", "Fantastic","Fine. What about you?", "Pretty well. What about you?", "Fantastic.What about you?"],
	["Nothing much", "About to go to sleep", "You tell me?", "I don't know actually"],
	["Just 1 day old but I can help you"],
	["I am just a bot-Helpi", "I am Helpi-a bot"],
	["Haha..My friend made me", "I don't know.Maybe God?"],
	["I am Helpi", "My name is Helpi"],
	["I love you too", "Aww..Me too"],
	[ "Glad to hear it"],
	["Why?", "Why? You shouldn't!", "Try watching TV"],
	["Calm Down and Tell me", "What Happened?"],
	["You are welcome",":D"],
	["Bye", "Goodbye", "See you later"]
];
var alternative = ["Sorry...Didn't get you", "Eh...Didn't get you?","You can Talk to the Counceller"];
document.querySelector("#input").addEventListener("keypress", function(e){
	var key = e.which || e.keyCode;
	if(key === 13){ //Enter button
		var input = document.getElementById("input").value;
		document.getElementById("user").innerHTML = input;
		output(input);
	}
});
function output(input){
	try{
		var product = input + "=" + eval(input);
	} catch(e){
		var text = (input.toLowerCase()).replace(/[^\w\s\d]/gi, ""); //remove all chars except words, space and 
		text = text.replace(/ a /g, " ").replace(/i feel /g, "").replace(/whats/g, "what is").replace(/please /g, "").replace(/ please/g, "");
		if(compare(trigger, reply, text)){
			var product = compare(trigger, reply, text);
		} else {
			var product = alternative[Math.floor(Math.random()*alternative.length)];
		}
	}
	document.getElementById("chatbot").innerHTML = product;
	speak(product);
	document.getElementById("input").value = ""; //clear input value
}
function compare(arr, array, string){
	var item;
	for(var x=0; x<arr.length; x++){
		for(var y=0; y<array.length; y++){
			if(arr[x][y] == string){
				items = array[x];
				item =  items[Math.floor(Math.random()*items.length)];
			}
		}
	}
	return item;
}
function speak(string){
	var utterance = new SpeechSynthesisUtterance();
	utterance.voice = speechSynthesis.getVoices().filter(function(voice){return voice.name == "Agnes";})[0];
	utterance.text = string;
	utterance.lang = "en-US";
	utterance.volume = 1; //0-1 interval
	utterance.rate = 1;
	utterance.pitch = 2; //0-2 interval
	speechSynthesis.speak(utterance);
}
</script>
</body>
</html>