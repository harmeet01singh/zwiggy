var rows = document.getElementsByClassName("rows");

// document.getElementById('dummy').innerHTML = rows.length;

var pages = document.getElementById('pages');

var page = '';
for(let i=0; i<rows.length/5 ; i++){
    page = page + '<a href="#" onClick="loadRows(event)">'+ (i+1) +'</a>\t'
    // console.log(i);
}

// console.log(page);
pages.innerHTML = page;

for(let i=0; i< rows.length; i++ ){
    rows[i].style.display = 'none';
}

for(let i=0; i< 5; i++ ){
    rows[i].style.display = '';
}        

function loadRows(e) {
    pnum = e.currentTarget.innerHTML;
    console.log(pnum);

    for(let i=0; i< rows.length; i++ ){
        rows[i].style.display = 'none';
    }

    for(let i=(pnum -1 )*5; i< (pnum)*5; i++ ){
        rows[i].style.display = '';
    }
}