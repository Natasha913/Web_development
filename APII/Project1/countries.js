const loadCountries =() =>{
    fetch('https://restcountries.com/v3.1/all')
    .then(res => res.json())
    .then(data => displayCountries(data));
}
loadCountries();

const countriesDiv = document.getElementById('countries');
 const displayCountries = countries => {
    for(const country of countries){
        console.log(country.nativeName);
       const h1 = document.createElement('h1');
       h1.innerText = `name: ${countries.nativeName}`;
       countriesDiv.appendChild(h1);
       

    }
}

    //same dff way
   /*
   const countriesDiv = document.getElementById('countries'); 
   countries.forEach(country => {
         const h3 = document.createElement('h3');
       h3.innerText = country.name;
       countriesDiv.appendChild(h3)

        //console.log(country);
    }) ; */

