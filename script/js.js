
let add_btn = document.querySelector('#add_btn')
let openModal = document.querySelector('#add_modal')
let background_blur = document.querySelector('#background_blur')
let closeModal = document.querySelector('#closeModal')
let add_btn_submit = document.querySelector('#add_btn_submit')
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

// Sweet alert

function SweetSuccess(){
    Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: 'Le jeu a bien été ajouté',
        showConfirmButton: false,
        timer: 2500,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }    
    })  
}

function SweetError(){
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Something went wrong!',
        position: 'top-end',
        showConfirmButton: false,
        timer: 2500,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }  
      })
}