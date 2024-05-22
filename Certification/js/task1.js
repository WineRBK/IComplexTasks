const arr = [1, 1, 1, 1, 1, 2, 2, 3, 4, 3, 5];

function largestCount(arr) {
  ratings = [
    { rating: 1, count: 0 },
    { rating: 2, count: 0 },
    { rating: 3, count: 0 },
    { rating: 4, count: 0 },
    { rating: 5, count: 0 },
  ];

  let maxIndex = 0;

  for (rating of ratings) {
    for (item of arr) {
      if (rating.rating == item) {
        rating.count++;
      }
    }
  }

  let sum = 0;
  ratings.forEach((item, index) => {
    if (item.count >= ratings[maxIndex].count) {
      maxIndex = index;
    }
    sum = sum + item.count;
  });

  if (ratings[maxIndex].count > (sum - ratings[maxIndex].count) / 2) {
    switch (maxIndex) {
      case 0:
        return "red";
      case 1:
        return "orange";

      case 2:
        return "yellow";

      case 3:
        return "olive";

      case 4:
        return "green";
    }
  }

  return "Нет цвета";
}

console.log(largestCount(arr));
