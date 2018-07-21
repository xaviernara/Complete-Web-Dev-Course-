		function doAGuess(correctAnswer){

				var guess = Math.floor(Math.random()*11);
				var myNumberEntered = document.getElementById("inputText").value;

				if (guess  == myNumberEntered){
						return (true);
					}
					else{
						
						return (false);
					}
			}
			
			
			document.getElementById("guessButton").onclick = function(){

				var gotIt =false;
				var numberOfGuesses = 0;
				var myNumberEntered = document.getElementById("inputText").value;
				
					
				while(gotIt == false){
					//this creates a whole random number btwn 0-10
					var randomNumber = Math.floor(Math.random()*11);
				
					if (doAGuess(myNumberEntered)== true){
						gotIt=true;
						alert("correct It was "+ randomNumber + ". It took me " + numberOfGuesses+ " guesses");
					}
					else{
						numberOfGuesses++;
					}
				}
			

			}