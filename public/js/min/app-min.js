!function($){$(document).foundation();var n={init:function(o){n.config=o,n.bindEvents()},bindEvents:function(){n.config.sendBtn.on("click",n.sendData)},sendData:function(){$.ajax({type:"POST",url:ProjectSettings.baseUrl+"calculator",data:{},dataType:"json",beforeSend:function(){console.log("beforeSend")},success:function(n){console.log(n)}})}};$(window).load(function(){n.init({sendBtn:$(".send-btn")})})}(jQuery);