const mainImg = document.getElementById('mainImg');
const imgs = document.querySelectorAll('#menuImg img');

for (const img of imgs) {
    img.addEventListener('click', function(){
        mainImg.innerHTML = '<img src="' + img.currentSrc + '">';
    });
}