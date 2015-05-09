<?php

namespace azul\Numbers_Words\Numbers\Words\Locale;

use azul\Numbers_Words\Numbers\Words;

/**
 * Numbers_Words
 *
 * PHP version 5
 *
 * Copyright (c) 1997-2006 The PHP Group
 *
 * This source file is subject to version 3.01 of the PHP license,
 * that is bundled with this package in the file LICENSE, and is
 * available at through the world-wide-web at
 * http://www.php.net/license/3_01.txt
 * If you did not receive a copy of the PHP license and are unable to
 * obtain it through the world-wide-web, please send a note to
 * license@php.net so we can mail you a copy immediately.
 *
 * @category Numbers
 * @package  Numbers_Words
 * @author   Kouber Saparev <kouber@php.net>
 * @license  PHP 3.01 http://www.php.net/license/3_01.txt
 * @version  SVN: $Id$
 * @link     http://pear.php.net/package/Numbers_Words
 */

/**
 * Include needed files
 */

/**
 * Class for translating numbers into French.
 *
 * @category Numbers
 * @package  Numbers_Words
 * @author   Kouber Saparev <kouber@php.net>
 * @license  PHP 3.01 http://www.php.net/license/3_01.txt
 * @link     http://pear.php.net/package/Numbers_Words
 */
class NumbersWordsLocaleFr extends Words
{

    // {{{ properties

    /**
     * Locale name.
     * @var string
     * @access public
     */
    var $locale = 'fr';

    /**
     * Language name in English.
     * @var string
     * @access public
     */
    var $lang = 'French';

    /**
     * Native language name.
     * @var string
     * @access public
     */
    var $lang_native = 'Français';

    /**
     * The words for some numbers.
     * @var string
     * @access private
     */
    var $_misc_numbers = array(
        10=>'dix',      // 10
            'onze',     // 11
            'douze',    // 12
            'treize',   // 13
            'quatorze', // 14
            'quinze',   // 15
            'seize',    // 16
        20=>'vingt',    // 20
        30=>'trente',   // 30
        40=>'quarante', // 40
        50=>'cinquante',// 50
        60=>'soixante', // 60
       100=>'cent'      // 100
    );


    /**
     * The words for digits (except zero).
     * @var string
     * @access private
     */
    var $_digits = array(1=>"un", "deux", "trois", "quatre", "cinq", "six", "sept", "huit", "neuf");

    /**
     * The word for zero.
     * @var string
     * @access private
     */
    var $_zero = 'zéro';

    /**
     * The word for infinity.
     * @var string
     * @access private
     */
    var $_infinity = 'infini';

    /**
     * The word for the "and" language construct.
     * @var string
     * @access private
     */
    var $_and = 'et';
    
    /**
     * The word separator.
     * @var string
     * @access private
     */
    var $_sep = ' ';

    /**
     * The dash liaison.
     * @var string
     * @access private
     */
    var $_dash = '-';

    /**
     * The word for the minus sign.
     * @var string
     * @access private
     */
    var $_minus = 'moins'; // minus sign

    /**
     * The plural suffix (except for hundred).
     * @var string
     * @access private
     */
    var $_plural = 's'; // plural suffix

    /**
     * The suffixes for exponents (singular).
     * @var array
     * @access private
     */
    var $_exponent = array(
        0 => '',
        3 => 'mille',
        6 => 'million',
        9 => 'milliard',
       12 => 'trillion',
       15 => 'quadrillion',
       18 => 'quintillion',
       21 => 'sextillion',
       24 => 'septillion',
       27 => 'octillion',
       30 => 'nonillion',
       33 => 'decillion',
       36 => 'undecillion',
       39 => 'duodecillion',
       42 => 'tredecillion',
       45 => 'quattuordecillion',
       48 => 'quindecillion',
       51 => 'sexdecillion',
       54 => 'septendecillion',
       57 => 'octodecillion',
       60 => 'novemdecillion',
       63 => 'vigintillion',
       66 => 'unvigintillion',
       69 => 'duovigintillion',
       72 => 'trevigintillion',
       75 => 'quattuorvigintillion',
       78 => 'quinvigintillion',
       81 => 'sexvigintillion',
       84 => 'septenvigintillion',
       87 => 'octovigintillion',
       90 => 'novemvigintillion',
       93 => 'trigintillion',
       96 => 'untrigintillion',
       99 => 'duotrigintillion',
      102 => 'trestrigintillion',
      105 => 'quattuortrigintillion',
      108 => 'quintrigintillion',
      111 => 'sextrigintillion',
      114 => 'septentrigintillion',
      117 => 'octotrigintillion',
      120 => 'novemtrigintillion',
      123 => 'quadragintillion',
      126 => 'unquadragintillion',
      129 => 'duoquadragintillion',
      132 => 'trequadragintillion',
      135 => 'quattuorquadragintillion',
      138 => 'quinquadragintillion',
      141 => 'sexquadragintillion',
      144 => 'septenquadragintillion',
      147 => 'octoquadragintillion',
      150 => 'novemquadragintillion',
      153 => 'quinquagintillion',
      156 => 'unquinquagintillion',
      159 => 'duoquinquagintillion',
      162 => 'trequinquagintillion',
      165 => 'quattuorquinquagintillion',
      168 => 'quinquinquagintillion',
      171 => 'sexquinquagintillion',
      174 => 'septenquinquagintillion',
      177 => 'octoquinquagintillion',
      180 => 'novemquinquagintillion',
      183 => 'sexagintillion',
      186 => 'unsexagintillion',
      189 => 'duosexagintillion',
      192 => 'tresexagintillion',
      195 => 'quattuorsexagintillion',
      198 => 'quinsexagintillion',
      201 => 'sexsexagintillion',
      204 => 'septensexagintillion',
      207 => 'octosexagintillion',
      210 => 'novemsexagintillion',
      213 => 'septuagintillion',
      216 => 'unseptuagintillion',
      219 => 'duoseptuagintillion',
      222 => 'treseptuagintillion',
      225 => 'quattuorseptuagintillion',
      228 => 'quinseptuagintillion',
      231 => 'sexseptuagintillion',
      234 => 'septenseptuagintillion',
      237 => 'octoseptuagintillion',
      240 => 'novemseptuagintillion',
      243 => 'octogintillion',
      246 => 'unoctogintillion',
      249 => 'duooctogintillion',
      252 => 'treoctogintillion',
      255 => 'quattuoroctogintillion',
      258 => 'quinoctogintillion',
      261 => 'sexoctogintillion',
      264 => 'septoctogintillion',
      267 => 'octooctogintillion',
      270 => 'novemoctogintillion',
      273 => 'nonagintillion',
      276 => 'unnonagintillion',
      279 => 'duononagintillion',
      282 => 'trenonagintillion',
      285 => 'quattuornonagintillion',
      288 => 'quinnonagintillion',
      291 => 'sexnonagintillion',
      294 => 'septennonagintillion',
      297 => 'octononagintillion',
      300 => 'novemnonagintillion',
      303 => 'centillion'
        );
    // }}}

    
    /**
     * The currency names (based on the below links,
     * informations from central bank websites and on encyclopedias)
     *
     * @var array
     * @link http://30-03-67.dreamstation.com/currency_alfa.htm World Currency Information
     * @link http://www.jhall.demon.co.uk/currency/by_abbrev.html World currencies
     * @link http://www.shoestring.co.kr/world/p.visa/change.htm Currency names in English
     * @access private
     */
    var $_currency_names = array(
      'AED' => array(array('dirham des Émirats arabes unis'), array('fil')),
      'AFN' => array(array('afghani afghan'), array('pul')),
      'ALL' => array(array('lek albanais'), array('qindarka')),
      'AMD' => array(array('dram arménien'), array('luma')),
      'ANG' => array(array('florin antillais'), array('cent')),
      'AOA' => array(array('kwanza angolais'), array('lwei')),
      'AOK' => array(array('kwanza angolais'), array('lwei')),
      'AOR' => array(array('nouveau kwanza angolais'), array('lwei')),
      'ARA' => array(array('austral argentin'), array('centavos')),
      'ARP' => array(array('peso argentin'), array('centavos')),
      'ARS' => array(array('peso argentin'), array('centavos')),
      'ATS' => array(array('schilling autrichien'), array('groschen')),
      'AUD' => array(array('dollar Australien'), array('cent')),
      'AWG' => array(array('florin arubais'), array('cent')),
      'AZM' => array(array('manat azéri'), array('gopik')),
      'AZN' => array(array('manat azéri'), array('gopik')),
      'BAD' => array(array('dinar bosniaque'), array('centime')),
      'BAM' => array(array('mark convertible bosniaque'), array('fenig')),
      'BBD' => array(array('dollar barbadien'), array('cent')),
      'BDT' => array(array('taka bangladeshi'), array(array('poisha','paisa'))),
      'BEC' => array(array('franc belge (convertible)'), array('centime')),
      'BEF' => array(array('franc belge'), array('centime')),
      'BEL' => array(array('franc belge (financier)'), array('centime')),
      'BGN' => array(array('lev bulgare'), array('stotinka')),
      'BHD' => array(array('dinar bahreïni'), array('centime')),
      'BIF' => array(array('franc burundais'), array('centime')),
      'BMD' => array(array('dollar bermudien'), array('cent')),
      'BND' => array(array('dollar brunéien'), array('cent')),
      'BOB' => array(array('boliviano bolivien'), array('centavos')),
      'BOP' => array(array('mvdol bolivien'), array('centavos')),
      'BRL' => array(array('réal brésilien'), array('centavos')),
      'BSD' => array(array('dollar bahaméen'), array('cent')),
      'BTN' => array(array('ngultrum bouthanais'), array('chetrum')),
      'BUK' => array(array('kyat birman'), array('centime')),
      'BWP' => array(array('pula botswanais'), array('thebe')),
      'BYR' => array(array('rouble biélorusse'), array('kopiejka')),
      'BZD' => array(array('dollar bélizéen'), array('cent')),
      'CAD' => array(array('dollar Canadien'), array('cent')),
      'CDF' => array(array('franc congolais'), array('centime')),
      'CHE' => array(array('euro WIR'), array('centime')),
      'CHF' => array(array('franc suisse'), array('rapp')),
      'CHW' => array(array('franc WIR'), array('centime')),
      'CLF' => array(array('unité d’investissement chilienne'), array('centime')),
      'CLP' => array(array('peso chilienne'), array('centavos')),
      'CNY' => array(array('yuan renminbi chinois'), array('fen')),
      'COP' => array(array('peso colombien'), array('centavos')),
      'COU' => array(array('unité de valeur réelle colombienne'), array('centavos')),
      'CRC' => array(array('colón costaricain'), array('centimo')),
      'CSD' => array(array('dinar serbo-monténégrin'), array('centime')),
      'CSK' => array(array('couronne forte tchécoslovaque'), array('halerz')),
      'CUC' => array(array('peso cubain convertible'), array('centavo')),
      'CUP' => array(array('peso cubain'), array('centavo')),
      'CVE' => array(array('escudo capverdien'), array('centavo')),
      'CYP' => array(array('livre chypriote'), array('cent')),
      'CZK' => array(array('couronne tchéque'), array('halerz')),
      'DJF' => array(array('franc djiboutien'), array('centime')),
      'DKK' => array(array('couronne danoise'), array('ore')),
      'DOP' => array(array('peso dominicain'), array('centavo')),
      'DZD' => array(array('dinar algérien'), array('centime')),
      'ECS' => array(array('sucre équatorien'), array('centavo')),
      'EEK' => array(array('couronne estonienne'), array('senti')),
      'EGP' => array(array('livre égyptienne'), array('piaster')),
      'ERN' => array(array('nafka érythréen'), array('cent')),
      'ESP' => array(array('peseta espagnole'), array('centavo')),
      'ETB' => array(array('birr éthiopien'), array('cent')),
      'EUR' => array(array('euro'), array('centime')),
      'FIM' => array(array('mark finlandais'), array('penniä')),
      'FJD' => array(array('dollar fidjien'), array('cent')),
      'FKP' => array(array('livre des Falkland'), array('pence')),
      'GBP' => array(array('livre sterling', 'livres sterling'), array('pence', 'pence')),
      'GHS' => array(array('cédi ghanéen'), array('psewa')),
      'GIP' => array(array('livre de Gibraltar'), array('pence')),
      'GMD' => array(array('dalasi gambien'), array('butut')),
      'GNF' => array(array('franc guinéen'), array('centime')),
      'GNS' => array(array('syli guinéen'), array('centime')),
      'GTQ' => array(array('quetzal guatémaltèque'), array('centavo')),
      'GYD' => array(array('dollar du Guyana'), array('cent')),
      'GQE' => array(array('ekwélé équatoguinéen'), array('centimo')),
      'HKD' => array(array('dollar de Hong Kong'), array('cent')),
      'HNL' => array(array('lempira hondurien'), array('centavo')),
      'HRK' => array(array('kuna croate'), array('lipa')),
      'HTG' => array(array('gourde haïtienne'), array('centime')),
      'HUF' => array(array('forint hongrois'), array('filler')),
      'IDR' => array(array('roupie indonésienne'), array('sen')),
      'IEP' => array(array('livre irlandaise'), array('pence')),
      'ILP' => array(array('livre israélienne'), array('pence')),
      'ILS' => array(array('nouveau shekel israélien','nouveau shekels israélien'), array('agora','agorot')),
      'ISK' => array(array('couronne islandaise'), array('aur','aurar')),
      'JPY' => array(array('yen'), array('sen')),
      'LTL' => array(array('litas'), array('cent')),
      'LVL' => array(array('lat'), array('sentim')),
      'MKD' => array(array('Macedonian dinar'), array('deni')),
      'MTL' => array(array('Maltese lira'), array('centym')),
      'NOK' => array(array('Norwegian krone'), array('oere')),
      'PLN' => array(array('zloty', 'zlotys'), array('grosz')),
      'ROL' => array(array('Romanian leu'), array('bani')),
      'RUB' => array(array('Russian Federation rouble'), array('kopiejka')),
      'SEK' => array(array('Swedish krona'), array('oere')),
      'SIT' => array(array('Tolar'), array('stotinia')),
      'SKK' => array(array('Slovak koruna'), array()),
      'TRL' => array(array('lira'), array('kuru�')),
      'UAH' => array(array('hryvna'), array('cent')),
      'USD' => array(array('dollar'), array('cent')),
      'YUM' => array(array('dinars'), array('para')),
      'ZAR' => array(array('rand'), array('cent')),
    );

    /**
     * The default currency name
     * @var string
     * @access public
     */
    var $def_currency = 'USD';
    
    
    // {{{ _splitNumber()

    /**
     * Split a number to groups of three-digit numbers.
     *
     * @param mixed $num An integer or its string representation
     *                   that need to be split
     *
     * @return array  Groups of three-digit numbers.
     * @access private
     * @author Kouber Saparev <kouber@php.net>
     * @since  PHP 4.2.3
     */
    function _splitNumber($num)
    {
        if (is_string($num)) {
            $ret    = array();
            $strlen = strlen($num);
            $first  = substr($num, 0, $strlen%3);

            preg_match_all('/\d{3}/', substr($num, $strlen%3, $strlen), $m);
            $ret =& $m[0];

            if ($first) {
                array_unshift($ret, $first);
            }

            return $ret;
        }
        return explode(' ', number_format($num, 0, '', ' ')); // a faster version for integers
    }
    // }}}

    // {{{ _showDigitsGroup()

    /**
     * Converts a three-digit number to its word representation
     * in French language.
     *
     * @param integer $num  An integer between 1 and 999 inclusive.
     * @param boolean $last A flag, that determines if it is the last group of digits -
     *                      this is used to accord the plural suffix of the "hundreds".
     *                      Example: 200 = "deux cents", but 200000 = "deux cent mille".
     *
     * @return string   The words for the given number.
     * @access private
     * @author Kouber Saparev <kouber@php.net>
     */
    function _showDigitsGroup($num, $last = false)
    {
        $ret = '';
        
        // extract the value of each digit from the three-digit number
        $e = $num%10;                  // ones
        $d = ($num-$e)%100/10;         // tens
        $s = ($num-$d*10-$e)%1000/100; // hundreds
        
        // process the "hundreds" digit.
        if ($s) {
            if ($s>1) {
                $ret .= $this->_digits[$s].$this->_sep.$this->_misc_numbers[100];
                if ($last && !$e && !$d) {
                    $ret .= $this->_plural;
                }
            } else {
                $ret .= $this->_misc_numbers[100];
            }
            $ret .= $this->_sep;
        }

        // process the "tens" digit, and optionally the "ones" digit.
        if ($d) {
            // in the case of 1, the "ones" digit also must be processed
            if ($d==1) {
                if ($e<=6) {
                    $ret .= $this->_misc_numbers[10+$e];
                } else {
                    $ret .= $this->_misc_numbers[10].'-'.$this->_digits[$e];
                }
                $e = 0;
            } elseif ($d>5) {
                if ($d<8) {
                    $ret .= $this->_misc_numbers[60];

                    $resto = $d*10+$e-60;
                    if ($e==1) {
                        $ret .= $this->_sep.$this->_and.$this->_sep;
                    } elseif ($resto) {
                        $ret .= $this->_dash;
                    }
                    
                    if ($resto) {
                        $ret .= $this->_showDigitsGroup($resto);
                    }
                    $e = 0;
                } else {
                    $ret .= $this->_digits[4].$this->_dash.$this->_misc_numbers[20];

                    $resto = $d*10+$e-80;
                    if ($resto) {
                        $ret .= $this->_dash;
                        $ret .= $this->_showDigitsGroup($resto);

                        $e = 0;
                    } else {
                        $ret .= $this->_plural;
                    }
                }
            } else {
                $ret .= $this->_misc_numbers[$d*10];
            }
        }

        // process the "ones" digit
        if ($e) {
            if ($d) {
                if ($e==1) {
                    $ret .= $this->_sep.$this->_and.$this->_sep;
                } else {
                    $ret .= $this->_dash;
                }
            }
            $ret .= $this->_digits[$e];
        }

        // strip excessive separators
        $ret = rtrim($ret, $this->_sep);

        return $ret;
    }
    // }}}

    // {{{ _toWords()

    /**
     * Converts a number to its word representation
     * in French language.
     *
     * @param integer $num An integer (or its string representation) between 9.99*-10^302
     *                        and 9.99*10^302 (999 centillions) that need to be converted to words
     *
     * @return string  The corresponding word representation
     * @access protected
     * @author Kouber Saparev <kouber@php.net>
     * @since  Numbers_Words 0.16.3
     */
    function _toWords($num = 0)
    {
        $ret = '';

        // check if $num is a valid non-zero number
        if (!$num || preg_match('/^-?0+$/', $num) || !preg_match('/^-?\d+$/', $num)) {
            return $this->_zero;
        }

        // add a minus sign
        if (substr($num, 0, 1) == '-') {
            $ret = $this->_minus . $this->_sep;
            $num = substr($num, 1);
        }

        // if the absolute value is greater than 9.99*10^302, return infinity
        if (strlen($num)>306) {
            return $ret . $this->_infinity;
        }

        // strip excessive zero signs
        $num = ltrim($num, '0');

        // split $num to groups of three-digit numbers
        $num_groups = $this->_splitNumber($num);

        $sizeof_numgroups = count($num_groups);

        foreach ($num_groups as $i=>$number) {
            // what is the corresponding exponent for the current group
            $pow = $sizeof_numgroups-$i;

            // skip processment for empty groups
            if ($number!='000') {
                if ($number!=1 || $pow!=2) {
                    $ret .= $this->_showDigitsGroup($number, $i+1==$sizeof_numgroups||$pow>2).$this->_sep;
                }
                $ret .= $this->_exponent[($pow-1)*3];
                if ($pow>2 && $number>1) {
                    $ret .= $this->_plural;
                }
                $ret .= $this->_sep;
            }
        }

        return rtrim($ret, $this->_sep);
    }
    // }}}
    
    
    // {{{ toCurrencyWords()

    /**
     * Converts a currency value to its word representation
     * (with monetary units) in English language
     *
     * @param integer $int_curr         An international currency symbol
     *                                  as defined by the ISO 4217 standard (three characters)
     * @param integer $decimal          A money total amount without fraction part (e.g. amount of dollars)
     * @param integer $fraction         Fractional part of the money amount (e.g. amount of cents)
     *                                  Optional. Defaults to false.
     * @param integer $convert_fraction Convert fraction to words (left as numeric if set to false).
     *                                  Optional. Defaults to true.
     *
     * @return string  The corresponding word representation for the currency
     *
     * @access public
     * @author Piotr Klaban <makler@man.torun.pl>
     * @since  Numbers_Words 0.4
     */
    function toCurrencyWords($int_curr, $decimal, $fraction = false, $convert_fraction = true)
    {
        $int_curr = strtoupper($int_curr);
        if (!isset($this->_currency_names[$int_curr])) {
            $int_curr = $this->def_currency;
        }
        $curr_names = $this->_currency_names[$int_curr];

        $ret = trim($this->_toWords($decimal));
        $lev = ($decimal == 1) ? 0 : 1;
        if ($lev > 0) {
            if (count($curr_names[0]) > 1) {
                $ret .= $this->_sep . $curr_names[0][$lev];
            } else {
                $ret .= $this->_sep . $curr_names[0][0] . 's';
            }
        } else {
            $ret .= $this->_sep . $curr_names[0][0];
        }

        if ($fraction !== false) {
            if ($convert_fraction) {
                $ret .= $this->_sep . trim($this->_toWords($fraction));
            } else {
                $ret .= $this->_sep . $fraction;
            }
            $lev = ($fraction == 1) ? 0 : 1;
            if ($lev > 0) {
                if (count($curr_names[1]) > 1) {
                    $ret .= $this->_sep . $curr_names[1][$lev];
                } else {
                    $ret .= $this->_sep . $curr_names[1][0] . 's';
                }
            } else {
                $ret .= $this->_sep . $curr_names[1][0];
            }
        }
        return $ret;
    }
    // }}}
}
