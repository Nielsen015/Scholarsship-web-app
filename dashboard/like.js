var shape = document.querySelector('.heart');

shape.addEventListener('click', function(){
    this.classList.toggle('active');
    console.log(1111, this)
 });