
let testBtn = document.querySelector('#testBtn');
let allSpan = document.querySelectorAll("span");



testBtn.addEventListener('click',()=>{

    let theme = getComputedStyle(document.documentElement).colorScheme;

    if(theme.includes('dark')){

      document.documentElement.style.colorScheme = 'light';
      testBtn.innerText = 'i need to go to sleep';
      allSpan.forEach(p =>{
        p.style.color = 'red';
      });


    }else{

       document.documentElement.style.colorScheme = 'dark';
        testBtn.innerText = 'let there be light';
         allSpan.forEach(p =>{
        p.style.color = 'white';

      });
    }

});






