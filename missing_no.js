var arr = [2,3,5,6,8,9,10];
var j = 1;
var missingNumbers = []
for(var i = 0; i<arr.length; i++)
{
    if(arr[i] != j) {
      missingNumbers.push(j)
      j++;
    }
    j++;

}
console.log(missingNumbers)