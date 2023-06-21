const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

let monthString = "";
for (let i = 0; i < months.length; i++) {
  monthString += months[i] + " ";
}

document.write(monthString);
