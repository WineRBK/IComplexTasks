const n = 4;

function findPositiveCount(n) {
  if (n == 0) {
    return 0;
  }

  const reg = "00";
  const extent = 2 ** n;
  let count = 0;
  for (i = 0; i < extent; i++) {
    let binary = i.toString(2);
    if (binary.length < n) {
      binary = binary.padStart(n, "0");
    }
    if (binary.indexOf(reg) == -1) {
      console.log(binary);
      count++;
    }
  }

  return count;
}

console.log(findPositiveCount(n));

