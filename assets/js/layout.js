$(document).ready(function () {

  $(".sidebar-profile-toggle").click(function () {
    $(".chat-profile-sidebar").toggleClass("show");
    $(".scrollC").toggleClass("scroll-container main-menu-content");
  });
  $(".chat-profile-header .close-icon").click(function () {
    $(".chat-profile-sidebar").toggleClass("show");
    $(".scrollC").toggleClass("scroll-container main-menu-content");
  });

  if (
    window.matchMedia("(min-width: 768px) and (max-width: 1199.98px)").matches
  ) {
    $(".main-menu.menu-fixed").toggleClass("expanded");
  }

  //add people
  $("#addPeople").click(function() {
    $(this)
      .closest(".add-invites")
      .find("button:not(:last-child)")
      .toggleClass("d-none d-block");
    let add_btn = $(this).find(".feather");
    // add_btn.css("transform", "rotate(0deg)");

    if (add_btn.hasClass("rotate") == false) {
      add_btn.addClass("rotate");
    } else {
      add_btn.removeClass("rotate");
    }
  });

  $("#chkVendor, #chkClient").click(function() {
    if ($("#chkVendor:checked").length > 0) {
      let v_name = $(this)
        .closest(".modal-body")
        .find(".vendor_name input")
        .val();
      let x = $(this)
        .closest(".modal-body")
        .find(".vendor_org")
        .val(v_name);
    }
    if ($("#chkClient:checked").length > 0) {
      let d_name = $(this)
        .closest(".modal-body")
        .find(".client_name input")
        .val();
      let x = $(this)
        .closest(".modal-body")
        .find(".client_org")
        .val(d_name);
    }
  });
});
