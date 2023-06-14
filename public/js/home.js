const carousel = document.getElementById('carousel');
        let isDown = false;
        let startX;
        let scrollLeft;

        carousel.addEventListener('mousedown', (e) => {
            isDown = true;
            startX = e.pageX - carousel.offsetLeft;
            scrollLeft = carousel.scrollLeft;
        });

        carousel.addEventListener('mouseleave', () => {
            isDown = false;
        });

        carousel.addEventListener('mouseup', () => {
            isDown = false;
        });

        carousel.addEventListener('mousemove', (e) => {
            if (!isDown) return;
            e.preventDefault();
            const x = e.pageX - carousel.offsetLeft;
            const walk = (x - startX) * 2;
            carousel.scrollLeft = scrollLeft - walk;
        });

const carousel1 = document.getElementById('carousel1');
    let isDown1 = false;
    let startX1;
    let scrollLeft1;

    carousel1.addEventListener('mousedown', (e) => {
        isDown1 = true;
        startX1 = e.pageX - carousel1.offsetLeft;
        scrollLeft1 = carousel1.scrollLeft;
    });

    carousel1.addEventListener('mouseleave', () => {
        isDown1 = false;
    });

    carousel1.addEventListener('mouseup', () => {
        isDown1 = false;
    });

    carousel1.addEventListener('mousemove', (e) => {
        if (!isDown1) return;
        e.preventDefault();
        const x1 = e.pageX - carousel1.offsetLeft;
        const walk1 = (x1 - startX1) * 2;
        carousel1.scrollLeft = scrollLeft1 - walk1;
    });
