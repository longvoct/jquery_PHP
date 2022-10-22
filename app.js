$(document).ready(function () {
  const button = $(".button");
  button.click(buttonClick);
  $(".link").click(directLinkClick);
});

function buttonClick() {
  $(".title").addClass("background-gradient");
  $(".title").css("margin-left", "200px");
}

function directLinkClick() {
  alert("Value: " + $(".link").attr("id"));
}
