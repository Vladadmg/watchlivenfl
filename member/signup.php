<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Sign-up</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
				<meta name="description" content="" />
				<meta name="abstract" content="" />
				<meta name="keywords" content="" />
				<meta name="ROBOTS" content="NOODP" />
				<meta name="robots" content="index,follow" />
				<meta name="revisit-after" content="1 days" />
				<meta http-equiv="Expires" content="0" />
				<meta http-equiv="content-language" content="en" />
				<meta http-equiv="imagetoolbar" content="no" />
				<meta name="ICBM" content="59.17, 18.3" />
				<meta name="DC.title" content="Live NHL" />
				<meta name="geo.position" content="59.17, 18.3" />
				<meta name="geo.placename" content="Stockholm" />
				<meta name="geo.country" content="Sweden" />
				<link rel="stylesheet" type="text/css" 
        href="http://www.watchlivenfl.tv/member/templates/css/reset.css" />
    <link rel="stylesheet" type="text/css" 
        href="http://www.watchlivenfl.tv/member/templates/css/amember.css" />
    <link rel="stylesheet" type="text/css" 
        href="http://www.watchlivenfl.tv/member/templates/css/site.css" />		<link href="http://www.watchlivenfl.tv/styles.css" rel="stylesheet" type="text/css" />
	</head>
	<body  class="short_page">
		<div id="pageouter">
			<div id="pageouter2">
				<div id="pageouter3">
		<div id="maincontainer_holder">
  					<!-- header -->			
	    <div id="header_div">
	      <div id="header_logo">
	        <div><a href="http://www.watchlivenfl.tv/">&nbsp;</a></div>
	      </div>
	      <div id="header_menu">
	        						
	      </div>
	      <div class="clr">&nbsp;</div>
	    </div>

	    					
  		 <table width="960" align="center" cellpadding="0" cellspacing="0">
    		<tr>
    			<td id="main_content_holder">
    								<div class="amember"><center>
<script type="text/javascript">

function poptastic(url){
		newwindow=window.open(url,null,'height=600,width=800,scrollbars=yes');
		if (window.focus)
		{
			newwindow.focus();
		}
	}
	function opennew( url )
	{
		newwindow=window.open(url,null); 
		if (window.focus)
		{
			newwindow.focus();
		}
	}
</script>
<form id="signup" method="post" action="/member/signup.php"
>
<center>
<table width="99%" border=0" cellspacing="0" cellpadding="5">
	<tr>
		<td valign="top">
		<center>

<table class="vedit" summary="Signup Form" align="center" width="99%">
<tr>
    <th width="50%">Membership Type *</th>
    <td width="50%">
     
        <input type="hidden" id="product1" name="product_id" value="1" />
       
        <label for="product1"><b>1 years full and unlimited access</b> ($19.95 for one year)<br />
        <span class="small">Unlimited Access to Games (Full 1 Year Access) 
Secure Payment Processor Supports All Major Cards, Paypal, Moneybookers, Bank Transfer And Phone Payments.</span></label><br />
            
        </td>
</tr>


<tr>
    <th><b>Your E-Mail Address *</b><br />
    <div class="small"><label for="id">A confirmation email will be sent</label><br />This will be used as your username.</div></th>
    <td><input id="f_email" class="required email" type="text" name="email" value="" size="30" />
    </td>
</tr>
<tr>
    <th>Choose a Password *<br />
    <div class="small">Must be 4 or more characters</div></th>
    <td><input id="f_pass0" type="password"
    class="{required:true, rangelength:[4, 32]}" 
    name="pass0" value="" size="15" />
    </td>
</tr>

<tr>
    <th>Confirm your password *<br />
    <div class="small">Enter password again</div></th>
    <td><input id="pass1" type="password" class="{equalTo: '#f_pass0'}" name="pass1" value="" size="15" />
    </td>
</tr>




    
</table>
</td>
		<td align="center" valign="top" class="signupfixtures">
			<img src="memimages/safe.gif" alt="Hacker Safe" /><br />
			<div align='center' style="color:#3333ff;height:200px;overflow:auto;font-size:10px;width:290px;">
						<div align='center' style="color:#3333ff;height:200px;overflow:auto;font-size:10px;"></div>
			</div>
			</td>

	</tr>
</table>
<br />
<input value="1" name="terms_agree" type="hidden" />

<input type="hidden" name="do_payment" value="1" />
<input type="hidden" name="price_group" value="" />
<input type="submit" value="&nbsp;&nbsp;&nbsp;Continue&nbsp;&nbsp;&nbsp;" />
<br />
<br />
<img src="memimages/cards2.jpg" alt="" /> 
</center>

</form>

<br /><br />

<script type="text/javascript" src="http://www.watchlivenfl.tv/member/includes/jquery/jquery.js?smarty"></script>
<script type="text/javascript" src="http://www.watchlivenfl.tv/member/includes/jquery/jquery.select.js?smarty"></script>
<script type="text/javascript" src="http://www.watchlivenfl.tv/member/includes/jquery/jquery.metadata.min.js?smarty"></script>
<script type="text/javascript" src="http://www.watchlivenfl.tv/member/includes/jquery/jquery.validate.pack.js?smarty"></script>

<script type="text/javascript">

var statesCache = {};
statesCache.US = null;
statesCache.CA = null;



function changeStates(obj) {

        var country = obj.options[obj.selectedIndex].value;
        var nm = (obj.name == 'cc_country') ? '#f_cc_state' : '#f_state';
        $(nm).removeOption(/.|^$/).
        addOption('', '[Select state]');
        
        if (statesCache[country]){
            $(nm).addOption(statesCache[country]).selectOptions('', true);
            onStatesLoaded();
        } else {
            onStatesLoaded();
            $(nm).attr('selectedIndex', -1);
            $(nm).ajaxAddOption("ajax.php", 
                {"do" : "get_states", "country" : country}, false, onStatesLoaded);
        }
}

//select states in drop down list
function selectStates(obj) {
        var nm = (obj.name == 'cc_country') ? '#f_cc_state' : '#f_state';
        var nmt = (obj.name == 'cc_country') ? '#t_cc_state' : '#t_state';
        var selected=$(nmt)[0].value;
        if (selected!='') {       
            tmp=nm+" > option[@value='"+selected+"']";
            $(tmp).attr("selected", "selected");
        }
}

$(document).ready(function(){
    $("#f_country, #f_cc_country").change(function(){
        changeStates(this);
    });
       
    onStatesLoaded();
    
    $("#f_country, #f_cc_country").each(function(){
        changeStates(this);
    });
});


function onStatesLoaded(){
    // this function called after completion of Ajax or after changing 
    // state list options
    // we will display text box instead of selectBox if no states found
    selObj = $("#f_state")[0];
    if (selObj){
        if (selObj.options.length <= 1){
            $("#f_state").hide().attr("disabled", true).attr('_required', false);
            $("#t_state").show().attr("disabled", false).attr('_required', true);
        } else {
            $("#f_state").show().attr("disabled", false).attr('_required', true);;
            $("#t_state").hide().attr("disabled", true).attr('_required', false);;
        }
    }
    selObj = $("#f_cc_state")[0];
    if (selObj){
        if (selObj.options.length <= 1){
            $("#f_cc_state").hide().attr("disabled", true);
            $("#t_cc_state").show().attr("disabled", false);
        } else {
            $("#f_cc_state").show().attr("disabled", false);
            $("#t_cc_state").hide().attr("disabled", true);
        }
    }  
    
    $("#f_country, #f_cc_country").each(function(){
        selectStates(this);
    });     
}
</script><script type="text/javascript">

jQuery.validator.addMethod("remoteUniqLogin", function(value, element, params) { 
  	var previous = this.previousValue(element);

  	if (!this.settings.messages[element.name] )
  		this.settings.messages[element.name] = {};
  	this.settings.messages[element.name].remoteUniqLogin = 
      	this.settings.messages[element.name].remote = 
        typeof previous.message == "function" ? previous.message(value) : previous.message;
  	
  	if ( previous.old !== value ) {
  		previous.old = value;
  		var validator = this;
  		this.startRequest(element);
  		var data = {
            'do'    : "check_uniq_login",
            'login' : $("#f_login").val(),
            'email' : $("#f_email").val(),
            'pass'  : $("#f_pass0").val()
        };
  		jQuery.ajax({
            type: "POST",
  			url: params,
  			mode: "abort",
  			port: "validate" + element.name,
  			dataType: "json",
  			data: data,
  			success: function(response) {
        		if ( !response || response.errorCode>0 ) {
    				var errors = {};
                    validator.settings.messages[element.name]['remote'] = 
                    validator.settings.messages[element.name]['remoteUniqLogin'] = 
                            response.msg;
  					errors[element.name] =  response.msg || validator.defaultMessage( element, "remoteUniqLogin" );
                    previous.message = response.msg;
                    jQuery.data(element, "previousValue", previous);
  					validator.showErrors(errors);
  				} else {
  					var submitted = validator.formSubmitted;
  					validator.prepareElement(element);
  					validator.formSubmitted = submitted;
  					validator.successList.push(element);
  					validator.showErrors();
  				}
  				previous.valid = response && (response.errorCode == 0);
  				validator.stopRequest(element, response);
  			}
  		});
  		return "pending";
  	} else if( this.pending[element.name] ) {
  		return "pending";
  	}
  	return previous.valid;
  }, "Incorect value"); 

</script><script type="text/javascript">

jQuery.validator.addMethod("remoteCoupon", function(value, element, params) { 
  	var previous = this.previousValue(element);

  	if (!this.settings.messages[element.name] )
  		this.settings.messages[element.name] = {};
  	this.settings.messages[element.name].remoteCoupon = 
        typeof previous.message == "function" ? previous.message(value) : previous.message;

    if (value == "")
        return true;
  	
  	if ( previous.old !== value ) {
  		previous.old = value;
  		var validator = this;
  		this.startRequest(element);
  		var data = {
            'do'    : "check_coupon",
            'coupon' : $("#f_coupon").val()
        };
  		jQuery.ajax({
            type: "POST",
  			url: params,
  			mode: "abort",
  			port: "validate" + element.name,
  			dataType: "json",
  			data: data,
  			success: function(response) {
        		if ( !response || response.errorCode>0 ) {
    				var errors = {};
                    validator.settings.messages[element.name]['remoteCoupon'] = 
                            response.msg;
  					errors[element.name] =  response.msg || validator.defaultMessage( element, "remoteCoupon" );
                    previous.message = response.msg;
                    jQuery.data(element, "previousValue", previous);
  					validator.showErrors(errors);
  				} else {
  					var submitted = validator.formSubmitted;
  					validator.prepareElement(element);
  					validator.formSubmitted = submitted;
  					validator.successList.push(element);
  					validator.showErrors();
  				}
  				previous.valid = response && (response.errorCode == 0);
  				validator.stopRequest(element, response);
  			}
  		});
  		return "pending";
  	} else if( this.pending[element.name] ) {
  		return "pending";
  	}
  	return previous.valid;
  }, "Incorect value"); 

</script>
<script type="text/javascript">
// TODO: coupon, uniq_login ajax check, additional fields
function checkLogin(){
    $("#signup").validate().element("#f_login");
}
function checkCoupon(){
    $("#signup").validate().element("#f_coupon");
}
$(document).ready(function(){
    var prevLogin = "";   
    var prevCoupon = ""; 
    var timeout = null;

    $("#signup").validate({
   	onkeyup: function(element) {
   		if ( element.name in this.submitted || element == this.lastElement ) {
            if (element.id == 'f_login'){
                var l = element.value;
                if (l == prevLogin) return; 
                clearTimeout(timeout);
                timeout = setTimeout(checkLogin, 1*1000);
                prevLogin = l;
            } else if (element.id == 'f_coupon'){
                var c = element.value;
                if (c == prevCoupon) return; 
                clearTimeout(timeout);
                timeout = setTimeout(checkCoupon, 1*1000);
                prevCoupon = c;
            } else
       			this.element(element);
   		}
   	},
    rules: {
	    "_notexisting_": "required" // for the following comma
	
			    	
	},
  	errorPlacement: function(error, element) {
		error.appendTo( element.parent());
	}
    });
});
</script>

</center></div>											
															
	  	  </td>
  	  </tr>
    </table>

								<div></div>

<div>

<!-- Start of StatCounter Code for Default Guide -->

<script type="text/javascript">

var sc_project=7917506; 

var sc_invisible=1; 

var sc_security="8d9cbf91"; 

</script>

<script type="text/javascript"

src="http://www.statcounter.com/counter/counter.js"></script>

<!-- End of StatCounter Code for Default Guide --></div>					

	<!-- copyright box -->

    <div id="copyright_box">

      <p>Copyright&nbsp;&copy;&nbsp;2016 Watch Live NFL Tv</p>

    </div>

    <!-- copyright box -->					<div class="clr"></div>
						</div>	
					</div>
				</div>	
			</div>
		</div>
	</body>
</html>