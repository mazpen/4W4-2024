<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="styles.css">
    <title>Theme gr/cr1</title>
</head>
<body>
    <div id="entete" class="global">
        <header>
            <h1>Theme du groupe 1</h1>
            <h2>4W4-conception d'interface et développement Web</h2>
            <h3>TIM - Collège de Maisonneuve</h3>
            <button>Événements</button>
        </header>
        <div class="vague">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
            </svg>
        </div>
    </div>
    <div id="acceuil" class="global">
        <section>
            <h2>Acceuil</h2>
            <?php
                // if(have_posts()){
                //     while (the_post()) {
                //         the_post();
                //         the_title('<h3>','</h3>');
                //     };
                // };

                if (have_posts()):
                    while(have_posts()):the_post();?>
                    <h3>
                        <?php the_title();?>
                    </h3>
                   <?php echo wp_trim_words(grt_the_content(),20); ?>
                   <?php endwhile;?>
                   <?php endif; ?>
        </section>
    </div>
    <div id="evenement" class="global">
        <section>
            <h2>Evenement</h2>
        </section>
    </div>
    <div id="galerie" class="global">
        <section>
            <h2>Galerie</h2>
        </section>
        <div class="vague">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" style="fill: var(--couleur-arriere-footer)"></path>
        </svg>
        </div>
    </div>
    <div id="footer" class="global">
        <footer>
            <h2>Footer (h2)</h2>
            <h3>(h3)</h3>
            <h4>(h4)</h4>
            <h5>(h5)</h5>
            <h6>(h6)</h6>

        </footer>
    </div>
</body>
</html>