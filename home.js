function showCardGroup(groupID, buttonID) {
    var cardGroups = document.querySelectorAll('.card-group');
    var buttons = document.querySelectorAll('.btn');
  
    for (var i = 0; i < cardGroups.length; i++) {
        if (cardGroups[i].id === groupID) {
            cardGroups[i].classList.remove('d-none');
        } else {
            cardGroups[i].classList.add('d-none');
        }
    }

    for (var i = 0; i < buttons.length; i++) {
        if (buttons[i].id === buttonID) {
            buttons[i].classList.add('active');
        } else {
            buttons[i].classList.remove('active');
        }
    }
}
