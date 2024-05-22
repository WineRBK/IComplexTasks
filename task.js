const string = "1010101111011101000101011110110101111111";

function dangerousSituation(string) {
  //   const arr = string.split("");
  //   let situation = "NO";
  //   let lastIndex = arr[0];
  //   let count = 0;

  //   for (let i = 0; i < arr.length; i++) {
  //     if (arr[i] == lastIndex) {
  //       count++;
  //     } else {
  //       count = 1;
  //       lastIndex = arr[i];
  //     }
  //     if (count == 7) {
  //       return "YES";
  //     }
  //   }
  //   return "NO";

    zero = string.indexOf("0000000");
  one = string.indexOf("1111111");
  if (zero == -1 && one == -1) {
    return "NO";
  }
  return "YES";
}

console.log(dangerousSituation(string));
