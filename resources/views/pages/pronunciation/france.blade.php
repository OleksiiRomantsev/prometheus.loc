@extends('pages.pronunciation.pronunciation')

@section('words_array')

    @php

        $words = array(
            ['word' => 'seul', 'audio' => ['/files/instruments/1612026278.mp3']],
            ['word' => 'reste', 'audio' => ['/files/instruments/1612026324.mp3']],
            ['word' => 'persil', 'audio' => ['/files/instruments/1612026397.mp3']],
            ['word' => 'basse', 'audio' => ['/files/instruments/1612026446.mp3']],
            ['word' => 'assez', 'audio' => ['/files/instruments/1612026480.mp3']],
            ['word' => 'scie', 'audio' => ['/files/instruments/1612026519.mp3']],
            ['word' => 'scène', 'audio' => ['/files/instruments/1612026604.mp3']],
            ['word' => 'cité', 'audio' => ['/files/instruments/1612026644.mp3']],
            ['word' => 'cèdre', 'audio' => ['/files/instruments/1612026689.mp3']],
            ['word' => 'ça', 'audio' => ['/files/instruments/1612026740.mp3']],
            ['word' => 'recu', 'audio' => ['/files/instruments/1612026789.mp3']],
            ['word' => 'initiative', 'audio' => ['/files/instruments/1612026837.mp3']],
            ['word' => 'six', 'audio' => ['/files/instruments/1612027244.mp3']],
            ['word' => 'dix', 'audio' => ['/files/instruments/1612027282.mp3']],
            ['word' => 'base', 'audio' => ['/files/instruments/1612027320.mp3']],
            ['word' => 'réséda', 'audio' => ['']],
            ['word' => 'zèbre', 'audio' => ['/files/instruments/1612027782.mp3']],
            ['word' => 'bazar', 'audio' => ['/files/instruments/1612027794.mp3']],
            ['word' => 'deuxième', 'audio' => ['/files/instruments/1612027807.mp3']],
            ['word' => 'table', 'audio' => ['/files/instruments/1612027819.mp3']],
            ['word' => 'théorie', 'audio' => ['/files/instruments/1612078122.mp3']],
            ['word' => 'date', 'audio' => ['/files/instruments/1612078137.mp3']],
            ['word' => 'additif', 'audio' => ['/files/instruments/1612078149.mp3']],
            ['word' => 'papa', 'audio' => ['/files/instruments/1612078160.mp3']],
            ['word' => 'nappe', 'audio' => ['/files/instruments/1612079255.mp3']],
            ['word' => 'bras', 'audio' => ['/files/instruments/1612079266.mp3']],
            ['word' => 'abbé', 'audio' => ['/files/instruments/1612079277.mp3']],
            ['word' => 'aimer', 'audio' => ['/files/instruments/1612079289.mp3']],
            ['word' => 'lemme', 'audio' => ['']],
            ['word' => 'nature', 'audio' => ['/files/instruments/1612079301.mp3']],
            ['word' => 'panne', 'audio' => ['/files/instruments/1612079315.mp3']],
            ['word' => 'café', 'audio' => ['/files/instruments/1612079328.mp3']],

            ['word' => 'phrase', 'audio' => ['FR/38/385aa5385e83efc5d83c7588ee5fb7e8-107']],
            ['word' => 'sifflet', 'audio' => ['FR/65/656f5b0d5cd5d1239b9d3cce32ffc120-106']],
            ['word' => 'valve', 'audio' => ['FR/9b/9b9a07fe989f85da44271253fd6f9e1a-107']],
            ['word' => 'vie', 'audio' => ['FR/f6/f6743339bd7a7afd4b990c7ac0d2d003-107']],
            ['word' => 'wolfram', 'audio' => ['FR/5f/5f7e6b1fa5f9740f66c5437b200425d8-106']],
            ['word' => 'carte', 'audio' => ['FR/c5/c5bd03d6d181284a8ca03759c1b78745-107']],
            ['word' => 'cube', 'audio' => ['FR/18/18a64f7251cfb123aa7c358135d00d10-106']],
            ['word' => 'sac', 'audio' => ['FR/b5/b5241b4630506e90ecf9d060c28b92c3-106']],
            ['word' => 'kepi', 'audio' => ['']],
            ['word' => 'nickel', 'audio' => ['']],
            ['word' => 'coq', 'audio' => ['FR/66/666c5e16f4a89bc5a2f926b3d2e9da2e-106']],
            ['word' => 'cinq', 'audio' => ['FR/bf/bfe30fe4cca73ed7a7062cd502fd38c0-600']],
            ['word' => 'quatre', 'audio' => ['FR/2c/2c862e68f7a9ad4d5935e4285f24fc28-600']],
            ['word' => 'qui', 'audio' => ['FR/9d/9d24420082d450cb81caf59e2b173279-800']],
            ['word' => 'cirque', 'audio' => ['FR/3c/3c1d1a51ac125f6cbefa9988e20f7a31-106']],
            ['word' => 'orchestre', 'audio' => ['FR/61/616a258d274331ce9abec4611877a3d4-106']],
            ['word' => 'gare', 'audio' => ['FR/fc/fcf91b272b35f750dcee16ada6842ef9-107']],
            ['word' => 'gris', 'audio' => ['FR/4d/4d9ad661c53222023932665b4a2a4f6d-300']],
            ['word' => 'guide', 'audio' => ['FR/a0/a0c391dc49c440fc9962168353cedde3-106']],
            ['word' => 'guépard', 'audio' => ['FR/74/74c9d9305e01a523691e5675f3dc7029-106']],
            ['word' => 'rare', 'audio' => ['FR/a7/a7a189951821c2ebf7bf3167ec3f9fbe-300']],
            ['word' => 'carré', 'audio' => ['FR/b1/b11e6356b08cabce169893fcd868c26e-106']],
            ['word' => 'Île', 'audio' => ['FR/04/04fe28a6af38e91bda3916965f554e80-107']],
            ['word' => 'allumer', 'audio' => ['FR/9d/9d90621c56a8f6c70fe8e47c68a0581b-200']],
            ['word' => 'ligne', 'audio' => ['FR/31/31c43e53feaa55ed4b94339bc5495fa0-107']],
            ['word' => 'chercher', 'audio' => ['FR/af/afbe9760c8fd30179905bd76334a19e9-200']],
            ['word' => 'juste', 'audio' => ['FR/70/709daba7e8ef6e07042cf2f2fbd8b169-300']],
            ['word' => 'jeune', 'audio' => ['FR/52/52cc7dd744d363a7d7f3ff9df96ebe26-300']],
            ['word' => 'girafe', 'audio' => ['FR/b4/b4c4bfec4e7ff1d0a7ceb40d1ec56292-107']],
            ['word' => 'geste', 'audio' => ['FR/4f/4f8c0226b4b563061e64ba1b0d86d40f-106']],
            ['word' => 'geôle', 'audio' => ['']],
            ['word' => 'sous', 'audio' => ['FR/23/233172bc6e0266bebc235ebd8bf6e39b-500']],
            ['word' => 'boule', 'audio' => ['FR/83/83eb7dd11fbdb5a83264c8e048570c90-107']],
            ['word' => 'courir', 'audio' => ['FR/c2/c257cd6428c892a9f729124f4fdb588d-200']],
            ['word' => 'toujours', 'audio' => ['FR/33/334461e6c37d6b6e04175be3a7a711ae-400']],
            ['word' => 'goût', 'audio' => ['FR/69/69b3d9290cda89a33f1f043816a32a06-106']],
            ['word' => 'métro', 'audio' => ['FR/61/616695289136c704481652111e4234e7-106']],
            ['word' => 'stylo', 'audio' => ['FR/e1/e11238dce15b83c3fdf1f84cd305ef9e-106']],
            ['word' => 'zero', 'audio' => ['FR/02/02872b6e000ea3efbf28ac807bbc2bc6-106']],
            ['word' => 'do', 'audio' => ['']],
            ['word' => 'mot', 'audio' => ['FR/de/de81459305398c88048a05a620fb4717-106']],
            ['word' => 'trop', 'audio' => ['FR/8b/8b2495cd99bfa227d9c973cc0f3593fa-400']],
            ['word' => 'rose', 'audio' => ['FR/fc/fcdc7b4207660a1372d0cd5491ad856e-300']],
            ['word' => 'dose', 'audio' => ['FR/6e/6e7955176664692d9f78b80c68c74690-107']],
            ['word' => 'pose', 'audio' => ['FR/2d/2d5f8ae9328c6535be72ed28bff47560-107']],
            ['word' => 'pôle', 'audio' => ['FR/be/be159228909252eaa5fa8263e64c28a4-106']],
            ['word' => 'rôle', 'audio' => ['FR/f9/f9d4e4835ba82b6a058bb9b741fa660a-106']],
            ['word' => 'tôt', 'audio' => ['FR/4a/4a29391e0fad0b2fc6bd183c9cc51474-400']],
            ['word' => 'pause', 'audio' => ['FR/ec/ec1b81965109165de6b38cd92c1e39f9-107']],
            ['word' => 'auto', 'audio' => ['FR/9d/9df22f196a33acd0b372fe502de51211-0']],
            ['word' => 'aussi', 'audio' => ['FR/ba/baadce70b9a7ebfd7fbdbce752e23fe9-400']],
            ['word' => 'beau', 'audio' => ['FR/08/08880d1c8c48b70f569d24c503ada760-300']],
            ['word' => 'bureau', 'audio' => ['FR/4e/4ea782daadc10b16d4039f60bd86f8cc-106']],
            ['word' => 'tableau', 'audio' => ['FR/84/848ad2251911090937444c81858f58d3-106']],
            ['word' => 'porte', 'audio' => ['FR/29/295c6ed838bd29de4ca205d30e6f5469-107']],
            ['word' => 'pomme', 'audio' => ['FR/ed/ede0f9c3a1d2093e3f48fcafd3c70915-107']],
            ['word' => 'école', 'audio' => ['FR/49/494c508964c6cac8ae4b8aa2ebc0f304-107']],
            ['word' => 'proposer', 'audio' => ['FR/7c/7cc76da0fe7b26fdd8a917fce15a337d-200']],
            ['word' => 'formule', 'audio' => ['FR/88/88097393809906ba0bb28972af25b3ec-107']],
            ['word' => 'donner', 'audio' => ['FR/e0/e04c7a6145072c31a3c4d8b3f0ae40a4-200']],
            ['word' => 'aurore', 'audio' => ['FR/2b/2b5615afda3100fb8797ec58fda01970-107']],
            ['word' => 'aurifère', 'audio' => ['']],
            ['word' => 'Paul', 'audio' => ['']],
            ['word' => 'mauvais', 'audio' => ['FR/1d/1deeb9b6b73ebf78028b5fe91a570b9e-300']],
            ['word' => 'classe', 'audio' => ['FR/1a/1af080153383444d8f5b3602d7bb11fd-107']],
            ['word' => 'bas', 'audio' => ['FR/f6/f6e660ced42e946f69a41cc473d923cc-300']],
            ['word' => 'pâle', 'audio' => ['FR/8d/8d2a211441332f2fb92ed1415acfaf0b-300']],
            ['word' => 'pâte', 'audio' => ['FR/12/127aa1949377428ce3365bf9d35dc4cd-107']],
            ['word' => 'midi', 'audio' => ['FR/a5/a5f4ed7e858bf18cc1f2c0e35e7301e7-106']],
            ['word' => 'file', 'audio' => ['FR/8c/8c7dd922ad47494fc02c388e12c00eac-107']],
            ['word' => 'dîner', 'audio' => ['FR/f2/f2accfe7bde0821565a14865d9b161ba-106']],
            ['word' => 'île', 'audio' => ['FR/04/04fe28a6af38e91bda3916965f554e80-107']],
            ['word' => 'type', 'audio' => ['FR/59/599dcce2998a6b40b1e38e8c6006cb0a-106']],
            ['word' => 'style', 'audio' => ['FR/a1/a1b01e734b573fca08eb1a65e6df9a38-106']],
            ['word' => 'mur', 'audio' => ['FR/df/df9301d912973424a2dcd97792b1b6ff-106']],
            ['word' => 'eu', 'audio' => ['']],
            ['word' => 'eut', 'audio' => ['']],
            ['word' => 'été', 'audio' => ['FR/70/70b06e3087350c8c4fc3f13e741879f3-106']],
            ['word' => 'épi', 'audio' => ['FR/dd/dd286bb2c6f0432dd3934637c713883e-300']],
            ['word' => 'répéter', 'audio' => ['FR/98/984dd19c5403e0e2e82ff90da6b0b5d5-200']],
            ['word' => 'imiter', 'audio' => ['FR/5d/5ddd69ade8577163ea1e57b58c4b34c1-200']],
            ['word' => 'lisez', 'audio' => ['']],
            ['word' => 'écrivez', 'audio' => ['']],
            ['word' => 'les', 'audio' => ['FR/3f/3f816a388569d5a30f20546196aaabd6-800']],
            ['word' => 'tes', 'audio' => ['']],
            ['word' => 'gai', 'audio' => ['FR/c8/c8cdc5f3d46143b664d72d039b5832fc-300']],
            ['word' => 'Je lirai', 'audio' => ['']],
            ['word' => 'bleu', 'audio' => ['FR/12/12bbd9846d51a4f3239e5f72c150eb07-106']],
            ['word' => 'peu', 'audio' => ['FR/a9/a9539d75d906df3e822a0913d619f3fa-400']],
            ['word' => 'deux', 'audio' => ['FR/f8/f83815aedaa1b6bf4211e85910e6bc82-0']],
            ['word' => 'creux', 'audio' => ['FR/71/71ed242b134e2e9a79e8e1840e4d370e-300']],
            ['word' => 'vœu', 'audio' => ['']],
            ['word' => 'nœud', 'audio' => ['']],
            ['word' => 'feutre', 'audio' => ['FR/4c/4c1bf107211b981306d2d027ea5a9068-106']],
            ['word' => 'neutre', 'audio' => ['FR/ed/ed1e92ef626ab6ad71750c0b3a8a514d-300']],
            ['word' => 'creux', 'audio' => ['FR/71/71ed242b134e2e9a79e8e1840e4d370e-300']],
            ['word' => 'perte', 'audio' => ['FR/8d/8d506ea66c3c060776e7748e5d9e41dc-107']],
            ['word' => 'traverser', 'audio' => ['FR/83/834f7f498c489e2d890131341586af0f-200']],
            ['word' => 'mer', 'audio' => ['FR/2a/2af9ef9aaa6d32873e51431d5cdd3dfb-107']],
            ['word' => 'père', 'audio' => ['FR/7f/7f4c8eb86f3f656a7655584b63d48f9e-106']],
            ['word' => 'frère', 'audio' => ['FR/c9/c9847d558cff8031897cefcd31d0703d-106']],
            ['word' => 'fête', 'audio' => ['FR/9b/9bc271301ab1a777d79cad27963fb022-107']],
            ['word' => 'être', 'audio' => ['FR/d7/d7a82271700804ef5d06bf0d1c172134-200']],
            ['word' => 'laine', 'audio' => ['FR/3f/3ff5f6aa1a50fbd9758c6d67cc754fe0-107']],
            ['word' => 'faire', 'audio' => ['FR/85/85be86cb21c1917de0b297a14cff3b7b-200']],
            ['word' => 'neige', 'audio' => ['FR/6b/6bcb255e3f83d578d2a617961c22869d-107']],
            ['word' => 'peine', 'audio' => ['FR/52/52e47e78a95a8e02436500a761df9f24-107']],
            ['word' => 'béret', 'audio' => ['FR/ad/ad53bfb25394f69b050879d2d71e60c9-106']],
            ['word' => 'cadet', 'audio' => ['FR/c0/c0c446d13ea9c4d009c9ca942297612f-106']],
            ['word' => 'fleur', 'audio' => ['FR/1e/1ea31d12c145f5b54332e6ae2bb04ab7-107']],
            ['word' => 'fleurir', 'audio' => ['FR/ce/ce9a6e6337661a9b5428e3d25b0f9585-200']],
            ['word' => 'demeurer', 'audio' => ['FR/c3/c3ac1e81f7b1b74b5fea3d3f4619f71d-200']],
            ['word' => 'sœur', 'audio' => ['FR/17/17878d18e1cdb1d7acacfdabf10832d6-107']],
            ['word' => 'cœur', 'audio' => ['']],
            ['word' => 'le', 'audio' => ['FR/d9/d9180594744f870aeefb086982e980bb-800']],
            ['word' => 'ne', 'audio' => ['']],
            ['word' => 'Je', 'audio' => ['FR/79/79563e90630af3525dff01b6638b0886-0']],
            ['word' => 'Me', 'audio' => ['FR/ab/ab86a1e1ef70dff97959067b723c5c24-800']],
            ['word' => 'semer', 'audio' => ['FR/03/03d28de88c583a935f64241a8a69f122-200']],
            ['word' => 'mener', 'audio' => ['FR/d1/d1c12dd67a6af38f275830c01bccf922-200']],
            ['word' => 'malade', 'audio' => ['FR/72/72f0ec89b8be5fcc2ceea17d93569bb6-300']],
            ['word' => 'patte', 'audio' => ['FR/c2/c23d147fd1a0171e736a94708832d86a-107']],
            ['word' => 'arriver', 'audio' => ['FR/02/024b8830ff5df9e347c72ae2a3065e92-200']],
            ['word' => 'plan', 'audio' => ['FR/5f/5fc25157650d0cb24f02216d904584df-106']],
            ['word' => 'dans', 'audio' => ['FR/ef/ef86916bc6f9f2f6866df100a192161f-500']],
            ['word' => 'camp', 'audio' => ['FR/ad/ad82e95a9c7482cf33cfe59a30ea4060-106']],
            ['word' => 'lampe', 'audio' => ['FR/20/201c72a28afd7cf217f78fa497d7beb4-107']],
            ['word' => 'vent', 'audio' => ['FR/39/39070aff4100488e27d58a587b526fc4-106']],
            ['word' => 'enfant', 'audio' => ['FR/50/50b0c94dd75630d415635515344f41a0-106']],
            ['word' => 'temps', 'audio' => ['FR/a6/a606848b2a6c508a3ad9995098794355-106']],
            ['word' => 'sembler', 'audio' => ['FR/3f/3f853e42337fee5dfb1351aa0c1abd00-200']],
            ['word' => 'fin', 'audio' => ['FR/d7/d79695776a5b40f7cadbee1f91a85c82-107']],
            ['word' => 'vin', 'audio' => ['FR/62/62911ad86d6181442022683afb480067-106']],
            ['word' => 'timbre', 'audio' => ['FR/81/81ccda67d4d8f2ada41ad96ae9cf0840-106']],
            ['word' => 'impair', 'audio' => ['FR/78/78d3db8571c079c932ea97eb92edbed8-300']],
            ['word' => 'main', 'audio' => ['FR/fa/fad58de7366495db4650cfefac2fcd61-107']],
            ['word' => 'pain', 'audio' => ['FR/87/87a429872c7faee7e8bc9268d5bf548e-106']],
            ['word' => 'faim', 'audio' => ['FR/23/23b2ddcac89971ac293058547786fbd3-107']],
            ['word' => 'daim', 'audio' => ['FR/61/61c18449f185e3dc620cf55b434aeea8-106']],
            ['word' => 'plein', 'audio' => ['FR/a9/a9e7b979f9e9811d34c8f4cd6e771e86-300']],
            ['word' => 'frein', 'audio' => ['FR/be/bec4031ca09883d3bb7c9fc7b1a6320c-106']],
            ['word' => 'peindre', 'audio' => ['FR/35/3551e44e0dd7623a58ad98b35ee30e1b-200']],
            ['word' => 'syndicat', 'audio' => ['FR/a8/a82a44c313717e85d35cb663464ef101-106']],
            ['word' => 'synthèse', 'audio' => ['FR/96/96839b41577add089fef70079565bc64-107']],
            ['word' => 'symbole', 'audio' => ['FR/84/84ac8a73752e59bfc12c509ad9e5ece1-106']],
            ['word' => 'sympathie', 'audio' => ['FR/d8/d8f4328643200341c43feefe32650aae-107']],
            ['word' => 'mon', 'audio' => ['']],
            ['word' => 'ombre', 'audio' => ['']],
            ['word' => 'nombre', 'audio' => ['FR/7a/7a675883b1c117e267470dce52eba518-106']],
            ['word' => 'un', 'audio' => ['FR/06/0674272bac0715f803e382b5aa437e08-700']],
            ['word' => 'brun', 'audio' => ['FR/ea/ea34e980776660c55815059cb8015f59-300']],
            ['word' => 'parfum', 'audio' => ['FR/7d/7dffed5dde252a5873799076b1bdbbac-106']],
            ['word' => 'aucun', 'audio' => ['FR/52/520f22fa15b66c5aae61d8ad110da1df-800']],
            ['word' => 'humble', 'audio' => ['FR/43/431bc85b812bd8bcac81bdd27429a12d-300']],
            ['word' => 'allié', 'audio' => ['FR/56/5693363fcaad79304c2b5ea69dfa0bf9-106']],
            ['word' => 'atelier', 'audio' => ['FR/bc/bc3596198e49c49eccd7abe633c19c48-106']],
            ['word' => 'étudiant', 'audio' => ['FR/bf/bf22964062c79ddb8613ff0dfaaed59c-106']],
            ['word' => 'travailler', 'audio' => ['FR/b2/b260470dd2bb461922edaf40014672bf-200']],
            ['word' => 'oreille', 'audio' => ['FR/a3/a3c6e9985701c861939c34f5825702c0-107']],
            ['word' => 'payer', 'audio' => ['FR/a9/a9996201984fdd1c2db307e141333857-200']],
            ['word' => 'envoyer', 'audio' => ['FR/ce/ce0b7d49498f964a654a90d377db6681-200']],
            ['word' => 'essuyer', 'audio' => ['FR/a4/a4962ec1801851ab4f06192c12080ab3-200']],
            ['word' => 'soleil', 'audio' => ['FR/23/23206deb7eba65b3fbc80a2ffbc53c28-106']],
            ['word' => 'seuil', 'audio' => ['FR/6b/6bf18a6d4dcf8a5bc2721829222f89e5-106']],
            ['word' => 'travail', 'audio' => ['FR/68/68114c081e7001982e0e42fe6c296d28-106']],
            ['word' => 'ouvrier', 'audio' => ['FR/2f/2ff15ecc747ceaf059756278a19866ba-106']],
            ['word' => 'supplier', 'audio' => ['FR/99/99b0e8da24e29e4ccb5d7d76e677c2ac-200']],
            ['word' => 'fill', 'audio' => ['']],
            ['word' => 'brillant', 'audio' => ['FR/06/06009aecae03bf27dc9322ec4f02294f-300']],
            ['word' => 'piller', 'audio' => ['FR/00/00bb3a19e73d2aa30a962ca979bb8191-200']],
            ['word' => 'bien', 'audio' => ['FR/67/67d6c28fac7541d9ce1f46ba4f84e149-400']],
            ['word' => 'rien', 'audio' => ['FR/8d/8dda99b909a45e922dae4af966e8e0b2-106']],
            ['word' => 'ouate', 'audio' => ['FR/d9/d9013b7555e057527e20533848022970-107']],
            ['word' => 'rouet', 'audio' => ['FR/9c/9c46408a3bc655c68505c57a11d6c4ee-107']],
            ['word' => 'louer', 'audio' => ['FR/08/083ad150653f7b5916e829b909e0ff49-200']],
            ['word' => 'toi', 'audio' => ['FR/50/501446ac98afd1e291c2498bb817bbd8-800']],
            ['word' => 'droit', 'audio' => ['FR/31/3153383b8778698ff4f90f6a4fd6b879-106']],
            ['word' => 'poire', 'audio' => ['FR/8f/8fd5b344f9146f482e4129c163bf9482-107']],
            ['word' => 'boiter', 'audio' => ['FR/5c/5c8195e76d9fbf04045e0df650ee126b-200']],
            ['word' => 'croître', 'audio' => ['FR/ef/efd620c7b0daf675c7085fb71b6da831-200']],
            ['word' => 'coin', 'audio' => ['FR/96/96a9519b8fddd17e8cc4bba0408ffffd-106']],
            ['word' => 'foin', 'audio' => ['FR/97/977625d3679ba0d7dc45e5d33e65352d-106']],
            ['word' => 'moins', 'audio' => ['FR/bb/bb7d987a2323ae26384da9f59a1f9b08-0']],
            ['word' => 'poindre', 'audio' => ['FR/8a/8a5f1499eb4fb4337ec4104a260a8364-200']],
            ['word' => 'nuit', 'audio' => ['FR/49/490b2c324a1ec3c6c9dc5b9a8213aae8-107']],
            ['word' => 'pluie', 'audio' => ['FR/8b/8bad589fa73a4cb1cefeac53486fb081-107']],
            ['word' => 'fuir', 'audio' => ['FR/ec/ec7eb6990e5fccb58f6e182614a6566e-200']],

        );

#    foreach($words AS &$word) {
 #       $audio =& $word['audio'][0];
#        if(preg_match("/^FR.*/m", $audio)) {
 #          $audio = 'https://www.linguee.fr/mp3/'.$audio.'.mp3';
 #       }

 #   }

 #   echo '<pre>';
 #   var_export($words);
 #   die();


    $words = array (
  0 =>
  array (
    'word' => 'seul',
    'audio' =>
    array (
      0 => '/files/instruments/1612026278.mp3',
    ),
  ),
  1 =>
  array (
    'word' => 'reste',
    'audio' =>
    array (
      0 => '/files/instruments/1612026324.mp3',
    ),
  ),
  2 =>
  array (
    'word' => 'persil',
    'audio' =>
    array (
      0 => '/files/instruments/1612026397.mp3',
    ),
  ),
  3 =>
  array (
    'word' => 'basse',
    'audio' =>
    array (
      0 => '/files/instruments/1612026446.mp3',
    ),
  ),
  4 =>
  array (
    'word' => 'assez',
    'audio' =>
    array (
      0 => '/files/instruments/1612026480.mp3',
    ),
  ),
  5 =>
  array (
    'word' => 'scie',
    'audio' =>
    array (
      0 => '/files/instruments/1612026519.mp3',
    ),
  ),
  6 =>
  array (
    'word' => 'scène',
    'audio' =>
    array (
      0 => '/files/instruments/1612026604.mp3',
    ),
  ),
  7 =>
  array (
    'word' => 'cité',
    'audio' =>
    array (
      0 => '/files/instruments/1612026644.mp3',
    ),
  ),
  8 =>
  array (
    'word' => 'cèdre',
    'audio' =>
    array (
      0 => '/files/instruments/1612026689.mp3',
    ),
  ),
  9 =>
  array (
    'word' => 'ça',
    'audio' =>
    array (
      0 => '/files/instruments/1612026740.mp3',
    ),
  ),
  10 =>
  array (
    'word' => 'recu',
    'audio' =>
    array (
      0 => '/files/instruments/1612026789.mp3',
    ),
  ),
  11 =>
  array (
    'word' => 'initiative',
    'audio' =>
    array (
      0 => '/files/instruments/1612026837.mp3',
    ),
  ),
  12 =>
  array (
    'word' => 'six',
    'audio' =>
    array (
      0 => '/files/instruments/1612027244.mp3',
    ),
  ),
  13 =>
  array (
    'word' => 'dix',
    'audio' =>
    array (
      0 => '/files/instruments/1612027282.mp3',
    ),
  ),
  14 =>
  array (
    'word' => 'base',
    'audio' =>
    array (
      0 => '/files/instruments/1612027320.mp3',
    ),
  ),
  15 =>
  array (
    'word' => 'réséda',
    'audio' =>
    array (
      0 => '',
    ),
  ),
  16 =>
  array (
    'word' => 'zèbre',
    'audio' =>
    array (
      0 => '/files/instruments/1612027782.mp3',
    ),
  ),
  17 =>
  array (
    'word' => 'bazar',
    'audio' =>
    array (
      0 => '/files/instruments/1612027794.mp3',
    ),
  ),
  18 =>
  array (
    'word' => 'deuxième',
    'audio' =>
    array (
      0 => '/files/instruments/1612027807.mp3',
    ),
  ),
  19 =>
  array (
    'word' => 'table',
    'audio' =>
    array (
      0 => '/files/instruments/1612027819.mp3',
    ),
  ),
  20 =>
  array (
    'word' => 'théorie',
    'audio' =>
    array (
      0 => '/files/instruments/1612078122.mp3',
    ),
  ),
  21 =>
  array (
    'word' => 'date',
    'audio' =>
    array (
      0 => '/files/instruments/1612078137.mp3',
    ),
  ),
  22 =>
  array (
    'word' => 'additif',
    'audio' =>
    array (
      0 => '/files/instruments/1612078149.mp3',
    ),
  ),
  23 =>
  array (
    'word' => 'papa',
    'audio' =>
    array (
      0 => '/files/instruments/1612078160.mp3',
    ),
  ),
  24 =>
  array (
    'word' => 'nappe',
    'audio' =>
    array (
      0 => '/files/instruments/1612079255.mp3',
    ),
  ),
  25 =>
  array (
    'word' => 'bras',
    'audio' =>
    array (
      0 => '/files/instruments/1612079266.mp3',
    ),
  ),
  26 =>
  array (
    'word' => 'abbé',
    'audio' =>
    array (
      0 => '/files/instruments/1612079277.mp3',
    ),
  ),
  27 =>
  array (
    'word' => 'aimer',
    'audio' =>
    array (
      0 => '/files/instruments/1612079289.mp3',
    ),
  ),
  28 =>
  array (
    'word' => 'lemme',
    'audio' =>
    array (
      0 => '',
    ),
  ),
  29 =>
  array (
    'word' => 'nature',
    'audio' =>
    array (
      0 => '/files/instruments/1612079301.mp3',
    ),
  ),
  30 =>
  array (
    'word' => 'panne',
    'audio' =>
    array (
      0 => '/files/instruments/1612079315.mp3',
    ),
  ),
  31 =>
  array (
    'word' => 'café',
    'audio' =>
    array (
      0 => '/files/instruments/1612079328.mp3',
    ),
  ),
  32 =>
  array (
    'word' => 'phrase',
    'audio' =>
    array (
      0 => '/files/instruments/1612080987.mp3',
    ),
  ),
  33 =>
  array (
    'word' => 'sifflet',
    'audio' =>
    array (
      0 => '/files/instruments/1612081002.mp3',
    ),
  ),
  34 =>
  array (
    'word' => 'valve',
    'audio' =>
    array (
      0 => '/files/instruments/1612081019.mp3',
    ),
  ),
  35 =>
  array (
    'word' => 'vie',
    'audio' =>
    array (
      0 => '/files/instruments/1612081035.mp3',
    ),
  ),
  36 =>
  array (
    'word' => 'wolfram',
    'audio' =>
    array (
      0 => '/files/instruments/1612081051.mp3',
    ),
  ),
  37 =>
  array (
    'word' => 'carte',
    'audio' =>
    array (
      0 => '/files/instruments/1612081268.mp3',
    ),
  ),
  38 =>
  array (
    'word' => 'cube',
    'audio' =>
    array (
      0 => '/files/instruments/1612081280.mp3',
    ),
  ),
  39 =>
  array (
    'word' => 'sac',
    'audio' =>
    array (
      0 => '/files/instruments/1612081294.mp3',
    ),
  ),
  40 =>
  array (
    'word' => 'kepi',
    'audio' =>
    array (
      0 => '',
    ),
  ),
  41 =>
  array (
    'word' => 'nickel',
    'audio' =>
    array (
      0 => '',
    ),
  ),
  42 =>
  array (
    'word' => 'coq',
    'audio' =>
    array (
      0 => '/files/instruments/1612081310.mp3',
    ),
  ),
  43 =>
  array (
    'word' => 'cinq',
    'audio' =>
    array (
      0 => '/files/instruments/1612081322.mp3',
    ),
  ),
  44 =>
  array (
    'word' => 'quatre',
    'audio' =>
    array (
      0 => '/files/instruments/1612081335.mp3',
    ),
  ),
  45 =>
  array (
    'word' => 'qui',
    'audio' =>
    array (
      0 => '/files/instruments/1612081346.mp3',
    ),
  ),
  46 =>
  array (
    'word' => 'cirque',
    'audio' =>
    array (
      0 => '/files/instruments/1612081357.mp3',
    ),
  ),
  47 =>
  array (
    'word' => 'orchestre',
    'audio' =>
    array (
      0 => '/files/instruments/1612081396.mp3',
    ),
  ),
  48 =>
  array (
    'word' => 'gare',
    'audio' =>
    array (
      0 => '/files/instruments/1612081409.mp3',
    ),
  ),
  49 =>
  array (
    'word' => 'gris',
    'audio' =>
    array (
      0 => '/files/instruments/1612081420.mp3',
    ),
  ),
  50 =>
  array (
    'word' => 'guide',
    'audio' =>
    array (
      0 => '/files/instruments/1612081487.mp3',
    ),
  ),
  51 =>
  array (
    'word' => 'guépard',
    'audio' =>
    array (
      0 => '/files/instruments/1612081500.mp3',
    ),
  ),
  52 =>
  array (
    'word' => 'rare',
    'audio' =>
    array (
      0 => '/files/instruments/1612081510.mp3',
    ),
  ),
  53 =>
  array (
    'word' => 'carré',
    'audio' =>
    array (
      0 => '/files/instruments/1612081520.mp3',
    ),
  ),
  54 =>
  array (
    'word' => 'Île',
    'audio' =>
    array (
      0 => '/files/instruments/1612081533.mp3',
    ),
  ),
  55 =>
  array (
    'word' => 'allumer',
    'audio' =>
    array (
      0 => '/files/instruments/1612081546.mp3',
    ),
  ),
  56 =>
  array (
    'word' => 'ligne',
    'audio' =>
    array (
      0 => '/files/instruments/1612081557.mp3',
    ),
  ),
  57 =>
  array (
    'word' => 'chercher',
    'audio' =>
    array (
      0 => '/files/instruments/1612081570.mp3',
    ),
  ),
  58 =>
  array (
    'word' => 'juste',
    'audio' =>
    array (
      0 => '/files/instruments/1612081581.mp3',
    ),
  ),
  59 =>
  array (
    'word' => 'jeune',
    'audio' =>
    array (
      0 => '/files/instruments/1612081676.mp3',
    ),
  ),
  60 =>
  array (
    'word' => 'girafe',
    'audio' =>
    array (
      0 => '/files/instruments/1612081687.mp3',
    ),
  ),
  61 =>
  array (
    'word' => 'geste',
    'audio' =>
    array (
      0 => '/files/instruments/1612081697.mp3',
    ),
  ),
  62 =>
  array (
    'word' => 'geôle',
    'audio' =>
    array (
      0 => '',
    ),
  ),
  63 =>
  array (
    'word' => 'sous',
    'audio' =>
    array (
      0 => '/files/instruments/1612081708.mp3',
    ),
  ),
  64 =>
  array (
    'word' => 'boule',
    'audio' =>
    array (
      0 => '/files/instruments/1612081814.mp3',
    ),
  ),
  65 =>
  array (
    'word' => 'courir',
    'audio' =>
    array (
      0 => '/files/instruments/1612081825.mp3',
    ),
  ),
  66 =>
  array (
    'word' => 'toujours',
    'audio' =>
    array (
      0 => '/files/instruments/1612081836.mp3',
    ),
  ),
  67 =>
  array (
    'word' => 'goût',
    'audio' =>
    array (
      0 => '/files/instruments/1612081846.mp3',
    ),
  ),
  68 =>
  array (
    'word' => 'métro',
    'audio' =>
    array (
      0 => '/files/instruments/1612081857.mp3',
    ),
  ),
  69 =>
  array (
    'word' => 'stylo',
    'audio' =>
    array (
      0 => '/files/instruments/1612081866.mp3',
    ),
  ),
  70 =>
  array (
    'word' => 'zero',
    'audio' =>
    array (
      0 => '/files/instruments/1612081875.mp3',
    ),
  ),
  71 =>
  array (
    'word' => 'do',
    'audio' =>
    array (
      0 => '',
    ),
  ),
  72 =>
  array (
    'word' => 'mot',
    'audio' =>
    array (
      0 => '/files/instruments/1612081887.mp3',
    ),
  ),
  73 =>
  array (
    'word' => 'trop',
    'audio' =>
    array (
      0 => '/files/instruments/1612081904.mp3',
    ),
  ),
  74 =>
  array (
    'word' => 'rose',
    'audio' =>
    array (
      0 => '/files/instruments/1612081917.mp3',
    ),
  ),
  75 =>
  array (
    'word' => 'dose',
    'audio' =>
    array (
      0 => '/files/instruments/1612081933.mp3',
    ),
  ),
  76 =>
  array (
    'word' => 'pose',
    'audio' =>
    array (
      0 => '/files/instruments/1612081945.mp3',
    ),
  ),
  77 =>
  array (
    'word' => 'pôle',
    'audio' =>
    array (
      0 => '/files/instruments/1612081989.mp3',
    ),
  ),
  78 =>
  array (
    'word' => 'rôle',
    'audio' =>
    array (
      0 => '/files/instruments/1612081999.mp3',
    ),
  ),
  79 =>
  array (
    'word' => 'tôt',
    'audio' =>
    array (
      0 => '/files/instruments/1612082010.mp3',
    ),
  ),
  80 =>
  array (
    'word' => 'pause',
    'audio' =>
    array (
      0 => '/files/instruments/1612082020.mp3',
    ),
  ),
  81 =>
  array (
    'word' => 'auto',
    'audio' =>
    array (
      0 => '/files/instruments/1612082030.mp3',
    ),
  ),
  82 =>
  array (
    'word' => 'aussi',
    'audio' =>
    array (
      0 => '/files/instruments/1612082399.mp3',
    ),
  ),
  83 =>
  array (
    'word' => 'beau',
    'audio' =>
    array (
      0 => '/files/instruments/1612082409.mp3',
    ),
  ),
  84 =>
  array (
    'word' => 'bureau',
    'audio' =>
    array (
      0 => '/files/instruments/1612082420.mp3',
    ),
  ),
  85 =>
  array (
    'word' => 'tableau',
    'audio' =>
    array (
      0 => '/files/instruments/1612082429.mp3',
    ),
  ),
  86 =>
  array (
    'word' => 'porte',
    'audio' =>
    array (
      0 => '/files/instruments/1612082440.mp3',
    ),
  ),
  87 =>
  array (
    'word' => 'pomme',
    'audio' =>
    array (
      0 => '/files/instruments/1612082449.mp3',
    ),
  ),
  88 =>
  array (
    'word' => 'école',
    'audio' =>
    array (
      0 => '/files/instruments/1612082462.mp3',
    ),
  ),
  89 =>
  array (
    'word' => 'proposer',
    'audio' =>
    array (
      0 => '/files/instruments/1612082471.mp3',
    ),
  ),
  90 =>
  array (
    'word' => 'formule',
    'audio' =>
    array (
      0 => '/files/instruments/1612082534.mp3',
    ),
  ),
  91 =>
  array (
    'word' => 'donner',
    'audio' =>
    array (
      0 => '/files/instruments/1612082545.mp3',
    ),
  ),
  92 =>
  array (
    'word' => 'aurore',
    'audio' =>
    array (
      0 => '/files/instruments/1612082555.mp3',
    ),
  ),
  93 =>
  array (
    'word' => 'aurifère',
    'audio' =>
    array (
      0 => '',
    ),
  ),
  94 =>
  array (
    'word' => 'Paul',
    'audio' =>
    array (
      0 => '',
    ),
  ),
  95 =>
  array (
    'word' => 'mauvais',
    'audio' =>
    array (
      0 => '/files/instruments/1612082567.mp3',
    ),
  ),
  96 =>
  array (
    'word' => 'classe',
    'audio' =>
    array (
      0 => '/files/instruments/1612082579.mp3',
    ),
  ),
  97 =>
  array (
    'word' => 'bas',
    'audio' =>
    array (
      0 => '/files/instruments/1612082590.mp3',
    ),
  ),
  98 =>
  array (
    'word' => 'pâle',
    'audio' =>
    array (
      0 => '/files/instruments/1612082599.mp3',
    ),
  ),
  99 =>
  array (
    'word' => 'pâte',
    'audio' =>
    array (
      0 => '/files/instruments/1612082610.mp3',
    ),
  ),
  100 =>
  array (
    'word' => 'midi',
    'audio' =>
    array (
      0 => '/files/instruments/1612082619.mp3',
    ),
  ),
  101 =>
  array (
    'word' => 'file',
    'audio' =>
    array (
      0 => '/files/instruments/1612082702.mp3',
    ),
  ),
  102 =>
  array (
    'word' => 'dîner',
    'audio' =>
    array (
      0 => '/files/instruments/1612082713.mp3',
    ),
  ),
  103 =>
  array (
    'word' => 'île',
    'audio' =>
    array (
      0 => '/files/instruments/1612082724.mp3',
    ),
  ),
  104 =>
  array (
    'word' => 'type',
    'audio' =>
    array (
      0 => '/files/instruments/1612082734.mp3',
    ),
  ),
  105 =>
  array (
    'word' => 'style',
    'audio' =>
    array (
      0 => '/files/instruments/1612082743.mp3',
    ),
  ),
  106 =>
  array (
    'word' => 'mur',
    'audio' =>
    array (
      0 => '/files/instruments/1612082752.mp3',
    ),
  ),
  107 =>
  array (
    'word' => 'eu',
    'audio' =>
    array (
      0 => '',
    ),
  ),
  108 =>
  array (
    'word' => 'eut',
    'audio' =>
    array (
      0 => '',
    ),
  ),
  109 =>
  array (
    'word' => 'été',
    'audio' =>
    array (
      0 => '/files/instruments/1612082763.mp3',
    ),
  ),
  110 =>
  array (
    'word' => 'épi',
    'audio' =>
    array (
      0 => '/files/instruments/1612082864.mp3',
    ),
  ),
  111 =>
  array (
    'word' => 'répéter',
    'audio' =>
    array (
      0 => '/files/instruments/1612082874.mp3',
    ),
  ),
  112 =>
  array (
    'word' => 'imiter',
    'audio' =>
    array (
      0 => '/files/instruments/1612082884.mp3',
    ),
  ),
  113 =>
  array (
    'word' => 'lisez',
    'audio' =>
    array (
      0 => '',
    ),
  ),
  114 =>
  array (
    'word' => 'écrivez',
    'audio' =>
    array (
      0 => '',
    ),
  ),
  115 =>
  array (
    'word' => 'les',
    'audio' =>
    array (
      0 => '/files/instruments/1612082895.mp3',
    ),
  ),
  116 =>
  array (
    'word' => 'tes',
    'audio' =>
    array (
      0 => '',
    ),
  ),
  117 =>
  array (
    'word' => 'gai',
    'audio' =>
    array (
      0 => '/files/instruments/1612082905.mp3',
    ),
  ),
  118 =>
  array (
    'word' => 'Je lirai',
    'audio' =>
    array (
      0 => '',
    ),
  ),
  119 =>
  array (
    'word' => 'bleu',
    'audio' =>
    array (
      0 => '/files/instruments/1612082918.mp3',
    ),
  ),
  120 =>
  array (
    'word' => 'peu',
    'audio' =>
    array (
      0 => '/files/instruments/1612082929.mp3',
    ),
  ),
  121 =>
  array (
    'word' => 'deux',
    'audio' =>
    array (
      0 => '/files/instruments/1612082938.mp3',
    ),
  ),
  122 =>
  array (
    'word' => 'creux',
    'audio' =>
    array (
      0 => '/files/instruments/1612082949.mp3',
    ),
  ),
  123 =>
  array (
    'word' => 'vœu',
    'audio' =>
    array (
      0 => '',
    ),
  ),
  124 =>
  array (
    'word' => 'nœud',
    'audio' =>
    array (
      0 => '',
    ),
  ),
  125 =>
  array (
    'word' => 'feutre',
    'audio' =>
    array (
      0 => '/files/instruments/1612082961.mp3',
    ),
  ),
  126 =>
  array (
    'word' => 'neutre',
    'audio' =>
    array (
      0 => '/files/instruments/1612082972.mp3',
    ),
  ),
  127 =>
  array (
    'word' => 'creux',
    'audio' =>
    array (
      0 => '/files/instruments/1612082983.mp3',
    ),
  ),
  128 =>
  array (
    'word' => 'perte',
    'audio' =>
    array (
      0 => '/files/instruments/1612082994.mp3',
    ),
  ),
  129 =>
  array (
    'word' => 'traverser',
    'audio' =>
    array (
      0 => '/files/instruments/1612083003.mp3',
    ),
  ),
  130 =>
  array (
    'word' => 'mer',
    'audio' =>
    array (
      0 => '/files/instruments/1612083013.mp3',
    ),
  ),
  131 =>
  array (
    'word' => 'père',
    'audio' =>
    array (
      0 => '/files/instruments/1612083097.mp3',
    ),
  ),
  132 =>
  array (
    'word' => 'frère',
    'audio' =>
    array (
      0 => '/files/instruments/1612083107.mp3',
    ),
  ),
  133 =>
  array (
    'word' => 'fête',
    'audio' =>
    array (
      0 => '/files/instruments/1612083115.mp3',
    ),
  ),
  134 =>
  array (
    'word' => 'être',
    'audio' =>
    array (
      0 => '/files/instruments/1612083126.mp3',
    ),
  ),
  135 =>
  array (
    'word' => 'laine',
    'audio' =>
    array (
      0 => '/files/instruments/1612083135.mp3',
    ),
  ),
  136 =>
  array (
    'word' => 'faire',
    'audio' =>
    array (
      0 => '/files/instruments/1612083147.mp3',
    ),
  ),
  137 =>
  array (
    'word' => 'neige',
    'audio' =>
    array (
      0 => '/files/instruments/1612083157.mp3',
    ),
  ),
  138 =>
  array (
    'word' => 'peine',
    'audio' =>
    array (
      0 => '/files/instruments/1612083167.mp3',
    ),
  ),
  139 =>
  array (
    'word' => 'béret',
    'audio' =>
    array (
      0 => '/files/instruments/1612083176.mp3',
    ),
  ),
  140 =>
  array (
    'word' => 'cadet',
    'audio' =>
    array (
      0 => '/files/instruments/1612083186.mp3',
    ),
  ),
  141 =>
  array (
    'word' => 'fleur',
    'audio' =>
    array (
      0 => '/files/instruments/1612083195.mp3',
    ),
  ),
  142 =>
  array (
    'word' => 'fleurir',
    'audio' =>
    array (
      0 => '/files/instruments/1612083206.mp3',
    ),
  ),
  143 =>
  array (
    'word' => 'demeurer',
    'audio' =>
    array (
      0 => '/files/instruments/1612083215.mp3',
    ),
  ),
  144 =>
  array (
    'word' => 'sœur',
    'audio' =>
    array (
      0 => '/files/instruments/1612083226.mp3',
    ),
  ),
  145 =>
  array (
    'word' => 'cœur',
    'audio' =>
    array (
      0 => '',
    ),
  ),
  146 =>
  array (
    'word' => 'le',
    'audio' =>
    array (
      0 => '/files/instruments/1612083236.mp3',
    ),
  ),
  147 =>
  array (
    'word' => 'ne',
    'audio' =>
    array (
      0 => '',
    ),
  ),
  148 =>
  array (
    'word' => 'Je',
    'audio' =>
    array (
      0 => '/files/instruments/1612083247.mp3',
    ),
  ),
  149 =>
  array (
    'word' => 'Me',
    'audio' =>
    array (
      0 => '/files/instruments/1612083258.mp3',
    ),
  ),
  150 =>
  array (
    'word' => 'semer',
    'audio' =>
    array (
      0 => '/files/instruments/1612083269.mp3',
    ),
  ),
  151 =>
  array (
    'word' => 'mener',
    'audio' =>
    array (
      0 => '/files/instruments/1612083282.mp3',
    ),
  ),
  152 =>
  array (
    'word' => 'malade',
    'audio' =>
    array (
      0 => '/files/instruments/1612083292.mp3',
    ),
  ),
  153 =>
  array (
    'word' => 'patte',
    'audio' =>
    array (
      0 => '/files/instruments/1612083301.mp3',
    ),
  ),
  154 =>
  array (
    'word' => 'arriver',
    'audio' =>
    array (
      0 => '/files/instruments/1612083311.mp3',
    ),
  ),
  155 =>
  array (
    'word' => 'plan',
    'audio' =>
    array (
      0 => '/files/instruments/1612083348.mp3',
    ),
  ),
  156 =>
  array (
    'word' => 'dans',
    'audio' =>
    array (
      0 => '/files/instruments/1612083358.mp3',
    ),
  ),
  157 =>
  array (
    'word' => 'camp',
    'audio' =>
    array (
      0 => '/files/instruments/1612083368.mp3',
    ),
  ),
  158 =>
  array (
    'word' => 'lampe',
    'audio' =>
    array (
      0 => '/files/instruments/1612083377.mp3',
    ),
  ),
  159 =>
  array (
    'word' => 'vent',
    'audio' =>
    array (
      0 => '/files/instruments/1612083386.mp3',
    ),
  ),
  160 =>
  array (
    'word' => 'enfant',
    'audio' =>
    array (
      0 => '/files/instruments/1612083396.mp3',
    ),
  ),
  161 =>
  array (
    'word' => 'temps',
    'audio' =>
    array (
      0 => '/files/instruments/1612083410.mp3',
    ),
  ),
  162 =>
  array (
    'word' => 'sembler',
    'audio' =>
    array (
      0 => '/files/instruments/1612096596.mp3',
    ),
  ),
  163 =>
  array (
    'word' => 'fin',
    'audio' =>
    array (
      0 => '/files/instruments/1612096609.mp3',
    ),
  ),
  164 =>
  array (
    'word' => 'vin',
    'audio' =>
    array (
      0 => '/files/instruments/1612096619.mp3',
    ),
  ),
  165 =>
  array (
    'word' => 'timbre',
    'audio' =>
    array (
      0 => '/files/instruments/1612096630.mp3',
    ),
  ),
  166 =>
  array (
    'word' => 'impair',
    'audio' =>
    array (
      0 => '/files/instruments/1612096680.mp3',
    ),
  ),
  167 =>
  array (
    'word' => 'main',
    'audio' =>
    array (
      0 => '/files/instruments/1612096691.mp3',
    ),
  ),
  168 =>
  array (
    'word' => 'pain',
    'audio' =>
    array (
      0 => '/files/instruments/1612096702.mp3',
    ),
  ),
  169 =>
  array (
    'word' => 'faim',
    'audio' =>
    array (
      0 => '/files/instruments/1612097045.mp3',
    ),
  ),
  170 =>
  array (
    'word' => 'daim',
    'audio' =>
    array (
      0 => '/files/instruments/1612097055.mp3',
    ),
  ),
  171 =>
  array (
    'word' => 'plein',
    'audio' =>
    array (
      0 => '/files/instruments/1612097064.mp3',
    ),
  ),
  172 =>
  array (
    'word' => 'frein',
    'audio' =>
    array (
      0 => '/files/instruments/1612097074.mp3',
    ),
  ),
  173 =>
  array (
    'word' => 'peindre',
    'audio' =>
    array (
      0 => '/files/instruments/1612097085.mp3',
    ),
  ),
  174 =>
  array (
    'word' => 'syndicat',
    'audio' =>
    array (
      0 => '/files/instruments/1612097094.mp3',
    ),
  ),
  175 =>
  array (
    'word' => 'synthèse',
    'audio' =>
    array (
      0 => '/files/instruments/1612097119.mp3',
    ),
  ),
  176 =>
  array (
    'word' => 'symbole',
    'audio' =>
    array (
      0 => '/files/instruments/1612097157.mp3',
    ),
  ),
  177 =>
  array (
    'word' => 'sympathie',
    'audio' =>
    array (
      0 => '/files/instruments/1612097170.mp3',
    ),
  ),
  178 =>
  array (
    'word' => 'mon',
    'audio' =>
    array (
      0 => '',
    ),
  ),
  179 =>
  array (
    'word' => 'ombre',
    'audio' =>
    array (
      0 => '',
    ),
  ),
  180 =>
  array (
    'word' => 'nombre',
    'audio' =>
    array (
      0 => '/files/instruments/1612097184.mp3',
    ),
  ),
  181 =>
  array (
    'word' => 'un',
    'audio' =>
    array (
      0 => '/files/instruments/1612097253.mp3',
    ),
  ),
  182 =>
  array (
    'word' => 'brun',
    'audio' =>
    array (
      0 => '/files/instruments/1612097263.mp3',
    ),
  ),
  183 =>
  array (
    'word' => 'parfum',
    'audio' =>
    array (
      0 => '/files/instruments/1612097272.mp3',
    ),
  ),
  184 =>
  array (
    'word' => 'aucun',
    'audio' =>
    array (
      0 => '/files/instruments/1612097285.mp3',
    ),
  ),
  185 =>
  array (
    'word' => 'humble',
    'audio' =>
    array (
      0 => '/files/instruments/1612097295.mp3',
    ),
  ),
  186 =>
  array (
    'word' => 'allié',
    'audio' =>
    array (
      0 => '/files/instruments/1612097304.mp3',
    ),
  ),
  187 =>
  array (
    'word' => 'atelier',
    'audio' =>
    array (
      0 => '/files/instruments/1612097315.mp3',
    ),
  ),
  188 =>
  array (
    'word' => 'étudiant',
    'audio' =>
    array (
      0 => '/files/instruments/1612097325.mp3',
    ),
  ),
  189 =>
  array (
    'word' => 'travailler',
    'audio' =>
    array (
      0 => '/files/instruments/1612097335.mp3',
    ),
  ),
  190 =>
  array (
    'word' => 'oreille',
    'audio' =>
    array (
      0 => '/files/instruments/1612097346.mp3',
    ),
  ),
  191 =>
  array (
    'word' => 'payer',
    'audio' =>
    array (
      0 => '/files/instruments/1612097420.mp3',
    ),
  ),
  192 =>
  array (
    'word' => 'envoyer',
    'audio' =>
    array (
      0 => '/files/instruments/1612097429.mp3',
    ),
  ),
  193 =>
  array (
    'word' => 'essuyer',
    'audio' =>
    array (
      0 => '/files/instruments/1612097439.mp3',
    ),
  ),
  194 =>
  array (
    'word' => 'soleil',
    'audio' =>
    array (
      0 => '/files/instruments/1612097449.mp3',
    ),
  ),
  195 =>
  array (
    'word' => 'seuil',
    'audio' =>
    array (
      0 => '/files/instruments/1612097459.mp3',
    ),
  ),
  196 =>
  array (
    'word' => 'travail',
    'audio' =>
    array (
      0 => '/files/instruments/1612097471.mp3',
    ),
  ),
  197 =>
  array (
    'word' => 'ouvrier',
    'audio' =>
    array (
      0 => '/files/instruments/1612097533.mp3',
    ),
  ),
  198 =>
  array (
    'word' => 'supplier',
    'audio' =>
    array (
      0 => '/files/instruments/1612097543.mp3',
    ),
  ),
  199 =>
  array (
    'word' => 'fill',
    'audio' =>
    array (
      0 => '',
    ),
  ),
  200 =>
  array (
    'word' => 'brillant',
    'audio' =>
    array (
      0 => '/files/instruments/1612097555.mp3',
    ),
  ),
  201 =>
  array (
    'word' => 'piller',
    'audio' =>
    array (
      0 => '/files/instruments/1612097566.mp3',
    ),
  ),
  202 =>
  array (
    'word' => 'bien',
    'audio' =>
    array (
      0 => '/files/instruments/1612097578.mp3',
    ),
  ),
  203 =>
  array (
    'word' => 'rien',
    'audio' =>
    array (
      0 => '/files/instruments/1612097588.mp3',
    ),
  ),
  204 =>
  array (
    'word' => 'ouate',
    'audio' =>
    array (
      0 => '/files/instruments/1612097598.mp3',
    ),
  ),
  205 =>
  array (
    'word' => 'rouet',
    'audio' =>
    array (
      0 => '/files/instruments/1612097610.mp3',
    ),
  ),
  206 =>
  array (
    'word' => 'louer',
    'audio' =>
    array (
      0 => '/files/instruments/1612097619.mp3',
    ),
  ),
  207 =>
  array (
    'word' => 'toi',
    'audio' =>
    array (
      0 => '/files/instruments/1612097629.mp3',
    ),
  ),
  208 =>
  array (
    'word' => 'droit',
    'audio' =>
    array (
      0 => '/files/instruments/1612097642.mp3',
    ),
  ),
  209 =>
  array (
    'word' => 'poire',
    'audio' =>
    array (
      0 => '/files/instruments/1612097651.mp3',
    ),
  ),
  210 =>
  array (
    'word' => 'boiter',
    'audio' =>
    array (
      0 => '/files/instruments/1612097662.mp3',
    ),
  ),
  211 =>
  array (
    'word' => 'croître',
    'audio' =>
    array (
      0 => '/files/instruments/1612097671.mp3',
    ),
  ),
  212 =>
  array (
    'word' => 'coin',
    'audio' =>
    array (
      0 => '/files/instruments/1612097686.mp3',
    ),
  ),
  213 =>
  array (
    'word' => 'foin',
    'audio' =>
    array (
      0 => '/files/instruments/1612097695.mp3',
    ),
  ),
  214 =>
  array (
    'word' => 'moins',
    'audio' =>
    array (
      0 => '/files/instruments/1612098842.mp3',
    ),
  ),
  215 =>
  array (
    'word' => 'poindre',
    'audio' =>
    array (
      0 => '/files/instruments/1612098855.mp3',
    ),
  ),
  216 =>
  array (
    'word' => 'nuit',
    'audio' =>
    array (
      0 => '/files/instruments/1612098865.mp3',
    ),
  ),
  217 =>
  array (
    'word' => 'pluie',
    'audio' =>
    array (
      0 => '/files/instruments/1612098881.mp3',
    ),
  ),
  218 =>
  array (
    'word' => 'fuir',
    'audio' =>
    array (
      0 => '/files/instruments/1612098891.mp3',
    ),
  ),
)


    @endphp

@endsection
