(function () {
    if(window.sessionStorage.GETRequest && window.location.search==""){
        if(window.location.pathname == window.sessionStorage.GETPath){
            var GETRequest = window.sessionStorage.GETRequest;
            window.sessionStorage.clear();
            window.location.assign(window.location.pathname+GETRequest);
        }else{
            window.sessionStorage.clear();
        }
    }
}());