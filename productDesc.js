function increment() {
    var input = document.getElementById('quantity');
    var decrementBtn = document.getElementById('decrement-btn');
    var incrementBtn = document.getElementById('increment-btn');
    var value = parseInt(input.value);
    if (value < parseInt(input.getAttribute('max'))) {
      input.value = value + 1;
      decrementBtn.disabled = false;
    }
    if (value === parseInt(input.getAttribute('max')) - 1) {
      incrementBtn.disabled = true;
    }
  }
  
  function decrement() {
    var input = document.getElementById('quantity');
    var incrementBtn = document.getElementById('increment-btn');
    var decrementBtn = document.getElementById('decrement-btn');
    var value = parseInt(input.value);
    if (value > parseInt(input.getAttribute('min'))) {
      input.value = value - 1;
      incrementBtn.disabled = false;
    }
    if (value === parseInt(input.getAttribute('min')) + 1) {
      decrementBtn.disabled = true;
    }
  }
  function updateTotalPrice() {
    // Get the multiplier value from the input element
    const multiplier = parseInt(document.getElementById("quantity").value);
    const priceElement = document.getElementById('initialPrice');
    const priceText = priceElement.textContent;
    const priceValue = parseInt(priceText.replace(/\D/g, ''));
  
    // Calculate the new total price by multiplying it with the multiplier value
    const newTotalPrice = multiplier * priceValue;
  
    // Set the new total price as the text content of the element, including the strong tag
    document.getElementById("total-price").innerHTML = `<strong>Rp${newTotalPrice.toLocaleString()}</strong>`;
  }
  
  



  
  