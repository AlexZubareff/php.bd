var numberOfPages = 0;

        function showData() {

            fetch(`index.php?number=${numberOfPages}`)
                .then(response => response.json())
                .then(result => Show(result))


            numberOfPages = numberOfPages + 10;

            function Show(result) {
                let mainContent = '',
                    main = document.querySelector('#data');
                result.forEach(result => {
                    mainContent += `
                            <div>
                                <h2>${result.name}</h2>
                                <h4>Price: ${result.price}</h4>
                                <h4>Catalog_id: ${result.catalog_id}</h4>
                                <h4>ID: ${result.id}</h4>
                            </div>`;
                });
                console.log(mainContent);
                main.innerHTML += mainContent;
            };
        }