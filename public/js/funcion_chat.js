function inicio_chat() {

    var me = {};
    me.avatar = "../../media/iconos/logo.png";

    var you = {};
    you.avatar = "../../media/iconos/logo.png";

    function formatAMPM(date) {
        var hours = date.getHours();
        var minutes = date.getMinutes();
        var ampm = hours >= 12 ? 'PM' : 'AM';
        hours = hours % 12;
        hours = hours ? hours : 12; // the hour '0' should be '12'
        minutes = minutes < 10 ? '0'+minutes : minutes;
        var strTime = hours + ':' + minutes + ' ' + ampm;
        return strTime;
    }

    //-- No use time. It is a javaScript effect.
    function insertChat(who, text, time){
        if (time === undefined){
            time = 0;
        }
        var control = "";
        var date = formatAMPM(new Date());

        if (who == "me"){
            control = '<li style="width:90%">' +
                            '<div class="msj macro">' +
                            '<div class="avatar"><img class="img-circle" style="width:100%;" src="'+ me.avatar +'" /></div>' +
                                '<div class="text text-l">' +
                                    '<p>'+ text +'</p>' +
                                    '<p><small>'+date+'</small></p>' +
                                '</div>' +
                            '</div>' +
                        '</li>';
        }else{
            control = '<li style="width:90%;">' +
                            '<div class="msj-rta macro">' +
                                '<div class="text text-r">' +
                                    '<p>'+text+'</p>' +
                                    '<p><small>'+date+'</small></p>' +
                                '</div>' +
                            '<div class="avatar" style="padding:0px 0px 0px 10px !important"><img class="img-circle" style="width:100%;" src="'+you.avatar+'" /></div>' +
                    '</li>';
        }
        setTimeout(
            function(){
                $(".frame ul").append(control).scrollTop($(".frame ul").prop('scrollHeight'));
            }, time);

    }

    function resetChat(){
        $(".frame ul").empty();
    }

    /*$(".mytext").on("keydown", function(e){
        if (e.which == 13){
            var text = $(this).val();
            if (text !== ""){
                insertChat("me", text);
                $(this).val('');
            }
        }
    });

    $('.frame > div > div > div:nth-child(2) > span').click(function(){
        $(".mytext").trigger({type: 'keydown', which: 13, keyCode: 13});
    })*/

    //-- Clear Chat
    resetChat();

    //-- Print Messages
    insertChat("me", "!Hola¡", 0);
    insertChat("me", "Nos da gusto tenerte por aquí :)", 1500);
    insertChat("me", "Estamos para ayudarte, pero por el momento, nuestra atención solo es por medio telefonico.",4500);
    insertChat("me", "Te dejo nuestros números para cualquier duda o aclaración:", 10500);
    insertChat("me", "+ 52 55 5659 8304", 11600);
    insertChat("me", "+ 52 55 5659 7959", 12700);
    insertChat("me", "!Muchas gracias por tu preferencia!", 14000);

}


