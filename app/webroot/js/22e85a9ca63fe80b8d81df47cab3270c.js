$(document).ready(function () {$("#submit-633121001").bind("click", function (event) {$.ajax({data:$("#submit-633121001").closest("form").serialize(), type:"post", url:"\/cribservice\/"});
return false;});});