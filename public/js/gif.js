function randombg(){
    var random= Math.floor(Math.random() * 4) + 0;

    var bigSize = ["url('http://efd.sanmillanproductions.com/media/gif/ani_2.gif')",
                   "url('http://efd.sanmillanproductions.com/media/gif/ani_3.gif')",
                   "url('http://efd.sanmillanproductions.com/media/gif/ani_4.gif')",
                   "url('http://efd.sanmillanproductions.com/media/gif/ani_5.gif')"];
    document.getElementById("random").style.backgroundImage=bigSize[random];
}
