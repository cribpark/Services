$("#submit-510777797").bind("click", function (event) {$.ajax({beforeSend:function (XMLHttpRequest) {$("#sending").fadeIn();}, data:$("#submit-510777797").closest("form").serialize(), success:function (data, textStatus) {$("#loggedin").fadeOut();}, type:"post", url:"\/cribservice\/admin"});
return false;});