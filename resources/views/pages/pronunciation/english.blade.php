@extends('pages.pronunciation.pronunciation')

@section('words_array')

    @php

        $words = array (
   0 =>
   array (
     'word' => 'lip',
     'audio' =>
     array (
       0 => '/files/english/mp3/lip-us.mp3',
       1 => '/files/english/mp3/lip-uk.mp3',
     ),
   ),
   1 =>
   array (
     'word' => 'happy',
     'audio' =>
     array (
       0 => 'https://dictionary.cambridge.org/media/english-russian/uk_pron/u/ukh/ukhap/ukhapha010.mp3',
       1 => 'https://dictionary.cambridge.org/media/english-russian/us_pron/h/hap/happy/happy.mp3',
     ),
   ),
   2 =>
   array (
     'word' => 'baby',
     'audio' =>
     array (
       0 => 'https://dictionary.cambridge.org/media/english-russian/uk_pron/u/uka/ukazt/ukazt__013.mp3',
       1 => 'https://dictionary.cambridge.org/media/english-russian/us_pron/b/bab/baby_/baby.mp3',
     ),
   ),
   3 =>
   array (
     'word' => 'chart',
     'audio' =>
     array (
       0 => '/files/english/mp3/chart-uk.mp3',
       1 => '/files/english/mp3/chart-us.mp3',
     ),
   ),
   4 =>
   array (
     'word' => 'bitter',
     'audio' =>
     array (
       0 => '/files/english/mp3/bitter-uk.mp3',
       1 => '/files/english/mp3/bitter-us.mp3',
     ),
   ),
   5 =>
   array (
     'word' => 'edit',
     'audio' =>
     array (
       0 => '/files/english/mp3/edit-uk.mp3',
       1 => '/files/english/mp3/edit-us.mp3',
     ),
   ),
   6 =>
   array (
     'word' => 'cave',
     'audio' =>
     array (
       0 => '/files/english/mp3/cave-uk.mp3',
       1 => '/files/english/mp3/cave-us.mp3',
     ),
   ),
   7 =>
   array (
     'word' => 'take',
     'audio' =>
     array (
       0 => '/files/english/mp3/take-uk.mp3',
       1 => '/files/english/mp3/take-us.mp3',
     ),
   ),
   8 =>
   array (
     'word' => 'black',
     'audio' =>
     array (
       0 => '/files/english/mp3/black-uk.mp3',
       1 => '/files/english/mp3/black-us.mp3',
     ),
   ),
   9 =>
   array (
     'word' => 'luck',
     'audio' =>
     array (
       0 => '/files/english/mp3/luck-uk.mp3',
       1 => '/files/english/mp3/luck-us.mp3',
     ),
   ),
   10 =>
   array (
     'word' => 'cap',
     'audio' =>
     array (
       0 => '/files/english/mp3/cap-uk.mp3',
       1 => '/files/english/mp3/cap-us.mp3',
     ),
   ),
   11 =>
   array (
     'word' => 'clean',
     'audio' =>
     array (
       0 => '/files/english/mp3/clean-uk.mp3',
       1 => '/files/english/mp3/clean-us.mp3',
     ),
   ),
   12 =>
   array (
     'word' => 'economic',
     'audio' =>
     array (
       0 => '/files/english/mp3/economic-uk.mp3',
       1 => '/files/english/mp3/economic-us.mp3',
     ),
   ),
   13 =>
   array (
     'word' => 'school',
     'audio' =>
     array (
       0 => '/files/english/mp3/school-uk.mp3',
       1 => '/files/english/mp3/school-us.mp3',
     ),
   ),
   14 =>
   array (
     'word' => 'echo',
     'audio' =>
     array (
       0 => '/files/english/mp3/echo-uk.mp3',
       1 => '/files/english/mp3/echo-us.mp3',
     ),
   ),
   15 =>
   array (
     'word' => 'six',
     'audio' =>
     array (
       0 => '/files/english/mp3/six-uk.mp3',
       1 => '/files/english/mp3/six-us.mp3',
     ),
   ),
   16 =>
   array (
     'word' => 'quick',
     'audio' =>
     array (
       0 => '/files/english/mp3/quick-uk.mp3',
       1 => '/files/english/mp3/quick-us.mp3',
     ),
   ),
   17 =>
   array (
     'word' => 'game',
     'audio' =>
     array (
       0 => '/files/english/mp3/game-uk.mp3',
       1 => '/files/english/mp3/game-us.mp3',
     ),
   ),
   18 =>
   array (
     'word' => 'glad',
     'audio' =>
     array (
       0 => '/files/english/mp3/glad-uk.mp3',
       1 => '/files/english/mp3/glad-us.mp3',
     ),
   ),
   19 =>
   array (
     'word' => 'bag',
     'audio' =>
     array (
       0 => '/files/english/mp3/bag-uk.mp3',
       1 => '/files/english/mp3/bag-us.mp3',
     ),
   ),
   20 =>
   array (
     'word' => 'guest',
     'audio' =>
     array (
       0 => '/files/english/mp3/guest-uk.mp3',
       1 => '/files/english/mp3/guest-us.mp3',
     ),
   ),
   21 =>
   array (
     'word' => 'exam',
     'audio' =>
     array (
       0 => '/files/english/mp3/exam-uk.mp3',
       1 => '/files/english/mp3/exam-us.mp3',
     ),
   ),
   22 =>
   array (
     'word' => 'language',
     'audio' =>
     array (
       0 => '/files/english/mp3/language-uk.mp3',
       1 => '/files/english/mp3/language-us.mp3',
     ),
   ),
   23 =>
   array (
     'word' => 'chess',
     'audio' =>
     array (
       0 => '/files/english/mp3/chess-uk.mp3',
       1 => '/files/english/mp3/chess-us.mp3',
     ),
   ),
   24 =>
   array (
     'word' => 'match',
     'audio' =>
     array (
       0 => '/files/english/mp3/match-uk.mp3',
       1 => '/files/english/mp3/match-us.mp3',
     ),
   ),
   25 =>
   array (
     'word' => 'picture',
     'audio' =>
     array (
       0 => '/files/english/mp3/picture-uk.mp3',
       1 => '/files/english/mp3/picture-us.mp3',
     ),
   ),
   26 =>
   array (
     'word' => 'page',
     'audio' =>
     array (
       0 => '/files/english/mp3/page-uk.mp3',
       1 => '/files/english/mp3/page-us.mp3',
     ),
   ),
   27 =>
   array (
     'word' => 'gin',
     'audio' =>
     array (
       0 => '/files/english/mp3/gin-uk.mp3',
       1 => '/files/english/mp3/gin-us.mp3',
     ),
   ),
   28 =>
   array (
     'word' => 'gym',
     'audio' =>
     array (
       0 => '/files/english/mp3/gym-uk.mp3',
       1 => '/files/english/mp3/gym-us.mp3',
     ),
   ),
   29 =>
   array (
     'word' => 'jam',
     'audio' =>
     array (
       0 => '/files/english/mp3/jam-uk.mp3',
       1 => '/files/english/mp3/jam-us.mp3',
     ),
   ),
   30 =>
   array (
     'word' => 'men',
     'audio' =>
     array (
       0 => '/files/english/mp3/men-uk.mp3',
       1 => '/files/english/mp3/men-us.mp3',
     ),
   ),
   31 =>
   array (
     'word' => 'bomb',
     'audio' =>
     array (
       0 => '/files/english/mp3/bomb-uk.mp3',
       1 => '/files/english/mp3/bomb-us.mp3',
     ),
   ),
   32 =>
   array (
     'word' => 'autumn',
     'audio' =>
     array (
       0 => '/files/english/mp3/autumn-uk.mp3',
       1 => '/files/english/mp3/autumn-us.mp3',
     ),
   ),
   33 =>
   array (
     'word' => 'nail',
     'audio' =>
     array (
       0 => '/files/english/mp3/nail-uk.mp3',
       1 => '/files/english/mp3/nail-us.mp3',
     ),
   ),
   34 =>
   array (
     'word' => 'know',
     'audio' =>
     array (
       0 => '/files/english/mp3/know-uk.mp3',
       1 => '/files/english/mp3/know-us.mp3',
     ),
   ),
   35 =>
   array (
     'word' => 'gnat',
     'audio' =>
     array (
         'https://dictionary.cambridge.org/media/english/uk_pron/u/ukg/ukglu/ukglutt014.mp3',
         'https://dictionary.cambridge.org/media/english/us_pron/g/gna/gnat_/gnat.mp3'
     ),
   ),
   36 =>
   array (
     'word' => 'often',
     'audio' =>
     array (
       0 => '/files/english/mp3/often-uk.mp3',
       1 => '/files/english/mp3/often-us.mp3',
     ),
   ),
   37 =>
   array (
     'word' => 'thing',
     'audio' =>
     array (
       0 => '/files/english/mp3/thing-uk.mp3',
       1 => '/files/english/mp3/thing-us.mp3',
     ),
   ),
   38 =>
   array (
     'word' => 'english',
     'audio' =>
     array (
         'https://dictionary.cambridge.org/media/english/uk_pron/u/uke/ukeng/ukengin003.mp3',
         'https://dictionary.cambridge.org/media/english/us_pron/e/eng/engli/english.mp3'
     ),
   ),
   39 =>
   array (
     'word' => 'angry',
     'audio' =>
     array (
       0 => '/files/english/mp3/angry-uk.mp3',
       1 => '/files/english/mp3/angry-us.mp3',
     ),
   ),
   40 =>
   array (
     'word' => 'ink',
     'audio' =>
     array (
       0 => '/files/english/mp3/ink-uk.mp3',
       1 => '/files/english/mp3/ink-us.mp3',
     ),
   ),
   41 =>
   array (
     'word' => 'fable',
     'audio' =>
     array (
       0 => '/files/english/mp3/fable-uk.mp3',
       1 => '/files/english/mp3/fable-us.mp3',
     ),
   ),
   42 =>
   array (
     'word' => 'phone',
     'audio' =>
     array (
       0 => '/files/english/mp3/phone-uk.mp3',
       1 => '/files/english/mp3/phone-us.mp3',
     ),
   ),
   43 =>
   array (
     'word' => 'tough',
     'audio' =>
     array (
       0 => '/files/english/mp3/tough-uk.mp3',
       1 => '/files/english/mp3/tough-us.mp3',
     ),
   ),
   44 =>
   array (
     'word' => 'vain',
     'audio' =>
     array (
       0 => '/files/english/mp3/vain-uk.mp3',
       1 => '/files/english/mp3/vain-us.mp3',
     ),
   ),
   45 =>
   array (
     'word' => 'thick',
     'audio' =>
     array (
       0 => '/files/english/mp3/thick-uk.mp3',
       1 => '/files/english/mp3/thick-us.mp3',
     ),
   ),
   46 =>
   array (
     'word' => 'faith',
     'audio' =>
     array (
       0 => '/files/english/mp3/faith-uk.mp3',
       1 => '/files/english/mp3/faith-us.mp3',
     ),
   ),
   47 =>
   array (
     'word' => 'this',
     'audio' =>
     array (
       0 => '/files/english/mp3/this-uk.mp3',
       1 => '/files/english/mp3/this-us.mp3',
     ),
   ),
   48 =>
   array (
     'word' => 'the',
     'audio' =>
     array (
         'https://dictionary.cambridge.org/media/english/uk_pron/e/epd/epd33/epd33125.mp3',
         'https://dictionary.cambridge.org/media/english/us_pron/t/the/the_0/the_01_00.mp3'
     ),
   ),
   49 =>
   array (
     'word' => 'bathe',
     'audio' =>
     array (
       0 => '/files/english/mp3/bathe-uk.mp3',
       1 => '/files/english/mp3/bathe-us.mp3',
     ),
   ),
   50 =>
   array (
     'word' => 'nice',
     'audio' =>
     array (
         'https://dictionary.cambridge.org/media/english/uk_pron/u/ukn/uknew/uknewsc028.mp3',
         'https://dictionary.cambridge.org/media/english/us_pron/n/nic/nice_/nice.mp3'
     ),
   ),
   51 =>
   array (
     'word' => 'civil',
     'audio' =>
     array (
       0 => '/files/english/mp3/civil-uk.mp3',
       1 => '/files/english/mp3/civil-us.mp3',
     ),
   ),
   52 =>
   array (
     'word' => 'icy',
     'audio' =>
     array (
       0 => '/files/english/mp3/icy-uk.mp3',
       1 => '/files/english/mp3/icy-us.mp3',
     ),
   ),
   53 =>
   array (
     'word' => 'zone',
     'audio' =>
     array (
       0 => '/files/english/mp3/zone-uk.mp3',
       1 => '/files/english/mp3/zone-us.mp3',
     ),
   ),
   54 =>
   array (
     'word' => 'pens',
     'audio' =>
     array (
         'https://dictionary.cambridge.org/media/english/uk_pron/u/ukp/ukpee/ukpeewe016.mp3',
         'https://dictionary.cambridge.org/media/english/us_pron/p/pen/pen__/pen.mp3'
     ),
   ),
   55 =>
   array (
     'word' => 'bees',
     'audio' =>
     array (
         'https://dictionary.cambridge.org/media/english/uk_pron/u/uka/ukazt/ukazt__003.mp3',
         'https://dictionary.cambridge.org/media/english/us_pron/b/b__/b____/b.mp3'
     ),
   ),
   56 =>
   array (
     'word' => 'visit',
     'audio' =>
     array (
       0 => '/files/english/mp3/visit-uk.mp3',
       1 => '/files/english/mp3/visit-us.mp3',
     ),
   ),
   57 =>
   array (
     'word' => 'she',
     'audio' =>
     array (
         'https://dictionary.cambridge.org/media/english/uk_pron/u/uks/uksha/ukshari024.mp3',
         'https://dictionary.cambridge.org/media/english/us_pron/s/she/she__/she.mp3'
     ),
   ),
   58 =>
   array (
     'word' => 'ship',
     'audio' =>
     array (
       0 => '/files/english/mp3/ship-uk.mp3',
       1 => '/files/english/mp3/ship-us.mp3',
     ),
   ),
   59 =>
   array (
     'word' => 'sugar',
     'audio' =>
     array (
       0 => '/files/english/mp3/sugar-uk.mp3',
       1 => '/files/english/mp3/sugar-us.mp3',
     ),
   ),
   60 =>
   array (
     'word' => 'sure',
     'audio' =>
     array (
       0 => '/files/english/mp3/sure-uk.mp3',
       1 => '/files/english/mp3/sure-us.mp3',
     ),
   ),
   61 =>
   array (
     'word' => 'asian',
     'audio' =>
     array (
         'https://dictionary.cambridge.org/media/english/uk_pron/u/uka/ukasb/ukasbes029.mp3',
         'https://dictionary.cambridge.org/media/english/us_pron/a/asi/asian/asian.mp3'
     ),
   ),
   62 =>
   array (
     'word' => 'depreciate',
     'audio' =>
     array (
         'https://dictionary.cambridge.org/media/english/uk_pron/u/ukd/ukdep/ukdepre003.mp3',
         'https://dictionary.cambridge.org/media/english/us_pron/d/dep/depre/depreciate.mp3'
     ),
   ),
   63 =>
   array (
     'word' => 'attention',
     'audio' =>
     array (
         'https://dictionary.cambridge.org/media/english/uk_pron/u/uka/ukato/ukatomi026.mp3',
         'https://dictionary.cambridge.org/media/english/us_pron/e/eus/eus70/eus70362.mp3'
     ),
   ),
   64 =>
   array (
     'word' => 'tension',
     'audio' =>
     array (
       0 => '/files/english/mp3/tension-uk.mp3',
       1 => '/files/english/mp3/tension-us.mp3',
     ),
   ),
   65 =>
   array (
     'word' => 'session',
     'audio' =>
     array (
       0 => '/files/english/mp3/session-uk.mp3',
       1 => '/files/english/mp3/session-us.mp3',
     ),
   ),
   66 =>
   array (
     'word' => 'usual',
     'audio' =>
     array (
       0 => '/files/english/mp3/usual-uk.mp3',
       1 => '/files/english/mp3/usual-us.mp3',
     ),
   ),
   67 =>
   array (
     'word' => 'mirage',
     'audio' =>
     array (
         'https://dictionary.cambridge.org/media/english/uk_pron/u/ukm/ukmin/ukminim029.mp3',
         'https://dictionary.cambridge.org/media/english/us_pron/m/mir/mirag/mirage.mp3'
     ),
   ),
   68 =>
   array (
     'word' => 'pleasure',
     'audio' =>
     array (
       0 => '/files/english/mp3/pleasure-uk.mp3',
       1 => '/files/english/mp3/pleasure-us.mp3',
     ),
   ),
   69 =>
   array (
     'word' => 'revision',
     'audio' =>
     array (
       0 => '/files/english/mp3/revision-uk.mp3',
       1 => '/files/english/mp3/revision-us.mp3',
     ),
   ),
   70 =>
   array (
     'word' => 'hello',
     'audio' =>
     array (
       0 => '/files/english/mp3/hello-uk.mp3',
       1 => '/files/english/mp3/hello-us.mp3',
     ),
   ),
   71 =>
   array (
     'word' => 'hand',
     'audio' =>
     array (
         'https://dictionary.cambridge.org/media/english/uk_pron/u/ukh/ukhal/ukhallw029.mp3',
         'https://dictionary.cambridge.org/media/english/us_pron/h/han/hand_/hand.mp3'
     ),
   ),
   72 =>
   array (
     'word' => 'who',
     'audio' =>
     array (
       0 => '/files/english/mp3/who-uk.mp3',
       1 => '/files/english/mp3/who-us.mp3',
     ),
   ),
   73 =>
   array (
     'word' => 'label',
     'audio' =>
     array (
       0 => '/files/english/mp3/label-uk.mp3',
       1 => '/files/english/mp3/label-us.mp3',
     ),
   ),
   74 =>
   array (
     'word' => 'we',
     'audio' =>
     array (
         'https://dictionary.cambridge.org/media/english/uk_pron/u/ukw/ukwax/ukwaxwo014.mp3',
         'https://dictionary.cambridge.org/media/english/us_pron/w/we_/we___/we.mp3'
     ),
   ),
   75 =>
   array (
     'word' => 'what',
     'audio' =>
     array (
       0 => '/files/english/mp3/what-uk.mp3',
       1 => '/files/english/mp3/what-us.mp3',
     ),
   ),
   76 =>
   array (
     'word' => 'once',
     'audio' =>
     array (
       0 => '/files/english/mp3/once-uk.mp3',
       1 => '/files/english/mp3/once-us.mp3',
     ),
   ),
   77 =>
   array (
     'word' => 'read',
     'audio' =>
     array (
       0 => '/files/english/mp3/read-uk.mp3',
       1 => '/files/english/mp3/read-us.mp3',
     ),
   ),
   78 =>
   array (
     'word' => 'write',
     'audio' =>
     array (
       0 => '/files/english/mp3/write-uk.mp3',
       1 => '/files/english/mp3/write-us.mp3',
     ),
   ),
   79 =>
   array (
     'word' => 'yes',
     'audio' =>
     array (
         'https://dictionary.cambridge.org/media/english/uk_pron/u/uky/ukyd_/ukyd___024.mp3',
         'https://dictionary.cambridge.org/media/english/us_pron/y/yes/yes__/yes.mp3'
     ),
   ),
   80 =>
   array (
     'word' => 'me',
     'audio' =>
     array (
         'https://dictionary.cambridge.org/media/english/uk_pron/u/ukm/ukmcc/ukmccar009.mp3',
         'https://dictionary.cambridge.org/media/english/us_pron/m/me_/me___/me.mp3'
     ),
   ),
   81 =>
   array (
     'word' => 'be',
     'audio' =>
     array (
       0 => '/files/english/mp3/be-uk.mp3',
       1 => '/files/english/mp3/be-us.mp3',
     ),
   ),
   82 =>
   array (
     'word' => 'Pete',
     'audio' =>
     array (
         'https://dictionary.cambridge.org/media/english/uk_pron/u/ukp/ukpet/ukpeter001.mp3',
         'https://dictionary.cambridge.org/media/english/us_pron/u/usp/uspes/uspestl004.mp3'
     ),
   ),
   83 =>
   array (
     'word' => 'evening',
     'audio' =>
     array (
       0 => '/files/english/mp3/evening-uk.mp3',
       1 => '/files/english/mp3/evening-us.mp3',
     ),
   ),
   84 =>
   array (
     'word' => 'tree',
     'audio' =>
     array (
       0 => '/files/english/mp3/tree-uk.mp3',
       1 => '/files/english/mp3/tree-us.mp3',
     ),
   ),
   85 =>
   array (
     'word' => 'street',
     'audio' =>
     array (
       0 => '/files/english/mp3/street-uk.mp3',
       1 => '/files/english/mp3/street-us.mp3',
     ),
   ),
   86 =>
   array (
     'word' => 'meet',
     'audio' =>
     array (
       0 => '/files/english/mp3/meet-uk.mp3',
       1 => '/files/english/mp3/meet-us.mp3',
     ),
   ),
   87 =>
   array (
     'word' => 'see',
     'audio' =>
     array (
       0 => '/files/english/mp3/see-uk.mp3',
       1 => '/files/english/mp3/see-us.mp3',
     ),
   ),
   88 =>
   array (
     'word' => 'seat',
     'audio' =>
     array (
       0 => '/files/english/mp3/seat-uk.mp3',
       1 => '/files/english/mp3/seat-us.mp3',
     ),
   ),
   89 =>
   array (
     'word' => 'tea',
     'audio' =>
     array (
       0 => '/files/english/mp3/tea-uk.mp3',
       1 => '/files/english/mp3/tea-us.mp3',
     ),
   ),
   90 =>
   array (
     'word' => 'team',
     'audio' =>
     array (
       0 => '/files/english/mp3/team-uk.mp3',
       1 => '/files/english/mp3/team-us.mp3',
     ),
   ),
   91 =>
   array (
     'word' => 'ceiling',
     'audio' =>
     array (
       0 => '/files/english/mp3/ceiling-uk.mp3',
       1 => '/files/english/mp3/ceiling-us.mp3',
     ),
   ),
   92 =>
   array (
     'word' => 'believe',
     'audio' =>
     array (
       0 => '/files/english/mp3/believe-uk.mp3',
       1 => '/files/english/mp3/believe-us.mp3',
     ),
   ),
   93 =>
   array (
     'word' => 'field',
     'audio' =>
     array (
       0 => '/files/english/mp3/field-uk.mp3',
       1 => '/files/english/mp3/field-us.mp3',
     ),
   ),
   94 =>
   array (
     'word' => 'last',
     'audio' =>
     array (
       0 => '/files/english/mp3/last-uk.mp3',
       1 => '/files/english/mp3/last-us.mp3',
     ),
   ),
   95 =>
   array (
     'word' => 'ask',
     'audio' =>
     array (
       0 => '/files/english/mp3/ask-uk.mp3',
       1 => '/files/english/mp3/ask-us.mp3',
     ),
   ),
   96 =>
   array (
     'word' => 'task',
     'audio' =>
     array (
       0 => '/files/english/mp3/task-uk.mp3',
       1 => '/files/english/mp3/task-us.mp3',
     ),
   ),
   97 =>
   array (
     'word' => 'grass',
     'audio' =>
     array (
       0 => '/files/english/mp3/grass-uk.mp3',
       1 => '/files/english/mp3/grass-us.mp3',
     ),
   ),
   98 =>
   array (
     'word' => 'grasp',
     'audio' =>
     array (
       0 => '/files/english/mp3/grasp-uk.mp3',
       1 => '/files/english/mp3/grasp-us.mp3',
     ),
   ),
   99 =>
   array (
     'word' => 'rather',
     'audio' =>
     array (
       0 => '/files/english/mp3/rather-uk.mp3',
       1 => '/files/english/mp3/rather-us.mp3',
     ),
   ),
   100 =>
   array (
     'word' => 'car',
     'audio' =>
     array (
       0 => '/files/english/mp3/car-uk.mp3',
       1 => '/files/english/mp3/car-us.mp3',
     ),
   ),
   101 =>
   array (
     'word' => 'mark',
     'audio' =>
     array (
       0 => '/files/english/mp3/mark-uk.mp3',
       1 => '/files/english/mp3/mark-us.mp3',
     ),
   ),
   102 =>
   array (
     'word' => 'calm',
     'audio' =>
     array (
       0 => '/files/english/mp3/calm-uk.mp3',
       1 => '/files/english/mp3/calm-us.mp3',
     ),
   ),
   103 =>
   array (
     'word' => 'half',
     'audio' =>
     array (
       0 => '/files/english/mp3/half-uk.mp3',
       1 => '/files/english/mp3/half-us.mp3',
     ),
   ),
   104 =>
   array (
     'word' => 'heart',
     'audio' =>
     array (
       0 => '/files/english/mp3/heart-uk.mp3',
       1 => '/files/english/mp3/heart-us.mp3',
     ),
   ),
   105 =>
   array (
     'word' => 'or',
     'audio' =>
     array (
         'https://dictionary.cambridge.org/media/english/uk_pron/u/uko/ukoak/ukoak__004.mp3',
         'https://dictionary.cambridge.org/media/english/us_pron/e/eus/eus75/eus75267.mp3'
     ),
   ),
   106 =>
   array (
     'word' => 'fork',
     'audio' =>
     array (
       0 => '/files/english/mp3/fork-uk.mp3',
       1 => '/files/english/mp3/fork-us.mp3',
     ),
   ),
   107 =>
   array (
     'word' => 'more',
     'audio' =>
     array (
       0 => '/files/english/mp3/more-uk.mp3',
       1 => '/files/english/mp3/more-us.mp3',
     ),
   ),
   108 =>
   array (
     'word' => 'door',
     'audio' =>
     array (
       0 => '/files/english/mp3/door-uk.mp3',
       1 => '/files/english/mp3/door-us.mp3',
     ),
   ),
   109 =>
   array (
     'word' => 'floor',
     'audio' =>
     array (
       0 => '/files/english/mp3/floor-uk.mp3',
       1 => '/files/english/mp3/floor-us.mp3',
     ),
   ),
   110 =>
   array (
     'word' => 'chalk',
     'audio' =>
     array (
       0 => '/files/english/mp3/chalk-uk.mp3',
       1 => '/files/english/mp3/chalk-us.mp3',
     ),
   ),
   111 =>
   array (
     'word' => 'talk',
     'audio' =>
     array (
       0 => '/files/english/mp3/talk-uk.mp3',
       1 => '/files/english/mp3/talk-us.mp3',
     ),
   ),
   112 =>
   array (
     'word' => 'also',
     'audio' =>
     array (
       0 => '/files/english/mp3/also-uk.mp3',
       1 => '/files/english/mp3/also-us.mp3',
     ),
   ),
   113 =>
   array (
     'word' => 'small',
     'audio' =>
     array (
       0 => '/files/english/mp3/small-uk.mp3',
       1 => '/files/english/mp3/small-us.mp3',
     ),
   ),
   114 =>
   array (
     'word' => 'war',
     'audio' =>
     array (
       0 => '/files/english/mp3/war-uk.mp3',
       1 => '/files/english/mp3/war-us.mp3',
     ),
   ),
   115 =>
   array (
     'word' => 'wharf',
     'audio' =>
     array (
       0 => '/files/english/mp3/wharf-uk.mp3',
       1 => '/files/english/mp3/wharf-us.mp3',
     ),
   ),
   116 =>
   array (
     'word' => 'quarter',
     'audio' =>
     array (
       0 => '/files/english/mp3/quarter-uk.mp3',
       1 => '/files/english/mp3/quarter-us.mp3',
     ),
   ),
   117 =>
   array (
     'word' => 'author',
     'audio' =>
     array (
       0 => '/files/english/mp3/author-uk.mp3',
       1 => '/files/english/mp3/author-us.mp3',
     ),
   ),
   118 =>
   array (
     'word' => 'auger',
     'audio' =>
     array (
         'https://dictionary.cambridge.org/media/english/uk_pron/u/uka/ukaud/ukaudac016.mp3',
         'https://dictionary.cambridge.org/media/english/us_pron/a/aug/augur/augur.mp3'
     ),
   ),
   119 =>
   array (
     'word' => 'saw',
     'audio' =>
     array (
       0 => '/files/english/mp3/saw-uk.mp3',
       1 => '/files/english/mp3/saw-us.mp3',
     ),
   ),
   120 =>
   array (
     'word' => 'dawn',
     'audio' =>
     array (
       0 => '/files/english/mp3/dawn-uk.mp3',
       1 => '/files/english/mp3/dawn-us.mp3',
     ),
   ),
   121 =>
   array (
     'word' => 'taught',
     'audio' =>
     array (
         'https://dictionary.cambridge.org/media/english/uk_pron/u/ukt/uktas/uktaste019.mp3',
         'https://dictionary.cambridge.org/media/english/us_pron/t/tau/taugh/taught.mp3'
     ),
   ),
   122 =>
   array (
     'word' => 'rule',
     'audio' =>
     array (
       0 => '/files/english/mp3/rule-uk.mp3',
       1 => '/files/english/mp3/rule-us.mp3',
     ),
   ),
   123 =>
   array (
     'word' => 'blue',
     'audio' =>
     array (
       0 => '/files/english/mp3/blue-uk.mp3',
       1 => '/files/english/mp3/blue-us.mp3',
     ),
   ),
   124 =>
   array (
     'word' => 'grew',
     'audio' =>
     array (
         'https://dictionary.cambridge.org/media/english/uk_pron/u/ukg/ukgre/ukgrena002.mp3',
         'https://dictionary.cambridge.org/media/english/us_pron/g/gre/grew_/grew.mp3'
     ),
   ),
   125 =>
   array (
     'word' => 'juvenile',
     'audio' =>
     array (
         'https://dictionary.cambridge.org/media/english/uk_pron/u/ukj/ukjuv/ukjuven001.mp3',
         'https://dictionary.cambridge.org/media/english/us_pron/j/juv/juven/juvenile.mp3'
     ),
   ),
   126 =>
   array (
     'word' => 'spoon',
     'audio' =>
     array (
       0 => '/files/english/mp3/spoon-uk.mp3',
       1 => '/files/english/mp3/spoon-us.mp3',
     ),
   ),
   127 =>
   array (
     'word' => 'too',
     'audio' =>
     array (
         'https://dictionary.cambridge.org/media/english/uk_pron/u/uka/uka30/uka30053.mp3',
         'https://dictionary.cambridge.org/media/english/us_pron/t/to_/to___/to.mp3'
     ),
   ),
   128 =>
   array (
     'word' => 'group',
     'audio' =>
     array (
       0 => '/files/english/mp3/group-uk.mp3',
       1 => '/files/english/mp3/group-us.mp3',
     ),
   ),
   129 =>
   array (
     'word' => 'soup',
     'audio' =>
     array (
       0 => '/files/english/mp3/soup-uk.mp3',
       1 => '/files/english/mp3/soup-us.mp3',
     ),
   ),
   130 =>
   array (
     'word' => 'you',
     'audio' =>
     array (
         'https://dictionary.cambridge.org/media/english/uk_pron/u/uke/ukevi/ukevil_013.mp3',
         'https://dictionary.cambridge.org/media/english/us_pron/u/u__/u____/u.mp3'
     ),
   ),
   131 =>
   array (
     'word' => 'through',
     'audio' =>
     array (
       0 => '/files/english/mp3/through-uk.mp3',
       1 => '/files/english/mp3/through-us.mp3',
     ),
   ),
   132 =>
   array (
     'word' => 'mule',
     'audio' =>
     array (
       0 => '/files/english/mp3/mule-uk.mp3',
       1 => '/files/english/mp3/mule-us.mp3',
     ),
   ),
   133 =>
   array (
     'word' => 'due',
     'audio' =>
     array (
       0 => '/files/english/mp3/due-uk.mp3',
       1 => '/files/english/mp3/due-us.mp3',
     ),
   ),
   134 =>
   array (
     'word' => 'institute',
     'audio' =>
     array (
       0 => '/files/english/mp3/institute-uk.mp3',
       1 => '/files/english/mp3/institute-us.mp3',
     ),
   ),
   135 =>
   array (
     'word' => 'new',
     'audio' =>
     array (
       0 => '/files/english/mp3/new-uk.mp3',
       1 => '/files/english/mp3/new-us.mp3',
     ),
   ),
   136 =>
   array (
     'word' => 'few',
     'audio' =>
     array (
       0 => '/files/english/mp3/few-uk.mp3',
       1 => '/files/english/mp3/few-us.mp3',
     ),
   ),
   137 =>
   array (
     'word' => 'dew',
     'audio' =>
     array (
       0 => '/files/english/mp3/dew-uk.mp3',
       1 => '/files/english/mp3/dew-us.mp3',
     ),
   ),
   138 =>
   array (
     'word' => 'beautiful',
     'audio' =>
     array (
         'https://dictionary.cambridge.org/media/english/uk_pron/u/ukb/ukbea/ukbeau_009.mp3',
         'https://dictionary.cambridge.org/media/english/us_pron/e/eus/eus70/eus70469.mp3'
     ),
   ),
   139 =>
   array (
     'word' => 'juice',
     'audio' =>
     array (
       0 => '/files/english/mp3/juice-uk.mp3',
       1 => '/files/english/mp3/juice-us.mp3',
     ),
   ),
   140 =>
   array (
     'word' => 'her',
     'audio' =>
     array (
         'https://dictionary.cambridge.org/media/english/uk_pron/u/ukh/ukhen/ukhenpe008.mp3',
         'https://dictionary.cambridge.org/media/english/us_pron/h/her/her__/her.mp3'
     ),
   ),
   141 =>
   array (
     'word' => 'firm',
     'audio' =>
     array (
       0 => '/files/english/mp3/firm-uk.mp3',
       1 => '/files/english/mp3/firm-us.mp3',
     ),
   ),
   142 =>
   array (
     'word' => 'bird',
     'audio' =>
     array (
       0 => '/files/english/mp3/bird-uk.mp3',
       1 => '/files/english/mp3/bird-us.mp3',
     ),
   ),
   143 =>
   array (
     'word' => 'fur',
     'audio' =>
     array (
       0 => '/files/english/mp3/fur-uk.mp3',
       1 => '/files/english/mp3/fur-us.mp3',
     ),
   ),
   144 =>
   array (
     'word' => 'work',
     'audio' =>
     array (
       0 => '/files/english/mp3/work-uk.mp3',
       1 => '/files/english/mp3/work-us.mp3',
     ),
   ),
   145 =>
   array (
     'word' => 'word',
     'audio' =>
     array (
       0 => '/files/english/mp3/word-uk.mp3',
       1 => '/files/english/mp3/word-us.mp3',
     ),
   ),
   146 =>
   array (
     'word' => 'learn',
     'audio' =>
     array (
       0 => '/files/english/mp3/learn-uk.mp3',
       1 => '/files/english/mp3/learn-us.mp3',
     ),
   ),
   147 =>
   array (
     'word' => 'heard',
     'audio' =>
     array (
       0 => '/files/english/mp3/heard-uk.mp3',
       1 => '/files/english/mp3/heard-us.mp3',
     ),
   ),
   148 =>
   array (
     'word' => 'in',
     'audio' =>
     array (
         'https://dictionary.cambridge.org/media/english/uk_pron/u/uki/ukimp/ukimpro019.mp3',
         'https://dictionary.cambridge.org/media/english/us_pron/i/in_/in___/in.mp3'
     ),
   ),
   149 =>
   array (
     'word' => 'if',
     'audio' =>
     array (
     ),
   ),
   150 =>
   array (
     'word' => 'myth',
     'audio' =>
     array (
       0 => '/files/english/mp3/myth-uk.mp3',
       1 => '/files/english/mp3/myth-us.mp3',
     ),
   ),
   151 =>
   array (
     'word' => 'comrade',
     'audio' =>
     array (
         'https://dictionary.cambridge.org/media/english/uk_pron/u/ukc/ukcom/ukcompr018.mp3',
         'https://dictionary.cambridge.org/media/english/us_pron/c/com/comra/comrade.mp3'
     ),
   ),
   152 =>
   array (
     'word' => 'monday',
     'audio' =>
     array (
         'https://dictionary.cambridge.org/media/english/uk_pron/u/ukm/ukmon/ukmonac010.mp3',
         'https://dictionary.cambridge.org/media/english/us_pron/m/mon/monda/monday.mp3'
     ),
   ),
   153 =>
   array (
     'word' => 'begin',
     'audio' =>
     array (
       0 => '/files/english/mp3/begin-uk.mp3',
       1 => '/files/english/mp3/begin-us.mp3',
     ),
   ),
   154 =>
   array (
     'word' => 'telephone',
     'audio' =>
     array (
       0 => '/files/english/mp3/telephone-uk.mp3',
       1 => '/files/english/mp3/telephone-us.mp3',
     ),
   ),
   155 =>
   array (
     'word' => 'mistake',
     'audio' =>
     array (
       0 => '/files/english/mp3/mistake-uk.mp3',
       1 => '/files/english/mp3/mistake-us.mp3',
     ),
   ),
   156 =>
   array (
     'word' => 'easy',
     'audio' =>
     array (
       0 => '/files/english/mp3/easy-uk.mp3',
       1 => '/files/english/mp3/easy-us.mp3',
     ),
   ),
   157 =>
   array (
     'word' => 'meddle',
     'audio' =>
     array (
         'https://dictionary.cambridge.org/media/english/uk_pron/u/ukm/ukmea/ukmeant030.mp3',
         'https://dictionary.cambridge.org/media/english/us_pron/m/med/meddl/meddle.mp3'
     ),
   ),
   158 =>
   array (
     'word' => 'pen',
     'audio' =>
     array (
       0 => '/files/english/mp3/pen-uk.mp3',
       1 => '/files/english/mp3/pen-us.mp3',
     ),
   ),
   159 =>
   array (
     'word' => 'lamp',
     'audio' =>
     array (
       0 => '/files/english/mp3/lamp-uk.mp3',
       1 => '/files/english/mp3/lamp-us.mp3',
     ),
   ),
   160 =>
   array (
     'word' => 'bad',
     'audio' =>
     array (
       0 => '/files/english/mp3/bad-uk.mp3',
       1 => '/files/english/mp3/bad-us.mp3',
     ),
   ),
   161 =>
   array (
     'word' => 'barrack',
     'audio' =>
     array (
         'https://dictionary.cambridge.org/media/english/uk_pron/u/ukb/ukbar/ukbaroq002.mp3',
         'https://dictionary.cambridge.org/media/english/us_pron/c/cus/cus00/cus00156.mp3'
     ),
   ),
   162 =>
   array (
     'word' => 'carry',
     'audio' =>
     array (
       0 => '/files/english/mp3/carry-uk.mp3',
       1 => '/files/english/mp3/carry-us.mp3',
     ),
   ),
   163 =>
   array (
     'word' => 'on',
     'audio' =>
     array (
       0 => '/files/english/mp3/on-uk.mp3',
       1 => '/files/english/mp3/on-us.mp3',
     ),
   ),
   164 =>
   array (
     'word' => 'not',
     'audio' =>
     array (
         'https://dictionary.cambridge.org/media/english/uk_pron/u/ukk/ukkno/ukknock005.mp3',
         'https://dictionary.cambridge.org/media/english/us_pron/k/kno/knot_/knot.mp3'
     ),
   ),
   165 =>
   array (
     'word' => 'sorry',
     'audio' =>
     array (
       0 => '/files/english/mp3/sorry-uk.mp3',
       1 => '/files/english/mp3/sorry-us.mp3',
     ),
   ),
   166 =>
   array (
     'word' => 'want',
     'audio' =>
     array (
       0 => '/files/english/mp3/want-uk.mp3',
       1 => '/files/english/mp3/want-us.mp3',
     ),
   ),
   167 =>
   array (
     'word' => 'water',
     'audio' =>
     array (
       0 => '/files/english/mp3/water-uk.mp3',
       1 => '/files/english/mp3/water-us.mp3',
     ),
   ),
   168 =>
   array (
     'word' => 'full',
     'audio' =>
     array (
       0 => '/files/english/mp3/full-uk.mp3',
       1 => '/files/english/mp3/full-us.mp3',
     ),
   ),
   169 =>
   array (
     'word' => 'pull',
     'audio' =>
     array (
       0 => '/files/english/mp3/pull-uk.mp3',
       1 => '/files/english/mp3/pull-us.mp3',
     ),
   ),
   170 =>
   array (
     'word' => 'book',
     'audio' =>
     array (
       0 => '/files/english/mp3/book-uk.mp3',
       1 => '/files/english/mp3/book-us.mp3',
     ),
   ),
   171 =>
   array (
     'word' => 'look',
     'audio' =>
     array (
       0 => '/files/english/mp3/look-uk.mp3',
       1 => '/files/english/mp3/look-us.mp3',
     ),
   ),
   172 =>
   array (
     'word' => 'good',
     'audio' =>
     array (
       0 => '/files/english/mp3/good-uk.mp3',
       1 => '/files/english/mp3/good-us.mp3',
     ),
   ),
   173 =>
   array (
     'word' => 'foot',
     'audio' =>
     array (
         'https://dictionary.cambridge.org/media/english/uk_pron/u/ukf/ukfol/ukfolks026.mp3',
         'https://dictionary.cambridge.org/media/english/us_pron/f/foo/foot_/foot.mp3'
     ),
   ),
   174 =>
   array (
     'word' => 'cup',
     'audio' =>
     array (
       0 => '/files/english/mp3/cup-uk.mp3',
       1 => '/files/english/mp3/cup-us.mp3',
     ),
   ),
   175 =>
   array (
     'word' => 'but',
     'audio' =>
     array (
       0 => '/files/english/mp3/but-uk.mp3',
       1 => '/files/english/mp3/but-us.mp3',
     ),
   ),
   176 =>
   array (
     'word' => 'mother',
     'audio' =>
     array (
         'https://dictionary.cambridge.org/media/english/uk_pron/u/ukm/ukmot/ukmothe001.mp3',
         'https://dictionary.cambridge.org/media/english/us_pron/m/mot/mothe/mother.mp3'
     ),
   ),
   177 =>
   array (
     'word' => 'come',
     'audio' =>
     array (
       0 => '/files/english/mp3/come-uk.mp3',
       1 => '/files/english/mp3/come-us.mp3',
     ),
   ),
   178 =>
   array (
     'word' => 'sun',
     'audio' =>
     array (
       0 => '/files/english/mp3/sun-uk.mp3',
       1 => '/files/english/mp3/sun-us.mp3',
     ),
   ),
   179 =>
   array (
     'word' => 'love',
     'audio' =>
     array (
       0 => '/files/english/mp3/love-uk.mp3',
       1 => '/files/english/mp3/love-us.mp3',
     ),
   ),
   180 =>
   array (
     'word' => 'one',
     'audio' =>
     array (
       0 => '/files/english/mp3/one-uk.mp3',
       1 => '/files/english/mp3/one-us.mp3',
     ),
   ),
   181 =>
   array (
     'word' => 'grammar',
     'audio' =>
     array (
       0 => '/files/english/mp3/grammar-uk.mp3',
       1 => '/files/english/mp3/grammar-us.mp3',
     ),
   ),
   182 =>
   array (
     'word' => 'teacher',
     'audio' =>
     array (
       0 => '/files/english/mp3/teacher-uk.mp3',
       1 => '/files/english/mp3/teacher-us.mp3',
     ),
   ),
   183 =>
   array (
     'word' => 'doctor',
     'audio' =>
     array (
       0 => '/files/english/mp3/doctor-uk.mp3',
       1 => '/files/english/mp3/doctor-us.mp3',
     ),
   ),
   184 =>
   array (
     'word' => 'library',
     'audio' =>
     array (
       0 => '/files/english/mp3/library-uk.mp3',
       1 => '/files/english/mp3/library-us.mp3',
     ),
   ),
   185 =>
   array (
     'word' => 'sentence',
     'audio' =>
     array (
       0 => '/files/english/mp3/sentence-uk.mp3',
       1 => '/files/english/mp3/sentence-us.mp3',
     ),
   ),
   186 =>
   array (
     'word' => 'difficult',
     'audio' =>
     array (
       0 => '/files/english/mp3/difficult-uk.mp3',
       1 => '/files/english/mp3/difficult-us.mp3',
     ),
   ),
   187 =>
   array (
     'word' => 'plane',
     'audio' =>
     array (
       0 => '/files/english/mp3/plane-uk.mp3',
       1 => '/files/english/mp3/plane-us.mp3',
     ),
   ),
   188 =>
   array (
     'word' => 'main',
     'audio' =>
     array (
       0 => '/files/english/mp3/main-uk.mp3',
       1 => '/files/english/mp3/main-us.mp3',
     ),
   ),
   189 =>
   array (
     'word' => 'day',
     'audio' =>
     array (
       0 => '/files/english/mp3/day-uk.mp3',
       1 => '/files/english/mp3/day-us.mp3',
     ),
   ),
   190 =>
   array (
     'word' => 'eight',
     'audio' =>
     array (
       0 => '/files/english/mp3/eight-uk.mp3',
       1 => '/files/english/mp3/eight-us.mp3',
     ),
   ),
   191 =>
   array (
     'word' => 'great',
     'audio' =>
     array (
       0 => '/files/english/mp3/great-uk.mp3',
       1 => '/files/english/mp3/great-us.mp3',
     ),
   ),
   192 =>
   array (
     'word' => 'tie',
     'audio' =>
     array (
       0 => '/files/english/mp3/tie-uk.mp3',
       1 => '/files/english/mp3/tie-us.mp3',
     ),
   ),
   193 =>
   array (
     'word' => 'life',
     'audio' =>
     array (
       0 => '/files/english/mp3/life-uk.mp3',
       1 => '/files/english/mp3/life-us.mp3',
     ),
   ),
   194 =>
   array (
     'word' => 'my',
     'audio' =>
     array (
         'https://dictionary.cambridge.org/media/english/uk_pron/u/ukm/ukmut/ukmutto011.mp3',
         'https://dictionary.cambridge.org/media/english/us_pron/m/my_/my___/my.mp3'
     ),
   ),
   195 =>
   array (
     'word' => 'type',
     'audio' =>
     array (
       0 => '/files/english/mp3/type-uk.mp3',
       1 => '/files/english/mp3/type-us.mp3',
     ),
   ),
   196 =>
   array (
     'word' => 'find',
     'audio' =>
     array (
       0 => '/files/english/mp3/find-uk.mp3',
       1 => '/files/english/mp3/find-us.mp3',
     ),
   ),
   197 =>
   array (
     'word' => 'light',
     'audio' =>
     array (
       0 => '/files/english/mp3/light-uk.mp3',
       1 => '/files/english/mp3/light-us.mp3',
     ),
   ),
   198 =>
   array (
     'word' => 'night',
     'audio' =>
     array (
       0 => '/files/english/mp3/night-uk.mp3',
       1 => '/files/english/mp3/night-us.mp3',
     ),
   ),
   199 =>
   array (
     'word' => 'point',
     'audio' =>
     array (
       0 => '/files/english/mp3/point-uk.mp3',
       1 => '/files/english/mp3/point-us.mp3',
     ),
   ),
   200 =>
   array (
     'word' => 'joint',
     'audio' =>
     array (
       0 => '/files/english/mp3/joint-uk.mp3',
       1 => '/files/english/mp3/joint-us.mp3',
     ),
   ),
   201 =>
   array (
     'word' => 'boy',
     'audio' =>
     array (
       0 => '/files/english/mp3/boy-uk.mp3',
       1 => '/files/english/mp3/boy-us.mp3',
     ),
   ),
   202 =>
   array (
     'word' => 'toy',
     'audio' =>
     array (
       0 => '/files/english/mp3/toy-uk.mp3',
       1 => '/files/english/mp3/toy-us.mp3',
     ),
   ),
   203 =>
   array (
     'word' => 'now',
     'audio' =>
     array (
       0 => '/files/english/mp3/now-uk.mp3',
       1 => '/files/english/mp3/now-us.mp3',
     ),
   ),
   204 =>
   array (
     'word' => 'out',
     'audio' =>
     array (
       0 => '/files/english/mp3/out-uk.mp3',
       1 => '/files/english/mp3/out-us.mp3',
     ),
   ),
   205 =>
   array (
     'word' => 'brown',
     'audio' =>
     array (
       0 => '/files/english/mp3/brown-uk.mp3',
       1 => '/files/english/mp3/brown-us.mp3',
     ),
   ),
   206 =>
   array (
     'word' => 'note',
     'audio' =>
     array (
       0 => '/files/english/mp3/note-uk.mp3',
       1 => '/files/english/mp3/note-us.mp3',
     ),
   ),
   207 =>
   array (
     'word' => 'cold',
     'audio' =>
     array (
       0 => '/files/english/mp3/cold-uk.mp3',
       1 => '/files/english/mp3/cold-us.mp3',
     ),
   ),
   208 =>
   array (
     'word' => 'snow',
     'audio' =>
     array (
       0 => '/files/english/mp3/snow-uk.mp3',
       1 => '/files/english/mp3/snow-us.mp3',
     ),
   ),
   209 =>
   array (
     'word' => 'coat',
     'audio' =>
     array (
       0 => '/files/english/mp3/coat-uk.mp3',
       1 => '/files/english/mp3/coat-us.mp3',
     ),
   ),
   210 =>
   array (
     'word' => 'here',
     'audio' =>
     array (
         'https://dictionary.cambridge.org/media/english/uk_pron/u/ukh/ukhea/ukheads020.mp3',
         'https://dictionary.cambridge.org/media/english/us_pron/h/hea/hear_/hear.mp3'
     ),
   ),
   211 =>
   array (
     'word' => 'engineer',
     'audio' =>
     array (
       0 => '/files/english/mp3/engineer-uk.mp3',
       1 => '/files/english/mp3/engineer-us.mp3',
     ),
   ),
   212 =>
   array (
     'word' => 'nearly',
     'audio' =>
     array (
       0 => '/files/english/mp3/nearly-uk.mp3',
       1 => '/files/english/mp3/nearly-us.mp3',
     ),
   ),
   213 =>
   array (
     'word' => 'serial',
     'audio' =>
     array (
       0 => '/files/english/mp3/serial-uk.mp3',
       1 => '/files/english/mp3/serial-us.mp3',
     ),
   ),
   214 =>
   array (
     'word' => 'real',
     'audio' =>
     array (
       0 => '/files/english/mp3/real-uk.mp3',
       1 => '/files/english/mp3/real-us.mp3',
     ),
   ),
   215 =>
   array (
     'word' => 'Mary',
     'audio' =>
     array (
         'https://dictionary.cambridge.org/media/english/uk_pron/c/cdo/cdo03/cdo0317maryuk2353.mp3',
         'https://dictionary.cambridge.org/media/english/us_pron/c/cdo/cdo03/cdo0318usmary2904.mp3'
     ),
   ),
   216 =>
   array (
     'word' => 'chair',
     'audio' =>
     array (
       0 => '/files/english/mp3/chair-uk.mp3',
       1 => '/files/english/mp3/chair-us.mp3',
     ),
   ),
   217 =>
   array (
     'word' => 'their',
     'audio' =>
     array (
         'https://dictionary.cambridge.org/media/english/uk_pron/u/ukt/ukthe/uktheat009.mp3',
         'https://dictionary.cambridge.org/media/english/us_pron/t/the/their/their.mp3'
     ),
   ),
   218 =>
   array (
     'word' => 'bear',
     'audio' =>
     array (
       0 => '/files/english/mp3/bear-uk.mp3',
       1 => '/files/english/mp3/bear-us.mp3',
     ),
   ),
   219 =>
   array (
     'word' => 'super',
     'audio' =>
     array (
       0 => '/files/english/mp3/super-uk.mp3',
       1 => '/files/english/mp3/super-us.mp3',
     ),
   ),
   220 =>
   array (
     'word' => 'viewer',
     'audio' =>
     array (
       0 => '/files/english/mp3/viewer-uk.mp3',
       1 => '/files/english/mp3/viewer-us.mp3',
     ),
   ),
   221 =>
   array (
     'word' => 'cruel',
     'audio' =>
     array (
       0 => '/files/english/mp3/cruel-uk.mp3',
       1 => '/files/english/mp3/cruel-us.mp3',
     ),
   ),
   222 =>
   array (
     'word' => 'usual',
     'audio' =>
     array (
       0 => '/files/english/mp3/usual-uk.mp3',
       1 => '/files/english/mp3/usual-us.mp3',
     ),
   ),
   223 =>
   array (
     'word' => 'poor',
     'audio' =>
     array (
       0 => '/files/english/mp3/poor-uk.mp3',
       1 => '/files/english/mp3/poor-us.mp3',
     ),
   ),
   224 =>
   array (
     'word' => 'tour',
     'audio' =>
     array (
       0 => '/files/english/mp3/tour-uk.mp3',
       1 => '/files/english/mp3/tour-us.mp3',
     ),
   ),
   225 =>
   array (
     'word' => 'fire',
     'audio' =>
     array (
       0 => '/files/english/mp3/fire-uk.mp3',
       1 => '/files/english/mp3/fire-us.mp3',
     ),
   ),
   226 =>
   array (
     'word' => 'tyre',
     'audio' =>
     array (
         'https://dictionary.cambridge.org/media/english/us_pron/t/tir/tire_/tire.mp3'
     ),
   ),
   227 =>
   array (
     'word' => 'our',
     'audio' =>
     array (
       0 => '/files/english/mp3/our-uk.mp3',
       1 => '/files/english/mp3/our-us.mp3',
     ),
   ),
   228 =>
   array (
     'word' => 'flower',
     'audio' =>
     array (
       0 => '/files/english/mp3/flower-uk.mp3',
       1 => '/files/english/mp3/flower-us.mp3',
     ),
   ),
 );

    @endphp

@endsection


