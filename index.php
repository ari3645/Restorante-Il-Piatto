<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IL PIATTO</title>
    <link rel="stylesheet" href="accueil.css">
    <link rel="icon" href="Image/IL PIATTO.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <nav class="navbar bg-body-tertiary">
            <div class="nom">
                <p class="yeseva-one-regular">IL PIATTO</p>
            </div>
            <div class="zoneboutons">
                <button class="btn btn-nav reserver" onclick="window.location.href='reservation.php';">Réserver</button>
                <button class="btn btn-nav commander" onclick="window.location.href='commande.php';">Commander</button>
            </div>

    </nav>

    <div class="container">
        <h1 class="titre1">Nos<br>incontournables</h1>
                <div class="slider-container">
                    <button id="prev" class="prev-btn"><</button>
                    <div class="slider">
                        <div class="card plats">
                        <img src="Image/Pizza.png">
                            Nos pizzas
                        </div>
                        <div class="card plats">
                            <img src="Image/Carbonara.png">
                            Nos pâtes
                        </div>
                        <div class="card">
                            <img src="Image/Tiramisu.png">
                            Nos desserts
                        </div>
                        <div class="card">
                            <img src="Image/Café.png">
                            Nos digestifs
                        </div>
                        <div class="card">
                            <img src="Image/Lasagna.png">
                            Nos plats
                        </div>
                        <div class="card">
                            <img src="Image/Salade.png">
                            Nos salades
                        </div>
                    </div>
                    <button id="next" class="next-btn">></button>
                </div>

                <div class="zonemenu">
                    <button class="btn btn-menu">Accéder au menu</button>
                </div>
                    
                <div class="row zonetexte2">
                    <div class="col-md-1"></div>
                    <div class="col-md-4">
                        <div class="zonetexte">
                            <p>
                                Il Piatto est un petit restaurant familial dont la production est perpétuée de génération en génération depuis 1968.
                                Nous sommes implantés à Lyon, au 53 cours Albert Thomas.
                                <br>Notre établissement propose des spécialités culinaires originaires d’Italie.
                                A partir de 23h, nous proposons également, une fois par semaine des évènements à thèmes, au sein du restaurant.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="titre2">
                                <h2>Halloween</h2>
                            </div>
                            <h3>31 octobre</h3>
                            <p>Soirée échange de friandises + déguisements exigés</p>
                        </div>
                    </div>
                </div>

                <div class="zonehoraires">

                </div>

                <div class="zoneboutons zoneboutons2">
                    <button class="btn btn-nav reserver" onclick="window.location.href='reservation.php';">Réserver</button>
                    <button class="btn btn-nav commander" onclick="window.location.href='commande.php';">Commander</button>
                </div>

                <div class="zoneplanning">
                    <div class="card">
                        <h1>Notre planning</h1>
                        <div class="zoneevenements">
                            <div class="card">
                                <div class="titre2">
                                    <h2>Halloween</h2>
                                </div>
                                <h3>31 octobre</h3>
                                <p>Soirée échange de friandises + déguisements exigés</p>
                            </div>
                            <div class="card">
                                <div class="titre2">
                                    <h2>Noël</h2>
                                </div>
                                <h3>24 décembre</h3>
                                <p>Soirée d'ambiance festive + père-noël</p>
                            </div>
                            <div class="card">
                                <div class="titre2">
                                    <h2>Nouvelle année</h2>
                                </div>
                                <h3>31 décembre</h3>
                                <p>Soirée festive + décompte jusqu'à minuit</p>
                            </div>
                            <div class="card">
                                <div class="titre2">
                                    <h2>Epiphanie</h2>
                                </div>
                                <h3>6 janvier</h3>
                                <p>Galette des rois offerte pour chaque consommation de plus de 150€</p>
                            </div>
                            <div class="card">
                                <div class="titre2">
                                    <h2>Paques</h2>
                                </div>
                                <h3>19 avril</h3>
                                <p>Chasse aux oeufs dans tout le restaurant</p>
                            </div>
                            <div class="card">
                                <div class="titre2">
                                    <h2>Saint Valentin</h2>
                                </div>
                                <h3>14 février</h3>
                                <p>Soirée à ambiance romantique + boisson spéciale</p>
                            </div>
                        </div>
                    </div>
                </div>
        </div>

        
        







<script>
    let currentSlide = 0;
    const slider = document.querySelector('.slider');
    const cards = document.querySelectorAll('.card');
    const totalSlides = cards.length;
    
    // Clone les cartes pour créer l'effet de boucle
    const firstClones = [];
    const lastClones = [];
    
    for (let i = 0; i < 3; i++) {
        firstClones.push(cards[i].cloneNode(true));
        lastClones.push(cards[totalSlides - 1 - i].cloneNode(true));
    }
    
    // Ajouter les clones à la fin et au début
    firstClones.forEach(clone => slider.appendChild(clone));
    lastClones.reverse().forEach(clone => slider.insertBefore(clone, cards[0]));
    
    // Met à jour la variable cards pour inclure les clones
    const allCards = document.querySelectorAll('.card');
    const totalAllSlides = allCards.length;
    
    // Ajuste le décalage initial pour voir les vraies cartes en premier
    const cardWidth = 20; // La largeur des cartes en pourcentage
    const gap = 20; // L'espace entre les cartes en pixels
    const slideWidth = cardWidth + (gap / 100); // Largeur totale d'une carte avec espace en pourcentage
    const initialOffset = (3 * (cardWidth + (gap / 100))); // Décalage initial pour centrer les cartes
    slider.style.transform = `translateX(-${initialOffset}%)`;
    
    document.getElementById('next').addEventListener('click', () => {
        if (currentSlide < totalSlides - 1) {
            currentSlide++;
            updateSlider();
        } else {
            // Va au début sans transition
            slider.style.transition = 'none';
            currentSlide = 0;
            slider.style.transform = `translateX(-${initialOffset}%)`;
            setTimeout(() => {
                slider.style.transition = 'transform 0.5s ease';
                currentSlide++;
                updateSlider();
            }, 50);
        }
    });
    
    document.getElementById('prev').addEventListener('click', () => {
        if (currentSlide > 0) {
            currentSlide--;
            updateSlider();
        } else {
            // Va à la fin sans transition
            slider.style.transition = 'none';
            currentSlide = totalSlides - 1;
            const endOffset = (totalSlides + 3) * (cardWidth + (gap / 100));
            slider.style.transform = `translateX(-${endOffset}%)`;
            setTimeout(() => {
                slider.style.transition = 'transform 0.5s ease';
                currentSlide--;
                updateSlider();
            }, 50);
        }
    });
    
    function updateSlider() {
        // Calculer le décalage pour centrer les trois cartes centrales
        const offset = (currentSlide + 1) * (cardWidth + (gap / 100)) - (3 * (cardWidth / 2 + (gap / 200)));
        slider.style.transform = `translateX(-${offset}%)`;
    }
    
    // Initialiser la première vue correcte
    updateSlider();
    </script>
    
    
    
    
    
    
    

            
    
    
    


    </div>
</body>
</html>