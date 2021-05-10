// window.onload=function(){
// document.getElementById('start').innerHTML=get_time();
// }
function get_time(){
    var now= new Date();
    var hr=now.getHours();
    var min=now.getMinutes();
    var ampm=(hr>=12)?'PM':'AM';
    if(hr>12)
    {
        hr=hr-12;
    }
    var time=hr+":"+min+" "+ampm;
    return time;
}
var profile=new URLSearchParams(window.location.search).get('userimg');
var sender=new URLSearchParams(window.location.search).get('name');
var user=new URLSearchParams(window.location.search).get('username');
function send()
{
    var question=document.getElementById('question').value.trim();
    // var question2=document.getElementById('question2').value;
    // console.log(question2);
    // if(question2!="")
    // {
    //     question=question2;
    // }
    if(question!="")
    {
    var sent='<li class="message-me">'+
    '<span class="message-img me">'+
        '<img class="avatar-sm rounded-circle" src="images/'+profile+'">'+
    '</span>'+
    '<div class="message-body">'+
        '<div class="message-header">'+
            '<small class="text-muted">'+
                '<span class="fa fa-time"></span>'+
                '<span class="minutes"></span>'+
            '</small>'+
            '<strong class="messages-title">You</strong>'+
        '</div>'+
        '<p class="messages-p me">'+question+'</p>'+
    '</div>'+
'</li>';
    $('.messages-list').append(sent);
    document.getElementById('question').value="";
    jQuery.ajax({
        url:'sent2.php',
        type:'POST',
        data:{ 'user':user, 'name':sender, 'message':question },
         success:function(answer){
            // console.log(answer);
        //     var answer='<li class="message-you">'+
        //     '<span class="message-img you">'+
        //         '<img class="avatar-sm rounded-circle" src="images/chatbot.png">'+
        //     '</span>'+
        //     '<div class="message-body">'+
        //         '<div class="message-header">'+
        //             '<strong class="messages-title">You</strong>'+
        //             '<small class="text-muted">'+
        //                 '<span class="fa fa-time"></span>'+
        //                 '<span class="minutes"> '+get_time()+'</span>'+
        //             '</small>'+
        //         '</div>'+
        //         '<p class="messages-p you">'+answer+'</p>'+
        //     '</div>'+
        // '</li>';
        // $('.messages-list').append(answer); 
         $('.chatbody').scrollTop($('.chatbody')[0].scrollHeight);
         }    
    })
    }
}