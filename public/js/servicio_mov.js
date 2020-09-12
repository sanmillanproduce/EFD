
        const mainNavLinks = document.querySelectorAll("h4 ul li a");
        const mainSections = document.querySelectorAll("main section");

        let lastId;
        let cur = [];


        window.addEventListener("scroll", event => {

            const fromTop = window.scrollY;

            mainNavLinks.forEach(link => {
                const section = document.querySelector(link.hash);

                if (
                section.offsetTop <= fromTop &&
                section.offsetTop + section.offsetHeight > fromTop
                ) {
                link.classList.add("current");
                } else {
                link.classList.remove("current");
                }
            });
        });
