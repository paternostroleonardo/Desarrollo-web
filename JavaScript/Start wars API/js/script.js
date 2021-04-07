document.addEventListener('DOMContentLoaded', ()=>{
    function fetchData() {
        fetch('https://swapi.dev/api/people/')
        .then(resp => resp.json())
        .then(data => renderQuotes(data))
      }
      function renderQuotes(data) {
          for (const datos of data) {
    //Find the container where we attach everything to
          const quoteUL = document.querySelector('#list');
    //Create all necessary elements
          const quoteLi = document.createElement('li');
          const blockQuote = document.createElement('blockquote');
          const p = document.createElement('p');
          const footer = document.createElement('footer');
          const br = document.createElement('br');
          const hr = document.createElement('hr')
    //Add appropriate classes and ids. Grab data and insert if needed.
          quoteLi.className = 'quote-card';          //for styling
          blockQuote.className = 'blockquote';       //for styling
          p.className = 'mb-0';                      //for styling
          footer.className = 'blockquote-footer';    //for styling
          quoteLi.dataset.id = datos.id
    //Grab data and insert it into created elements
          p.innerHTML = datos.quote;
          footer.innerHTML = datos.name;
    //Append everything to main container
          blockQuote.append(p, footer, br, hr);
          quoteLi.append(blockQuote);
          quoteUL.append(quoteLi);
          }
       }
    //Call the function that will automatically run renderQuote() also 
       fetchData();
    })