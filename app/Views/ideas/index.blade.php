<?php

echo '<center>';

foreach ($ideas as $idea)
{
    outputIdea($idea['title'], $idea['text'], $idea['id']);
}

$pagination->outputLink();

echo '</center>';