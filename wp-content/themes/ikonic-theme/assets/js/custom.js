jQuery(document).on('ready', function() {
    jQuery('.variable').slick({
        dots: false,
        infinite: false,
        arrows:false,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 4,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            }, {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            }, {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
    jQuery(document).ready(function() {
        jQuery("#btnHamburger").click(function() {
            jQuery(".main-nav").toggleClass("open-nav");
            jQuery('body').toggleClass("nav-active");
            jQuery("#btnHamburger").toggleClass("open");
        });

    });

    
});


document.addEventListener('DOMContentLoaded', function () {
    const menuItems = document.querySelectorAll('.navbar > li'); // Select top-level list items

    menuItems.forEach(menuItem => {
        menuItem.addEventListener('click', function (e) {
            e.preventDefault(); // Prevent default link behavior

            // Toggle the 'active' class on the clicked menu item
            const isActive = this.classList.contains('active');
            menuItems.forEach(item => item.classList.remove('active')); // Close other menus
            
            if (!isActive) {
                this.classList.add('active'); // Open the clicked menu
            }
        });
    });

    // Close menus when clicking outside
    document.addEventListener('click', function (e) {
        if (!e.target.closest('.navbar')) {
            menuItems.forEach(item => item.classList.remove('active'));
        }
    });
});


function myFunction() {
    var x = document.getElementById("myTopnav ");
    if (x.className === "topnav ") {
        x.className += " responsive ";
    } else {
        x.className = "topnav ";
    }
}