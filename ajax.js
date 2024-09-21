const search = document.getElementById('search-grants');
const grants = document.getElementById('grants-list');

search.addEventListener('input', function (){
    const query = this.value;
   // if(search.value.length > 0){
   // if(query.length > 0){
    if(query.length > 0 || query.length === 0){
       const xhr = new XMLHttpRequest();
       xhr.onreadystatechange = function(){
           if(xhr.readyState === XMLHttpRequest.DONE){
               if(xhr.status === 200){
                   grants.innerHTML = xhr.responseText;
               }
           }
       };
       // xhr.open('GET', `grants-ajax.php?q=${this.value}`, true);
       xhr.open('GET', `grants-ajax.php${query.length > 0 ? `?q=${query}` : ''}`, true);
       xhr.send();
   }
});