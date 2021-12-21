               
var numberOfPages = 0;
function showData() {
                
numberOfPages = numberOfPages + 10;
    function Show() {
        let mainContent = '',
            main = document.querySelector('#data');
                    forEach(response => {
                        mainContent += `
                            <div>
                                <h2>${response.name}</h2>
                                <h4>Price: ${response.price}</h4>
                                <h4>Catalog_id: ${response.catalog_id}</h4>
                                <h4>Created_ad: ${response.created_ad}</h4>
                            </div>`;
                    });
                    console.log(mainContent);
                    main.innerHTML = mainContent;
    }

fetch(`index.php?number=${numberOfPages}`)
    .then(response => {return response.json();})
    .then(response => Show(response));

}


