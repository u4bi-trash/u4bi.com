function mouseover(){
    return function(x,bool){
      var result = null;
      bool ? result = x+'!' : result = x;
      return result;
    };
}

function musiccolor(){
    return function(x){
      var result = null;
      x == '' ? result = '#9c9c9c' : result = '#6596eb';
      return result;
    };
}

function typePagingColor(){
    return function(x,bool){
      if(bool && x == 3 || !bool && x == 0) return '#9c9c9c';
    };
}


function detailPagingColor(){
    return function(x, len){
      var result = null;
      if(x == -1|| x == len) return '#9c9c9c';
    };
}

app.filter('musiccolor', musiccolor);
app.filter('mouseover', mouseover);
app.filter('typePagingColor', typePagingColor);
app.filter('detailPagingColor', detailPagingColor);