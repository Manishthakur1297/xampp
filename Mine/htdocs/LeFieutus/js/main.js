function rise_pillar3(){
	setTimeout(function () {
        var a = document.getElementById('pillar3');
        var b = document.getElementById('pillar3o');
        a.className = 'pillar3-loaded';
        b.className = 'pillar3-loaded';
    }, 0);
}
function rise_pillar2(){
    setTimeout(function () {
        var a = document.getElementById('pillar2');
        var b = document.getElementById('pillar2o');
        a.className = 'pillar2-loaded';
        b.className = 'pillar2-loaded';
    }, 0);
}
function rise_pillar1(){
    setTimeout(function () {
        var a = document.getElementById('pillar1');
        var b = document.getElementById('pillar1o');
        a.className = 'pillar1-loaded';
        b.className = 'pillar1-loaded';
    }, 0);
}

function drop_header(){
    var a = document.getElementById('header');
    a.className = 'header-loaded';
    // console.log(a);
}

$(window).bind("load", function() {
   // console.log("hi");
   setTimeout(function(){
    rise_pillar3();
    setTimeout(function(){
        rise_pillar2();
        setTimeout(function(){
            rise_pillar1();
            setTimeout(function(){
                drop_header();
                setTimeout(function(){
                    setTimeout(function(){
                        $a = $('#nav-1');
                        $a.removeClass('s-not-loaded').addClass('popout');
                        setTimeout(function(){
                            $b = $('#nav-2');
                            $b.removeClass('s-not-loaded').addClass('popout');
                            setTimeout(function(){
                                $c = $('#nav-3');
                                $c.removeClass('s-not-loaded').addClass('popout');
                                setTimeout(function(){
                                    $d = $('#nav-4');
                                    $d.removeClass('s-not-loaded').addClass('popout');
                                    var a = document.getElementById('antaragni-typeface');
                                    // console.log(a);
                                    a.className = 'text-hidden';
                                    setTimeout(function(){
                                        $('#gb-typeface').removeClass('s-not-loaded').addClass('gbscale');
                                        setTimeout(function(){
                                            $.fn.ferroMenu.toggleMenu("#nav");
                                            var elemz = document.getElementById('ball-1');
                                            elemz.style['opacity'] = 0;
                                        }, 500);
                                    },700);
                                },100)
                            }, 200);
                        },200);
                    },500);
                    
                },500);
            },500);
        },200);
    }, 200);
   }, 400);
   
   // rise_pillar1();
});

function countYears(flag){
    if(flag==1)
        return;
    $increment = 10;
    var a=$("#counter"),b=50,c;
    c = setInterval(function(){
        $increment<b+1?(a.html($increment),$increment++):clearInterval(c)},20)
    };