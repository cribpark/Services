$(document).ready(function () {$("#submit-990286939").bind("click", function (event) {$.ajax({beforeSend:function (XMLHttpRequest) {$("#sending").fadeIn();}, data:$("#submit-990286939").closest("form").serialize(), dataType:"html", success:function (data, textStatus) {$("#sending").fadeOut();$("Success").html(data);}, type:"post", url:"\/cribservice\/"});
return false;});});