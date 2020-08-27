$(document).ready(function () {
  var url_ctrl = site_url + "request/laporan/";

  $(".date").datetimepicker({
    // startDate:'1980-01-01',
    scrollInput: false,
    format: "Y-m-d",
    changeMonth: true,
    changeYear: true,
    timepicker: false,
  });

  $(document).on("click", "#btn_cari", function (e) {
    search();
  });

  function search() {
    var start_date = $("#start_date").val();
    var end_date = $("#end_date").val();
    var kategori = $("#kategori option:selected").val();
    if (kategori == "") {
        swal("Perhatian", "Pilih kategori terlebih dahulu<br>", "warning");
        return false;
      }

    $.ajax({
      method: "POST",
      cache: false,
      url: url_ctrl + "data",
      data: {
        start_date: start_date,
        end_date: end_date,
        kategori: kategori
      },
    })
      .done(function (view) {
        $("#result").html(view);
      })
      .fail(function (res) {
        alert("Error Response !");
        console.log("responseText", res.responseText);
      });
  }

  $(document).on("click", "#btn_download", function (i) {
    i.preventDefault();
    var dari = $("#start_date").val();
    var sampai = $("#end_date").val();
    var kategori = $("#kategori option:selected").val();
    if (kategori == "") {
        swal("Perhatian", "Pilih kategori terlebih dahulu<br>", "warning");
        return false;
      }

    window.open(url_ctrl + "download/" + dari + "/" + sampai + "/"+ kategori, "_blank");
  });
});
