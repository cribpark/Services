$(document).ready(function () {$("#submit-107412543").bind("click", function (event) {$.ajax({beforeSend:function (XMLHttpRequest) {$("#sending").fadeIn();}, data:$("#submit-107412543").closest("form").serialize(), dataType:"html", success:function (data, textStatus) {$("#sending").fadeOut();$("Success").html(data);}, type:"post", url:"\/cribservice\/"});
return false;});});