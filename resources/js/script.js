const header = document.getElementById('main-header');
const menuLinks = document.querySelectorAll('nav ul li a');


window.addEventListener('scroll', () => {
    if (window.scrollY > window.innerHeight / 2) {
        header.classList.remove('bg-dark');
        header.classList.add('bg-light');
        header.classList.add('text-black');
        header.classList.remove('text-white');

        menuLinks.forEach(link => {
            link.classList.add('text-black');
            link.classList.remove('text-white');
        });
    } else {
        header.classList.add('bg-dark');
        header.classList.remove('bg-light');
        header.classList.remove('text-black');
        header.classList.add('text-white');

        menuLinks.forEach(link => {
            link.classList.remove('text-black');
            link.classList.add('text-white');
        });
    }
});

document.getElementById('menu-toggle').addEventListener('click', () =>
{
    const menu = document.getElementById('mobile-menu');
    menu.classList.toggle('hidden');
});
