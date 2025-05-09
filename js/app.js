const miniCards = document.querySelectorAll('.mini-card');
const largeCards = document.querySelectorAll('.large-card');
const closeButton = document.querySelectorAll('.close-btn');

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
            selectedCard.style.display = 'flex';

            card.parentNode.insertBefore(selectedCard, card.nextSibling);

            // Optionally scroll into view
            selectedCard.scrollIntoView({behavior: 'smooth'})
        }

        // add active class
        card.classList.add('active'); 
    })
})


// add the close button
closeButton.forEach(btn =>{
    btn.addEventListener('click', ()=>{
        // console.log(btn);
        const parentEL = btn.parentNode;
        parentEL.style.display = 'none';
        console.log(parentEL)

         // Remove all active class
        miniCards.forEach(mc => {mc.classList.remove('active')})
    })
})