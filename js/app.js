const miniCards = document.querySelectorAll('.mini-card');
const largeCards = document.querySelectorAll('.large-card');

miniCards.forEach(card => {
    card.addEventListener('click', ()=>{
        const index = card.getAttribute('data-index');

        //Hide all large cards
        largeCards.forEach(lc => {lc.style.display = 'none'});

        // Remove all active class
        miniCards.forEach(mc => {mc.classList.remove('active')})

        //Show the one that matches the index
        const selectedCard = document.querySelector('.large-card[data-index="'+index+'"]');

        if(selectedCard){
            selectedCard.style.display = 'block';
            // Optionally scroll into view
            selectedCard.scrollIntoView({behavior: 'smooth'})
        }

        // add active class
        card.classList.add('active'); 
    })
})