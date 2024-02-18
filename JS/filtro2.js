$(document).ready(function () {
  // AGREGANDO CLASE ACTIVE AL PRIMER ENLACE ====================
  $('.filtro .btn-filtro[categoria="todo"]').addClass("activado");
  // FILTRANDO PRODUCTOS  ============================================
  $(".btn-filtro").click(function () {
    var catProduct = $(this).attr("categoria");
    console.log(catProduct);
    // AGREGANDO CLASE ACTIVE AL ENLACE SELECCIONADO
    $(".btn-filtro").removeClass("activado");
    $(this).addClass("activado");
    // OCULTANDO PRODUCTOS =========================
    $(".casa").hide();
    // MOSTRANDO PRODUCTOS =========================
    $('.casa[categoria="' + catProduct + '"]').show();
  });
  // MOSTRANDO TODOS LOS PRODUCTOS =======================
  $('.casa[categoria="todo"]').click(function () {
    $(".casa").show();
  });
});
