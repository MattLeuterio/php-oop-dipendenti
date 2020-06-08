console.log('ok');
console.log($);

$(document).ready(function () {
    
    // Refs Home
    const activeLink = $('.active-link');
    const computers = $('#computers');
    const software = $('#software');

    // Refs dashboard
    const dashLink = $('.dash-sidebar ul li');
    const admin = $('#administrative');
    const retail = $('#retail');

    activeLink.click( function () {
        togglePanel($(this), computers, software, 'computers', 'software');
    });

    dashLink.click( function() {
        togglePanel($(this), admin, retail, 'admin', 'retail');
    });

});

// FUNCTIONS

function togglePanel(refThis, panel1, panel2, class1, class2) {
     
    if(refThis.hasClass(class1)) {
            
        if(!panel1.hasClass('active')) {

            panel1.addClass('active');
            panel2.removeClass('active');
            
            panel1.toggle();
            panel2.toggle()
        }
        

    } else if (refThis.hasClass(class2)) {
        
        if(!panel2.hasClass('active')) {

            panel1.removeClass('active');
            panel2.addClass('active');
            panel2.toggle();
            panel1.toggle()
        }
    
    }
}

