window.onscroll = function() {
    var header = document.querySelector("#cs-navigation .cs-container");
    if (window.scrollY > 100) {
      header.style.position = "fixed";
      header.style.top = "0";
    } else {
      header.style.position = "absolute";
      header.style.top = "100px";
    }
  };

    var CSbody = document.querySelector("body");
    const CSnavbarMenu = document.querySelector("#cs-navigation");
    const CShamburgerMenu = document.querySelector("#cs-navigation .cs-toggle");

    CShamburgerMenu.addEventListener('click', function() {
        CShamburgerMenu.classList.toggle("cs-active");
        CSnavbarMenu.classList.toggle("cs-active");
        CSbody.classList.toggle("cs-open");
        
        const navigation = document.getElementById('navigation');

        if (navigation.style.visibility === ''){
            navigation.style.visibility = 'hidden';
        }

        if (navigation.style.visibility === 'hidden'){
            navigation.style.visibility = 'visible';
        }
        else {
            navigation.style.visibility = 'hidden';
        }

    });

    window.addEventListener('resize', function() {
        const navigation = document.getElementById('navigation');
        if (window.innerWidth > 1025) {
            navigation.style.visibility = 'visible';
        } else {
            navigation.style.visibility = '';
        }
    });
