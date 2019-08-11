function openModal() {

    
    let modal = document.querySelector('.modal-wrap');
    modal.classList.add('modal-open');
    
    let yes = document.querySelector('.yes');
    let no = document.querySelector('.no');
    yes.addEventListener('click', function() {
        modal.classList.remove('modal-open');
    })
    

    if ( modal.classList.contains('modal-open') ) {
        return false;
    } else {
        return true;
    }
    
    

}


    
