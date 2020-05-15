$(function(){var $write=$('.write'),shift=false,capslock=false;$('.keyboard').each(function(i)
{$(this).find('li').click(function(){namearrs=$(".keyboard").eq(i).attr("id");namearrnew=namearrs.split("_");$(this).animate({backgroundColor:"orange"},200);if($("#attempted").length==0)
attndques=$(".attempted").html();else
attndques=$("#attempted").html();var $this=$(this),character=$this.html();if($this.hasClass('left-shift')||$this.hasClass('right-shift')){$('.letter').toggleClass('uppercase');$('.symbol span').toggle();shift=(shift===true)?false:true;capslock=false;return false;}
if($this.hasClass('capslock')){$('.letter').toggleClass('uppercase');capslock=true;return false;}
if($this.hasClass('delete')){var html=$write.eq(i).val();$(this).animate({backgroundColor:"white"},{duration:600});$write.eq(i).val(html.substr(0,html.length-1));if($(".write").eq(i).val()=='')
{if(attndques!=0)
{attndques=attndques-1;if($("#attempted").length==0)
$(".attempted").html(attndques);else
$("#attempted").html(attndques);}
var tabid=$(this).closest(".tab-pane").parent().closest(".tab-pane").attr("id");if(tabid!=''&&typeof tabid!="undefined"){$("#"+tabid).find(".clear_resp").addClass("btn-danger").removeClass("btn-default").prop('disabled',false);var navigation=$("#"+tabid+" .qnbtns ul.nav.nav-pills li.active");}else{$(".clear_resp").addClass("btn-default").removeClass("btn-danger").prop('disabled',true);var navigation=$(".qnbtns ul.nav.nav-pills li.active");}
var indexval=navigation.data("qidlink");var reviewq=$("#review_"+indexval).val();if(reviewq==1){if(ans==""||ans==undefined){navigation.removeClass("activegreen ans-review").addClass("review");}else{navigation.removeClass("activegreen").addClass("ans-review");}}else{navigation.removeClass("activegreen");}}
return false;}
if($this.hasClass('symbol'))character=$('span:visible',$this).html();if($this.hasClass('space'))character=' ';if($this.hasClass('tab'))character="\t";if($this.hasClass('return'))character="\n";if($this.hasClass('uppercase'))character=character.toUpperCase();if(shift===true){$('.symbol span').toggle();if(capslock===false)$('.letter').toggleClass('uppercase');shift=false;}
$(this).animate({backgroundColor:"white"},600);if($(".write").eq(i).val()=='')
{attndques=parseInt(attndques)+1;if($("#attempted").length==0)
$(".attempted").html(attndques);else
$("#attempted").html(attndques);}
$(".clear_resp").addClass("btn-danger").removeClass("btn-default").prop('disabled',false);var tabid=$(this).closest(".tab-pane").parent().closest(".tab-pane").attr("id");if(tabid!=''&&typeof tabid!="undefined"){var navigation=$("#"+tabid+" .qnbtns ul.nav.nav-pills li.active");}else{var navigation=$(".qnbtns ul.nav.nav-pills li.active");}
var indexval=navigation.data("qidlink");var ans=$(".question_answer_"+indexval+":checked").val();var reviewq=$("#review_"+indexval).val();if(reviewq==1){navigation.removeClass("activegreen").addClass("ans-review");}else{navigation.addClass("activegreen");}
$write.eq(i).val($write.eq(i).val()+character);});});});