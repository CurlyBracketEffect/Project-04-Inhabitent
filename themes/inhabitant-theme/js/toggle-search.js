document.addEventListener('DOMContentLoaded', function(){
    document.querySelector('.header-search').addEventListener('click', function(){
        var inputfield = document.querySelector('#searchInput');
        inputfield.style.display="block"; 
        document.querySelector('#searchthing').focus();       
    });
});

function myFunction(){
    document.querySelector('#searchInput').style.display="none";
    document.querySelector('#searchthing').value="";
}