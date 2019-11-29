var input = prompt("Enter a no to check armstron or not");
var  newInput = 0;
var sum = 0;

for(var i=0; i<input.length; i++)
  {
    newInput += Math.pow((input[i]),input.length);
  }
if (newInput == input) {
  alert('Armstrong no.');
} else {
  alert('Not a Armstrong no.');
}
