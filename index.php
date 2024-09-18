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
                        <div class="card plats">
                            <img src="Image/Tiramisu.png">
                            Nos desserts
                        </div>
                        <div class="card plats">
                            <img src="Image/Café.png">
                            Nos digestifs
                        </div>
                        <div class="card plats">
                            <img src="Image/Lasagna.png">
                            Nos plats
                        </div>
                        <div class="card plats">
                            <img src="Image/Salade.png">
                            Nos salades
                        </div>
                    </div>
                    <button id="next" class="next-btn">></button>
                </div>

                <div class="zonemenu">
                    <button class="btn btn-menu" onclick="window.location.href='menu.html';">Accéder au menu</button>
                </div>
                    
                <div class="row zonetexte2">
                    <div class="col-md-1"></div>
                    <div class="col-md-5">
                        <div class="zonetexte">
                            <p>
                                Il Piatto est un petit restaurant familial dont la production est perpétuée de génération en génération depuis 1968.
                                Nous sommes implantés à Lyon, au 53 cours Albert Thomas.
                                <br><br>Notre établissement propose des spécialités culinaires originaires d’Italie.
                                A partir de 23h, nous proposons également, une fois par semaine des évènements à thèmes, au sein du restaurant.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="titre2">
                                        <div class="row">
                                            <img src="Image/clock.png" class="clock">
                                            <h3 class="end">Nos horaires</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4>Lundi au samedi :</h4>
                                        <p>11h à 15h</p>
                                        <p>18h à 23h</p>
                                    </div>
                                    <div class="col-md-6">
                                        <h4>Dimanche :</h4>
                                        <p>11h à 15h</p>
                                        <p>Fermé le soir</p>
                                    </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>

                <div class="zonehoraires">

                </div>

                <div class="zoneboutons zoneboutons2">
                    <button class="btn btn-nav reserver" onclick="window.location.href='reservation.php';">Réserver</button>
                    <button class="btn btn-nav commander" onclick="window.location.href='commande.php';">Commander</button>
                </div>

                <div class="zoneplanning">
                    <div class="card">
                        <h1 class="titreplanning instrument-serif-regular-italic">Notre planning</h1>
                        <div class="zoneevenements">
                            <div class="card">
                                <div class="titre2">
                                    <h3>Halloween</h3>
                                </div>
                                <h4>31 octobre</h4>
                                <p>Soirée échange de friandises + déguisements exigés</p>
                            </div>
                            <div class="card">
                                <div class="titre2">
                                    <h3>Noël</h3>
                                </div>
                                <h4>24 décembre</h4>
                                <p>Soirée d'ambiance festive + père-noël</p>
                            </div>
                            <div class="card">
                                <div class="titre2">
                                    <h3>Nouvelle année</h3>
                                </div>
                                <h4>31 décembre</h4>
                                <p>Soirée festive + décompte jusqu'à minuit</p>
                            </div>
                            <div class="card">
                                <div class="titre2">
                                    <h3>Epiphanie</h3>
                                </div>
                                <h4>6 janvier</h4>
                                <p>Galette des rois offerte pour chaque consommation de plus de 150€</p>
                            </div>
                            <div class="card">
                                <div class="titre2">
                                    <h3>Paques</h3>
                                </div>
                                <h4>19 avril</h4>
                                <p>Chasse aux oeufs dans tout le restaurant</p>
                            </div>
                            <div class="card">
                                <div class="titre2">
                                    <h3>Saint Valentin</h3>
                                </div>
                                <h4>14 février</h4>
                                <p>Soirée à ambiance romantique + boisson spéciale</p>
                            </div>
                        </div>
                    </div>
                </div>
        </div>

        
        







<script>
    let currentSlide = 0;
    const slider = document.querySelector('.slider');
    const cards = document.querySelectorAll('.plats');
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