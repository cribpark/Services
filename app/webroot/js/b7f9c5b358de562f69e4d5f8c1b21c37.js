$(document).ready(function () {$("#submit-267450052").bind("click", function (event) {$.ajax({beforeSend:function (XMLHttpRequest) {$("#sending").fadeIn();}, data:$("#submit-267450052").closest("form").serialize(), dataType:"html", success:function (data, textStatus) {$("#sending").fadeOut();$("#success").html(data);}, type:"post", url:"\/cribservice\/"});
return false;});});