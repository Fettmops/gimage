<?php
/*
 * This file is part of GImage.
 *
 * (c) Jose Luis Quintana <https://git.io/joseluisq>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

/**
 * Creating Canvas with Text.
 *
 * @author Jose Luis Quintana <https://git.io/joseluisq>
 */

namespace GImage\Examples;

use GImage\Text;
use GImage\Figure;
use GImage\Canvas;

require __DIR__ . '/_config.php';
require __DIR__ . '/../tests/bootstrap.php';

$figure = new Figure(400, 250);
$figure
    ->setBackgroundColor(47, 42, 39)
    ->create();

$text = new Text('Output PNG Text!');
$text
    ->setWidth(400)
    ->setHeight(250)
    ->setLineHeight(1.2)
    ->setAlign('center')
    ->setValign('center')
    ->setSize(22)
    ->setOpacity(0.3)
    ->setColor(255, 255, 255)
    ->setFontface(BASE_PATH . '/fonts/Lato-Bol.ttf');

$canvas = new Canvas($figure);
$canvas
    ->append($text)
    ->toPNG()
    ->draw()
    ->save(__DIR__ . '/text.png');
