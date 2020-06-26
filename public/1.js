//  $(function(){
 
// })  

 
document.addEventListener('DOMContentLoaded', function(){
    var x = document.getElementById('mn1');
    var x1 = document.getElementById("menu1page1");
    var x3 = document.getElementById('mn2');
    var x4 = document.getElementById("menu2page1");
    var x5 = document.getElementById('mn3');
    var x6 = document.getElementById("menu3page1");
    var x7 = document.getElementById('mn4');
    var x8 = document.getElementById("menu4page1");
    // var x5 = document.getElementById("text1");
    // var gallery = document.getElementById('gall');
    // gallery.href = '#root';
    x.onclick = function(){
        x1.style.display="block";
        x4.style.display="none";
        x6.style.display="none";
        x8.style.display="none";

    }
    // x5.onclick = function(){
    //     x5.classList.add('doimau');
    // }
    x3.onclick = function(){
        x4.style.display="block";
        x1.style.display="none";
        x6.style.display="none";
        x8.style.display="none";
    }
    x5.onclick = function(){
        x6.style.display="block";
        x1.style.display="none";
        x4.style.display="none";
        x8.style.display="none";
    }
    x7.onclick = function(){
        x8.style.display="block";
        x1.style.display="none";
        x4.style.display="none";
        x6.style.display="none";
    }
},false)





$(document).ready(function(){
    $(".dm a p").click(function(){
        $(".dm a p").removeClass('doimau');
        $(this).addClass('doimau')
    })
})

// $('#demo').pagination({
//     // dataSource: [1, 2, 3, 4, 5, 6, 7],
//     callback: function(data, pagination) {
//         // template method of yourself
//         var html = template(data);
//         dataContainer.html(html);
//     }
// })


