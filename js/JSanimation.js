// Анимация фона частиц
VANTA.NET({
    el: "#intro",
    mouseControls: true,
    touchControls: true,
    gyroControls: false,
    minHeight: 800.00,
    minWidth: 220.00,
    scale: 1.00,
    scaleMobile: 1.00,
    color: 0x756969,
    backgroundColor: 0x17141e,
    points: 11.00,
    maxDistance: 22.00,
    spacing: 16.00
})

//Код от феди
window.addEventListener("scroll", function()
{
    let scrollPos = this.window.scrollY;
    if(scrollPos > 199)
    {
        header.classList.add('red');
    } 
    else
    {
        header.classList.remove('red');  
    }
    console.log(scrollPos);
});
