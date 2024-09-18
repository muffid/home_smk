/**
* Template Name: Multi - v4.9.1
* Template URL: https://bootstrapmade.com/multi-responsive-bootstrap-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/
(function() {
    "use strict";
  
    /**
     * Easy selector helper function
     */
    const select = (el, all = false) => {
      el = el.trim()
      if (all) {
        return [...document.querySelectorAll(el)]
      } else {
        return document.querySelector(el)
      }
    }
  
    /**
     * Easy event listener function
     */
    const on = (type, el, listener, all = false) => {
      let selectEl = select(el, all)
      if (selectEl) {
        if (all) {
          selectEl.forEach(e => e.addEventListener(type, listener))
        } else {
          selectEl.addEventListener(type, listener)
        }
      }
    }
  
    /**
     * Easy on scroll event listener 
     */
    const onscroll = (el, listener) => {
      el.addEventListener('scroll', listener)
    }
  
    
  
    /**
     * Back to top button
     */
    let backtotop = select('.back-to-top')
    if (backtotop) {
      const toggleBacktotop = () => {
        if (window.scrollY > 100) {
          backtotop.classList.add('active')
        } else {
          backtotop.classList.remove('active')
        }
      }
      window.addEventListener('load', toggleBacktotop)
      onscroll(document, toggleBacktotop)
    }
    
    var nav = document.querySelector('nav');
      window.addEventListener('scroll', function() {
        if (window.pageYOffset > 100) {
          // nav.classList.add('bg-dark');
          nav.classList.add('sticked');
        } else {
          // nav.classList.remove('bg-dark');
          nav.classList.remove('sticked');
        }
      });
  
      /**
     * Sticky header on scroll
     */
      //  const selectHeader = document.querySelector('.navbar');
      //  if (selectHeader) {
      //    document.addEventListener('scroll', () => {
      //      window.scrollY > 100 ? selectHeader.classList.add(' bg-dark') : selectHeader.classList.remove(' bg-dark');
      //    });
      //  }
     
       /**
        * Navbar links active state on scroll
        */
      //  let navbarlinks = document.querySelectorAll('#navbar .scrollto');
     
      //  function navbarlinksActive() {
      //    navbarlinks.forEach(navbarlink => {
     
      //      if (!navbarlink.hash) return;
     
      //      let section = document.querySelector(navbarlink.hash);
      //      if (!section) return;
     
      //      let position = window.scrollY;
      //      if (navbarlink.hash != '#header') position += 200;
     
      //      if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
      //        navbarlink.classList.add('active');
      //      } else {
      //        navbarlink.classList.remove('active');
      //      }
      //    })
      //  }
      //  window.addEventListener('load', navbarlinksActive);
      //  document.addEventListener('scroll', navbarlinksActive);
     
      //  /**
      //   * Function to scroll to an element with top ofset
      //   */
      //  function scrollto(el) {
      //    const selectHeader = document.querySelector('#nav');
      //    let offset = 0;
     
      //    if (selectHeader.classList.contains('sticked')) {
      //      offset = document.querySelector('#nav.sticked').offsetHeight;
      //    } else if (selectHeader.hasAttribute('')) {
      //      offset = selectHeader.offsetHeight - parseInt(selectHeader.getAttribute('data-scrollto-offset'));
      //    }
      //    window.scrollTo({
      //      top: document.querySelector(el).offsetTop - offset,
      //      behavior: 'smooth'
      //    });
      //  }data-scrollto-offset
     
    /**
     * Preloader
     */
    let preloader = select('#preloader');
    if (preloader) {
      window.addEventListener('load', () => {
        preloader.remove()
      });
    }
  
  
      /**
     * slider
     */
       new Swiper('.test', {
        speed: 600,
        loop: true,
        autoplay: {
          delay: 2000,
          disableOnInteraction: true,
        },
        slidesPerView: 'auto',
        pagination: {
          el: '.swiper-paginations',
          type: 'bullets',
          clickable: true
        },
        breakpoints: {
          320: {
            slidesPerView: 3,
            spaceBetween: 20
          },
    
          1200: {
            slidesPerView: 5,
            spaceBetween: 20
          }
        }
      });
  
       /**
     * Clients Slider
     */
    new Swiper('.clients-slider', {
      speed: 400,
      loop: true,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false
      },
      slidesPerView: 'auto',
      pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        clickable: true
      },
      breakpoints: {
        300: {
          slidesPerView: 3,
          spaceBetween: 10
        },
        // 480: {
        //   slidesPerView: 3,
        //   spaceBetween: 60
        // },
        640: {
          slidesPerView: 4,
          spaceBetween: 80
        },
        992: {
          slidesPerView: 6,
          spaceBetween: 80
        }
      }
    });
  
  
    /**
     * Porfolio isotope and filter
     */
     let portfolionIsotope = document.querySelector('.portfolio-isotope');
  
     if (portfolionIsotope) {
   
       let portfolioFilter = portfolionIsotope.getAttribute('data-portfolio-filter') ? portfolionIsotope.getAttribute('data-portfolio-filter') : '*';
       let portfolioLayout = portfolionIsotope.getAttribute('data-portfolio-layout') ? portfolionIsotope.getAttribute('data-portfolio-layout') : 'masonry';
       let portfolioSort = portfolionIsotope.getAttribute('data-portfolio-sort') ? portfolionIsotope.getAttribute('data-portfolio-sort') : 'original-order';
   
       window.addEventListener('load', () => {
         let portfolioIsotope = new Isotope(document.querySelector('.portfolio-container'), {
           itemSelector: '.portfolio-item',
           layoutMode: portfolioLayout,
           filter: portfolioFilter,
           sortBy: portfolioSort
         });
   
         let menuFilters = document.querySelectorAll('.portfolio-isotope .portfolio-flters li');
         menuFilters.forEach(function(el) {
           el.addEventListener('click', function() {
             document.querySelector('.portfolio-isotope .portfolio-flters .filter-active').classList.remove('filter-active');
             this.classList.add('filter-active');
             portfolioIsotope.arrange({
               filter: this.getAttribute('data-filter')
             });
             if (typeof aos_init === 'function') {
               aos_init();
             }
           }, false);
         });
   
       });
   
     }
  
  
    /**
     * Animation on scroll
     */
    window.addEventListener('load', () => {
      AOS.init({
        duration: 1000,
        easing: 'ease-in-out',
        once: true,
        mirror: false
      })
    });
  
    /**
     * Initiate Pure Counter 
     */
    new PureCounter();
  
  })()