$(document).ready(function () {
  $(".globalMessagePopup").click(function () {
    $(".globalMessagePopup").hide();
  });

  $("input[name=file]").change(function () {
    var valueFIle = $("input[name=file]").val();
    if (valueFIle != "") {
      $(".file label").addClass("fileOk");
    }
  });

  $(".info").click(function () {
    //alert("ok");
    $("body").prepend(
      "<div class='globalMessagePopup'><div class='messagePopup'><span><strong>X</strong></span>Bonjour à toutes et à tous,<br><br>pour l’occasion du mariage <br>de Ana et Mike,vous pouvez trouver via cette page un Livre d’or numérique qui une fois constitué leur sera imprimé sous forme de book.<br><br>Vous devez à chacun de vos messages y lier une photo en référence avec nos tout jeunes&nbsp;mariés.<br>Une même personne peut poster plusieurs messages.<br><br>N’hésitez pas à être créatif et surtout à propager ce lien à toutes les connaissances du couple.<br><br>Ce formulaire sera actif jusqu’au: 31&nbsp;août&nbsp;2019.<br><br>Merci d’avance et à très vite…<br><br>Prévisualiser le book: <a href='/previsualisation.php' target='_blank'>ici</a></div></div>"
    );

    $(".globalMessagePopup").click(function () {
      $(".globalMessagePopup").hide();
    });
  });
});
