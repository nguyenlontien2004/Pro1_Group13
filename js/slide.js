
// SLide_banner

var mangAnh = [];
var Index = 0;
var autoslide;

for (var i = 0; i <= 6; i++) {
    mangAnh[i] = new Image();
    mangAnh[i].src = "img/banner/banner" + i + ".jpg";
}

auto();

function auto() {
    document.getElementById("anh").src = mangAnh[Index].src;
    if (Index == 7) {
        Index = 0;
    } else {
        Index++;

    }
    autoslide = setTimeout(auto, 2000);
}
// function pre() {
//     if (Index > 0) {
//         Index--;
//     } else {
//         Index = 7;
//     }
//     clearTimeout(autoslide);
//     document.getElementById("anh").src = mangAnh[Index].src;

// }
// function next() {
//     if (Index < 7) {
//         Index++;
//     } else {
//         Index = 0;
//     }
//     document.getElementById("anh").src = mangAnh[Index].src;
// }


// End_slide_banner

//Slide_chi tiết sản phẩm 

// end_slide_chi tiết sản phẩm