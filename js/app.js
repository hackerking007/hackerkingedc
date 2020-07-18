//eventListeners is usermade (my) function it is not pre defined
eventListeners();

function eventListeners() {
    const ui = new UI()
    //preloader
    window.addEventListener('load', function () {
        ui.hidePreloader();
    })   
    
}

//constructor function
function UI() {

}
//hide preloader
UI.prototype.hidePreloader = function () {
    document.querySelector('.preloader').style.display = "none";
}




















































