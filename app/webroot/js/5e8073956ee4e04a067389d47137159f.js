$("#submit-1131556115").bind("click", function (event) {$.ajax({beforeSend:function (XMLHttpRequest) {$("#sending").fadeIn();}, data:$("#submit-1131556115").closest("form").serialize(), success:function (data, textStatus) {$("#loggedin").fadeOut();}, type:"post", url:"\/cribservice\/admin\/users"});
return false;});