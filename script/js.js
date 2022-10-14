    let add_btn = document.querySelector('#add_btn')
    let openModal = document.querySelector('#add_modal')
    let background_blur = document.querySelector('#background_blur')
    let closeModal = document.querySelector('#closeModal')
    let body = document.body
    

    add_btn.addEventListener("click", function () {
        openModal.classList.add('active');
        background_blur.classList.add('active');
        body.style = 'overflow : hidden'
    })

    background_blur.addEventListener("click", function () {
        openModal.classList.remove('active');
        background_blur.classList.remove('active');
        body.style = 'overflow : initial'
    })

    closeModal.addEventListener('click', function () {
        openModal.classList.remove('active');
        background_blur.classList.remove('active');
        body.style = 'overflow : initial'
    })