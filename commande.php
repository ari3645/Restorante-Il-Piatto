<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commander</title>
    <link rel="stylesheet" href="commande.css">
    <link rel="icon" href="images/IL_PIATTO.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <nav class="navbar bg-body-tertiary row">
        <div class="col-md-4">
            <form class="container-fluid ">
                <button class="button-back " type="button"> <strong> < Retour </strong></button>
          
            </form>
        </div>
        <div class="col-md-7">
            <img class="commander" src="images/COMMANDER.png" style="width: 350px; ">
        </div>
        <div class="col-md-1">
            
            <img class="logo" src="images/IL_PIATTO.png" >

        </div>
    </nav>

    
    <div class="container-fluid">
      
            <div class="card-left">
                <center><h1 class="instrument-serif-regular-italic card-title" style="color: #CB0C0C; " style="margin-top: 20px;"> Menu </h1></center>

                <div class="entrees" >
                    <h2 class="inter" style="margin-top: 20px;">Entrées</h2>
                    <div class="entrees1 row">
                        <div class="col-md-4">
                            <div class="card-plat">
                                <img class="plat-img" src="images/panzanella.png">
                                <h4 id="plat1">Panzanella</h4>
                                <h5 id="prix1">6€</h5>
                                <button class="button-add " id="1" type="button" style="margin-top: 5px;"> <strong> + </strong></button>

                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="card-plat">
                                <img class="plat-img" src="images/spiedini.png">
                                <h4 id="plat2">Spiedini</h4>
                                <h5 id="prix2">7€</h5>
                                <button class="button-add " id="2" type="button" style="margin-top: 5px;"> <strong> + </strong></button>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card-plat">
                                <img class="plat-img" src="images/crostini.png">
                                <h4 id="plat3">Crostini</h4>
                                <h5 id="prix3">7.50€</h5>
                                <button class="button-add " id="3" type="button" style="margin-top: 5px;"> <strong> + </strong></button>
                            </div>
                        </div>

                    </div>
                    <div class="entrees2 row">
                        <div class="col-md-4">
                            <div class="card-plat">
                                <img class="plat-img" src="images/focaccia.png">
                                <h4 id="plat4">Focaccia</h4>
                                <h5 id="prix4">7.50€</h5>
                                <button class="button-add " id="4" type="button" style="margin-top: 5px;"> <strong> + </strong></button>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card-plat">
                                <img class="plat-img" src="images/zucchini.png">
                                <h4 id="plat5">Zucchini garlic bites</h4>
                                <h5 id="prix5">6€</h5>
                                <button class="button-add " id="5" type="button" style="margin-top: 5px;"> <strong> + </strong></button>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card-plat">
                                <img class="plat-img" src="images/caprese.png">
                                <h4 id="plat6">Caprese flatbread</h4>
                                <h5 id="prix6">6€</h5>
                                <button class="button-add " id="6" type="button" style="margin-top: 5px;"> <strong> + </strong></button>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="plats" style="margin-top: 20px;">
                    <h2 class="inter" style="margin-top: 20px;">Plats</h2>
                    <div class="plats row ">
                        <div class="col-md-4">
                            <div class="card-plat">
                                <img class="plat-img" src="images/lasagna.png">
                                <h4 id="plat7">Lasagna</h4>
                                <h5 id="prix7">15€</h5>
                                <button class="button-add " id="7" type="button" style="margin-top: 5px;"> <strong> + </strong></button>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card-plat">
                                <img class="plat-img" src="images/carbo.png">
                                <h4 id="plat8">Pasta al carbonara</h4>
                                <h5 id="prix8">12€</h5>
                                <button class="button-add " id="8" type="button" style="margin-top: 5px;"> <strong> + </strong></button>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card-plat">
                                <img class="plat-img" src="images/pros.png">
                                <h4 id="plat9">Proscuitto</h4>
                                <h5 id="prix9">13.50€</h5>
                                <button class="button-add " id="9" type="button" style="margin-top: 5px;"> <strong> + </strong></button>
                            </div>
                        </div>
                    </div>
                    <div class="plats2 row ">
                        <div class="col-md-2">
                            <div class="card-plat">
                                
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card-plat">
                                <img class="plat-img" src="images/mlarga.png">
                                <h4 id="plat10">Pizza Margherita</h4>
                                <h5 id="prix10">12€</h5>
                                <button class="button-add " id="10" type="button" style="margin-top: 5px;"> <strong> + </strong></button>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card-plat">
                                <img class="plat-img" src="images/peppe.png">
                                <h4 id="plat11">Pizza Peperoni</h4>
                                <h5 id="prix11">14€</h5>
                                <button class="button-add " id="11" type="button" style="margin-top: 5px;"> <strong> + </strong></button>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="card-plat">
                                
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="plats" style="margin-top: 20px;">
                    <h2 class="inter" style="margin-top: 20px;">Desserts</h2>
                    <div class="desserts row ">
                        <div class="col-md-4">
                            <div class="card-plat">
                                <img class="plat-img" src="images/tiramisu.png">
                                <h4 id="plat12">Tiramisu</h4>
                                <h5 id="prix12">4€</h5>
                                <button class="button-add " id="12" type="button" style="margin-top: 5px;"> <strong> + </strong></button>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card-plat">
                                <img class="plat-img" src="images/panna-cotta.png">
                                <h4 id="plat13">Panna Cotta</h4>
                                <h5 id="prix13">5€</h5>
                                <button class="button-add " id="13" type="button" style="margin-top: 5px;"> <strong> + </strong></button>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card-plat">
                                <img class="plat-img" src="images/chocolat-tarte.png">
                                <h4 id="plat14">Torta al chocolate</h4>
                                <h5 id="prix14">5.50€</h5>
                                <button class="button-add " id="14" type="button" style="margin-top: 5px;"> <strong> + </strong></button>
                            </div>
                        </div>
                    </div>
                    <div class="desserts2 row">
                        <div class="col-md-4">
                            <div class="card-plat">

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card-plat">
                                <img class="plat-img" src="images/gelato.png">
                                <h4 id="plat15">Gelato</h4>
                                <h5 id="prix15">2.50€</h5>
                                <button class="button-add " id="15" type="button" style="margin-top: 5px;"> <strong> + </strong></button>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card-plat">
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="plats" style="margin-top: 20px;">
                    <h2 class="inter" style="margin-top: 20px;">Digestifs</h2>
                    <div class="Digestifs row ">
                        <div class="col-md-2">

                        </div>
                        <div class="col-md-4">
                            <div class="card-plat">
                                <img class="plat-img" src="images/expresso.png">
                                <h4 id="plat16">Expresso</h4>
                                <h5 id="prix16">2€</h5>
                                <button class="button-add " id="16" type="button" style="margin-top: 5px;"> <strong> + </strong></button>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card-plat">
                                <img class="plat-img" src="images/limoncello.png">
                                <h4 id="plat17">Limoncello</h4>
                                <h5 id="prix17">5.50€</h5>
                                <button class="button-add " id="17" type="button" style="margin-top: 5px;"> <strong> + </strong></button>
                            </div>
                        </div>
                        <div class="col-md-2">

                        </div>
                    </div>  
                </div>

            </div>
 
            <div class="card-right">
                <center><h1 class="instrument-serif-regular-italic card-title" style="color: #CB0C0C"> Note </h1></center>
                <span class="note-container" id="note-container">

                </span>
                <hr>
                <p class="  total">Total : <span id="totalPrice">0 </span>€</p>
                <span id="total-prix"></span>
                <button class="button-payer " id="button-payer" type="button" style="margin-top: 15px;"> <strong> Payer </strong></button>

            </div>
   
    </div>

</body>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const btn1 = document.getElementById('1');
        const btn2 = document.getElementById('2');
        const btn3 = document.getElementById('3');
        const btn4 = document.getElementById('4');
        const btn5 = document.getElementById('5');
        const btn6 = document.getElementById('6');
        const btn7 = document.getElementById('7');
        const btn8 = document.getElementById('8');
        const btn9 = document.getElementById('9');
        const btn10 = document.getElementById('10');
        const btn11 = document.getElementById('11');
        const btn12 = document.getElementById('12');
        const btn13 = document.getElementById('13');
        const btn14 = document.getElementById('14');
        const btn15 = document.getElementById('15');
        const btn16 = document.getElementById('16');
        const btn17 = document.getElementById('17');

        const plat1 = document.getElementById('plat1');
        const plat2 = document.getElementById('plat2');
        const plat3 = document.getElementById('plat3');
        const plat4 = document.getElementById('plat4');
        const plat5 = document.getElementById('plat5');
        const plat6 = document.getElementById('plat6');
        const plat7 = document.getElementById('plat7');
        const plat8 = document.getElementById('plat8');
        const plat9 = document.getElementById('plat9');
        const plat10 = document.getElementById('plat10');
        const plat11 = document.getElementById('plat11');
        const plat12 = document.getElementById('plat12');
        const plat13 = document.getElementById('plat13');
        const plat14 = document.getElementById('plat14');
        const plat15 = document.getElementById('plat15');
        const plat16 = document.getElementById('plat16');
        const plat17 = document.getElementById('plat17');

        const prix1 = document.getElementById('prix1');
        const prix2 = document.getElementById('prix2');
        const prix3 = document.getElementById('prix3');
        const prix4 = document.getElementById('prix4');
        const prix5 = document.getElementById('prix5');
        const prix6 = document.getElementById('prix6');
        const prix7 = document.getElementById('prix7');
        const prix8 = document.getElementById('prix8');
        const prix9 = document.getElementById('prix9');
        const prix10 = document.getElementById('prix10');
        const prix11 = document.getElementById('prix11');
        const prix12 = document.getElementById('prix12');
        const prix13 = document.getElementById('prix13');
        const prix14 = document.getElementById('prix14');
        const prix15 = document.getElementById('prix15');
        const prix16 = document.getElementById('prix16');
        const prix17 = document.getElementById('prix17');

        const panier = document.getElementById('note-container');

        let totalPrice = 0;

        btn1.addEventListener('click', () => {
            const nomPlat = plat1.innerText;
            let prixPlat = prix1.innerText;

            prixPlat = parseFloat(prixPlat.replace('€', '').trim());

            const row = document.createElement('tr');
            row.innerHTML = `
                <td>${nomPlat}</td>
                <td style="width: 50%;"></td>
                <td>${prixPlat.toFixed(2)} €</td>
            `;
            panier.appendChild(row);

            totalPrice += prixPlat;
            document.getElementById('totalPrice').innerText = totalPrice.toFixed(2);
        });

        btn2.addEventListener('click', () => {
            const nomPlat = plat2.innerText;
            let prixPlat = prix2.innerText;

            prixPlat = parseFloat(prixPlat.replace('€', '').trim());

            const row = document.createElement('tr');
            row.innerHTML = `
                <td>${nomPlat}</td>
                <td style="width: 50%;"></td>
                <td>${prixPlat.toFixed(2)} €</td>
            `;
            panier.appendChild(row);

            totalPrice += prixPlat;
            document.getElementById('totalPrice').innerText = totalPrice.toFixed(2);
        });

        btn3.addEventListener('click', () => {
            const nomPlat = plat3.innerText;
            let prixPlat = prix3.innerText;

            prixPlat = parseFloat(prixPlat.replace('€', '').trim());

            const row = document.createElement('tr');
            row.innerHTML = `
                <td>${nomPlat}</td>
                <td style="width: 50%;"></td>
                <td>${prixPlat.toFixed(2)} €</td>
            `;
            panier.appendChild(row);

            totalPrice += prixPlat;
            document.getElementById('totalPrice').innerText = totalPrice.toFixed(2);
        });

        btn4.addEventListener('click', () => {
            const nomPlat = plat4.innerText;
            let prixPlat = prix4.innerText;

            prixPlat = parseFloat(prixPlat.replace('€', '').trim());

            const row = document.createElement('tr');
            row.innerHTML = `
                <td>${nomPlat}</td>
                <td style="width: 50%;"></td>
                <td>${prixPlat.toFixed(2)} €</td>
            `;
            panier.appendChild(row);

            totalPrice += prixPlat;
            document.getElementById('totalPrice').innerText = totalPrice.toFixed(2);
        });

        btn5.addEventListener('click', () => {
            const nomPlat = plat5.innerText;
            let prixPlat = prix5.innerText;

            prixPlat = parseFloat(prixPlat.replace('€', '').trim());

            const row = document.createElement('tr');
            row.innerHTML = `
                <td>${nomPlat}</td>
                <td style="width: 50%;"></td>
                <td>${prixPlat.toFixed(2)} €</td>
            `;
            panier.appendChild(row);

            totalPrice += prixPlat;
            document.getElementById('totalPrice').innerText = totalPrice.toFixed(2);
        });

        btn6.addEventListener('click', () => {
            const nomPlat = plat6.innerText;
            let prixPlat = prix6.innerText;

            prixPlat = parseFloat(prixPlat.replace('€', '').trim());

            const row = document.createElement('tr');
            row.innerHTML = `
                <td>${nomPlat}</td>
                <td style="width: 50%;"></td>
                <td>${prixPlat.toFixed(2)} €</td>
            `;
            panier.appendChild(row);

            totalPrice += prixPlat;
            document.getElementById('totalPrice').innerText = totalPrice.toFixed(2);
        });

        btn7.addEventListener('click', () => {
            const nomPlat = plat7.innerText;
            let prixPlat = prix7.innerText;

            prixPlat = parseFloat(prixPlat.replace('€', '').trim());

            const row = document.createElement('tr');
            row.innerHTML = `
                <td>${nomPlat}</td>
                <td style="width: 50%;"></td>
                <td>${prixPlat.toFixed(2)} €</td>
            `;
            panier.appendChild(row);

            totalPrice += prixPlat;
            document.getElementById('totalPrice').innerText = totalPrice.toFixed(2);
        });

        btn8.addEventListener('click', () => {
            const nomPlat = plat8.innerText;
            let prixPlat = prix8.innerText;

            prixPlat = parseFloat(prixPlat.replace('€', '').trim());

            const row = document.createElement('tr');
            row.innerHTML = `
                <td>${nomPlat}</td>
                <td style="width: 50%;"></td>
                <td>${prixPlat.toFixed(2)} €</td>
            `;
            panier.appendChild(row);

            totalPrice += prixPlat;
            document.getElementById('totalPrice').innerText = totalPrice.toFixed(2);
        });

        btn9.addEventListener('click', () => {
            const nomPlat = plat9.innerText;
            let prixPlat = prix9.innerText;

            prixPlat = parseFloat(prixPlat.replace('€', '').trim());

            const row = document.createElement('tr');
            row.innerHTML = `
                <td>${nomPlat}</td>
                <td style="width: 50%;"></td>
                <td>${prixPlat.toFixed(2)} €</td>
            `;
            panier.appendChild(row);

            totalPrice += prixPlat;
            document.getElementById('totalPrice').innerText = totalPrice.toFixed(2);
        });

        btn10.addEventListener('click', () => {
            const nomPlat = plat10.innerText;
            let prixPlat = prix10.innerText;

            prixPlat = parseFloat(prixPlat.replace('€', '').trim());

            const row = document.createElement('tr');
            row.innerHTML = `
                <td>${nomPlat}</td>
                <td style="width: 50%;"></td>
                <td>${prixPlat.toFixed(2)} €</td>
            `;
            panier.appendChild(row);

            totalPrice += prixPlat;
            document.getElementById('totalPrice').innerText = totalPrice.toFixed(2);
        });

        btn11.addEventListener('click', () => {
            const nomPlat = plat11.innerText;
            let prixPlat = prix11.innerText;

            prixPlat = parseFloat(prixPlat.replace('€', '').trim());

            const row = document.createElement('tr');
            row.innerHTML = `
                <td>${nomPlat}</td>
                <td style="width: 50%;"></td>
                <td>${prixPlat.toFixed(2)} €</td>
            `;
            panier.appendChild(row);

            totalPrice += prixPlat;
            document.getElementById('totalPrice').innerText = totalPrice.toFixed(2);
        });

        btn12.addEventListener('click', () => {
            const nomPlat = plat12.innerText;
            let prixPlat = prix12.innerText;

            prixPlat = parseFloat(prixPlat.replace('€', '').trim());

            const row = document.createElement('tr');
            row.innerHTML = `
                <td>${nomPlat}</td>
                <td style="width: 50%;"></td>
                <td>${prixPlat.toFixed(2)} €</td>
            `;
            panier.appendChild(row);

            totalPrice += prixPlat;
            document.getElementById('totalPrice').innerText = totalPrice.toFixed(2);
        });

        btn13.addEventListener('click', () => {
            const nomPlat = plat13.innerText;
            let prixPlat = prix13.innerText;

            prixPlat = parseFloat(prixPlat.replace('€', '').trim());

            const row = document.createElement('tr');
            row.innerHTML = `
                <td>${nomPlat}</td>
                <td style="width: 50%;"></td>
                <td>${prixPlat.toFixed(2)} €</td>
            `;
            panier.appendChild(row);

            totalPrice += prixPlat;
            document.getElementById('totalPrice').innerText = totalPrice.toFixed(2);
        });

        btn14.addEventListener('click', () => {
            const nomPlat = plat14.innerText;
            let prixPlat = prix14.innerText;

            prixPlat = parseFloat(prixPlat.replace('€', '').trim());

            const row = document.createElement('tr');
            row.innerHTML = `
                <td>${nomPlat}</td>
                <td style="width: 50%;"></td>
                <td>${prixPlat.toFixed(2)} €</td>
            `;
            panier.appendChild(row);

            totalPrice += prixPlat;
            document.getElementById('totalPrice').innerText = totalPrice.toFixed(2);
        });

        btn15.addEventListener('click', () => {
            const nomPlat = plat15.innerText;
            let prixPlat = prix15.innerText;

            prixPlat = parseFloat(prixPlat.replace('€', '').trim());

            const row = document.createElement('tr');
            row.innerHTML = `
                <td>${nomPlat}</td>
                <td style="width: 50%;"></td>
                <td>${prixPlat.toFixed(2)} €</td>
            `;
            panier.appendChild(row);

            totalPrice += prixPlat;
            document.getElementById('totalPrice').innerText = totalPrice.toFixed(2);
        });

        btn16.addEventListener('click', () => {
            const nomPlat = plat16.innerText;
            let prixPlat = prix16.innerText;

            prixPlat = parseFloat(prixPlat.replace('€', '').trim());

            const row = document.createElement('tr');
            row.innerHTML = `
                <td>${nomPlat}</td>
                <td style="width: 50%;"></td>
                <td>${prixPlat.toFixed(2)} €</td>
            `;
            panier.appendChild(row);

            totalPrice += prixPlat;
            document.getElementById('totalPrice').innerText = totalPrice.toFixed(2);
        });

        btn17.addEventListener('click', () => {
            const nomPlat = plat17.innerText;
            let prixPlat = prix17.innerText;

            prixPlat = parseFloat(prixPlat.replace('€', '').trim());

            const row = document.createElement('tr');
            row.innerHTML = `
                <td>${nomPlat}</td>
                <td style="width: 50%;"></td>
                <td>${prixPlat.toFixed(2)} €</td>
            `;
            panier.appendChild(row);

            totalPrice += prixPlat;
            document.getElementById('totalPrice').innerText = totalPrice.toFixed(2);
        });
    });

</script>

</html>