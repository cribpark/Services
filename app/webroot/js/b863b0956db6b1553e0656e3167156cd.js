$(document).ready(function () {$("#submit-2025980050").bind("click", function (event) {$.ajax({beforeSend:function (XMLHttpRequest) {$("#sending").fadeIn();}, data:$("#submit-2025980050").closest("form").serialize(), dataType:"html", success:function (data, textStatus) {$("#sending").fadeOut();$("Success").html(data);}, type:"post", url:"\/cribservice\/"});
return false;});});