// Sticky navbar
window.addEventListener('scroll', function() {
    let checkScroll = window.scrollY;
    if (checkScroll > 0) {
        document.getElementById("container_navbar").classList.add('navSticky');
    } else {
        document.getElementById("container_navbar").classList.remove('navSticky');
    }
})
// End


// Login check
        // userLogin normal
    document.getElementsByClassName('destroyUserLogin')[0].classList.add('deactive');
    document.getElementsByClassName('destroyUserLogin')[1].classList.add('deactive');
    document.getElementsByClassName('userLogin')[0].classList.add('active');
    document.getElementsByClassName('userLogin')[1].classList.add('active');
        // Admin Login
    // document.getElementsByClassName('destroyAdminLogin')[0].classList.add('deactive');
    // document.getElementsByClassName('destroyAdminLogin')[1].classList.add('deactive');
    // document.getElementsByClassName('adminLogin')[0].classList.add('active');
    // document.getElementsByClassName('adminLogin')[1].classList.add('active');
// End


// Navigation responsive and action user
    document.querySelector('.sub-MenuMain').onclick = () => {
        document.querySelector('.verSubMenuMain').classList.toggle("activeFlex");
    }
    
    document.querySelector('.menu-btn').onclick = () => {
        document.querySelector('body').classList.add("deScroll");
        document.querySelector('.side-bar').classList.toggle("activeSidebar");
        document.querySelector('.overlay').classList.toggle("activeOverlay");
    }
    
    document.querySelector('.close-btn-sidebar').onclick = () => {
        document.querySelector('body').classList.remove("deScroll");
        document.querySelector('.side-bar').classList.remove("activeSidebar");
        document.querySelector('.overlay').classList.remove("activeOverlay");
    }
    
    document.querySelector('.sub-btn').onclick = () => {
        document.querySelector('.sub-btn i').classList.toggle('rotate');
        // document.querySelector('.sub-btn').slideToggle();
    }
    
// Dropdown sidebar
    $(document).ready(function() {
        $('.sub-btn').click(function() {
            $(this).next('.sub-menu').slideToggle();
        });
    });
// End
