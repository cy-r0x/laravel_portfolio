const li = document.querySelectorAll('li');
li.forEach((element) => {
    element.addEventListener('click',()=>{
        console.log(element.innerText);
    })
});
 