function scTop(){
    console.log($(".msgs")[0].scrollHeight);
    $(".msgs").animate({
        scrollTop:$(".msgs")[0].scrollHeight
    });
}

function load_all_messasges(){
    //alert("1");
    //alert("chat-chat.js load_all_messages()");
    console.log("chat-chat.js load_all_messages()");
    localStorage['lpid']=$(".msgs .msg:last").attr("title");
    console.log('load_all_messages');
    console.log($(".msgs .msg:last").attr("title"));
    
    
    var timezone = jstz.determine();
    
    var chattype = $("#chattype").val();
    
    var sendto = $("#friend_request_user_id").val();
    
    
    var user_prof_pic_url = $("#friend_rquest_user_prof_pic").attr('src');
    console.log(user_prof_pic_url);
    
    var groupid = $("#groupid").val();
    var usertype = $("#usertype").val();
    
    if(sendto != '' || groupid != ''){
        $(".msgs").load(base_url + "chat-msgs.php",{ 
            chattype: chattype,
            sendto: sendto,
            user_prof_pic_url: user_prof_pic_url,
            groupid: groupid,
            usertype: usertype,
            timezone: timezone.name()
        },function(){
            if(localStorage['lpid']!=$(".msgs .msg:last").attr("title")){
                scTop();
            }
        });
    }
}
var arr = [];
function load_new_messasges(){
    console.log('chat-chat.js load_new_messages()');
    localStorage['lpid']=$(".msgs .msg:last").attr("title");
    //console.log(localStorage['lpid']);
    
    var timezone = jstz.determine();
    //alert(timezone.name());
    
    var last_message = $(".msgs .msg:last").attr("title");
    
    //console.log(last_message);
    
    if(last_message != null){
        /**
         * IF conversation blank and at that time friend sents some message then the new message will not display.. beacause last_message is null
         */
        //alert("aaaaaaaa");
        var chattype = $("#chattype").val();
    
        var sendto = $("#friend_request_user_id").val();
        var groupid = $("#groupid").val();
        var usertype = $("#usertype").val();
    
        
    
        if(sendto != '' || groupid != ''){
        
            $.post(base_url + "chat-new-msgs.php",{ 
                chattype: chattype,
                sendto: sendto,
                groupid: groupid,
                usertype: usertype,
                last_message: last_message,
                timezone: timezone.name()
            },function(data) {
                //$(".msgs").html(data);
                
                //console.log(localStorage['lpid']);
                if($.inArray(localStorage['lpid'], arr) < 0) {
                    //console.log("is NOT in array");
                    $(".msgs").append(data);
                } else {
                    //console.log("is in array");
                    return false;
                }
                
            
                if(localStorage['lpid']!=$(".msgs .msg:last").attr("title")){
                    arr.push(localStorage['lpid']);
                    //console.log(arr);
                    scTop();
                }
                
            //console.log(localStorage['lpid']);
            //console.log($(".msgs .msg:last").attr("title"));
            });
        }
    
                   
                   
    //        $(".msgs").load(base_url + "chat-new-msgs.php?last_message="+$(".msgs .msg:last").attr("title"),{ 
    //            chattype: chattype,
    //            sendto: sendto,
    //            groupid: groupid,
    //            usertype: usertype
    //        },function(){
    //            if(localStorage['lpid']!=$(".msgs .msg:last").attr("title")){
    //                scTop();
    //            }
    //        });
    }
}

function load_new_stuff(){
    localStorage['lpid']=$(".msgs .msg:last").attr("title");
    
    console.log($(".msgs .msg:last").attr("title"));
    
    var chattype = $("#chattype").val();
    
    var sendto = $("#friend_request_user_id").val();
    var groupid = $("#groupid").val();
    var usertype = $("#usertype").val();
    
    if(sendto != '' || groupid != ''){
        $(".msgs").load(base_url + "chat-msgs.php",{ 
            chattype: chattype,
            sendto: sendto,
            groupid: groupid,
            usertype: usertype
        },function(){
            if(localStorage['lpid']!=$(".msgs .msg:last").attr("title")){
                scTop();
            }
        });
    }else{

    }
//    $(".users").load(base_url + "chat-users.php?usertype="+usertype);
}





/**
 * Show all group Members Name from Group Chat
 */

$("#friend_rquest_user_name").on("click", "a.showme", function(){
    var grp_name = $(this).data('grp_name');
    
    $.get('chat-group-members.php?grp_name='+grp_name, function(html){
        $('#myModal .modal-body').html(html);// Dhaval remove this line $('#myModal .add-memeber').attr("href", "chat-add-user.php?grp_name="+grp_name)
        $('#myModal').modal('show', {
            backdrop: 'static'
        });    
    });
});


$(".home").on('click', function(){
    
    
    //$(".msgs").html("Loading Home Page.....");
    $(".msgs").html("<img id='chat-loader' src='"+base_url+"images/ajax-loader.gif'>");
    
    
    $(".chatbox").load(base_url + "chat-chatbox.php", function(){
        //Mobile
        var viewportWidth = $(document).width();
        if (viewportWidth < 480) {
            $(".chatbox").show();
            $(".chatbox-left-panel").hide();
            $(".back-chat-left-panel").show();        
        }else{
            console.log('bbbbbbbbbbbbbbbb');
            $(".back-chat-left-panel").hide();
        }
        //Mobile End Here
    });
    $(this).siblings().removeClass("chat-left-menu-active");
    $(this).addClass("chat-left-menu-active");
    
    
    
    

});

$(".recent").on('click', function(){
    $("#usertype").val('recent');
    $(".all-conversation").addClass("hide");
    $("#recent-user").removeClass("hide");
    $(this).siblings().removeClass("chat-left-menu-active");
    $(this).addClass("chat-left-menu-active");
});
$(".contacts").on('click', function(){
    $("#usertype").val('contacts');
    $(".all-conversation").addClass("hide");
    $("#all-user").removeClass("hide");
    $(this).siblings().removeClass("chat-left-menu-active");
    $(this).addClass("chat-left-menu-active");
});

$(".groups").on('click', function(){
    $("#usertype").val('groups');
    $(".all-conversation").addClass("hide");
    $("#all-groups").removeClass("hide");
    $(this).siblings().removeClass("chat-left-menu-active");
    $(this).addClass("chat-left-menu-active");
});

$(".pending-requests").on('click', function(){
    $("#usertype").val('pendind_request');
    $(".all-conversation").addClass("hide");
    $("#all-pending-requests").removeClass("hide");
    $(this).addClass("chat-left-menu-active");
    $(this).siblings().removeClass("chat-left-menu-active");
});





/** 
 * Accept Friend Request
 */
$("#accept-friend-request").on("click", function(){
    var friend_request_user_id = $("#friend_request_user_id").val();
    var action = 'accept';
    $.post(base_url + "chat-friend-request.php",{
        friend_request_user_id: friend_request_user_id,
        action: action
    },function(response){
        console.log(response);
        $(".netnoor-user-active").find('.friend-status').text("accepted");
        $("#reponse-friend-request").addClass('hide');
    });
});
    
/** 
 * End of Section
 * Send Friend Request
 */
 
 
/**
  * Reject Friend request
  */
$("#reject-friend-request").on("click", function(){
    var friend_request_user_id = $("#friend_request_user_id").val();
    var action = 'reject';
    $.post(base_url + "chat-friend-request.php",{
        friend_request_user_id: friend_request_user_id,
        action: action
    },function(response){
        console.log(response);
        $(".netnoor-user-active").find('.friend-status').text("rejected");
        $("#reponse-friend-request").addClass('hide');
    });
});
/**
   * End of Section Reject Friend request
   */
    
    

/**
 *  Search By username from the left side chat-panel search box
 */
$("#chatbox-left-panel-search").on('keyup', function(){
    t = $(this);
    var search_str = $(t).val();
    var search_from = $("#search_from").val();
    
    if(search_str !=''){
        
        
        
        $("#searchclear").removeClass('hide'); //Display Cancel Button of Search Box
        
        $(".users").addClass('hide');
        $(".chat-header-menu").addClass('hide');
        
      
        //Query in netnoor if give some user input
        $.post(base_url + "chat-search.php",{
            search_str: search_str,
            search_from: search_from
        },function(response){
            $("#all-netnoor-user").html('');
            $("#all-netnoor-user").html(response);
            $("#all-netnoor-user").removeClass("hide"); //Search Result Panel
            invite_id=$('#invite_id').val();   //Dhaval
            $('#netnoor-user-'+invite_id).click(); //Dhaval
            
            /**
              * Select user to send Friend Request
              */
            $(".netnoor-user").on("click", function(){
                
                
                
                $(".request").addClass("hide");
                $("#friend-request").removeClass("hide");
				

                $("#send-box").removeClass("hide");
                $("#chattype").val('individual');
                $("#sendto").val(($(this).find("label").text()));
                $("#groupid").val("");
                
                
                //This is the friend Profile Pic to whome want to sent request
                var user_prof_pic_url = $(this).find('img').attr('src');
                $("#friend_rquest_user_prof_pic").attr("src", user_prof_pic_url);
        
                $("#friend_rquest_user_name").html(($(this).find(".username").text()));
                $("#friend_request_user_id").val(($(this).find(".userid ").text()));
                
                
                var friend_staus = $(this).find(".friend-status").text();
                var friend_request_type = $(this).find(".friend-request-type").text();
               
                
                /** Clear Message box*/
                $(".msgs").html("");
                $("#msg_form").addClass("hide");
                
                /**
                 * End of Section
                 * Clear Message box
                 */

                
                if(friend_staus == ''){
                    /**
                     * All New Netnoor Users or the netnoor user which are I sent request and not accept till now
                     */
                    
                    $(".request").addClass('hide');
                    $("#new-request").removeClass('hide');
                    
                }else if(friend_staus == 'requested' && friend_request_type == 'sent_request'){
                    
                    $(".request").addClass('hide');
                    $("#request-sent").removeClass('hide'); // Cancel Request button
                }else if(friend_staus == 'requested' && friend_request_type == 'pending_request'){
                    /**
                      * Pending request, All friend request come from netnoor
                      */
                    $(".request").addClass("hide");
                    
                    $("#reponse-friend-request").removeClass("hide");   // Accpet and Reject Button
                }
                else if(friend_staus == 'cancel_request'){
                    /**
                     * All Netnoor user which are I have sent request and cancel the request again
                     */
                    console.log(friend_staus);
                    $(".request").addClass('hide');
                    $("#request-agian").removeClass('hide');
                    
                }else if(friend_staus == 'accepted'){
                    /**
                      * When Netnoor accepet my Request
                      * 
                      * Then load the conversation with frined_id
                      * 
                      */
                    console.log(friend_staus);
                }else if(friend_staus == 'rejected'){
                    /**
                      * When Netnoor user Reject my Request
                      */
                    console.log(friend_staus);
                }else{
                    $(".request").addClass('hide');
                    $("#request-sent").removeClass('hide');
                }
            //load_new_stuff();
            });
            
            /**
              * End of Section
              */
            
            
            $(".my-contact").on("click", function(){
        
                $(".request").addClass("hide");
                $("#friend-request").removeClass("hide");
                $("#send-box").removeClass("hide");
                $("#chattype").val('individual');
                $("#sendto").val(($(this).find("label").text()));
                $("#groupid").val("");
        
                $("#friend_rquest_user_name").html(($(this).find(".username").text()));
                $("#friend_request_user_id").val(($(this).find(".userid ").text()));
        
            //load_new_stuff();
            });
        });
    }else{
        $("#searchclear").addClass('hide'); //hide Cancel Button of Search Box
        
        $("#all-netnoor-user").addClass("hide"); //Search Result Panel
        //$("#recent-user").removeClass('hide'); // Clean left search panel
        $(".chat-header-menu").removeClass('hide');
        $(".users").removeClass('hide');
        
        //Check before search which one selected.. and that section
        $("#all-netnoor-user").html(""); // Remove the all results getting from Netnoor Search Directory
    }

    
});


/**
 * When Select User from My Contact
 */

/**
 * End of Section
 * When Select User from My Contact
 */


/**
 *Clear Search Box
 */
$("#searchclear").click(function(){
    $("#chatbox-left-panel-search").val('');
    $("#searchclear").addClass('hide'); //hide Cancel Button of Search Box
    
    
    $("#all-netnoor-user").addClass("hide"); //Search Result Panel
    $(".chat-header-menu").removeClass('hide');
    $(".users").removeClass('hide');
        
    //Check before search which one selected.. and that section
    $("#all-netnoor-user").html(""); // Remove the all results getting from Netnoor Search Directory
});
/**
 *Clear Search Box
 */






/** 
 * Send Friend Request
 */
$("#send-friend-request").on("click", function(){
    var friend_request_user_id = $("#friend_request_user_id").val();
    var action = 'new';
    $.post(base_url + "chat-friend-request.php",{
        friend_request_user_id: friend_request_user_id,
        action: action
    },function(response){
        $(".netnoor-user").find('.friend-status').text("requsted");
        $("#new-request").addClass('hide');
        $("#success-request").removeClass('hide');
    });
});
    
/** 
  * End of Section
  * Send Friend Request
  */
     
/**
 * Cancel Friend Request
 */
$("#cancel-friend-request").on("click", function(){
    var friend_request_user_id = $("#friend_request_user_id").val();
    var action = 'cancel';
    $.post(base_url + "chat-friend-request.php",{
        friend_request_user_id: friend_request_user_id,
        action: action
    },function(response){
        console.log(response);
        $(".netnoor-user").find('.friend-status').text("cancel_request");
        $("#request-sent").addClass('hide');
    });
});
/**
 * End of Section
 * Cancel Friend Request
 */
 
 
 
 
//setInterval(function(){
//    //If User sleected for Chatting then only run this function...
//    load_new_stuff();
//},5000);


setInterval(function(){
    //If User sleected for Chatting then only run this function...
    load_new_messasges();
//},5000);
},1500);    // Changed on 30/08/2016  so that the new maagesses shown on chat box faster

//setInterval(function(){
//    var usertype = $("#usertype").val();
//    $(".users").load(base_url + "chat-users.php?usertype="+usertype);
////},60000);
//},30000);