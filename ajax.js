const search = document.getElementById('search-grants');
const grants = document.getElementById('grants-list');

search.addEventListener('input', function (){
   if(search.value.length > 0){
       const xhr = new XMLHttpRequest();
       xhr.onreadystatechange = function(){
           if(xhr.readyState === XMLHttpRequest.DONE){
               if(xhr.status === 200){
                   grants.innerHTML = xhr.responseText;
               }
           }
       };
       xhr.open('GET', `grants-ajax.php?q=${this.value}`, true);
       xhr.send();
   }
});