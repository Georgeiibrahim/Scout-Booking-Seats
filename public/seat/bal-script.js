/* VARIABLES */
const allSeats = document.querySelector('#seating');
const seatCount = document.getElementById('seat-count');
const total = document.getElementById('movie-total');
const seatsElements = document.querySelectorAll('.row .seat');

/* FUNCTIONS */

// Update the number of seats selected and total price
function updateCount() {
  const selectedSeats = document.querySelectorAll('.row .seat.selected');
  const numberOfSeats = selectedSeats.length;

  // Update the seat count on the page
  seatCount.innerText = numberOfSeats;

  // Calculate the total price
  let totalPrice = numberOfSeats * 75;
  if (numberOfSeats === 5) {
    totalPrice = 4 * 75; // Set total price to the price of 4 seats if 5 seats are selected
  }

  // Update the total price on the page
  total.innerText = totalPrice;

  // Save selected seats to sessionStorage (only for the current session)
  const seatArr = [];
  seatsElements.forEach((seat) => {
    seatArr.push(seat.classList.contains('selected'));
  });
  sessionStorage.setItem('selectedSeats', JSON.stringify(seatArr)); // Use JSON.stringify to store the array
}

var btn = document.getElementById('btn');

btn.onclick = function () {
  const seat_ids = document.querySelector('#seat_ids');
  const seatArr = [];
  seatsElements.forEach((seat) => {
    if (seat.classList.contains('selected')) {
      seatArr.push(seat.querySelector('input').value);
    }
  });

  if (seatArr.length === 0) {
    let seatForm = document.getElementById("seat_form");
    seatForm.addEventListener("submit", (e) => {
      e.preventDefault();
    });
    document.querySelector('#error').classList.add('showed');
  } else {
    updateCount();
    let seatForm = document.getElementById("seat_form");
    seatForm.addEventListener("submit", (e) => {
      e.currentTarget.submit();
    });
    document.querySelector('#error').classList.remove('showed');
  }
  seat_ids.value = seatArr;
}

// Load selected seats from sessionStorage
function loadSelectedSeats() {
  const selectedSeatsStr = sessionStorage.getItem('selectedSeats');
  if (selectedSeatsStr) {
    const loadedSelectedSeatsArr = JSON.parse(selectedSeatsStr); // Parse the stored array
    loadedSelectedSeatsArr.forEach((state, index) => {
      if (state === true) {
        seatsElements[index].classList.add('selected');
      }
    });
  }
  updateCount(); // Update the count after loading seats
}

/* EVENT LISTENERS */

// Listen for clicks on seats and toggles selected class
allSeats.addEventListener('click', (e) => {
  if (e.target.classList.contains('seat')) {
    const selectedSeats = document.querySelectorAll('.row .seat.selected').length;

    // Prevent selecting more than 5 seats
    if (selectedSeats >= 5 && !e.target.classList.contains('selected')) {
      alert('You cannot select more than 5 seats.');
      return; // Exit the function without toggling the seat
    }

    e.target.classList.toggle('selected');
    updateCount();
  }
});

/* RUN ON PAGE LOAD */

// Clear sessionStorage on page load to avoid carrying over previous selections
sessionStorage.removeItem('selectedSeats');

// Load the selected seats from sessionStorage (if any)
loadSelectedSeats();
