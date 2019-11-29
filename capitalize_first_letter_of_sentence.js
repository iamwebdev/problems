var str = 'asdfsdaf'.split(' ');
// console.log(str[0][0]);
var string = '';
for(var i=0; i<str.length; i++)
{
  var first = str[i][0].toUpperCase();
  string += first + str[i].substring(1, str[i].length) + ' ';
}
console.log(string.trim());   
 