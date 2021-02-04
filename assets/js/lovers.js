var like = document.querySelectorAll('.card-button');

like.forEach(element => {
    element.onclick = function(){
        if (element.classList.contains('liked')) {
            element.classList.remove('liked');
            element.innerHTML = "<3";
            element.style.color = "white";
        }
        else {
            element.classList.add('liked');
            element.innerHTML = "Liké !";
            element.style.color = "#CE6879";
        }
    }
});