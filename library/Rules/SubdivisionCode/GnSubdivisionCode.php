<?php

/*
 * This file is part of Respect/Validation.
 *
 * (c) Alexandre Gomes Gaigalas <alexandre@gaigalas.net>
 *
 * For the full copyright and license information, please view the "LICENSE.md"
 * file that was distributed with this source code.
 */

namespace Respect\Validation\Rules\SubdivisionCode;

use Respect\Validation\Rules\AbstractSearcher;

/**
 * Validator for Guinea subdivision code.
 *
 * ISO 3166-1 alpha-2: GN
 *
 * @link http://www.geonames.org/GN/administrative-division-guinea.html
 */
class GnSubdivisionCode extends AbstractSearcher
{
    public $haystack = [
        'B', // Boké
        'BE', // Beyla
        'BF', // Boffa
        'BK', // Boke
        'C', // Conakry
        'CO', // Coyah
        'D', // Kindia
        'DB', // Dabola
        'DI', // Dinguiraye
        'DL', // Dalaba
        'DU', // Dubreka
        'F', // Faranah
        'FA', // Faranah
        'FO', // Forecariah
        'FR', // Fria
        'GA', // Gaoual
        'GU', // Gueckedou
        'K', // Kankan
        'KA', // Kankan
        'KB', // Koubia
        'KD', // Kindia
        'KE', // Kerouane
        'KN', // Koundara
        'KO', // Kouroussa
        'KS', // Kissidougou
        'L', // Labé
        'LA', // Labe
        'LE', // Lelouma
        'LO', // Lola
        'M', // Mamou
        'MC', // Macenta
        'MD', // Mandiana
        'ML', // Mali
        'MM', // Mamou
        'N', // Nzérékoré
        'NZ', // Nzerekore
        'PI', // Pita
        'SI', // Siguiri
        'TE', // Telimele
        'TO', // Tougue
        'YO', // Yomou
    ];

    public $compareIdentical = true;
}
