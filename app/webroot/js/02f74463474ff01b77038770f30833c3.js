$(document).ready(function () {$("#submit-231039802").bind("click", function (event) {$.ajax({beforeSend:function (XMLHttpRequest) {$("#sending").fadeIn();}, data:$("#submit-231039802").closest("form").serialize(), dataType:"html", success:function (data, textStatus) {$("#sending").fadeOut();$("Success").html(data);}, type:"post", url:"\/cribservice\/"});
return false;});});