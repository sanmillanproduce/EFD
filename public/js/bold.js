const options = {
 threshold: 0.65
};
const bold = [
    "font-weight: bold;"
];
var sections = document.querySelectorAll("section");
let observer =  new IntersectionObserver (navCheck, options);
function navCheck (entries) {
    entries.forEach (entry => {
        const className = entry.target.id;
        const arri = 'ARRI';
        const bm = 'BLACK MAGIC';
        const cnon = 'CANON';
        const gp = 'GOPRO';
        const ins = 'INSTA';
        const pn = 'PANASONIC';
        const pt = 'PHANTOM';
        const rd = 'RED';
        const sn = 'SONY';
        const activeAnchor = document.querySelector(`[data-page="${className}"]`);

        const gradienetIndex = entry.target.getAttribute('data-index');
        console.log(gradienetIndex);
        if ( className == arri ) {
            $(`._Arri`).addClass("boldeado");
            const newsub = `${className}`;
        }else {
            $(`._Arri`).removeClass("boldeado");
        }
        if ( className == bm ) {
            $(`._BLACK_MAGIC`).addClass("boldeado");
            const newsub = `${className}`;
        }else {
            $(`._BLACK_MAGIC`).removeClass("boldeado");
        }
        if ( className == cnon ) {
            $(`._Canon`).addClass("boldeado");
            const newsub = `${className}`;
        }else {
            $(`._Canon`).removeClass("boldeado");
        }
        if ( className == gp ) {
            $(`._GoPro`).addClass("boldeado");
            const newsub = `${className}`;
        }else {
            $(`._GoPro`).removeClass("boldeado");
        }
        if ( className == ins ) {
            $(`._Insta`).addClass("boldeado");
            const newsub = `${className}`;
        }else {
            $(`._Insta`).removeClass("boldeado");
        }
        if ( className == pn ) {
            $(`._Panasonic`).addClass("boldeado");
            const newsub = `${className}`;
        }else {
            $(`._Panasonic`).removeClass("boldeado");
        }
        if ( className == pt ) {
            $(`._Phantom`).addClass("boldeado");
            const newsub = `${className}`;
        }else {
            $(`._Phantom`).removeClass("boldeado");
        }
        if ( className == rd ) {
            $(`._Red`).addClass("boldeado");
            const newsub = `${className}`;
        }else {
            $(`._Red`).removeClass("boldeado");
        }
        if ( className == sn ) {
            $(`._Sony`).addClass("boldeado");
            const newsub = `${className}`;
        }else {
            $(`._Sony`).removeClass("boldeado");
        }
    });
}
sections.forEach(section => {
    observer.observe(section);
});
