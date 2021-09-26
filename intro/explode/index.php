<?php
$likes = 'eating,drinking,cars,reading a book';
$likes = explode(',',$likes);

//print_r($likes);
foreach ($likes as $key => $like){
    echo '<br>'.$like, ' at position ', ++$key;
}

$interests = 'blue cars';
$interests = explode(' ', $interests);
foreach ($interests as $key => $interest){
    echo '<br>'.$interest, ' at position ', ++$key;
}
