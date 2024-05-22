//start Navbar
  //start top navbar
  function dropbtn(e){
    e.target.parentElement.nextElementSibling.classList.toggle('show');
  }
  //end top navbar
  //end Navbar

$(document).ready(function(){
    //start Navbar
    //start left sidebar
    $('.sidebarlinks').click(function(){
      $(".sidebarlinks").removeClass('currents');
      $(this).addClass('currents');

    //end left sidebar
    //end Navbar
    })
})