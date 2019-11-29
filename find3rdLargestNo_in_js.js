var arr = [1,2,55,37,-11,22,40,99,-100];
var temp = 0;
for(var i=0; i<arr.length-1; i++)
  {
    for(var j=0; j<arr.length-1; j++)
      {
        if(arr[i] > arr[j])
          {
            temp = arr[i];
            arr[i] = arr[j];
            arr[j] = temp;
            
          }

      }
  }
    console.log(arr[0]);
