console.log("%c Welcome to the console","color:orange;font-weight:bold;text-transform:uppercase;");

Delighters.config({
    attribute: 'data-delighter',
    classNames: ['delighter', 'started', 'ended'],
    start: 1,
    end: 1,
    // let's call Delighters.init() manually later
    autoInit: false ,
});

var rellax = new Rellax('.rellax', {
    speed: -2,
});

/**
 * If Javascript is working then start the page with an opacity for the opening animation
 */
// $(document.body).css('opacity','0');


// $(document).ready(() => {
// });

// $('#menu-main').append('<li class="color-mode"><button class="b-reset"><span>Light</span><span>Dark</span> Mode</button></li>');

// if($('body').children().first().hasClass('light-mode') || sessionStorage.getItem('colorMode') == 'light') {
//     $('body *').removeClass('light-mode');
//     $('body *').addClass('dark-mode');
//     $('.color-mode button').children().first().slideDown(400);
//     $('.color-mode button').children().last().slideUp(400);
//     sessionStorage.setItem("colorMode",'dark');
// } else {
//     $('body *').addClass('light-mode');
//     $('body *').removeClass('dark-mode');
//     $('.color-mode button').children().first().slideUp(400);
//     $('.color-mode button').children().last().slideDown(400);
//     sessionStorage.setItem("colorMode",'light');
// }

// $('.color-mode').on('click', () => {
//     if($('body').children().first().hasClass('light-mode') || sessionStorage.getItem('colorMode') == 'light') {
//         $('body *').removeClass('light-mode');
//         $('body *').addClass('dark-mode');
//         $('.color-mode button').children().first().slideDown(400);
//         $('.color-mode button').children().last().slideUp(400);
//         sessionStorage.setItem("colorMode",'light');
//     } else {
//         $('body *').addClass('light-mode');
//         $('body *').removeClass('dark-mode');
//         $('.color-mode button').children().first().slideUp(400);
//         $('.color-mode button').children().last().slideDown(400);
//         sessionStorage.setItem("colorMode",'dark');
//     }
// });


var $switch = $('.color-mode-switch');
var $button = $('.color-mode');
var $main = $('.main');
var $pieces = $('.piece');
$pieces.addClass('color-mode-switch');

$button.on('mouseenter',() => {
    // $switch.removeClass('is-inactive');
    $main.addClass('color-mode-switch-hover');
    $main.removeClass('color-mode-switch-active');
    $pieces.removeClass('color-mode-switch-active');
    $pieces.addClass('color-mode-switch-hover');
}).on('mouseleave',() => {
    if(!$main.hasClass('color-mode-switch-active')) {
        // $main.addClass('is-inactive');
        $main.removeClass('color-mode-switch-hover');
        $pieces.removeClass('color-mode-switch-hover');
    }
}).on('click',() => {
    $main.removeClass('color-mode-switch-hover');
    $main.addClass('color-mode-switch-active');
    $pieces.addClass('color-mode-switch-active');
});


// var $body = $(document.body);
// // const $all = $(document);
// $('.color-mode').on('mouseenter', () => {
//     $switch.removeClass('is-inactive');
//     if(!$switch.children().length) {
//         $($body).clone().appendTo($switch);
//         $('.color-mode-switch *').addClass('light-mode');

//         setTimeout(function() {
//             // $body.first().children().not('.color-mode-switdh').remove();
//             // $('body:first-child *:not(.color-mode-switch)').remove();
//             // $switch.children().children().clone().appendTo($body);
//             $body.children().remove();
//             $body.append('<div></div>');
//             $body.children().replaceWith($switch.children().children());
//             // $switch.children().remove();
//         }, 2000);
//     }
//     $switch.addClass('color-mode-switch-hover');
//     $switch.removeClass('color-mode-switch-active');
//     // $(document.body).addClass('color-mode-switch-hover');
// }).on('mouseleave', () => {
//     $switch.removeClass('color-mode-switch-hover');
//     // $switch.delay(2000).addClass('is-inactive');
// }).on('click',() => {
//     $switch.toggleClass('color-mode-switch-active');
//     $switch.toggleClass('color-mode-switch-hover');
// });


    //Adds delighter to every child element of the article__content on pages/singles
    var $items = $('.article__content *');
    for(var i = 0; i < $items.length; i++){
        var $tg = $items[i].tagName.toLowerCase();
        if($tg != "div" && $tg != "section" && $tg != "article" && $tg != "form") {
            $items[i].setAttribute('data-delighter','');
        }
    }
    // var items = $('.piece h2');
    // for(var i = 0; i < items.length; i++){
    //     var line = "";
    //     for(var l = 0; l < items[i].innerHTML.split("").length; l++){
    //         var item = items[i].innerHTML.split("")[l];
    //         item  = "<span data-delighter class='h2-letter'>" + item + "</span>";
    //         line += item;
    //     }
    //     items[i].innerHTML = line;
    // }
    Delighters.init();
    
    // anime({
    //     targets: 'body',
    //     duration: 500,
    //     delay: 200,
    //     easing: "easeOutSine",
    //     opacity: [0,1],
    //     complete: function(anim) {
    //         document.body.style.opacity = "1";
    //     }
    // });

    // console.log(document.body.scrollTop,document.documentElement.scrollTop);
    if(document.body.scrollTop < 100 && document.documentElement.scrollTop < 100) {
        // Front page opening header on load
        anime({
            targets: '.home > #site-header',
            height: ['100vh','80vh'],
            duration: 1000,
            delay: 500,
            easing: 'easeInOutSine'
        });
        anime({
            targets: ".home .site-header-line",
            top: ["99vh", "79vh"],
            duration: 1000,
            delay: 500,
            easing: "easeInOutSine"
        });
        var $size = "10rem";
        if($(document).width() < 1000) {
            $size = '5rem';
        }
        anime({
            targets: ".home > #site-header, #site-image, #overlay",
            borderBottomRightRadius: [0,$size],
            duration: 1000,
            delay: 500,
            easing: 'easeOutSine',
            complete: function() {
                $('.home > #site-header, #site-image, #overlay').css('border-bottom-right-radius',"");
            }
        });
    }

    anime({
        targets: '.home nav li a, .home nav li button',
        translateY: ['50px','0'],
        duration: 1000,
        delay: anime.stagger(200, {start: 600}),
        easing: "easeOutSine"
    });

    // // Adds the connector lines in between the pieces on the main page
    // anime({
    //     targets: '.h2-letter.delighter',
    //     duration: 500,
    //     delay: anime.stagger(100),
    //     translateY: ["-50px",0],
    //     loop: true,
    // });

    anime({
        targets: '.connector *',
        strokeDashoffset: [anime.setDashoffset, 30],
        duration: 1500,
        delay: anime.stagger(1500),
        easing: 'easeInOutSine',
        loop: true,
        direction: 'alternate'
    });
    //Animated Logo
    anime({
        targets: '#site-logo *',
        strokeDashoffset: [anime.setDashoffset, 0],
        // rotate: [anime.random(-270, -90),0],
        rotate: [-180,0],
        easing: 'easeInOutSine',
        // easing: "spring(1, 90, 10, 0)",
        scale: [0.6,1],
        opacity: [0,1],
        duration: 1000,
        delay: anime.stagger(400, {from: 'center',direction: 'reverse', start: 1000}),
        // direction: 'alternate',
        // endDelay: 300,
        // loop: true
    });

    // Adds the actual styles for the code blocks from wordpress
    if($('code')){
        var codeBlocks = $('code');
        for(var i = 0; i < codeBlocks.length; i++){
            // var lines = $('textarea').val().split('\n');
            var lines = codeBlocks[i].innerHTML.split('\n');
            codeBlocks[i].classList.add('code');
            codeBlocks[i].innerHTML = "<ol></ol>";
            for(var l = 0; l < lines.length; l++){
                var html = "<li class='code-line'>" + lines[l] + "</li>";
                // html = colorCode(html,"C#");
                codeBlocks[i].firstChild.innerHTML += html;
            }
        }
    }

    var newTitle = "";
    // var title = $("#site-title h1 a:last-of-type");
    var title = document.querySelector("#site-title h1 a:last-of-type");
    var oldTitle = Array.from(title.innerHTML);
    for(var i = 0; i < oldTitle.length; i++) {
        if(oldTitle[i] == " ") {
            newTitle += "<span>&nbsp;</span>";
        } else {
            newTitle += "<span>" + oldTitle[i] + "</span>";
        }
    }
    title.innerHTML = newTitle;
    // title.style.opacity = 1;
    if(document.body.classList.contains("home")) {
        anime({
            targets: ".home #site-title h1 a span",
            duration: 900,
            easing: "spring(1, 90, 10, 0)",
            opacity: [0,1],
            scale: [0.7,1],
            delay: anime.stagger(100, {start: 1000}),
            translateX: ['-50px','0']
        });
    } else {
        anime({
            targets: "#site-title h1 a span",
            duration: 500,
            easing: "spring(1, 90, 10, 0)",
            opacity: [0,1],
            delay: anime.stagger(50, {start: 800}),
            translateX: ['-50px','0']
        });
    }

// Formats one line of text to color coded text
function colorCode(str, lang){
    if(lang == "C#"){
        // Something in between quotations ""
        var string = "";
        if(str.indexOf('"') >= 0){
            var last = 0;
            var before = str.substring(0,str.indexOf('"'));
            var x = 0;
            for(var i = 0; i < str.length; i++){
                // console.log(i);
                if(str.indexOf('"',i) > last){
                    x++;

                    // last = str.indexOf('"',i -1);
                    var add = str.substring(last,str.indexOf('"',i) + 1);
                    // console.log("To Add: " + add);
                    string = before + '<span style="color:darkorange;">' + add + '</span>';
                    console.log("Last: " + last + " I: " + i + " Iteration: " + x + " Last: " + last + " Before: %c \n" + before + "\n %c String: %c \n" + string,"color:red;","color: black;","color:green;");
                    if(x % 2 == 1 && x != 1){
                        last = str.indexOf('"',i + 1);
                        before = string;
                        console.log("ODD");
                    } else {
                        last = str.indexOf('"',i);
                    }

                    if(str.lastIndexOf('"',str.length) === str.indexOf('"',i)){
                        var after = str.substring(str.lastIndexOf('"') + 1,str.length);
                        string = string + after;
                        return string;
                    }
                    // console.log("%c Welcome to the console","color:darkorange;font-weight:bold;text-transform:uppercase;");
                }
                // i = str.indexOf('"',i);
            }
        }
        if(string == ""){
            string = str;
        }
        // console.log(string);
        return string;
    }
}