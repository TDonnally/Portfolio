function openContent(a){
    let content = document.getElementById(a);
    content.parentElement.style.width = "100%";
    content.parentElement.style.margin = "0%";
    
    if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){
        content.style.width = "100%";
        content.style.margin = "0%";
    }
    else{
        content.style.width = "50%";
        content.style.marginLeft = "25%";
        content.style.marginRight = "25%";
    }
    
    /*setTimeout(() => {content.parentElement.style.borderRadius = "0%";
                    content.style.borderRadius = "0%";  }, 100);*/
    
}
function closeContent(a){
    let content = document.getElementById(a);
    content.parentElement.style.width = "0%";
    content.parentElement.style.marginLeft = "50%";
    content.parentElement.style.marginRight = "50%";
    
    content.style.width = "0%";
    content.style.marginLeft = "50%";
    content.style.marginRight = "50%";
}
function isMobileDevice() {
    return (typeof window.orientation !== "undefined") || (navigator.userAgent.indexOf('IEMobile') !== -1);
};

