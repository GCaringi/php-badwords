<?php

$original_text = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae voluptatibus laborum mollitia, voluptas et distinctio molestiae cumque explicabo facere nulla voluptates suscipit sapiente eligendi, perspiciatis velit dolore? Ullam, cupiditate accusantium? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nam dicta architecto placeat aspernatur quasi deleniti minima eligendi nobis? Incidunt similique iure inventore. Iste pariatur veritatis nisi, quisquam eveniet voluptate quas. Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa nobis ullam, ut porro saepe fugiat dignissimos sint iste iure, alias repudiandae quo eius amet ipsum repellat ex pariatur placeat magnam! Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, deleniti dolor est enim harum ipsa fugit! Fugit, quas facere sunt odio accusamus distinctio pariatur, sapiente repellat vel quam vitae. Cupiditate!";

$taboo_words = $_GET["words"];

$censored_text = str_replace($taboo_words, "***", $original_text)

?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Php badWords</title>
    </head>
    <body>
        <h4>
            Paragrafo non Censurato
        </h4>
        <p>
            <?= $original_text ?>
        </p>
        <small>
            Lunghezza testo: <?= mb_strlen($original_text) ?>
        </small>
        <h4>
            Paragrafo Censurato
        </h4>
        <small>
            Parole da Censurare: 
                <strong>
                    <?= $taboo_words ?>
                </strong>
        </small>
        <p>
            <?= $censored_text; ?>
        </p>
        <small>
            Lunghezza testo: <?= mb_strlen($censored_text) ?>
        </small>
    </body>
</html>