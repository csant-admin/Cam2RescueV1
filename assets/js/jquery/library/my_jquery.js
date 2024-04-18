$(document).ready(function(){

    // home(); 

    // function home() {

    //     $('#assets-css').attr('href', base_url + 'assets/css/home.css');
    // }

    

    // $(document).on('click', '.nav-link', function(e) {
    //     e.preventDefault();
    //     var page = $(this).attr('page-name');
    //     var csspath = base_url + 'assets/css/' + page + '.css';
    //     var jspath = base_url + 'assets/js/' + page + '.js';
    //     var pageUrl = base_url + 'modules/' + page + '/' + page + '.php';
    //     $('#assets-css').attr('href', csspath);
    //     $('#assets-js').attr('src', jspath);
    //     window.location.href= pageUrl;
    // });

    $(window).on("scroll", function(e) {
        e.preventDefault();
        if ($(window).scrollTop() > 0) {
            $("nav").removeClass('unscrolled');
            $("li a").removeClass('text-dark')
            $("nav").addClass('scrolled');
        } else {
            $("nav").removeClass('scrolled');
            $("li a").addClass('text-dark')
            $("nav").addClass('unscrolled');
            
        }
    });

    

    const menu = document.querySelector('#mobile-menu');
    const menuLinks = document.querySelector('.navbar__menu');

    menu.addEventListener('click', function() {
    menu.classList.toggle('is-active');
    menuLinks.classList.toggle('active');
    });


    const header = document.querySelector("header");
    const sectionOne = document.querySelector(".home-intro");

    const faders = document.querySelectorAll(".fade-in");
    const sliders = document.querySelectorAll(".slide-in");

    const sectionOneOptions = {
    rootMargin: "-200px 0px 0px 0px"
    };

    const sectionOneObserver = new IntersectionObserver(function(
    entries,
    sectionOneObserver
    ) {
    entries.forEach(entry => {
        if (!entry.isIntersecting) {
        header.classList.add("nav-scrolled");
        } else {
        header.classList.remove("nav-scrolled");
        }
    });
    },
    sectionOneOptions);

    sectionOneObserver.observe(sectionOne);

    const appearOptions = {
    threshold: 0,
    rootMargin: "0px 0px -250px 0px"
    };

    const appearOnScroll = new IntersectionObserver(function(
    entries,
    appearOnScroll
    ) {
    entries.forEach(entry => {
        if (!entry.isIntersecting) {
        return;
        } else {
        entry.target.classList.add("appear");
        appearOnScroll.unobserve(entry.target);
        }
    });
    },
    appearOptions);

    faders.forEach(fader => {
    appearOnScroll.observe(fader);
    });

    sliders.forEach(slider => {
    appearOnScroll.observe(slider);
    });

    document.querySelector('.navbar-toggler').addEventListener('click', function(){ 
        if(this.getAttribute('aria-expanded')) { 
            this.classList.toggle('bg-dark');
        };
    });
    
    const inpFile = document.getElementById("inpFile");
        const previewContainer = document.getElementById("imagePreview");
        const previewImage = previewContainer.querySelector(".image-preview__image");
        const previewDefaultText = previewContainer.querySelector(".image-preview__default-text");
        inpFile.addEventListener("change", function(){
            const file = this.files[0];
            if(file) {
            const reader = new FileReader();
            previewDefaultText.style.display = "none";
            previewImage.style.display = "block";
            
            reader.addEventListener("load", function() {
                console.log(this);
                previewImage.setAttribute("src", this.result);
            });
            
            reader.readAsDataURL(file);
            } else{
            previewDefaultText.style.display = "null";
            previewImage.style.display = "null";
            previewImage.setAttribute("src", "");
            }
        });
        var max = 500;
        $("#Info").keyup(function(e){
        $("#count").text("Characters remaining: " + (max - $(this).val().length));
        });
    
});
